<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role',
        'address',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function course_purchase()
    {
        return $this->belongsTo('App\Models\CoursePurchase');
    }

    public function course_purchase_instructor()
    {
        return $this->belongsTo('App\Models\CoursePurchase', 'id', 'instructor_id');
    }

    public function message_sender()
    {
        return $this->belongsTo('App\Models\Message', 'id', 'sender_id');
    }

    public function message_receiver()
    {
        return $this->belongsTo('App\Models\Message', 'id', 'receiver_id');
    }
}
