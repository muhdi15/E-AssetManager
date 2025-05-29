@extends('user.master')
@section('content')
     <main class="flex-1 p-6 overflow-y-auto bg-sky-50">
        <div class="bg-white rounded-xl shadow p-6 max-w-2xl mx-auto">
          <h3 class="text-lg font-semibold mb-4 text-sky-700">Pengaturan Akun</h3>

          <form class="space-y-4">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
              <input type="text" placeholder="Masukkan nama Anda" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-sky-500 focus:border-sky-500" />
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
              <input type="email" placeholder="Masukkan email Anda" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-sky-500 focus:border-sky-500" />
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi Baru</label>
              <input type="password" placeholder="Masukkan kata sandi baru" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-sky-500 focus:border-sky-500" />
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Sandi</label>
              <input type="password" placeholder="Ulangi kata sandi" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-sky-500 focus:border-sky-500" />
            </div>

            <div class="pt-4">
              <button type="submit" class="bg-sky-600 hover:bg-sky-700 text-white px-4 py-2 rounded-lg font-semibold">Simpan Perubahan</button>
            </div>
          </form>
        </div>
      </main>
@endsection