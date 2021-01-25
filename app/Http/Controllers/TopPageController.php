<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopPageController extends Controller
{
  public function home()
    {
        return view('home.index');
    }    

  
    public function info()
    {
        return view('info.index');
    }   

    public function first_time()
    {
        return view('first_time.index');
    } 

    public function question()
    {
        return view('question.index');
    }

    public function Contact()
    {
        return view('Contact.index');
    }
}

