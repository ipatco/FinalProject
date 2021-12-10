<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCourse;
use App\Http\Requests\EditCourse;
use App\Models\Category;
use App\Models\Course;
use App\Models\CourseEligibility;
use App\Models\CourseBenifits;
use App\Models\CourseFee;
use App\Models\CourseLearn;
use App\Models\CourseModule;
use App\Models\CourseSkill;
use App\Models\CourseTool;
use App\Models\Faq;
use Illuminate\Http\Request;
use JsValidator;

class Courses extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.manage', compact('courses'));
    }

    public function create()
    {
        $request = new AddCourse;
        $validator = JsValidator::make($request->rules())->__toString();
        $categories = Category::all();
        return view('admin.courses.create')->with(['validator' => $validator, 'categories' => $categories]);
    }

    public function save(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|min:3',
            'slug' => 'required|unique:courses,slug',
            'description' => 'required|min:3',
            'cover_img' => 'required|unique:courses',
            'certification' => 'required|min:3',
            'certificate_img' => 'required|unique:courses',
            'price' => 'required|numeric',
            'curriculum' => 'required',
            'status' => 'required',
            'category' => 'required',
        ]);

        $cover_img = $request->file('cover_img')->store('uploads/course');
        $certificate_img = $request->file('certificate_img')->store('uploads/course/certificate');

        $course = new Course;
        $course->title = $request->title;
        $course->slug = $request->slug;
        $course->description = $request->description;
        $course->preview_video = $request->preview_video;
        $course->cover_img = $cover_img;
        $course->certification = $request->certification;
        $course->certificate_img = $certificate_img;
        $course->price = $request->price;
        $course->curriculum = $request->curriculum;
        $course->status = $request->status;
        $course->category_id = $request->category;
        $course->save();

        return redirect()->route('admin.courses');
    }

    public function edit($id)
    {
        $request = new EditCourse;
        $categories = Category::all();
        $course = (new Course())->with('courseEligibility', 'courseModule', 'courseBenifits', 'courseFeature', 'courseFee', 'courseLearn', 'courseSkill', 'courseTool', 'careerService', 'faq', 'category')->find($id);
        $validator = JsValidator::make($request->rules())->__toString();
        return view('admin.courses.edit', compact('validator', 'course', 'categories'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'title' => 'required|min:3',
        //     'description' => 'required|min:3',
        //     'preview_video' => 'required|min:3',
        //     'certification' => 'required|min:3',
        //     'price' => 'required|numeric',
        //     'curriculum' => 'required',
        //     'status' => 'required',
        //     // 'category' => 'required',
        // ]);

        $cover_img = $request->input('cover_img_old');
        if ($request->hasFile('cover_img')) {
            $cover_img = $request->file('cover_img')->store('uploads/course');
        }

        $certificate_img = $request->input('certificate_img_old');
        if ($request->hasFile('certificate_img')) {
            $certificate_img = $request->file('certificate_img')->store('uploads/course/certificate');
        }

        $course = Course::find($id);
        $course->title = $request->title;
        $course->slug = $request->slug;
        $course->description = $request->description;
        $course->preview_video = $request->preview_video;
        $course->cover_img = $cover_img;
        $course->certification = $request->certification;
        $course->certificate_img = $certificate_img;
        $course->price = $request->price;
        $course->curriculum = $request->curriculum;
        $course->status = $request->status;
        $course->category_id = $request->category;
        $course->requirement = $request->requirement;
        $course->features = $request->features;
        $course->offer_price = $request->offer_price;
        $course->discount_text = $request->discount_text;
        $course->offer_ends = $request->offer_ends;

        $course->save();
        return redirect()->back();
    }

    public function updateEligibility(Request $request, $id)
    {
        CourseEligibility::where('course_id', $id)->delete();
        if ($request->input('text')) {
            foreach ($request->input('text') as $text) {
                if (!empty(trim($text))) {
                    CourseEligibility::create([
                        'text' => $text,
                        'course_id' => $id,
                    ]);
                }
            }
        }
        return redirect()->back();
    }

    public function updateWhatYouLearn(Request $request, $id)
    {
        (new CourseLearn())->edit($request, $id);
        return redirect()->back();
    }

    public function updateBenifitSave(Request $request, $id)
    {
        if ($request->input('text')) {
            $icon_img = 'default.png';
            if ($request->hasFile("icon_img")) {
                $icon_img = $request->file('icon_img')->store('uploads/course/benifits');
            }
            CourseBenifits::create([
                'text' => $request->input('text'),
                'type' => $request->input('type'),
                'icon_img' => $icon_img,
                'course_id' => $id,
            ]);
        }
        return redirect()->back();
    }

    public function updateBenifitEdit(Request $request, $id)
    {
        $mId = $request->input('id');
        if ($request->input('text')) {
            $icon_img = $request->input('icon_img_old');
            if ($request->hasFile("icon_img")) {
                $icon_img = $request->file('icon_img')->store('uploads/course/benifits');
            }
            CourseBenifits::where('id', $mId)->update([
                'text' => $request->input('text'),
                'type' => $request->input('type'),
                'icon_img' => $icon_img,
            ]);
        }
        return redirect()->back();
    }

    public function updateSkill(Request $request, $id)
    {
        (new CourseSkill())->edit($request, $id);
        return redirect()->back();
    }

    public function updateTools(Request $request, $id)
    {
        (new CourseTool())->upload($request, $id);
        return redirect()->back();
    }

    public function updateFaq(Request $request, $id)
    {
        (new Faq())->edit($request, $id);
        return redirect()->back();
    }

    public function updateModule(Request $request, $id)
    {
        (new CourseModule())->edit($request, $id);
        return redirect()->back();
    }

    public function updateFee(Request $request, $id)
    {
        (new CourseFee())->edit($request, $id);
        return redirect()->back();
    }

    public function updateBenifitDelete($id)
    {
        CourseBenifits::where('id', $id)->delete();
        return redirect()->back();
    }

    public function updateToolsDelete($id)
    {
        CourseTool::where('id', $id)->delete();
        return redirect()->back();
    }

    public function deleteCourse($id)
    {
        Course::find($id)->delete();
        return redirect()->back();
    }
}
