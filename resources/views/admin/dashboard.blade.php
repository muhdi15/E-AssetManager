<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard Admin - E-Asset Manager</title>
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
      <a href="#" class="flex items-center text-sky-600 hover:text-sky-800 font-semibold">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <path d="M3 12l2-2 4 4 8-8 2 2" />
        </svg>
        Dashboard
      </a>
      <a href="#" class="flex items-center text-gray-600 hover:text-sky-600">Manajemen Aset</a>
      <a href="#" class="flex items-center text-gray-600 hover:text-sky-600">Laporan</a>
      <a href="#" class="flex items-center text-gray-600 hover:text-sky-600">Pengguna</a>
      <a href="#" class="flex items-center text-gray-600 hover:text-sky-600">Pengaturan</a>
      <a href="{{route('logout')}}" class="flex items-center text-gray-600 hover:text-sky-600">Logout</a>
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
      <h2 class="text-xl font-semibold text-sky-700">Dashboard Admin</h2>
      <div class="text-gray-600">{{Auth::user()->name}}</div>
    </header>

    <main class="flex-1 p-6 bg-sky-50">
      <!-- Stats Cards -->
      <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-5 text-center">
          <p class="text-gray-500">Total Aset</p>
          <p class="text-3xl font-bold text-sky-700">145</p>
        </div>
        <div class="bg-white rounded-lg shadow p-5 text-center">
          <p class="text-gray-500">Kondisi Baik</p>
          <p class="text-3xl font-bold text-green-600">120</p>
        </div>
        <div class="bg-white rounded-lg shadow p-5 text-center">
          <p class="text-gray-500">Rusak</p>
          <p class="text-3xl font-bold text-yellow-600">15</p>
        </div>
        <div class="bg-white rounded-lg shadow p-5 text-center">
          <p class="text-gray-500">Hilang</p>
          <p class="text-3xl font-bold text-red-600">10</p>
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
                <th class="px-4 py-2 text-left text-sm font-semibold">Aksi</th>
                <th class="px-4 py-2 text-left text-sm font-semibold">Oleh</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
              <tr>
                <td class="px-4 py-2 whitespace-nowrap text-sm">2025-05-14 09:32</td>
                <td class="px-4 py-2 whitespace-nowrap text-sm font-semibold">Laptop Dell XPS 13</td>
                <td class="px-4 py-2 whitespace-nowrap text-sm capitalize text-yellow-700">ubah</td>
                <td class="px-4 py-2 whitespace-nowrap text-sm">Admin Fajri</td>
              </tr>
              <tr>
                <td class="px-4 py-2 whitespace-nowrap text-sm">2025-05-13 16:45</td>
                <td class="px-4 py-2 whitespace-nowrap text-sm font-semibold">Proyektor Epson</td>
                <td class="px-4 py-2 whitespace-nowrap text-sm capitalize text-green-700">tambah</td>
                <td class="px-4 py-2 whitespace-nowrap text-sm">Admin Fajri</td>
              </tr>
              <tr>
                <td class="px-4 py-2 whitespace-nowrap text-sm">2025-05-12 11:20</td>
                <td class="px-4 py-2 whitespace-nowrap text-sm font-semibold">Meja Kantor</td>
                <td class="px-4 py-2 whitespace-nowrap text-sm capitalize text-red-700">hapus</td>
                <td class="px-4 py-2 whitespace-nowrap text-sm">Admin Fajri</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </main>
  </div>

</body>
</html>
