<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'preview_video',
        'cover_img',
        'certification',
        'certificate_img',
        'price',
        'curriculum',
        'status',
        'category',
        'requirement',
        'features',
        'offer_price',
        'discount_text',
        'offer_ends',
    ];

    public function courseEligibility()
    {
        return $this->hasMany('\App\Models\CourseEligibility');
    }

    public function courseBenifits()
    {
        return $this->hasMany('\App\Models\CourseBenifits');
    }

    public function courseFeature()
    {
        return $this->hasMany('\App\Models\CourseFeature');
    }

    public function courseFee()
    {
        return $this->hasMany('\App\Models\CourseFee');
    }

    public function courseLearn()
    {
        return $this->hasMany('\App\Models\CourseLearn');
    }

    public function courseModule()
    {
        return $this->hasMany('\App\Models\CourseModule');
    }

    public function courseSkill()
    {
        return $this->hasMany('\App\Models\CourseSkill');
    }

    public function courseTool()
    {
        return $this->hasMany('\App\Models\CourseTool');
    }

    public function careerService()
    {
        return $this->hasMany('\App\Models\CareerService');
    }

    public function faq()
    {
        return $this->hasMany('\App\Models\Faq');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function meeting()
    {
        return $this->hasMany('\App\Models\Meeting');
    }

    //course materials
    public function courseMaterials()
    {
        return $this->hasMany('\App\Models\CourseMaterials');
    }

    //course certificate
    public function courseCertificate()
    {
        return $this->hasMany('\App\Models\CourseCertificate');
    }
}
