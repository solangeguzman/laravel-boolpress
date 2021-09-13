<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; 
class HomeController extends Controller
{
    public function index(){
           
        $allPosts=Post::all();
        $prezzoQuadro = Post::where('price', '<', 1000)->get();
        $titolo= Post::where('title','like','A%')->get();
        return view ('home',compact('allPosts', 'prezzoQuadro','titolo'));
     
    } 
}