@extends('layouts.main')

@section('title', 'Home')

@section('content')

<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    @foreach ($movies as $movie)
        @include('layouts.card-movie', ['movie', $movie])
    @endforeach
</div>

@endsection