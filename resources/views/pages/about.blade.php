@extends('layouts.app')

@section('title', 'عن الوقف - وقف المودة')
@section('meta_description', 'تعرف على وقف المودة، رؤيتنا، رسالتنا، وقيمنا')

@section('content')
    <style>
        /* Hero Section */
        .hero-home {
            background: linear-gradient(135deg, var(--primary-brown) 0%, var(--primary-brown-dark) 100%);
            padding: 10rem 0 8rem;
            position: relative;
            overflow: hidden;
            min-height: 90vh;
            display: flex;
            align-items: center;
        }

        .hero-background {
            position: absolute;
            inset: 0;
            overflow: hidden;
        }

        .hero-shape {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.15;
            animation: float 20s ease-in-out infinite;
        }

        .hero-shape-1 {
            width: 500px;
            height: 500px;
            background: var(--accent-gold-light);
            top: -100px;
            right: -100px;
            animation-delay: 0s;
        }

        .hero-shape-2 {
            width: 400px;
            height: 400px;
            background: var(--accent-gold);
            bottom: -100px;
            left: -100px;
            animation-delay: 5s;
        }

        .hero-shape-3 {
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation-delay: 10s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            33% {
                transform: translate(30px, -30px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
        }
        .hero-content-wrapper {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            color: #ffffff;
            font-size: 0.95rem;
            font-weight: 500;
            margin-bottom: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .hero-badge svg {
            width: 20px;
            height: 20px;
        }

        .hero-home h1 {
            font-size: 5.5rem;
            font-weight: 900;
            background: linear-gradient(135deg, #ffffff 0%, var(--accent-gold-light) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 2rem;
            letter-spacing: -3px;
            line-height: 1.5;
        }

        .hero-title-main {
            display: block;
            text-shadow: 0 4px 30px rgba(0, 0, 0, 0.3);
        }

        .hero-title-accent {
            display: block;
            font-size: 0.5em;
            background: linear-gradient(135deg, var(--accent-gold-light) 0%, var(--accent-gold) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
        }

        .hero-home p {
            font-size: 1.3rem;
            color: #ece6e6;
            max-width: 700px;
            line-height: 1.8;
            margin: 0 auto 3rem;
            font-weight: 500;
        }


        /* About Content Section */
        .about-content-section {
            padding: 6rem 0 4rem;
            background-color: var(--bg-light);
            position: relative;
            margin-top: -4rem;
            overflow: hidden;
        }

        .about-content-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 200px;
            background: linear-gradient(180deg, var(--bg-light) 0%, transparent 100%);
            pointer-events: none;
        }

        .about-content-section::after {
            content: '';
            position: absolute;
            inset: 0;
            background: url('data:image/svg+xml,<svg width="60" height="60" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="dots" width="60" height="60" patternUnits="userSpaceOnUse"><circle cx="2" cy="2" r="1" fill="rgba(139,115,85,0.03)"/></pattern></defs><rect width="60" height="60" fill="url(%23dots)"/></svg>');
            opacity: 0.5;
        }

        .about-text {
            max-width: 1200px;
            margin: 0 auto 5rem;
            position: relative;
            z-index: 1;
        }

        .about-text-content {
            background: #ffffff;
            border-radius: 24px;
            padding: 4rem 3rem;
            box-shadow:
                0 15px 30px rgba(0, 0, 0, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(184, 149, 106, 0.15);
            position: relative;
            overflow: hidden;
        }

        .about-text-content::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(184, 149, 106, 0.1) 0%, transparent 70%);
            pointer-events: none;
        }

        .section-title {
            font-size: 2.8rem;
            font-weight: 700;
            color: var(--primary-brown);
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
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg,
                    transparent 0%,
                    var(--accent-gold) 20%,
                    var(--accent-gold) 80%,
                    transparent 100%);
            border-radius: 2px;
        }

        .section-title::before {
            content: '✦';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -25px;
            font-size: 1.2rem;
            color: var(--accent-gold);
        }

        .about-text p {
            font-size: 1.2rem;
            line-height: 2.5;
            color: var(--primary-brown);
            font-weight: 500;
            text-align: right;
            margin-bottom: 2rem;
            padding: 2rem 2.5rem;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 12px;
            border-right: 4px solid var(--accent-gold);
            position: relative;
            transition: all 0.3s ease;
        }

        .about-text p:hover {
            background: rgba(255, 255, 255, 0.8);
            transform: translateX(-5px);
        }

        .about-text p:nth-child(3) {
            border-right: none;
            border-left: 4px solid var(--primary-brown);
        }

        .about-text p:nth-child(3):hover {
            transform: translateX(5px);
        }

        .about-text p:nth-child(4) {
            border-right-color: var(--primary-brown-dark);
        }

        .about-text p::before {
            content: '◆';
            position: absolute;
            right: 10px;
            top: 10px;
            font-size: 0.8rem;
            color: var(--accent-gold);
            opacity: 0.4;
        }

        .about-text p:nth-child(3)::before {
            right: auto;
            left: 10px;
            color: var(--primary-brown);
        }

        /* Vision Mission Grid */
        .vision-mission-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 3rem;
            max-width: 1200px;
            margin: 4rem auto;
        }

        .vm-card {
            background: linear-gradient(135deg, #ffffff 0%, var(--bg-light) 100%);
            padding: 3rem;
            border-radius: 24px;
            box-shadow:
                0 15px 30px rgba(0, 0, 0, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(184, 149, 106, 0.15);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .vm-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--accent-gold) 0%, var(--accent-gold-light) 100%);
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.5s ease;
        }

        .vm-card:hover {
            transform: translateY(-12px);
            box-shadow:
                0 30px 60px rgba(0, 0, 0, 0.15),
                0 0 0 1px rgba(184, 149, 106, 0.3);
            border-color: var(--accent-gold);
        }

        .vm-card:hover::before {
            transform: scaleX(1);
            transform-origin: left;
        }

        .vm-icon-wrapper {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #ffffff 0%, var(--bg-light) 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            transition: all 0.4s ease;
            border: 1px solid rgba(184, 149, 106, 0.2);
        }

        .vm-card:hover .vm-icon-wrapper {
            background: linear-gradient(135deg, var(--accent-gold) 0%, var(--accent-gold-light) 100%);
            transform: rotate(5deg) scale(1.1);
            box-shadow:
                0 10px 40px rgba(184, 149, 106, 0.4),
                0 0 60px rgba(184, 149, 106, 0.3);
        }

        .vm-icon-wrapper svg {
            transition: all 0.4s ease;
            filter: drop-shadow(0 4px 8px rgba(184, 149, 106, 0.3));
        }

        .vm-card:hover .vm-icon-wrapper svg {
            transform: scale(1.1);
        }

        .vm-card h3 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-brown);
            margin-bottom: 1.5rem;
            text-align: center;
            transition: all 0.3s ease;
        }

        .vm-card:hover h3 {
            color: var(--accent-gold-light);
        }

        .vm-card p {
            font-size: 1.15rem;
            line-height: 2;
            color: var(--text-gray);
            text-align: center;
            transition: all 0.3s ease;
        }

        .vm-card:hover p {
            color: var(--primary-brown);
        }

        /* Values Section */
        .values-section {
            padding: 6rem 0;
            background: linear-gradient(180deg, var(--bg-light) 0%, #ffffff 100%);
            position: relative;
        }

        .values-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('data:image/svg+xml,<svg width="60" height="60" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="dots" width="60" height="60" patternUnits="userSpaceOnUse"><circle cx="2" cy="2" r="1" fill="rgba(139,115,85,0.03)"/></pattern></defs><rect width="60" height="60" fill="url(%23dots)"/></svg>');
            opacity: 0.5;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2.5rem;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .value-card {
            background: linear-gradient(135deg, #ffffff 0%, var(--bg-light) 100%);
            padding: 3rem 2.5rem;
            border-radius: 24px;
            text-align: center;
            border: 1px solid rgba(184, 149, 106, 0.15);
            transition: all 0.4s ease;
            position: relative;
        }

        .value-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.5s ease;
        }

        .value-card:hover {
            transform: translateY(-12px);
            
            border-color: var(--accent-gold);
        }

        .value-card:hover::before {
            transform: scaleX(1);
            
        }

        .value-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, rgba(184, 149, 106, 0.15) 0%, rgba(138, 122, 104, 0.2) 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2.5rem;
            transition: all 0.4s ease;
            border: 1px solid rgba(184, 149, 106, 0.2);
        }

        .value-card:hover .value-icon {
            transform: scale(1.1);
        }

        .value-card h4 {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--primary-brown);
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }

        .value-card:hover h4 {
            color: var(--accent-gold-light);
        }

        .value-card p {
            font-size: 1.05rem;
            color: var(--text-gray);
            line-height: 1.9;
            transition: all 0.3s ease;
        }

        .value-card:hover p {
            color: var(--primary-brown);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .about-hero {
                padding: 6rem 0 8rem;
            }

            .hero-grid {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .hero-text {
                text-align: center;
            }

            .about-hero h1 {
                font-size: 3.2rem;
                letter-spacing: -1px;
            }

            .about-hero p {
                font-size: 1.1rem;
            }

            .hero-decoration {
                width: 320px;
                height: 320px;
            }

            .hero-center-icon {
                font-size: 5rem;
            }

            .floating-element {
                display: none;
            }

            .about-content-section {
                padding: 4rem 0 3rem;
            }

            .about-text-content {
                padding: 2rem 1.5rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .about-text p {
                font-size: 1.08rem;
                padding: 1.5rem;
            }

            .vision-mission-grid,
            .values-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .vm-card,
            .value-card {
                padding: 2.5rem 2rem;
            }
        }

        @media (min-width: 769px) and (max-width: 1024px) {
            .hero-grid {
                gap: 3rem;
            }

            .about-hero h1 {
                font-size: 4rem;
            }

            .hero-decoration {
                width: 350px;
                height: 350px;
            }

            .vision-mission-grid {
                grid-template-columns: 1fr;
            }

            .values-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-home scroll-reveal">
        <div class="hero-background">
            <div class="hero-shape hero-shape-1"></div>
            <div class="hero-shape hero-shape-2"></div>
            <div class="hero-shape hero-shape-3"></div>
        </div>
        <div class="hero-pattern"></div>

        <div class="hero-content-wrapper">
            <div class="hero-badge scroll-reveal">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                    <path d="M2 17l10 5 10-5"></path>
                    <path d="M2 12l10 5 10-5"></path>
                </svg>
                <span>من نحن</span>
            </div>

            <h1 class="scroll-reveal">
                <span class="hero-title-main">عن الوقف</span>

            </h1>

            <p class="scroll-reveal">وقف خيري تحت إشراف الهيئة العامة للأوقاف بترخيص رقم “2438“</p>

            <p class="scroll-reveal">مؤسسة خيرية تسعى لخدمة المجتمع من خلال برامج ومبادرات نوعية تهدف إلى نشر الخير والعلم
                في المجتمع</p>
            <div class="scroll-reveal">
                <br>
                <br>
            </div>
        </div>
    </section>

    <!-- About Content -->
    <section class="about-content-section">
        <div class="container">
            <div class="about-text">
                <div class="about-text-content">
                    <h2 class="section-title scroll-reveal">وقف المودة</h2>
                    <p class="scroll-reveal">
                        مؤسسة خيرية أُنشئت بهدف خدمة المجتمع من خلال مجموعة متنوعة من البرامج والمبادرات التي تهدف إلى نشر
                        الخير
                        والعلم في المجتمع. تأسس الوقف على مبادئ راسخة من القيم الإسلامية الأصيلة والتزام عميق بخدمة
                        الإنسانية.
                    </p>
                    <p class="scroll-reveal">
                        نؤمن في وقف المودة بأن العمل الخيري المستدام هو السبيل الأمثل لبناء مجتمع متماسك ومزدهر. ولهذا، نسعى
                        جاهدين لتقديم برامج ذات جودة عالية تلبي احتياجات المجتمع الحقيقية وتساهم في تحقيق التنمية الشاملة.
                    </p>
                    <p class="scroll-reveal">
                        من خلال فريق عمل متخصص ومتفاني، نعمل على تحقيق أهدافنا الاستراتيجية وتوسيع نطاق خدماتنا لتشمل المزيد
                        من
                        المستفيدين في مختلف المجالات.
                    </p>
                </div>
            </div>

            <!-- Vision and Mission -->
            <h2 class="section-title scroll-reveal">الرؤية والرسالة</h2>
            <div class="vision-mission-grid">
                <div class="vm-card scroll-reveal">
                    <div class="vm-icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" 
                        viewBox="0 0 24 24" fill="none" stroke="var(--primary-brown)" stroke-width="2" stroke-linecap="round" 
                        stroke-linejoin="round" class="lucide lucide-telescope-icon lucide-telescope">
                        <path d="m10.065 12.493-6.18 1.318a.934.934 0 0 1-1.108-.702l-.537-2.15a1.07 1.07 0 0 1 .691-1.265l13.504-4.44"/>
                        <path d="m13.56 11.747 4.332-.924"/><path d="m16 21-3.105-6.21"/>
                        <path d="M16.485 5.94a2 2 0 0 1 1.455-2.425l1.09-.272a1 1 0 0 1 1.212.727l1.515 6.06a1 1 0 0 1-.727 1.213l-1.09.272a2 2 0 0 1-2.425-1.455z"/>
                        <path d="m6.158 8.633 1.114 4.456"/><path d="m8 21 3.105-6.21"/><circle cx="12" cy="13" r="2"/></svg>
                    </div>
                    <h3>رؤيتنا</h3>
                    <p>
                        أن نكون وقفاً رائداً في العمل الخيري والتنموي، يساهم في بناء مجتمع متكامل يقوم على العلم والمودة
                        والتعاون، ونموذجاً يُحتذى به في الشفافية والحوكمة الرشيدة.
                    </p>
                </div>

                <div class="vm-card scroll-reveal">
                    <div class="vm-icon-wrapper">
                        <svg width="50" height="50" viewBox="0 0 64 64">
                            <circle cx="32" cy="32" r="22" stroke="var(--primary-brown)" stroke-width="4"
                                fill="none" />
                            <circle cx="32" cy="32" r="14" stroke="var(--primary-brown)" stroke-width="3"
                                fill="none" />
                            <circle cx="32" cy="32" r="4" fill="#5A3E1B" />
                            <line x1="10" y1="32" x2="32" y2="32" stroke="var(--primary-brown)"
                                stroke-width="3" />
                            <polygon points="32,28 38,32 32,36" fill="#8B5A2B" />
                        </svg>
                    </div>
                    <h3>رسالتنا</h3>
                    <p>
                        تقديم برامج ومبادرات خيرية نوعية تخدم المجتمع وتحقق التنمية المستدامة من خلال الاستثمار الأمثل
                        لموارد الوقف.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <h2 class="section-title scroll-reveal">قيمنا</h2>
            <div class="values-grid">
                <div class="value-card scroll-reveal" style="transition-delay: 0.1s;">
                    <div class="value-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" 
                        viewBox="0 0 24 24" fill="none" stroke="var(--primary-brown)" stroke-width="2" stroke-linecap="round" 
                        stroke-linejoin="round" class="lucide lucide-handshake-icon lucide-handshake">
                        <path d="m11 17 2 2a1 1 0 1 0 3-3"/>
                        <path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"/>
                        <path d="m21 3 1 11h-2"/><path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3"/><path d="M3 4h8"/></svg>
                    </div>
                    <h4>الأمانة</h4>
                    <p>نلتزم بأعلى معايير الأمانة في إدارة موارد الوقف وتنفيذ البرامج</p>
                </div>

                <div class="value-card scroll-reveal" style="transition-delay: 0.2s;">
                    <div class="value-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" 
                        viewBox="0 0 24 24" fill="none" stroke="var(--primary-brown)" stroke-width="2" stroke-linecap="round" 
                        stroke-linejoin="round" class="lucide lucide-shield-check-icon lucide-shield-check">
                        <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/>
                        <path d="m9 12 2 2 4-4"/></svg>
                    </div>
                    <h4>الجودة</h4>
                    <p>نسعى لتقديم أعلى مستويات الجودة في برامجنا وخدماتنا</p>
                </div>

                <div class="value-card scroll-reveal" style="transition-delay: 0.3s;">
                    <div class="value-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" 
                        viewBox="0 0 24 24" fill="none" stroke="var(--primary-brown)" stroke-width="2" stroke-linecap="round" 
                        stroke-linejoin="round" class="lucide lucide-sprout-icon lucide-sprout">
                        <path d="M14 9.536V7a4 4 0 0 1 4-4h1.5a.5.5 0 0 1 .5.5V5a4 4 0 0 1-4 4 4 4 0 0 0-4 4c0 2 1 3 1 5a5 5 0 0 1-1 3"/>
                        <path d="M4 9a5 5 0 0 1 8 4 5 5 0 0 1-8-4"/><path d="M5 21h14"/></svg>
                    </div>
                    <h4>الاستدامة</h4>
                    <p>نعمل على ضمان استدامة برامجنا وأثرها الإيجابي على المجتمع</p>
                </div>
            </div>
        </div>
    </section>

@endsection
