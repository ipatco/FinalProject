<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\CoursePurchase;
use App\Models\Meeting;
use App\Models\User;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;

class Meetings extends Controller
{
    public function meeting()
    {
        $courses = (new CoursePurchase())->getCourses();
        $students = (new CoursePurchase())->getStudents();
        // dd($courses);
        $meetings = Meeting::with(['user', 'course'])->where('instructor_id', auth()->user()->id)->get();
        return view('instructor.meeting', compact('meetings', 'students', 'courses'));
    }

    public function meetingSave()
    {
        $data = request()->validate([
            'course_id' => 'required',
            'user_id' => 'required'
        ]);
        $data['meeting_id'] = $this->generateRandomString() . '-' . $this->generateRandomString() . '-' . $this->generateRandomString();
        $data['instructor_id'] = auth()->user()->id;
        $data['status'] = '0';
        Meeting::create($data);
        return redirect()->back()->with('success', 'Meeting created successfully');
    }

    public function generateRandomString($num = 5)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $num; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function joinMeeting($room)
    {
        $meeting = Meeting::where('meeting_id', $room)->first();
        // $meeting->status = '1';
        // $meeting->save();
        return view('meeting', compact('meeting'));
    }

    public function generateJwt($user, $room = '*')
    {
        $user = collect([
            'id' => $user->getKey(),
            'name' => $user->getJitsiName(),
            'email' => $user->getJitsiEmail(),
            'avatar' => asset('assets/user.jpg'),
        ]);
        $payload = [
            'iss' => config('laravel-jitsi.id'),
            'aud' => 'jitsi',
            'sub' => config('laravel-jitsi.domain'),
            'exp' => now()->addHours(4)->timestamp,
            'room' => $room,
            "moderator" => true,
            'context' => [
                'user' => $user->filter()->all(),
            ]
        ];
        // dd($payload);

        return JWT::encode($payload, config('laravel-jitsi.secret'));
    }
}
