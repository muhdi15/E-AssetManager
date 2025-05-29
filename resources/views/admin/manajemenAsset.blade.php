@extends('admin/master')
@section('content')
     <main class="flex-1 p-6 bg-sky-50">
      <div class="flex justify-between items-center mb-6">
        <h3 class="text-lg font-semibold text-sky-700">Daftar Aset</h3>
        <button class="bg-sky-600 hover:bg-sky-700 text-white px-4 py-2 rounded-md shadow">+ Tambah Aset</button>
      </div>

      <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-4">
      
      <div>
        <label for="kategori" class="block text-sm font-medium text-gray-700 mb-1">Filter Kategori:</label>
        <select id="kategori" class="border border-gray-300 rounded-md px-3 py-2 text-sm w-60 focus:ring-sky-500 focus:border-sky-500"
          onchange="filterKategori(this.value)">
          <option value="">Semua Kategori</option>
          <option value="elektronik">Elektronik</option>
          <option value="peralatan_kantor">Peralatan Kantor</option>
          <option value="furniture">Furniture</option>
          <option value="lainnya">Lainnya</option>
        </select>
      </div>
    </div>

    <table id="asetTable" class="min-w-full text-sm border border-gray-200">
      <thead class="bg-sky-100 text-gray-700">
        <tr>
          <th class="px-4 py-2 text-left border-b">Nama Barang</th>
          <th class="px-4 py-2 text-left border-b">Kategori</th>
          <th class="px-4 py-2 text-left border-b">Tanggal Pembelian</th>
          <th class="px-4 py-2 text-left border-b">Kondisi</th>
          <th class="px-4 py-2 text-left border-b">Lokasi</th>
        </tr>
      </thead>
      <tbody class="bg-white text-gray-700">
        @foreach ($data as $item)
          <tr class="hover:bg-sky-50" data-kategori="{{ $item->jenis_aset }}">
            <td class="px-4 py-2 border-b">{{ $item->nama_aset }}</td>
            <td class="px-4 py-2 border-b capitalize">{{ str_replace('_', ' ', $item->jenis_aset) }}</td>
            <td class="px-4 py-2 border-b">{{ $item->tanggal_penambahan}}</td>
            <td class="px-4 py-2 border-b">
              <span class="
                font-medium
                @if($item->kondisi == 'baik') text-green-600
                @elseif($item->kondisi == 'rusak_ringan' || $item->kondisi == 'rusak_berat') text-red-600
                @elseif($item->kondisi == 'hilang') text-yellow-600
                @else text-gray-600
                @endif
              ">
                {{ str_replace('_', ' ', $item->kondisi) }}
              </span>
            </td>
            <td class="px-4 py-2 border-b">{{ $item->lokasi }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <script>
    function filterKategori(value) {
      const rows = document.querySelectorAll('#asetTable tbody tr');
      rows.forEach(row => {
        const kategori = row.getAttribute('data-kategori');
        if (!value || kategori === value) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });
    }
  </script>
    </main>
@endsection