<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CoursePurchase;
use App\Models\Meeting;
use App\Models\Message;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Account extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        $course = CoursePurchase::where('user_id', $user)->count();
        $amount = Transaction::where('user_id', $user)->sum('amount');
        $courses = CoursePurchase::with(['course'])->where('user_id', $user)->get();
        return view('user.home', compact('course', 'amount', 'courses'));
    }

    public function courses()
    {
        $user = Auth::user()->id;
        $courses = CoursePurchase::with(['course'])->where('user_id', $user)->get();
        return view('user.course', compact('courses'));
    }

    public function transactions()
    {
        $user = Auth::user()->id;
        $transactions = Transaction::with(['course'])->where('user_id', $user)->get();
        return view('user.transaction', compact('transactions'));
    }

    public function message(Request $request)
    {
        $messages = $instructor = [];
        $user = Auth::user()->id;
        $id = $request->input('id');
        $instructors = CoursePurchase::with(['instructor'])->distinct()->where('user_id', $user)->get(['instructor_id', 'course_id']);
        if ($id > 0) {
            $instructor = User::where('id', $id)->first();
            $update_messages = Message::where('receiver_id', $user)->update(['status' => '1']);

            $messages = Message::where(function ($query) use ($user, $id) {
                return $query->where('sender_id', $user)->where('receiver_id', $id);
            })->orWhere(function ($query) use ($user, $id) {
                return $query->where('sender_id', $id)->where('receiver_id', $user);
            })->get();
        }
        // dd($instructors);
        return view('user.message', compact('instructors', 'messages', 'instructor', 'user'));
    }

    public function messageSend(Request $request, $sender, $receiver)
    {
        $message = new Message();
        $message->sender_id = $sender;
        $message->receiver_id = $receiver;
        $message->type = 'text';
        $message->message = $request->input('message');
        $message->status = '0';
        $message->save();
        return redirect()->back();
    }

    public function materials()
    {
        return view('user.material');
    }

    public function certificates()
    {
        return view('user.certificate');
    }

    public function setting()
    {
        return view('user.setting');
    }

    public function passwordUpdate(Request $request)
    {
        $validated = $request->validate([
            'password' => 'required|confirmed|min:6'
        ]);
        $id = Auth::user()->id;
        User::where('id', '=', $id)->update([
            'password' => Hash::make($request->input('password')),
        ]);
        return redirect()->back()->with('success', 'Password Has been changed');
    }

    public function attendMeeting($meeting)
    {
        if (Meeting::where('meeting_id', '=', $meeting)->get()->first()) {
            $meeting_id = $meeting;
            return view('meeting', compact('meeting_id'));
        }
        return redirect()->back();
    }
}
