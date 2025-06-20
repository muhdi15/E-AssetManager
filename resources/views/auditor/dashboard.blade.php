@extends('auditor/master')

@section('content')
<main class="flex-1 p-6 bg-sky-50">
  <!-- Stats Cards -->
  <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-lg shadow p-5 text-center">
      <p class="text-gray-500">Total Aset</p>
      <p class="text-3xl font-bold text-sky-700">{{$totalAset}}</p>
    </div>
    <div class="bg-white rounded-lg shadow p-5 text-center">
      <p class="text-gray-500">Kondisi Baik</p>
      <p class="text-3xl font-bold text-green-600">{{$totalAsetBaik}}</p>
    </div>
    <div class="bg-white rounded-lg shadow p-5 text-center">
      <p class="text-gray-500">Rusak</p>
      <p class="text-3xl font-bold text-yellow-600">{{$totalAsetRusakRingan + $totalAsetRusakBerat}}</p>
    </div>
    <div class="bg-white rounded-lg shadow p-5 text-center">
      <p class="text-gray-500">Hilang</p>
      <p class="text-3xl font-bold text-red-600">{{$totalAsetHilang}}</p>
    </div>
  </section>

  <!-- Recent Logs -->
  <section>
    <h3 class="text-xl font-semibold mb-4 text-sky-700">Histori Perubahan Terbaru</h3>
    <div class="overflow-x-auto bg-white rounded-lg shadow">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-sky-100 text-sky-700">
          <tr>
            <th class="px-4 py-2 text-left text-sm font-semibold">Waktu</th>
            <th class="px-4 py-2 text-left text-sm font-semibold">Barang</th>
            <th class="px-4 py-2 text-left text-sm font-semibold">Kondisi</th>
            <th class="px-4 py-2 text-left text-sm font-semibold">Oleh</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
          @forelse ($data as $item)
            @php
              $warna = match($item->kondisi) {
                'baik' => 'text-green-700',
                'rusak_ringan', 'rusak_berat' => 'text-yellow-700',
                'hilang' => 'text-red-700',
                default => 'text-gray-700',
              };
            @endphp
            <tr>
              <td class="px-4 py-2 whitespace-nowrap text-sm">{{ $item->tanggal_penambahan }}</td>
              <td class="px-4 py-2 whitespace-nowrap text-sm font-semibold">{{ $item->nama_aset }}</td>
              <td class="px-4 py-2 whitespace-nowrap text-sm capitalize {{ $warna }}">{{ str_replace('_', ' ', $item->kondisi) }}</td>
              <td class="px-4 py-2 whitespace-nowrap text-sm">{{ $item->tambahkan_oleh }}</td>
            </tr>
          @empty
            <tr>
              <td colspan="4" class="px-4 py-4 text-center text-sm text-gray-500">Belum ada histori perubahan aset.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </section>
</main>
@endsection
