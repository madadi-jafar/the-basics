<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire Basics</title>
    <!-- Include Tailwind CSS if needed -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body class="bg-gray-100 text-gray-900">

    <div class="container mx-auto p-4">
        @livewire('todo')
    </div>

    @livewireScripts
</body>
</html>
