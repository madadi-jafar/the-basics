<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">

    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="/" @class(['current' => request()->is('/')]))>Todos</a></li>
            <li><a href="/counter" @class(['current' => request()->is('counter')])>Counter</a></li>
        </ul>
    </nav>
    {{ $slot }}
</body>

</html>
