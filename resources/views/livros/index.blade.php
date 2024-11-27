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

    <div class="m-5 mx-auto flex flex-wrap justify-center mt-10 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="p-4 max-w-sm">

            <div class="flex flex-col items-center p-3">
                    <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white" >{{ $entity->title }}</h3>
                    <p class="text-sm text-gray-400">Autor: {{ $entity->author }}</p>
                    <p class="text-sm text-gray-400">Ano: {{ $entity->year }}</p>
                    <p class="text-sm text-gray-400">Gênero: {{ $entity->gender }}</p>

                    <div class="flex mt-4 md:mt-6">
                        <a href="{{ url('livros/'.$entity->id.'/edit') }}"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        >Editar</a>
                        <form action="{{ url('livros/'.$entity->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" 
                            type="submit"
                            >Deletar</button>
                        </form>
                    </div>

                </div>

        </div>
    </div>

    
@endforeach

@endsection