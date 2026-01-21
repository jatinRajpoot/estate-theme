<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Get in touch with LuxuryEstates. We're here to help you find your dream property.">
    <title>Contact Us - LuxuryEstates</title>

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
                <a href="reviews.html" class="nav-link">Reviews</a>
                <a href="contact.html" class="nav-link active">Contact</a>
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
                <h1 class="page-title">Contact Us</h1>
                <div class="breadcrumb">
                    <a href="index.html">Home</a>
                    <span>/</span>
                    <span>Contact</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== Contact Info Cards ========== -->
    <section class="section">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px; margin-bottom: 80px;">
                <div class="card" style="text-align: center; padding: 40px 25px;">
                    <div
                        style="width: 70px; height: 70px; background: rgba(212, 168, 83, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                        <i class="fas fa-map-marker-alt" style="font-size: 28px; color: var(--accent-gold);"></i>
                    </div>
                    <h4 style="font-size: 18px; margin-bottom: 10px;">Our Location</h4>
                    <p style="color: var(--text-light); font-size: 14px;">123 Luxury Avenue<br>Beverly Hills, CA 90210
                    </p>
                </div>

                <div class="card" style="text-align: center; padding: 40px 25px;">
                    <div
                        style="width: 70px; height: 70px; background: rgba(212, 168, 83, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                        <i class="fas fa-phone-alt" style="font-size: 28px; color: var(--accent-gold);"></i>
                    </div>
                    <h4 style="font-size: 18px; margin-bottom: 10px;">Phone Number</h4>
                    <p style="color: var(--text-light); font-size: 14px;">+1 (555) 123-4567<br>+1 (555) 987-6543</p>
                </div>

                <div class="card" style="text-align: center; padding: 40px 25px;">
                    <div
                        style="width: 70px; height: 70px; background: rgba(212, 168, 83, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                        <i class="fas fa-envelope" style="font-size: 28px; color: var(--accent-gold);"></i>
                    </div>
                    <h4 style="font-size: 18px; margin-bottom: 10px;">Email Address</h4>
                    <p style="color: var(--text-light); font-size: 14px;">
                        info@luxuryestates.com<br>support@luxuryestates.com</p>
                </div>

                <div class="card" style="text-align: center; padding: 40px 25px;">
                    <div
                        style="width: 70px; height: 70px; background: rgba(212, 168, 83, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                        <i class="fas fa-clock" style="font-size: 28px; color: var(--accent-gold);"></i>
                    </div>
                    <h4 style="font-size: 18px; margin-bottom: 10px;">Working Hours</h4>
                    <p style="color: var(--text-light); font-size: 14px;">Mon - Fri: 9AM - 6PM<br>Sat: 10AM - 4PM</p>
                </div>
            </div>

            <!-- Contact Form & Map -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px;">
                <!-- Contact Form -->
                <div class="card">
                    <h3 style="font-size: 26px; margin-bottom: 10px;">Send Us a Message</h3>
                    <p style="color: var(--text-light); margin-bottom: 30px;">Fill out the form below and we'll get back
                        to you within 24 hours.</p>

                    <form class="contact-form">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                            <div class="form-group">
                                <label>First Name *</label>
                                <input type="text" class="form-control" placeholder="Enter your first name" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name *</label>
                                <input type="text" class="form-control" placeholder="Enter your last name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Email Address *</label>
                            <input type="email" class="form-control" placeholder="Enter your email" required>
                        </div>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Enter your phone number">
                        </div>

                        <div class="form-group">
                            <label>Subject *</label>
                            <select class="form-control" required>
                                <option value="">Select a subject</option>
                                <option>Buying a Property</option>
                                <option>Selling a Property</option>
                                <option>Renting a Property</option>
                                <option>Property Consultation</option>
                                <option>General Inquiry</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Your Message *</label>
                            <textarea class="form-control" placeholder="How can we help you?" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">
                            <i class="fas fa-paper-plane"></i>
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Map Placeholder -->
                <div>
                    <div class="card"
                        style="height: 300px; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, rgba(212, 168, 83, 0.1) 0%, rgba(10, 22, 40, 0.8) 100%); margin-bottom: 30px;">
                        <div style="text-align: center;">
                            <i class="fas fa-map-marked-alt"
                                style="font-size: 60px; color: var(--accent-gold); margin-bottom: 20px;"></i>
                            <h4 style="font-size: 20px; margin-bottom: 10px;">Visit Our Office</h4>
                            <p style="color: var(--text-light);">123 Luxury Avenue, Beverly Hills, CA 90210</p>
                        </div>
                    </div>

                    <!-- Quick Contact Info -->
                    <div class="card">
                        <h4 style="font-size: 20px; margin-bottom: 20px;">Quick Contact</h4>
                        <div style="display: flex; flex-direction: column; gap: 20px;">
                            <a href="tel:+15551234567"
                                style="display: flex; align-items: center; gap: 15px; color: var(--text-light);">
                                <div
                                    style="width: 50px; height: 50px; background: rgba(212, 168, 83, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-phone-alt" style="color: var(--accent-gold);"></i>
                                </div>
                                <div>
                                    <span style="display: block; font-size: 12px; color: var(--text-muted);">Call
                                        Us</span>
                                    <span style="font-weight: 500; color: var(--text-white);">+1 (555) 123-4567</span>
                                </div>
                            </a>

                            <a href="mailto:info@luxuryestates.com"
                                style="display: flex; align-items: center; gap: 15px; color: var(--text-light);">
                                <div
                                    style="width: 50px; height: 50px; background: rgba(212, 168, 83, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-envelope" style="color: var(--accent-gold);"></i>
                                </div>
                                <div>
                                    <span style="display: block; font-size: 12px; color: var(--text-muted);">Email
                                        Us</span>
                                    <span
                                        style="font-weight: 500; color: var(--text-white);">info@luxuryestates.com</span>
                                </div>
                            </a>

                            <a href="#"
                                style="display: flex; align-items: center; gap: 15px; color: var(--text-light);">
                                <div
                                    style="width: 50px; height: 50px; background: rgba(212, 168, 83, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fab fa-whatsapp" style="color: var(--accent-gold);"></i>
                                </div>
                                <div>
                                    <span
                                        style="display: block; font-size: 12px; color: var(--text-muted);">WhatsApp</span>
                                    <span style="font-weight: 500; color: var(--text-white);">+1 (555) 123-4567</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== FAQ Section ========== -->
    <section class="section" style="background: var(--primary-darker);">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">FAQs</span>
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-desc">
                    Find answers to common questions about buying, selling, or renting properties.
                </p>
            </div>

            <div style="max-width: 800px; margin: 0 auto;">
                <div class="faq-item active">
                    <button class="faq-question">
                        How do I schedule a property viewing?
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>You can schedule a viewing by calling us directly, filling out the contact form on our
                            website, or clicking the "Schedule Viewing" button on any property listing. Our team will
                            get back to you within 24 hours to confirm your appointment.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        What documents do I need to buy a property?
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Typically, you'll need valid identification, proof of income, bank statements, pre-approval
                            letter from your lender, and any relevant tax documents. Our agents will guide you through
                            the specific requirements based on your situation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        How long does the buying process take?
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>The average home buying process takes 30-45 days from accepted offer to closing. However,
                            this can vary based on financing, inspections, and other factors. Cash purchases can close
                            in as little as 7-14 days.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Do you offer property management services?
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Yes! We offer comprehensive property management services including tenant screening, rent
                            collection, maintenance coordination, and financial reporting. Contact us to learn more
                            about our management packages.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        What are your commission rates?
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Our commission rates are competitive and vary based on the type of transaction and property
                            value. We're transparent about our fees and will discuss all costs upfront during our
                            initial consultation.</p>
                    </div>
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