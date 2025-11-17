@extends('layouts.app')

@section('meta-description')
Upcoming Events - Stay updated with our upcoming events, concerts, festivals, and performances. Book your tickets now for unforgettable experiences.
@endsection

@section('title')
Upcoming Events
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
        <span class="block">UPCOMING</span>
        <span class="block bg-gradient-to-r from-flame-orange via-flame-red to-flame-gold bg-clip-text text-transparent">
          EVENTS
        </span>
      </h1>
      
      <p class="text-xl md:text-2xl text-white/60 mb-12 max-w-3xl mx-auto">
        Experience the best in entertainment with our upcoming events
      </p>
    </div>
  </section>

  <!-- Events Content -->
  <section class="relative py-32">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-2 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full text-sm text-flame-gold font-semibold mb-6">
          Our Schedule
        </span>
        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6">
          <span class="bg-gradient-to-r from-flame-orange via-flame-red to-flame-gold bg-clip-text text-transparent">
            Event Calendar
          </span>
        </h2>
        <p class="text-xl text-white/60 max-w-3xl mx-auto mb-8">
          Join us for unforgettable experiences at venues around the world
        </p>

        <!-- Toggle Buttons -->
        <div class="flex items-center justify-center gap-3">
          <button id="upcoming-btn" class="event-toggle-btn active px-6 py-2.5 bg-gradient-to-r from-flame-orange to-flame-red rounded-full text-sm font-semibold transition-all" aria-label="Show upcoming events">
            Upcoming Events
          </button>
          <button id="past-btn" class="event-toggle-btn px-6 py-2.5 bg-white/5 border border-white/10 rounded-full text-sm font-semibold hover:bg-white/10 transition-all" aria-label="Show past events">
            Past Events
          </button>
        </div>
      </div>

      <!-- Upcoming Events -->
      <div id="upcoming-events" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Event Card 1 -->
        <div class="p-6 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl hover:bg-white/10 transition-all">
          <div class="flex items-center gap-3 mb-4">
            <div class="text-center">
              <div class="text-2xl font-display font-bold bg-gradient-to-r from-flame-orange to-flame-red bg-clip-text text-transparent">15</div>
              <div class="text-xs text-white/60 uppercase">JUN</div>
            </div>
            <div class="h-12 w-px bg-white/10"></div>
            <div>
              <div class="text-sm text-white/60">7:00 PM - 11:00 PM</div>
              <div class="text-sm text-white/60">Main Stage</div>
            </div>
          </div>
          <h3 class="text-2xl font-display font-bold mb-2">Summer Soundwave Festival</h3>
          <p class="text-white/60 mb-4">Featuring 15+ artists across multiple genres. Food trucks, art installations, and more.</p>
          <div class="flex items-center justify-between">
            <div class="text-sm text-white/60">Los Angeles, CA</div>
            <a href="#" class="px-4 py-2 bg-gradient-to-r from-flame-orange to-flame-red rounded-full text-sm font-semibold hover:shadow-lg hover:shadow-flame-orange/20 transition-all">
              Get Tickets
            </a>
          </div>
        </div>

        <!-- Event Card 2 -->
        <div class="p-6 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl hover:bg-white/10 transition-all">
          <div class="flex items-center gap-3 mb-4">
            <div class="text-center">
              <div class="text-2xl font-display font-bold bg-gradient-to-r from-flame-orange to-flame-red bg-clip-text text-transparent">22</div>
              <div class="text-xs text-white/60 uppercase">JUN</div>
            </div>
            <div class="h-12 w-px bg-white/10"></div>
            <div>
              <div class="text-sm text-white/60">9:00 PM - 2:00 AM</div>
              <div class="text-sm text-white/60">Club Ignite</div>
            </div>
          </div>
          <h3 class="text-2xl font-display font-bold mb-2">Neon Nights</h3>
          <p class="text-white/60 mb-4">An evening of electronic beats with resident and guest DJs. Themed decor and special cocktails.</p>
          <div class="flex items-center justify-between">
            <div class="text-sm text-white/60">New York, NY</div>
            <a href="#" class="px-4 py-2 bg-gradient-to-r from-flame-orange to-flame-red rounded-full text-sm font-semibold hover:shadow-lg hover:shadow-flame-orange/20 transition-all">
              Get Tickets
            </a>
          </div>
        </div>

        <!-- Event Card 3 -->
        <div class="p-6 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl hover:bg-white/10 transition-all">
          <div class="flex items-center gap-3 mb-4">
            <div class="text-center">
              <div class="text-2xl font-display font-bold bg-gradient-to-r from-flame-orange to-flame-red bg-clip-text text-transparent">30</div>
              <div class="text-xs text-white/60 uppercase">JUN</div>
            </div>
            <div class="h-12 w-px bg-white/10"></div>
            <div>
              <div class="text-sm text-white/60">6:00 PM - 10:00 PM</div>
              <div class="text-sm text-white/60">Rooftop Lounge</div>
            </div>
          </div>
          <h3 class="text-2xl font-display font-bold mb-2">Sunset Sessions</h3>
          <p class="text-white/60 mb-4">Intimate acoustic performances with cocktails and city views. Limited capacity for an exclusive experience.</p>
          <div class="flex items-center justify-between">
            <div class="text-sm text-white/60">Miami, FL</div>
            <a href="#" class="px-4 py-2 bg-gradient-to-r from-flame-orange to-flame-red rounded-full text-sm font-semibold hover:shadow-lg hover:shadow-flame-orange/20 transition-all">
              Get Tickets
            </a>
          </div>
        </div>

        <!-- Event Card 4 -->
        <div class="p-6 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl hover:bg-white/10 transition-all">
          <div class="flex items-center gap-3 mb-4">
            <div class="text-center">
              <div class="text-2xl font-display font-bold bg-gradient-to-r from-flame-orange to-flame-red bg-clip-text text-transparent">05</div>
              <div class="text-xs text-white/60 uppercase">JUL</div>
            </div>
            <div class="h-12 w-px bg-white/10"></div>
            <div>
              <div class="text-sm text-white/60">8:00 PM - 12:00 AM</div>
              <div class="text-sm text-white/60">The Grand Theater</div>
            </div>
          </div>
          <h3 class="text-2xl font-display font-bold mb-2">Electric Dreams Tour</h3>
          <p class="text-white/60 mb-4">Headlining act with two supporting artists. Full production with pyrotechnics and visual effects.</p>
          <div class="flex items-center justify-between">
            <div class="text-sm text-white/60">Chicago, IL</div>
            <a href="#" class="px-4 py-2 bg-gradient-to-r from-flame-orange to-flame-red rounded-full text-sm font-semibold hover:shadow-lg hover:shadow-flame-orange/20 transition-all">
              Get Tickets
            </a>
          </div>
        </div>

        <!-- Event Card 5 -->
        <div class="p-6 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl hover:bg-white/10 transition-all">
          <div class="flex items-center gap-3 mb-4">
            <div class="text-center">
              <div class="text-2xl font-display font-bold bg-gradient-to-r from-flame-orange to-flame-red bg-clip-text text-transparent">12</div>
              <div class="text-xs text-white/60 uppercase">JUL</div>
            </div>
            <div class="h-12 w-px bg-white/10"></div>
            <div>
              <div class="text-sm text-white/60">4:00 PM - 11:00 PM</div>
              <div class="text-sm text-white/60">Festival Grounds</div>
            </div>
          </div>
          <h3 class="text-2xl font-display font-bold mb-2">Urban Beats Festival</h3>
          <p class="text-white/60 mb-4">All-day festival featuring hip-hop, R&B, and urban artists. Multiple stages and food vendors.</p>
          <div class="flex items-center justify-between">
            <div class="text-sm text-white/60">Atlanta, GA</div>
            <a href="#" class="px-4 py-2 bg-gradient-to-r from-flame-orange to-flame-red rounded-full text-sm font-semibold hover:shadow-lg hover:shadow-flame-orange/20 transition-all">
              Get Tickets
            </a>
          </div>
        </div>

        <!-- Event Card 6 -->
        <div class="p-6 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl hover:bg-white/10 transition-all">
          <div class="flex items-center gap-3 mb-4">
            <div class="text-center">
              <div class="text-2xl font-display font-bold bg-gradient-to-r from-flame-orange to-flame-red bg-clip-text text-transparent">19</div>
              <div class="text-xs text-white/60 uppercase">JUL</div>
            </div>
            <div class="h-12 w-px bg-white/10"></div>
            <div>
              <div class="text-sm text-white/60">10:00 PM - 4:00 AM</div>
              <div class="text-sm text-white/60">Warehouse District</div>
            </div>
          </div>
          <h3 class="text-2xl font-display font-bold mb-2">Midnight Madness</h3>
          <p class="text-white/60 mb-4">Late-night electronic music experience in an industrial setting. Visual installations and immersive art.</p>
          <div class="flex items-center justify-between">
            <div class="text-sm text-white/60">Detroit, MI</div>
            <a href="#" class="px-4 py-2 bg-gradient-to-r from-flame-orange to-flame-red rounded-full text-sm font-semibold hover:shadow-lg hover:shadow-flame-orange/20 transition-all">
              Get Tickets
            </a>
          </div>
        </div>
      </div>

      <!-- Past Events (Hidden by default) -->
      <div id="past-events" class="hidden grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Past Event Card 1 -->
        <div class="p-6 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl opacity-60">
          <div class="flex items-center gap-3 mb-4">
            <div class="text-center">
              <div class="text-2xl font-display font-bold text-white/40">28</div>
              <div class="text-xs text-white/40 uppercase">MAY</div>
            </div>
            <div class="h-12 w-px bg-white/10"></div>
            <div>
              <div class="text-sm text-white/40">9:00 PM - 2:00 AM</div>
              <div class="text-sm text-white/40">Club Velocity</div>
            </div>
          </div>
          <h3 class="text-2xl font-display font-bold mb-2 text-white/70">Rooftop Rhythms</h3>
          <p class="text-white/40 mb-4">Sold-out rooftop event featuring international DJs with panoramic city views.</p>
          <div class="flex items-center justify-between">
            <div class="text-sm text-white/40">Los Angeles, CA</div>
            <span class="px-4 py-2 bg-white/10 rounded-full text-sm font-semibold text-white/40">
              Event Ended
            </span>
          </div>
        </div>

        <!-- Past Event Card 2 -->
        <div class="p-6 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl opacity-60">
          <div class="flex items-center gap-3 mb-4">
            <div class="text-center">
              <div class="text-2xl font-display font-bold text-white/40">20</div>
              <div class="text-xs text-white/40 uppercase">MAY</div>
            </div>
            <div class="h-12 w-px bg-white/10"></div>
            <div>
              <div class="text-sm text-white/40">7:00 PM - 11:00 PM</div>
              <div class="text-sm text-white/40">The Grand Theater</div>
            </div>
          </div>
          <h3 class="text-2xl font-display font-bold mb-2 text-white/70">Electric Dreams Opening Night</h3>
          <p class="text-white/40 mb-4">Opening night of the North American tour with special guest performances.</p>
          <div class="flex items-center justify-between">
            <div class="text-sm text-white/40">New York, NY</div>
            <span class="px-4 py-2 bg-white/10 rounded-full text-sm font-semibold text-white/40">
              Event Ended
            </span>
          </div>
        </div>

        <!-- Past Event Card 3 -->
        <div class="p-6 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl opacity-60">
          <div class="flex items-center gap-3 mb-4">
            <div class="text-center">
              <div class="text-2xl font-display font-bold text-white/40">12</div>
              <div class="text-xs text-white/40 uppercase">MAY</div>
            </div>
            <div class="h-12 w-px bg-white/10"></div>
            <div>
              <div class="text-sm text-white/40">4:00 PM - 10:00 PM</div>
              <div class="text-sm text-white/40">Festival Park</div>
            </div>
          </div>
          <h3 class="text-2xl font-display font-bold mb-2 text-white/70">Spring Music Festival</h3>
          <p class="text-white/40 mb-4">Three-stage festival with indie, alternative, and electronic artists.</p>
          <div class="flex items-center justify-between">
            <div class="text-sm text-white/40">Austin, TX</div>
            <span class="px-4 py-2 bg-white/10 rounded-full text-sm font-semibold text-white/40">
              Event Ended
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection