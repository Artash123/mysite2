<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index(){
        return view('Quiz/quiz');
    }
    public function add_application(){
        return view('Quiz/add_application_quiz');
    }
}
