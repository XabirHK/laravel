<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home(){
    	$people=['Zabir','Haider','Khan'];
    	return view('welcome', compact('people'));
    }

    	public function about(){
    		$pageMsg='This is About page Created with Method in Controller';
    		return view('pages.about', compact('pageMsg'));
    	    	
    	    }
}