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
                    <li class="{{ request()->routeIs('characters') ? 'active' : ''}}">
                        <a  href="{{ route('characters') }}">CHARACTERS</a>
                    </li>
                    <li class="{{ request()->routeIs('index') ? 'active' : ''}}">
                        <a  href="{{ route('index') }}">COMICS</a>
                    </li>
                    <li class="{{ request()->routeIs('movies') ? 'active' : ''}}">
                        <a  href="{{ route('movies') }}">MOVIES</a>
                    </li>
                    <li class="{{ request()->routeIs('tv') ? 'active' : ''}}">
                        <a  href="{{ route('tv') }}">TV</a>
                    </li>
                    <li class="{{ request()->routeIs('') ? 'active' : ''}}">
                        <a  href="{{ route('index') }}">GAMES</a>
                    </li>
                    <li class="{{ request()->routeIs('') ? 'active' : ''}}">
                        <a  href="{{ route('index') }}">COLLECTIBLES</a>
                    </li>
                    <li class="{{ request()->routeIs('') ? 'active' : ''}}">
                        <a  href="{{ route('index') }}">VIDEOS</a>
                    </li>
                    <li class="{{ request()->routeIs('') ? 'active' : ''}}">
                        <a  href="{{ route('index') }}">FANS</a>
                    </li>
                    <li class="{{ request()->routeIs('') ? 'active' : ''}}">
                        <a  href="{{ route('index') }}">NEWS</a>
                    </li>
                    <li class="{{ request()->routeIs('') ? 'active' : ''}}">
                        <a  href="{{ route('index') }}">SHOP<i class="fas fa-sort-down"></i></a>
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