@extends('layouts.main')

@section('title', 'Criar filme')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  @if (isset($movie))
    <h1>Edite seu filme</h1>
  @else
    <h1>Crie o seu filme</h1>
  @endif

  <form action='{{ isset($movie) ? "/movies/update/$movie->id" : "/movies" }}' method="POST">
    @csrf
    @if (isset($movie))
      @method('PUT')
    @endif
    <div class="form-group">
      <label for="name">Filme</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Nome do filme" value="{{ $movie->name ?? '' }}">
    </div>

    <div class="form-group">
      <label for="name">Trailer</label>
      <input type="url" class="form-control" id="city" name="link_trailer" placeholder="Link do trailer" value="{{ $movie->city ?? '' }}">
    </div>

    <div class="form-group">
      <label for="name">Ano de Lançamento</label>
      <input type="number" name="release_year" id="release-year" class="form-control" placeholder="Ano de lançamento do filme. Ex: 2001" value="{{ $movie->release_year ?? '' }}">
    </div>

    <div class="form-group">
      <label for="name">Gênero</label>

      <div class="form-group">
        <input
          type="checkbox"
          name="genres[]"
          value="Comédia"
          {{ array_search('Comédia', isset($movie) ? $movie->genres : []) !== false ? "checked" : '' }}
        > Comédia
      </div>

      <div class="form-group">
        <input 
          type="checkbox" 
          name="genres[]" 
          value="Ação" 
          {{ array_search('Ação', isset($movie) ? $movie->genres : []) !== false ? "checked" : '' }}
        > Ação
      </div>

      <div class="form-group">
        <input 
          type="checkbox" 
          name="genres[]" 
          value="Aventura"
          {{ array_search('Aventura', isset($movie) ? $movie->genres : []) !== false ? "checked" : '' }}
        > Aventura
      </div>

      <div class="form-group">
        <input 
          type="checkbox" 
          name="genres[]" 
          value="Drama"
          {{ array_search('Drama', isset($movie) ? $movie->genres : []) !== false ? "checked" : '' }}
        > Drama
      </div>

      <div class="form-group">
        <input 
          type="checkbox" 
          name="genres[]" 
          value="Romance"
          {{ array_search('Romance', isset($movie) ? $movie->genres : []) !== false ? "checked" : '' }}
        > Romance
      </div>
    </div>
    
    <input type="submit" class="btn btn-primary" value="{{ isset($movie) ? 'Editar filme' : 'Criar filme' }}">
  </form>
</div>

@endsection