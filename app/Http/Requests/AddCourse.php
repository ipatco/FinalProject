<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCourse extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
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
        ];
    }
}
