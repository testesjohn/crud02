<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher Crud - @yield('title')</title>
    <style>
        .d-none{display: none;}
    </style>
</head>
<body>
    <header>
        <p>Crud</p>
        <nav>
            <ul>
                <li><a href="{{route('teacher.index')}}">Home</a></li>
                <li><a href="{{route('teacher.create')}}">Create</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="d-none" id="msg"></div>
        @if (Session('msg'))
            <div>{{Session('msg')}}</div>
        @endif
        <div>@yield('content')</div>
    </main>

    <script src="http://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="{{asset('assets/js/ajax.js')}}"></script>
</body>
</html>
