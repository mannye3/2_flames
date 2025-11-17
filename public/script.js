// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  
  if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', function() {
      mobileMenu.classList.toggle('hidden');
    });
  }
  
  // Close mobile menu when clicking on a link
  const mobileLinks = mobileMenu?.querySelectorAll('a');
  if (mobileLinks) {
    mobileLinks.forEach(link => {
      link.addEventListener('click', function() {
        mobileMenu.classList.add('hidden');
      });
    });
  }
  
  // Roster filtering
  const rosterFilterBtns = document.querySelectorAll('.roster-filter-btn');
  const rosterCards = document.querySelectorAll('.roster-card');
  
  if (rosterFilterBtns.length > 0 && rosterCards.length > 0) {
    rosterFilterBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        // Remove active class from all buttons
        rosterFilterBtns.forEach(b => b.classList.remove('active'));
        // Add active class to clicked button
        this.classList.add('active');
        
        const filter = this.getAttribute('data-filter');
        
        rosterCards.forEach(card => {
          if (filter === 'all' || card.getAttribute('data-category') === filter) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  }
  
  // Gallery filtering
  const galleryFilterBtns = document.querySelectorAll('.gallery-filter-btn');
  const galleryItems = document.querySelectorAll('.gallery-item');
  
  if (galleryFilterBtns.length > 0 && galleryItems.length > 0) {
    galleryFilterBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        // Remove active class from all buttons
        galleryFilterBtns.forEach(b => b.classList.remove('active'));
        // Add active class to clicked button
        this.classList.add('active');
        
        const filter = this.getAttribute('data-filter');
        
        galleryItems.forEach(item => {
          if (filter === 'all' || item.getAttribute('data-category') === filter) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  }
  
  // Event toggle
  const upcomingBtn = document.getElementById('upcoming-btn');
  const pastBtn = document.getElementById('past-btn');
  const upcomingEvents = document.getElementById('upcoming-events');
  const pastEvents = document.getElementById('past-events');
  
  if (upcomingBtn && pastBtn && upcomingEvents && pastEvents) {
    upcomingBtn.addEventListener('click', function() {
      upcomingBtn.classList.add('active');
      pastBtn.classList.remove('active');
      upcomingEvents.classList.remove('hidden');
      pastEvents.classList.add('hidden');
    });
    
    pastBtn.addEventListener('click', function() {
      pastBtn.classList.add('active');
      upcomingBtn.classList.remove('active');
      pastEvents.classList.remove('hidden');
      upcomingEvents.classList.add('hidden');
    });
  }
  
  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        const offsetTop = target.offsetTop - 80; // Adjust for fixed header
        window.scrollTo({
          top: offsetTop,
          behavior: 'smooth'
        });
      }
    });
  });
  
  // Contact form submission
  const contactForm = document.getElementById('contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Get form values
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const phone = document.getElementById('phone').value;
      const inquiryType = document.getElementById('inquiry-type').value;
      const message = document.getElementById('message').value;
      
      // Simple validation
      if (!name || !email || !inquiryType || !message) {
        alert('Please fill in all required fields.');
        return;
      }
      
      // In a real implementation, you would send this data to a server
      // For now, we'll just show a success message
      alert('Thank you for your message! We will get back to you soon.');
      contactForm.reset();
    });
  }
  
  // Newsletter form submission
  const newsletterForms = document.querySelectorAll('form');
  newsletterForms.forEach(form => {
    if (!form.hasAttribute('id')) { // Only target newsletter form (without id)
      form.addEventListener('submit', function(e) {
        e.preventDefault();
        const emailInput = form.querySelector('input[type="email"]');
        if (emailInput && emailInput.value) {
          alert('Thank you for subscribing to our newsletter!');
          form.reset();
        } else {
          alert('Please enter a valid email address.');
        }
      });
    }
  });
});