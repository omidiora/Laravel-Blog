<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use session;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    return view('admin.category.index')->with('categories',category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.category.create');
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
        
            'category'=>'required|unique:categories',

        ]);

        $category=new category;
        $category->category=$request->category;
        $category->save();
        session()->flash('success','Category added Successfully');
        return redirect()->back();

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
        $category=category::find($id);
        return view('admin.category.edit')->with('category',$category);
        return redirect('/');
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
        $category=category::find($id);
        $category->category=$request->category;
        $category->save();
        session()->flash('success','Category Updated Successfully');
        return view('admin.category.index')->with('categories',category::all());
     
       
     
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
          $category=category::find($id);
        if($category->post->count()>0){

            session()->flash('success','Category Cannot be deleted because it is attached to posts');
            return redirect()->back();
        }
        
      
        $category->delete();
        session()->flash('success','Category Deleted Successfully');
        return view('admin.category.create')->with('categories',$category);

        
    }
}
