@extends('layouts.main')

@section('title', '$processo->tipo')

@section('content')
  <div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="info-container" class="col-md-6">
        <h1>{{$processo->tipo}}</h1>
        <p class="processo-status"><ion-icon name="location-outline"></ion-icon>{{$processo->status}}</p>
        <p class="processo-status"><ion-icon name="location-outline"></ion-icon>{{ date('d/m/Y', strtotime($processo->data)) }}</p>
     </div>
    </div>
    <div class="col-md-12" id="descricao-container">
         <p class="processo-descricao"><ion-icon name="people-outline"></ion-icon>{{$processo->descricao}}</p>
    </div>

</div>

@endsection