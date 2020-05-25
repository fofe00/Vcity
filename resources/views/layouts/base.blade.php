<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("Semantic/semantic.css") }}">
    <link rel="stylesheet" href="{{ asset("dataTable/datatable.css") }}">
    @yield("css")
    @if(isset($titre))
    <title>{{$titre}}::Vblog</title>
    @else
      <title>Vblog</title>
    @endif
</head>
<body>
    @yield('menu')
    <div class="ui container" >
        @yield('content')
    </div>

<script src="{{ asset("Semantic/jquery.js") }}"></script>
<script src="{{ asset("Semantic/semantic.js") }}"></script>
<script src="{{ asset("dataTable/datatable.js") }}"></script>
<script src="{{ asset("dataTable/sem.js") }}"></script>


    @include('flashy::message')
@yield("js")
    <script !src="">
        $('.ui.dropdown')
            .dropdown()
        ;
    </script>
</body>
</html>
