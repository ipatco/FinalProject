<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CoursePurchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'note', 'course_id', 'user_id', 'instructor_id'
    ];

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function instructor()
    {
        return $this->belongsTo('App\Models\User', 'instructor_id', 'id');
    }

    public function getStudents()
    {
        // return where instructor_id = Auth::user()->id;
        return $this->select('user_id')->distinct()->with(['user'])->where('instructor_id', '=', Auth::user()->id)->get();
    }

    public function getCourses()
    {
        // only get unique courses of a user
        return $this->select('course_id')->distinct()->with(['course'])->where('instructor_id', '=', Auth::user()->id)->get();
    }
}
