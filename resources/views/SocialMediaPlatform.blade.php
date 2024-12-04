<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased bg-gray-50">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-gradient-to-br from-blue-100 via-white to-gray-200">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <div class="flex space-x-4"> <!-- This creates a horizontal layout for the buttons -->
                        <a href="{{ url('/uploads/create') }}" 
                           class="font-semibold px-6 py-2 bg-yellow-500 text-white text-lg font-medium rounded-lg hover:bg-yellow-600 focus:outline focus:outline-2 focus:outline-yellow-500">
                            Create
                        </a>

                        <form action="{{ route('logout') }}" method="POST" class="inline-block">
                            @csrf
                            <button type="submit" class="font-semibold px-6 py-2 bg-red-500 text-white text-lg font-medium rounded-lg hover:bg-red-600 focus:outline focus:outline-2 focus:outline-red-500">
                                Logout
                            </button>
                        </form>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:outline-blue-500">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:outline-green-500">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="bg-white shadow-lg rounded-xl p-8 max-w-xl mx-auto text-center">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-6">Social Media Platform</h1>
            <p class="text-lg text-gray-600 mb-6">
                Connect, share, and explore with our platform. Join now and start building your network!
            </p>
            <div class="flex justify-center space-x-4 mb-6">
                @auth
                    <a href="{{ url('/uploads') }}" class="px-6 py-2 bg-green-600 text-white text-lg font-medium rounded-lg hover:bg-green-700">
                        Home
                    </a>
                @else
                    <a href="{{ route('register') }}" class="px-6 py-2 bg-green-600 text-white text-lg font-medium rounded-lg hover:bg-green-700">
                        Get Started
                    </a>
                    <a href="{{ route('login') }}" class="px-6 py-2 bg-gray-600 text-white text-lg font-medium rounded-lg hover:bg-gray-700">
                        Log in
                    </a>
                @endauth
            </div>

            <div class="flex flex-wrap justify-center space-x-4">
                <a href="{{ route('about') }}" class="px-4 py-2 bg-blue-500 text-white text-lg font-medium rounded-lg hover:bg-blue-600">
                    About Us
                </a>
                <a href="{{ route('features') }}" class="px-4 py-2 bg-purple-500 text-white text-lg font-medium rounded-lg hover:bg-purple-600">
                    Features
                </a>
                
                <a href="{{ route('blog') }}" class="px-4 py-2 bg-yellow-500 text-white text-lg font-medium rounded-lg hover:bg-yellow-600">
                    Blog
                </a>
            </div>
        </div>
    </div>
</body>

</html>
