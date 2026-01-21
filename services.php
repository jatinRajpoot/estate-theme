<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="LuxuryEstates offers comprehensive real estate services including buying, selling, renting, and property management.">
    <title>Our Services - LuxuryEstates</title>

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
                <a href="services.html" class="nav-link active">Services</a>
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

    <!-- ========== Page Hero ========== -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <h1 class="page-title">Our Services</h1>
                <div class="breadcrumb">
                    <a href="index.html">Home</a>
                    <span>/</span>
                    <span>Services</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== Services Overview ========== -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">What We Offer</span>
                <h2 class="section-title">Comprehensive Real Estate Solutions</h2>
                <p class="section-desc">
                    From finding your dream home to managing your investment properties, we provide end-to-end real
                    estate services tailored to your needs.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px;">
                <!-- Buy Service -->
                <div class="card service-card">
                    <div class="service-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3 class="service-title">Buy Property</h3>
                    <p class="service-desc">Find your perfect home from our extensive portfolio of premium properties.
                    </p>
                    <a href="contact.html" class="btn btn-outline" style="padding: 12px 25px; font-size: 14px;">Learn
                        More</a>
                </div>

                <!-- Sell Service -->
                <div class="card service-card">
                    <div class="service-icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3 class="service-title">Sell Property</h3>
                    <p class="service-desc">Get the best value for your property with our expert marketing strategies.
                    </p>
                    <a href="contact.html" class="btn btn-outline" style="padding: 12px 25px; font-size: 14px;">Learn
                        More</a>
                </div>

                <!-- Rent Service -->
                <div class="card service-card">
                    <div class="service-icon">
                        <i class="fas fa-key"></i>
                    </div>
                    <h3 class="service-title">Rent Property</h3>
                    <p class="service-desc">Discover quality rental properties that fit your lifestyle and budget.</p>
                    <a href="contact.html" class="btn btn-outline" style="padding: 12px 25px; font-size: 14px;">Learn
                        More</a>
                </div>

                <!-- Consulting -->
                <div class="card service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="service-title">Investment Consulting</h3>
                    <p class="service-desc">Expert advice to maximize your real estate investment returns.</p>
                    <a href="contact.html" class="btn btn-outline" style="padding: 12px 25px; font-size: 14px;">Learn
                        More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== Detailed Services ========== -->
    <section class="section" style="background: var(--primary-darker);">
        <div class="container">
            <!-- Buy Property -->
            <div
                style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; margin-bottom: 100px;">
                <div>
                    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&h=450&fit=crop"
                        alt="Buy Property" style="border-radius: 20px; width: 100%;">
                </div>
                <div>
                    <span class="section-subtitle">For Buyers</span>
                    <h2 class="section-title" style="text-align: left; font-size: 36px;">Find Your Dream Home</h2>
                    <p style="color: var(--text-light); margin-bottom: 25px;">
                        Our buying service is designed to make your home search effortless and enjoyable. We understand
                        that buying a property is one of life's biggest decisions, and we're here to guide you every
                        step of the way.
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                        <li
                            style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px; color: var(--text-light);">
                            <i class="fas fa-check-circle" style="color: var(--accent-gold);"></i>
                            Personalized property matching based on your preferences
                        </li>
                        <li
                            style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px; color: var(--text-light);">
                            <i class="fas fa-check-circle" style="color: var(--accent-gold);"></i>
                            Access to exclusive off-market listings
                        </li>
                        <li
                            style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px; color: var(--text-light);">
                            <i class="fas fa-check-circle" style="color: var(--accent-gold);"></i>
                            Expert negotiation to get you the best price
                        </li>
                        <li style="display: flex; align-items: center; gap: 15px; color: var(--text-light);">
                            <i class="fas fa-check-circle" style="color: var(--accent-gold);"></i>
                            Full support through closing and beyond
                        </li>
                    </ul>
                    <a href="property.html" class="btn btn-primary">Browse Properties</a>
                </div>
            </div>

            <!-- Sell Property -->
            <div
                style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; margin-bottom: 100px;">
                <div style="order: 2;">
                    <img src="https://images.unsplash.com/photo-1560185127-6ed189bf02f4?w=600&h=450&fit=crop"
                        alt="Sell Property" style="border-radius: 20px; width: 100%;">
                </div>
                <div style="order: 1;">
                    <span class="section-subtitle">For Sellers</span>
                    <h2 class="section-title" style="text-align: left; font-size: 36px;">Maximize Your Property Value
                    </h2>
                    <p style="color: var(--text-light); margin-bottom: 25px;">
                        Selling your property requires strategy, expertise, and the right connections. Our comprehensive
                        selling service ensures you get the maximum value in the shortest time possible.
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                        <li
                            style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px; color: var(--text-light);">
                            <i class="fas fa-check-circle" style="color: var(--accent-gold);"></i>
                            Free professional property valuation
                        </li>
                        <li
                            style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px; color: var(--text-light);">
                            <i class="fas fa-check-circle" style="color: var(--accent-gold);"></i>
                            Professional photography and virtual tours
                        </li>
                        <li
                            style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px; color: var(--text-light);">
                            <i class="fas fa-check-circle" style="color: var(--accent-gold);"></i>
                            Global marketing across premium platforms
                        </li>
                        <li style="display: flex; align-items: center; gap: 15px; color: var(--text-light);">
                            <i class="fas fa-check-circle" style="color: var(--accent-gold);"></i>
                            Qualified buyer screening and negotiations
                        </li>
                    </ul>
                    <a href="contact.html" class="btn btn-primary">Get Free Valuation</a>
                </div>
            </div>

            <!-- Property Management -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
                <div>
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=600&h=450&fit=crop"
                        alt="Property Management" style="border-radius: 20px; width: 100%;">
                </div>
                <div>
                    <span class="section-subtitle">For Investors</span>
                    <h2 class="section-title" style="text-align: left; font-size: 36px;">Professional Property
                        Management</h2>
                    <p style="color: var(--text-light); margin-bottom: 25px;">
                        Let us handle the day-to-day operations of your investment property while you enjoy the returns.
                        Our property management service takes care of everything.
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                        <li
                            style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px; color: var(--text-light);">
                            <i class="fas fa-check-circle" style="color: var(--accent-gold);"></i>
                            Thorough tenant screening and placement
                        </li>
                        <li
                            style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px; color: var(--text-light);">
                            <i class="fas fa-check-circle" style="color: var(--accent-gold);"></i>
                            Rent collection and financial reporting
                        </li>
                        <li
                            style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px; color: var(--text-light);">
                            <i class="fas fa-check-circle" style="color: var(--accent-gold);"></i>
                            24/7 maintenance coordination
                        </li>
                        <li style="display: flex; align-items: center; gap: 15px; color: var(--text-light);">
                            <i class="fas fa-check-circle" style="color: var(--accent-gold);"></i>
                            Regular property inspections
                        </li>
                    </ul>
                    <a href="contact.html" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== Our Process ========== -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">How It Works</span>
                <h2 class="section-title">Our Simple Process</h2>
                <p class="section-desc">
                    We've streamlined the real estate process to make it easy and stress-free.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; position: relative;">
                <!-- Connecting Line -->
                <div
                    style="position: absolute; top: 60px; left: 12.5%; right: 12.5%; height: 2px; background: linear-gradient(90deg, transparent, var(--accent-gold), transparent); z-index: 0;">
                </div>

                <div style="text-align: center; position: relative; z-index: 1;">
                    <div
                        style="width: 120px; height: 120px; background: var(--card-bg); border: 2px solid var(--accent-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; font-size: 36px; color: var(--accent-gold);">
                        01
                    </div>
                    <h4 style="font-size: 20px; margin-bottom: 10px;">Consultation</h4>
                    <p style="color: var(--text-light); font-size: 14px;">Tell us about your needs and preferences in a
                        free consultation.</p>
                </div>

                <div style="text-align: center; position: relative; z-index: 1;">
                    <div
                        style="width: 120px; height: 120px; background: var(--card-bg); border: 2px solid var(--accent-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; font-size: 36px; color: var(--accent-gold);">
                        02
                    </div>
                    <h4 style="font-size: 20px; margin-bottom: 10px;">Property Search</h4>
                    <p style="color: var(--text-light); font-size: 14px;">We curate properties that match your criteria
                        perfectly.</p>
                </div>

                <div style="text-align: center; position: relative; z-index: 1;">
                    <div
                        style="width: 120px; height: 120px; background: var(--card-bg); border: 2px solid var(--accent-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; font-size: 36px; color: var(--accent-gold);">
                        03
                    </div>
                    <h4 style="font-size: 20px; margin-bottom: 10px;">Viewings & Offers</h4>
                    <p style="color: var(--text-light); font-size: 14px;">Visit properties and make informed offers with
                        our guidance.</p>
                </div>

                <div style="text-align: center; position: relative; z-index: 1;">
                    <div
                        style="width: 120px; height: 120px; background: var(--card-bg); border: 2px solid var(--accent-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; font-size: 36px; color: var(--accent-gold);">
                        04
                    </div>
                    <h4 style="font-size: 20px; margin-bottom: 10px;">Close & Move In</h4>
                    <p style="color: var(--text-light); font-size: 14px;">We handle the paperwork so you can move into
                        your new home.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== CTA Section ========== -->
    <section class="section newsletter">
        <div class="container">
            <div class="newsletter-content" style="flex-direction: column; text-align: center; gap: 30px;">
                <div class="newsletter-text" style="max-width: 600px;">
                    <h3>Ready to Get Started?</h3>
                    <p>Contact us today for a free consultation and let us help you achieve your real estate goals.</p>
                </div>
                <div style="display: flex; gap: 20px;">
                    <a href="contact.html" class="btn btn-primary">Contact Us</a>
                    <a href="tel:+15551234567" class="btn btn-outline">
                        <i class="fas fa-phone-alt"></i>
                        Call Now
                    </a>
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