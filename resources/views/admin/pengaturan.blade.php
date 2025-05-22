<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Pengaturan - E-Asset Manager</title>
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
      <a href="#" class="flex items-center text-gray-600 hover:text-sky-600">Manajemen Aset</a>
      <a href="#" class="flex items-center text-gray-600 hover:text-sky-600">Laporan</a>
      <a href="#" class="flex items-center text-gray-600 hover:text-sky-600">Pengguna</a>
      <a href="#" class="flex items-center text-sky-600 font-semibold">Pengaturan</a>
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
      <h2 class="text-xl font-semibold text-sky-700">Pengaturan</h2>
      <div class="text-gray-600">Admin Fajri</div>
    </header>

    <main class="flex-1 p-6 bg-sky-50">
      <div class="bg-white p-6 rounded-lg shadow-md max-w-3xl mx-auto">
        <h3 class="text-lg font-semibold text-sky-700 mb-4">Informasi Akun</h3>
        <form class="space-y-4">
          <div>
            <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
            <input type="text" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500" value="M. Fajri Muallim">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500" value="fajri@example.com">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700">Password Baru</label>
            <input type="password" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500" placeholder="******">
          </div>
        </form>

        <h3 class="text-lg font-semibold text-sky-700 mt-8 mb-4">Preferensi Sistem</h3>
        <form class="space-y-4">
          <div>
            <label class="block text-sm font-medium text-gray-700">Tema</label>
            <select class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500">
              <option>Terang (Default)</option>
              <option>Gelap</option>
            </select>
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700">Bahasa</label>
            <select class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500">
              <option>Indonesia</option>
              <option>English</option>
            </select>
          </div>
          <div class="flex items-center space-x-2">
            <input type="checkbox" id="notif" class="rounded text-sky-600" checked>
            <label for="notif" class="text-sm text-gray-700">Aktifkan Notifikasi</label>
          </div>
        </form>

        <div class="mt-6 text-right">
          <button class="bg-sky-600 hover:bg-sky-700 text-white px-6 py-2 rounded-md">Simpan Perubahan</button>
        </div>
      </div>
    </main>
  </div>

</body>
</html>
