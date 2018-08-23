<html>
<head>
    <title>Главная</title>
</head>

<body>
@foreach($categories as $category)
    <li>
        <a href="catalog/{{$category->id}}">{{$category->name}}</a>
    </li>
@endforeach
</body>
</html>