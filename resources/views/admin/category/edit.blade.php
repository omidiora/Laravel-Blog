@extends('layouts.app')

@section('content')
<div class="container-fluid">
 
        
            <div class="card">
                <div class="card-header">Create Post </div>

                <div class="card-body" >
                <form method="POST" action="{{route('admin-category.update',$category->id)}}">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                        <label for="title" >{{ __('Category') }}</label>
                         <input id="title" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ $category->category }}" required  autofocus>
                        </div>

                        <div class="form-group">
                             <button type="submit" class="btn btn-primary"> 
                             {{ __('Update Category') }}
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
