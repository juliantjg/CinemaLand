@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $moviePost->image }}" class="w-100">
        </div>
        <div class="col-4">
            <h3 style="color: white;"><b> Movie Name : {{ $moviePost->movie_name }} </b></h3>
            <p style="color: white;"> Price : ${{ $moviePost->price }} </p>
            <p style="color: white;"><a href="{{ $moviePost->url }}"> IMDB Link </a></p>    
        </div>
    </div>
    
</div>
@endsection
