@extends('layouts.main')

@section('title', 'Criar processos')

@section('content')

<div id="processo-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu processo</h1>
    <form action="/processos" method="POST">
        @csrf
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Digite o tipo do processo" required>
        </div> 
        <div class="form-group">
        <select name="status" id="status" class="form-control" required>
           <option value="Aberto">Aberto</option>
           <option value="Em Andamento">Em Andamento</option>
           <option value="Concluído">Concluído</option>
        </select>
        </div> 
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" placeholder="Descreva o processo" required></textarea>
        </div>  
        <div class="form-group">
            <label for="data">Data</label>
            <input type="date" class="form-control" id="data" name="data" required>
       </div>              
        <input type="submit" class="btn btn-primary" value="Criar Processo">
    </form>
</div>

@endsection
