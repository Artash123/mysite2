<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        return view('Course/course');
    }
    public function addCourse(){
        return view('Course/course');
    }
}
