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

            <?php if(Auth::user()->role == "admin") { ?>
                <form action="/movie/destroy" method="POST">
                    @csrf
                    <input class="invisible" type="hidden" type="number" name="movie_id" value="{{ $moviePost->id }}">
                    <input class="btn btn-outline-light" type="submit" value="Delete Movie;">
                </form>
            <?php } ?>
        </div>
    </div>
    
</div>
@endsection
