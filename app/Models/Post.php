<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //use HasFactory;
    protected $table = 'my_posts';
     protected $primaryKey = 'post_id';
     protected $fillable  = ['postname','user_id','status','desctiption'];
    
}