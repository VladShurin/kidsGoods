@extends('layout')

@section('content')
    <div class="container">
        <div style="padding: 10px 10px; " id="newGoods">
            @foreach($categories as $category)
                <li>
                    <a href="catalog/{{$category->id}}">{{$category->name}}</a>
                </li>
            @endforeach
        </div>
    </div>
@endsection