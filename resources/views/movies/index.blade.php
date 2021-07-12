@extends('layout.app')

@section('title','MOVIES-Laravel-Model-Controller')

@section('main_content')
<div class="container">
    <h1>Movies List</h1>
    <div class="movies">
        @foreach($movies as $movie)
        <div class="movie">
            <div class="layover">
                <h5>Original Title: {{$movie->original_title}}</h5>
                <span> <strong>Nationality:</strong> {{$movie->nationality}}</span>
                <span><strong>Date: </strong> {{$movie->date}}</span>
            </div>
            <h2>{{$movie->title}}</h2>
            <span> <strong>Voto: </strong>{{$movie->vote}}</span>
        </div>
        @endforeach

    </div>
</div>

@endsection
