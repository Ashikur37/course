<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentExam extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function Questions(){
        return $this->hasMany(StudentExamQuestion::class);
    } 
    public function correctAnswer(){
        return $this->hasMany(StudentExamQuestion::class)->whereColumn('answer','correct_answer');
    } 
    public function course(){
        return $this->belongsTo(Course::class);
    }
}
