<?php

namespace App\Http\Controllers\Api;

use App\Models\NewsletterSubscriber;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ]);

        $subscriber = NewsletterSubscriber::create($validated);
        
        return response()->json([
            'message' => 'Thank you for subscribing to our newsletter!',
            'data' => $subscriber
        ], Response::HTTP_CREATED);
    }

    public function index()
    {
        $subscribers = NewsletterSubscriber::latest()->get();
        
        return response()->json(['data' => $subscribers]);
    }

    public function destroy(string $id)
    {
        $subscriber = NewsletterSubscriber::findOrFail($id);
        $subscriber->delete();
        
        return response()->noContent();
    }
}
