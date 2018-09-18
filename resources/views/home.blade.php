@extends('layout')

@section('content')
    <div class="container">
        <div style="padding: 0 10px; " id="newGoods">
            @foreach($goods as $value)
                <li id="{{$value->id}}" style="background-image: url({{url(asset('img/imgGoods/'.$value->img))}}); background-size: cover">
                    <div style="width: 100%">
                        <label>{{$value->name}}</label>
                    </div>
                </li>
            @endforeach
        </div>
    </div>
@endsection
