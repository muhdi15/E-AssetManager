@extends('admin/master')

@section('content')
<main class="flex-1 p-6 bg-sky-50">

    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-sky-700 mb-4">TAMBAHKAN ASET</h2>

        @if (session('success'))
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                <ul class="list-disc ml-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('tambahAsetPost') }}">
            @csrf

            <!-- Nama Aset -->
            <div class="mb-4">
                <label for="nama_aset" class="block text-sm font-medium text-gray-700">Nama Aset</label>
                <input type="text" name="nama_aset" id="nama_aset"
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500"
                       value="{{ old('nama_aset') }}" required>
            </div>

            <!-- Jenis Aset -->
            <div class="mb-4">
            <label for="jenis_aset" class="block text-sm font-medium text-gray-700">Jenis Aset</label>
            <select name="jenis_aset" id="jenis_aset"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500"
                    required>
                <option value="" disabled selected>Pilih Jenis Aset</option>
                <option value="elektronik" {{ old('jenis_aset') == 'elektronik' ? 'selected' : '' }}>Elektronik</option>
                <option value="furniture" {{ old('jenis_aset') == 'furniture' ? 'selected' : '' }}>Furniture</option>
                <option value="peralatan_kantor" {{ old('jenis_aset') == 'peralatan_kantor' ? 'selected' : '' }}>Peralatan Kantor</option>
                <option value="lainnya" {{ old('jenis_aset') == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
            </select>

            <!-- Kondisi -->
            <div class="mb-4">
                <label for="kondisi" class="block text-sm font-medium text-gray-700">Kondisi</label>
                <select name="kondisi" id="kondisi"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500"
                        required>
                    <option value="" disabled selected>Pilih Kondisi</option>
                    <option value="baik" {{ old('kondisi') == 'baik' ? 'selected' : '' }}>Baik</option>
                    <option value="rusak_ringan" {{ old('kondisi') == 'rusak_ringan' ? 'selected' : '' }}>rusak_ringan</option>
                    <option value="rusak_berat" {{ old('kondisi') == 'rusak_berat' ? 'selected' : '' }}>rusak_berat</option>
                    <option value="hilang" {{ old('kondisi') == 'hilang' ? 'selected' : '' }}>Hilang</option>
                </select>
            </div>

            <!-- Lokasi -->
            <div class="mb-4">
                <label for="lokasi" class="block text-sm font-medium text-gray-700">Lokasi Penyimpanan</label>
                <input type="text" name="lokasi" id="lokasi"
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500"
                       value="{{ old('lokasi') }}" required>
            </div>

            <!-- Tanggal Penambahan -->
            <div class="mb-4">
                <label for="tanggal_penambahan" class="block text-sm font-medium text-gray-700">Tanggal Penambahan</label>
                <input type="date" name="tanggal_penambahan" id="tanggal_penambahan"
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500"
                       value="{{ old('tanggal_penambahan') }}" required>
            </div>

            <!-- Tambahkan Oleh (ID User) -->
            <div class="mb-6">
                <label for="tambahkan_oleh" class="block text-sm font-medium text-gray-700">Tambahkan Oleh (ID User)</label>
                <input type="hiddern" name="tambahkan_oleh" id="tambahkan_oleh"
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500"
                       value="{{ Auth::user()->name }}" required>
            </div>

            <!-- Tombol -->
            <div class="flex justify-between">
                <a href="{{ route('manajemenAsetAdmin') }}"
                   class="text-sm text-sky-600 hover:underline">← Kembali</a>

                <button type="submit"
                        class="bg-sky-600 hover:bg-sky-700 text-white font-medium px-4 py-2 rounded shadow">
                    Simpan Aset
                </button>
            </div>
        </form>
    </div>
</main>
@endsection
