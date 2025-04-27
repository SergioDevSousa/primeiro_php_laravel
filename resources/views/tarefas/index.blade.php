<h1>Lista de Tarefas</h1>

<a href="/tarefas/create">Criar Nova Tarefa</a>

<ul>
    @foreach ($tarefas as $tarefa)
        <li>{{ $tarefa->titulo }} - {{ $tarefa->descricao }}</li>
    @endforeach
</ul>
