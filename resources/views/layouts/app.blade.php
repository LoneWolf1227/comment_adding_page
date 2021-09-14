<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Добавить комментарий</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body >
    <header class="bg-dark">
        <div class="container">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand bg-dark navbar-dark mb-4">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 col-lg-3">
                        <img class="navbar-brand img-fluid" src="{{ asset('img/app/logo.png') }}" alt="">
                    </ul>
                </nav>
                @yield('header_content')
            </div>
        </div>
    </header>

    @yield('content')
    @yield('footer')
    @yield('js')

</body>
</html>
