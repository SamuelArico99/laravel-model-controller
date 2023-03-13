<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container">
                <div class="row mb-4">
                    <div class="col text-center">

                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title">Movies</h1>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row g-3">
                    @foreach ($movies as $movie)
                    <div class="col-3">

                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">{{ $movie->title }}</h1>
                            </div>
                        </div> 

                    </div>
                    @endforeach

                </div>
            </div>
        </main>

    </body>
</html>
