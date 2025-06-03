<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/webp" href="./src/logo.webp" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Golden Ansor - {{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite('resources/css/umum.css')
  </head>
  <body class="min-h-screen bg-black overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-black/80 backdrop-blur-md border-b border-emerald-900/30">
      <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <div class="flex items-center">
          <img src="./src/logo.webp" alt="Logo" class="h-10 w-auto mr-3">
          <span class="text-xl font-bold bg-gradient-to-r from-emerald-400 to-emerald-600 bg-clip-text text-transparent">
            GP Ansor Pogalan
          </span>
        </div>
        <div class="hidden md:flex space-x-8">
          <a href="#home" class="text-emerald-400 hover:text-emerald-300 transition-colors">Beranda</a>
          <a href="#about" class="text-emerald-100 hover:text-emerald-300 transition-colors">Tentang</a>
          <a href="#program" class="text-emerald-100 hover:text-emerald-300 transition-colors">Program</a>
          <a href="#contact" class="text-emerald-100 hover:text-emerald-300 transition-colors">Kontak</a>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative w-full min-h-screen pt-24">
      <div class="absolute inset-0 animated-bg -z-9">
        <div class="absolute inset-0 fire-effect"></div>
        <div class="absolute inset-0 bg-noise opacity-10"></div>
        <div class="particles absolute inset-0"></div>
      </div>
      
      <div class="container mx-auto px-6 h-full items-center">
        @yield('content')
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black py-12 border-t border-emerald-900/30">
        <div class="container mx-auto px-6 text-center">
            <p class="text-sm text-emerald-900/50 tracking-wide">
                POWERED BY <a href="https://pelajartrenggalek.or.id" target="_blank" rel="noopener noreferrer" class="text-emerald-500/60 hover:text-emerald-400 transition-colors">SH<span class="font-bold">EDO</span>W</a>
            </p>
            <p class="text-emerald-700 mt-2 text-sm">
                2023 GP Ansor Pogalan. All rights reserved.
            </p>
        </div>
    </footer>
</body>
</html>
