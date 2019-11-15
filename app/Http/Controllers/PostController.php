<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Middleware\VerifyCategoryCount;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(){
         $this->middleware('VerifyCategoryCount')->only(['create','store']);
     }







    public function index()
    {
        //
        return view('admin.index')->with('posts',Post::all())->with('categories',category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create')->with('posts',Post::all())->with('categories',category::all());
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
         $this->validate($request,[
            'title'=>'required',
            'content'=>'required',
            'slug'=>'required|unique:posts',
            'image'=>'required',
            'category_id'=>'required',
           
         ]);

         
         $image=$request->image->store('posts');
         $post=new Post;
         $post->title=$request->title;
         $post->slug=Str::slug($request->title);
         $post->content=$request->content;
         $post->category_id=$request->category_id;
         $post->image= $image;
         $post->save();
         return view('admin.index')->with('posts',Post::all())->with('categories',category::all());

         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post=post::find($id);
        
        return view('admin.show')->with('posts',$post)->with('categories',category::all());;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post=post::find($id);
      
        
        return view('admin.edit')->with('posts',$post)->with('categories',category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
         $this->validate($request,[
            'title'=>'required',
            'content'=>'required',
            'slug'=>'required',
            'image'=>'required',
            'category_id'=>'required',
           
         ]);

         
         $image=$request->image->store('posts');
         $post=post::find($id);
         $post->title=$request->title;
         $post->slug=Str::slug($request->title);
         $post->content=$request->content;
         $post->category_id=$request->category_id;
         $post->image= $image;
         $post->save();
         return view('admin.index')->with('posts',Post::all())->with('categories',category::all());

         
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post=post::find($id);
      
       $post->delete();
       return redirect('/');

    }
}
