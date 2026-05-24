<x-app-layout>

<div class="min-h-screen bg-pink-50 py-16">

    <div class="max-w-3xl mx-auto bg-white p-10 rounded-3xl shadow">

        <h1 class="text-5xl font-bold text-pink-500 mb-5">
            {{ $user->username }}
        </h1>

        <p class="text-gray-600 mb-3">
            Birthday: {{ $user->birthday }}
        </p>

        <p class="text-gray-700 text-lg">
            {{ $user->bio }}
        </p>

    </div>

</div>

</x-app-layout>