@extends('mainLayout')

@section('pasta')
  <section class="home">
    <div class="paste">
      <img src="{{asset('img/spaghetti-alla-carbonara.jpg')}}" alt="">
      <img src="{{asset('img/spaghetto_al_pomodoro.jpg')}}" alt="">
      <a href="{{route('pasta')}}">SCOPRI LA NOSTRA PASTA</a>
    </div>
  </section>

@endsection
