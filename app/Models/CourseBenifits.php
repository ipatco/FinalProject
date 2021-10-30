<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseBenifits extends Model
{
    use HasFactory;

    protected $fillable = [
        'text', 'type', 'icon_img', 'course_id'
    ];

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}
