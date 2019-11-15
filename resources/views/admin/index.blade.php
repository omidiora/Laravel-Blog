@extends('layouts.app')

@section('content')
    
<table class="table">
        <thead>
            <th>Image</th>
            <th>Title</th>
            <th>Category</th>
            <th></th>
        </thead>
        <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>
             <img src="{{"storage/$post->image"}}" style="width:40px;">
                    
                       
                    </td>
                    <td>
                        {{$post->title}}
                 </td>
                 <td>
                 <a href="{{route('admin-category.edit',$post->category->id)}}">{{$post->category->category}}</a>
           
                 </td>
                 <td>
                 <a href="{{route('admin-page.edit',$post->id)}}" class="btn btn-info">Edit</a>
       
    
                                
                 </td>
                 <td>
                        <a href="{{route('admin-page.destroy',$post->id)}}" class="btn btn-danger">Delete</a>
                 </td>
                </tr>
                    
                @endforeach
                </tbody>
    
            </table>
            

  </table>
  @endsection
