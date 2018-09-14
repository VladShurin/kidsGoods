@extends('layout')

@section('content')
    <div class="container">
        <div style="padding: 0 10px; " id="newGoods">
            @foreach($newGoods as $goods)
                <li>
                    <div>
                        <a href="">{{$goods->name}}</a>
                    </div>
                </li>
            @endforeach
        </div>
    </div>
@endsection