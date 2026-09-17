<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;


class PageController extends Controller
{
     public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('projects.about');
    }

    public function contact()
    {
        return view('projects.contact');
    }

     public function projects()
    {
        

        return view('projects.index');
    }
}
