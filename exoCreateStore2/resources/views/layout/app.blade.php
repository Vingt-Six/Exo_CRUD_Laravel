<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1 class="bg-danger text-center pt-3 pb-3"><a href="" class="text-decoration-none text-white">Exo Create Store 2</a></h1>
    <button type="button" class="btn btn-light border-dark ms-5 fixed"><a href="{{Route('crea')}}">Add people</a></button>
    <main>
        @yield('content')
    </main>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>