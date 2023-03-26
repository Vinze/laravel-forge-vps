<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url(mix('css/app.css'))}}">
    <title>Forge test app</title>
</head>
<body class="min-h-screen min-w-full flex bg-gradient-to-tr from-pink-400 to-sky-600 text-gray-700">
    <div class="container mx-auto py-8 max-w-4xl">
        <h1 class="mb-8 font-bold text-white text-2xl md:text-5xl xl:text-7xl">Hello from Laravel Forge 😁</h1>
        <form action="{{ url('todos/new') }}" method="post" class="flex mb-4">
            @csrf
            <input type="text" name="description" placeholder="Description" autofocus class="block grow p-4 text-lg bg-white/50 border-0">
            <button type="submit" class="p-4 bg-pink-300/50 text-sky-700 font-bold text-lg">ADD TODO</button>
        </form>

        @foreach ($todos as $todo)
            <div class="mt-4 py-2 px-4 text-white border-2 border-white/20 rounded">
                <div class="font-bold text-xl">
                    {{ $todo->description }}
                </div>
                <div class="mt-1 text-sm">
                    {{ $todo->created_at->format('d-m-Y H:i') }}
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>