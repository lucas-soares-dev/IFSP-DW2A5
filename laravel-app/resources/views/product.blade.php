@extends('layouts.main')

@section('title', 'Produto')

@section('content')

<h1>Produto</h1>

@if ($id)    
    <p>Produto de id = {{ $id }}</p>
@endif

@endsection