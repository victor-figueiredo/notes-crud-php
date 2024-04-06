@extends('layouts.app')

@section('title', 'Editando Nota - CoreNotes')

@section('content')

  <div class="container mt-5">
    <h1>Edite uma nota</h1>
    <hr>
    <form action="{{ route('notes-update', ['id'=>$note->id]) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <div class="form-group">
          <label for="title">
            Título:
          </label>
          <input class="form-control" type="text" name="title" placeholder="Digite um nome..." value="{{ $note->title }}" />
        </div>
        <br>
        <div class="form-group">
          <label for="content">
            Conteúdo:
          </label>
          <input class="form-control" type="text" name="content" placeholder="Digite um nome..." value="{{ $note->content }}" />
        </div>
        <br>
        <div class="form-group">
          <label for="color">
            Cor:
          </label>
          <input class="form-control" type="text" name="color" placeholder="Digite um nome..." value="{{ $note->color }}" />
        </div>
        <br>
        <div class="form-group">
          <label for="isFavorite">
            Favorito:
          </label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="isFavorite" id="isFavorite" value="{{ $note->isFavorite }}" />
            </div>
        </div>
        <br>
        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-success" value="Atualizar" />
        </div>
      </div>
    </form>
  </div>
@endsection