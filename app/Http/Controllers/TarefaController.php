<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::all();
        return view('tarefas.index', compact('tarefas'));
    }

    public function create()
    {
        return view ('tarefas.create');
    }

    public function store(Request $request)
    {
        Tarefa::create($request->only('titulo', 'descricao'));
        return redirect('/tarefas');
    }


}
