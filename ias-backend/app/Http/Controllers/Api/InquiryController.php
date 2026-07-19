<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class InquiryController extends Controller
{
    public function index()
    {
        return response()->json(['data' => Inquiry::with('course')->latest()->get()]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_id' => 'nullable|exists:courses,id',
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|min:10|max:30',
            'message' => 'required|string|min:5|max:2000',
        ]);

        $inquiry = Inquiry::create([...$validated, 'status' => 'new']);
        $this->sendTelegramNotification($inquiry->load('course'));

        return response()->json([
            'message' => 'Thank you for your inquiry. We will contact you soon.',
            'data' => $inquiry,
        ], Response::HTTP_CREATED);
    }

    public function show(string $id)
    {
        return response()->json(['data' => Inquiry::with('course')->findOrFail($id)]);
    }

    public function update(Request $request, string $id)
    {
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->update($request->validate(['status' => 'sometimes|in:new,contacted,enrolled']));

        return response()->json(['data' => $inquiry]);
    }

    public function destroy(string $id)
    {
        Inquiry::findOrFail($id)->delete();

        return response()->noContent();
    }

    private function sendTelegramNotification(Inquiry $inquiry): void
    {
        $token = config('services.telegram.bot_token');
        $chatId = config('services.telegram.chat_id');

        if (!$token || !$chatId) {
            return;
        }

        $message = "New inquiry received\n\n"
            . "Name: {$inquiry->name}\nEmail: {$inquiry->email}\nPhone: {$inquiry->phone}\n"
            . 'Course: '.($inquiry->course?->name ?? 'Not specified')."\nMessage: {$inquiry->message}";

        try {
            Http::timeout(5)->post("https://api.telegram.org/bot{$token}/sendMessage", [
                'chat_id' => $chatId,
                'text' => $message,
            ])->throw();
        } catch (\Throwable $exception) {
            Log::warning('Telegram inquiry notification failed.', ['exception' => $exception->getMessage()]);
        }
    }
}
