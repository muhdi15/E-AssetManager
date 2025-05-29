
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login | E-Asset Manager</title>
  <script src="{{asset('tailwind.js')}}"></script>
</head>
<body class="bg-sky-50 min-h-screen flex items-center justify-center">

  <div class="flex flex-col lg:flex-row bg-white rounded-3xl shadow-2xl overflow-hidden max-w-5xl w-full mx-4">
    
    <!-- Ilustrasi -->
    <div class="lg:w-1/2 hidden lg:flex items-center justify-center bg-sky-100">
      <img src="{{asset('Logo E-Asset Manager\Logo E-AssetManager.png')}}" alt="Ilustrasi Aset" class="object-contain p-10"/>
    </div>

    <!-- Form Login -->
    <div class="w-full lg:w-1/2 p-10">
      <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-sky-600">E-Asset Manager 👋</h2>
        <p class="text-gray-500 mt-2">Masuk untuk mengelola aset Anda</p>
      </div>
      @if (session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif


      <form method="POST" action="{{route('login.post')}}" class="space-y-6">
        @csrf
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

        {{-- <div class="flex items-center justify-between text-sm text-gray-600">
          <label class="flex items-center">
            <input type="checkbox" class="h-4 w-4 text-sky-600" />
            <span class="ml-2">Ingat saya</span>
          </label>
          <a href="#" class="text-sky-600 hover:underline">Lupa Password?</a>
        </div> --}}

        <button
          type="submit"
          class="w-full bg-sky-600 text-white font-semibold py-3 rounded-xl hover:bg-sky-700 transition"
        >
          Masuk
        </button>
      </form>

      <p class="mt-6 text-center text-sm text-gray-600">
        Belum punya akun?
        <a href="{{route('register')}}" class="text-sky-600 font-medium hover:underline">Daftar Sekarang</a>
      </p>
    </div>
  </div>

</body>
</html>
