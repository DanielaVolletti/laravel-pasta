@extends('mainLayout')
@section('pasta')
  <div class="pasta-specifica">
    <h1>{{ $idPasta['titolo'] }}</h1>
    <img src="{{ $idPasta['src'] }}" alt="">
    <h4>Tempo di cottura: {{$idPasta['cottura'] }}</h4>
    <p>{!! $idPasta['descrizione'] !!}</p>
  </div>
@endsection
