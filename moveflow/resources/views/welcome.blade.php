<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoveFlow - Redefining Fitness</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900">

    <!-- Hero Section -->
    <section class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-6 py-24 flex flex-col items-center text-center">

            <h1 class="text-5xl font-extrabold mb-6">
                MoveFlow
            </h1>

            <p class="text-xl text-gray-600 max-w-2xl mb-10">
                Redefining fitness by making exercise fun, engaging, and consistent.
                Join us on a journey where workouts become missions, and progress becomes a story.
            </p>

            <div class="flex space-x-6">
                <a href="{{ route('login') }}"
                   class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 shadow">
                    Login
                </a>

                <a href="{{ route('register') }}"
                   class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 shadow">
                    Register
                </a>
            </div>

        </div>
    </section>

    <!-- About Section -->
    <section class="max-w-7xl mx-auto px-6 py-20">

        <h2 class="text-4xl font-bold text-center mb-10">About MoveFlow</h2>

        <div class="grid md:grid-cols-2 gap-10 items-center">

            <div>
                <h3 class="text-2xl font-semibold mb-4">Why MoveFlow?</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Most people start their fitness journey with enthusiasm—but lose motivation after just a few weeks.
                    MoveFlow transforms workouts into a fun and rewarding experience by combining:
                </p>

                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Gamified fitness missions</li>
                    <li>Team challenges and accountability</li>
                    <li>Short, fun workouts for any schedule</li>
                    <li>Progressive storyline unlocking as you gain points</li>
                </ul>
            </div>

            <div class="p-6 bg-white rounded-xl shadow">
                <h3 class="text-2xl font-semibold mb-4">What You'll Get</h3>

                <p class="text-gray-700 mb-3">
                    Whether you're a beginner or a seasoned athlete, MoveFlow helps you stay consistent by making fitness enjoyable.
                </p>

                <p class="text-gray-700 mb-3">
                    And with a supportive community, you’ll never feel alone on your journey.
                </p>

                <p class="text-gray-700 font-semibold">
                    Start today — your fitness story awaits!
                </p>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center py-6">
        <p>&copy; {{ date('Y') }} MoveFlow. All Rights Reserved.</p>
    </footer>

</body>
</html>
