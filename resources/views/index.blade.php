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
    <body>
    <header>
        <div class="top-background">
            <div class="top-page">
                <span>DC POWER VISA&reg;</span>
                <span>ADDITIONAL DC SITES<i class="fas fa-sort-down"></i></span>
            </div>

        </div>
        <div class="header-content">
            <figure>
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo DC Comics" />
            </figure>
            <nav>
                <ul>
                    <li>
                        <a :href="{{ route('index') }}">CHARACTERS</a>
                    </li>
                    <li>
                        <a :href="{{ route('index') }}">COMICS</a>
                    </li>
                    <li>
                        <a :href="{{ route('index') }}">MOVIES</a>
                    </li>
                    <li>
                        <a :href="{{ route('index') }}">TV</a>
                    </li>
                    <li>
                        <a :href="{{ route('index') }}">GAMES</a>
                    </li>
                    <li>
                        <a :href="{{ route('index') }}">COLLECTIBLES</a>
                    </li>
                    <li>
                        <a :href="{{ route('index') }}">VIDEOS</a>
                    </li>
                    <li>
                        <a :href="{{ route('index') }}">FANS</a>
                    </li>
                    <li>
                        <a :href="{{ route('index') }}">NEWS</a>
                    </li>
                    <li>
                        <a :href="{{ route('index') }}">SHOP<i class="fas fa-sort-down"></i></a>
                    </li>
                </ul>
            </nav>
            <form action="">
                <input type="text" value="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </form>
        </div>
        
    </header>
    <div class="jumbotron"></div>
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
    <footer>
        <FooterBar>
            <section id="shop-sections">
                <ul class="links-pic">
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="kindle">
                            <h4>DIGITAL COMICS</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="maglietta">
                            <h4>DC MERCHANDISE</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="tessere">
                            <h4>SUBSCRIPTION</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"
                                alt="icona della posizione">
                            <h4>COMIC SHOP LOCATOR</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="visa" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="carta visa">
                            <h4>DC POWER VISA</h4>
                        </a>
                    </li>
                </ul>
            </section>
        </FooterBar>
        <section id="site-links">
            <div class="lists-row">
                <div>
                    <h5>DC COMICS</h5>
                    <ul>
                        <li>
                            <a href="#">
                                Characters
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Comics
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Movies
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                TV
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Games
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Videos
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                News
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h5>SHOP</h5>
                    <ul>
                        <li>
                            <a href="#">
                                Shop DC
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Shop DC Collectibles
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h5>DC</h5>
                    <ul>
                        <li>
                            <a href="#">
                                Terms of Use
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Privacy policy (New)
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Ad Choices
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Advertising
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Jobs
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Subscriptions
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Talent Workshops
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                CPSC Certificates
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Ratings
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Shop Help
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h5>SITES</h5>
                    <ul>
                        <li>
                            <a href="#">
                                DC
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                MAD Magazine
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                DC Kids
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                DC Universe
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                DC Power Visa
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="button-links">
            <nav class="lower-footer">
                <div>
                    <button class="sign-up">SIGN-UP NOW!</button>
                </div>
                <div class="f-links">
                    <h5>FOLLOW US</h5>
                    <ul class="links-list">
                        <li>
                            <a href="#">
                                <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}"
                                    alt="logo di facebook" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="logo di twitter" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="logo di youtube" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}"
                                    alt="logo di pinterest" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}"
                                    alt="logo di periscope" />
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>


        </section>
    </footer>
</body>

    
</html>