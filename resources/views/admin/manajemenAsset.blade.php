<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Manajemen Aset - E-Asset Manager</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="bg-sky-50 text-gray-800" x-data="{ sidebarOpen: false }">

  <!-- Sidebar -->
  <aside 
    class="fixed inset-y-0 left-0 bg-white border-r border-gray-200 w-64 p-6 space-y-6 transform transition-transform duration-300 md:translate-x-0"
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full md:translate-x-0'"
  >
    <h1 class="text-2xl font-bold text-sky-700 mb-8">E-Asset Manager</h1>
    <nav class="space-y-4">
      <a href="#" class="flex items-center text-gray-600 hover:text-sky-600">Dashboard</a>
      <a href="#" class="flex items-center text-sky-600 font-semibold">Manajemen Aset</a>
      <a href="#" class="flex items-center text-gray-600 hover:text-sky-600">Laporan</a>
      <a href="#" class="flex items-center text-gray-600 hover:text-sky-600">Pengguna</a>
      <a href="#" class="flex items-center text-gray-600 hover:text-sky-600">Pengaturan</a>
    </nav>
  </aside>

  <!-- Main Content -->
  <div class="md:pl-64 min-h-screen flex flex-col">
    <header class="bg-white shadow flex items-center justify-between p-4 border-b border-gray-200">
      <button @click="sidebarOpen = !sidebarOpen" class="md:hidden p-2 rounded-md hover:bg-sky-100 text-sky-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
      <h2 class="text-xl font-semibold text-sky-700">Manajemen Aset</h2>
      <div class="text-gray-600">Admin Fajri</div>
    </header>

    <main class="flex-1 p-6 bg-sky-50">
      <div class="flex justify-between items-center mb-6">
        <h3 class="text-lg font-semibold text-sky-700">Daftar Aset</h3>
        <button class="bg-sky-600 hover:bg-sky-700 text-white px-4 py-2 rounded-md shadow">+ Tambah Aset</button>
      </div>

      <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-sky-100 text-sky-700">
            <tr>
              <th class="px-4 py-2 text-left text-sm font-semibold">Nama Barang</th>
              <th class="px-4 py-2 text-left text-sm font-semibold">Kategori</th>
              <th class="px-4 py-2 text-left text-sm font-semibold">Tanggal Pembelian</th>
              <th class="px-4 py-2 text-left text-sm font-semibold">Kondisi</th>
              <th class="px-4 py-2 text-left text-sm font-semibold">Lokasi</th>
              <th class="px-4 py-2 text-left text-sm font-semibold">Aksi</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100 text-sm">
            <tr>
              <td class="px-4 py-2 whitespace-nowrap">Laptop Dell XPS 13</td>
              <td class="px-4 py-2 whitespace-nowrap">Elektronik</td>
              <td class="px-4 py-2 whitespace-nowrap">2025-02-10</td>
              <td class="px-4 py-2 whitespace-nowrap text-green-700 font-semibold">Baik</td>
              <td class="px-4 py-2 whitespace-nowrap">Ruang IT</td>
              <td class="px-4 py-2 space-x-2">
                <button class="text-sky-600 hover:text-sky-800">Edit</button>
                <button class="text-red-600 hover:text-red-800">Hapus</button>
              </td>
            </tr>
            <tr>
              <td class="px-4 py-2 whitespace-nowrap">Meja Kantor</td>
              <td class="px-4 py-2 whitespace-nowrap">Furniture</td>
              <td class="px-4 py-2 whitespace-nowrap">2024-11-05</td>
              <td class="px-4 py-2 whitespace-nowrap text-yellow-600 font-semibold">Rusak</td>
              <td class="px-4 py-2 whitespace-nowrap">Gudang</td>
              <td class="px-4 py-2 space-x-2">
                <button class="text-sky-600 hover:text-sky-800">Edit</button>
                <button class="text-red-600 hover:text-red-800">Hapus</button>
              </td>
            </tr>
            <!-- Tambahkan baris lain sesuai kebutuhan -->
          </tbody>
        </table>
      </div>
    </main>
  </div>

</body>
</html>
