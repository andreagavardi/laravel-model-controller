@extends('layout.app')

@section('title','MOVIES-Laravel-Model-Controller')

@section('main_content')
<h1>Movies</h1>
<div class="movies">
    @foreach($movies as $movie)
    <div class="movie">
        <h2>{{$movie->title}}</h2>
        <h3>Original Title: {{$movie->original_title}}</h3>
        <span>Nationality: {{$movie->nationality}}</span>
        <span>Date: {{$movie->date}}</span>
        <span>{{$movie->vote}}</span>
    </div>
    @endforeach

</div>

@endsection
