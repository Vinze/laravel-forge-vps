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
        <form action="{{ url('todo') }}" method="post" class="flex">
            @csrf
            <input type="text" name="description" placeholder="Description" class="block grow p-2 text-lg bg-white/50 border-0">
            <button type="submit" class="py-2 px-4 bg-pink-300/50 text-white font-bold text-lg">ADD TODO</button>
        </form>
    </div>
</body>
</html>