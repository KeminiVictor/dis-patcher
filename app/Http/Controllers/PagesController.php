<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    

    function index(){

        return view("home");
    }

    function about(){
        return view("about");
    }

    function getQuote(){
        return view("quote");
    }
    function tracking(){
        return view("tracking");
    }



    function contact(){
        return view("contact");
    }

    function pricing(){
        return view("pricing");
    }
}
