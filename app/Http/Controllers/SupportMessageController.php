<?php

namespace App\Http\Controllers;

use App\Models\SupportMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupportMessageController extends Controller
{
    /**
     * Display the support form for users
     */
    public function create()
    {
        return view('support.create');
    }

    /**
     * Store a new support message from user
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        SupportMessage::create([
            'user_id' => Auth::id(),
            'subject' => $request->subject,
            'message' => $request->message,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Your support message has been sent successfully. We will respond as soon as possible.');
    }

    /**
     * Display all support messages for admin
     */
    public function index()
    {
        $messages = SupportMessage::with('user')
            ->orderBy('status', 'asc')
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        $pendingCount = SupportMessage::where('status', 'pending')->count();

        return view('admin.files.support-messages', compact('messages', 'pendingCount'));
    }

    /**
     * Display a specific support message
     */
    public function show($id)
    {
        $message = SupportMessage::with('user')->findOrFail($id);
        
        // Mark as read if it's pending
        if ($message->status === 'pending') {
            $message->update(['status' => 'read']);
        }

        return view('admin.files.support-message-detail', compact('message'));
    }

    /**
     * Store admin response to a support message
     */
    public function respond(Request $request, $id)
    {
        $request->validate([
            'response' => 'required|string|max:5000',
        ]);

        $message = SupportMessage::findOrFail($id);
        $message->update([
            'response' => $request->response,
            'status' => 'resolved',
            'responded_at' => now(),
        ]);

        return redirect()->route('admin.support-messages')->with('success', 'Response sent successfully.');
    }

    /**
     * Display user's own support messages
     */
    public function myMessages()
    {
        $messages = SupportMessage::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('support.my-messages', compact('messages'));
    }

    /**
     * Delete a support message (admin only)
     */
    public function destroy($id)
    {
        $message = SupportMessage::findOrFail($id);
        $message->delete();

        return redirect()->back()->with('success', 'Support message deleted successfully.');
    }
}
