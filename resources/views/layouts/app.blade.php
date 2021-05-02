<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @yield('content')

    <script src="{{ asset('js/plugins/feathericons/feathericons.min.js') }}"></script>

    <script>
        window.addEventListener('load', function () {
            feather.replace()
        })
    </script>
</body>
</html>
