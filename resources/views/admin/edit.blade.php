@extends('layouts.app')

@section('content')
<div class="container-fluid">
 
        
            <div class="card">
               
                <div class="card-header">Create Post </div>
                
              @if ($errors->all()>0)
              @foreach ($errors->all() as $error)
              <p class="alert alert-danger">
             
              {{$error}}
            </p>
              
              @endforeach
                  
              @endif

                <div class="card-body" >
                <form method="POST" action="{{route("admin-page.update", $posts->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                        <label for="title" >{{ __('Title') }}</label>
                         <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $posts->title }}" required  autofocus>
                        </div>

                        <div class="form-group">
                            <label for="slug" >{{ __('Slug') }}</label>
            <input id="slug" type="slug" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ $posts->slug }}" required autocomplete="email">
                        </div>

                    @if($posts)
                    <img src="{{asset("storage/$posts->image")}}" alt="vnajdnkvailnj" style="width:130px;"> 

                    @endif


                        <div class="form-group">
                            <label for="image" >{{ __('image') }}</label>
                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required >                        
                        </div>

                        
                        <div class="form-group">
                                <label for="categpry" >{{ __('category') }}</label>
                               <select name="category_id" id="" class="form-control">
                                   @foreach ($categories as $categories)
                               <option value="{{$categories->id}}"
                                @if ($categories->id==$posts->category_id )
                                    selected
                                @endif
                                
                                
                                >{{$categories->category}}</option>
                                @endforeach
                               </select>
                            </div>
    

                        <div class="form-group">
                            <label for="">Content</label>
                           <input id="content"  type="hidden" name="content" value="{{$posts->content}}">
                            <trix-editor input="content" ></trix-editor>
                           </div>

                        <div class="form-group">
                             <button type="submit" class="btn btn-primary">
                             {{ __('Update Post') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
