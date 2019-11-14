@extends('layouts.app')

@section('content')
    
<table class="table">
      
        <thead>       
            
        <th>Category</th>
            <th>Post Count</th>
        </thead>
        <tbody>
                @foreach ($categories as $category)   
                <tr>
                   
                    <td>
                        
                        {{$category->category}}
            
                    
                       
                    </td>
                    <td>
                    0
                     
                 </td>
                 <td>
                 <a href="{{route('admin-category.edit',$category->id)}}" class="btn btn-info" >Edit</a>
                 </td>
                 <td>
                     <form method="POST" action="{{route('admin-category.destroy',$category->id)}}">
                        @csrf
                        @method("DELETE")
       
                 <button class="btn btn-danger" type="submit" >Delete </button>
                </form>            
                 </td>
                </tr>
                    
             
                </tbody>
                @endforeach   
            </table>
           

  </table>
  @endsection