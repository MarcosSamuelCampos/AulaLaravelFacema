<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{assets('style.css')">
</head>
<body>
        @include('includes.header');

        <main>
            @yield('content');
        </main>

        @include('includes.footer');
</body>
</html>