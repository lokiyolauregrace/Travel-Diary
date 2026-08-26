<x-app-layout>

    <div class="min-h-screen bg-pink-50 py-12">

        <div class="max-w-2xl mx-auto bg-white p-8 rounded-3xl shadow-lg">

            <h1 class="text-3xl font-bold text-pink-500 mb-6">
                Create Travel Post 
            </h1>

            <form action="{{ route('travel-posts.store') }}" method="POST">

                @csrf

                {{-- Title --}}
                <div class="mb-5">
                    <label for="title" class="block mb-2 text-gray-700 font-semibold">
                        Title
                    </label>

                    <input
                        id="title"
                        type="text"
                        name="title"
                        value="{{ old('title') }}"
                        required
                        class="w-full rounded-2xl border-pink-200 bg-white text-black focus:border-pink-400 focus:ring-pink-400"
                    >

                    @error('title')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Country --}}
                <div class="mb-5">
                    <label for="country" class="block mb-2 text-gray-700 font-semibold">
                        Country
                    </label>

                    <input
                        id="country"
                        type="text"
                        name="country"
                        value="{{ old('country') }}"
                        required
                        class="w-full rounded-2xl border-pink-200 bg-white text-black focus:border-pink-400 focus:ring-pink-400"
                    >

                    @error('country')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Categories --}}
                <div class="mb-5">
                    <label for="category_ids" class="block mb-2 text-gray-700 font-semibold">
                        Categories
                    </label>

                    <select
                        id="category_ids"
                        name="category_ids[]"
                        multiple
                        class="w-full rounded-2xl border-pink-200 bg-white text-black focus:border-pink-400 focus:ring-pink-400"
                    >
                        @foreach ($categories as $category)
                            <option
                                value="{{ $category->id }}"
                                @selected(in_array($category->id, old('category_ids', [])))
                            >
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>

                    <p class="mt-1 text-sm text-gray-500">
                        Hold Ctrl to select multiple categories.
                    </p>

                    @error('category_ids')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Content --}}
                <div class="mb-5">
                    <label for="content" class="block mb-2 text-gray-700 font-semibold">
                        Content
                    </label>

                    <textarea
                        id="content"
                        name="content"
                        rows="6"
                        required
                        class="w-full rounded-2xl border-pink-200 bg-white text-black focus:border-pink-400 focus:ring-pink-400"
                    >{{ old('content') }}</textarea>

                    @error('content')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-2xl shadow"
                >
                    Publish 
                </button>

            </form>

        </div>

    </div>

</x-app-layout>