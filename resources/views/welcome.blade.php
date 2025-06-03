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
    <!-- GSAP Animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <style>
      /* Efek glitter emas */
      .gold-glitter {
        background-image: radial-gradient(circle, rgba(255,215,0,0.3) 1px, transparent 1px);
        background-size: 20px 20px;
        will-change: transform, opacity;
        backface-visibility: hidden;
      }

      /* Animasi glitter */
      @keyframes glitter {
        0% { opacity: 0; }
        50% { opacity: 0.7; }
        100% { opacity: 0; }
      }

      .gold-glitter::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle, rgba(255,215,0,0.8) 1px, transparent 1px);
        background-size: 20px 20px;
        animation: glitter 3s infinite;
      }
      
      /* Optimasi CSS */
      .particles {
        will-change: transform, opacity;
        backface-visibility: hidden;
      }
      #logo-animated {
        transform: translateZ(0); /* Trigger GPU acceleration */
      }
    </style>
  </head>
  <body class="min-h-screen bg-emerald-900 overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-black/80 backdrop-blur-md border-b border-emerald-900/30">
      <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <div class="flex items-center">
          <img src="./src/logo.webp" alt="Logo" class="h-10 w-auto mr-3">
          <span class="text-xl font-bold bg-gradient-to-r from-emerald-400 to-yellow-400 bg-clip-text text-transparent">
            GP Ansor Pogalan
          </span>
        </div>
        <div class="hidden md:flex space-x-8">
          <a href="#home" class="text-emerald-400 hover:text-yellow-300 transition-colors">Beranda</a>
          <a href="#about" class="text-emerald-100 hover:text-yellow-300 transition-colors">Tentang</a>
          <a href="#contact" class="text-emerald-100 hover:text-yellow-300 transition-colors">Kontak</a>
        </div>
      </div>
    </nav>

    <!-- Hero Section dengan sentuhan emas -->
    <section id="home" class="relative w-full min-h-screen pt-36">
      <div class="absolute inset-0 animated-bg -z-9">
        <div class="absolute inset-0 fire-effect"></div>
        <div class="absolute inset-0 bg-noise opacity-10"></div>
        <div class="particles absolute inset-0"></div>
        <!-- Efek glitter emas -->
        <div class="absolute inset-0 gold-glitter opacity-5"></div>
      </div>
      
      <div class="container mx-auto px-6 h-full flex flex-col md:flex-row items-center">
        <!-- Logo - Tampil di atas pada mobile, samping pada desktop -->
        <div class="w-full md:w-1/2 flex justify-center mb-10 md:mb-0 md:order-2">
          <div class="w-3/4 md:w-full">
            <div class="relative">
              <!-- Logo dengan border gradient halus -->
              <div class="p-2 bg-gradient-to-br">
                <img src="logo.webp" alt="Logo" class="w-full h-auto max-w-xs mx-auto md:max-w-md object-contain" id="logo-animated" style="padding:2px">
              </div>
              
              <!-- Glow effect subtle -->
              <div class="absolute inset-0 rounded-full bg-yellow-400/10 -z-10 opacity-0 transition-opacity duration-1000 group-hover:opacity-100" style="margin:-4px"></div>
            </div>
          </div>
        </div>
        
        <!-- Konten - Tampil di bawah pada mobile, samping pada desktop -->
        <div class="w-full md:w-1/2 md:order-1 py-6 md:py-12">
          <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight hero-title">
            <span class="bg-gradient-to-r from-emerald-400 to-yellow-400 bg-clip-text text-transparent">
              Golden PKD & DIKLATSAR
            </span>
            <br>
            <span class="text-yellow-200">PAC GP Ansor Pogalan</span> 
          </h1>
          
          <p class="text-yellow-100 text-lg mb-10 max-w-lg hero-desc">
            <b>Dari Tradisi ke Aksi:</b> Mencetak Kader Navigator Masa Depan
          </p>
          
          <!-- Main Buttons -->
          <div class="flex flex-wrap gap-4 mb-8 hero-buttons">
            <a href="{{route('filament.shedow.auth.register')}}" class="px-8 py-4 bg-gradient-to-r from-yellow-500 to-yellow-600 text-black rounded-lg font-medium hover:shadow-lg hover:shadow-yellow-500/30 transition-all">
              DAFTAR
            </a>
            <a href="{{ route('filament.shedow.auth.login') }}" class="px-8 py-4 bg-transparent border-2 border-yellow-500 text-yellow-400 rounded-lg font-medium hover:bg-yellow-500/10 transition-all">
              Masuk
            </a>
          </div>

          <!-- Quick Actions Grid -->
          <div class="grid grid-cols-2 gap-3 hero-quick-actions">
            <a href="#timeline" class="quick-action bg-emerald-900/30 hover:bg-yellow-900/40 border border-emerald-800/50 hover:border-yellow-700">
              <i class="fas fa-calendar-day text-xl md:text-2xl text-yellow-400"></i>
              <span>Timeline</span>
            </a>
            
            <a href="/download-tor" class="quick-action bg-emerald-900/30 hover:bg-yellow-900/40 border border-emerald-800/50 hover:border-yellow-700">
              <i class="fas fa-file-download text-xl md:text-2xl text-yellow-400"></i>
              <span>Download TOR</span>
            </a>
            
            <a href="#contact" class="quick-action bg-emerald-900/30 hover:bg-yellow-900/40 border border-emerald-800/50 hover:border-yellow-700">
              <i class="fas fa-phone-alt text-xl md:text-2xl text-yellow-400"></i>
              <span>Contact</span>
            </a>
            
            {{-- <a href="/data-peserta" class="quick-action bg-emerald-900/30 hover:bg-yellow-900/40 border border-emerald-800/50 hover:border-yellow-700">
              <i class="fas fa-users text-xl md:text-2xl text-yellow-400"></i>
              <span>Peserta</span>
            </a> --}}
          </div>
        </div>
      </div>
      
      <!-- Swipe Down Indicator -->
      <div class="absolute bottom-8 left-0 right-0 flex flex-col items-center justify-center">
        <p class="text-yellow-300 text-sm mb-2 opacity-80 animate-pulse">Scroll untuk lanjut</p>
        <div class="animate-bounce text-yellow-400">
          <i class="fas fa-chevron-down text-xl"></i>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gradient-to-b from-black to-emerald-900/10">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-3xl font-bold text-emerald-400 mb-8 text-center">Tentang GP Ansor Pogalan</h2>
            <div class="bg-black/50 p-8 rounded-xl border border-emerald-900/30">
                <p class="text-emerald-100 mb-6">
                    GP Ansor Pogalan merupakan organisasi kepemudaan di bawah naungan Nahdlatul Ulama yang berfokus pada pengembangan pemuda melalui kegiatan sosial, keagamaan, dan kebangsaan.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mt-8">
                    <!-- Social Links -->
                    <a href="https://x.com/ansorpogalan" target="_blank" class="social-card transform hover:scale-105 transition-transform duration-300">
                        <div class="bg-gradient-to-br from-emerald-900/30 to-emerald-800/20 p-4 rounded-xl border border-emerald-800/50 h-full flex flex-col items-center justify-center">
                            <i class="fab fa-x-twitter text-3xl text-emerald-400 mb-2"></i>
                            <span class="text-emerald-100 font-medium">Twitter</span>
                        </div>
                    </a>
                    
                    <a href="https://instagram.com/ansorpogalan" target="_blank" class="social-card transform hover:scale-105 transition-transform duration-300">
                        <div class="bg-gradient-to-br from-emerald-900/30 to-emerald-800/20 p-4 rounded-xl border border-emerald-800/50 h-full flex flex-col items-center justify-center">
                            <i class="fab fa-instagram text-3xl text-emerald-400 mb-2"></i>
                            <span class="text-emerald-100 font-medium">Instagram</span>
                        </div>
                    </a>
                    
                    <a href="https://tiktok.com/@ansorpogalan" target="_blank" class="social-card transform hover:scale-105 transition-transform duration-300">
                        <div class="bg-gradient-to-br from-emerald-900/30 to-emerald-800/20 p-4 rounded-xl border border-emerald-800/50 h-full flex flex-col items-center justify-center">
                            <i class="fab fa-tiktok text-3xl text-emerald-400 mb-2"></i>
                            <span class="text-emerald-100 font-medium">TikTok</span>
                        </div>
                    </a>
                    
                    <a href="https://facebook.com/ansorpogalan" target="_blank" class="social-card transform hover:scale-105 transition-transform duration-300">
                        <div class="bg-gradient-to-br from-emerald-900/30 to-emerald-800/20 p-4 rounded-xl border border-emerald-800/50 h-full flex flex-col items-center justify-center">
                            <i class="fab fa-facebook text-3xl text-emerald-400 mb-2"></i>
                            <span class="text-emerald-100 font-medium">Facebook</span>
                        </div>
                    </a>
                    
                    <a href="https://threads.net/@ansorpogalan" target="_blank" class="social-card transform hover:scale-105 transition-transform duration-300">
                        <div class="bg-gradient-to-br from-emerald-900/30 to-emerald-800/20 p-4 rounded-xl border border-emerald-800/50 h-full flex flex-col items-center justify-center">
                            <i class="fab fa-threads text-3xl text-emerald-400 mb-2"></i>
                            <span class="text-emerald-100 font-medium">Threads</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section id="timeline" class="py-20 bg-gradient-to-b from-black to-emerald-900/10">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-emerald-400 mb-12 timeline-title">Timeline Kegiatan</h2>
            
            <div class="max-w-4xl mx-auto grid md:grid-cols-3 gap-6 timeline-items">
                <div class="bg-black/50 p-6 rounded-xl border border-emerald-900/30 text-center timeline-item opacity-0">
                    <div class="text-emerald-400 text-2xl mb-3">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3 class="text-xl font-bold text-emerald-300 mb-2">Pendaftaran</h3>
                    <p class="text-emerald-100">1-30 Juni 2025</p>
                </div>
                
                <div class="bg-black/50 p-6 rounded-xl border border-emerald-900/30 text-center timeline-item opacity-0">
                    <div class="text-emerald-400 text-2xl mb-3">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-bold text-emerald-300 mb-2">Screening</h3>
                    <p class="text-emerald-100">04 Juli 2025</p>
                </div>
                
                <div class="bg-black/50 p-6 rounded-xl border border-emerald-900/30 text-center timeline-item opacity-0">
                    <div class="text-emerald-400 text-2xl mb-3">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h3 class="text-xl font-bold text-emerald-300 mb-2">Pelaksanaan</h3>
                    <p class="text-emerald-100">04-06 Juli 2025</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-black">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-emerald-400 mb-12">Contact Person</h2>
            
            <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-6">
                <!-- Contact 1 -->
                <div class="bg-black/50 p-8 rounded-xl border border-emerald-900/30">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-16 h-16 rounded-full bg-emerald-900/30 border border-emerald-800/50 flex items-center justify-center text-2xl text-emerald-400">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-emerald-300">Abu Yazid Albastomi</h3>
                            <p class="text-emerald-400">DIKLATSAR</p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <a href="https://wa.me/085749420889" target="_blank" class="flex items-center gap-3 text-emerald-100">
                            <i class="fab fa-whatsapp text-emerald-400"></i>
                            <span>0857-4942-0889</span>
                        </a>
                    </div>
                </div>
                
                <!-- Contact 2 -->
                <div class="bg-black/50 p-8 rounded-xl border border-emerald-900/30">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-16 h-16 rounded-full bg-emerald-900/30 border border-emerald-800/50 flex items-center justify-center text-2xl text-emerald-400">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-emerald-300">M. Hilmi Falah</h3>
                            <p class="text-emerald-400">PKD</p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <a href="https://wa.me/085748904166" target="_blank" class="flex items-center gap-3 text-emerald-100">
                            <i class="fab fa-whatsapp text-emerald-400"></i>
                            <span>0857-4890-4166</span>
                        </a>
                    </div>
                </div>
            </div>
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
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        // Gunakan will-change untuk optimasi GPU
        gsap.set(['#logo-animated', '.hero-title', '.hero-desc', '.hero-buttons'], { 
          willChange: 'transform, opacity' 
        });

        // Animasi logo yang dioptimasi
        const logoAnimation = gsap.to('#logo-animated', {
          y: -15,
          opacity: 0.9,
          duration: 2,
          repeat: -1,
          yoyo: true,
          ease: 'sine.inOut'
        });
        
        // Animasi hero section yang dioptimasi
        gsap.from('.hero-title', {
          duration: 1,
          y: 30,
          opacity: 0,
          ease: 'power1.out',
          immediateRender: false
        });

        // ScrollTrigger dengan optimasi
        gsap.utils.toArray('section').forEach((section, i) => {
          if (i > 0) {
            gsap.from(section, {
              scrollTrigger: {
                trigger: section,
                start: 'top 85%',
                toggleActions: 'play none none none',
                markers: false
              },
              duration: 0.8,
              y: 50,
              opacity: 0,
              ease: 'power1.out'
            });
          }
        });

        // Matikan animasi saat tab tidak aktif
        document.addEventListener('visibilitychange', () => {
          if (document.hidden) {
            logoAnimation.pause();
            gsap.globalTimeline.pause();
          } else {
            logoAnimation.play();
            gsap.globalTimeline.play();
          }
        });
      });
    </script>
    <script>
      // Timeline animation
      document.addEventListener('DOMContentLoaded', function() {
        const timelineItems = document.querySelectorAll('.timeline-item');
        
        const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('opacity-100');
              entry.target.classList.remove('opacity-0');
            }
          });
        }, { threshold: 0.1 });
        
        timelineItems.forEach(item => {
          observer.observe(item);
        });
      });
    </script>
  </body>
</html>
