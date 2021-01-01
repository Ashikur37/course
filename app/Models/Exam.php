<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function Questions(){
        return $this->hasMany(ExamQuestion::class);
    }
    public function Course(){
        return $this->belongsTo(Course::class);
    }
}
