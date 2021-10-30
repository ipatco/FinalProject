<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseEligibility extends Model
{
    use HasFactory;

    protected $fillable = [
        'text', 'course_id'
    ];

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}
