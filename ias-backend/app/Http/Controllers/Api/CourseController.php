<?php

namespace App\Http\Controllers\Api;

use App\Models\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $query = Course::query();

        if ($request->has('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', "%{$searchTerm}%")
                    ->orWhere('description', 'like', "%{$searchTerm}%");
            });
        }

        $courses = $query->paginate(12);
        
        return response()->json([
            'data' => $courses->items(),
            'pagination' => [
                'total' => $courses->total(),
                'per_page' => $courses->perPage(),
                'current_page' => $courses->currentPage(),
                'last_page' => $courses->lastPage()
            ]
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3',
            'description' => 'required|string',
            'category' => 'required|string',
            'instructor' => 'required|string',
            'price' => 'required|numeric|min:0',
            'duration_hours' => 'required|integer|min:1',
            'level' => 'required|in:Beginner,Intermediate,Advanced',
        ]);

        $course = Course::create($validated);
        
        return response()->json(['data' => $course], Response::HTTP_CREATED);
    }

    public function show(string $id)
    {
        $course = Course::with(['testimonials' => fn($q) => $q->where('approved', true)])->findOrFail($id);
        
        return response()->json(['data' => $course]);
    }

    public function update(Request $request, string $id)
    {
        $course = Course::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|string|min:3',
            'description' => 'sometimes|string',
            'category' => 'sometimes|string',
            'instructor' => 'sometimes|string',
            'price' => 'sometimes|numeric|min:0',
            'duration_hours' => 'sometimes|integer|min:1',
            'level' => 'sometimes|in:Beginner,Intermediate,Advanced',
        ]);

        $course->update($validated);
        
        return response()->json(['data' => $course]);
    }

    public function destroy(string $id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        
        return response()->noContent();
    }
}
