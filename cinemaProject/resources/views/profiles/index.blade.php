@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="row">
                <img src="https://i.pinimg.com/originals/e6/99/fb/e699fb7cd6ce72d00445fac66fdfc997.jpg"
                class="rounded-circle w-75">
            </div>
            <div class="row pt-3 pl-5">
                <div class="pl-5">
                    <button class="btn-dark"><a href=""> Edit Profile </a></button>
                </div>
            </div>
        </div>
        <div class="col-4 pt-4">
            <div class="row">
                <h1 style="color:white;"> {{ $user->name }} </h1> 
            </div>
            <div class="row pt-4">
                <h4 style="color:white;"> {{ ucfirst($user->role) }} </h2>
            </div>
            <div class="row">
                <h4 style="color:white;"> {{ $user->profile->description ?? '' }} </h2>
            </div>
            
        </div>
        <div class="col-4">

        </div>
    </div>
</div>
@endsection
