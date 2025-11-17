@extends('layouts.app')

@section('meta-description')
Contact Us - Get in touch with 2 Flame Entertainment for talent bookings, event inquiries, artist management, and partnership opportunities.
@endsection

@section('title')
Contact Us
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
        <span class="block">GET IN</span>
        <span class="block bg-gradient-to-r from-flame-orange via-flame-red to-flame-gold bg-clip-text text-transparent">
          TOUCH
        </span>
      </h1>
      
      <p class="text-xl md:text-2xl text-white/60 mb-12 max-w-3xl mx-auto">
        Let's create something extraordinary together
      </p>
    </div>
  </section>

  <!-- Contact Content -->
  <section class="relative py-32">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-16">
        <div>
          <span class="inline-block px-4 py-2 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full text-sm text-flame-gold font-semibold mb-6">
            Let's Connect
          </span>
          <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 leading-tight">
            Ready to
            <span class="block bg-gradient-to-r from-flame-orange via-flame-red to-flame-gold bg-clip-text text-transparent">
              Ignite the Stage?
            </span>
          </h2>
          <p class="text-lg text-white/60 mb-8 leading-relaxed">
            Whether you're planning an event, seeking talent representation, or exploring partnership opportunities, our team is ready to bring your vision to life. Reach out and let's start the conversation.
          </p>
          
          <div class="space-y-6">
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-gradient-to-br from-flame-orange to-flame-red rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-display font-bold mb-1">Phone</h3>
                <p class="text-white/60">+1 (555) 123-4567</p>
              </div>
            </div>
            
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-gradient-to-br from-flame-orange to-flame-red rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-display font-bold mb-1">Email</h3>
                <p class="text-white/60">booking@2flame.com</p>
                <p class="text-white/60">info@2flame.com</p>
              </div>
            </div>
            
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-gradient-to-br from-flame-orange to-flame-red rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-display font-bold mb-1">Office</h3>
                <p class="text-white/60">123 Entertainment Blvd</p>
                <p class="text-white/60">Los Angeles, CA 90210</p>
              </div>
            </div>
          </div>
          
          <div class="mt-12">
            <h3 class="text-2xl font-display font-bold mb-6">Follow Our Journey</h3>
            <div class="flex gap-4">
              <a href="#" class="w-12 h-12 bg-white/5 border border-white/10 rounded-full flex items-center justify-center hover:bg-flame-orange/20 hover:border-flame-orange/50 transition-all">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path></svg>
              </a>
              <a href="#" class="w-12 h-12 bg-white/5 border border-white/10 rounded-full flex items-center justify-center hover:bg-flame-orange/20 hover:border-flame-orange/50 transition-all">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
              </a>
              <a href="#" class="w-12 h-12 bg-white/5 border border-white/10 rounded-full flex items-center justify-center hover:bg-flame-orange/20 hover:border-flame-orange/50 transition-all">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg>
              </a>
            </div>
          </div>
        </div>
        
        <div>
          <div class="p-8 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl">
            <h3 class="text-2xl font-display font-bold mb-6">Send us a message</h3>
            <form id="contact-form" class="space-y-6">
              <div>
                <label for="name" class="block text-sm font-medium text-white/80 mb-2">Full Name</label>
                <input type="text" id="name" name="name" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-lg focus:outline-none focus:ring-2 focus:ring-flame-orange/50 focus:border-flame-orange/50 text-white placeholder-white/40">
              </div>
              
              <div>
                <label for="email" class="block text-sm font-medium text-white/80 mb-2">Email Address</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-lg focus:outline-none focus:ring-2 focus:ring-flame-orange/50 focus:border-flame-orange/50 text-white placeholder-white/40">
              </div>
              
              <div>
                <label for="phone" class="block text-sm font-medium text-white/80 mb-2">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-lg focus:outline-none focus:ring-2 focus:ring-flame-orange/50 focus:border-flame-orange/50 text-white placeholder-white/40">
              </div>
              
              <div>
                <label for="inquiry-type" class="block text-sm font-medium text-white/80 mb-2">Inquiry Type</label>
                <select id="inquiry-type" name="inquiry-type" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-lg focus:outline-none focus:ring-2 focus:ring-flame-orange/50 focus:border-flame-orange/50 text-white">
                  <option value="" class="bg-flame-darker">Select an option</option>
                  <option value="booking" class="bg-flame-darker">Talent Booking</option>
                  <option value="event" class="bg-flame-darker">Event Inquiry</option>
                  <option value="management" class="bg-flame-darker">Artist Management</option>
                  <option value="partnership" class="bg-flame-darker">Partnership Opportunity</option>
                  <option value="other" class="bg-flame-darker">Other</option>
                </select>
              </div>
              
              <div>
                <label for="message" class="block text-sm font-medium text-white/80 mb-2">Message</label>
                <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-lg focus:outline-none focus:ring-2 focus:ring-flame-orange/50 focus:border-flame-orange/50 text-white placeholder-white/40"></textarea>
              </div>
              
              <button type="submit" class="w-full px-6 py-4 bg-gradient-to-r from-flame-orange to-flame-red rounded-lg text-lg font-semibold hover:shadow-lg hover:shadow-flame-orange/30 transition-all">
                Send Message
              </button>
            </form>
          </div>
          
          <div class="mt-8 p-8 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl">
            <h3 class="text-2xl font-display font-bold mb-4">Newsletter Signup</h3>
            <p class="text-white/60 mb-6">Stay updated with our latest events, artist features, and industry insights.</p>
            <form class="space-y-4">
              <div>
                <label for="newsletter-email" class="sr-only">Email Address</label>
                <input type="email" id="newsletter-email" name="newsletter-email" placeholder="Your email address" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-lg focus:outline-none focus:ring-2 focus:ring-flame-orange/50 focus:border-flame-orange/50 text-white placeholder-white/40">
              </div>
              <button type="submit" class="w-full px-6 py-3 bg-white/10 border border-white/10 rounded-lg text-sm font-semibold hover:bg-white/20 transition-all">
                Subscribe to Newsletter
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection