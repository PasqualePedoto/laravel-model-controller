<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- TITLE --}}
    <title>{{ env('APP_NAME') }} | @yield('title')</title>

    {{-- STYLE --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- FONT AWESOME --}}
    <script src="https://kit.fontawesome.com/ddb740f05b.js" crossorigin="anonymous"></script>
</head>
<body class="position-relative h-100">
    {{-- HEADER --}}
    @include('includes.header')

    {{-- MAIN --}}
    <main class="mt-5 p-3">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('includes.footer')
</body>
</html>