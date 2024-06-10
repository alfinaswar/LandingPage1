<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view("welcome");
    }
    public function about(){
        return view("about");
    }
    public function pricing(){
        return view("pricing");
    }
    public function blog()
    {
        return view("blog");
    }
    public function singleblog()
    {
        return view("single-blog");
    }
    public function contact()
    {
        return view("contact");
    }
}
