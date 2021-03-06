@extends('layouts.app')

@section('content')


<div class="container">
    <div class="pb-2">
        @if (session('message_success'))
            <div class="alert alert-success">
                {{ session('message_success') }}
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-12 align-content-center bg-tranparent">
            <center>
            <img src="{{ $cinema->coverImage() }}"
            style="max-width: 1000px; max-height: 500px; min-height: 500px;" alt="">
            </center>
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
        @foreach($movieposts as $moviePost)
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
    
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $movieposts->links() }}
        </div>
    </div>
</div>
@endsection
