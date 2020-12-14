<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function Department(){
        return $this->belongsTo(Department::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Courses(){
        return $this->hasMany(Course::class);
    }
}
