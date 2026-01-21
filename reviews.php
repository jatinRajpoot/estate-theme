<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Read testimonials and reviews from our satisfied clients at LuxuryEstates.">
    <title>Client Reviews - LuxuryEstates</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

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
                <a href="index.html" class="nav-link">Home</a>
                <a href="about.html" class="nav-link">About</a>
                <a href="services.html" class="nav-link">Services</a>
                <a href="property.html" class="nav-link">Properties</a>
                <a href="reviews.html" class="nav-link active">Reviews</a>
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

    <!-- ========== Page Hero ========== -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <h1 class="page-title">Client Reviews</h1>
                <div class="breadcrumb">
                    <a href="index.html">Home</a>
                    <span>/</span>
                    <span>Reviews</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== Review Stats ========== -->
    <section class="section">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; margin-bottom: 80px;">
                <div class="card" style="text-align: center; padding: 40px;">
                    <div
                        style="font-family: var(--font-heading); font-size: 56px; font-weight: 700; color: var(--accent-gold); margin-bottom: 10px;">
                        4.9</div>
                    <div style="display: flex; justify-content: center; gap: 5px; margin-bottom: 15px;">
                        <i class="fas fa-star" style="color: var(--accent-gold);"></i>
                        <i class="fas fa-star" style="color: var(--accent-gold);"></i>
                        <i class="fas fa-star" style="color: var(--accent-gold);"></i>
                        <i class="fas fa-star" style="color: var(--accent-gold);"></i>
                        <i class="fas fa-star" style="color: var(--accent-gold);"></i>
                    </div>
                    <p style="color: var(--text-light);">Average Rating</p>
                </div>

                <div class="card" style="text-align: center; padding: 40px;">
                    <div
                        style="font-family: var(--font-heading); font-size: 56px; font-weight: 700; color: var(--accent-gold); margin-bottom: 10px;">
                        2,500+</div>
                    <p style="color: var(--text-light); margin-top: 15px;">Happy Clients</p>
                </div>

                <div class="card" style="text-align: center; padding: 40px;">
                    <div
                        style="font-family: var(--font-heading); font-size: 56px; font-weight: 700; color: var(--accent-gold); margin-bottom: 10px;">
                        98%</div>
                    <p style="color: var(--text-light); margin-top: 15px;">Satisfaction Rate</p>
                </div>

                <div class="card" style="text-align: center; padding: 40px;">
                    <div
                        style="font-family: var(--font-heading); font-size: 56px; font-weight: 700; color: var(--accent-gold); margin-bottom: 10px;">
                        85%</div>
                    <p style="color: var(--text-light); margin-top: 15px;">Referral Rate</p>
                </div>
            </div>

            <!-- Featured Testimonial -->
            <div class="card"
                style="padding: 60px; text-align: center; background: linear-gradient(135deg, rgba(212, 168, 83, 0.1) 0%, rgba(10, 22, 40, 0.8) 100%); margin-bottom: 60px;">
                <i class="fas fa-quote-left"
                    style="font-size: 48px; color: var(--accent-gold); margin-bottom: 30px;"></i>
                <p
                    style="font-size: 24px; line-height: 1.8; max-width: 800px; margin: 0 auto 30px; font-style: italic;">
                    "LuxuryEstates didn't just help us find a house – they helped us find our forever home. Their team's
                    dedication, market knowledge, and genuine care for our needs made all the difference. We couldn't be
                    happier with our experience."
                </p>
                <div style="display: flex; align-items: center; justify-content: center; gap: 20px;">
                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=100&h=100&fit=crop"
                        alt="Jennifer & Mark Thompson"
                        style="width: 70px; height: 70px; border-radius: 50%; border: 3px solid var(--accent-gold);">
                    <div style="text-align: left;">
                        <h4 style="font-size: 18px; margin-bottom: 5px;">Jennifer & Mark Thompson</h4>
                        <p style="color: var(--accent-gold); font-size: 14px;">Beverly Hills Homeowners</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== All Reviews ========== -->
    <section class="section testimonials" style="padding-top: 0;">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Testimonials</span>
                <h2 class="section-title">What Our Clients Say</h2>
            </div>

            <div class="testimonials-grid" style="margin-bottom: 40px;">
                <!-- Review 1 -->
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                    </div>
                    <p class="testimonial-text">
                        "Working with LuxuryEstates was an absolute dream. They found us the perfect family home within
                        our budget. Their attention to detail and personalized service exceeded all our expectations."
                    </p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop"
                            alt="Sarah Johnson" class="author-image">
                        <div class="author-info">
                            <h4>Sarah Johnson</h4>
                            <span>Homeowner</span>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                    </div>
                    <p class="testimonial-text">
                        "The team's expertise in the luxury market is unmatched. They handled our $3M purchase with
                        professionalism and made what could have been a stressful process incredibly smooth."
                    </p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop"
                            alt="Michael Chen" class="author-image">
                        <div class="author-info">
                            <h4>Michael Chen</h4>
                            <span>Property Investor</span>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                    </div>
                    <p class="testimonial-text">
                        "From our first meeting to the final closing, the LuxuryEstates team was there every step of the
                        way. Their market knowledge helped us sell our home above asking price!"
                    </p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop"
                            alt="Emily Davis" class="author-image">
                        <div class="author-info">
                            <h4>Emily Davis</h4>
                            <span>Seller</span>
                        </div>
                    </div>
                </div>

                <!-- Review 4 -->
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                    </div>
                    <p class="testimonial-text">
                        "As first-time buyers, we were nervous about the process. The team at LuxuryEstates guided us
                        through every step, answered all our questions, and found us a beautiful condo in our price
                        range."
                    </p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop"
                            alt="David Miller" class="author-image">
                        <div class="author-info">
                            <h4>David Miller</h4>
                            <span>First-time Buyer</span>
                        </div>
                    </div>
                </div>

                <!-- Review 5 -->
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                    </div>
                    <p class="testimonial-text">
                        "Their property management service is exceptional. They take care of everything for my rental
                        properties, from tenant screening to maintenance. I can finally enjoy passive income
                        stress-free."
                    </p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=100&h=100&fit=crop"
                            alt="Rachel Kim" class="author-image">
                        <div class="author-info">
                            <h4>Rachel Kim</h4>
                            <span>Property Investor</span>
                        </div>
                    </div>
                </div>

                <!-- Review 6 -->
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star-half-alt star"></i>
                    </div>
                    <p class="testimonial-text">
                        "We relocated from another state and LuxuryEstates made the transition seamless. They understood
                        our needs, showed us properties virtually, and had everything ready when we arrived."
                    </p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop"
                            alt="Robert Williams" class="author-image">
                        <div class="author-info">
                            <h4>Robert Williams</h4>
                            <span>Relocating Family</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- More Reviews -->
            <div class="testimonials-grid">
                <!-- Review 7 -->
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                    </div>
                    <p class="testimonial-text">
                        "Outstanding service! James found us a beachfront property we didn't even know was on the
                        market. The exclusive access to off-market listings gave us a huge advantage."
                    </p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&h=100&fit=crop"
                            alt="Amanda Foster" class="author-image">
                        <div class="author-info">
                            <h4>Amanda Foster</h4>
                            <span>Beachfront Owner</span>
                        </div>
                    </div>
                </div>

                <!-- Review 8 -->
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                    </div>
                    <p class="testimonial-text">
                        "The investment consulting service helped me build a portfolio of rental properties that now
                        generates substantial monthly income. Their market analysis was spot-on."
                    </p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=100&h=100&fit=crop"
                            alt="Thomas Anderson" class="author-image">
                        <div class="author-info">
                            <h4>Thomas Anderson</h4>
                            <span>Real Estate Investor</span>
                        </div>
                    </div>
                </div>

                <!-- Review 9 -->
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                    </div>
                    <p class="testimonial-text">
                        "After a difficult experience with another agency, LuxuryEstates restored my faith in real
                        estate professionals. They're honest, transparent, and truly care about their clients."
                    </p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=100&h=100&fit=crop"
                            alt="Lisa Martinez" class="author-image">
                        <div class="author-info">
                            <h4>Lisa Martinez</h4>
                            <span>Homeowner</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== Video Testimonial Section ========== -->
    <section class="section" style="background: var(--primary-darker);">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Video Stories</span>
                <h2 class="section-title">Hear From Our Clients</h2>
            </div>

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
                <div class="card" style="padding: 0; overflow: hidden;">
                    <div
                        style="position: relative; height: 250px; background: linear-gradient(135deg, rgba(212, 168, 83, 0.2) 0%, rgba(10, 22, 40, 0.9) 100%); display: flex; align-items: center; justify-content: center;">
                        <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=400&h=250&fit=crop"
                            alt="Video Thumbnail"
                            style="position: absolute; width: 100%; height: 100%; object-fit: cover; opacity: 0.5;">
                        <button
                            style="width: 70px; height: 70px; background: var(--accent-gold); border: none; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 2; transition: var(--transition-fast);">
                            <i class="fas fa-play"
                                style="font-size: 24px; color: var(--primary-dark); margin-left: 5px;"></i>
                        </button>
                    </div>
                    <div style="padding: 25px;">
                        <h4 style="font-size: 18px; margin-bottom: 8px;">Finding Our Dream Home</h4>
                        <p style="color: var(--text-muted); font-size: 14px;">The Johnson Family</p>
                    </div>
                </div>

                <div class="card" style="padding: 0; overflow: hidden;">
                    <div
                        style="position: relative; height: 250px; background: linear-gradient(135deg, rgba(212, 168, 83, 0.2) 0%, rgba(10, 22, 40, 0.9) 100%); display: flex; align-items: center; justify-content: center;">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=400&h=250&fit=crop"
                            alt="Video Thumbnail"
                            style="position: absolute; width: 100%; height: 100%; object-fit: cover; opacity: 0.5;">
                        <button
                            style="width: 70px; height: 70px; background: var(--accent-gold); border: none; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 2; transition: var(--transition-fast);">
                            <i class="fas fa-play"
                                style="font-size: 24px; color: var(--primary-dark); margin-left: 5px;"></i>
                        </button>
                    </div>
                    <div style="padding: 25px;">
                        <h4 style="font-size: 18px; margin-bottom: 8px;">Selling Above Asking Price</h4>
                        <p style="color: var(--text-muted); font-size: 14px;">Michael Chen</p>
                    </div>
                </div>

                <div class="card" style="padding: 0; overflow: hidden;">
                    <div
                        style="position: relative; height: 250px; background: linear-gradient(135deg, rgba(212, 168, 83, 0.2) 0%, rgba(10, 22, 40, 0.9) 100%); display: flex; align-items: center; justify-content: center;">
                        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=400&h=250&fit=crop"
                            alt="Video Thumbnail"
                            style="position: absolute; width: 100%; height: 100%; object-fit: cover; opacity: 0.5;">
                        <button
                            style="width: 70px; height: 70px; background: var(--accent-gold); border: none; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 2; transition: var(--transition-fast);">
                            <i class="fas fa-play"
                                style="font-size: 24px; color: var(--primary-dark); margin-left: 5px;"></i>
                        </button>
                    </div>
                    <div style="padding: 25px;">
                        <h4 style="font-size: 18px; margin-bottom: 8px;">Investment Success Story</h4>
                        <p style="color: var(--text-muted); font-size: 14px;">Rachel Kim</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== Leave Review CTA ========== -->
    <section class="section newsletter">
        <div class="container">
            <div class="newsletter-content" style="flex-direction: column; text-align: center; gap: 30px;">
                <div class="newsletter-text" style="max-width: 600px;">
                    <h3>Share Your Experience</h3>
                    <p>Are you a LuxuryEstates client? We'd love to hear about your experience working with us.</p>
                </div>
                <div style="display: flex; gap: 20px;">
                    <a href="contact.html" class="btn btn-primary">Leave a Review</a>
                    <a href="contact.html" class="btn btn-outline">Contact Us</a>
                </div>
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
                    <p>Your trusted partner in finding the perfect property. We specialize in luxury real estate with
                        over 15 years of excellence.</p>
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
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2026 LuxuryEstates. All rights reserved.</p>
                <div class="footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/main.js"></script>
</body>

</html>