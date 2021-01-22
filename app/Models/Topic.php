<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function Chapter(){
        return $this->belongsTo(Chapter::class);
    }
    public function Exercises(){
        return $this->hasMany(Exercise::class);
    }
    public function Comments(){
        return $this->hasMany(Comment::class);
    }
}
