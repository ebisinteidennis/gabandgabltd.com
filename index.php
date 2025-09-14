<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAB & GAB Integrated Concept Ltd - Leading Engineering Excellence in Nigeria</title>
    <meta name="description" content="GAB & GAB Integrated Concept Ltd - Premier engineering, construction, and technical services company in Nigeria. Solar power, electrical systems, construction, and project management since 2005.">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #ffffff;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #8B4513 0%, #D2691E 100%);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
            transition: all 0.3s ease;
        }

        .header-scrolled {
            box-shadow: 0 4px 25px rgba(0,0,0,0.2);
            backdrop-filter: blur(10px);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-symbol {
            position: relative;
            width: 50px;
            height: 50px;
            background: white;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-triangle {
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-bottom: 25px solid #FF8C00;
            position: relative;
        }

        .logo-dot {
            position: absolute;
            top: 15px;
            left: 50%;
            transform: translateX(-50%);
            width: 8px;
            height: 8px;
            background: #333;
            border-radius: 50%;
        }

        .logo-text {
            display: flex;
            flex-direction: column;
        }

        .logo-main {
            font-size: 1.8rem;
            font-weight: 800;
            color: #8B4513;
            background: white;
            padding: 2px 8px;
            border-radius: 4px;
            margin-bottom: 2px;
        }

        .logo-sub {
            font-size: 0.7rem;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .mobile-toggle {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.6rem;
            cursor: pointer;
            padding: 8px;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 2rem;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            transition: all 0.3s;
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
            padding: 8px 16px;
            border-radius: 5px;
        }

        nav ul li a:hover,
        nav ul li a.active {
            color: #FFD700;
            background: rgba(255, 215, 0, 0.1);
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: #FFD700;
            transition: all 0.3s;
            transform: translateX(-50%);
        }

        nav ul li a:hover::after,
        nav ul li a.active::after {
            width: 80%;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
            padding-top: 100px;
            background: white;
        }

        .hero-bg-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(139,69,19,0.9), rgba(210,105,30,0.8));
            z-index: 1;
        }

        .hero-bg-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 950px;
            margin: 0 auto;
            padding: 2rem 0;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: 900;
            margin-bottom: 1.5rem;
            text-shadow: 3px 3px 10px rgba(0,0,0,0.7);
            line-height: 1.1;
            letter-spacing: -1px;
        }

        .hero .subtitle {
            font-size: 1.8rem;
            color: #FFD700;
            margin-bottom: 1.5rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
        }

        .hero p {
            font-size: 1.4rem;
            margin-bottom: 3rem;
            opacity: 0.95;
            line-height: 1.8;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.6);
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-buttons {
            display: flex;
            gap: 25px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 3rem;
        }

        .cta-button {
            display: inline-block;
            padding: 18px 35px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 700;
            transition: all 0.4s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 1rem;
        }

        .cta-button.primary {
            background: linear-gradient(135deg, #FF8C00, #FFD700);
            color: #2c3e50;
            box-shadow: 0 6px 20px rgba(255, 140, 0, 0.4);
        }

        .cta-button.secondary {
            background: transparent;
            color: #FFD700;
            border: 3px solid #FFD700;
            box-shadow: 0 6px 20px rgba(255, 215, 0, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        }

        .cta-button.secondary:hover {
            background: #FFD700;
            color: #2c3e50;
        }

        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 1.5rem;
            animation: bounce 2s infinite;
            z-index: 2;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateX(-50%) translateY(0);
            }
            40% {
                transform: translateX(-50%) translateY(-10px);
            }
            60% {
                transform: translateX(-50%) translateY(-5px);
            }
        }

        /* Sections */
        .section {
            padding: 100px 0;
            background: white;
            position: relative;
        }

        .section:nth-child(even) {
            background: #f8f9fa;
        }

        .section-bg-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.05;
            z-index: 0;
        }

        .section-content {
            position: relative;
            z-index: 1;
        }

        .section-title {
            text-align: center;
            font-size: 2.8rem;
            margin-bottom: 4rem;
            color: #8B4513;
            font-weight: 800;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, #FF8C00, #FFD700);
            margin: 25px auto;
            border-radius: 2px;
        }

        /* Company Overview */
        .overview-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .overview-text h3 {
            color: #8B4513;
            margin-bottom: 20px;
            font-size: 1.8rem;
            font-weight: 700;
        }

        .overview-text p {
            margin-bottom: 20px;
            color: #5a6c7d;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .overview-images {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        .overview-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .stat-card {
            background: linear-gradient(135deg, #FF8C00, #FFD700);
            color: white;
            padding: 35px 25px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(255, 140, 0, 0.3);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(255, 140, 0, 0.4);
        }

        .stat-card h3 {
            font-size: 2.8rem;
            margin-bottom: 10px;
            font-weight: 900;
        }

        .stat-card p {
            font-size: 0.95rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Services */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: white;
            padding: 40px 35px;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            transition: all 0.3s;
            border-top: 5px solid #FF8C00;
            position: relative;
            overflow: hidden;
        }

        .service-bg-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.03;
            z-index: 0;
        }

        .service-content {
            position: relative;
            z-index: 1;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, transparent, #FFD700, transparent);
            transition: left 0.5s;
        }

        .service-card:hover::before {
            left: 100%;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(255, 140, 0, 0.2);
        }

        .service-icon {
            font-size: 3.5rem;
            color: #FF8C00;
            margin-bottom: 20px;
            display: block;
        }

        .service-card h3 {
            color: #8B4513;
            margin-bottom: 15px;
            font-size: 1.4rem;
            font-weight: 700;
        }

        .service-card p {
            color: #5a6c7d;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .service-card ul {
            list-style: none;
        }

        .service-card li {
            padding: 5px 0;
            color: #5a6c7d;
            position: relative;
            padding-left: 20px;
        }

        .service-card li::before {
            content: '▶';
            color: #FF8C00;
            position: absolute;
            left: 0;
            font-size: 0.8rem;
        }

        /* Projects */
        .projects {
            background: #8B4513;
            color: white;
        }

        .projects .section-title {
            color: white;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .project-card {
            background: #34495e;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s;
            position: relative;
            height: 500px;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.3);
        }

        .project-image-container {
            position: relative;
            height: 200px;
            overflow: hidden;
        }

        .project-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .project-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(0, 0, 0, 0.6), rgba(139, 69, 19, 0.8));
        }

        .project-thumbnails {
            position: absolute;
            bottom: 10px;
            right: 10px;
            display: flex;
            gap: 5px;
        }

        .project-thumb {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 4px;
            border: 2px solid white;
            opacity: 0.8;
        }

        .project-content {
            padding: 25px;
            background: #2c3e50;
            height: 300px;
            overflow-y: auto;
        }

        .project-content h3 {
            color: #FFD700;
            margin-bottom: 10px;
            font-size: 1.3rem;
            font-weight: 700;
        }

        .project-content .client {
            color: #ecf0f1;
            margin-bottom: 5px;
            font-size: 0.9rem;
        }

        .project-content .location {
            color: #bdc3c7;
            margin-bottom: 15px;
            font-size: 0.9rem;
        }

        .project-content p {
            color: #ecf0f1;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .project-content strong {
            color: #FFD700;
            font-weight: 600;
        }

        /* Team */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .team-card {
            background: white;
            padding: 35px 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: all 0.3s;
            border-top: 4px solid #FF8C00;
            position: relative;
            overflow: hidden;
        }

        .team-bg-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.02;
            z-index: 0;
        }

        .team-content {
            position: relative;
            z-index: 1;
        }

        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(255, 140, 0, 0.15);
        }

        .team-card h4 {
            color: #8B4513;
            margin-bottom: 10px;
            font-size: 1.2rem;
            font-weight: 700;
        }

        .team-card .position {
            color: #FF8C00;
            font-weight: 600;
            margin-bottom: 10px;
            text-transform: uppercase;
            font-size: 0.9rem;
        }

        .team-card .qualifications {
            color: #5a6c7d;
            font-size: 0.95rem;
        }

        /* Why Choose Us */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .feature-card {
            text-align: center;
            padding: 40px 25px;
            background: white;
            border-radius: 15px;
            transition: all 0.3s;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            border-left: 4px solid #FF8C00;
            position: relative;
            overflow: hidden;
        }

        .feature-bg-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.03;
            z-index: 0;
        }

        .feature-content {
            position: relative;
            z-index: 1;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(255, 140, 0, 0.15);
        }

        .feature-icon {
            font-size: 3.5rem;
            color: #FF8C00;
            margin-bottom: 20px;
            display: block;
        }

        .feature-card h3 {
            color: #8B4513;
            margin-bottom: 15px;
            font-size: 1.3rem;
            font-weight: 700;
        }

        .feature-card p {
            color: #5a6c7d;
            line-height: 1.6;
        }

        /* Contact */
        .contact {
            background: linear-gradient(135deg, #8B4513, #D2691E);
            color: white;
        }

        .contact .section-title {
            color: white;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .contact-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .contact-card h3 {
            color: #FFD700;
            margin-bottom: 20px;
            font-size: 1.4rem;
            font-weight: 700;
        }

        .contact-card p {
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .contact-card strong {
            color: #FFD700;
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #1a252f, #2c3e50);
            color: #bdc3c7;
            padding: 60px 0 30px;
            position: relative;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, #FF8C00, #FFD700);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 30px;
        }

        .footer-section h4 {
            color: #FFD700;
            margin-bottom: 20px;
            font-size: 1.2rem;
            font-weight: 700;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section li {
            margin-bottom: 8px;
        }

        .footer-section a {
            color: #bdc3c7;
            text-decoration: none;
            transition: color 0.3s;
            font-weight: 500;
        }

        .footer-section a:hover {
            color: #FF8C00;
        }

        .footer-section p {
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #34495e;
            color: #95a5a6;
        }

        .footer-bottom a {
            color: #FF8C00;
            text-decoration: none;
        }

        /* Image Gallery */
        .image-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin: 40px 0;
        }

        .gallery-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .gallery-img:hover {
            transform: scale(1.02);
        }

        /* Mobile Navigation */
        @media (max-width: 768px) {
            .mobile-toggle {
                display: block;
            }
            
            nav ul {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: linear-gradient(135deg, #8B4513, #D2691E);
                padding: 25px 20px;
                box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            }
            
            nav ul.active {
                display: flex;
            }
            
            nav ul li {
                margin: 15px 0;
                margin-left: 0;
                text-align: center;
            }

            nav ul li a {
                display: block;
                padding: 12px 20px;
                border-radius: 8px;
                background: rgba(255, 255, 255, 0.1);
            }

            .logo-main {
                font-size: 1.4rem;
            }

            .logo-sub {
                font-size: 0.6rem;
            }
            
            .hero {
                padding-top: 80px;
            }

            .hero h1 {
                font-size: 2.8rem;
            }

            .hero .subtitle {
                font-size: 1.2rem;
                letter-spacing: 1px;
            }

            .hero p {
                font-size: 1.1rem;
                padding: 0 1rem;
            }

            .overview-grid {
                grid-template-columns: 1fr;
            }

            .overview-images {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .services-grid,
            .projects-grid,
            .team-grid {
                grid-template-columns: 1fr;
            }

            .contact-grid {
                grid-template-columns: 1fr;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }

            .cta-button {
                width: 100%;
                max-width: 280px;
                text-align: center;
            }

            .section {
                padding: 60px 0;
            }

            .section-title {
                font-size: 2.2rem;
            }

            .image-gallery {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 2.2rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .stat-card {
                padding: 25px 15px;
            }

            .logo-container {
                gap: 10px;
            }

            .logo-symbol {
                width: 40px;
                height: 40px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header id="header">
        <nav class="container">
            <div class="logo">
                <div class="logo-container">
                    <div class="logo-symbol">
                        <div class="logo-triangle">
                            <div class="logo-dot"></div>
                        </div>
                    </div>
                    <div class="logo-text">
                        <div class="logo-main">GAB & GAB</div>
                        <div class="logo-sub">RC 631217</div>
                    </div>
                </div>
            </div>
            <button class="mobile-toggle">☰</button>
            <ul class="nav-menu">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" alt="Construction Background" class="hero-bg-image">
        <div class="hero-bg-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1>GAB & GAB INTEGRATED CONCEPT LTD</h1>
                <p class="subtitle">Engineering Excellence Since 2005</p>
                <p>Nigeria's Premier Integrated Engineering Services Company delivering world-class construction solutions, innovative electrical systems, sustainable solar power installations, and comprehensive project management services across West Africa with proven expertise and unwavering commitment to excellence.</p>
                <div class="cta-buttons">
                    <a href="#contact" class="cta-button primary">Start Your Project</a>
                    <a href="#about" class="cta-button secondary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <span style="color: white; font-size: 24px;">↓</span>
        </div>
    </section>

    <!-- Company Overview -->
    <section id="about" class="section">
        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" alt="Construction Background" class="section-bg-image">
        <div class="container section-content">
            <h2 class="section-title">Company Overview</h2>
            <div class="overview-grid">
                <div class="overview-text">
                    <h3>RC Number: 631217</h3>
                    <p>GAB & GAB Integrated Concept Ltd, established in December 2005, stands as Nigeria's premier integrated engineering services company with nearly two decades of unparalleled excellence in mechanical, electrical, electronics, instrumentation, and civil construction engineering.</p>
                    
                    <p>Our comprehensive turnkey solutions encompass every critical project phase - from initial feasibility studies and conceptual design through detailed engineering, construction execution, quality finishing, and final commissioning. This holistic approach, combined with our commitment to innovation and quality, has established us as the preferred engineering partner for prestigious private sector clients and strategic government projects throughout Nigeria and West Africa.</p>

                    <h3>Our Mission & Vision</h3>
                    <p>To revolutionize Nigeria's engineering landscape by delivering exceptional, sustainable engineering services through our team of highly skilled professionals, cutting-edge technology integration, and unwavering commitment to quality excellence, safety standards, and environmental responsibility in every project we undertake. We envision becoming West Africa's most trusted engineering solutions provider.</p>

                    <div class="overview-images">
                        <img src="download (17).jpg" alt="Engineering Excellence" class="overview-img">
                        <img src="4bedroom terrace duplex for sale.jpg" alt="Construction Quality" class="overview-img">
                    </div>
                </div>
                <div class="stats-grid">
                    <div class="stat-card">
                        <h3>19+</h3>
                        <p>Years of Excellence</p>
                    </div>
                    <div class="stat-card">
                        <h3>75+</h3>
                        <p>Completed Projects</p>
                    </div>
                    <div class="stat-card">
                        <h3>35+</h3>
                        <p>Professional Staff</p>
                    </div>
                    <div class="stat-card">
                        <h3>100%</h3>
                        <p>Client Satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="section">
        <img src="1e733876dcda1236438047a039d5ae78.jpg" alt="Services Background" class="section-bg-image">
        <div class="container section-content">
            <h2 class="section-title">Our Core Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Engineering Design" class="service-bg-img">
                    <div class="service-content">
                        <div class="service-icon">🏗</div>
                        <h3>Engineering Design & Technical Services</h3>
                        <p>Comprehensive engineering solutions from initial concept through final implementation and optimization</p>
                        <ul>
                            <li>Pre-project Planning & Feasibility Studies</li>
                            <li>Cost Estimating and Budget Control</li>
                            <li>Project Schedule Planning & Control</li>
                            <li>Quality Assurance & Control Systems</li>
                            <li>Mechanical & Electrical System Design</li>
                            <li>Process Design and Evaluation</li>
                            <li>Technical Documentation & Compliance</li>
                        </ul>
                    </div>
                </div>

                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Construction" class="service-bg-img">
                    <div class="service-content">
                        <div class="service-icon">🏢</div>
                        <h3>Construction Services</h3>
                        <p>Full-scale construction excellence from residential complexes to large-scale industrial facilities</p>
                        <ul>
                            <li>Residential Building Construction</li>
                            <li>Commercial Complex Development</li>
                            <li>Industrial Factory Construction</li>
                            <li>Infrastructure Development Projects</li>
                            <li>Renovation and Rehabilitation</li>
                            <li>Civil Engineering Works</li>
                            <li>Site Management & Safety Coordination</li>
                        </ul>
                    </div>
                </div>

                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1509391366360-2e959784a276?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Solar Power" class="service-bg-img">
                    <div class="service-content">
                        <div class="service-icon">⚡</div>
                        <h3>Solar Power & Electrical Systems</h3>
                        <p>Complete renewable energy solutions from 1KVA to 200KVA capacity with cutting-edge technology</p>
                        <ul>
                            <li>Hybrid Solar/Inverter Systems</li>
                            <li>Rural Electrification Projects</li>
                            <li>Industrial Electrical Installations</li>
                            <li>Power Distribution Systems</li>
                            <li>Electrical System Design & Installation</li>
                            <li>Energy Efficiency Audits & Optimization</li>
                            <li>Grid-Tie and Off-Grid Solutions</li>
                        </ul>
                    </div>
                </div>

                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Project Management" class="service-bg-img">
                    <div class="service-content">
                        <div class="service-icon">📋</div>
                        <h3>Project Management</h3>
                        <p>End-to-end project management using proven methodologies and industry best practices</p>
                        <ul>
                            <li>Project Planning and Scheduling</li>
                            <li>Resource Management & Optimization</li>
                            <li>Risk Assessment and Mitigation</li>
                            <li>Quality Control and Assurance</li>
                            <li>Budget Management & Cost Control</li>
                            <li>Stakeholder Communication</li>
                            <li>Performance Monitoring & Reporting</li>
                        </ul>
                    </div>
                </div>

                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Fire Safety" class="service-bg-img">
                    <div class="service-content">
                        <div class="service-icon">🔒</div>
                        <h3>Fire & Security Systems</h3>
                        <p>Advanced safety and security system installations ensuring complete protection and compliance</p>
                        <ul>
                            <li>Fire Detection & Suppression Systems</li>
                            <li>CCTV Surveillance Installation</li>
                            <li>Access Control Systems</li>
                            <li>FM 200 Fire Suppression Systems</li>
                            <li>Security System Consulting</li>
                            <li>Emergency Response Planning</li>
                            <li>Maintenance & Monitoring Services</li>
                        </ul>
                    </div>
                </div>

                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="IT Services" class="service-bg-img">
                    <div class="service-content">
                        <div class="service-icon">💻</div>
                        <h3>IT Services & Technology</h3>
                        <p>Complete information technology solutions and robust network infrastructure services</p>
                        <ul>
                            <li>Local and Wide Area Networks</li>
                            <li>V-SAT Installation & Configuration</li>
                            <li>Server Sales and Maintenance</li>
                            <li>System Installation and Support</li>
                            <li>IT Infrastructure Consulting</li>
                            <li>Technical Support Services</li>
                            <li>Digital Transformation Solutions</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Service Images Gallery -->
            <div class="image-gallery">
                <img src="1e733876dcda1236438047a039d5ae78.jpg" alt="Quality Control" class="gallery-img">
                <img src="road sconsiu.jpg" alt="Electrical Installation" class="gallery-img">
                <img src="_Looking for a reliable solar company_ Look no further than @Solarnova! Their expertise in solar installation and commitment to customer satisfaction make them a top choice_ Start your journey towards energy independe.jpg" alt="Solar Installation" class="gallery-img">
            </div>
        </div>
    </section>

 <!-- Projects -->
<section id="projects" class="section projects">
  <div class="container section-content">
    <h2 class="section-title">Ongoing Projects</h2>

    <style>
      .projects-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 24px;
      }
      .project-card {
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 6px 20px rgba(0,0,0,0.08);
        position: relative;
      }
      .project-image {
        display: block;
        width: 100%;
        height: 220px;
        object-fit: cover;
      }
      .project-content { padding: 16px; }
      .project-content h3 { margin-top: 0; margin-bottom: 10px; }
      .client, .location { margin: 0 0 6px; font-size: 0.95rem; color: #555; }
      .cta-button.primary {
        display: inline-block;
        padding: 12px 24px;
        background: #0b74de;
        color: #fff;
        text-decoration: none;
        border-radius: 6px;
      }
      .status-badge {
        position: absolute;
        top: 12px;
        right: 12px;
        background: #28a745;
        color: white;
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 0.8rem;
        font-weight: bold;
      }
    </style>

    <div class="projects-grid">

      <!-- Project 1 -->
      <div class="project-card">
        <div class="status-badge">In Progress</div>
        <img class="project-image"
             src="IMG-20250912-WA0064.jpg"
             alt="Oja Adeparusi Estate Development - Construction Site">
        <div class="project-content">
          <h3>Oja Adeparusi Estate Development</h3>
          <p class="client"><strong>Client:</strong> Ubitua Globeinvest Ltd</p>
          <p class="location"><strong>Location:</strong> Ado-Ekiti, Ekiti State</p>
          <p>Currently constructing a comprehensive residential development with two units of two-bedroom terrace duplexes with BQ, four units of two-bedroom flats, modern utility building, and commercial complex including mini mart and studio apartments. Site preparation and foundation work are underway.</p>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="project-card">
        <div class="status-badge">In Progress</div>
        <img class="project-image"
             src="IMG-20250912-WA0063.jpg"
             alt="Industrial Manufacturing Complex - Construction Site">
        <div class="project-content">
          <h3>Industrial Manufacturing Complex</h3>
          <p class="client"><strong>Client:</strong> REFEM MILLERS LIMITED</p>
          <p class="location"><strong>Location:</strong> Sagamu, Ogun State</p>
          <p>Ongoing construction of state-of-the-art industrial facility including modern gatehouse, underground storage basement, and production floor facility. Currently executing structural work and ensuring compliance with international industrial specifications and safety standards.</p>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="project-card">
        <div class="status-badge">In Progress</div>
        <img class="project-image"
             src="IMG-20250912-WA0066.jpg"
             alt="Independent Power Project Design - Construction Site">
        <div class="project-content">
          <h3>Independent Power Project Design</h3>
          <p class="client"><strong>Client:</strong> Clifford Garden Estate Ltd</p>
          <p class="location"><strong>Location:</strong> Port Harcourt, Rivers State</p>
          <p>Currently implementing comprehensive feasibility study and detailed engineering design for independent power project. Working on electrical building services installation, power distribution infrastructure development, and renewable energy integration systems.</p>
        </div>
      </div>

      <!-- Project 4 -->
      <div class="project-card">
        <div class="status-badge">In Progress</div>
        <img class="project-image"
             src="IMG-20250912-WA0060.jpg"
             alt="Emergency Communications Infrastructure Project">
        <div class="project-content">
          <h3>Emergency Communications Infrastructure</h3>
          <p class="client"><strong>Client:</strong> Nigerian Communication Commission</p>
          <p class="location"><strong>Location:</strong> Lagos, Oyo, and Ogun States</p>
          <p>Actively providing professional consultancy and supervision services for critical emergency communication centers across southwestern Nigeria. Currently overseeing the implementation of robust telecommunications infrastructure for emergency response and public safety enhancement.</p>
        </div>
      </div>

    </div>

    <div style="text-align: center; margin-top: 50px;">
      <a href="#contact" class="cta-button primary">Get Project Updates</a>
    </div>
  </div>
</section>




    <!-- Why Choose Us -->
    <section class="section">
        <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" alt="Excellence Background" class="section-bg-image">
        <div class="container section-content">
            <h2 class="section-title">Why Choose GAB & GAB</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Excellence" class="feature-bg-img">
                    <div class="feature-content">
                        <div class="feature-icon">🏆</div>
                        <h3>Proven Excellence</h3>
                        <p>19+ years of delivering exceptional engineering solutions across Nigeria with an outstanding 100% client satisfaction rate and numerous industry recognition awards.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Expert Team" class="feature-bg-img">
                    <div class="feature-content">
                        <div class="feature-icon">👷</div>
                        <h3>Expert Team</h3>
                        <p>Highly qualified professionals registered with COREN, NSE, NATE, and other professional bodies, ensuring quality delivery through continuous professional development and industry expertise.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Turnkey Solutions" class="feature-bg-img">
                    <div class="feature-content">
                        <div class="feature-icon">⚙</div>
                        <h3>Turnkey Solutions</h3>
                        <p>Complete end-to-end project solutions from initial design and planning through construction execution, commissioning, handover, and ongoing maintenance support.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Competitive Pricing" class="feature-bg-img">
                    <div class="feature-content">
                        <div class="feature-icon">💰</div>
                        <h3>Competitive Pricing</h3>
                        <p>Cost-effective engineering solutions without compromising on quality, safety, or performance, ensuring exceptional value for your investment and long-term satisfaction.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section id="team" class="section">
        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" alt="Team Background" class="section-bg-image">
        <div class="container section-content">
            <h2 class="section-title">Leadership Team</h2>
            <div class="team-grid">
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Engineering Leadership" class="team-bg-img">
                    <div class="team-content">
                        <h4>Engr. Babatunde S. Aladesae</h4>
                        <p class="position">Director/CEO</p>
                        <p class="qualifications">HND Mechanical Engineering, MNATE, COREN - Leading strategic vision and operational excellence</p>
                    </div>
                </div>
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Structural Engineering" class="team-bg-img">
                    <div class="team-content">
                        <h4>David K. Ayibiowu</h4>
                        <p class="position">Director</p>
                        <p class="qualifications">B.Eng, MNIStructE, MNSE - Structural engineering expertise and quality assurance</p>
                    </div>
                </div>
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Architecture" class="team-bg-img">
                    <div class="team-content">
                        <h4>Arc. Ayodele Thomas Akinwumi</h4>
                        <p class="position">Director</p>
                        <p class="qualifications">M.Sc Architecture, MNIA, ARCON - Architectural design and project aesthetics</p>
                    </div>
                </div>
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Business Development" class="team-bg-img">
                    <div class="team-content">
                        <h4>Alhaji Sani Naabba</h4>
                        <p class="position">Executive Director</p>
                        <p class="qualifications">Business Administration - Strategic business development and client relations</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Contact -->
<section id="contact" class="section contact" 
    style="background: linear-gradient(135deg, #8B4513 0%, #D2691E 50%, #FFD700 100%); color: white;">
    <div class="container section-content">
        <h2 class="section-title">Contact Us</h2>
        <div class="contact-grid">
            <div class="contact-card">
                <h3>🏢 Head Office</h3>
                <p><strong>Address:</strong> Suite 13, LSDPC Shopping Complex Phase 3, Oba Ogunji Road, Ogba, Lagos</p>
                <p><strong>Phone:</strong> +234-8032341477</p>
                <p><strong>Email:</strong> gab.gabintegrated.com@gmail.com</p>
                <p><strong>Alternative Email:</strong> greatsae@gmail.com</p>
                <p><strong>RC Number:</strong> 631217</p>
                <p><strong>Business Hours:</strong> Monday - Friday: 8:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 2:00 PM</p>
            </div>

            <div class="contact-card">
                <h3>🎓 Professional Certifications</h3>
                <p>• Nigerian Society of Engineers (NSE)</p>
                <p>• Council for the Regulation of Engineering in Nigeria (COREN)</p>
                <p>• Nigerian Institute of Architects (NIA)</p>
                <p>• Nigerian Institution of Structural Engineers (NIStructE)</p>
                <p>• Nigerian Association of Technologists in Engineering (NATE)</p>
                <p>• ISO 9001:2015 Quality Management Certification</p>
            </div>

            <div class="contact-card">
                <h3>🏦 Banking Partners</h3>
                <p><strong>Eco Bank Plc:</strong><br>48 Adeniyi Jones Avenue, Ikeja</p>
                <p><strong>Keystone Bank:</strong><br>25 Kudirat Abiola Way, Oregun</p>
                
                <h3 style="margin-top: 25px;">🏅 Why Choose Us</h3>
                <p>✓ 19+ Years of Experience</p>
                <p>✓ Professional Engineering Team</p>
                <p>✓ Quality Assurance Standards</p>
                <p>✓ Competitive & Transparent Pricing</p>
                <p>✓ 24/7 Project Support</p>
            </div>
        </div>
    </div>
</section>



    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Our Services</h4>
                    <ul>
                        <li>Engineering Design & Consulting</li>
                        <li>Construction & Project Management</li>
                        <li>Solar Power & Electrical Systems</li>
                        <li>Fire & Security Systems</li>
                        <li>IT Services & Infrastructure</li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Contact Information</h4>
                    <p>Suite 13, LSDPC Shopping Complex Phase 3<br>
                    Oba Ogunji Road, Ogba, Lagos</p>
                    <p>Phone: +234-8032341477</p>
                    <p>Email: gab.gabintegrated.com@gmail.com</p>
                    <p>RC Number: 631217</p>
                </div>
                
                <div class="footer-section">
                    <h4>Professional Affiliations</h4>
                    <ul>
                        <li>Nigerian Society of Engineers (NSE)</li>
                        <li>Council for the Regulation of Engineering (COREN)</li>
                        <li>Nigerian Institute of Architects (NIA)</li>
                        <li>Nigerian Institution of Structural Engineers</li>
                        <li>Nigerian Association of Technologists in Engineering</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 GAB & GAB Integrated Concept Ltd. All Rights Reserved.</p>
                <p>Developed by <a href="#">Ebisintei Dennis</a></p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile navigation toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileToggle = document.querySelector('.mobile-toggle');
            const navMenu = document.querySelector('nav ul');

            mobileToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');
            });

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                    // Close mobile menu if open
                    navMenu.classList.remove('active');
                    
                    // Update active nav link
                    document.querySelectorAll('nav ul li a').forEach(link => {
                        link.classList.remove('active');
                    });
                    this.classList.add('active');
                });
            });

            // Header scroll effect
            window.addEventListener('scroll', function() {
                const header = document.getElementById('header');
                if (window.scrollY > 100) {
                    header.classList.add('header-scrolled');
                } else {
                    header.classList.remove('header-scrolled');
                }
            });

            // Update active navigation based on scroll position
            window.addEventListener('scroll', () => {
                const sections = document.querySelectorAll('section[id]');
                const navLinks = document.querySelectorAll('nav ul li a[href^="#"]');
                
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 100;
                    if (window.scrollY >= sectionTop) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active');
                    }
                });
            });
        });
    </script>
</body>
</html>