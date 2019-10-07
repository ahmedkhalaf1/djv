<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    
	public function about(){
		$data = [
	'title'=>'follwing about page provider',
			'about'=>['shose','bags','accessories']
		];
		return view ('pages.about')->with($data);
	}
	public function index(){
		$index = 'Hello Index';
		return view ('pages.home',compact('index'));
	}
	public function services(){
		$services ='follwing services page';
		return view ('pages.services',['title'=>$services]);
	}
}
