<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class WelcomeController extends Controller
{
    //
    public function index(){

        
        return view('welcome')->with('posts',Post::all())->with('categories',category::all());
    }


    public function search(){

    $search= request()->query('search');
    if($search){
        $post=post::where('title','LIKE',"%{$search}%");
        return view('welcome')->with('posts',$post)->with('categories',category::all());

      
        
    }
    else{
        $post=post::all();
        return view('welcome')->with('posts',$post)->with('categories',category::all());

        

    }

    


}


    







}
