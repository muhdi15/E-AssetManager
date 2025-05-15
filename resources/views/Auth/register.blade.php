<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register | E-Asset Manager</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-sky-50 min-h-screen flex items-center justify-center">

  <div class="flex flex-col lg:flex-row bg-white rounded-3xl shadow-2xl overflow-hidden max-w-5xl w-full mx-4">

    <!-- Ilustrasi -->
    <div class="lg:w-1/2 hidden lg:flex items-center justify-center bg-sky-100">
      <img src="https://via.placeholder.com/500x500?text=Register+Illustration" alt="Ilustrasi Register" class="object-contain p-10"/>
    </div>

    <!-- Form Register -->
    <div class="w-full lg:w-1/2 p-10">
      <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-sky-600">Buat Akun Baru</h2>
        <p class="text-gray-500 mt-2">Daftar untuk mulai mengelola aset kantor Anda</p>
      </div>

      <form class="space-y-6" method="POST" action="/register">
        <div>
          <label for="name" class="block text-gray-700 mb-1">Nama Lengkap</label>
          <input
            type="text" id="name" name="name" required
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-400"
            placeholder="Nama lengkap Anda"
          />
        </div>

        <div>
          <label for="email" class="block text-gray-700 mb-1">Email</label>
          <input
            type="email" id="email" name="email" required
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-400"
            placeholder="you@example.com"
          />
        </div>

        <div>
          <label for="password" class="block text-gray-700 mb-1">Password</label>
          <input
            type="password" id="password" name="password" required
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-400"
            placeholder="••••••••"
          />
        </div>

        <div>
          <label for="password_confirmation" class="block text-gray-700 mb-1">Konfirmasi Password</label>
          <input
            type="password" id="password_confirmation" name="password_confirmation" required
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-400"
            placeholder="••••••••"
          />
        </div>

        <div class="flex items-center text-gray-600">
          <input type="checkbox" id="terms" name="terms" required class="h-4 w-4 text-sky-600 rounded" />
          <label for="terms" class="ml-2 text-sm">
            Saya setuju dengan <a href="#" class="text-sky-600 hover:underline">Syarat & Ketentuan</a>
          </label>
        </div>

        <button
          type="submit"
          class="w-full bg-sky-600 text-white font-semibold py-3 rounded-xl hover:bg-sky-700 transition"
        >
          Daftar
        </button>
      </form>

      <p class="mt-6 text-center text-sm text-gray-600">
        Sudah punya akun?
        <a href="/login" class="text-sky-600 font-medium hover:underline">Masuk di sini</a>
      </p>
    </div>
  </div>

</body>
</html>
