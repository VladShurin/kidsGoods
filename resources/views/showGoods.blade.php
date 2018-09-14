@extends('layout')

@section('content')
    <div class="container">
        @foreach($goods as $good)
            <a>{{$good->name}} ({{$good->description}})</a>
        @endforeach

        <button type="button" onclick="window.location='{{ url("/") }}'">Назад</button>
    </div>
@endsection