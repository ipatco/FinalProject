<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\CoursePurchase;
use App\Models\Transaction;
use App\View\Components\CategoryMenu;
use Illuminate\Http\Request;
use Session;
use Exception;
use Illuminate\Support\Facades\Auth;
use Razorpay\Api\Api;

class Home extends Controller
{
    public function index()
    {
        $categories = Category::limit(8)->get();
        $courses = Course::orderByDesc('id')->get();
        // dd($courses);
        return view('web.home', compact('courses', 'categories'));
    }

    public function category()
    {
        return view('web.category');
    }

    public function courseDetail($slug)
    {
        $course = (new Course())->with('courseEligibility', 'courseModule', 'courseBenifits', 'courseFeature', 'courseFee', 'courseLearn', 'courseSkill', 'courseTool', 'careerService', 'faq')->where('slug', $slug)->get()->first();
        // dd($course);
        return view('web.detail', compact('course'));
    }

    public function exploreCourse()
    {
        $courses = (new Course())->paginate(10);
        // dd($courses);
        return view('web.explore', compact('courses'));
    }

    public function corporateTraining()
    {
        return view('web.corporate-training');
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function coursePurchase($slug)
    {
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $course = (new Course())->where('slug', $slug)->get()->first();
        $order  = $api->order->create([
            'receipt'         => 'order_' . rand() . '_' . strtotime(date('YmdHis')),
            'amount'          => $course->price * 100,
            'currency'        => 'INR',
            'notes'            => [
                'course_id' => $course->id,
                'user_id' => Auth::user()->id,
                'course' => $course->title,
                'name' => Auth::user()->name
            ]
        ]);
        // dd($order);
        return view('web.purchase', compact('course', 'order'));
    }

    public function coursePurchased(Request $request)
    {
        $input = $request->all();
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        if (count($input)  && !empty($input['razorpay_payment_id'])) {
            // try {
            $response = $api->payment->fetch($input['razorpay_payment_id']);
            // dd($response);
            $transaction = new Transaction();
            $transaction->amount = $response->currency . ' ' . ($response->amount / 100);
            $transaction->order_id = $request->input('razorpay_order_id');
            $transaction->payment_id = $response->id;
            $transaction->signature = $request->input('razorpay_signature');
            $transaction->verified = 'verified';
            $transaction->method = 'Razorpay: ' . $response->method;
            $transaction->course_id = $request->input('course_id');
            $transaction->user_id = Auth::user()->id;
            $transaction->save();

            $course = new CoursePurchase();
            $course->course_id = $request->input('course_id');
            $course->user_id = Auth::user()->id;
            $course->instructor_id = 1;
            $course->note = json_encode($response);
            $course->save();
            // } catch (Exception $e) {
            //     Session::put('error', $e->getMessage());
            //     return redirect()->back();
            // }
        }
        Session::put('success', 'Payment successful');
        return redirect()->route('user.account.course');
    }

    public function redirectAuth()
    {
        $role = Auth::user()->role;
        if ($role == 'user') {
            return redirect()->route('user.account');
        } elseif ($role == 'admin') {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('web.home');
    }
}
