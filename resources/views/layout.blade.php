<html>
<head>
    <meta charset="UTF-8">
    <title>1231232</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{url(asset('css/style.css'))}}"/>
    <script type="text/javascript" src="{{asset('js/kidsGoods.js')}}"></script>
</head>
<body>

@include('layout.header')

@yield('content')

@include('layout.footer')
</body>
</html>
