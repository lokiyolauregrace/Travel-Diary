<x-app-layout>

<div class="min-h-screen bg-pink-50 py-12">

    <div class="max-w-2xl mx-auto bg-white p-8 rounded-3xl shadow">

        <h1 class="text-4xl font-bold text-pink-500 mb-6">
            Contact 💌
        </h1>

        @if(session('success'))

            <div class="bg-pink-100 text-pink-600 p-4 rounded-2xl mb-5">
                {{ session('success') }}
            </div>

        @endif

        <form action="{{ route('contact.store') }}" method="POST">

            @csrf

            <input type="text"
                   name="name"
                   placeholder="Name"
                   class="w-full mb-4 rounded-2xl border border-pink-300 text-black">

            <input type="email"
                   name="email"
                   placeholder="Email"
                   class="w-full mb-4 rounded-2xl border border-pink-300 text-black">

            <input type="text"
                   name="subject"
                   placeholder="Subject"
                   class="w-full mb-4 rounded-2xl border border-pink-300 text-black">

            <textarea name="message"
                      rows="5"
                      placeholder="Message"
                      class="w-full mb-4 rounded-2xl border border-pink-300 text-black"></textarea>

            <button class="bg-pink-500 text-white px-6 py-3 rounded-2xl">
                Send ✨
            </button>

        </form>

    </div>

</div>

</x-app-layout>