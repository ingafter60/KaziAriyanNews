<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
   public function about(){
   	// return view('about', ['fname'=>'I Nyoman', 'lname'=>'Gurnitha']);
   	
   	$fname = 'I Nyoman';
   	$lname = 'Gurnitha';
   	return view('front.layout.master', compact('fname', 'lname'));
   }
}
