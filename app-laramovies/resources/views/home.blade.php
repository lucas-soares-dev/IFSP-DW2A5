@extends('layouts.main')

@section('title', 'Home')

@section('content')

<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    @foreach ($movies as $movie)
    <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('https://getbootstrap.com/docs/5.0/examples/features/unsplash-photo-1.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">{{ $movie->name }}</h2>

                <ul class="d-flex list-unstyled justify-content-between">
                    <li class="d-flex align-items-center">
                        <small>{{ implode(', ', $movie->genres) }}</small>
                    </li>

                    <li class="d-flex align-items-center">
                        <span class="bi bi-calendar3 me-2"></span>
                        <small>{{  date('d/m/Y', strtotime($movie->created_at)) }}</small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection