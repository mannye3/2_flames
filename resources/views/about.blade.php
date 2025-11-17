@extends('layouts.app')

@section('meta-description')
About 2 Flame Entertainment - Learn about our 15+ years of experience in talent management and event production.
@endsection

@section('title')
About Us
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
        <span class="block">ABOUT</span>
        <span class="block bg-gradient-to-r from-flame-orange via-flame-red to-flame-gold bg-clip-text text-transparent">
          2 FLAME
        </span>
      </h1>
      
      <p class="text-xl md:text-2xl text-white/60 mb-12 max-w-3xl mx-auto">
        Where passion meets expertise in entertainment management
      </p>
    </div>
  </section>

  <!-- About Content -->
  <section class="relative py-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-16 items-center mb-32">
        <div>
          <span class="inline-block px-4 py-2 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full text-sm text-flame-gold font-semibold mb-6">
            Our Story
          </span>
          <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 leading-tight">
            Where Talent Meets
            <span class="block bg-gradient-to-r from-flame-orange via-flame-red to-flame-gold bg-clip-text text-transparent">
              Opportunity
            </span>
          </h2>
          <p class="text-lg text-white/60 mb-6 leading-relaxed">
            As a proud subsidiary of DMG, 2 Flame Entertainment represents the pinnacle of talent management and event production. We don't just book acts—we create unforgettable experiences that ignite audiences and elevate careers.
          </p>
          <p class="text-lg text-white/60 mb-8 leading-relaxed">
            With over 15 years of industry expertise and a roster of 50+ elite artists, we've produced more than 200 events annually, from intimate club nights to massive festival stages. Our commitment to excellence and innovation has made us the go-to partner for venues, promoters, and artists worldwide.
          </p>
          <div class="flex flex-wrap gap-4">
            <div class="flex items-center gap-2 text-flame-orange">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span class="text-white/80">Industry-Leading Roster</span>
            </div>
            <div class="flex items-center gap-2 text-flame-orange">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span class="text-white/80">Full-Service Production</span>
            </div>
            <div class="flex items-center gap-2 text-flame-orange">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span class="text-white/80">Global Network</span>
            </div>
          </div>
        </div>
        <div class="relative">
          <div class="absolute inset-0 bg-gradient-to-br from-flame-orange/20 to-flame-red/20 rounded-3xl blur-3xl"></div>
          <div class="relative rounded-3xl shadow-2xl bg-gradient-to-br from-flame-dark to-flame-darker h-96 flex items-center justify-center">
            <span class="text-white/30">Artist Performance Image</span>
          </div>
        </div>
      </div>

      <!-- Mission & Values -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-32">
        <div class="p-8 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl">
          <div class="w-14 h-14 bg-gradient-to-br from-flame-orange to-flame-red rounded-xl flex items-center justify-center mb-6">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-display font-bold mb-3">Our Mission</h3>
          <p class="text-white/60">To ignite the entertainment industry by connecting exceptional talent with unforgettable opportunities, creating experiences that resonate long after the last note fades.</p>
        </div>

        <div class="p-8 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl">
          <div class="w-14 h-14 bg-gradient-to-br from-flame-orange to-flame-red rounded-xl flex items-center justify-center mb-6">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-display font-bold mb-3">Our Values</h3>
          <p class="text-white/60">Excellence, integrity, and innovation drive everything we do. We believe in nurturing talent, exceeding expectations, and pushing the boundaries of what's possible in entertainment.</p>
        </div>

        <div class="p-8 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl">
          <div class="w-14 h-14 bg-gradient-to-br from-flame-orange to-flame-red rounded-xl flex items-center justify-center mb-6">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-display font-bold mb-3">Our Team</h3>
          <p class="text-white/60">A passionate collective of industry veterans, creative visionaries, and dedicated professionals who live and breathe entertainment, working tirelessly to bring your vision to life.</p>
        </div>
      </div>

      <!-- Stats -->
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-2 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full text-sm text-flame-gold font-semibold mb-6">
          By The Numbers
        </span>
        <h2 class="text-4xl md:text-5xl font-display font-bold mb-16">
          <span class="bg-gradient-to-r from-flame-orange via-flame-red to-flame-gold bg-clip-text text-transparent">
            Our Impact
          </span>
        </h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
          <div class="p-6 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl">
            <div class="text-4xl font-display font-bold bg-gradient-to-r from-flame-orange to-flame-red bg-clip-text text-transparent mb-2">
              50+
            </div>
            <div class="text-sm text-white/60">Elite Artists</div>
          </div>
          <div class="p-6 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl">
            <div class="text-4xl font-display font-bold bg-gradient-to-r from-flame-orange to-flame-red bg-clip-text text-transparent mb-2">
              200+
            </div>
            <div class="text-sm text-white/60">Events Annually</div>
          </div>
          <div class="p-6 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl">
            <div class="text-4xl font-display font-bold bg-gradient-to-r from-flame-orange to-flame-red bg-clip-text text-transparent mb-2">
              15+
            </div>
            <div class="text-sm text-white/60">Years Experience</div>
          </div>
          <div class="p-6 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl">
            <div class="text-4xl font-display font-bold bg-gradient-to-r from-flame-orange to-flame-red bg-clip-text text-transparent mb-2">
              24/7
            </div>
            <div class="text-sm text-white/60">Support</div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection