<?php

use App\Models\ActivityLog;
use App\Models\SupportMessage;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->admin = User::factory()->create(['name' => 'Admin One', 'email' => 'admin@example.test', 'role' => 'admin']);
    $this->user = User::factory()->create(['name' => 'Encoder One', 'email' => 'encoder@example.test', 'role' => 'user']);
});

// --- Middleware -----------------------------------------------------------

it('sends guests to the login page and signed-in users away from it', function () {
    $this->get(route('admin.dashboard'))->assertRedirect(route('login'));
    $this->get(route('login'))->assertOk();

    $this->actingAs($this->user)->get(route('login'))->assertRedirect(route('admin.dashboard'));
    $this->get(route('forgot'))->assertRedirect(route('admin.dashboard'));
});

// --- Report codes ---------------------------------------------------------

it('rejects report codes that are not on the list', function (string $code) {
    $this->actingAs($this->user)
        ->get(route('generate-report', ['code' => $code]))
        ->assertRedirect()
        ->assertSessionHasErrors('code');
})->with(['', 'rf-9z', '../app', 'admin.files.users', 'rf-1a.x']);

it('accepts every listed report code', function () {
    foreach (\App\Http\Controllers\AdminController::REPORT_CODES as $code) {
        expect(view()->exists('reports.' . strtolower($code)))->toBeTrue("Missing view for {$code}");
    }

    $this->actingAs($this->user)
        ->get(route('generate-report', ['code' => 'rf-1a', 'year_from' => 2026, 'year_to' => 2026, 'month_from' => 1, 'month_to' => 12]))
        ->assertSessionHasNoErrors();
});

// --- Renamed routes -------------------------------------------------------

it('forwards the old misspelled page URLs to the corrected ones', function (string $old, string $route) {
    $this->actingAs($this->user)
        ->get("{$old}?hospitalID=H-1")
        ->assertStatus(301)
        ->assertRedirect(route($route) . '?hospitalID=H-1');
})->with([
    ['/form2/cancer-diagnose-outome', 'form2.sixpage'],
    ['/form3/cancer-diagnose-outome', 'form3.secondpage'],
]);

it('serves the corrected route URLs', function () {
    expect(route('submit-demographic-profile', absolute: false))->toBe('/submit-demographic-profile')
        ->and(route('store.radiotherapy', absolute: false))->toBe('/store-radiotherapy')
        ->and(route('store.other-therapy', absolute: false))->toBe('/store-other-therapy')
        ->and(route('store.financial-support', absolute: false))->toBe('/store-financial-support')
        ->and(route('form2.sixpage', absolute: false))->toBe('/form2/cancer-diagnose-outcome')
        ->and(route('form3.secondpage', absolute: false))->toBe('/form3/cancer-diagnose-outcome');
});

// --- Activity logging -----------------------------------------------------

it('logs support messages being sent, answered and deleted', function () {
    $this->actingAs($this->user)->post(route('support.store'), ['subject' => 'Cannot print', 'message' => 'Form 2 print is blank'])
        ->assertSessionHas('success');
    $message = SupportMessage::firstOrFail();

    $this->actingAs($this->admin)->post(route('admin.support-messages.respond', $message->id), ['response' => 'Fixed'])
        ->assertRedirect(route('admin.support-messages'));
    $this->delete(route('admin.support-messages.delete', $message->id))->assertSessionHas('success');

    expect(ActivityLog::where('description', 'like', 'Sent support message%')->where('user_id', $this->user->id)->exists())->toBeTrue()
        ->and(ActivityLog::where('description', 'like', 'Responded to support message%')->where('user_id', $this->admin->id)->exists())->toBeTrue()
        ->and(ActivityLog::where('description', 'like', 'Deleted support message%')->where('user_id', $this->admin->id)->exists())->toBeTrue();
});

it('logs activity log cleanups', function () {
    ActivityLog::create(['user_id' => $this->admin->id, 'action' => 'login', 'description' => 'old'])
        ->forceFill(['created_at' => now()->subDays(100)])->save();

    $this->actingAs($this->admin)->post(route('admin.activity-logs.cleanup'), ['days' => 30])->assertSessionHas('success');

    expect(ActivityLog::where('description', 'old')->exists())->toBeFalse()
        ->and(ActivityLog::where('description', 'like', 'Cleaned up 1 activity log(s)%')->exists())->toBeTrue();
});
