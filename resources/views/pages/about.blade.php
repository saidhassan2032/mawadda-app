@extends('layouts.app')

@section('title', 'عن الوقف - وقف المودة')
@section('meta_description', 'تعرف على وقف المودة، رؤيتنا، رسالتنا، وقيمنا')

@section('content')
    <style>
        .about-text {
            max-width: 100%;
            margin: 20px auto 5rem;
            padding: 4rem 3rem;
            background: linear-gradient(135deg,
                    rgba(255, 255, 255, 0.95) 0%,
                    rgba(248, 247, 245, 0.9) 100%);
            border-radius: 20px;
            border: 3px solid rgba(139, 115, 85, 0.15);
            box-shadow:
                0 10px 40px rgba(139, 115, 85, 0.1),
                0 20px 60px rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }

        .about-text::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle,
                    rgba(184, 149, 106, 0.08) 0%,
                    transparent 70%);
            border-radius: 50%;
        }

        .about-text::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 250px;
            height: 250px;
            background: radial-gradient(circle,
                    rgba(139, 115, 85, 0.06) 0%,
                    transparent 70%);
            border-radius: 50%;
        }

        .about-text .section-title {
            font-size: 2.8rem;
            font-weight: 700;
            color: var(--primary-brown);
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
            padding-bottom: 1.5rem;
        }

        .about-text .section-title::after {
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

        .about-text .section-title::before {
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
            color: #3a3a3a;
            font-weight: 500;
            letter-spacing: 0.3px;
            text-align: right;
            margin-bottom: 2rem;
            padding: 2rem 2.5rem;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 12px;
            border-right: 4px solid var(--accent-gold);
            position: relative;
            z-index: 1;
            transition: all 0.3s ease;
        }


        .about-text p:nth-child(3) {
            border-right: none;
            border-left: 4px solid var(--primary-brown);
        }



        .about-text p:nth-child(4) {
            border-right-color: var(--primary-brown-dark);
            background: rgba(248, 247, 245, 0.7);
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


        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .about-text {
            animation: fadeInScale 0.8s ease-out;
        }

        .about-text p {
            animation: fadeInUp 0.8s ease-out backwards;
        }

        .about-text p:nth-child(2) {
            animation-delay: 0.2s;
        }

        .about-text p:nth-child(3) {
            animation-delay: 0.4s;
        }

        .about-text p:nth-child(4) {
            animation-delay: 0.6s;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .vision-mission-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 3rem;
            max-width: 1200px;
            margin: 40px auto;
        }

        .vm-card {
            background: linear-gradient(135deg, #ffffff 0%, var(--bg-light) 100%);
            padding: 3rem;
            border-radius: 12px;
            border-top: 5px solid var(--accent-gold);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .vm-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.12);
        }

        .vm-card h3 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-brown);
            margin-bottom: 1.5rem;
        }

        .vm-card p {
            font-size: 1.15rem;
            line-height: 2;
            color: var(--text-dark);
        }

        .values-section {
            padding: 6rem 0;
            background-color: var(--bg-light);
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .value-card {
            background: #ffffff;
            padding: 2.5rem;
            border-radius: 12px;
            text-align: center;
            border: 1px solid rgba(139, 115, 85, 0.1);
            transition: all 0.3s ease;
        }

        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-color: var(--accent-gold);
        }

        .value-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--accent-gold) 0%, var(--accent-gold-light) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2.5rem;
        }

        .value-card h4 {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--primary-brown);
            margin-bottom: 1rem;
        }

        .value-card p {
            font-size: 1.05rem;
            color: var(--text-gray);
            line-height: 1.8;
        }

        @media (max-width: 768px) {


            .about-text {
                padding: 2rem 1.5rem;
                border-width: 2px;
                font-size: 1.9rem;
            }

            .section-title {
                font-size: 1.9rem;
            }

            .about-text p {
                font-size: 1.08rem;
                padding: 1.2rem 1.5rem;
            }

            .about-hero h1 {
                font-size: 2.5rem;
            }

            .vision-mission-grid,
            .values-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <!-- About Content -->
    <section class="about-content-section">
        <div class="container">
            <div class="about-text">
                <h2 class="section-title scroll-reveal">وقف المودة</h2>
                <p>
                    مؤسسة خيرية أُنشئت بهدف خدمة المجتمع من خلال مجموعة متنوعة من البرامج والمبادرات التي تهدف إلى نشر الخير
                    والعلم في المجتمع. تأسس الوقف على مبادئ راسخة من القيم الإسلامية الأصيلة والتزام عميق بخدمة الإنسانية.
                </p>
                <p>
                    نؤمن في وقف المودة بأن العمل الخيري المستدام هو السبيل الأمثل لبناء مجتمع متماسك ومزدهر. ولهذا، نسعى
                    جاهدين لتقديم برامج ذات جودة عالية تلبي احتياجات المجتمع الحقيقية وتساهم في تحقيق التنمية الشاملة.
                </p>
                <p>
                    من خلال فريق عمل متخصص ومتفاني، نعمل على تحقيق أهدافنا الاستراتيجية وتوسيع نطاق خدماتنا لتشمل المزيد من
                    المستفيدين في مختلف المجالات.
                </p>
            </div>

            <!-- Vision and Mission -->
            <h2 class="section-title scroll-reveal">الرؤية والرسالة</h2>
            <div class="vision-mission-grid scroll-reveal-right">
                <div class="vm-card">
                    <div style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <svg width="70" height="70" viewBox="0 0 64 64">

                            <!-- telescope body -->
                            <rect x="16" y="22" width="36" height="10" rx="4"
                                    transform="rotate(-15 16 22)"
                                    fill="#8B5A2B"/>

                            <!-- eyepiece -->
                            <circle cx="18" cy="28" r="5" fill="#5A3E1B"/>

                            <!-- lens -->
                            <circle cx="50" cy="28" r="6" fill="#C19A6B"/>

                            <!-- tripod center -->
                            <line x1="32" y1="36" x2="32" y2="56"
                                    stroke="#8B5A2B" stroke-width="4"/>

                            <!-- tripod legs -->
                            <line x1="32" y1="36" x2="22" y2="56"
                                    stroke="#8B5A2B" stroke-width="4"/>
                            <line x1="32" y1="36" x2="42" y2="56"
                                    stroke="#8B5A2B" stroke-width="4"/>

                            </svg>
 
                    </div>
                    <h3>رؤيتنا</h3>
                    <p>
                        أن نكون وقفاً رائداً في العمل الخيري والتنموي، يساهم في بناء مجتمع متكامل يقوم على العلم والمودة
                        والتعاون، ونموذجاً يُحتذى به في الشفافية والحوكمة الرشيدة.
                    </p>
                </div>

                <div class="vm-card">
                    <div style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <svg width="70" height="70" viewBox="0 0 64 64">

                            <!-- outer circle -->
                            <circle cx="32" cy="32" r="22"
                                    stroke="#8B5A2B" stroke-width="4" fill="none"/>

                            <!-- middle circle -->
                            <circle cx="32" cy="32" r="14"
                                    stroke="#8B5A2B" stroke-width="3" fill="none"/>

                            <!-- center -->
                            <circle cx="32" cy="32" r="4" fill="#5A3E1B"/>

                            <!-- arrow -->
                            <line x1="10" y1="32" x2="32" y2="32"
                                    stroke="#8B5A2B" stroke-width="3"/>
                            <polygon points="32,28 38,32 32,36"
                                    fill="#8B5A2B"/>

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
            <div class="values-grid scroll-reveal" style="transition-delay: {{ 0.1 }}s;">
                <div class="value-card">
                    <div class="value-icon">🤝</div>
                    <h4>الأمانة</h4>
                    <p>نلتزم بأعلى معايير الأمانة في إدارة موارد الوقف وتنفيذ البرامج</p>
                </div>


                <div class="value-card">
                    <div class="value-icon">🎯</div>
                    <h4>الجودة</h4>
                    <p>نسعى لتقديم أعلى مستويات الجودة في برامجنا وخدماتنا</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">🌱</div>
                    <h4>الاستدامة</h4>
                    <p>نعمل على ضمان استدامة برامجنا وأثرها الإيجابي على المجتمع</p>
                </div>
            </div>
        </div>
    </section>
@endsection
