<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;


class PageController extends Controller
{
    public function contact(){
        return view('front.contact');
    }
    public function service(){
        return view('front.service');
    }
    public function teacher(){
        return view('front.teacher');
    }
    public function academic(){
        return view('front.academic');
    }
}