@extends('layouts.base')
@section('content')

@can('create', App\Models\Livro::class)
    <div class="flex items-start">
        <div class="py-8 mb-5 p-4">
            <a href="{{url('livros/create')}}" class=""></a>
        </div>
    </div>
@endcan

@foreach($livros as $entity)
    <div>
        <h3>{{ $entity->title }}</h3>
        <p>{{ $entity->author }}</p>
        <p>{{ $entity->year }}</p>
        <p>{{ $entity->gender }}</p>
        <a href="{{ url('livros/'.$entity->id.'/edit') }}">Editar</a>
        <form action="{{ url('livros/'.$entity->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
    </div>
@endforeach

@endsection