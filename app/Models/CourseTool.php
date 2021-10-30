<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTool extends Model
{
    use HasFactory;

    protected $fillable = [
        'image', 'course_id'
    ];

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    public function upload($request, $id)
    {
        if ($request->hasFile('file')) {
            // dd($request);
            foreach ($request->file('file') as $file) {
                if (!empty(trim($file))) {
                    $file = $file->store('uploads/course/tools');
                    $this->create([
                        'image' => $file,
                        'course_id' => $id,
                    ]);
                }
            }
        }
    }
}
