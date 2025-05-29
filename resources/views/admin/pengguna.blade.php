@extends('admin/master')

@section('content')
    <!-- Main Content -->
    <main class="flex-1 p-6 bg-sky-50">

        @if (session('success'))
            <div class="mb-4 px-4 py-3 bg-green-100 border border-green-300 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        <!-- Stats Cards -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow p-5 text-center">
                <p class="text-gray-500">Total Pengguna</p>
                <p class="text-3xl font-bold text-sky-700">{{ $totalUser }}</p>
            </div>
            <div class="bg-white rounded-lg shadow p-5 text-center">
                <p class="text-gray-500">Total Active</p>
                <p class="text-3xl font-bold text-green-600">{{ $totalActive }}</p>
            </div>
            <div class="bg-white rounded-lg shadow p-5 text-center">
                <p class="text-gray-500">Total Non-Active</p>
                <p class="text-3xl font-bold text-yellow-600">{{ $totalInactive }}</p>
            </div>
            <div class="bg-white rounded-lg shadow p-5 text-center">
                <p class="text-gray-500">Total Pending</p>
                <p class="text-3xl font-bold text-red-600">{{ $totalPending }}</p>
            </div>
        </section>

        <div class="mb-6 flex justify-between items-center">
            <h3 class="text-lg font-semibold text-sky-700">Daftar Pengguna</h3>
            <a href="{{ route('createUser') }}"
               class="bg-sky-600 hover:bg-sky-700 text-white px-4 py-2 rounded-md shadow">
                + Tambah Pengguna
            </a>
        </div>

        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-sky-100 text-sky-700">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-semibold">Nama</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold">Email</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold">Status</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold">Role</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm">
                    @foreach ($data as $item)
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap">{{ $item->name }}</td>
                            <td class="px-4 py-2 whitespace-nowrap">{{ $item->email }}</td>
                            <td class="px-4 py-2 whitespace-nowrap">
                                <span class="
                                    @if($item->status == 'active') bg-green-100 text-green-700
                                    @elseif($item->status == 'non-active') bg-yellow-100 text-yellow-700
                                    @elseif($item->status == 'pending') bg-red-100 text-red-700
                                    @else bg-gray-100 text-gray-700
                                    @endif
                                    px-2 py-1 rounded
                                ">
                                    {{ $item->status }}
                                </span>
                            </td>
                            <td class="px-4 py-2 whitespace-nowrap">
                                <span class="
                                    @if($item->role == 'admin') bg-blue-100 text-blue-700
                                    @elseif($item->role == 'user') bg-gray-100 text-gray-700
                                    @else bg-sky-100 text-sky-700
                                    @endif
                                    px-2 py-1 rounded
                                ">
                                    {{ $item->role }}
                                </span>
                            </td>
                            <td class="px-4 py-2 whitespace-nowrap">
                                <div class="flex flex-wrap gap-2">
                                    <a href="{{ route('editUser', $item->id) }}"
                                       class="text-sm bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200 transition">
                                        Edit
                                    </a>

                                    @if ($item->status === 'active')
                                        <form method="POST" action="{{ route('deactivateUser', $item->id) }}">
                                            @csrf
                                            <button type="submit"
                                                    class="text-sm bg-yellow-100 text-yellow-700 px-3 py-1 rounded hover:bg-yellow-200 transition">
                                                Nonaktifkan
                                            </button>
                                        </form>
                                    @elseif (in_array($item->status, ['non-active', 'pending']))
                                        <form method="POST" action="{{ route('activateUser', $item->id) }}">
                                            @csrf
                                            <button type="submit"
                                                    class="text-sm bg-green-100 text-green-700 px-3 py-1 rounded hover:bg-green-200 transition">
                                                Aktifkan
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
