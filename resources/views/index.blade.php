<!DOCTYPE html>
<html>
    <head>
        <title>{{ env('APP_NAME') }} | Fumetti</title>
        <meta charset="UTF-8">
        <meta name="author" content="Daniele Ercoli">
        <meta name="description" content="esercizio">
        <meta name="keyword" content="laravel, blade, scss">
        <meta name="viewport" content="width= device_width, initial-scale= 1.0">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous'/>
        @vite('resources/js/app.js')
    </head>
    @include('includes.header');
    <main>
        <section id="comics-list">
            <div class="container">
                <button class="series">CURRENT SERIES</button>
                <div class="row">
                    <div class="card" v-for="(comic, i) in comics" :key="i">
                        <figure>
                            <img :src="comic.thumb" :alt="comic.series" />
                            <figcaption>
                                <h4></h4>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="btn-box">
                    <button class="more">
                        <h3>LOAD MORE</h3>
                    </button>

                </div>

            </div>
        </section>
    </main>
    @include('includes.footer');
</body>

    
</html>