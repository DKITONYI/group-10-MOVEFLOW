<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900">

    <!-- Navigation -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">

                <!-- Left Side Menu -->
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center text-xl font-bold">
                        <a href="{{ url('/') }}">
                            MoveFlow
                        </a>
                    </div>

                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                        <a href="{{ route('missions.index') }}"
                           class="text-gray-700 hover:text-black px-3 py-2">
                            Missions
                        </a>

                        <a href="{{ route('workouts.index') }}"
                           class="text-gray-700 hover:text-black px-3 py-2">
                            Workouts
                        </a>

                        <a href="{{ route('teams.index') }}"
                           class="text-gray-700 hover:text-black px-3 py-2">
                            Teams
                        </a>

                        <a href="{{ route('chapters.index') }}"
                           class="text-gray-700 hover:text-black px-3 py-2">
                            Chapters
                        </a>

                        <a href="{{ route('leaderboard') }}"
                           class="text-gray-700 hover:text-black px-3 py-2">
                            Leaderboard
                        </a>

                    </div>
                </div>

                <!-- Right Side Menu -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">

                    @auth
                        <!-- User Dropdown -->
                        <div class="ml-3 relative">
                            <div>
                                <button onclick="document.getElementById('dropdown').classList.toggle('hidden')"
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                         src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}"
                                         alt="User avatar">
                                </button>
                            </div>

                            <div id="dropdown"
                                 class="hidden absolute right-0 mt-2 w-48 bg-white rounded shadow-lg py-2">

                                <p class="px-4 py-2 text-sm text-gray-600">
                                    {{ Auth::user()->name }}
                                </p>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                                        Log Out
                                    </button>
                                </form>

                            </div>
                        </div>
                    @endauth

                    @guest
                        <a href="{{ route('login') }}"
                           class="text-gray-700 hover:text-black px-3 py-2">
                            Login
                        </a>
                        <a href="{{ route('register') }}"
                           class="text-gray-700 hover:text-black px-3 py-2">
                            Register
                        </a>
                    @endguest

                </div>

                <!-- Mobile menu button -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
                            class="p-2 rounded-md text-gray-600 hover:text-black focus:outline-none">
                        ☰
                    </button>
                </div>

            </div>
        </div>

        <!-- Mobile Dropdown -->
        <div id="mobile-menu" class="hidden sm:hidden bg-white">
            <div class="pt-2 pb-3 space-y-1">

                <a href="{{ route('missions.index') }}" class="block px-4 py-2 text-gray-700">Missions</a>
                <a href="{{ route('workouts.index') }}" class="block px-4 py-2 text-gray-700">Workouts</a>
                <a href="{{ route('teams.index') }}" class="block px-4 py-2 text-gray-700">Teams</a>
                <a href="{{ route('chapters.index') }}" class="block px-4 py-2 text-gray-700">Chapters</a>
                <a href="{{ route('leaderboard') }}" class="block px-4 py-2 text-gray-700">Leaderboard</a>

            </div>

            @auth
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="px-4 text-gray-700">{{ Auth::user()->name }}</div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="block w-full text-left px-4 py-2 text-gray-700">
                            Log Out
                        </button>
                    </form>
                </div>
            @endauth
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-8">
        @yield('content')
    </main>

</body>
</html>
