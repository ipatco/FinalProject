<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseMaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'title',
        'description',
        'file',
        'user_id',
        'instructor_id',
    ];

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function instructor()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function getFiles($id)
    {
        return $this->where('user_id', $id)->where('instructor_id', auth()->user()->id)->get();
    }
}
