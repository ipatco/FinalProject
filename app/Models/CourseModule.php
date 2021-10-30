<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModule extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'course_id', 'img'
    ];

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    public function edit($request, $id)
    {
        // dd($_FILES);
        $ids = $request->input('id');
        $title = $request->input('question');
        $description = $request->input('answer');
        $file = $request->file('userfile');
        $old = $request->input('file_old');
        if ($title) {
            for ($i = 0; $i < count($title); $i++) {
                if (!empty($ids[$i])) {
                    $img = $old[$i];
                    if (isset($file[$i])) {
                        $img = $file[$i]->store('uploads/course/modules');
                    }
                    if (empty($title[$i])) {
                        $this->where('id', $ids[$i])->delete();
                    }
                    $this->where('id', $ids[$i])->update([
                        'title' => $title[$i],
                        'description' => $description[$i],
                        'file' => $img
                    ]);
                } else {
                    $img = $file[$i]->store('uploads/course/modules');
                    $this->create([
                        'title' => $title[$i],
                        'description' => $description[$i],
                        'course_id' => $id,
                        'file' => $img
                    ]);
                }
            }
        }
    }
}
