@extends('layouts.app')

@section('meta-description')
Our Services - 2 Flame Entertainment provides full-spectrum entertainment solutions including talent booking, event production, artist management, and more.
@endsection

@section('title')
Our Services
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
          SERVICES
        </span>
      </h1>
      
      <p class="text-xl md:text-2xl text-white/60 mb-12 max-w-3xl mx-auto">
        Full-spectrum entertainment solutions tailored to your unique vision
      </p>
    </div>
  </section>

  <!-- Services Content -->
  <section class="relative py-32 bg-gradient-to-b from-transparent via-flame-dark/50 to-transparent">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-2 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full text-sm text-flame-gold font-semibold mb-6">
          What We Offer
        </span>
        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6">
          <span class="bg-gradient-to-r from-flame-orange via-flame-red to-flame-gold bg-clip-text text-transparent">
            Comprehensive
          </span>
          <span class="block">Entertainment Solutions</span>
        </h2>
        <p class="text-xl text-white/60 max-w-3xl mx-auto">
          From talent booking to complete event production, we handle every detail to ensure your event is extraordinary
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Service Card 1 -->
        <div class="service-card group p-8 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl hover:bg-white/10 transition-all cursor-pointer">
          <div class="w-14 h-14 bg-gradient-to-br from-flame-orange to-flame-red rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-display font-bold mb-3">Talent Booking</h3>
          <p class="text-white/60 mb-4">Access our curated roster of elite DJs, producers, vocalists, and live performers for any event size or style.</p>
          <div class="service-details hidden group-hover:block text-sm text-white/50 border-t border-white/10 pt-4 mt-4">
            Custom talent matching, contract negotiation, rider management, and artist coordination.
          </div>
        </div>

        <!-- Service Card 2 -->
        <div class="service-card group p-8 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl hover:bg-white/10 transition-all cursor-pointer">
          <div class="w-14 h-14 bg-gradient-to-br from-flame-orange to-flame-red rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-display font-bold mb-3">Event Production</h3>
          <p class="text-white/60 mb-4">End-to-end event planning and execution, from intimate gatherings to large-scale festivals and concerts.</p>
          <div class="service-details hidden group-hover:block text-sm text-white/50 border-t border-white/10 pt-4 mt-4">
            Venue sourcing, stage design, technical production, logistics, and on-site management.
          </div>
        </div>

        <!-- Service Card 3 -->
        <div class="service-card group p-8 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl hover:bg-white/10 transition-all cursor-pointer">
          <div class="w-14 h-14 bg-gradient-to-br from-flame-orange to-flame-red rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-display font-bold mb-3">Artist Management</h3>
          <p class="text-white/60 mb-4">Comprehensive career development, brand building, and strategic guidance for emerging and established artists.</p>
          <div class="service-details hidden group-hover:block text-sm text-white/50 border-t border-white/10 pt-4 mt-4">
            Career strategy, brand development, social media management, and industry connections.
          </div>
        </div>

        <!-- Service Card 4 -->
        <div class="service-card group p-8 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl hover:bg-white/10 transition-all cursor-pointer">
          <div class="w-14 h-14 bg-gradient-to-br from-flame-orange to-flame-red rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-display font-bold mb-3">Marketing & Promotion</h3>
          <p class="text-white/60 mb-4">Strategic marketing campaigns, social media management, and promotional services to maximize event reach.</p>
          <div class="service-details hidden group-hover:block text-sm text-white/50 border-t border-white/10 pt-4 mt-4">
            Digital marketing, influencer partnerships, press releases, and promotional materials.
          </div>
        </div>

        <!-- Service Card 5 -->
        <div class="service-card group p-8 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl hover:bg-white/10 transition-all cursor-pointer">
          <div class="w-14 h-14 bg-gradient-to-br from-flame-orange to-flame-red rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-display font-bold mb-3">Technical Services</h3>
          <p class="text-white/60 mb-4">Professional audio, lighting, and visual production services with state-of-the-art equipment and expert technicians.</p>
          <div class="service-details hidden group-hover:block text-sm text-white/50 border-t border-white/10 pt-4 mt-4">
            Sound systems, lighting design, LED screens, special effects, and technical crew.
          </div>
        </div>

        <!-- Service Card 6 -->
        <div class="service-card group p-8 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl hover:bg-white/10 transition-all cursor-pointer">
          <div class="w-14 h-14 bg-gradient-to-br from-flame-orange to-flame-red rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-display font-bold mb-3">Venue Consulting</h3>
          <p class="text-white/60 mb-4">Expert guidance for venue owners on programming, talent curation, and operational optimization.</p>
          <div class="service-details hidden group-hover:block text-sm text-white/50 border-t border-white/10 pt-4 mt-4">
            Programming strategy, talent curation, operational consulting, and partnership development.
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection