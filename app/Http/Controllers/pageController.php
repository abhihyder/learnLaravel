<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// to create controller write "php artisan make:controller controllerName" in git or cmd.
class pageController extends Controller
{
    public function about(){
        return view('pages.about'); // return view means we are in view folder. ('pages.about') means path of file which we wanna show. here pages is folder and about is file inside pages folder.
    }
    // public function students(){
    //     return view('pages.student.student');
    // }
    public function contact(){
        return view('pages.contact');
    }
}
