<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title ?? '' }} | Fumetti</title>
        <meta charset="UTF-8">
        <meta name="author" content="Daniele Ercoli">
        <meta name="description" content="esercizio">
        <meta name="keyword" content="laravel, blade, scss">
        <meta name="viewport" content="width= device_width, initial-scale= 1.0">
        @vite('resources/js/app.js')
    </head>
    <body>
    <header>
            <figure>
                <img src="../assets/assets-vue-dc-comics-1/img/dc-logo.png" alt="logo DC Comics" />
            </figure>
            <nav>
                <ul>
                    <li v-for="(link, i) in links" :key="i">
                        <a :href="{{ route('index') }}"></a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="jumbotron"></div>
    </body>

        
</html>