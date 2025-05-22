<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pengaturan - E-Asset Manager</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-sky-50 text-gray-800" x-data="{ sidebarOpen: false }">
  <div class="flex h-screen">

    <!-- Sidebar -->
    <aside 
      class="fixed z-30 inset-y-0 left-0 w-64 bg-white border-r border-gray-200 p-6 transform transition-transform duration-300 md:relative md:translate-x-0"
      :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full md:translate-x-0'"
    >
      <h1 class="text-2xl font-bold text-sky-700 mb-8">E-Asset Manager</h1>
      <nav class="space-y-4">
        <a href="#" class="block text-gray-600 hover:text-sky-600">Dashboard</a>
        <a href="#" class="block text-gray-600 hover:text-sky-600">Lihat Aset</a>
        <a href="#" class="block text-gray-600 hover:text-sky-600">Riwayat Perubahan</a>
        <a href="#" class="block text-sky-600 font-semibold">Pengaturan</a>
      </nav>
    </aside>

    <!-- Overlay mobile -->
    <div
      x-show="sidebarOpen"
      class="fixed inset-0 bg-black bg-opacity-30 z-20 md:hidden"
      @click="sidebarOpen = false"
      x-transition.opacity
    ></div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
      <!-- Header -->
      <header class="bg-white shadow flex justify-between items-center p-4 border-b border-gray-200">
        <button @click="sidebarOpen = !sidebarOpen" class="md:hidden text-sky-700 p-2 rounded hover:bg-sky-100">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
        <h2 class="text-xl font-semibold text-sky-700">Pengaturan</h2>
        <div class="text-gray-600">Admin</div>
      </header>

      <!-- Content -->
      <main class="flex-1 p-6 overflow-y-auto bg-sky-50">
        <div class="bg-white rounded-xl shadow p-6 max-w-2xl mx-auto">
          <h3 class="text-lg font-semibold mb-4 text-sky-700">Pengaturan Akun</h3>

          <form class="space-y-4">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
              <input type="text" placeholder="Masukkan nama Anda" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-sky-500 focus:border-sky-500" />
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
              <input type="email" placeholder="Masukkan email Anda" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-sky-500 focus:border-sky-500" />
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi Baru</label>
              <input type="password" placeholder="Masukkan kata sandi baru" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-sky-500 focus:border-sky-500" />
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Sandi</label>
              <input type="password" placeholder="Ulangi kata sandi" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-sky-500 focus:border-sky-500" />
            </div>

            <div class="pt-4">
              <button type="submit" class="bg-sky-600 hover:bg-sky-700 text-white px-4 py-2 rounded-lg font-semibold">Simpan Perubahan</button>
            </div>
          </form>
        </div>
      </main>
    </div>
  </div>
</body>
</html>
