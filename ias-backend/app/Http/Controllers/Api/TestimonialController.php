<?php

namespace App\Http\Controllers\Api;

use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::where('approved', true)
                                    ->with('course')
                                    ->latest()
                                    ->get();
        
        return response()->json(['data' => $testimonials]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_id' => 'required|exists:courses,id',
            'student_name' => 'required|string|min:2',
            'review_text' => 'required|string|min:10',
            'rating' => 'required|integer|between:1,5',
            'image_url' => 'nullable|url',
        ]);

        $testimonial = Testimonial::create(array_merge($validated, ['approved' => false]));
        
        return response()->json([
            'message' => 'Thank you for your testimonial. It will be reviewed and published soon.',
            'data' => $testimonial
        ], Response::HTTP_CREATED);
    }

    public function indexAdmin()
    {
        $testimonials = Testimonial::with('course')->latest()->get();
        
        return response()->json(['data' => $testimonials]);
    }

    public function update(Request $request, string $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $validated = $request->validate([
            'approved' => 'sometimes|boolean',
            'student_name' => 'sometimes|string|min:2',
            'review_text' => 'sometimes|string|min:10',
            'rating' => 'sometimes|integer|between:1,5',
        ]);

        $testimonial->update($validated);
        
        return response()->json(['data' => $testimonial]);
    }

    public function destroy(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        
        return response()->noContent();
    }
}
