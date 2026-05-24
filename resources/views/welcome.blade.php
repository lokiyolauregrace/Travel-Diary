<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Diary ✈️</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-pink-50">

    <nav class="bg-white shadow p-5 flex justify-between items-center">

        <h1 class="text-3xl font-bold text-pink-500">
            Travel Diary ✈️
        </h1>

        <div class="flex gap-6 items-center">

            <a href="/travel-posts"
               class="text-pink-500 font-semibold hover:text-pink-700">
                Posts
            </a>

            <a href="/faq"
               class="text-pink-500 font-semibold hover:text-pink-700">
                FAQ
            </a>

            <a href="/contact"
               class="text-pink-500 font-semibold hover:text-pink-700">
                Contact
            </a>

            @auth

                <a href="/dashboard"
                   class="bg-pink-500 text-white px-5 py-2 rounded-2xl">
                    Dashboard
                </a>

            @else

                <a href="/login"
                   class="bg-pink-500 text-white px-5 py-2 rounded-2xl">
                    Login
                </a>

            @endauth

        </div>

    </nav>



    <section class="max-w-6xl mx-auto py-24 px-6 grid md:grid-cols-2 gap-16 items-center">

        <div>

            <h1 class="text-6xl font-bold text-pink-500 leading-tight mb-8">
                Share your travel memories with the world 🌍
            </h1>

            <p class="text-gray-700 text-xl mb-8">
                Create beautiful travel posts, discover amazing places,
                and keep your favorite memories forever ✨
            </p>

            <div class="flex gap-5">

                <a href="/travel-posts"
                   class="bg-pink-500 hover:bg-pink-600 text-white px-8 py-4 rounded-3xl shadow-lg">
                    Explore Posts ✈️
                </a>

                <a href="/register"
                   class="bg-white border border-pink-300 text-pink-500 px-8 py-4 rounded-3xl shadow">
                    Join Now 💖
                </a>

            </div>

        </div>



        <div>

            <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=2070&auto=format&fit=crop"
                 class="rounded-3xl shadow-2xl">

        </div>

    </section>



    <section class="bg-white py-20">

        <div class="max-w-6xl mx-auto px-6">

            <h2 class="text-5xl font-bold text-center text-pink-500 mb-16">
                Why Travel Diary? ✨
            </h2>

            <div class="grid md:grid-cols-3 gap-8">

                <div class="bg-pink-50 p-8 rounded-3xl shadow">

                    <h3 class="text-2xl font-bold text-pink-500 mb-4">
                        Beautiful Posts 📸
                    </h3>

                    <p class="text-gray-700">
                        Share your favorite destinations and memories.
                    </p>

                </div>



                <div class="bg-pink-50 p-8 rounded-3xl shadow">

                    <h3 class="text-2xl font-bold text-pink-500 mb-4">
                        Community 🌍
                    </h3>

                    <p class="text-gray-700">
                        Discover experiences from other travelers.
                    </p>

                </div>



                <div class="bg-pink-50 p-8 rounded-3xl shadow">

                    <h3 class="text-2xl font-bold text-pink-500 mb-4">
                        Personal Diary 💖
                    </h3>

                    <p class="text-gray-700">
                        Save your adventures forever in your own space.
                    </p>

                </div>

            </div>

        </div>

    </section>

</body>
</html>