@extends('layouts.app')

@section('meta-description')
Our Talent Roster - Discover our carefully curated collection of world-class artists across all genres including DJs, producers, vocalists, bands, and performers.
@endsection

@section('title')
Our Talent Roster
@endsection

@section('content')
  <!-- Hero Section -->
  <section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
    <div class="absolute inset-0 z-0">
      <div class="w-full h-full bg-gradient-to-br from-flame-darker via-flame-dark to-flame-darker opacity-90"></div>
    </div>
    
    <div class="absolute inset-0 z-0 opacity-20">
      <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-br from-flame-orange via-flame-red to-transparent rounded-full blur-3xl"></div>
      <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-gradient-to-tr from-flame-gold via-flame-orange to-transparent rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-6 py-32 text-center">
      <h1 class="text-5xl md:text-7xl font-display font-bold mb-8 leading-none">
        <span class="block">OUR</span>
        <span class="block bg-gradient-to-r from-flame-orange via-flame-red to-flame-gold bg-clip-text text-transparent">
          ROSTER
        </span>
      </h1>
      
      <p class="text-xl md:text-2xl text-white/60 mb-12 max-w-3xl mx-auto">
        Discover our carefully curated collection of world-class artists
      </p>
    </div>
  </section>

  <!-- Roster Content -->
  <section class="relative py-32">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-2 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full text-sm text-flame-gold font-semibold mb-6">
          Our Talent
        </span>
        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6">
          <span class="bg-gradient-to-r from-flame-orange via-flame-red to-flame-gold bg-clip-text text-transparent">
            Elite Roster
          </span>
        </h2>
        <p class="text-xl text-white/60 max-w-3xl mx-auto mb-8">
          Discover our carefully curated collection of world-class artists across all genres
        </p>

        <!-- Filter Buttons -->
        <div class="flex flex-wrap items-center justify-center gap-3">
          <button class="roster-filter-btn active px-6 py-2.5 bg-gradient-to-r from-flame-orange to-flame-red rounded-full text-sm font-semibold transition-all" data-filter="all" aria-label="Show all artists">
            All Artists
          </button>
          <button class="roster-filter-btn px-6 py-2.5 bg-white/5 border border-white/10 rounded-full text-sm font-semibold hover:bg-white/10 transition-all" data-filter="dj" aria-label="Show DJs">
            DJs
          </button>
          <button class="roster-filter-btn px-6 py-2.5 bg-white/5 border border-white/10 rounded-full text-sm font-semibold hover:bg-white/10 transition-all" data-filter="producer" aria-label="Show producers">
            Producers
          </button>
          <button class="roster-filter-btn px-6 py-2.5 bg-white/5 border border-white/10 rounded-full text-sm font-semibold hover:bg-white/10 transition-all" data-filter="vocalist" aria-label="Show vocalists">
            Vocalists
          </button>
          <button class="roster-filter-btn px-6 py-2.5 bg-white/5 border border-white/10 rounded-full text-sm font-semibold hover:bg-white/10 transition-all" data-filter="band" aria-label="Show bands">
            Bands
          </button>
          <button class="roster-filter-btn px-6 py-2.5 bg-white/5 border border-white/10 rounded-full text-sm font-semibold hover:bg-white/10 transition-all" data-filter="performer" aria-label="Show performers">
            Performers
          </button>
        </div>
      </div>

      <!-- Roster Grid -->
      <div id="roster-grid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Artist Card 1 -->
        <div class="roster-card group relative overflow-hidden rounded-2xl bg-white/5 border border-white/10 hover:border-flame-orange/50 transition-all cursor-pointer" data-category="dj">
          <div class="aspect-[3/4] overflow-hidden">
            <div class="w-full h-full bg-gradient-to-br from-flame-dark to-flame-darker flex items-center justify-center">
              <span class="text-white/30">Artist Image</span>
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-flame-darker via-flame-darker/60 to-transparent"></div>
          </div>
          <div class="absolute bottom-0 left-0 right-0 p-6">
            <div class="flex items-center gap-2 mb-2">
              <span class="px-3 py-1 bg-flame-orange/20 border border-flame-orange/50 rounded-full text-xs font-semibold text-flame-orange">
                DJ
              </span>
              <span class="px-3 py-1 bg-white/10 rounded-full text-xs">House / Techno</span>
            </div>
            <h3 class="text-2xl font-display font-bold mb-2">Luna Blaze</h3>
            <p class="text-sm text-white/60 mb-4">International festival headliner with 10+ years experience</p>
            <div class="flex items-center gap-3">
              <a href="#" class="text-white/60 hover:text-flame-orange transition-colors" aria-label="Twitter">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path></svg>
              </a>
              <a href="#" class="text-white/60 hover:text-flame-orange transition-colors" aria-label="Instagram">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
              </a>
              <a href="#" class="text-white/60 hover:text-flame-orange transition-colors" aria-label="YouTube">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Artist Card 2 -->
        <div class="roster-card group relative overflow-hidden rounded-2xl bg-white/5 border border-white/10 hover:border-flame-orange/50 transition-all cursor-pointer" data-category="producer">
          <div class="aspect-[3/4] overflow-hidden">
            <div class="w-full h-full bg-gradient-to-br from-flame-dark to-flame-darker flex items-center justify-center">
              <span class="text-white/30">Artist Image</span>
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-flame-darker via-flame-darker/60 to-transparent"></div>
          </div>
          <div class="absolute bottom-0 left-0 right-0 p-6">
            <div class="flex items-center gap-2 mb-2">
              <span class="px-3 py-1 bg-flame-red/20 border border-flame-red/50 rounded-full text-xs font-semibold text-flame-red">
                Producer
              </span>
              <span class="px-3 py-1 bg-white/10 rounded-full text-xs">Hip-Hop / R&B</span>
            </div>
            <h3 class="text-2xl font-display font-bold mb-2">Phoenix Beats</h3>
            <p class="text-sm text-white/60 mb-4">Grammy-nominated producer with platinum records</p>
            <div class="flex items-center gap-3">
              <a href="#" class="text-white/60 hover:text-flame-orange transition-colors" aria-label="Twitter">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path></svg>
              </a>
              <a href="#" class="text-white/60 hover:text-flame-orange transition-colors" aria-label="Instagram">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
              </a>
              <a href="#" class="text-white/60 hover:text-flame-orange transition-colors" aria-label="YouTube">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg>
              </a>
              <a href="#" class="text-white/60 hover:text-flame-orange transition-colors" aria-label="SoundCloud">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"></path></svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Artist Card 3 -->
        <div class="roster-card group relative overflow-hidden rounded-2xl bg-white/5 border border-white/10 hover:border-flame-orange/50 transition-all cursor-pointer" data-category="vocalist">
          <div class="aspect-[3/4] overflow-hidden">
            <div class="w-full h-full bg-gradient-to-br from-flame-dark to-flame-darker flex items-center justify-center">
              <span class="text-white/30">Artist Image</span>
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-flame-darker via-flame-darker/60 to-transparent"></div>
          </div>
          <div class="absolute bottom-0 left-0 right-0 p-6">
            <div class="flex items-center gap-2 mb-2">
              <span class="px-3 py-1 bg-flame-gold/20 border border-flame-gold/50 rounded-full text-xs font-semibold text-flame-gold">
                Vocalist
              </span>
              <span class="px-3 py-1 bg-white/10 rounded-full text-xs">Pop / Soul</span>
            </div>
            <h3 class="text-2xl font-display font-bold mb-2">Aria Storm</h3>
            <p class="text-sm text-white/60 mb-4">Chart-topping vocalist with powerful stage presence</p>
            <div class="flex items-center gap-3">
              <a href="#" class="text-white/60 hover:text-flame-orange transition-colors" aria-label="Twitter">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path></svg>
              </a>
              <a href="#" class="text-white/60 hover:text-flame-orange transition-colors" aria-label="Instagram">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
              </a>
              <a href="#" class="text-white/60 hover:text-flame-orange transition-colors" aria-label="YouTube">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Artist Card 4 -->
        <div class="roster-card group relative overflow-hidden rounded-2xl bg-white/5 border border-white/10 hover:border-flame-orange/50 transition-all cursor-pointer" data-category="band">
          <div class="aspect-[3/4] overflow-hidden">
            <div class="w-full h-full bg-gradient-to-br from-flame-dark to-flame-darker flex items-center justify-center">
              <span class="text-white/30">Artist Image</span>
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-flame-darker via-flame-darker/60 to-transparent"></div>
          </div>
          <div class="absolute bottom-0 left-0 right-0 p-6">
            <div class="flex items-center gap-2 mb-2">
              <span class="px-3 py-1 bg-flame-orange/20 border border-flame-orange/50 rounded-full text-xs font-semibold text-flame-orange">
                Band
              </span>
              <span class="px-3 py-1 bg-white/10 rounded-full text-xs">Rock / Alternative</span>
            </div>
            <h3 class="text-2xl font-display font-bold mb-2">The Inferno Collective</h3>
            <p class="text-sm text-white/60 mb-4">High-energy rock band with explosive live shows</p>
            <div class="flex items-center gap-3">
              <a href="#" class="text-white/60 hover:text-flame-orange transition-colors" aria-label="Twitter">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path></svg>
              </a>
              <a href="#" class="text-white/60 hover:text-flame-orange transition-colors" aria-label="Instagram">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
              </a>
              <a href="#" class="text-white/60 hover:text-flame-orange transition-colors" aria-label="YouTube">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Artist Card 5 -->
        <div class="roster-card group relative overflow-hidden rounded-2xl bg-white/5 border border-white/10 hover:border-flame-orange/50 transition-all cursor-pointer" data-category="performer">
          <div class="aspect-[3/4] overflow-hidden">
            <div class="w-full h-full bg-gradient-to-br from-flame-dark to-flame-darker flex items-center justify-center">
              <span class="text-white/30">Artist Image</span>
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-flame-darker via-flame-darker/60 to-transparent"></div>
          </div>
          <div class="absolute bottom-0 left-0 right-0 p-6">
            <div class="flex items-center gap-2 mb-2">
              <span class="px-3 py-1 bg-flame-red/20 border border-flame-red/50 rounded-full text-xs font-semibold text-flame-red">
                Performer
              </span>
              <span class="px-3 py-1 bg-white/10 rounded-full text-xs">Dance / Urban</span>
            </div>
            <h3 class="text-2xl font-display font-bold mb-2">Blaze Dynamics</h3>
            <p class="text-sm text-white/60 mb-4">Award-winning dance crew with viral performances</p>
            <div class="flex items-center gap-3">
              <a href="#" class="text-white/60 hover:text-flame-orange transition-colors" aria-label="Twitter">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path></svg>
              </a>
              <a href="#" class="text-white/60 hover:text-flame-orange transition-colors" aria-label="Instagram">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.40z"></path></svg>
              </a>
              <a href="#" class="text-white/60 hover:text-flame-orange transition-colors" aria-label="YouTube">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection