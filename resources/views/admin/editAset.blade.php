@extends('admin/master')

@section('content')
<main class="flex-1 p-6 bg-sky-50">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-sky-700 mb-4">EDIT ASET</h2>

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

        <form method="POST" action="{{ route('updateAset', $aset->id) }}">
            @csrf
            @method('PUT')

            <!-- Nama Aset -->
            <div class="mb-4">
                <label for="nama_aset" class="block text-sm font-medium text-gray-700">Nama Aset</label>
                <input type="text" name="nama_aset" id="nama_aset"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500"
                    value="{{ old('nama_aset', $aset->nama_aset) }}" required>
            </div>

            <!-- Jenis Aset -->
            <div class="mb-4">
                <label for="jenis_aset" class="block text-sm font-medium text-gray-700">Jenis Aset</label>
                <select name="jenis_aset" id="jenis_aset"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500"
                    required>
                    @foreach (['elektronik', 'furniture', 'peralatan_kantor', 'lainnya'] as $jenis)
                        <option value="{{ $jenis }}" {{ $aset->jenis_aset === $jenis ? 'selected' : '' }}>
                            {{ ucfirst(str_replace('_', ' ', $jenis)) }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Kondisi -->
            <div class="mb-4">
                <label for="kondisi" class="block text-sm font-medium text-gray-700">Kondisi</label>
                <select name="kondisi" id="kondisi"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500"
                    required>
                    @foreach (['baik', 'rusak_ringan', 'rusak_berat', 'hilang'] as $kondisi)
                        <option value="{{ $kondisi }}" {{ $aset->kondisi === $kondisi ? 'selected' : '' }}>
                            {{ ucfirst(str_replace('_', ' ', $kondisi)) }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Lokasi -->
            <div class="mb-4">
                <label for="lokasi" class="block text-sm font-medium text-gray-700">Lokasi</label>
                <input type="text" name="lokasi" id="lokasi"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500"
                    value="{{ old('lokasi', $aset->lokasi) }}" required>
            </div>

            <!-- Tanggal Penambahan -->
            <div class="mb-6">
                <label for="tanggal_penambahan" class="block text-sm font-medium text-gray-700">Tanggal Penambahan</label>
                <input type="date" name="tanggal_penambahan" id="tanggal_penambahan"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500"
                    value="{{ old('tanggal_penambahan', \Carbon\Carbon::parse($aset->tanggal_penambahan)->format('Y-m-d')) }}"
                    required>
            </div>

            <!-- Tombol -->
            <div class="flex justify-between">
                <a href="{{ route('manajemenAsetAdmin') }}"
                    class="text-sm text-sky-600 hover:underline">← Kembali</a>

                <button type="submit"
                    class="bg-sky-600 hover:bg-sky-700 text-white font-medium px-4 py-2 rounded shadow">
                    Update Aset
                </button>
            </div>
        </form>
    </div>
</main>
@endsection
