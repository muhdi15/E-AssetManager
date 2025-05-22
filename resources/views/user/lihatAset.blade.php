<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Lihat Aset - E-Asset Manager</title>
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
      <a href="#" class="flex items-center text-gray-600 hover:text-sky-600">Dashboard</a>
      <a href="#" class="flex items-center text-sky-600 font-semibold">Lihat Aset</a>
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
      <h2 class="text-xl font-semibold text-sky-700">Daftar Aset</h2>
      <div class="text-gray-600">Selamat datang, Fajri</div>
    </header>

    <main class="flex-1 p-6 bg-sky-50" x-data="{
      filterKategori: '',
      aset: [
        { nama: 'Laptop ASUS', kategori: 'Elektronik', tanggal: '2023-06-15', kondisi: 'Baik', lokasi: 'Ruang IT' },
        { nama: 'Printer EPSON', kategori: 'Peralatan Kantor', tanggal: '2022-11-20', kondisi: 'Rusak', lokasi: 'Ruang TU' },
        { nama: 'Kursi Ergonomis', kategori: 'Furniture', tanggal: '2024-01-10', kondisi: 'Hilang', lokasi: 'Ruang Rapat' }
      ],
      get asetTersaring() {
        if (!this.filterKategori) return this.aset;
        return this.aset.filter(a => a.kategori === this.filterKategori);
      }
    }">
      <div class="bg-white p-6 rounded-lg shadow-md overflow-x-auto">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-4">
          <h3 class="text-lg font-semibold text-sky-700">Daftar Aset Kantor</h3>
          <div>
            <label for="kategori" class="block text-sm font-medium text-gray-700 mb-1">Filter Kategori:</label>
            <select id="kategori" x-model="filterKategori" class="border border-gray-300 rounded-md px-3 py-2 text-sm w-60 focus:ring-sky-500 focus:border-sky-500">
              <option value="">Semua Kategori</option>
              <option value="Elektronik">Elektronik</option>
              <option value="Peralatan Kantor">Peralatan Kantor</option>
              <option value="Furniture">Furniture</option>
            </select>
          </div>
        </div>

        <table class="min-w-full text-sm border border-gray-200">
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
            <template x-for="item in asetTersaring" :key="item.nama">
              <tr class="hover:bg-sky-50">
                <td class="px-4 py-2 border-b" x-text="item.nama"></td>
                <td class="px-4 py-2 border-b" x-text="item.kategori"></td>
                <td class="px-4 py-2 border-b" x-text="item.tanggal"></td>
                <td class="px-4 py-2 border-b">
                  <span x-text="item.kondisi" 
                    :class="{
                      'text-green-600 font-medium': item.kondisi === 'Baik',
                      'text-red-600 font-medium': item.kondisi === 'Rusak',
                      'text-yellow-600 font-medium': item.kondisi === 'Hilang'
                    }"
                  ></span>
                </td>
                <td class="px-4 py-2 border-b" x-text="item.lokasi"></td>
              </tr>
            </template>
          </tbody>
        </table>
      </div>
    </main>
  </div>

</body>
</html>
