@extends('layout')

@section('content')
    <div class="container">
        <h1 id="nameGoods">{{$goods->name}}</h1>
        <div style="height: 450px">
            <span style="width: 400px; float: left">
                <img src="{{asset('img/imgGoods/'.$goods->img)}}" width="400px">
            </span>
            <div style="float: right; width: 400px">
            </div>
        </div>

        <div id="descriptionGoods">
            {{$goods->description}}
        </div>

        <div style="margin-bottom: 50px">
            <a href="{{ URL::previous() }}" id="returnButton">Вернуться</a>
        </div>
    </div>
@endsection