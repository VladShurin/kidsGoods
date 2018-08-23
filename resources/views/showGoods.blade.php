<html>
<head>
    <title>Главная</title>
</head>

<body>
@foreach($goods as $good)
    <a>{{$good->name}} ({{$good->description}})</a>
@endforeach
</body>
</html>