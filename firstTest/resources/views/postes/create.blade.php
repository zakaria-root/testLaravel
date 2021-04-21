@extends('layouts.app')

@section('content')

    <form action="/p" enctype="multipart/form-data" method="post">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2 pt-5">
                    @csrf
                    <label for="postCaption" class="col-md-4 col-form-label text-md-left">Post Caption</label>
                        <input 
                        id="postCaption" 
                        type="text" 
                        class="form-control @error('postCaption') is-invalid @enderror" 
                        name="postCaption" 
                        value="{{ old('postCaption') }}"  
                        autocomplete="postCaption">
        
                        @error('postCaption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <label for="image" class="col-md-4 col-form-label text-md-left mt-3"> Post Image</label>
                        <input 
                        class="form-control-file"
                        id="image" 
                        type="file" 
                        class="form-control @error('image') is-invalid @enderror" 
                        name="image" 
                        value="{{ old('image') }}"  
                        autocomplete="image">
                        
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                            <button type="submit" class="btn btn-primary mt-5"> add new post </button>
                </div>
            </div>
        
        </div>
    </form>

@endsection