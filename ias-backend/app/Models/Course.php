<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'description', 'category', 'instructor', 'price', 'thumbnail_url', 'duration_hours', 'level'];

    public function inquiries()
    {
        return $this->hasMany(Inquiry::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }
}
