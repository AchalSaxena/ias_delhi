<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\InquiryController;
use App\Http\Controllers\Api\TestimonialController;
use App\Http\Controllers\Api\NewsletterController;

// Public routes
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/inquiries', [InquiryController::class, 'store']);
Route::post('/testimonials', [TestimonialController::class, 'store']);
Route::post('/newsletter/subscribe', [NewsletterController::class, 'store']);

// Public course routes
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{id}', [CourseController::class, 'show']);

// Public testimonials (approved only)
Route::get('/testimonials', [TestimonialController::class, 'index']);

// Protected routes (authenticated admin only)
Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    // Auth
    Route::post('/auth/logout', [AuthController::class, 'logout']);
    Route::get('/auth/me', [AuthController::class, 'me']);

    // Courses (admin only)
    Route::post('/courses', [CourseController::class, 'store']);
    Route::put('/courses/{id}', [CourseController::class, 'update']);
    Route::delete('/courses/{id}', [CourseController::class, 'destroy']);

    // Inquiries (admin only)
    Route::get('/inquiries', [InquiryController::class, 'index']);
    Route::get('/inquiries/{id}', [InquiryController::class, 'show']);
    Route::patch('/inquiries/{id}', [InquiryController::class, 'update']);
    Route::delete('/inquiries/{id}', [InquiryController::class, 'destroy']);

    // Testimonials (admin only)
    Route::get('/testimonials/admin', [TestimonialController::class, 'indexAdmin']);
    Route::patch('/testimonials/{id}', [TestimonialController::class, 'update']);
    Route::delete('/testimonials/{id}', [TestimonialController::class, 'destroy']);

    // Newsletter (admin only)
    Route::get('/newsletter/subscribers', [NewsletterController::class, 'index']);
    Route::delete('/newsletter/subscribers/{id}', [NewsletterController::class, 'destroy']);
});
