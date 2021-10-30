<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'course_id'
    ];

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    public function edit($request, $id)
    {
        $ids = $request->input('id');
        $title = $request->input('question');
        $description = $request->input('answer');
        if ($title) {
            for ($i = 0; $i < count($title); $i++) {
                if (!empty($ids[$i])) {
                    if (empty($title[$i])) {
                        $this->where('id', $ids[$i])->delete();
                    }
                    $this->where('id', $ids[$i])->update([
                        'title' => $title[$i],
                        'description' => $description[$i],
                        'course_id' => $id,
                    ]);
                } else {
                    $this->create([
                        'title' => $title[$i],
                        'description' => $description[$i],
                        'course_id' => $id,
                    ]);
                }
            }
        }
    }
}
