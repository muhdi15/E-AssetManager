<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'Dashboard Pengguna - E-Asset Manager')</title>
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
      <a href="{{ route('userDashboard') }}" class="flex items-center text-sky-600 font-semibold">Dashboard</a>
      <a href="{{ route('lihatAsetUser') }}" class="flex items-center text-gray-600 hover:text-sky-600">Lihat Aset</a>
      <a href="{{ route('riwayatUser') }}" class="flex items-center text-gray-600 hover:text-sky-600">Riwayat Perubahan</a>
      <a href="{{ route('pengaturanUser') }}" class="flex items-center text-gray-600 hover:text-sky-600">Pengaturan</a>
      <a href="{{ route('logout') }}" class="flex items-center text-gray-600 hover:text-sky-600">Logout</a>
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

      <!-- User info with icon and dropdown -->
      <div class="relative flex items-center space-x-2" x-data="{ open: false }">
        <!-- User Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sky-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A9 9 0 1118.878 6.196 9 9 0 015.12 17.804z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>

        <!-- User name & dropdown toggle -->
        <button @click="open = !open" class="text-gray-700 font-medium focus:outline-none flex items-center">
          {{ Auth::user()->name }}
          <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>

        <!-- Dropdown menu -->
        <div
          x-show="open"
          @click.away="open = false"
          x-transition
          class="absolute right-0 mt-10 w-40 bg-white border border-gray-200 rounded shadow-md z-10"
          style="display: none;"
        >
          <a href="{{ route('pengaturanUser') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-sky-50">Pengaturan</a>
          <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-sky-50">Logout</a>
        </div>
      </div>
    </header>

    @yield('content')

  </div>

</body>
</html>
