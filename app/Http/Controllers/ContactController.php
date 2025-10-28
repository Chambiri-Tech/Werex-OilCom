<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:2000',
        ]);

        // Save to database
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Send email (optional)
        Mail::raw("New message from: {$request->name} ({$request->email})\n\n{$request->message}", function ($msg) use ($request) {
            $msg->to('your-email@example.com')
                ->subject('New Contact Form Message');
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
