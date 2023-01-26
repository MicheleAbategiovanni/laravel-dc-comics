<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics</title>

    {{-- Viene caricato il JS ed anche il file app.scss --}}
    @vite('resources/js/app.js')
</head>

<body>

    {{-- header --}}
    @include('components.header')

    {{-- Jumbotron --}}
    @include('components.jumbotron')

    {{-- Contenuto --}}
    <main>
        @yield('content')
    </main>

    {{-- Banner --}}

    {{-- footer --}}
    @include('components.footer')

</body>

</html>