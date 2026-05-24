<x-app-layout>

    <div class="min-h-screen bg-pink-50 py-12">

        <div class="max-w-4xl mx-auto bg-white rounded-3xl shadow-lg overflow-hidden">

            <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e"
                 class="w-full h-96 object-cover">

            <div class="p-8">

                <h1 class="text-4xl font-bold text-pink-500 mb-4">
                    {{ $travelPost->title }}
                </h1>

                <p class="text-xl text-gray-500 mb-6">
                    📍 {{ $travelPost->country }}
                </p>

                <p class="text-gray-700 leading-8">
                    {{ $travelPost->content }}
                </p>

            </div>

        </div>

    </div>

</x-app-layout>

<div class="mt-8 flex gap-4">

    <a href="{{ route('travel-posts.edit', $travelPost) }}"
       class="bg-pink-500 text-white px-5 py-3 rounded-2xl">
        Edit ✨
    </a>

    <form action="{{ route('travel-posts.destroy', $travelPost) }}"
          method="POST">

        @csrf
        @method('DELETE')

        <button type="submit"
                class="bg-red-500 text-white px-5 py-3 rounded-2xl">
            Delete
        </button>

    </form>

</div>