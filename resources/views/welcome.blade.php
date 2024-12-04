<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="antialiased bg-gray-50">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-gradient-to-br from-blue-100 via-white to-gray-200">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="text-center">
                    <h1 class="text-4xl font-bold text-gray-900">Welcome to Laravel!</h1>

                    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Documentation -->
                        <a href="https://laravel.com/docs" class="p-6 bg-white rounded-lg shadow-xl hover:scale-105 transition-all">
                            <h2 class="text-xl font-semibold text-gray-900">Documentation</h2>
                            <p class="mt-4 text-gray-500 text-sm">
                                Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                            </p>
                        </a>

                        <!-- Laracasts -->
                        <a href="https://laracasts.com" class="p-6 bg-white rounded-lg shadow-xl hover:scale-105 transition-all">
                            <h2 class="text-xl font-semibold text-gray-900">Laracasts</h2>
                            <p class="mt-4 text-gray-500 text-sm">
                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                            </p>
                        </a>

                        <!-- Laravel News -->
                        <a href="https://laravel-news.com" class="p-6 bg-white rounded-lg shadow-xl hover:scale-105 transition-all">
                            <h2 class="text-xl font-semibold text-gray-900">Laravel News</h2>
                            <p class="mt-4 text-gray-500 text-sm">
                                Laravel News is a community-driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                            </p>
                        </a>

                        <!-- Vibrant Ecosystem -->
                        <a href="https://forge.laravel.com" class="p-6 bg-white rounded-lg shadow-xl hover:scale-105 transition-all">
                            <h2 class="text-xl font-semibold text-gray-900">Vibrant Ecosystem</h2>
                            <p class="mt-4 text-gray-500 text-sm">
                                Laravel's robust library of first-party tools and libraries, such as Forge, Vapor, Nova, and Envoyer help you take your projects to the next level. Pair them with powerful open source libraries like Cashier, Dusk, Echo, Horizon, Sanctum, Telescope, and more.
                            </p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Move version info here at the bottom -->
            <div class="text-center text-sm text-gray-500 sm:text-right sm:ml-0 mt-16">
                <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
            </div>
        </div>
    </body>
</html>
