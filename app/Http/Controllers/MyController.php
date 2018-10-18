<?php

namespace App\Http\Controllers;


class MyController extends Controller
{
    public function About()
    {
        return view('about');
    }
    
    public function Contact()
    {
        return view('contact');
    }
    
    public function Education()
    {
        return view('education');
    }
    
    public function Experience()
    {
        return view('experience');
    }
    
    public function Index()
    {
        return view('index');
    }
    
    public function Projects()
    {
        return view('projects');
    }
    
    public function Skills()
    {
        return view('skills');
    }
}

