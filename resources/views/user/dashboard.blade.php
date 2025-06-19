@extends('user.master')
<!DOCTYPE html
<html lang="id">
<head>    
  @section('content')
    <main class="flex-1 p-6 bg-sky-50">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <div class="bg-white rounded-lg p-4 shadow-md border-l-4 border-sky-500">
          <h4 class="text-sm font-medium text-gray-600">Total Barang</h4>
          <p class="text-2xl font-bold text-sky-700 mt-1">{{$total}}</p>
        </div>
        <div class="bg-white rounded-lg p-4 shadow-md border-l-4 border-green-500">
          <h4 class="text-sm font-medium text-gray-600">Barang Baik</h4>
          <p class="text-2xl font-bold text-green-600 mt-1">{{$totalBaik}}</p>
        </div>
        <div class="bg-white rounded-lg p-4 shadow-md border-l-4 border-yellow-500">
          <h4 class="text-sm font-medium text-gray-600">Rusak</h4>
          <p class="text-2xl font-bold text-yellow-600 mt-1">{{$totalRusakRingan + $totalRusakBerat}}</p>
        </div>
        <div class="bg-white rounded-lg p-4 shadow-md border-l-4 border-red-500">
          <h4 class="text-sm font-medium text-gray-600">Hilang</h4>
          <p class="text-2xl font-bold text-red-600 mt-1">{{$totalHilang}}</p>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-sky-700 mb-4">Riwayat Perubahan Terbaru</h3>
        <ul class="divide-y divide-gray-200 text-sm">
          @foreach ($data as $item)
              <li class="py-3 flex justify-between">
            <span>➕ {{$item->nama_aset}} diTambahkan Oleh {{$item->tambahkan_oleh}}</span>
            <span class="text-gray-500">{{$item->tanggal_penambahan}}</span>
          @endforeach
          <li class="py-3 flex justify-between">
            {{-- <span>🛠 Laptop ASUS diperbarui ke kondisi "Rusak"</span>
            <span class="text-gray-500">17 Mei 2025</span>
          </li>
          <li class="py-3 flex justify-between">
            <span>➕ Printer EPSON ditambahkan</span>
            <span class="text-gray-500">15 Mei 2025</span>
          </li>
          <li class="py-3 flex justify-between">
            <span>📦 Kursi kerja dihapus dari daftar</span>
            <span class="text-gray-500">13 Mei 2025</span>
          </li> --}}
        </ul>
      </div>
    </main>  
  @endsection
    
 
</body>
</html>
