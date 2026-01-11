@extends('layouts.app')

@section('title', 'كلمة الواقف - وقف المودة')
@section('meta_description', 'كلمة الواقف - وقف المودة')

@section('content')
<style>

    .hero-icon {
        width: 100px;
        height: 100px;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 2rem;
        color: #ffffff;
        animation: float 3s ease-in-out infinite;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-10px);
        }
    }


/* Founder Content Section */
    .founder-content {
        padding: 6rem 0;
        background-color: var(--bg-light);
    }

    .founder-wrapper {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .founders-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 3rem;
        margin-bottom: 4rem;
    }

    .founder-card {
        background: #ffffff;
        padding: 3rem;
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .founder-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.12);
    }

    .founder-image {
        width: 180px;
        height: 180px;
        background: linear-gradient(135deg, var(--accent-gold) 0%, var(--accent-gold-light) 100%);
        border-radius: 50%;
        margin: 0 auto 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 4rem;
        color: #ffffff;
        box-shadow: 0 15px 50px rgba(139, 115, 85, 0.2);
        overflow: hidden;
    }

    .founder-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .founder-name {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--primary-brown-dark);
        margin-bottom: 0.5rem;
        line-height: 1.4;
    }

    .founder-title {
        font-size: 1.1rem;
        color: var(--text-gray);
        font-weight: 500;
        margin-bottom: 1.5rem;
    }

    .founder-bio {
        font-size: 1rem;
        line-height: 1.8;
        color: var(--text-dark);
        text-align: justify;
    }

    .founder-message {
        background: #ffffff;
        padding: 4rem;
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        border-right: 5px solid var(--accent-gold);
    }

    .message-header {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--primary-brown);
        margin-bottom: 2rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid rgba(139, 115, 85, 0.1);
        text-align: center;
    }

    .message-text {
        text-align: justify;
    }

    .message-text p {
        font-size: 1.2rem;
        line-height: 2.2;
        color: var(--text-dark);
        margin-bottom: 2rem;
    }

    .message-text .opening {
        font-style: italic;
        color: var(--primary-brown);
        font-weight: 500;
    }

    .message-text .closing {
        font-weight: 600;
        color: var(--primary-brown-dark);
        margin-top: 3rem;
        padding-top: 2rem;
        border-top: 1px solid rgba(139, 115, 85, 0.1);
    }

    .quote-box {
        background: linear-gradient(135deg, var(--bg-light) 0%, #ffffff 100%);
        border-right: 4px solid var(--accent-gold);
        padding: 2rem;
        margin: 2.5rem 0;
        border-radius: 8px;
    }

    .quote-box p {
        font-size: 1.3rem !important;
        font-style: italic;
        color: var(--primary-brown-dark);
        margin-bottom: 0 !important;
    }

    @media (max-width: 968px) {
        .founders-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
    }

    @media (max-width: 768px) {
        .hero-icon {
            width: 80px;
            height: 80px;
        }
        .founder-card {
            padding: 2rem;
        }

        .founder-message {
            padding: 1.1rem;
        }

        .message-text p {
            font-size: 1rem;
        }
    }
</style>

<!-- Hero Section -->
<section class="hero-section scroll-reveal">
    <div class="hero-pattern"></div>
    <div class="container">
        <div class="hero-section-wrapper">
            <div class="hero-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
            </div>
            <h1>كلمة الواقفين</h1>
            
            <p>رؤية وكلمة من مؤسسي وقف المودة</p>
            <div class="hero-scroll">
            </div>
        </div>
    </div>
</section>

<!-- Founder Content -->
<section class="founder-content">
    <div class="founder-wrapper">
        <!-- Founders Grid -->
        <div class="founders-grid">
            <!-- Founder 1 -->
            <div class="founder-card">
                <div class="founder-image">
                    <img src="/images/freeh_image.jpg" alt="المؤسس الأول">
                </div>
                <h2 class="founder-name">الشيخ/ فريح بن علي بن تركي العقلاء</h2>
                <p class="founder-title">رحمه الله</p>
                <p class="founder-bio">
                     كان من رواد العمل الخيري والوقفي في المملكة، وله بصمات واضحة في خدمة المجتمع ونشر الخير والعلم.
                </p>
            </div>

            <!-- Founder 2 -->
            <div class="founder-card">
                <div class="founder-image">
                    <img src="/images/founder2.jpg" alt="المؤسس الثاني">
                </div>
                <h2 class="founder-name">الشيخ/ عبد الرحمن أحمد العمودي</h2>
                <p class="founder-title">رحمه الله</p>
                <p class="founder-bio">
                     ساهم في تأسيس وقف المودة وتطويره ليكون منارة خير ونفع للمجتمع، ومؤسسة رائدة في العمل الخيري.
                </p>
            </div>
        </div>

        <!-- Shared Founder Message -->
        <div class="founder-message">
            <h3 class="message-header">كلمة الواقفين</h3>
            
            <div class="message-text">
                
            </div>
        </div>
    </div>
</section>
@endsection