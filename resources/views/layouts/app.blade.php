<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'وقف المودة - مؤسسة خيرية')">
    <title>@yield('title', 'وقف المودة')</title>
    
 
    
    <style>
        :root {
            --primary-brown: #8B7355;
            --primary-brown-dark: #6B5744;
            --primary-brown-light: #A68968;
            --accent-gold: #B8956A;
            --accent-gold-light: #D4AF78;
            --secondary-green: #7BA428;
            --secondary-yellow-green: #9CB82E;
            --text-dark: #2C2C2C;
            --text-gray: #666666;
            --bg-light: #F8F7F5;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .hero-pattern {
            position: absolute;
            inset: 0;
            background-image: 
                repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(255,255,255,.02) 35px, rgba(255,255,255,.02) 70px);
            pointer-events: none;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-dark);
            background-color: #ffffff;
            line-height: 1.8;
        }

        /* Navigation Styles */
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid rgba(139, 115, 85, 0.1);
            
        }

        .navbar-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-height: 100px;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            position: relative;
        }

        .logo-img {
            height: 160px;
            width: auto;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .logo-text h1 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-brown);
            margin-bottom: 0.25rem;
        }

        .logo-text p {
            font-size: 0.95rem;
            color: var(--text-gray);
        }

        .nav-menu {
            display: flex;
            gap: 0.5rem;
            list-style: none;
        }

        .nav-link {
            padding: 0.8rem 1.5rem;
            color: var(--text-dark);
            text-decoration: none;
            font-weight: 500;
            font-size: 1.05rem;
            transition: all 0.3s ease;
            border-radius: 8px;
            position: relative;
        }

        .nav-link:hover {
            color: var(--primary-brown);
            background-color: rgba(139, 115, 85, 0.05);
        }

        .nav-link.active {
            color: var(--primary-brown);
            background-color: rgba(139, 115, 85, 0.1);
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 40%;
            height: 2px;
            background-color: var(--accent-gold);
        }

        .scroll-reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }

        .scroll-reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        
        .scroll-reveal-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.8s ease-out;
        }

        .scroll-reveal-left.active {
            opacity: 1;
            transform: translateX(0);
        }

    
        .scroll-reveal-right {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.8s ease-out;
        }

        .scroll-reveal-right.active {
            opacity: 1;
            transform: translateX(0);
        }


        .scroll-reveal-scale {
            opacity: 0;
            transform: scale(0.9);
            transition: all 0.8s ease-out;
        }

        .scroll-reveal-scale.active {
            opacity: 1;
            transform: scale(1);
        }

        /* Mobile Menu Toggle */
        .mobile-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.8rem;
            color: var(--primary-brown);
            cursor: pointer;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-brown) 0%, var(--primary-brown-dark) 100%);
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="100" height="100" patternUnits="userSpaceOnUse"><path d="M 100 0 L 0 0 0 100" fill="none" stroke="rgba(255,255,255,0.03)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            opacity: 0.5;
        }

        .hero-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 8rem 2rem;
            position: relative;
            z-index: 1;
        }

        .hero-content h1 {
            font-size: 4rem;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 1.5rem;
            letter-spacing: -1px;
        }

        .hero-content p {
            font-size: 1.4rem;
            color: rgba(255, 255, 255, 0.9);
            max-width: 700px;
            line-height: 2;
            margin-bottom: 2.5rem;
        }

        .btn-primary {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: linear-gradient(135deg, var(--accent-gold) 0%, var(--accent-gold-light) 100%);
            color: #ffffff;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(184, 149, 106, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(184, 149, 106, 0.4);
        }

        /* Container */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Section Styles */
        .section {
            padding: 6rem 0;
        }

        .section-title {
            font-size: 2.8rem;
            font-weight: 700;
            color: var(--primary-brown-dark);
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
            padding-bottom: 1.5rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(90deg, var(--accent-gold) 0%, var(--accent-gold-light) 100%);
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #2C2C2C 0%, #1a1a1a 100%);
            color: #ffffff;
            padding: 4rem 0 2rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-section h3 {
            font-size: 1.4rem;
            margin-bottom: 1.5rem;
            color: var(--accent-gold-light);
        }

        .footer-section p,
        .footer-section a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            line-height: 2;
            display: block;
        }

        .footer-section a:hover {
            color: var(--accent-gold-light);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 2rem;
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
        }

        /* Responsive Design */
        @media (max-width: 968px) {
            .mobile-toggle {
                display: block;
            }

            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                right: 0;
                left: 0;
                background: #ffffff;
                flex-direction: column;
                padding: 1rem;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            }

            .nav-menu.active {
                display: flex;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="navbar-container">
            <div class="logo-section">
                <img src="{{ asset('images/logo-waqf.png') }}" alt="شعار وقف المودة" class="logo-img">
                <div class="logo-text">
                </div>
            </div>

            <button class="mobile-toggle" id="mobileToggle">
                ☰
            </button>

            <ul class="nav-menu" id="navMenu">
                <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">الرئيسية</a></li>
                <li><a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">عن الوقف</a></li>
                <li><a href="{{ route('founder') }}" class="nav-link {{ request()->routeIs('founder') ? 'active' : '' }}">كلمة الواقفين</a></li>
                <li><a href="{{ route('governance.index') }}" class="nav-link {{ request()->routeIs('governance.*') ? 'active' : '' }}">الحوكمة</a></li>
                <li><a href="{{ route('activities.index') }}" class="nav-link {{ request()->routeIs('activities.*') ? 'active' : '' }}">أنشطة الوقف</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">تواصل معنا</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>وقف المودة</h3>
                    <p>مؤسسة خيرية تسعى لخدمة المجتمع من خلال برامج ومبادرات نوعية تهدف إلى نشر الخير والعلم.</p>
                </div>
                
                <div class="footer-section">
                    <h3>روابط سريعة</h3>
                    <a href="{{ route('about') }}">عن الوقف</a>
                    <a href="{{ route('founder') }}">كلمة الواقفين</a>
                    <a href="{{ route('governance.index') }}">الحوكمة</a>
                    <a href="{{ route('activities.index') }}">أنشطة الوقف</a>
                </div>
                
                <div class="footer-section">
                    <h3>تواصل معنا</h3>
                    <p style="display:flex; align-items:center; gap:6px;">
                        <span>البريد الإلكتروني:</span>
                        <a href="mailto:info@mawadda.sa" style="text-decoration:none;">
                            <span dir="ltr">info@mawadda.sa</span>
                        </a>
                    </p>
                    <p>
                        الهاتف:
                        <a href="tel:+966531443818" style="display:inline;">
                            <span dir="ltr" style="white-space: nowrap;">
                                +966 53 144 3818
                            </span>
                        </a>
                    </p>
                    <p style="display:flex; gap:6px;">
                        <span>العنوان:</span>
                        <a 
                            href="https://share.google/ZJ2yUJ1IKdItUfWPu"
                            target="_blank"
                            style="text-decoration:none; white-space:nowrap;"
                        >
                            المملكة العربية السعودية - جدة - حي الفيحاء
                        </a>
                    </p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p> جميع الحقوق محفوظة لوقف المودة &copy; {{ date('Y') }} </p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileToggle = document.getElementById('mobileToggle');
        const navMenu = document.getElementById('navMenu');

        mobileToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });

        // دالة لفحص إذا كان العنصر ظاهر في الشاشة
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // دالة لفحص إذا كان جزء من العنصر ظاهر
    function isElementPartiallyInViewport(el) {
        const rect = el.getBoundingClientRect();
        const windowHeight = (window.innerHeight || document.documentElement.clientHeight);
        const vertInView = (rect.top <= windowHeight) && ((rect.top + rect.height) >= 0);
        return vertInView;
    }

    
    function handleScrollAnimations() {
        
        const scrollElements = document.querySelectorAll('.scroll-reveal, .scroll-reveal-left, .scroll-reveal-right, .scroll-reveal-scale');
        
        scrollElements.forEach(el => {
            // add class "active"
            if (isElementPartiallyInViewport(el)) {
                el.classList.add('active');
            }
        });
    }

    
    document.addEventListener('DOMContentLoaded', function() {
        handleScrollAnimations();
    });

    window.addEventListener('scroll', function() {
        handleScrollAnimations();
    });

    window.addEventListener('resize', function() {
        handleScrollAnimations();
    });
    </script>
</body>
</html>