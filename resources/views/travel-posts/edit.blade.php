<x-app-layout>

    <div class="min-h-screen bg-pink-50 py-12">

        <div class="max-w-2xl mx-auto bg-white p-8 rounded-3xl shadow-lg">

            <h1 class="text-3xl font-bold text-pink-500 mb-6">
                Edit Travel Post ✨
            </h1>

            <form action="{{ route('travel-posts.update', $travelPost) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-5">
                    <label class="block mb-2  font-semibold">
                        Title
                    </label>

                    <input type="text"
                           name="title"
                           value="{{ $travelPost->title }}"
                         class="w-full rounded-2xl border-pink-200 bg-white text-black placeholder-gray-400 focus:border-pink-400 focus:ring-pink-400"
                    >
                </div>

                <div class="mb-5">
                    <label class="block mb-2  font-semibold">
                        Country
                    </label>

                    <input type="text"
                           name="country"
                           value="{{ $travelPost->country }}"
                          class="w-full rounded-2xl border-pink-200 bg-white text-black placeholder-gray-400 focus:border-pink-400 focus:ring-pink-400"
                    >
                </div>

                <div class="mb-5">
                    <label class="block mb-2  font-semibold">
                        Content
                    </label>

                    <textarea name="content"
                              rows="6"
                              class="w-full rounded-2xl border-pink-200 bg-white text-black placeholder-gray-400 focus:border-pink-400 focus:ring-pink-400">{{ $travelPost->content }}</textarea>
                </div>

                <button type="submit"
                        class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-2xl shadow">
                    Update ✨
                </button>

            </form>

        </div>

    </div>

</x-app-layout>