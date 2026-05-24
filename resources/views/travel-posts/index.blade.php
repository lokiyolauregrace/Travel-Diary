<x-app-layout>

    <div class="py-12 bg-pink-50 min-h-screen">
        <div class="max-w-6xl mx-auto px-6">

            <div class="flex justify-between items-center mb-8">
                <div>
                    <h1 class="text-4xl font-bold text-pink-600">
                        Travel Diaries ✈️
                    </h1>

                    <p class="text-gray-500 mt-2">
                        Discover beautiful memories around the world 🌍
                    </p>
                </div>

                <a href="{{ route('travel-posts.create') }}"
                   class="bg-pink-500 hover:bg-pink-600 text-white px-5 py-3 rounded-2xl shadow transition">
                    + New Post
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                @foreach($posts as $post)

                    <div class="bg-white rounded-3xl shadow-lg overflow-hidden">

                        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e"
                             class="w-full h-64 object-cover                             max-w-sm
                             rounded-t-3xl">
                        <div class="p-6">

                            <h2 class="text-2xl font-bold text-gray-800 mb-2">
                                {{ $post->title }}
                            </h2>

                            <p class="text-pink-500 font-semibold mb-3">
                                📍 {{ $post->country }}
                            </p>

                            <p class="text-gray-600 mb-5">
                                {{ Str::limit($post->content, 100) }}
                            </p>

                            <a href="{{ route('travel-posts.show', $post) }}"
                               class="inline-block bg-pink-100 text-pink-600 px-4 py-2 rounded-xl hover:bg-pink-200 transition">
                                Read More
                            </a>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>
    </div>

</x-app-layout>