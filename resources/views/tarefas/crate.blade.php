<h1>Criar Nova Tarefa</h1>

<form method="POST" action="/tarefas">
    @csrf
    <input type="text" name="titulo" placeholder="Título">
    <br><br>
    <textarea name="descricao" placeholder="Descrição"></textarea>
    <br><br>
    <button type="submit">Salvar</button>
</form>
