@extends('layouts.app')

@section('title', "Movie Details")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @include('partials.card')
            </div>
        </div>
        <p class="text-white">
            <a href="{{route('list')}}" class="text-white fs-4">Indietro</a>
        </p>
    </div>
@endsection