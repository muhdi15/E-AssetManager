@extends('admin/master')

@section('content')
<main class="flex-1 p-6 bg-sky-50">

    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-sky-700 mb-4">EDIT DATA PENGGUNA</h2>

        @if ($errors->any())
            <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                <ul class="list-disc ml-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{route('editUserPost', $user->id)}}">
            @csrf

            <!-- Nama -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="name" id="name"
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500"
                       value="{{$user->name}}" required>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email"
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500"
                       value="{{ $user->email }}" required>
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" 
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500"
                       >
            </div>

            <!-- Role -->
            <div class="mb-6">
                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                <select name="role" id="role"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500" value="{{ $user->role }}"
                        required>
                    <option value="" disabled selected>Pilih Role</option>
                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                </select>
            </div>

            <!-- Tombol -->
            <div class="flex justify-between">
                <a href="{{route('penggunaAdmin')}}"
                   class="text-sm text-sky-600 hover:underline">← Kembali</a>

                <button type="submit"
                        class="bg-sky-600 hover:bg-sky-700 text-white font-medium px-4 py-2 rounded shadow">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</main>
@endsection
