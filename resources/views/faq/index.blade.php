<x-app-layout>

    <div class="min-h-screen bg-pink-50 py-12">

        <div class="max-w-4xl mx-auto">

            <h1 class="text-4xl font-bold text-pink-500 mb-8">
                FAQ ✨
            </h1>

            @foreach($faqs as $faq)

                <div class="bg-white rounded-3xl shadow p-6 mb-5">

                    <h2 class="text-2xl font-bold text-pink-500 mb-3">
                        {{ $faq->question }}
                    </h2>

                    <p class="text-gray-700">
                        {{ $faq->answer }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</x-app-layout>