@extends('layouts.app')

@section('title', 'Notas - CoreNotes')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-10">
                <h1>Notes</h1>
            </div>
            <div class="col-sm-2">
                <a href="{{ route('notes-create') }}" class="btn btn-success">Criar nota</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Título</th>
                <th scope="col">Conteúdo</th>
                <th scope="col">Cor</th>
                <th scope="col">Favorito</th>
                <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notes as $note)
                <tr>
                <th scope="row">{{ $note->id }}</th>
                <td>{{ $note->title }}</td>
                <td>{{ $note->content }}</td>
                <td>{{ $note->color }}</td>
                <td>{{ $note->isFavorite }}</td>
                <td>
                    <a href="{{ route('notes-edit', ['id'=>$note->id]) }}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                        </svg>
                    </a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection