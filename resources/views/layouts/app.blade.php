<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @hasSection('meta-description')
    <meta name="description" content="@yield('meta-description')">
  @endif
  <title>@hasSection('title') @yield('title') | @endif 2 Flame Entertainment</title>
  
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'flame-orange': '#FF6B35',
            'flame-red': '#E63946',
            'flame-gold': '#F4A261',
            'flame-dark': '#0A0A0A',
            'flame-darker': '#050505',
          },
          fontFamily: {
            sans: ['Inter', 'system-ui', 'sans-serif'],
            display: ['Space Grotesk', 'sans-serif'],
          }
        }
      }
    }
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
  @stack('styles')
</head>
<body class="bg-flame-darker text-white font-sans antialiased">
  
  <!-- Navigation -->
  <nav class="fixed top-0 left-0 right-0 z-50 bg-flame-darker/80 backdrop-blur-xl border-b border-white/5">
    <div class="max-w-7xl mx-auto px-6 py-4">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-8">
          <a href="{{ url('/') }}" class="text-2xl font-display font-bold">
            <span class="bg-gradient-to-r from-flame-orange via-flame-red to-flame-gold bg-clip-text text-transparent">
              2 FLAME
            </span>
          </a>
          <div class="hidden md:flex items-center gap-1 text-xs text-white/40">
            <span>A</span>
            <span class="text-white/60 font-semibold">DMG</span>
            <span>Company</span>
          </div>
        </div>
        
        <div class="hidden lg:flex items-center gap-8">
          <a href="{{ url('/about') }}" class="text-sm text-white/60 hover:text-white transition-colors {{ request()->is('about') ? 'text-flame-orange font-semibold' : '' }}">About</a>
          <a href="{{ url('/services') }}" class="text-sm text-white/60 hover:text-white transition-colors {{ request()->is('services') ? 'text-flame-orange font-semibold' : '' }}">Services</a>
          <a href="{{ url('/roster') }}" class="text-sm text-white/60 hover:text-white transition-colors {{ request()->is('roster') ? 'text-flame-orange font-semibold' : '' }}">Roster</a>
          <a href="{{ url('/gallery') }}" class="text-sm text-white/60 hover:text-white transition-colors {{ request()->is('gallery') ? 'text-flame-orange font-semibold' : '' }}">Gallery</a>
          <a href="{{ url('/events') }}" class="text-sm text-white/60 hover:text-white transition-colors {{ request()->is('events') ? 'text-flame-orange font-semibold' : '' }}">Events</a>
          <a href="{{ url('/contact') }}" class="text-sm text-white/60 hover:text-white transition-colors {{ request()->is('contact') ? 'text-flame-orange font-semibold' : '' }}">Contact</a>
        </div>
        
        <div class="flex items-center gap-4">
          <a href="{{ url('/contact') }}" class="hidden md:block px-6 py-2.5 bg-gradient-to-r from-flame-orange to-flame-red rounded-full text-sm font-semibold hover:shadow-lg hover:shadow-flame-orange/20 transition-all">
            Book Now
          </a>
          <button id="mobile-menu-btn" class="lg:hidden p-2" aria-label="Toggle mobile menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div>
      
      <!-- Mobile Menu -->
      <div id="mobile-menu" class="hidden lg:hidden pt-4 pb-2 border-t border-white/5 mt-4">
        <div class="flex flex-col gap-3">
          <a href="{{ url('/about') }}" class="text-sm text-white/60 hover:text-white transition-colors py-2 {{ request()->is('about') ? 'text-flame-orange font-semibold' : '' }}">About</a>
          <a href="{{ url('/services') }}" class="text-sm text-white/60 hover:text-white transition-colors py-2 {{ request()->is('services') ? 'text-flame-orange font-semibold' : '' }}">Services</a>
          <a href="{{ url('/roster') }}" class="text-sm text-white/60 hover:text-white transition-colors py-2 {{ request()->is('roster') ? 'text-flame-orange font-semibold' : '' }}">Roster</a>
          <a href="{{ url('/gallery') }}" class="text-sm text-white/60 hover:text-white transition-colors py-2 {{ request()->is('gallery') ? 'text-flame-orange font-semibold' : '' }}">Gallery</a>
          <a href="{{ url('/events') }}" class="text-sm text-white/60 hover:text-white transition-colors py-2 {{ request()->is('events') ? 'text-flame-orange font-semibold' : '' }}">Events</a>
          <a href="{{ url('/contact') }}" class="text-sm text-white/60 hover:text-white transition-colors py-2 {{ request()->is('contact') ? 'text-flame-orange font-semibold' : '' }}">Contact</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="pt-20">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="relative bg-flame-dark border-t border-white/10">
    <div class="max-w-7xl mx-auto px-6 py-16">
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
        <div class="lg:col-span-2">
          <a href="{{ url('/') }}" class="text-3xl font-display font-bold mb-6 block">
            <span class="bg-gradient-to-r from-flame-orange via-flame-red to-flame-gold bg-clip-text text-transparent">
              2 FLAME
            </span>
          </a>
          <p class="text-white/60 mb-6 max-w-md">
            Elite talent representation and event production that sets the entertainment world ablaze. A DMG Company.
          </p>
          <div class="flex gap-4">
            <a href="#" class="w-10 h-10 bg-white/5 border border-white/10 rounded-full flex items-center justify-center hover:bg-flame-orange/20 hover:border-flame-orange/50 transition-all">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path></svg>
            </a>
            <a href="#" class="w-10 h-10 bg-white/5 border border-white/10 rounded-full flex items-center justify-center hover:bg-flame-orange/20 hover:border-flame-orange/50 transition-all">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
            </a>
            <a href="#" class="w-10 h-10 bg-white/5 border border-white/10 rounded-full flex items-center justify-center hover:bg-flame-orange/20 hover:border-flame-orange/50 transition-all">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg>
            </a>
          </div>
        </div>
        
        <div>
          <h4 class="text-lg font-display font-semibold mb-6">Quick Links</h4>
          <div class="space-y-3">
            <a href="{{ url('/about') }}" class="block text-white/60 hover:text-flame-orange transition-colors">About</a>
            <a href="{{ url('/services') }}" class="block text-white/60 hover:text-flame-orange transition-colors">Services</a>
            <a href="{{ url('/roster') }}" class="block text-white/60 hover:text-flame-orange transition-colors">Roster</a>
            <a href="{{ url('/gallery') }}" class="block text-white/60 hover:text-flame-orange transition-colors">Gallery</a>
            <a href="{{ url('/events') }}" class="block text-white/60 hover:text-flame-orange transition-colors">Events</a>
          </div>
        </div>
        
        <div>
          <h4 class="text-lg font-display font-semibold mb-6">Contact</h4>
          <div class="space-y-3 text-white/60">
            <p>booking@2flame.com</p>
            <p>+1 (555) 123-4567</p>
            <p>Los Angeles, CA</p>
            <a href="{{ url('/contact') }}" class="inline-block mt-4 px-6 py-2.5 bg-gradient-to-r from-flame-orange to-flame-red rounded-full text-sm font-semibold hover:shadow-lg hover:shadow-flame-orange/20 transition-all text-white">
              Get in Touch
            </a>
          </div>
        </div>
      </div>
      
      <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
        <p class="text-white/40 text-sm"> 2024 2 Flame Entertainment. All rights reserved. A DMG Company.</p>
        <div class="flex gap-6 text-sm text-white/40">
          <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
          <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{ asset('script.js') }}"></script>
  @stack('scripts')
</body>
</html>