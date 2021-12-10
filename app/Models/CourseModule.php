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
                    $module = CourseModule::find($ids[$i]);
                    $module->title = $title[$i];
                    $module->description = $description[$i];
                    $module->img = $img;
                    $module->save();
                } else {
                    $img = $file[$i]->store('uploads/course/modules');
                    $module = new CourseModule();
                    $module->title = $title[$i];
                    $module->description = $description[$i];
                    $module->img = $img;
                    $module->course_id = $id;
                    $module->save();
                }
            }
        }
    }
}
