<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @include('partials.meta', ['meta' => $meta])
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body class="font-body">
    @include('partials.navigation')
    @yield('content')
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
