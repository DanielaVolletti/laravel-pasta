@extends('mainLayout')

@section('pasta')
  <section class="tipi-paste">
    <div class="pasta-lunga">
      <h1>Pasta Lunga: </h1>
      @foreach ($pastaLunga as $pasta)
        <h2>
          {{$pasta['id'] + 1}})
          <a href="{{ route('pastaSpecifica', $pasta['id']) }}">{{$pasta['titolo']}}</a>
        </h2>
      @endforeach
    </div>
    <div class="pasta-corta">
      <h1>Pasta Corta: </h1>
      @foreach ($pastaCorta as $pasta)
        <h2>
          {{$pasta['id'] + 1}})
          <a href="{{ route('pastaSpecifica', $pasta['id']) }}">{{$pasta['titolo']}}</a>
        </h2>
      @endforeach
    </div>
    <div class="pasta-cortissima">
      <h1>Pasta Cortissima: </h1>
      @foreach ($pastaCortissima as $pasta)
        <h2>
          {{$pasta['id'] + 1}})
          <a href="{{ route('pastaSpecifica', $pasta['id']) }}"> {{$pasta['titolo']}}</a>
        </h2>
      @endforeach
    </div>
  </section>
@endsection
