<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @include('partials.meta', ['meta' => $meta])
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
    @include('partials.navigation')
    @yield('content')
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
