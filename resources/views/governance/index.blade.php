@extends('layouts.app')

@section('title', 'وثائق الحوكمة' . ' - وقف المودة')

@section('content')

<style>

.governance-hero-content {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 2rem;
    position: relative;
    z-index: 1;
}

/* Grid Layout */
.hero-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 5rem;
    align-items: center;
}

.hero-text {
    text-align: right;
}

/* Badge with glow */
.governance-badge {
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

@keyframes badge-glow {
    0%, 100% {
        box-shadow: 0 8px 32px rgba(184, 149, 106, 0.15);
    }
    50% {
        box-shadow: 0 8px 40px rgba(184, 149, 106, 0.3);
    }
}

.governance-badge svg {
    filter: drop-shadow(0 2px 4px rgba(184, 149, 106, 0.4));
}


/* Decorative Element */
.hero-visual {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.hero-decoration {
    position: relative;
    width: 450px;
    height: 450px;
}

.deco-circle {
    position: absolute;
    border-radius: 50%;
    border: 2px solid;
    animation: rotate-slow 15s linear infinite;
}

.deco-circle-1 {
    width: 100%;
    height: 100%;
    border-color: rgba(226, 221, 214, 0.2);
    animation-direction: normal;
}

.deco-circle-2 {
    width: 85%;
    height: 85%;
    top: 7.5%;
    left: 7.5%;
    border-color: rgba(226, 221, 214, 0.2);
    border-style: dashed;
    animation-direction: reverse;
    animation-duration: 20s;
}

.deco-circle-3 {
    width: 70%;
    height: 70%;
    top: 15%;
    left: 15%;
    border-color: rgba(226, 221, 214, 0.2);
    animation-duration: 25s;
}

@keyframes rotate-slow {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}

.hero-center-icon {
    position: absolute;
    top: 55%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 8rem;
    filter: drop-shadow(0 20px 60px rgba(184, 149, 106, 0.4));
    animation: pulse-icon 3s ease-in-out infinite;
}

@keyframes pulse-icon {
    0%, 100% {
        transform: translate(-50%, -50%) scale(1);
    }
    50% {
        transform: translate(-50%, -50%) scale(1.05);
    }
}

/* Floating Elements */
.floating-element {
    position: absolute;
    background: rgba(184, 149, 106, 0.1);
    border: 1px solid rgba(184, 149, 106, 0.2);
    backdrop-filter: blur(10px);
    border-radius: 16px;
    padding: 1.5rem;
    animation: float-element 6s ease-in-out infinite;
}

.floating-element-1 {
    top: 10%;
    left: 5%;
    animation-delay: 0s;
}

.floating-element-2 {
    top: 60%;
    left: -5%;
    animation-delay: 2s;
}

.floating-element-3 {
    bottom: 15%;
    left: 10%;
    animation-delay: 4s;
}

@keyframes float-element {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-20px);
    }
}

.floating-element svg {
    width: 30px;
    height: 30px;
    color: var(--accent-gold-light);
    opacity: 0.8;
}

/* Main Section */
.governance-section {
    padding: 6rem 0 8rem;
    background-color: var(--bg-light);
    position: relative;
    margin-top: -4rem;
    overflow: hidden;
}

.governance-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 200px;
    background: linear-gradient(180deg, var(--bg-light) 0%, transparent 100%);
    pointer-events: none;
}

.governance-section::after {
    content: '';
    position: absolute;
    inset: 0;
    background: url('data:image/svg+xml,<svg width="60" height="60" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="dots" width="60" height="60" patternUnits="userSpaceOnUse"><circle cx="2" cy="2" r="1" fill="rgba(139,115,85,0.03)"/></pattern></defs><rect width="60" height="60" fill="url(%23dots)"/></svg>');
    opacity: 0.5;
}

.governance-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 2rem;
    position: relative;
    z-index: 1;
}

/* Cards Grid */
.governance-cards {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
    gap: 2.5rem;
}

.governance-card {
    background: linear-gradient(135deg, #ffffff 0%, var(--bg-light) 100%);
    border-radius: 24px;
    padding: 3rem 2.5rem;
    text-decoration: none;
    color: inherit;
    box-shadow: 
        0 15px 30px rgba(100, 99, 99, 0.3),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(184, 149, 106, 0.15);
    transition: all 0.4s ease;
    position: relative;
}

.governance-card::before {
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

.governance-card::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(196, 180, 159, 0.2) 0%, transparent 80%);
    opacity: 0;
    transform: translate(-50%, -50%);
    transition: opacity 0.5s ease;
    pointer-events: none;
}

.governance-card:hover {
    transform: translateY(-12px) scale(1.02);
    box-shadow: 
        0 30px 80px rgba(162, 159, 159, 0.6),
        0 0 0 1px rgba(184, 149, 106, 0.3),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
    border-color: var(--accent-gold);
}

.governance-card:hover::before {
    transform: scaleX(1);
    transform-origin: left;
}

.governance-card:hover::after {
    opacity: 1;
}

/* Icon - Glowing Effect */
.governance-icon-wrapper {
    width: 85px;
    height: 85px;
    background: linear-gradient(135deg, rgba(184, 149, 106, 0.15) 0%, rgba(138, 122, 104, 0.2) 100%);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 2rem;
    transition: all 0.4s ease;
    position: relative;
    border: 1px solid rgba(184, 149, 106, 0.2);
}

.governance-icon-wrapper::before {
    content: '';
    position: absolute;
    inset: -2px;
    border-radius: 20px;
    opacity: 0;
    transition: opacity 0.4s ease;
    z-index: -1;
}

.governance-card:hover .governance-icon-wrapper {
    transform: scale(1.1);
}

.governance-card:hover .governance-icon-wrapper::before {
    opacity: 0.5;
    filter: blur(20px);
}

.governance-icon {
    color: var(--primary-brown);  
    font-size: 2.5rem;
    transition: all 0.4s ease;
}

.governance-card:hover .governance-icon {
    transform: scale(1.1);
    filter: drop-shadow(0 6px 12px rgba(184, 149, 106, 0.5));
}

/* Content */
.governance-card-content {
    position: relative;
    z-index: 1;
}

.governance-card h3 {
    font-size: 1.6rem;
    font-weight: 700;
    color: var(--primary-brown);
    margin-bottom: 1rem;
    line-height: 1.4;
    transition: all 0.3s ease;
}

.governance-card:hover h3 {
    color: var(--accent-gold-light);
    text-shadow: 0 0 20px rgba(184, 149, 106, 0.4);
}

.governance-card p {
    font-size: 1.05rem;
    color: var(--text-gray);
    line-height: 1.9;
    margin-bottom: 1.5rem;
}

.governance-card:hover p {
    color: var(--primary-brown);
}

/* Arrow Icon */
.card-arrow {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--accent-gold);
    font-weight: 600;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    padding: 0.6rem 1.2rem;
    background: rgba(184, 149, 106, 0.1);
    border-radius: 8px;
    border: 1px solid rgba(184, 149, 106, 0.2);
}

.governance-card:hover .card-arrow {
    gap: 1rem;
    background: rgba(184, 149, 106, 0.2);
    border-color: var(--accent-gold);
    box-shadow: 0 4px 20px rgba(184, 149, 106, 0.3);
    color: var(--accent-gold-light);
}

.card-arrow svg {
    transition: transform 0.3s ease;
    filter: drop-shadow(0 2px 4px rgba(184, 149, 106, 0.4));
}

.governance-card:hover .card-arrow svg {
    transform: translateX(-4px);
}

/* Status Badge (if needed) */
.governance-status {
    position: absolute;
    top: 1.5rem;
    left: 1.5rem;
    background: linear-gradient(135deg, rgba(184, 149, 106, 0.1) 0%, rgba(184, 149, 106, 0.15) 100%);
    color: var(--primary-brown);
    font-size: 0.8rem;
    font-weight: 600;
    padding: 0.4rem 1rem;
    border-radius: 20px;
    backdrop-filter: blur(10px);
}

/* Feature List */
.governance-features {
    margin-top: 1.5rem;
    padding-top: 1.5rem;
    border-top: 1px solid rgba(184, 149, 106, 0.15);
}

.governance-feature-item {
    display: flex;
    align-items: center;
    gap: 0.7rem;
    font-size: 0.95rem;
    color: var(--text-gray);
    margin-bottom: 0.6rem;
}

.governance-feature-item:last-child {
    margin-bottom: 0;
}

.feature-check {
    width: 20px;
    height: 20px;
    background: linear-gradient(135deg, var(--accent-gold) 0%, var(--accent-gold-light) 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.feature-check svg {
    width: 12px;
    height: 12px;
    stroke: #ffffff;
}

/* Responsive */
@media (max-width: 768px) {

    .hero-grid {
        grid-template-columns: 1fr;
        gap: 3rem;
    }

    .hero-text {
        text-align: center;
    }


    .hero-decoration {
        width: 320px;
        height: 320px;
    }

    .hero-center-icon {
        font-size: 3rem;
    }

    .floating-element {
        display: none;
    }

    .governance-section {
        padding: 4rem 0 5rem;
        margin-top: -3rem;
    }

    .governance-cards {
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    .governance-card {
        padding: 2.5rem 2rem;
    }

    .governance-card h3 {
        font-size: 1.4rem;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    .hero-grid {
        gap: 3rem;
    }


    .hero-decoration {
        width: 350px;
        height: 350px;
    }

    .governance-cards {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-pattern"></div>
    <div class="governance-hero-content">
        <div class="hero-grid">
            <div class="hero-text">
                <div class="governance-badge scroll-reveal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                        <path d="M2 17l10 5 10-5"></path>
                        <path d="M2 12l10 5 10-5"></path>
                    </svg>
                    <span>الإطار التنظيمي والمؤسسي</span>
                </div>
                
                <h1 class="scroll-reveal">وثائق<br>الحوكمة</h1>
                <p class="scroll-reveal">
                    الأطر والسياسات التي تنظم أعمال وقف المودة وتضمن الشفافية والامتثال وأفضل الممارسات المؤسسية
                </p>
            </div>
            
            <div class="hero-visual scroll-reveal-scale">
                <div class="hero-decoration">
                    <div class="deco-circle deco-circle-1"></div>
                    <div class="deco-circle deco-circle-2"></div>
                    <div class="deco-circle deco-circle-3"></div>
                    
                    <div class="hero-center-icon">
                        <svg fill="var(--accent-gold-light" width="150px" height="150px" 
                        viewBox="-2 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg">
                        <path d="M14.427 14.75v.491H.573v-.49a.476.476 0 0 1 .475-.476h.411a.497.497 0 0 1-.002-.048v-.443a.476.476 0 0 1 .475-.475h.41V9.692h-.307a.554.554 0 1 1 0-1.108h10.963a.554.554 0 1 1 0 1.108h-.292v3.617h.362a.476.476 0 0 1 .475.475v.443a.364.364 0 0 1-.003.048h.412a.476.476 0 0 1 .475.475zm-1.72-7.043a5.182 5.182 0 1 0-10.364 0zm-9.188 5.602h1.109v-3.062a.554.554 0 1 0-1.109 0zm2.294-3.053v3.053h1.109v-3.053a.554.554 0 1 0-1.109 0zm2.294.008v3.045h1.109v-3.045a.554.554 0 1 0-1.109 0zm2.294.008v3.037h1.109v-3.037a.554.554 0 0 0-1.109 0z"/></svg>
                    </div>
                    
                    <div class="floating-element floating-element-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 11l3 3L22 4"></path>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg>
                    </div>
                    
                    <div class="floating-element floating-element-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                            <path d="M2 17l10 5 10-5"></path>
                        </svg>
                    </div>
                    
                    <div class="floating-element floating-element-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 6v6l4 2"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="governance-section">
    <div class="governance-container">
        <div class="governance-cards">
            @foreach ($governanceContent as $index => $item)
                <a href="{{ $item['route'] }}" class="governance-card scroll-reveal" style="transition-delay: {{ $index * 0.1 }}s;">
                    <div class="governance-icon-wrapper">
                        <div class="governance-icon">{!! $item['icon'] !!}</div>
                    </div>
                    
                    <div class="governance-card-content">
                        <h3>{{ $item['title'] }}</h3>
                        <p>{{ $item['description'] }}</p>
                        
                        <div class="card-arrow">
                            <span>عرض الوثيقة</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

@endsection