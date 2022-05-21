@extends('layouts.main')

@section('title', 'Aprendendo Laravel')

@section('content')

<h1>Título home</h1>
<img src="/images/laravel-banner.webp" alt="Banner Laravel">
<p></p>

@if ($name)
    <p>{{ $name }}</p>
@endif

@endsection