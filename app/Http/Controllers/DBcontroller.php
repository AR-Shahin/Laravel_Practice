<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DBcontroller extends Controller
{
    public function display(){
        //all select
        //$res = DB::table('categories')->get();
//        $res = DB::table('products')
//            ->join('categories', 'categories.cat_id', '=', 'products.cat_id')
//            ->select('products.*', 'categories.cat_name')
//            ->where('products.pro_name', '<>', 1)
//            ->orderBy('products.pro_id', 'desc')
//            ->get();
        $res = DB::table('categories')->where('status', '<', 100)->delete();
       dd($res);
        
        //return view('db.index',['data' => $res]);
    }
    
    public function insert(){
        $data = [
            "pro_name" =>'smsum mobile',
            "cat_id" =>'1',
            "status" =>'0',
            "created_at" => now(),
            "updated_at" => now()
        ];
         DB::table('products')->insert($data);
        return 'inserted';
    }
}
