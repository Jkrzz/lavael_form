<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Post;
class HomeController extends Controller
{
    public function index(){
        $categories=Category::orderBy('id','desc')->get();
        $posts=Post::orderBy('id','desc')->get();
        return view('home',compact('categories','posts'));
    }
}