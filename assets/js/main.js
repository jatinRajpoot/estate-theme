/* =========================================
   MODERN REAL ESTATE THEME - JAVASCRIPT
   ========================================= */

// Wait for DOM to load
document.addEventListener('DOMContentLoaded', function() {
  
  // ========== Header Scroll Effect ==========
  const header = document.querySelector('.header');
  
  function handleScroll() {
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }
  
  window.addEventListener('scroll', handleScroll);
  handleScroll(); // Check on load
  
  // ========== Mobile Navigation Toggle ==========
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navMenu = document.querySelector('.nav-menu');
  
  if (mobileToggle) {
    mobileToggle.addEventListener('click', function() {
      navMenu.classList.toggle('active');
      this.classList.toggle('active');
    });
  }
  
  // ========== Search Tabs ==========
  const searchTabs = document.querySelectorAll('.search-tab');
  
  searchTabs.forEach(tab => {
    tab.addEventListener('click', function() {
      searchTabs.forEach(t => t.classList.remove('active'));
      this.classList.add('active');
    });
  });
  
  // ========== Property Favorite Toggle ==========
  const favoriteButtons = document.querySelectorAll('.property-favorite');
  
  favoriteButtons.forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      this.classList.toggle('active');
      const icon = this.querySelector('i');
      if (icon) {
        icon.classList.toggle('fas');
        icon.classList.toggle('far');
      }
    });
  });
  
  // ========== FAQ Accordion ==========
  const faqItems = document.querySelectorAll('.faq-item');
  
  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    
    question.addEventListener('click', function() {
      const isActive = item.classList.contains('active');
      
      // Close all items
      faqItems.forEach(i => i.classList.remove('active'));
      
      // Open clicked item if it wasn't active
      if (!isActive) {
        item.classList.add('active');
      }
    });
  });
  
  // ========== Scroll Animations ==========
  const animateElements = document.querySelectorAll('.animate-on-scroll');
  
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animated');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);
  
  animateElements.forEach(el => observer.observe(el));
  
  // ========== Counter Animation ==========
  const counters = document.querySelectorAll('.stats-number');
  
  function animateCounter(el) {
    const target = parseInt(el.getAttribute('data-count'));
    const duration = 2000;
    const step = target / (duration / 16);
    let current = 0;
    
    const timer = setInterval(() => {
      current += step;
      if (current >= target) {
        el.textContent = target.toLocaleString() + (el.getAttribute('data-suffix') || '');
        clearInterval(timer);
      } else {
        el.textContent = Math.floor(current).toLocaleString() + (el.getAttribute('data-suffix') || '');
      }
    }, 16);
  }
  
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        counterObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });
  
  counters.forEach(counter => counterObserver.observe(counter));
  
  // ========== Smooth Scroll for Anchor Links ==========
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;
      
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        e.preventDefault();
        targetElement.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
  
  // ========== Property Gallery (for property.html) ==========
  const galleryMain = document.querySelector('.gallery-main img');
  const galleryThumbs = document.querySelectorAll('.gallery-thumb');
  
  galleryThumbs.forEach(thumb => {
    thumb.addEventListener('click', function() {
      const newSrc = this.querySelector('img').src;
      if (galleryMain) {
        galleryMain.src = newSrc;
      }
      galleryThumbs.forEach(t => t.classList.remove('active'));
      this.classList.add('active');
    });
  });
  
  // ========== Form Validation ==========
  const contactForm = document.querySelector('.contact-form');
  
  if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Basic validation
      const inputs = this.querySelectorAll('[required]');
      let isValid = true;
      
      inputs.forEach(input => {
        if (!input.value.trim()) {
          isValid = false;
          input.classList.add('error');
        } else {
          input.classList.remove('error');
        }
      });
      
      if (isValid) {
        // Show success message
        showNotification('Message sent successfully!', 'success');
        this.reset();
      } else {
        showNotification('Please fill in all required fields.', 'error');
      }
    });
  }
  
  // ========== Notification System ==========
  function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
      <span>${message}</span>
      <button class="notification-close">&times;</button>
    `;
    
    document.body.appendChild(notification);
    
    // Trigger animation
    setTimeout(() => notification.classList.add('show'), 10);
    
    // Close button
    notification.querySelector('.notification-close').addEventListener('click', () => {
      notification.classList.remove('show');
      setTimeout(() => notification.remove(), 300);
    });
    
    // Auto close after 5 seconds
    setTimeout(() => {
      if (notification.parentNode) {
        notification.classList.remove('show');
        setTimeout(() => notification.remove(), 300);
      }
    }, 5000);
  }
  
  // ========== Newsletter Form ==========
  const newsletterForm = document.querySelector('.newsletter-form');
  
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', function(e) {
      e.preventDefault();
      const email = this.querySelector('input[type="email"]').value;
      
      if (email) {
        showNotification('Thank you for subscribing!', 'success');
        this.reset();
      }
    });
  }
  
  // ========== Testimonial Slider (Optional Enhancement) ==========
  let currentTestimonial = 0;
  const testimonials = document.querySelectorAll('.testimonial-card');
  
  function showTestimonial(index) {
    testimonials.forEach((t, i) => {
      t.style.opacity = i === index ? '1' : '0.5';
      t.style.transform = i === index ? 'scale(1)' : 'scale(0.95)';
    });
  }
  
  // ========== Lazy Loading Images ==========
  const lazyImages = document.querySelectorAll('img[data-src]');
  
  const imageObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const img = entry.target;
        img.src = img.dataset.src;
        img.removeAttribute('data-src');
        imageObserver.unobserve(img);
      }
    });
  });
  
  lazyImages.forEach(img => imageObserver.observe(img));
  
  // ========== Back to Top Button ==========
  const backToTop = document.createElement('button');
  backToTop.className = 'back-to-top';
  backToTop.innerHTML = '<i class="fas fa-arrow-up"></i>';
  document.body.appendChild(backToTop);
  
  // Add styles dynamically
  const style = document.createElement('style');
  style.textContent = `
    .back-to-top {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 50px;
      height: 50px;
      background: var(--accent-gold, #d4a853);
      color: var(--primary-dark, #0a1628);
      border: none;
      border-radius: 50%;
      cursor: pointer;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      z-index: 999;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
    }
    
    .back-to-top.visible {
      opacity: 1;
      visibility: visible;
    }
    
    .back-to-top:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 20px rgba(212, 168, 83, 0.4);
    }
    
    .notification {
      position: fixed;
      top: 100px;
      right: 30px;
      padding: 15px 25px;
      background: var(--primary-dark, #0a1628);
      border: 1px solid var(--card-border, rgba(255,255,255,0.1));
      border-radius: 10px;
      color: #fff;
      display: flex;
      align-items: center;
      gap: 15px;
      z-index: 10000;
      transform: translateX(120%);
      transition: transform 0.3s ease;
    }
    
    .notification.show {
      transform: translateX(0);
    }
    
    .notification-success {
      border-left: 3px solid #4caf50;
    }
    
    .notification-error {
      border-left: 3px solid #f44336;
    }
    
    .notification-close {
      background: none;
      border: none;
      color: #fff;
      font-size: 20px;
      cursor: pointer;
      opacity: 0.7;
    }
    
    .notification-close:hover {
      opacity: 1;
    }
    
    .nav-menu.active {
      display: flex !important;
      position: fixed;
      top: 80px;
      left: 0;
      right: 0;
      background: rgba(10, 22, 40, 0.98);
      flex-direction: column;
      padding: 30px;
      gap: 20px;
    }
    
    .mobile-toggle.active span:nth-child(1) {
      transform: rotate(45deg) translate(5px, 5px);
    }
    
    .mobile-toggle.active span:nth-child(2) {
      opacity: 0;
    }
    
    .mobile-toggle.active span:nth-child(3) {
      transform: rotate(-45deg) translate(5px, -5px);
    }
    
    .form-control.error {
      border-color: #f44336;
    }
    
    .property-favorite.active {
      background: var(--accent-gold, #d4a853);
      color: var(--primary-dark, #0a1628);
    }
  `;
  document.head.appendChild(style);
  
  window.addEventListener('scroll', () => {
    if (window.scrollY > 500) {
      backToTop.classList.add('visible');
    } else {
      backToTop.classList.remove('visible');
    }
  });
  
  backToTop.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
  
});
