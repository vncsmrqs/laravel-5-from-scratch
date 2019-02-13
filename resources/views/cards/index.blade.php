@extends('layout')

@section('content')
    <h1>All of cards</h1>

    @foreach ($cards as $card )
       <div>
           {{ $card->title }}
       </div>
    @endforeach
@endsection