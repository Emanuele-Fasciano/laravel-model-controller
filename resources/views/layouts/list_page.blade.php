@extends('layouts.app')

@section('title', "Movie List")

@section('content')
 <div class="container">
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">
        @foreach ($movies as $movie)
            @include('partials.card')
        @endforeach
    </div>
 </div>


@endsection
    
