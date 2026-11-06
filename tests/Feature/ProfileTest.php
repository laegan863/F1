<?php

use App\Models\ActivityLog;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->user = User::factory()->create([
        'name' => 'Juan Dela Cruz', 'email' => 'juan@example.test', 'role' => 'user', 'password' => 'oldpass123',
    ]);
});

it('requires sign-in', function () {
    $this->get(route('profile.show'))->assertRedirect(route('login'));
    $this->put(route('profile.password'), [])->assertRedirect(route('login'));
});

it('shows the profile page and links to it', function () {
    $this->actingAs($this->user)->get(route('profile.show'))
        ->assertOk()->assertSee('Juan Dela Cruz')->assertSee('Change password')->assertSee('Recent sign-ins');

    $this->get(route('admin.dashboard'))->assertSee(route('profile.show'));
});

it('updates name and email', function () {
    $this->actingAs($this->user)->put(route('profile.update'), ['name' => 'Juan D. Cruz', 'email' => 'juan.cruz@example.test'])
        ->assertRedirect(route('profile.show'))->assertSessionHas('success');

    expect($this->user->fresh()->name)->toBe('Juan D. Cruz')
        ->and($this->user->fresh()->email)->toBe('juan.cruz@example.test')
        ->and(ActivityLog::where('description', 'like', 'Updated own profile%')->exists())->toBeTrue();
});

it('rejects an email or name already used by someone else', function () {
    User::factory()->create(['name' => 'Taken', 'email' => 'taken@example.test', 'role' => 'user']);

    $this->actingAs($this->user)->put(route('profile.update'), ['name' => 'Taken', 'email' => 'taken@example.test'])
        ->assertSessionHasErrorsIn('profile', ['name', 'email']);

    // Keeping your own values is fine
    $this->put(route('profile.update'), ['name' => 'Juan Dela Cruz', 'email' => 'juan@example.test'])
        ->assertSessionHasNoErrors();
});

it('changes the password and keeps the user signed in', function () {
    $this->actingAs($this->user)->put(route('profile.password'), [
        'current_password' => 'oldpass123', 'password' => 'newpass456', 'password_confirmation' => 'newpass456',
    ])->assertRedirect(route('profile.show'))->assertSessionHas('success');

    expect(Hash::check('newpass456', $this->user->fresh()->password))->toBeTrue();
    $this->assertAuthenticatedAs($this->user);

    // The new password works for signing in, the old one does not
    auth()->logout(); $this->app['auth']->forgetGuards();
    $this->post(route('verify-auth'), ['email' => 'juan@example.test', 'password' => 'oldpass123'])->assertSessionHasErrors('error');
    $this->post(route('verify-auth'), ['email' => 'juan@example.test', 'password' => 'newpass456'])->assertRedirect(route('admin.dashboard'));
});

it('validates the password change', function () {
    $this->actingAs($this->user);
    $base = ['current_password' => 'oldpass123', 'password' => 'newpass456', 'password_confirmation' => 'newpass456'];

    $this->put(route('profile.password'), ['current_password' => 'wrong-one'] + $base)->assertSessionHasErrorsIn('password', 'current_password');
    $this->put(route('profile.password'), ['password_confirmation' => 'different1'] + $base)->assertSessionHasErrorsIn('password', 'password');
    $this->put(route('profile.password'), ['password' => 'short1', 'password_confirmation' => 'short1'] + $base)->assertSessionHasErrorsIn('password', 'password');
    $this->put(route('profile.password'), ['password' => 'lettersonly', 'password_confirmation' => 'lettersonly'] + $base)->assertSessionHasErrorsIn('password', 'password');
    $this->put(route('profile.password'), ['password' => 'oldpass123', 'password_confirmation' => 'oldpass123'] + $base)->assertSessionHasErrorsIn('password', 'password');

    expect(Hash::check('oldpass123', $this->user->fresh()->password))->toBeTrue();
});

it('cannot change role through the profile form', function () {
    $this->actingAs($this->user)->put(route('profile.update'), ['name' => 'Juan Dela Cruz', 'email' => 'juan@example.test', 'role' => 'admin']);
    expect($this->user->fresh()->role)->toBe('user');
});
