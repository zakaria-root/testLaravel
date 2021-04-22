@extends('layouts.app')

@section('content')
    
<form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 pt-5">
                <h2>Edite Profile</h2>
                <label for="title" class="col-md-4 col-form-label text-md-left">Title</label>
                    <input 
                    id="title" 
                    type="text" 
                    class="form-control mb-2 @error('title') is-invalid @enderror" 
                    name="title" 
                    value="{{ old('title') ?? $user->profile->title }}"  
                    autocomplete="title">
    
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <label for="description" class="col-md-4 col-form-label text-md-left">Description</label>
                    <input 
                    id="description" 
                    type="text" 
                    class="form-control mb-2 @error('description') is-invalid @enderror" 
                    name="description" 
                    value="{{ old('description') ?? $user->profile->description }}"  
                    autocomplete="description">
    
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="url" class="col-md-4 col-form-label text-md-left ">URL</label>
                    <input 
                    id="url" 
                    type="text" 
                    class="form-control mb-2 @error('url') is-invalid @enderror" 
                    name="url" 
                    value="{{ old('url') ?? $user->profile->url }}"  
                    autocomplete="url">
    
                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="image" class="col-md-4 col-form-label text-md-left mt-3"> Profile Image</label>
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
                    
                        <button type="submit" class="btn btn-primary mt-5"> Save Profile </button>
            </div>
        </div>
    
    </div>
</form>
@endsection
