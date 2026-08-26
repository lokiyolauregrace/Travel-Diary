<x-app-layout>

    <div class="min-h-screen bg-pink-50 py-12">
        <div class="max-w-6xl mx-auto px-6">

            <div class="bg-white rounded-3xl shadow-lg p-8">

                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h1 class="text-3xl font-bold text-pink-500">
                            Manage Users 
                        </h1>

                        <p class="text-gray-500 mt-1">
                            Manage users and administrator rights.
                        </p>
                    </div>

                    <a href="{{ route('admin.users.create') }}"
                       class="bg-pink-500 hover:bg-pink-600 text-white px-5 py-3 rounded-2xl">
                        + Create User
                    </a>
                </div>

                @if (session('success'))
                    <div class="mb-6 p-4 rounded-2xl bg-green-100 text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="overflow-x-auto">

                    <table class="w-full text-left">

                        <thead>
                            <tr class="border-b">
                                <th class="py-3">Name</th>
                                <th class="py-3">Username</th>
                                <th class="py-3">Email</th>
                                <th class="py-3">Role</th>
                                <th class="py-3">Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($users as $user)

                                <tr class="border-b">

                                    <td class="py-4">
                                        {{ $user->name }}
                                    </td>

                                    <td class="py-4">
                                        {{ $user->username }}
                                    </td>

                                    <td class="py-4">
                                        {{ $user->email }}
                                    </td>

                                    <td class="py-4">

                                        @if ($user->is_admin)

                                            <span class="px-3 py-1 rounded-full bg-pink-100 text-pink-600">
                                                Admin
                                            </span>

                                        @else

                                            <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-600">
                                                User
                                            </span>

                                        @endif

                                    </td>

                                    <td class="py-4">

                                        <form method="POST"
                                              action="{{ route('admin.users.toggle-admin', $user) }}">

                                            @csrf
                                            @method('PATCH')

                                            <button type="submit"
                                                    class="text-pink-500 hover:text-pink-700 font-semibold">

                                                {{ $user->is_admin ? 'Remove admin' : 'Make admin' }}

                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>