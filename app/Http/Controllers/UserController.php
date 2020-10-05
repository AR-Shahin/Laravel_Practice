<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }
    public function adduser(){
        return view('user.adduser');
    }
    public function store(){
        return 'user stored';
    }
    public function param($id){
        return 'Param id '.$id;
    }
     public function mulparam($id,$em = 'def@gmil.com'){
        return 'Param id '.$id ." ".$em;
    }
}
