<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', compact('livros'));
    }
    
    public function create()
    {
        return view('livros.create');
    }
    
    public function store(Request $request)
    {
        Livro::create($request->all());
        return redirect('livros')->with('success', 'Livro created successfully.');
    }
    
    public function edit($id)
    {
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
        $livro = Livro::findOrFail($id);
        $livro->delete();
        return redirect('livros')->with('success', 'Livro deleted successfully.');
    }
}
