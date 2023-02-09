<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Movies</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="bg-dark">

    <main class="p-3">
        <h1 class="text-center text-light py-3">Movies</h1>
        <div class="row justify-content-center g-3">
            @foreach ($movies as $movie)
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <div class="card p-2">
                        <h2>{{ $movie['original_title'] }}</h2>
                        <div class="text-primary">{{ $movie['nationality'] }}</div>
                        <div class="text ">{{ $movie['vote'] }}</div>
                        <div class="text-secondary">{{ $movie['date'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
    
</body>

</html>
