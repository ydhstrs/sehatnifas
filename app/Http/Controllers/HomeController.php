<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function index(){
        return view('home',[
            "title" => "Home",
            "home" => Home::all()
        ]);
    }
    public function show($slug)
    {
        return view('article',[
            "title"=> "Single Home",
            "article"=> Home::find($slug)
        ]);
    }
}
