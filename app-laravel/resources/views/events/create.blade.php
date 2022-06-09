@extends('layouts.main')

@section('title', isset($event) ? 'Editar evento' : 'Criar evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  @if (isset($event))
    <h1>Edite seu evento</h1>
  @else
    <h1>Crie o seu evento</h1>
  @endif

  <form action='{{ isset($event) ? "/events/update/$event->id" : "/events" }}' method="POST" enctype="multipart/form-data">
    @csrf
    @if (isset($event))
      @method('PUT')
    @endif
    <div class="form-group">
      <label for="image">Imagem do Evento:</label>
      <input type="file" class="form-control-file" id="image" name="image">
    </div>

    @if (isset($event->image))
      <div class="form-group">
        <div class="image-preview">
          <img src="/images/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
        </div>
      </div>
    @endif

    <div class="form-group">
      <label for="title">Evento:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" value="{{ $event->title ?? '' }}">
    </div>

    <div class="form-group">
      <label for="title">Data do evento:</label>
      <input type="date" class="form-control" id="date" name="date" value="{{ isset($event) ? date('Y-m-d', strtotime($event->date)) : '' }}">
    </div>

    <div class="form-group">
      <label for="title">Cidade:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" value="{{ $event->city ?? '' }}">
    </div>

    <div class="form-group">
      <label for="title">O evento é privado?</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1" {{ isset($event) && $event->private == 1 ? "selected" : "" }}>Sim</option>
      </select>
    </div>

    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?">{{ $event->description ?? '' }}</textarea>
    </div>

    <div class="form-group">
      <label for="title">Adicione itens da infraestrutura:</label>

      <div class="form-group">
        <input
          type="checkbox"
          name="items[]"
          value="Cadeiras" 
          {{ array_search('Cadeiras', isset($event) ? $event->items : []) !== false ? "checked" : '' }}
        > Cadeiras
      </div>

      <div class="form-group">
        <input 
          type="checkbox" 
          name="items[]" 
          value="Palco" 
          {{ array_search('Palco', isset($event) ? $event->items : []) !== false ? "checked" : '' }}
        > Palco
      </div>

      <div class="form-group">
        <input 
          type="checkbox" 
          name="items[]" 
          value="Cerveja Grátis"
          {{ array_search('Cerveja Grátis', isset($event) ? $event->items : []) !== false ? "checked" : '' }}
        > Cerveja Grátis
      </div>

      <div class="form-group">
        <input 
          type="checkbox" 
          name="items[]" 
          value="Open Food"
          {{ array_search('Open Food', isset($event) ? $event->items : []) !== false ? "checked" : '' }}
        > Open Food
      </div>

      <div class="form-group">
        <input 
          type="checkbox" 
          name="items[]" 
          value="Brindes"
          {{ array_search('Brindes', isset($event) ? $event->items : []) !== false ? "checked" : '' }}
        > Brindes
      </div>
    </div>
    
    <input type="submit" class="btn btn-primary" value="{{ isset($event) ? 'Editar Evento' : 'Criar Evento' }}">
  </form>
</div>

@endsection