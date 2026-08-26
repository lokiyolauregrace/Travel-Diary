<x-app-layout>

    <div class="min-h-screen bg-pink-50 py-12">

        <div class="max-w-2xl mx-auto px-6">

            <div class="bg-white rounded-3xl shadow-lg p-8 text-center">

                {{-- Profile picture --}}
                @if ($user->profile_picture)
                    <img
                        src="{{ asset('storage/' . $user->profile_picture) }}"
                        alt="{{ $user->username }}"
                        class="w-32 h-32 rounded-full object-cover mx-auto mb-5"
                    >
                @else
                    <div class="w-32 h-32 rounded-full bg-pink-100 flex items-center justify-center mx-auto mb-5">
                        <span class="text-5xl"></span>
                    </div>
                @endif

                {{-- Username --}}
                <h1 class="text-3xl font-bold text-pink-500">
                    {{ $user->username }}
                </h1>

                {{-- Name --}}
                <p class="text-gray-500 mt-1">
                    {{ $user->name }}
                </p>

                {{-- Birthday --}}
                @if ($user->birthday)
                    <p class="text-gray-600 mt-4">
                         {{ \Carbon\Carbon::parse($user->birthday)->format('d/m/Y') }}
                    </p>
                @endif

                {{-- About me --}}
                @if ($user->bio)
                    <div class="mt-6 text-left bg-pink-50 rounded-2xl p-5">
                        <h2 class="font-semibold text-pink-500 mb-2">
                            About me
                        </h2>

                        <p class="text-gray-700">
                            {{ $user->bio }}
                        </p>
                    </div>
                @endif

                {{-- Edit own profile --}}
                @auth
                    @if (auth()->id() === $user->id)
                        <a
                            href="{{ route('profile.edit') }}"
                            class="inline-block mt-6 bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-2xl"
                        >
                            Edit my profile
                        </a>
                    @endif
                @endauth

            </div>

        </div>

    </div>

</x-app-layout>