<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard Pengguna - E-Asset Manager</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="bg-sky-50 text-gray-800" x-data="{ sidebarOpen: false }">

  <!-- Sidebar -->
  <aside 
    class="fixed inset-y-0 left-0 bg-white border-r border-gray-200 w-64 p-6 transform transition-transform duration-300 md:translate-x-0"
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full md:translate-x-0'"
  >
    <h1 class="text-2xl font-bold text-sky-700 mb-8">E-Asset Manager</h1>
    <nav class="space-y-4">
      <a href="#" class="flex items-center text-sky-600 font-semibold">Dashboard</a>
      <a href="#" class="flex items-center text-gray-600 hover:text-sky-600">Lihat Aset</a>
      <a href="#" class="flex items-center text-gray-600 hover:text-sky-600">Riwayat Perubahan</a>
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
      <h2 class="text-xl font-semibold text-sky-700">Dashboard Pengguna</h2>
      <div class="text-gray-600">Selamat datang, Fajri</div>
    </header>

    <main class="flex-1 p-6 bg-sky-50">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <div class="bg-white rounded-lg p-4 shadow-md border-l-4 border-sky-500">
          <h4 class="text-sm font-medium text-gray-600">Total Barang</h4>
          <p class="text-2xl font-bold text-sky-700 mt-1">128</p>
        </div>
        <div class="bg-white rounded-lg p-4 shadow-md border-l-4 border-green-500">
          <h4 class="text-sm font-medium text-gray-600">Barang Baik</h4>
          <p class="text-2xl font-bold text-green-600 mt-1">112</p>
        </div>
        <div class="bg-white rounded-lg p-4 shadow-md border-l-4 border-red-500">
          <h4 class="text-sm font-medium text-gray-600">Rusak / Hilang</h4>
          <p class="text-2xl font-bold text-red-600 mt-1">16</p>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-sky-700 mb-4">Riwayat Perubahan Terbaru</h3>
        <ul class="divide-y divide-gray-200 text-sm">
          <li class="py-3 flex justify-between">
            <span>🛠 Laptop ASUS diperbarui ke kondisi "Rusak"</span>
            <span class="text-gray-500">17 Mei 2025</span>
          </li>
          <li class="py-3 flex justify-between">
            <span>➕ Printer EPSON ditambahkan</span>
            <span class="text-gray-500">15 Mei 2025</span>
          </li>
          <li class="py-3 flex justify-between">
            <span>📦 Kursi kerja dihapus dari daftar</span>
            <span class="text-gray-500">13 Mei 2025</span>
          </li>
        </ul>
      </div>
    </main>
  </div>

</body>
</html>
