<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
    	//$people = ['paul','fred','david',]
			return view('welcome');
    	//return view('welcome', compact('people'));
    }

    public function about()
    {
    	//$people = ['one','two','three',]
    		return view('Pages.about');
    	//return view('pages.about', compact('people'));
    }
}
