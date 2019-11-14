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
            
            </a>
                 </td>
                 <td>
       
    
                                
                 </td>
                </tr>
                    
                @endforeach
                </tbody>
    
            </table>
            

  </table>
  @endsection