<!DOCTYPE html>
<html lang="en">

<head>
    <title>Todo App</title>
    @include('libraries.styles')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    @include('components.nav')

    @yield('content')

    @include('libraries.script')
</body>

</html>