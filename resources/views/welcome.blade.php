<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Livewire Basics</title>

</head>

<body>
    <h1>Welcome to The Livewire Basics</h1>
    @livewire('todos')
</body>

</html>
