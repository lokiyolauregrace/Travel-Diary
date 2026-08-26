<x-app-layout>

    <div class="min-h-screen bg-pink-50 py-12">

        <div class="max-w-2xl mx-auto bg-white p-8 rounded-3xl shadow-lg">

            <h1 class="text-3xl font-bold text-pink-500 mb-6">
                Create User 
            </h1>

            <form method="POST" action="{{ route('admin.users.store') }}">
                @csrf

                {{-- Name --}}
                <div class="mb-5">
                    <label class="block mb-2 text-gray-700 font-semibold">
                        Name
                    </label>

                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        class="w-full rounded-2xl border-gray-200"
                    >

                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Username --}}
                <div class="mb-5">
                    <label class="block mb-2 text-gray-700 font-semibold">
                        Username
                    </label>

                    <input
                        type="text"
                        name="username"
                        value="{{ old('username') }}"
                        required
                        class="w-full rounded-2xl border-gray-200"
                    >

                    @error('username')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="mb-5">
                    <label class="block mb-2 text-gray-700 font-semibold">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        class="w-full rounded-2xl border-gray-200"
                    >

                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="mb-5">
                    <label class="block mb-2 text-gray-700 font-semibold">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        required
                        class="w-full rounded-2xl border-gray-200"
                    >

                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Admin --}}
                <div class="mb-6">
                    <label class="flex items-center gap-2">

                        <input
                            type="checkbox"
                            name="is_admin"
                            value="1"
                            class="rounded"
                        >

                        <span class="text-gray-700">
                            Make this user an admin
                        </span>

                    </label>
                </div>

                <button
                    type="submit"
                    class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-2xl shadow"
                >
                    Create User
                </button>

                <a
                    href="{{ route('admin.users.index') }}"
                    class="ml-3 text-gray-500 hover:text-gray-700"
                >
                    Cancel
                </a>

            </form>

        </div>

    </div>

</x-app-layout>