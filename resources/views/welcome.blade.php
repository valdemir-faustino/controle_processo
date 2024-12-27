@extends('layouts.main')

@section('title' , 'Processos')


@section('content')
    <div id="search-container" class="col-md-12">
               
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar..." value="{{ request('search') }}">
        </form>
    </div>

    <div id="processos-container" class="col-md-12">
    @if($search)
        <h2>Buscando por: {{$search}}</h2>
        @else
        <h1>Veja seus processos</h1>
        @endif       
            <div id="cards-container" class="row">
                @foreach($processos as $processo)
                    <div class="card col-md-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $processo->tipo }}</h5>
                            <p class="card-date">Data: {{ date('d/m/Y', strtotime($processo->data)) }}</p>
                            <p class="card-descricao">Descrição: {{ $processo->descricao }}</p>
                            <p class="card-status">Status: {{ $processo->status }}</p>
                            <a href="/processos/{{ $processo->id }}" class="btn btn-primary">Ver detalhes</a>
                        </div>
                    </div>
                @endforeach
                @if(count($processos)== 0 && $search)
                        <p>Não foi possível encontrar nenhum processo com {{$search}}! <a href="/">Ver todos!</a></p>
                   @elseif(count($processos)== 0)
                        <p>Não há processos disponivel</p>
                @endif
            </div>
    </div>
@endsection
