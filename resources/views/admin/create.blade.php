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
                <form method="POST" action="{{route('admin-page.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <label for="title" >{{ __('Title') }}</label>
                         <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required  autofocus>
                        </div>

                        <div class="form-group">
                            <label for="slug" >{{ __('Slug') }}</label>
            <input id="slug" type="slug" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}" required autocomplete="email">
                        </div>

                        <div class="form-group">
                            <label for="image" >{{ __('image') }}</label>
                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required >                        
                        </div>

                        
                        <div class="form-group">
                                <label for="categpry" >{{ __('category') }}</label>
                               <select name="category_id" id="" class="form-control">
                                   @foreach ($categories as $category)
                               <option value="{{$category->id}}">{{$category->category}}</option>
                                @endforeach
                               </select>
                            </div>
    

                        <div class="form-group">
                            <label for="">Content</label>
                           <input id="content"  type="hidden" name="content" cols="90">
                            <trix-editor input="content" ></trix-editor>
                           </div>

                        <div class="form-group">
                             <button type="submit" class="btn btn-primary">
                             {{ __('Add Post') }}
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
