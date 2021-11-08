<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'instructor_id',
        'meeting_id',
        'course_id',
        'student_in',
        'student_out'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function instructor()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}
