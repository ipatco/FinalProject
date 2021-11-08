<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCertificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'name',
        'image',
        'user_id',
        'issued_by',
        'issued_date',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
