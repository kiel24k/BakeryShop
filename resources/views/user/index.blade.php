<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/style/layout.css') }}">
    <link rel="stylesheet" href="{{asset('assets/style/page.css')}}">
    <title>pandes-hal</title>
</head>

<body>
    <main>
        @include('user.layouts.navigation')
        @yield('page')
        @include('user.layouts.footer')
    </main>



</body>

</html>
