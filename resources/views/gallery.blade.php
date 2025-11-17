@extends('layouts.app')

@section('meta-description')
Gallery - View our collection of event highlights, artist performances, behind-the-scenes moments, and memorable experiences from 2 Flame Entertainment events.
@endsection

@section('title')
Event Gallery
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
        <span class="block">EVENT</span>
        <span class="block bg-gradient-to-r from-flame-orange via-flame-red to-flame-gold bg-clip-text text-transparent">
          GALLERY
        </span>
      </h1>
      
      <p class="text-xl md:text-2xl text-white/60 mb-12 max-w-3xl mx-auto">
        Moments that define the 2 Flame experience
      </p>
    </div>
  </section>

  <!-- Gallery Content -->
  <section class="relative py-32">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-2 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full text-sm text-flame-gold font-semibold mb-6">
          Our Highlights
        </span>
        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6">
          <span class="bg-gradient-to-r from-flame-orange via-flame-red to-flame-gold bg-clip-text text-transparent">
            Captured Moments
          </span>
        </h2>
        <p class="text-xl text-white/60 max-w-3xl mx-auto mb-8">
          A visual journey through our most memorable events and artist performances
        </p>

        <!-- Filter Buttons -->
        <div class="flex flex-wrap items-center justify-center gap-3">
          <button class="gallery-filter-btn active px-6 py-2.5 bg-gradient-to-r from-flame-orange to-flame-red rounded-full text-sm font-semibold transition-all" data-filter="all" aria-label="Show all images">
            All Events
          </button>
          <button class="gallery-filter-btn px-6 py-2.5 bg-white/5 border border-white/10 rounded-full text-sm font-semibold hover:bg-white/10 transition-all" data-filter="concert" aria-label="Show concerts">
            Concerts
          </button>
          <button class="gallery-filter-btn px-6 py-2.5 bg-white/5 border border-white/10 rounded-full text-sm font-semibold hover:bg-white/10 transition-all" data-filter="festival" aria-label="Show festivals">
            Festivals
          </button>
          <button class="gallery-filter-btn px-6 py-2.5 bg-white/5 border border-white/10 rounded-full text-sm font-semibold hover:bg-white/10 transition-all" data-filter="club" aria-label="Show club events">
            Club Events
          </button>
          <button class="gallery-filter-btn px-6 py-2.5 bg-white/5 border border-white/10 rounded-full text-sm font-semibold hover:bg-white/10 transition-all" data-filter="behind" aria-label="Show behind the scenes">
            Behind Scenes
          </button>
        </div>
      </div>

      <!-- Gallery Grid -->
      <div id="gallery-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Gallery Item 1 -->
        <div class="gallery-item group relative overflow-hidden rounded-2xl bg-white/5 border border-white/10 hover:border-flame-orange/50 transition-all cursor-pointer" data-category="concert">
          <div class="aspect-square overflow-hidden">
            <div class="w-full h-full bg-gradient-to-br from-flame-dark to-flame-darker flex items-center justify-center">
              <span class="text-white/30">Event Image</span>
            </div>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-flame-darker via-flame-darker/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 translate-y-full group-hover:translate-y-0 transition-transform">
            <h3 class="text-xl font-display font-bold mb-1">Summer Festival Headliner</h3>
            <p class="text-sm text-white/60">Los Angeles, CA • July 2024</p>
          </div>
        </div>

        <!-- Gallery Item 2 -->
        <div class="gallery-item group relative overflow-hidden rounded-2xl bg-white/5 border border-white/10 hover:border-flame-orange/50 transition-all cursor-pointer" data-category="festival">
          <div class="aspect-square overflow-hidden">
            <div class="w-full h-full bg-gradient-to-br from-flame-dark to-flame-darker flex items-center justify-center">
              <span class="text-white/30">Event Image</span>
            </div>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-flame-darker via-flame-darker/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 translate-y-full group-hover:translate-y-0 transition-transform">
            <h3 class="text-xl font-display font-bold mb-1">Electric Nights Festival</h3>
            <p class="text-sm text-white/60">Miami, FL • June 2024</p>
          </div>
        </div>

        <!-- Gallery Item 3 -->
        <div class="gallery-item group relative overflow-hidden rounded-2xl bg-white/5 border border-white/10 hover:border-flame-orange/50 transition-all cursor-pointer" data-category="club">
          <div class="aspect-square overflow-hidden">
            <div class="w-full h-full bg-gradient-to-br from-flame-dark to-flame-darker flex items-center justify-center">
              <span class="text-white/30">Event Image</span>
            </div>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-flame-darker via-flame-darker/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 translate-y-full group-hover:translate-y-0 transition-transform">
            <h3 class="text-xl font-display font-bold mb-1">Club Ignite Opening Night</h3>
            <p class="text-sm text-white/60">New York, NY • May 2024</p>
          </div>
        </div>

        <!-- Gallery Item 4 -->
        <div class="gallery-item group relative overflow-hidden rounded-2xl bg-white/5 border border-white/10 hover:border-flame-orange/50 transition-all cursor-pointer" data-category="behind">
          <div class="aspect-square overflow-hidden">
            <div class="w-full h-full bg-gradient-to-br from-flame-dark to-flame-darker flex items-center justify-center">
              <span class="text-white/30">Event Image</span>
            </div>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-flame-darker via-flame-darker/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 translate-y-full group-hover:translate-y-0 transition-transform">
            <h3 class="text-xl font-display font-bold mb-1">Artist Soundcheck</h3>
            <p class="text-sm text-white/60">Behind the Scenes • April 2024</p>
          </div>
        </div>

        <!-- Gallery Item 5 -->
        <div class="gallery-item group relative overflow-hidden rounded-2xl bg-white/5 border border-white/10 hover:border-flame-orange/50 transition-all cursor-pointer" data-category="concert">
          <div class="aspect-square overflow-hidden">
            <div class="w-full h-full bg-gradient-to-br from-flame-dark to-flame-darker flex items-center justify-center">
              <span class="text-white/30">Event Image</span>
            </div>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-flame-darker via-flame-darker/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 translate-y-full group-hover:translate-y-0 transition-transform">
            <h3 class="text-xl font-display font-bold mb-1">Rooftop Sessions</h3>
            <p class="text-sm text-white/60">Chicago, IL • March 2024</p>
          </div>
        </div>

        <!-- Gallery Item 6 -->
        <div class="gallery-item group relative overflow-hidden rounded-2xl bg-white/5 border border-white/10 hover:border-flame-orange/50 transition-all cursor-pointer" data-category="festival">
          <div class="aspect-square overflow-hidden">
            <div class="w-full h-full bg-gradient-to-br from-flame-dark to-flame-darker flex items-center justify-center">
              <span class="text-white/30">Event Image</span>
            </div>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-flame-darker via-flame-darker/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 translate-y-full group-hover:translate-y-0 transition-transform">
            <h3 class="text-xl font-display font-bold mb-1">Sunset Music Festival</h3>
            <p class="text-sm text-white/60">Austin, TX • February 2024</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection