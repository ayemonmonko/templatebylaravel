<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageContro extends Controller
{
    public function homefun($value='')
    {
    	return view('home');
    }
    public function aboutfun($value='')
    {
    	return view('about');
    }
    public function contactfun($value='')
    {
    	return view('contact');
    }
    public function samplepostfun($value='')
    {
    	return view('samplepost');
    }
}
