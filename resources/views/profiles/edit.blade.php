@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            
            <div class="col-8 offset-2">
                
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <h1 style="color: white;">Edit Profile</h1>
                    </div>
                    <div class="col-4"></div>
                    
                </div>
                
                <div class="form-group row pt-5">
                    <label for="description" class="col-md-4 col-form-label text-md-right" style="color: white;">Description :</label>
    
                    <div class="col-md-6">
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" 
                        name="description" value="{{ old('description') ?? $user->profile->description ?? '' }}" autocomplete="description" autofocus>
    
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-2"></div>
                    <div class="d-flex col-8">
                        <label for="image" class="col-md-4 col-form-label" style="color: white;">Profile Image :</label>

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
                    <div class="col-2"></div>
                </div>

                <div class="row pt-5 d-flex justify-content-center">
                     <button class="btn-dark">Save Profile</button>
                   
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
