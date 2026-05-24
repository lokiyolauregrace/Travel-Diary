<x-app-layout>

    <div class="min-h-screen bg-pink-50 py-12">

        <div class="max-w-2xl mx-auto bg-white p-8 rounded-3xl shadow-lg">

            <h1 class="text-3xl font-bold text-pink-500 mb-6">
                Create Travel Post ✈️
            </h1>

            <form action="{{ route('travel-posts.store') }}" method="POST">

                @csrf

                <div class="mb-5">
                    <label class="block mb-2 text-gray-700 font-semibold">
                        Title
                    </label>

                    <input type="text"
                           name="title"
                          class="w-full rounded-2xl border-pink-200 bg-white text-black focus:border-pink-400 focus:ring-pink-400"
                </div>

                <div class="mb-5">
                    <label class="block mb-2 text-gray-700 font-semibold">
                        Country
                    </label>

                    <input type="text"
                           name="country"
                          class="w-full rounded-2xl border-pink-200 bg-white text-black focus:border-pink-400 focus:ring-pink-400"
                </div>

                <div class="mb-5">
                    <label class="block mb-2 text-gray-700 font-semibold">
                        Content
                    </label>

                    <textarea name="content"
                              rows="6"
class="w-full rounded-2xl border-pink-200 bg-white text-black focus:border-pink-400 focus:ring-pink-400"></textarea>
                </div>

                <button type="submit"
                        class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-2xl shadow">
                    Publish ✨
                </button>

            </form>

        </div>

    </div>

</x-app-layout>