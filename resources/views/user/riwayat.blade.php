@extends('user.master')
@section('content')
      <main class="flex-1 p-6 overflow-y-auto bg-sky-50">
        <div class="bg-white rounded-xl shadow p-6">
          <h3 class="text-lg font-semibold mb-4 text-sky-700">Daftar Riwayat Perubahan Aset</h3>

          <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
              <thead class="text-left bg-sky-100 text-sky-700">
                <tr>
                  <th class="px-4 py-2">Tanggal</th>
                  <th class="px-4 py-2">Nama Barang</th>
                  <th class="px-4 py-2">Aksi</th>
                  <th class="px-4 py-2">Dilakukan Oleh</th>
                  <th class="px-4 py-2">Detail Perubahan</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200 text-gray-700">
                <tr>
                  <td class="px-4 py-2">2025-05-15</td>
                  <td class="px-4 py-2">Laptop Dell</td>
                  <td class="px-4 py-2">Update</td>
                  <td class="px-4 py-2">Admin A</td>
                  <td class="px-4 py-2">Perubahan kondisi: Baik → Rusak</td>
                </tr>
                <tr>
                  <td class="px-4 py-2">2025-05-14</td>
                  <td class="px-4 py-2">Printer Epson</td>
                  <td class="px-4 py-2">Tambah</td>
                  <td class="px-4 py-2">Admin B</td>
                  <td class="px-4 py-2">Barang baru ditambahkan</td>
                </tr>
                <!-- Tambahan baris lainnya -->
              </tbody>
            </table>
          </div>
        </div>
      </main>
@endsection