@extends('mainLayout')

@section('pasta')
  @foreach ($pastaSpecifica as $pasta)
    <div class="container-pasta">
      <h1>{{$pasta['titolo']}}</h1>
      <img src="{{$pasta['src']}}" alt="">
      <h4>Tempo di cottura: {{$pasta['cottura']}}</h4>
      <p>{!! $pasta['descrizione'] !!}</p>
    </div>
  @endforeach

@endsection
