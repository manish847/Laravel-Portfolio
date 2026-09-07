<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('html.public.home');
    }

    public function about()
    {
        return view('html.public.about');
    }

    public function Experience()
    {
        return view('html.public.experience');
    }

    public function Skills()
    {
        return view('html.public.skills');
    }

    public function contact()
    {
        return view('html.public.contact');
    }

    public function Projects()
    {
        return view('html.public.projects');
    }

    public function Showcase()
    {
        return view('html.public.showcase');
    }
}
