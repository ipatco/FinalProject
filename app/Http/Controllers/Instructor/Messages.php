<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CoursePurchase;
use App\Models\Message;

class Messages extends Controller
{
    public function index()
    {
        $messages = Message::all();
        $students = (new CoursePurchase())->getStudents();
        return view('instructor.message', compact('students', 'messages'));
    }

    public function send($id)
    {
        // validate message
        $this->validate(request(), [
            'message' => 'required|min:5',
        ]);
        $message = new Message();
        $message->message = request('message');
        $message->sender_id = auth()->user()->id;
        $message->receiver_id = $id;
        $message->type = 'text';
        $message->status = '0';
        $message->save();

        return redirect()->back()->with('success', 'Message sent successfully');
    }
}
