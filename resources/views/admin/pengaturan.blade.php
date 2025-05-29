@extends('admin.master')
@section('content')
    <main class="flex-1 p-6 bg-sky-50">
      <div class="bg-white p-6 rounded-lg shadow-md max-w-3xl mx-auto">
        <h3 class="text-lg font-semibold text-sky-700 mb-4">Informasi Akun</h3>
        <form method="POST" action="{{route('pengaturanAdminPost')}}" class="space-y-4">
          @csrf
          <div>
            <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
            <input type="text" name="name" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500" value="{{Auth::user()->name}}">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500" value="{{Auth::user()->email}}">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700">Password Baru</label>
            <input type="password" name="password" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500" placeholder="******">
          </div>
        <div class="mt-6 text-right">
          <button class="bg-sky-600 hover:bg-sky-700 text-white px-6 py-2 rounded-md">Simpan Perubahan</button>
        </div>
        </form>
      </div>
    </main>    
@endsection