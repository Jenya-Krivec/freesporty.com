<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#" xml:lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="title" content="@yield('title')">
    <meta name="robots" content="all, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <meta name="google-site-verification" content="">
    <title>@yield('title')</title>
    @foreach(\App\Helpers\Language::LOCALE as $locale => $language)
        @if($locale != app()->getLocale())
            <link rel="alternate" hreflang="{{$locale}}" href="{{\App\Helpers\Language::getUri($locale)}}"/>
        @else
            <link rel="canonical" href="{{\App\Helpers\Language::getUri($locale)}}"/>
            <meta property="og:url" content="{{\App\Helpers\Language::getUri($locale)}}"/>
        @endif
    @endforeach
    <meta property="og:site_name" content="FREESPORTY"/>
    <meta property="og:type" content="website">
    <meta property="og:description" content="@yield('description')"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:image" content="{{asset('img/logo/logo.png').'?v='.filemtime('img/logo/logo.png')}}">
    <meta property="og:image:secure_url" content="{{asset('img/logo/logo.png').'?v='.filemtime('img/logo/logo.png')}}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="260">
    <meta property="og:image:height" content="100">
    <meta name="theme-color" content="#1D4ED8FF">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico').'?v='.filemtime('img/favicon.ico')}}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/tailwind.css').'?v='.filemtime('css/tailwind.css')}}">
</head>
<body>
<div class="fixed top-0 left-0 w-full h-full bg-white z-30" id="preloader">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <div class="animate-spin rounded-full h-5 w-5 border-b-2 border-violet-500"></div>
    </div>
</div>
<header class="bg-white shadow-sm fixed w-full z-20 border-b-2 border-violet-500">
    <nav class="flex items-center py-3 w-full">
        <a href="{{route('index')}}" class="mx-10">
            <img src="{{asset('img/logo/logo.png').'?v='.filemtime('img/logo/logo.png')}}" alt="FREESPORTY" class="w-32 logo" width="260" height="100">
        </a>
        <!--Change language-->
        <div class="relative align-self-center ml-auto mr-2">
            <button class="block text-violet-500 focus:outline-none" id="language" aria-haspopup="true" aria-expanded="false">
                <span class="hover:bg-violet-1000 p-2 transition-all duration-500">
                    @foreach(\App\Helpers\Language::LOCALE as $locale => $language)
                        @if($locale == app()->getLocale())
                            {{$language}}
                        @endif
                    @endforeach
                    <svg fill="currentColor" viewBox="0 0 20 20" class="language-arrow w-4 h-4 inline-block transition-all duration-300">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </span>
            </button>
            <div class="dropdown-menu absolute right-0 mt-2 py-2 w-48 bg-white border-2 border-violet-500 rounded-md shadow-lg hidden z-20">
                @foreach(\App\Helpers\Language::LOCALE as $locale => $language)
                    <a class="block px-4 py-2 text-violet-500 hover:bg-violet-500 hover:text-white transition-all duration-500" href="{{\App\Helpers\Language::getUri($locale)}}">{{$language}}</a>
                @endforeach
            </div>
        </div>
    </nav>
</header>
@yield('content')
<button class="fixed bottom-20 right-4 bg-white rounded-full p-2 hidden border-2 border-violet-500" id="go-up">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#5427ab">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
    </svg>
</button>
<div class="fixed inset-0 bg-black opacity-50 z-10 hidden" id="overlay"></div>
<div class="fixed -bottom-40 left-0 right-0 bg-transparent z-10 transition-all duration-1000 hidden" id="cookie-message">
    <div class="bg-white w-full lg:w-1/3 mx-auto rounded-md p-6 shadow-lg border-2 border-violet-500">
        <h2 class="text-lg font-bold text-center">@lang('app.Cookies')</h2>
        <p class="text-sm text-center">@lang('app.We use cookies to improve your experience on our site').</p>
        <div class="flex justify-center mt-4">
            <button class="bg-violet-500 hover:bg-violet-600 text-white font-bold py-2 px-4 rounded-full transition-all duration-500" id="cookie-accept">@lang('app.Accept')</button>
            <button class="bg-gray-300 hover:bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded-full ml-2 transition-all duration-500" id="cookie-decline">@lang('app.Decline')</button>
        </div>
    </div>
</div>
<footer class="bg-white py-5 border-t-2 border-b-2 border-violet-500">
    <p class="text-sm text-violet-500 text-center">&copy; {{ date('Y') }} FREESPORTY</p>
</footer>
</body>
<script defer type="text/javascript" src="{{asset('js/preloader.js').'?v='.filemtime('js/preloader.js')}}"></script>
<script defer type="text/javascript" src="{{asset('js/language.js').'?v='.filemtime('js/language.js')}}"></script>
<script defer type="text/javascript" src="{{asset('js/goUp.js').'?v='.filemtime('js/goUp.js')}}"></script>
<script defer type="text/javascript" src="{{asset('js/cookie.js').'?v='.filemtime('js/cookie.js')}}"></script>
<script defer type="text/javascript" src="{{asset('js/link.js').'?v='.filemtime('js/link.js')}}"></script>
</html>

