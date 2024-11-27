@extends('layouts.base')
@section('content')


<div class="flex flex-col items-center pb-10 p-5">
<form action="{{ url('livros/'.$livro->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Título</label>
    <input type="text" name="title" placeholder="Título" required value="{{ $livro->title }}" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Autor</label>
    <input type="text" name="author" placeholder="Autor" required value="{{ $livro->author }}" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    
    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ano de Publicação</label>
    <input type="number" name="year" placeholder="Ano de Publicação" required value="{{ $livro->year }}" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    
    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gênero</label>
    <input type="text" name="gender" placeholder="Gênero" required value="{{ $livro->gender }}" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    
    <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
    >
    Registrar Livro</button>
</form>
</div>

@endsection