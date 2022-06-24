@extends('layouts.main')

@section('title', 'Criar filme')

@section('content')

<div class="py-5">
    @if (auth()->user()->id == $movie->user_id)
    <div class="owner-options d-flex">
        <!-- <a class="btn btn-danger" href="/movies/delete/{{ $movie->url }}">
            Excluir <span class="bi bi-trash3-fill"></span>
        </a> -->

        <form action="/movies/delete/{{ $movie->url }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger delete-btn ml-1">
                Excluir <span class="bi bi-trash3-fill"></span>
            </button>
        </form>

        <a class="btn btn-primary mx-2" href="/movies/edit/{{ $movie->url }}">
            Editar <span class="bi bi-pen"></span>
        </a>
    </div>
    @endif

    <div class="infos-movie mt-3">
        <iframe width="100%" height="500px" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>

        <div class="mt-3">
            <h1>{{ $movie->name }}</h1>

            <div class="infos-movie-content mt-4">
                <p><strong>Gêneros:</strong> {{ implode(', ', $movie->genres) }}</p>
                <p><strong>Ano de Lançamento:</strong> {{ $movie->release_year }}</p>
            </div>
        </div>
    </div>
</div>

@endsection