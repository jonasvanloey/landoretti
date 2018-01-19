<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css\index.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css"/>


    </head>
    <body>
        {{--<div class="flex-center position-ref full-height">--}}
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@auth--}}
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ route('login') }}">Login</a>--}}
                        {{--<a href="{{ route('register') }}">Register</a>--}}
                    {{--@endauth--}}
                {{--</div>--}}
            {{--@endif--}}

            {{--<div class="content">--}}
                {{--<div class="title m-b-md">--}}
                    {{--Laravel--}}
                {{--</div>--}}

                {{--<div class="links">--}}
                    {{--<a href="https://laravel.com/docs">Documentation</a>--}}
                    {{--<a href="https://laracasts.com">Laracasts</a>--}}
                    {{--<a href="https://laravel-news.com">News</a>--}}
                    {{--<a href="https://forge.laravel.com">Forge</a>--}}
                    {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    <div class="top-nav">
        <div class="wrapper">
            <ul class="">
                @guest
                <li><a href="{{url('login')}}"><span></span>login</a></li>
                <li><a href="{{url('register')}}"><span></span>Register</a></li>
                @else
                    <li><a href="/watchlist"><span></span>watchlist</a></li>
                    <li><a href="/profile"><span></span>profile</a></li>
                    <li><a href="{{url('logout')}}"><span></span>logout</a></li>
                    @endguest
                <div class="cfx"></div>
            </ul>
        </div>
    </div>
    <div class="bottom-nav">
        <div class="wrapper">
            {{--<img src=" {{asset('img/1_logo.svg')}}" alt="logo Landoretti">--}}
            <nav>
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="/art">ART</a></li>
                    <li><a href="/isearch">ISEARCH</a></li>
                    <li><a href="/myauctions">MYAUCTIONS</a></li>
                    <li><a href="">MYBIDS</a></li>
                    <li><a href="">CONTACT</a></li>
                    <div class="cfx"></div>
                </ul>
            </nav>

            <div class="lang">
                <ul>
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['abr'] }}
                            </a>
                        </li>
                    @endforeach
                    <div class="cfx"></div>
                </ul>
            </div>
            <div class="cfx"></div>
        </div>
    </div>
        @yield('content')
    </body>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <ul>
                    <li>
                        <h3>Help</h3>
                    </li>
                    <li>Login</li>
                    <li>Register</li>
                </ul>
                <ul>
                    <li>
                        <h3>Help</h3>
                    </li>
                    <li>Terms of Service</li>
                    <li>Privacy Policy</li>
                    <li>FAQ</li>
                    <li>Contact Us</li>
                    <li>About Us</li>
                </ul>
                <ul>
                    <li>
                        <h3>Languages</h3>
                    </li>
                    <li>Nederlands</li>
                    <li>Français</li>
                    <li>English</li>
                </ul>
            </div>
            <div class="col-lg-3">
                <ul>
                    <li>
                        <h3>Style</h3>
                    </li>
                    <li>Abstract</li>
                    <li>African American</li>
                    <li>Asian Contemporary</li>
                    <li>Conceptual</li>
                    <li>Contemporary</li>
                    <li>Emerging Artists</li>
                    <li>Figurative</li>
                    <li>Middle Eastern Contemporary</li>
                    <li>Minimalism</li>
                    <li>Modern</li>
                    <li>Pop</li>
                    <li>Urban</li>
                    <li>Vintage Photographs</li>
                </ul>
                <ul>
                    <li>
                        <h3>Style</h3>
                    </li>
                    <li>Design</li>
                    <li>Paintings and Works on Paper</li>
                    <li>Photographs</li>
                    <li>Prints and Multiples</li>
                    <li>Sculpture</li>
                </ul>
            </div>
            <div class="col-lg-3">
                <ul>
                    <li>
                        <h3>Price</h3>
                    </li>
                    <li><a href="#">Up to 5,000</a></li>
                    <li><a href="#">5,000–10,000</a></li>
                    <li><a href="#">10,000–25,000</a></li>
                    <li><a href="#">25,000–50,000</a></li>
                    <li><a href="#">50,000–100,000</a></li>
                    <li><a href="#">Above</a></li>
                </ul>
                <ul>
                    <li>
                        <h3>Era</h3>
                    </li>
                    <li><a href="#">Pre-War</a></li>
                    <li><a href="#">1940s–1950s</a></li>
                    <li><a href="#">1960s–1980s</a></li>
                    <li><a href="#">1990s–Present</a></li>
                </ul>
                <ul>
                    <li>
                        <h3>Endings</h3>
                    </li>
                    <li>Ending this Week</li>
                    <li>Newly Listed</li>
                    <li>Purchase Now</li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h3>Find hat you need</h3>
                {!!  Form::open(['url' => '/art','method' => 'GET']) !!}
                {!! Form::input('text','find') !!}
                {!! Form::submit('Zoek') !!}
                {!! Form::close() !!}
                <h3>Contact</h3>
                <ul>
                    <li>Landoretti ART</li>
                    <li>Straatnaam xxx</li>
                    <li>xxxx, Oostende</li>
                </ul>
                <ul>
                    <li><span></span>+xx (0)x xxx xx xx</li>
                    <li><span></span><a>info@landorettiart.com</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
    <div class="bottom-nav">
        <div class="wrapper">
            {{--<img src=" {{asset('img/1_logo.svg')}}" alt="logo Landoretti">--}}
            <nav>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">ART</a></li>
                    <li><a href="">ISEARCH</a></li>
                    <li><a href="">MYAUCTIONS</a></li>
                    <li><a href="">MYBIDS</a></li>
                    <li><a href="">CONTACT</a></li>
                    <div class="cfx"></div>
                </ul>
            </nav>

            <div class="lang">
                <ul>
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['abr'] }}
                            </a>
                        </li>
                    @endforeach
                    <div class="cfx"></div>
                </ul>
            </div>
            <div class="cfx"></div>
        </div>
    </div>
<div class="bottom-line">

</div>
</html>
