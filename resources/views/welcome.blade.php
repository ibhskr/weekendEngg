<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Weekend Engineering — Utility Software for Everyday Life</title>

    <meta name="description"
        content="Weekend Engineering builds simple, useful and reliable utility software for Android, iOS and the web.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --bg: #f8fafc;
            --surface: #ffffff;
            --surface-2: #f1f5f9;
            --text: #0f172a;
            --muted: #64748b;
            --border: rgba(15, 23, 42, 0.08);

            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --secondary: #8b5cf6;

            --dark: #0b1120;
            --dark-2: #111827;

            --radius: 24px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Space Grotesk', sans-serif;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .container {
            width: min(1180px, calc(100% - 40px));
            margin: auto;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;

            padding: 18px 0;

            background: rgba(248, 250, 252, 0.78);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);

            border-bottom: 1px solid transparent;
            transition: 0.3s;
        }

        .navbar.scrolled {
            border-color: var(--border);
            background: rgba(255, 255, 255, 0.9);
        }

        .nav-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;

            font-weight: 800;
            font-size: 20px;
            letter-spacing: -0.5px;
        }

        .logo-icon {
            width: 38px;
            height: 38px;

            display: grid;
            place-items: center;

            border-radius: 12px;

            color: white;

            background: linear-gradient(135deg,
                    var(--primary),
                    var(--secondary));

            box-shadow: 0 8px 25px rgba(99, 102, 241, .25);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 32px;

            font-size: 14px;
            font-weight: 600;
            color: #475569;
        }

        .nav-links a {
            transition: 0.2s;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-button {
            padding: 10px 18px;
            border-radius: 12px;

            color: white !important;

            background: var(--text);

            transition: 0.2s;
        }

        .nav-button:hover {
            transform: translateY(-2px);
            background: var(--primary);
        }

        .mobile-menu {
            display: none;

            border: none;
            background: transparent;

            font-size: 26px;
            cursor: pointer;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            position: relative;
            overflow: hidden;

            min-height: 820px;

            display: flex;
            align-items: center;

            padding-top: 100px;
        }

        .hero::before {
            content: "";

            position: absolute;

            width: 600px;
            height: 600px;

            top: -200px;
            left: -200px;

            background: rgba(99, 102, 241, .12);

            filter: blur(100px);

            border-radius: 50%;
        }

        .hero::after {
            content: "";

            position: absolute;

            width: 500px;
            height: 500px;

            right: -150px;
            top: 150px;

            background: rgba(139, 92, 246, .10);

            filter: blur(100px);

            border-radius: 50%;
        }

        .hero-grid {
            position: relative;
            z-index: 2;

            display: grid;
            grid-template-columns: 1.05fr .95fr;

            gap: 80px;

            align-items: center;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            padding: 8px 14px;

            border: 1px solid rgba(99, 102, 241, .18);

            border-radius: 100px;

            color: var(--primary-dark);

            background: rgba(99, 102, 241, .07);

            font-size: 13px;
            font-weight: 700;

            margin-bottom: 25px;
        }

        .eyebrow-dot {
            width: 7px;
            height: 7px;

            border-radius: 50%;

            background: #22c55e;

            box-shadow: 0 0 0 5px rgba(34, 197, 94, .1);
        }

        .hero h1 {
            font-size: clamp(48px, 6vw, 78px);
            line-height: .98;

            letter-spacing: -4px;

            margin-bottom: 28px;
        }

        .gradient-text {
            background: linear-gradient(100deg,
                    var(--primary),
                    var(--secondary));

            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero-description {
            max-width: 600px;

            font-size: 18px;
            color: var(--muted);

            margin-bottom: 35px;
        }

        .hero-buttons {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;

            padding: 14px 22px;

            border-radius: 14px;

            font-size: 14px;
            font-weight: 700;

            transition: .25s;
        }

        .btn-primary {
            color: white;
            background: var(--text);

            box-shadow: 0 12px 30px rgba(15, 23, 42, .14);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            background: var(--primary);
        }

        .btn-secondary {
            background: white;
            border: 1px solid var(--border);
        }

        .btn-secondary:hover {
            transform: translateY(-3px);
            border-color: rgba(99, 102, 241, .3);
        }

        /* Hero visual */

        .hero-visual {
            position: relative;
            min-height: 500px;
        }

        .visual-main {
            position: absolute;

            width: 370px;
            height: 460px;

            right: 30px;
            top: 20px;

            padding: 18px;

            border-radius: 35px;

            background: #0f172a;

            box-shadow:
                0 40px 80px rgba(15, 23, 42, .25),
                0 0 0 10px rgba(255, 255, 255, .7);

            transform: rotate(4deg);
        }

        .phone-top {
            width: 100%;
            height: 32px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            color: white;

            font-size: 12px;

            padding: 0 10px;
        }

        .phone-screen {
            height: calc(100% - 32px);

            padding: 25px 18px;

            border-radius: 24px;

            background:
                linear-gradient(145deg,
                    #eef2ff,
                    #ffffff);

            overflow: hidden;
        }

        .screen-label {
            font-size: 12px;
            color: #64748b;
        }

        .screen-title {
            margin-top: 5px;

            font-size: 25px;
            font-weight: 800;
        }

        .screen-card {
            margin-top: 25px;

            padding: 18px;

            border-radius: 18px;

            background: white;

            box-shadow: 0 12px 30px rgba(15, 23, 42, .08);
        }

        .screen-card-icon {
            width: 42px;
            height: 42px;

            display: grid;
            place-items: center;

            border-radius: 12px;

            background: #eef2ff;

            color: var(--primary);

            margin-bottom: 15px;
        }

        .screen-card h4 {
            font-size: 16px;
            margin-bottom: 4px;
        }

        .screen-card p {
            font-size: 12px;
            color: #64748b;
        }

        .floating-card {
            position: absolute;

            padding: 18px 20px;

            border-radius: 18px;

            background: rgba(255, 255, 255, .85);

            backdrop-filter: blur(15px);

            border: 1px solid rgba(255, 255, 255, .8);

            box-shadow: 0 20px 50px rgba(15, 23, 42, .12);
        }

        .floating-card.one {
            left: 0;
            bottom: 90px;
        }

        .floating-card.two {
            right: -10px;
            bottom: 10px;
        }

        .floating-number {
            font-size: 24px;
            font-weight: 800;
        }

        .floating-label {
            font-size: 11px;
            color: var(--muted);
        }

        /* =========================
           SECTION
        ========================= */

        section {
            padding: 110px 0;
        }

        .section-header {
            max-width: 680px;

            margin: 0 auto 60px;

            text-align: center;
        }

        .section-label {
            display: block;

            color: var(--primary);

            font-size: 13px;
            font-weight: 800;

            text-transform: uppercase;
            letter-spacing: 2px;

            margin-bottom: 12px;
        }

        .section-header h2 {
            font-size: clamp(34px, 5vw, 52px);
            line-height: 1.05;
            letter-spacing: -2px;

            margin-bottom: 18px;
        }

        .section-header p {
            color: var(--muted);
            font-size: 16px;
        }

        /* =========================
           PRODUCTS
        ========================= */

        .products {
            background: white;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .product-card {
            padding: 30px;

            border: 1px solid var(--border);

            border-radius: var(--radius);

            background: #fff;

            transition: .3s;
        }

        .product-card:hover {
            transform: translateY(-7px);

            box-shadow:
                0 25px 60px rgba(15, 23, 42, .08);

            border-color: rgba(99, 102, 241, .2);
        }

        .product-icon {
            width: 55px;
            height: 55px;

            display: grid;
            place-items: center;

            border-radius: 16px;

            background: #eef2ff;

            color: var(--primary);

            font-size: 24px;

            margin-bottom: 25px;
        }

        .product-card h3 {
            font-size: 22px;
            margin-bottom: 10px;
        }

        .product-card p {
            color: var(--muted);
            font-size: 14px;
            margin-bottom: 25px;
        }

        .store-links {
            display: flex;
            gap: 8px;
        }

        .store-link {
            padding: 8px 12px;

            border-radius: 9px;

            background: var(--surface-2);

            font-size: 11px;
            font-weight: 700;
        }

        /* =========================
           ABOUT
        ========================= */

        .about-grid {
            display: grid;
            grid-template-columns: .9fr 1.1fr;

            gap: 80px;

            align-items: center;
        }

        .about-visual {
            min-height: 430px;

            border-radius: 35px;

            background:
                radial-gradient(circle at 30% 20%,
                    #818cf8,
                    transparent 35%),
                linear-gradient(145deg,
                    #111827,
                    #1e1b4b);

            position: relative;

            overflow: hidden;
        }

        .about-grid-pattern {
            position: absolute;
            inset: 0;

            opacity: .15;

            background-image:
                linear-gradient(#fff 1px, transparent 1px),
                linear-gradient(90deg, #fff 1px, transparent 1px);

            background-size: 40px 40px;
        }

        .about-center {
            position: absolute;

            left: 50%;
            top: 50%;

            transform: translate(-50%, -50%);

            width: 170px;
            height: 170px;

            border-radius: 50%;

            display: grid;
            place-items: center;

            color: white;

            font-family: 'Space Grotesk';
            font-size: 22px;
            font-weight: 800;

            text-align: center;

            background: rgba(255, 255, 255, .1);

            border: 1px solid rgba(255, 255, 255, .25);

            backdrop-filter: blur(15px);
        }

        .about-content h2 {
            font-size: clamp(36px, 5vw, 52px);
            line-height: 1.05;

            letter-spacing: -2px;

            margin-bottom: 25px;
        }

        .about-content>p {
            color: var(--muted);
            margin-bottom: 30px;
        }

        .check-list {
            display: grid;
            gap: 16px;
        }

        .check {
            display: flex;
            align-items: flex-start;
            gap: 13px;

            font-size: 14px;
            font-weight: 600;
        }

        .check-icon {
            flex-shrink: 0;

            width: 23px;
            height: 23px;

            display: grid;
            place-items: center;

            border-radius: 50%;

            color: #16a34a;
            background: #dcfce7;

            font-size: 12px;
        }

        /* =========================
           STATS
        ========================= */

        .stats {
            padding: 70px 0;

            background: var(--dark);

            color: white;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }

        .stat {
            text-align: center;

            padding: 20px;

            border-right: 1px solid rgba(255, 255, 255, .08);
        }

        .stat:last-child {
            border-right: none;
        }

        .stat-number {
            font-family: 'Space Grotesk';

            font-size: 42px;
            font-weight: 700;

            margin-bottom: 4px;
        }

        .stat-label {
            color: #94a3b8;
            font-size: 13px;
        }

        /* =========================
           TEAM
        ========================= */

        .team {
            background: #f8fafc;
        }

        .team-grid {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 22px;
        }

        .team-card {
            padding: 25px;

            background: white;

            border: 1px solid var(--border);

            border-radius: 25px;

            transition: .3s;
        }

        .team-card:hover {
            transform: translateY(-6px);

            box-shadow: 0 25px 60px rgba(15, 23, 42, .08);
        }

        .member-photo {
            height: 300px;

            border-radius: 19px;

            overflow: hidden;

            background:
                linear-gradient(145deg,
                    #e0e7ff,
                    #f1f5f9);

            margin-bottom: 20px;

            display: grid;
            place-items: center;

            color: #94a3b8;

            font-size: 14px;
        }

        .member-photo img {
            width: 100%;
            height: 100%;

            object-fit: cover;
        }

        .team-card h3 {
            font-size: 21px;
            margin-bottom: 3px;
        }

        .role {
            font-size: 12px;
            font-weight: 700;

            color: var(--primary);

            margin-bottom: 12px;
        }

        .team-card p {
            font-size: 13px;
            color: var(--muted);
        }

        .social-links {
            display: flex;
            gap: 8px;

            margin-top: 18px;
        }

        .social {
            width: 34px;
            height: 34px;

            display: grid;
            place-items: center;

            border-radius: 10px;

            background: var(--surface-2);

            font-size: 12px;
            font-weight: 700;

            transition: .2s;
        }

        .social:hover {
            background: var(--primary);
            color: white;
        }

        /* =========================
           CTA
        ========================= */

        .cta {
            padding: 100px 0;
        }

        .cta-box {
            position: relative;

            overflow: hidden;

            padding: 80px 60px;

            text-align: center;

            border-radius: 35px;

            color: white;

            background:
                radial-gradient(circle at 20% 20%,
                    rgba(255, 255, 255, .15),
                    transparent 30%),
                linear-gradient(135deg,
                    #4f46e5,
                    #7c3aed);
        }

        .cta-box h2 {
            font-size: clamp(35px, 5vw, 55px);
            letter-spacing: -2px;

            margin-bottom: 18px;
        }

        .cta-box p {
            max-width: 600px;

            margin: 0 auto 30px;

            color: rgba(255, 255, 255, .8);
        }

        .cta .btn {
            background: white;
            color: #312e81;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            padding: 70px 0 25px;

            background: var(--dark);

            color: white;
        }

        .footer-grid {
            display: grid;

            grid-template-columns: 1.5fr 1fr 1fr 1fr;

            gap: 50px;

            padding-bottom: 60px;

            border-bottom: 1px solid rgba(255, 255, 255, .08);
        }

        .footer-brand p {
            max-width: 330px;

            color: #94a3b8;

            font-size: 13px;

            margin-top: 18px;
        }

        .footer-column h4 {
            font-size: 13px;

            margin-bottom: 20px;
        }

        .footer-column a {
            display: block;

            color: #94a3b8;

            font-size: 13px;

            margin-bottom: 12px;

            transition: .2s;
        }

        .footer-column a:hover {
            color: white;
        }

        .footer-bottom {
            display: flex;

            justify-content: space-between;
            align-items: center;

            padding-top: 25px;

            color: #64748b;

            font-size: 12px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media(max-width: 900px) {

            .nav-links {
                display: none;
            }

            .mobile-menu {
                display: block;
            }

            .hero {
                min-height: auto;

                padding: 150px 0 80px;
            }

            .hero-grid {
                grid-template-columns: 1fr;

                gap: 60px;
            }

            .hero-visual {
                min-height: 470px;
            }

            .product-grid,
            .team-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .about-grid {
                grid-template-columns: 1fr;

                gap: 50px;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .stat:nth-child(2) {
                border-right: none;
            }

            .stat:nth-child(-n+2) {
                border-bottom: 1px solid rgba(255, 255, 255, .08);
            }

            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media(max-width: 600px) {

            .container {
                width: min(100% - 28px, 1180px);
            }

            section {
                padding: 80px 0;
            }

            .hero h1 {
                font-size: 48px;
                letter-spacing: -2.5px;
            }

            .hero-description {
                font-size: 16px;
            }

            .hero-visual {
                min-height: 420px;
            }

            .visual-main {
                width: 285px;
                height: 370px;

                right: 15px;
            }

            .floating-card.one {
                left: 0;
                bottom: 60px;
            }

            .floating-card.two {
                right: 0;
            }

            .product-grid,
            .team-grid {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: 1fr 1fr;
            }

            .stat {
                border-right: none;
            }

            .stat-number {
                font-size: 32px;
            }

            .cta-box {
                padding: 55px 25px;
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 35px 20px;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <!-- =========================
     NAVBAR
========================= -->

    <header class="navbar" id="navbar">

        <div class="container nav-inner">

            <a href="#" class="logo">

                <span class="logo-icon">WE</span>

                <span>Weekend Engineering</span>

            </a>

            <nav class="nav-links">

                <a href="#products">Products</a>

                <a href="#about">About</a>

                <a href="#team">Team</a>

                <a href="#contact" class="nav-button">
                    Contact
                </a>

            </nav>

            <button class="mobile-menu">
                ☰
            </button>

        </div>

    </header>


    <!-- =========================
     HERO
========================= -->

    <section class="hero">

        <div class="container hero-grid">

            <div>

                <div class="eyebrow">

                    <span class="eyebrow-dot"></span>

                    Building useful software

                </div>

                <h1>

                    Software that makes
                    <span class="gradient-text">
                        everyday life easier.
                    </span>

                </h1>

                <p class="hero-description">

                    Weekend Engineering builds simple, practical and
                    beautifully designed utility software for people
                    around the world.

                </p>

                <div class="hero-buttons">

                    <a href="#products" class="btn btn-primary">
                        Explore our products →
                    </a>

                    <a href="#about" class="btn btn-secondary">
                        About us
                    </a>

                </div>

            </div>


            <!-- HERO APP MOCKUP -->

            <div class="hero-visual">

                <div class="visual-main">

                    <div class="phone-top">

                        <span>9:41</span>

                        <span>● ● ●</span>

                    </div>

                    <div class="phone-screen">

                        <div class="screen-label">
                            Weekend Engineering
                        </div>

                        <div class="screen-title">
                            Your tools.
                            Simplified.
                        </div>


                        <div class="screen-card">

                            <div class="screen-card-icon">
                                ✓
                            </div>

                            <h4>
                                Smart Utilities
                            </h4>

                            <p>
                                Powerful tools designed
                                for everyday tasks.
                            </p>

                        </div>


                        <div class="screen-card">

                            <div class="screen-card-icon">
                                ⚡
                            </div>

                            <h4>
                                Fast & Simple
                            </h4>

                            <p>
                                No unnecessary complexity.
                                Just get things done.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="floating-card one">

                    <div class="floating-number">
                        10K+
                    </div>

                    <div class="floating-label">
                        Users reached
                    </div>

                </div>


                <div class="floating-card two">

                    <div class="floating-number">
                        Android + iOS
                    </div>

                    <div class="floating-label">
                        Available worldwide
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
     PRODUCTS
========================= -->

    <section class="products" id="products">

        <div class="container">

            <div class="section-header">

                <span class="section-label">
                    Our products
                </span>

                <h2>
                    Small tools.
                    Big usefulness.
                </h2>

                <p>
                    We create focused software that solves real problems
                    without getting in your way.
                </p>

            </div>


            <div class="product-grid">


                <!-- PRODUCT 1 -->

                <div class="product-card">

                    <div class="product-icon">
                        ⚡
                    </div>

                    <h3>
                        Utility App
                    </h3>

                    <p>
                        A powerful collection of useful tools
                        designed to make everyday tasks faster
                        and easier.
                    </p>

                    <div class="store-links">

                        <a href="#" class="store-link">
                            Google Play
                        </a>

                        <a href="#" class="store-link">
                            App Store
                        </a>

                    </div>

                </div>


                <!-- PRODUCT 2 -->

                <div class="product-card">

                    <div class="product-icon">
                        🛠
                    </div>

                    <h3>
                        Smart Tools
                    </h3>

                    <p>
                        Lightweight and reliable utilities
                        built with simplicity and performance
                        in mind.
                    </p>

                    <div class="store-links">

                        <a href="#" class="store-link">
                            Google Play
                        </a>

                        <a href="#" class="store-link">
                            App Store
                        </a>

                    </div>

                </div>


                <!-- PRODUCT 3 -->

                <div class="product-card">

                    <div class="product-icon">
                        ✦
                    </div>

                    <h3>
                        Coming Soon
                    </h3>

                    <p>
                        We are continuously working on new
                        ideas and products that make technology
                        more useful.
                    </p>

                    <div class="store-links">

                        <span class="store-link">
                            In Development
                        </span>

                    </div>

                </div>


            </div>

        </div>

    </section>


    <!-- =========================
     ABOUT
========================= -->

    <section id="about">

        <div class="container about-grid">


            <div class="about-visual">

                <div class="about-grid-pattern"></div>

                <div class="about-center">
                    Weekend<br>
                    Engineering
                </div>

            </div>


            <div class="about-content">

                <span class="section-label">
                    Who we are
                </span>

                <h2>
                    Engineering useful
                    things for everyone.
                </h2>

                <p>
                    Weekend Engineering is a software company focused
                    on building practical utility applications.
                    We believe great software doesn't need to be
                    complicated — it needs to solve the right problem
                    really well.
                </p>


                <div class="check-list">

                    <div class="check">

                        <span class="check-icon">
                            ✓
                        </span>

                        <span>
                            Simple and intuitive user experiences
                        </span>

                    </div>


                    <div class="check">

                        <span class="check-icon">
                            ✓
                        </span>

                        <span>
                            Lightweight and performance-focused software
                        </span>

                    </div>


                    <div class="check">

                        <span class="check-icon">
                            ✓
                        </span>

                        <span>
                            Available across Android, iOS and the web
                        </span>

                    </div>


                    <div class="check">

                        <span class="check-icon">
                            ✓
                        </span>

                        <span>
                            Built around real-world problems
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
     STATS
========================= -->

    <section class="stats">

        <div class="container stats-grid">

            <div class="stat">

                <div class="stat-number">
                    10K+
                </div>

                <div class="stat-label">
                    Users
                </div>

            </div>


            <div class="stat">

                <div class="stat-number">
                    5+
                </div>

                <div class="stat-label">
                    Products
                </div>

            </div>


            <div class="stat">

                <div class="stat-number">
                    2
                </div>

                <div class="stat-label">
                    Platforms
                </div>

            </div>


            <div class="stat">

                <div class="stat-number">
                    24/7
                </div>

                <div class="stat-label">
                    Software availability
                </div>

            </div>

        </div>

    </section>


    <!-- =========================
     TEAM
========================= -->

    <section class="team" id="team">

        <div class="container">

            <div class="section-header">

                <span class="section-label">
                    The people behind the software
                </span>

                <h2>
                    Built by developers.
                    Driven by ideas.
                </h2>

                <p>
                    Weekend Engineering is powered by a small team
                    of developers and founders who love building
                    useful technology.
                </p>

            </div>


            <div class="team-grid">


                <!-- FOUNDER -->

                <div class="team-card">

                    <div class="member-photo">

                        <!-- Replace with actual image -->

                        <img
                            src="{{ asset('images/team/bhaskar.jpg') }}"
                            alt="Bhaskar Roy">

                    </div>

                    <h3>
                        Bhaskar Roy
                    </h3>

                    <div class="role">
                        Founder & App Developer
                    </div>

                    <p>
                        Building the vision behind Weekend Engineering
                        and turning ideas into useful products.
                    </p>

                    <div class="social-links">

                        <a href="#" class="social">
                            in
                        </a>

                        <a href="#" class="social">
                            X
                        </a>

                        <a href="#" class="social">
                            GH
                        </a>

                    </div>

                </div>


                <!-- DEVELOPER -->

                <div class="team-card">

                    <div class="member-photo">

                        <img
                            src="{{ asset('images/team/sajal.jpg') }}"
                            alt="Sajal Laha">

                    </div>

                    <h3>
                        Sajal Laha
                    </h3>

                    <div class="role">
                        Founder & Head of Engineering
                    </div>

                    <p>
                      Designed and planned the core infrastructure driving our product operations.
                    </p>

                    <div class="social-links">

                        <a href="#" class="social">
                            in
                        </a>

                        <a href="#" class="social">
                            GH
                        </a>

                    </div>

                </div>


                <!-- DEVELOPER -->

                <div class="team-card">

                    <div class="member-photo">

                        <img
                            src="{{ asset('images/team/developer.jpg') }}"
                            alt="Developer">

                    </div>

                    <h3>
                        Developer
                    </h3>

                    <div class="role">
                        Mobile Developer
                    </div>

                    <p>
                        Focused on creating fast, reliable and
                        beautiful mobile experiences for our users.
                    </p>

                    <div class="social-links">

                        <a href="#" class="social">
                            in
                        </a>

                        <a href="#" class="social">
                            GH
                        </a>

                    </div>

                </div>


            </div>

        </div>

    </section>


    <!-- =========================
     CTA
========================= -->

    <section class="cta" id="contact">

        <div class="container">

            <div class="cta-box">

                <h2>
                    Have an idea?
                </h2>

                <p>
                    We're always interested in interesting problems,
                    useful ideas and opportunities to build something
                    meaningful.
                </p>

                <a href="mailto:hello@weekendengineering.com"
                    class="btn">
                    Get in touch →
                </a>

            </div>

        </div>

    </section>


    <!-- =========================
     FOOTER
========================= -->

    <footer>

        <div class="container">

            <div class="footer-grid">


                <div class="footer-brand">

                    <a href="#" class="logo">

                        <span class="logo-icon">
                            WE
                        </span>

                        <span>
                            Weekend Engineering
                        </span>

                    </a>

                    <p>
                        We build useful software for everyday life.
                        Simple ideas, carefully engineered.
                    </p>

                </div>


                <div class="footer-column">

                    <h4>
                        Company
                    </h4>

                    <a href="#about">
                        About
                    </a>

                    <a href="#team">
                        Team
                    </a>

                    <a href="#contact">
                        Contact
                    </a>

                </div>


                <div class="footer-column">

                    <h4>
                        Products
                    </h4>

                    <a href="#products">
                        Applications
                    </a>

                    <a href="#">
                        Google Play
                    </a>

                    <a href="#">
                        App Store
                    </a>

                </div>


                <div class="footer-column">

                    <h4>
                        Legal
                    </h4>

                    <a href="#">
                        Privacy Policy
                    </a>

                    <a href="#">
                        Terms of Service
                    </a>

                </div>


            </div>


            <div class="footer-bottom">

                <span>
                    © {{ date('Y') }} Weekend Engineering.
                    All rights reserved.
                </span>

                <span>
                    Made with ♥ & code.
                </span>

            </div>

        </div>

    </footer>


    <script>
        /* Navbar scroll effect */

        window.addEventListener('scroll', function() {

            const navbar = document.getElementById('navbar');

            if (window.scrollY > 20) {

                navbar.classList.add('scrolled');

            } else {

                navbar.classList.remove('scrolled');

            }

        });


        /* Simple mobile navigation */

        const mobileButton =
            document.querySelector('.mobile-menu');

        const nav =
            document.querySelector('.nav-links');


        mobileButton.addEventListener('click', function() {

            if (nav.style.display === 'flex') {

                nav.style.display = '';

            } else {

                nav.style.display = 'flex';

                nav.style.position = 'absolute';

                nav.style.top = '75px';

                nav.style.left = '14px';

                nav.style.right = '14px';

                nav.style.padding = '20px';

                nav.style.flexDirection = 'column';

                nav.style.alignItems = 'flex-start';

                nav.style.background = 'white';

                nav.style.borderRadius = '18px';

                nav.style.boxShadow =
                    '0 20px 50px rgba(15,23,42,.12)';

            }

        });
    </script>

</body>

</html>