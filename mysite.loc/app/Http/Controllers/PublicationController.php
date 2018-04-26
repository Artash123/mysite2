<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index(){
        return view('Publications/elaboration');
    }
    public function my_publication(){
        return view('Publications/my_publications');
    }
    public function publication(){
        return view('Publications/publication');
    }
    public function delete(){
        return view('Publications/publication');
    }
}
