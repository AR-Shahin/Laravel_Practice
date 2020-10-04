<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site extends Controller
{
    public function index(){
        $this->data = [
            "name" => "Shahin",
            "phone" => +880175410439,
            "langs" => ['PHP','Python']
        ];
        return view('home.index',$this->data);
    }
    public function about()
    {
    	return view('about.about');
    }
}
