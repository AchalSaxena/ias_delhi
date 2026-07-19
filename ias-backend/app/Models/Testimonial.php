<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = ['course_id', 'student_name', 'review_text', 'rating', 'image_url', 'approved'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
