<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function pricing()
    {
        return view('pages.pricing');
    }
    public function service()
    {
        return view('pages.service');
    }
    public function cycle()
    {
        return view('pages.cycle');
    }
    public function login()
    {
        return view('pages.login');
    }
}
