<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ mix('js/app.js') }}"></script>

    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
</head>

<body>
    <div id="app">
        <nav class="bg-teal-500 p-6">
            <div class="flex justify-between items-center text-white mr-6">
                <div class="flex">
                    <a class="font-semibold text-xl tracking-tight hover:text-blue-800" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <div class="flex">
                    @guest
                    <a class="px-4 hover:text-blue-800" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                    <a class="px-4 hover:text-blue-800" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else
                    <a class="px-4 hover:text-blue-800" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form class="hover:text-blue-800" id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>