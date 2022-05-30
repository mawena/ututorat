<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="Ututorat Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        @if ($is_tutor_page)
                            <ul>
                                <li @if (Route::is('home')) class='active' @endif><a
                                        href="{{ route('home') }}">Homepage</a></li>
                                <li @if (Route::is('activities')) class='active' @endif>
                                    <a href="{{ route('activities', 1) }}">Acitivities</a>
                                </li>
                                <li @if (Route::is('movies')) class='active' @endif>
                                    <a href="{{ route('movies', 1) }}">My movies</a>
                                </li>
                                <li @if (Str::contains(url()->current(), "teach_the_world")) class='active' @endif>
                                    <a>Teach the world</a>
                                    <ul class="dropdown">
                                        <li @if (Route::is('teach_the_world/movie_form')) echo style="background: #E53637" @endif>
                                            <a href="{{ route('teach_the_world/movie_form') }}">
                                                Add a movie
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        @else
                            <ul>
                                <li @if (Route::is('homepage') || Str::contains(url()->current(), 'home')) echo class='active' @endif><a
                                        href="{{ route('homepage') }}">Homepage</a></li>
                                <li @if (Str::contains(url()->current(), 'categories')) echo class='active' @endif>
                                    <a href="{{ route('categories') }}">Categories<span
                                            class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li @if (Route::is('categories')) echo style="background: #E53637" @endif>
                                            <a href="{{ route('categories') }}">All Categories</a>
                                        </li>
                                        <li @if (Route::is('programmation')) echo style="background: #E53637" @endif>
                                            <a href="{{ route('programmation') }}">Programmation</a>
                                        </li>
                                        <li @if (Route::is('personnal_development')) echo style="background: #E53637" @endif>
                                            <a href="{{ route('personnal_development') }}">Personnal development</a>
                                        </li>
                                        <li @if (Route::is('right')) echo style="background: #E53637" @endif>
                                            <a href="{{ route('right') }}">Right</a>
                                        </li>
                                        <li @if (Route::is('tech')) echo style="background: #E53637" @endif>
                                            <a href="{{ route('tech') }}">Tech</a>
                                        </li>
                                        <li @if (Route::is('oratorical_art')) echo style="background: #E53637" @endif>
                                            <a href="{{ route('oratorical_art') }}">Oratorical Art</a>
                                        </li>
                                        <li @if (Route::is('other')) echo style="background: #E53637" @endif>
                                            <a href="{{ route('other') }}">Other</a>
                                        </li>
                                    </ul>
                                </li>
                                <li @if (Route::is('playlist')) echo style="background: #E53637" @endif>
                                    <a href="{{ route('playlist', 2) }}">My Playlist</a>
                                </li>
                                @if (false)
                                    <li @if (Route::is('activities')) echo style="background: #E53637" @endif>
                                        <a href="{{ route('activities', 2) }}">My Activities</a>
                                    </li>
                                @endif
                            </ul>
                        @endif
                    </nav>
                </div>
            </div>
            <div class="header__nav">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li>
                            <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        </li>
                        <li @if (Str::contains(url()->current(), 'account')) echo class='active' @endif>
                            @auth
                                <a><span class="icon_profile"></span>{{ Auth::user()->name }}</a>
                            @endauth
                            @guest
                                <a href="{{ route('login') }}"><span class="icon_profile"></span>Account</a>
                            @endguest
                            <ul class="dropdown">
                                @auth
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                    @if (Auth::user()->isTutor)
                                        <li>
                                            <a href="{{ route('activities') }}">
                                                Tutor dashboard
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('account/account_upgrade') }}">
                                                Become a tutor
                                            </a>
                                        </li>
                                    @endif
                                @endauth
                                @guest
                                    <li @if (Route::is('login')) echo style="background: #E53637" @endif>
                                        <a href="{{ route('account/login') }}">Login</a>
                                    </li>
                                    <li @if (Route::is('register')) echo style="background: #E53637" @endif>
                                        <a href="{{ route('account/register') }}">Register</a>
                                    </li>
                                @endguest
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
        {{-- <h1 style="color: white; font-size: 50px" class="center">@yield('title')</h1> --}}
        <h1 style="color: white; font-size: 50px; text-align: center;">@yield('title')</h1>
    </div>
</header>
<!-- Header End -->
