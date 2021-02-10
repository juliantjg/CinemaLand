@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <h3 style="color: white;">Results for key: <i>{{ $search_text }}</i> </h3>
    </div>

    <div class="row pt-3">
        @foreach($movies as $moviePost)
            <a href="/movie/{{ $moviePost->id }}">
                <div class="pr-5 pb-5">
                    <img src="/storage/{{ $moviePost->image }}" style="max-width: 230px">
                    <p>
                        <center>
                        <h3 style="color: white;"> {{$moviePost->movie_name}} </h3>
                        <h6 style="color: white;"> ${{$moviePost->price}} </h6>
                        </center>
                    </p>
                </div>
            </a>
        @endforeach
    </div>
   


</div>
@endsection
