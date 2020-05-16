<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("Semantic/semantic.css") }}">
    @yield("css")
    <title>@yield('titre')::Vblog</title>
</head>
<body>
    <div class="ui container">
        @yield('content')
    </div>

<script src="{{ asset("Semantic/jquery.js") }}"></script>
<script src="{{ asset("Semantic/semantic.js") }}"></script>
@yield("js")
</body>
</html>