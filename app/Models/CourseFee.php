<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseFee extends Model
{
    use HasFactory;

    protected $fillable = [
        'date', 'session', 'weekend', 'course_id'
    ];

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    public function edit($request, $id)
    {
        $ids = $request->input('id');
        $date = $request->input('date');
        $session = $request->input('session');
        $weekday = $request->input('weekday');
        if ($date) {
            for ($i = 0; $i < count($date); $i++) {
                if (!empty($ids[$i])) {
                    if (empty($date[$i])) {
                        $this->where('id', $ids[$i])->delete();
                    }
                    $this->where('id', $ids[$i])->update([
                        'date' => $date[$i],
                        'session' => $session[$i],
                        'weekend' => $weekday[$i],
                    ]);
                } else {
                    $this->create([
                        'date' => $date[$i],
                        'session' => $session[$i],
                        'weekend' => $weekday[$i],
                        'course_id' => $id,
                    ]);
                }
            }
        }
    }
}
