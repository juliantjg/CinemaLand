@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col pb-3">
        </div>
        <div class="col-10 align-content-center bg-tranparent">
            <center>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Lisbon_%2836831596786%29_%28cropped%29.jpg/1200px-Lisbon_%2836831596786%29_%28cropped%29.jpg"
            style="max-width: 780px; max-height: 500px; min-height: 500px;" alt="">
            </center>
        </div>
        <div class="col">
        </div>
    </div>

    <div class="row pt-5">
        <div class="col bg-transparent">
        </div>
        <div class="col-5 bg-transparent pt-2">
            <center>
                <h2 style="color:white;"> Now Selling </h2>
            </center>
        </div>
        <div class="col bg-transparent">
        </div>
    </div>

    <div class="row pt-3">
        
        @foreach($cinema->MoviePosts as $moviePost)
            <div class="col-3">
                <img src="/storage/{{ $moviePost->image }}" class="w-90">
            </div>
        @endforeach
    </div>

</div>
@endsection
