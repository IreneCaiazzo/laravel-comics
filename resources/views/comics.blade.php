<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DC Comics</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}

        <header>

            <div class="container-header">

                <div>
                    <img class="size-img"  src="{{ Vite::asset('../../images/dc-logo.png') }}" alt="">
                </div>
    
                <div class="nav-bar">
                    <ul>
                        <li><strong> CHARACTERS </strong></li>
                        <li><strong>COMICS</strong></li>
                        <li><strong>MOVIES</strong></li>
                        <li><strong>TV</strong></li>
                        <li><strong>GAMES</strong></li>
                        <li><strong>COLLECTIBLES</strong></li>
                        <li><strong>VIDEOS</strong></li>
                        <li><strong>FANS</strong></li>
                        <li><strong>NEWS</strong></li>
                        <li><strong>SHOP</strong></li>
                    </ul>
                </div>
            </div>

            {{-- jumbo --}}

            <div class="jumbo">
                
            </div>

        </header>

        <main>
            <div class="container-main">
                @foreach ($arrComics as $comic)
                    <div class="comic">
                        <img src="{{ Vite::asset('../../images/dc-comics-detective.jpg')}}" alt="">
                        <p>{{$comic['title']}}</p>
                    </div>
                @endforeach
            </div>
        </main>

        <footer>

        </footer>
    </body>
</html>
