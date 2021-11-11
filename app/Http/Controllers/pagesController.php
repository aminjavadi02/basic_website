<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function getWelcome()
    {
        return view('welcome');
    }
    public function getHome()
    {
        return view('home');
    }
    public function getContact()
    {
        return view('contact');
    }
    public function getAbout()
    {
        return view('about');
    }
}
