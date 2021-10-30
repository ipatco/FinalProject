<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseLearn extends Model
{
    use HasFactory;

    protected $fillable = [
        'text', 'course_id'
    ];

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    public function edit($request, $id)
    {
        $this->where('course_id', $id)->delete();
        if ($request->input('text')) {
            foreach ($request->input('text') as $text) {
                if (!empty(trim($text))) {
                    $this->create([
                        'text' => $text,
                        'course_id' => $id,
                    ]);
                }
            }
        }
    }
}
