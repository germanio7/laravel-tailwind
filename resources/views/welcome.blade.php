<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ mix('css/main.css') }}">

</head>

<body>
    <div class="flex-wrap">
        @if (Route::has('login'))
        <div class="flex justify-end items-center bg-black">
            @auth
            <a class="text-white p-4" href="{{ url('/home') }}">Home</a>
            @else
            <a class="text-white p-4" href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a class="text-white p-4" href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="flex-wrap justify-center">
            <div class="flex justify-center text-6xl text-blue-700 m-10">
                Bienvenid@
            </div>

            <div class="flex bg-green-100 justify-center items-center text-justify m-20 p-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ratione culpa eveniet molestias iste architecto quidem pariatur asperiores molestiae! Nesciunt iusto odio ad esse, enim inventore quae at ut? Illum!
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat quas culpa quia blanditiis assumenda exercitationem molestiae ex! Velit, blanditiis amet laboriosam obcaecati sapiente veniam a, in dolor autem facere nobis?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, cupiditate? Repudiandae perferendis fugiat architecto! Illum aliquid cum, fugiat ipsa omnis enim eaque. Autem porro similique perferendis, eum id aliquam quaerat!
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id eaque quas debitis praesentium veritatis commodi maiores laboriosam repudiandae aliquam fugiat deleniti, et ullam sed vitae rerum ducimus quae pariatur libero.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore ullam veritatis beatae blanditiis dolores itaque, minima, eos, voluptatem reiciendis asperiores voluptas. Reiciendis consequatur facere eius obcaecati quam repudiandae animi maxime.
            </div>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>