<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
    <title>My Website</title>
</head>
<body class="h-screen">
    <x-notification type="success" description="Placeholder description"/>

    <header class="p-4 mx-auto bg-gray-400">
        <h1 class="font-bold text-lg">My Site: {{ $title }}</h1>
    </header>

    <div class="flex p-4">
        @if (isset($sidebar))
            <aside class="w-1/4">
                sidebar
            </aside>
        @endif

        <main class="flex-1">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
