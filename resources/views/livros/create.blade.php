@extends('layouts.base')
@section('content')

<form action="{{ url('livros') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Título" required>
    <input type="text" name="author" placeholder="Autor" required>
    <input type="number" name="year" placeholder="Ano de Publicação " required>
    <input type="text" name="gender" placeholder="Gênero" required>
    <button type="submit">Registrar Livro</button>
</form>

@endsection