@extends('layouts.app')

@section('content')


<div class="container">
    <form action="/editCover/create" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="d-flex col-8">
                        <label for="cover" class="col-md-4 col-form-label" style="color: white;">New Cover Image :</label>
                        <input type="file" class="form-control-file pt-1" id="cover" name="cover" style="color: white;">
                        
                        @error('cover')
                        <strong style="color: white">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="col-2"></div>
                </div>

                <div class="row pt-5 d-flex justify-content-center">
                     <button class="btn-dark">Submit</button>
                   
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
