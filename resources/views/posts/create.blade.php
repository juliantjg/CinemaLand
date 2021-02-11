@extends('layouts.app')

@section('content')


<div class="container">
    <form action="/addMovie/create" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
    
                <div class="form-group row">
                    <label for="movie_name" class="col-md-4 col-form-label text-md-right" style="color: white;">Movie Name :</label>
    
                    <div class="col-md-6">
                        <input id="movie_name" type="text" class="form-control @error('movie_name') is-invalid @enderror" 
                        name="movie_name" value="{{ old('movie_name') }}" autocomplete="movie_name" autofocus>
    
                        @error('movie_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                
                <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label text-md-right" style="color: white;">Price (AUD) :</label>
    
                    <div class="col-md-6">
                        <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" 
                        name="price" value="{{ old('price') }}" autocomplete="price" autofocus>
    
                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label text-md-right" style="color: white;">URL :</label>
    
                    <div class="col-md-6">
                        <input id="url" type="text" class="form-control @error('price') is-invalid @enderror" 
                        name="url" value="{{ old('url') }}" autocomplete="url" autofocus>
    
                        @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
    
                <div class="row">
                    <div class="d-flex col-12">
                        <label for="image" class="col-md-4 col-form-label" style="color: white;">Image/Poster (must be png file):</label>

                        {{-- Comment below if image input is available on deployment --}}
                        <div class="pt-1">
                            <h4 style="color: yellow;">Image upload unavailable on Heroku (Check src code or github)</h4>
                        </div>

                        {{-- Uncomment below for image input (If image input is available on deployment) --}}
                        {{-- <input type="file" class="form-control-file pt-1" id="image" name="image" style="color: white;">
                        
                        @error('image')
                        <strong style="color: white">{{ $message }}</strong>
                        @enderror --}}
                        
                    </div>
                </div>

                <div class="row pt-5 d-flex justify-content-center">
                     <button class="btn-dark">Add Movie</button>
                   
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
