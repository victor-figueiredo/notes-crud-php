@extends('layouts.app')

@section('title', 'Criando Nota - CoreNotes')

@section('content')

  <div class="container mt-5">
    <h1>Crie uma nota</h1>
    <hr>
    <form action="{{ route('notes-store') }}" method="POST">
      @csrf
      <div class="form-group">
        <div class="form-group">
          <label for="title">
            Título:
          </label>
          <input class="form-control" type="text" name="title" placeholder="Digite um nome..." />
        </div>
        <br>
        <div class="form-group">
          <label for="content">
            Conteúdo:
          </label>
          <input class="form-control" type="text" name="content" placeholder="Digite um nome..." />
        </div>
        <br>
        <div class="form-group">
          <label for="color">
            Cor:
          </label>
          <input class="form-control" type="text" name="color" placeholder="Digite um nome..." />
        </div>
        <br>
        <div class="form-group">
          <label for="isFavorite">
            Favorito:
          </label>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name="isFavorite" id="isFavorite" />
            <label class="form-check-label" for="isFavorite">
              Favorito
            </label>
            </div>
        </div>
        <br>
        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary" />
        </div>
      </div>
    </form>
  </div>
@endsection