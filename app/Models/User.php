<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        'department_id',
        'batch',
        'roll'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function Teacher(){
        return $this->hasOne(Teacher::class);
    }
    public function Department(){
        return $this->belongsTo(Department::class);
    } 
    public function studentExams(){
        return $this->belongsTo(StudentExam::class);
    } 
    public static function canExam($course){
        if(StudentExam::where('user_id',auth()->user()->id)->where('course_id',$course)->first()){
            return false;
        }
        return true;
    }
    //student_exams
}
