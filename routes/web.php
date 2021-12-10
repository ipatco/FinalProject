<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', 'Zoom@show');


Route::name('web.')->middleware([])->namespace('Web')->group(function () {
    Route::get('/', 'Home@index')->name('home');
    Route::get('/browse/{slug}', 'Home@category')->name('category');
    Route::get('/course/{slug}', 'Home@courseDetail')->name('detail');
    Route::get('/course/{slug}/purchase', 'Home@coursePurchase')->name('purchase');
    Route::get('/course/purchase/complete', 'Home@coursePurchased')->name('purchased');
    Route::get('/explore-courses', 'Home@exploreCourse')->name('explore');
    Route::get('/corporate-training', 'Home@corporateTraining')->name('corporate');
    Route::get('/contact', 'Home@contact')->name('contact');
    Route::get('/redirect/login', 'Home@redirectAuth')->name('redirect');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::name('user.')->middleware(['auth', 'UserAuth'])->namespace('User')->prefix('my-account')->group(function () {
    Route::get('/', 'Account@index')->name('account');
    Route::get('/attend/{meeting}', 'Account@attendMeeting')->name('account.meeting');
    Route::get('/courses', 'Account@courses')->name('account.course');
    Route::get('/transaction', 'Account@transactions')->name('account.transaction');
    Route::get('/message', 'Account@message')->name('account.message');
    Route::post('/message/send/{sender}/{receiver}', 'Account@messageSend')->name('account.message.send');
    Route::get('/setting', 'Account@setting')->name('account.setting');
    Route::post('/setting/password', 'Account@passwordUpdate')->name('account.setting.password');
    Route::get('/materials', 'Account@materials')->name('account.materials');
    Route::get('/certificates', 'Account@certificates')->name('account.certificates');
});

Route::name('admin.')->middleware(['auth', 'AdminAuth'])->namespace('Admin')->prefix('admin')->group(function () {
    Route::get('dashboard', 'Dashboard@index')->name('dashboard');

    Route::get('catelog/categories', 'Categories@index')->name('categories');
    Route::post('catelog/category/edit/{id}', 'Categories@edit')->name('categories.edit');
    Route::get('catelog/category/delete/{id}', 'Categories@delete')->name('categories.delete');
    Route::post('catelog/categories/save', 'Categories@save')->name('categories.save');

    Route::get('catelog/courses', 'Courses@index')->name('courses');
    Route::get('catelog/courses/create', 'Courses@create')->name('courses.add');
    Route::get('catelog/course/{id}', 'Courses@edit')->name('courses.edit');
    Route::post('catelog/courses/save', 'Courses@save')->name('courses.save');
    Route::post('catelog/courses/update/{id}', 'Courses@update')->name('courses.update');
    Route::get('catelog/courses/delete/{id}', 'Courses@deleteCourse')->name('courses.delete');
    Route::post('catelog/courses/update/eligibility/{id}', 'Courses@updateEligibility')->name('courses.update.eligibility');
    Route::post('catelog/courses/update/learn/{id}', 'Courses@updateWhatYouLearn')->name('courses.update.learn');
    Route::post('catelog/courses/update/benifit/edit/{id}', 'Courses@updateBenifitEdit')->name('courses.update.benifit.edit');
    Route::post('catelog/courses/update/benifit/save/{id}', 'Courses@updateBenifitSave')->name('courses.update.benifit.save');
    Route::get('catelog/courses/update/benifit/delete/{id}', 'Courses@updateBenifitDelete')->name('courses.update.benifit.delete');
    Route::post('catelog/courses/update/skill/{id}', 'Courses@updateSkill')->name('courses.update.skill');
    Route::post('catelog/courses/update/tools/{id}', 'Courses@updateTools')->name('courses.update.tools');
    Route::get('catelog/courses/update/tools/delete/{id}', 'Courses@updateToolsDelete')->name('courses.update.tools.delete');
    Route::post('catelog/courses/update/module/{id}', 'Courses@updateModule')->name('courses.update.module');
    Route::post('catelog/courses/update/faq/{id}', 'Courses@updateFaq')->name('courses.update.faq');
    Route::post('catelog/courses/update/fee/{id}', 'Courses@updateFee')->name('courses.update.fee');

    Route::get('users', 'Users@index')->name('users');
    Route::get('user/{id}', 'Users@index')->name('users');
    Route::get('instructors', 'Users@index')->name('users');
    Route::get('instructor/{id}', 'Users@index')->name('users');
    Route::get('meeting', 'Users@index')->name('users');
    Route::get('meeting/{id}', 'Users@index')->name('users');
    Route::post('meeting/save', 'Users@index')->name('users');
});


Route::name('instructor.')->middleware(['auth'])->namespace('Instructor')->prefix('i')->group(function () {
    Route::get('/', 'Profile@index')->name('profile');
    Route::post('/profile', 'Profile@profileUpdate')->name('profile.profile');
    Route::post('/password', 'Profile@changePassword')->name('profile.password');

    Route::get('/meeting', 'Meetings@meeting')->name('meeting');
    Route::post('/meeting/save', 'Meetings@meetingSave')->name('meeting.create');
    Route::get('/attend/{meeting}', 'Meetings@joinMeeting')->name('join.meeting');

    Route::get('/students', 'Students@index')->name('students');
    Route::get('/students/send-file/{student}', 'Students@sendFile')->name('students.file');
    Route::post('/students/save-file/{student}', 'Students@uploadFile')->name('students.file.upload');
    Route::get('/message', 'Messages@index')->name('message');
    Route::post('/message/send/{receiver}', 'Messages@send')->name('message.send');
});

// Route::prefix('socket')->group(function () {
//     Route::get('/', 'Socket@index')->name('socket');
// });

// Route::jitsi();
require __DIR__ . '/auth.php';
