<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function about(){
        // return view("pages/about");
        $name= "悟空";
        $js="<script>alert('hi')</script>";
        return view("pages.about" ,['name'=>$name , 'js'=>$js]);
        // return "Its about!!!";
    }
    //
}
