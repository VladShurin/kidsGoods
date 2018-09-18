@extends('layout')

@section('content')
    <div class="container">
        <div style="padding: 0 10px; " id="newGoods">
            @foreach($goods as $value)
                <li>
                    <a href="catalog/{{$value->id}}">{{$value->name}}</a>
                </li>
            @endforeach
        </div>
    </div>
@endsection
