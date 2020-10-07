<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class OrmPractice extends Controller
{
    public function insert(){
        $data = [
		'postname' => 'Welcovvme tod dhaka',
		'desctiption' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum dignissimos assumenda maiores, amet laboriosam reprehenderit dicta autem ex fugiat impedit quaerat aspernatur illo ipsa enim a delectus itaque beatae iste!',
		'user_id' => 1,
		'status' => 1
	];  
       Post::insert($data);
    }
    public function get_post($id){
        //$z =  Post::where('post_id' ,'$id')->get();
        $z = Post::findOrFail($id);
    dd($z);
    }
}