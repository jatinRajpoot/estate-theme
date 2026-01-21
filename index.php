<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="LuxuryEstates - Find your dream property with our premium real estate services. Luxury homes, apartments, and commercial properties.">
  <title>LuxuryEstates - Premium Real Estate</title>
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <!-- ========== Header ========== -->
  <header class="header">
    <div class="container">
      <a href="index.html" class="logo">
        <div class="logo-icon">🏠</div>
        <div class="logo-text">Luxury<span>Estates</span></div>
      </a>
      
      <nav class="nav-menu">
        <a href="index.html" class="nav-link active">Home</a>
        <a href="about.html" class="nav-link">About</a>
        <a href="services.html" class="nav-link">Services</a>
        <a href="property.html" class="nav-link">Properties</a>
        <a href="reviews.html" class="nav-link">Reviews</a>
        <a href="contact.html" class="nav-link">Contact</a>
      </nav>
      
      <div class="nav-actions">
        <a href="contact.html" class="btn btn-primary">Get Started</a>
        <button class="mobile-toggle">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>
  
  <!-- ========== Hero Section ========== -->
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <div class="hero-badge">
          <i class="fas fa-star"></i>
          <span>#1 Trusted Real Estate Agency</span>
        </div>
        
        <h1 class="hero-title">
          Find Your <span>Dream Home</span> With Us
        </h1>
        
        <p class="hero-desc">
          Discover the perfect property that matches your lifestyle. From luxury penthouses to cozy family homes, we help you find your ideal living space.
        </p>
        
        <div class="hero-buttons">
          <a href="property.html" class="btn btn-primary">
            <i class="fas fa-search"></i>
            Explore Properties
          </a>
          <a href="about.html" class="btn btn-outline">
            <i class="fas fa-play"></i>
            Learn More
          </a>
        </div>
        
        <!-- Search Box -->
        <div class="hero-search">
          <div class="search-tabs">
            <button class="search-tab active">Buy</button>
            <button class="search-tab">Rent</button>
            <button class="search-tab">Sell</button>
          </div>
          
          <form class="search-form">
            <div class="search-field">
              <label>Location</label>
              <input type="text" placeholder="Enter city or area">
            </div>
            
            <div class="search-field">
              <label>Property Type</label>
              <select>
                <option>All Types</option>
                <option>House</option>
                <option>Apartment</option>
                <option>Villa</option>
                <option>Condo</option>
              </select>
            </div>
            
            <div class="search-field">
              <label>Price Range</label>
              <select>
                <option>Any Price</option>
                <option>$100K - $300K</option>
                <option>$300K - $500K</option>
                <option>$500K - $1M</option>
                <option>$1M+</option>
              </select>
            </div>
            
            <button type="submit" class="search-btn">
              <i class="fas fa-search"></i>
              Search
            </button>
          </form>
        </div>
      </div>
    </div>
    
    <div class="hero-decoration"></div>
    
    <div class="hero-stats">
      <div class="stat-item">
        <div class="stat-number">15K+</div>
        <div class="stat-label">Properties</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">8K+</div>
        <div class="stat-label">Happy Clients</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">200+</div>
        <div class="stat-label">Expert Agents</div>
      </div>
    </div>
  </section>
  
  <!-- ========== Featured Properties ========== -->
  <section class="section properties">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Featured Listings</span>
        <h2 class="section-title">Discover Our Best Properties</h2>
        <p class="section-desc">
          Explore our handpicked selection of premium properties that offer the best in luxury living.
        </p>
      </div>
      
      <div class="properties-grid">
        <!-- Property 1 -->
        <div class="property-card">
          <div class="property-image">
            <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=600&h=400&fit=crop" alt="Luxury Villa">
            <span class="property-badge">Featured</span>
            <button class="property-favorite"><i class="far fa-heart"></i></button>
          </div>
          <div class="property-content">
            <div class="property-price">$1,250,000</div>
            <h3 class="property-title">Modern Luxury Villa</h3>
            <p class="property-location">
              <i class="fas fa-map-marker-alt"></i>
              Beverly Hills, California
            </p>
            <div class="property-features">
              <span class="feature"><i class="fas fa-bed feature-icon"></i> 5 Beds</span>
              <span class="feature"><i class="fas fa-bath feature-icon"></i> 4 Baths</span>
              <span class="feature"><i class="fas fa-ruler-combined feature-icon"></i> 4,500 sqft</span>
            </div>
          </div>
        </div>
        
        <!-- Property 2 -->
        <div class="property-card">
          <div class="property-image">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&h=400&fit=crop" alt="Waterfront Estate">
            <span class="property-badge">New</span>
            <button class="property-favorite"><i class="far fa-heart"></i></button>
          </div>
          <div class="property-content">
            <div class="property-price">$2,800,000</div>
            <h3 class="property-title">Waterfront Estate</h3>
            <p class="property-location">
              <i class="fas fa-map-marker-alt"></i>
              Miami Beach, Florida
            </p>
            <div class="property-features">
              <span class="feature"><i class="fas fa-bed feature-icon"></i> 6 Beds</span>
              <span class="feature"><i class="fas fa-bath feature-icon"></i> 5 Baths</span>
              <span class="feature"><i class="fas fa-ruler-combined feature-icon"></i> 6,200 sqft</span>
            </div>
          </div>
        </div>
        
        <!-- Property 3 -->
        <div class="property-card">
          <div class="property-image">
            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=600&h=400&fit=crop" alt="Skyline Penthouse">
            <span class="property-badge">Premium</span>
            <button class="property-favorite"><i class="far fa-heart"></i></button>
          </div>
          <div class="property-content">
            <div class="property-price">$3,500,000</div>
            <h3 class="property-title">Skyline Penthouse</h3>
            <p class="property-location">
              <i class="fas fa-map-marker-alt"></i>
              Manhattan, New York
            </p>
            <div class="property-features">
              <span class="feature"><i class="fas fa-bed feature-icon"></i> 4 Beds</span>
              <span class="feature"><i class="fas fa-bath feature-icon"></i> 3 Baths</span>
              <span class="feature"><i class="fas fa-ruler-combined feature-icon"></i> 3,800 sqft</span>
            </div>
          </div>
        </div>
        
        <!-- Property 4 -->
        <div class="property-card">
          <div class="property-image">
            <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=600&h=400&fit=crop" alt="Contemporary Home">
            <span class="property-badge">Hot</span>
            <button class="property-favorite"><i class="far fa-heart"></i></button>
          </div>
          <div class="property-content">
            <div class="property-price">$890,000</div>
            <h3 class="property-title">Contemporary Family Home</h3>
            <p class="property-location">
              <i class="fas fa-map-marker-alt"></i>
              Austin, Texas
            </p>
            <div class="property-features">
              <span class="feature"><i class="fas fa-bed feature-icon"></i> 4 Beds</span>
              <span class="feature"><i class="fas fa-bath feature-icon"></i> 3 Baths</span>
              <span class="feature"><i class="fas fa-ruler-combined feature-icon"></i> 3,200 sqft</span>
            </div>
          </div>
        </div>
        
        <!-- Property 5 -->
        <div class="property-card">
          <div class="property-image">
            <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=600&h=400&fit=crop" alt="Mediterranean Villa">
            <span class="property-badge">Exclusive</span>
            <button class="property-favorite"><i class="far fa-heart"></i></button>
          </div>
          <div class="property-content">
            <div class="property-price">$1,950,000</div>
            <h3 class="property-title">Mediterranean Villa</h3>
            <p class="property-location">
              <i class="fas fa-map-marker-alt"></i>
              San Diego, California
            </p>
            <div class="property-features">
              <span class="feature"><i class="fas fa-bed feature-icon"></i> 5 Beds</span>
              <span class="feature"><i class="fas fa-bath feature-icon"></i> 4 Baths</span>
              <span class="feature"><i class="fas fa-ruler-combined feature-icon"></i> 5,100 sqft</span>
            </div>
          </div>
        </div>
        
        <!-- Property 6 -->
        <div class="property-card">
          <div class="property-image">
            <img src="https://images.unsplash.com/photo-1600573472592-401b489a3cdc?w=600&h=400&fit=crop" alt="Urban Loft">
            <span class="property-badge">Popular</span>
            <button class="property-favorite"><i class="far fa-heart"></i></button>
          </div>
          <div class="property-content">
            <div class="property-price">$675,000</div>
            <h3 class="property-title">Urban Designer Loft</h3>
            <p class="property-location">
              <i class="fas fa-map-marker-alt"></i>
              Seattle, Washington
            </p>
            <div class="property-features">
              <span class="feature"><i class="fas fa-bed feature-icon"></i> 2 Beds</span>
              <span class="feature"><i class="fas fa-bath feature-icon"></i> 2 Baths</span>
              <span class="feature"><i class="fas fa-ruler-combined feature-icon"></i> 1,800 sqft</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- ========== Why Choose Us ========== -->
  <section class="section why-us">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Why Choose Us</span>
        <h2 class="section-title">Your Trusted Real Estate Partner</h2>
        <p class="section-desc">
          We provide exceptional service and expertise to help you make the best property decisions.
        </p>
      </div>
      
      <div class="why-us-grid">
        <div class="why-card">
          <div class="why-icon">
            <i class="fas fa-home"></i>
          </div>
          <h3 class="why-title">Wide Selection</h3>
          <p class="why-desc">Access to thousands of premium listings across prime locations.</p>
        </div>
        
        <div class="why-card">
          <div class="why-icon">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 class="why-title">Trusted Service</h3>
          <p class="why-desc">Over 15 years of excellence with verified and secure transactions.</p>
        </div>
        
        <div class="why-card">
          <div class="why-icon">
            <i class="fas fa-dollar-sign"></i>
          </div>
          <h3 class="why-title">Best Prices</h3>
          <p class="why-desc">Competitive pricing and expert negotiation for best deals.</p>
        </div>
        
        <div class="why-card">
          <div class="why-icon">
            <i class="fas fa-headset"></i>
          </div>
          <h3 class="why-title">24/7 Support</h3>
          <p class="why-desc">Round-the-clock assistance from our dedicated team.</p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- ========== Statistics ========== -->
  <section class="section stats-section">
    <div class="container">
      <div class="stats-grid">
        <div class="stats-item">
          <div class="stats-number" data-count="15000" data-suffix="+">0</div>
          <div class="stats-label">Properties Sold</div>
        </div>
        <div class="stats-item">
          <div class="stats-number" data-count="8500" data-suffix="+">0</div>
          <div class="stats-label">Happy Clients</div>
        </div>
        <div class="stats-item">
          <div class="stats-number" data-count="200" data-suffix="+">0</div>
          <div class="stats-label">Expert Agents</div>
        </div>
        <div class="stats-item">
          <div class="stats-number" data-count="50" data-suffix="+">0</div>
          <div class="stats-label">Cities Covered</div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- ========== Testimonials ========== -->
  <section class="section testimonials">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Testimonials</span>
        <h2 class="section-title">What Our Clients Say</h2>
        <p class="section-desc">
          Real stories from satisfied homeowners who found their perfect property with us.
        </p>
      </div>
      
      <div class="testimonials-grid">
        <div class="testimonial-card">
          <div class="testimonial-rating">
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
          </div>
          <p class="testimonial-text">
            "Working with LuxuryEstates was an absolute dream. They found us the perfect family home within our budget. Their attention to detail and personalized service exceeded all our expectations."
          </p>
          <div class="testimonial-author">
            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop" alt="Sarah Johnson" class="author-image">
            <div class="author-info">
              <h4>Sarah Johnson</h4>
              <span>Homeowner</span>
            </div>
          </div>
        </div>
        
        <div class="testimonial-card">
          <div class="testimonial-rating">
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
          </div>
          <p class="testimonial-text">
            "The team's expertise in the luxury market is unmatched. They handled our $3M purchase with professionalism and made what could have been a stressful process incredibly smooth."
          </p>
          <div class="testimonial-author">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop" alt="Michael Chen" class="author-image">
            <div class="author-info">
              <h4>Michael Chen</h4>
              <span>Property Investor</span>
            </div>
          </div>
        </div>
        
        <div class="testimonial-card">
          <div class="testimonial-rating">
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
          </div>
          <p class="testimonial-text">
            "From our first meeting to the final closing, the LuxuryEstates team was there every step of the way. Their market knowledge helped us sell our home above asking price!"
          </p>
          <div class="testimonial-author">
            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop" alt="Emily Davis" class="author-image">
            <div class="author-info">
              <h4>Emily Davis</h4>
              <span>Seller</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- ========== Newsletter ========== -->
  <section class="section newsletter">
    <div class="container">
      <div class="newsletter-content">
        <div class="newsletter-text">
          <h3>Stay Updated</h3>
          <p>Subscribe to our newsletter for the latest property listings and market insights.</p>
        </div>
        <form class="newsletter-form">
          <input type="email" placeholder="Enter your email address" required>
          <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
      </div>
    </div>
  </section>
  
  <!-- ========== Footer ========== -->
  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <a href="index.html" class="logo">
            <div class="logo-icon">🏠</div>
            <div class="logo-text">Luxury<span>Estates</span></div>
          </a>
          <p>Your trusted partner in finding the perfect property. We specialize in luxury real estate with over 15 years of excellence.</p>
          <div class="footer-social">
            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        
        <div class="footer-links-col">
          <h4 class="footer-title">Quick Links</h4>
          <ul class="footer-links">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="property.html">Properties</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
        
        <div class="footer-links-col">
          <h4 class="footer-title">Services</h4>
          <ul class="footer-links">
            <li><a href="services.html">Buy Property</a></li>
            <li><a href="services.html">Sell Property</a></li>
            <li><a href="services.html">Rent Property</a></li>
            <li><a href="services.html">Property Management</a></li>
            <li><a href="services.html">Consulting</a></li>
          </ul>
        </div>
        
        <div class="footer-contact-col">
          <h4 class="footer-title">Contact Us</h4>
          <ul class="footer-contact">
            <li>
              <i class="fas fa-map-marker-alt"></i>
              <span>123 Luxury Avenue, Beverly Hills, CA 90210</span>
            </li>
            <li>
              <i class="fas fa-phone-alt"></i>
              <span>+1 (555) 123-4567</span>
            </li>
            <li>
              <i class="fas fa-envelope"></i>
              <span>info@luxuryestates.com</span>
            </li>
            <li>
              <i class="fas fa-clock"></i>
              <span>Mon - Sat: 9:00 AM - 6:00 PM</span>
            </li>
          </ul>
        </div>
      </div>
      
      <div class="footer-bottom">
        <p>&copy; 2026 LuxuryEstates. All rights reserved.</p>
        <div class="footer-bottom-links">
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Service</a>
          <a href="#">Cookie Policy</a>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- JavaScript -->
  <script src="js/main.js"></script>
</body>
</html>
