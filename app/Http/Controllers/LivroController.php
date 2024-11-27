<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', compact('livros'));
    }
    
    public function create()
    {
        //unico defeito é esse pc da ulbra nao ter o node pra testar a autenticação
        Gate::authorize('create', Livro::class);
        return view('livros.create');
    }
    
    public function store(Request $request)
    {
        Livro::create($request->all());
        return redirect('livros')->with('success', 'Livro created successfully.');
    }
    
    public function edit($id)
    {
        Gate::authorize('update', Livro::class);
        $livro = Livro::findOrFail($id);
        return view('livros.edit', compact('livro'));
    }
    
    public function update(Request $request, $id)
    {
        $livro = Livro::findOrFail($id);
        $livro->update($request->all());
        return redirect('livros')->with('success', 'Livro updated successfully.');
    }
    
    public function destroy($id)
    {
        Gate::authorize('delete', Livro::class);
        $livro = Livro::findOrFail($id);
        $livro->delete();
        return redirect('livros')->with('success', 'Livro deleted successfully.');
    }
}
