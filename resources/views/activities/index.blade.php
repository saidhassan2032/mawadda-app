@extends('layouts.app')

@section('title', 'أنشطة الوقف - وقف المودة')
@section('meta_description', 'تعرف على أنشطة وبرامج وقف المودة الخيرية')

@section('content')
<style>
/* Activities List Section */
.activities-list {
    padding: 6rem 0 8rem;
    background-color: var(--bg-light);
    position: relative;
    margin-top: -4rem;
    overflow: hidden;
}

.activities-list::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 200px;
    background: linear-gradient(180deg, var(--bg-light) 0%, transparent 100%);
    pointer-events: none;
}

.activities-list::after {
    content: '';
    position: absolute;
    inset: 0;
    background: url('data:image/svg+xml,<svg width="60" height="60" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="dots" width="60" height="60" patternUnits="userSpaceOnUse"><circle cx="2" cy="2" r="1" fill="rgba(139,115,85,0.03)"/></pattern></defs><rect width="60" height="60" fill="url(%23dots)"/></svg>');
    opacity: 0.5;
}

.activities-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
    gap: 3rem;
    max-width: 1400px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}

/* Activity Card */
.activity-card {
    background: #ffffff;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 
        0 20px 40px rgba(0, 0, 0, 0.08),
        0 0 0 1px rgba(184, 149, 106, 0.1);
    transition: all 0.4s ease;
    position: relative;
}

.activity-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--card-gradient);
    transform: scaleX(0);
    transform-origin: right;
    transition: transform 0.5s ease;
    z-index: 2;
}

.activity-card:hover {
    transform: translateY(-12px);
    box-shadow: 
        0 35px 70px rgba(0, 0, 0, 0.15),
        0 0 0 1px rgba(184, 149, 106, 0.3);
}

.activity-card:hover::before {
    transform: scaleX(1);
    transform-origin: left;
}

/* Activity Header with Image */
.activity-header {
    position: relative;
    overflow: hidden;
    min-height: 350px;
    padding-top: calc(2rem + 80px + 2rem);
    padding-right: 2.5rem;
    padding-left: 2.5rem;
    padding-bottom: 3.5rem;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
}

.activity-header::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.75) 100%);
    z-index: 1;
}

.activity-header::after {
    content: '';
    position: absolute;
    inset: 0;
    background: url('data:image/svg+xml,<svg width="60" height="60" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="dots" width="60" height="60" patternUnits="userSpaceOnUse"><circle cx="2" cy="2" r="1" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="60" height="60" fill="url(%23dots)"/></svg>');
    opacity: 0.3;
    z-index: 1;
}

.activity-header h2 {
    font-size: 2.4rem;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 0.8rem;
    position: relative;
    z-index: 2;
    text-shadow: 0 3px 15px rgba(0, 0, 0, 0.4);
    letter-spacing: -0.5px;
}

.activity-header h3 {
    font-size: 1.4rem;
    font-weight: 600;
    color: var(--accent-gold-light);
    margin-bottom: 1.5rem;
    position: relative;
    z-index: 2;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
}

.activity-header p {
    font-size: 1.15rem;
    color: rgba(255, 255, 255, 0.95);
    line-height: 1.9;
    position: relative;
    z-index: 2;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
}

/* Activity Body */
.activity-body {
    padding: 2.8rem;
    background: linear-gradient(180deg, #ffffff 0%, #fafafa 100%);
    position: relative;
    z-index: 2;
}

.activity-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.8rem;
    padding: 1.2rem 3rem;
    color: #ffffff;
    text-decoration: none;
    font-weight: 700;
    font-size: 1.1rem;
    border-radius: 14px;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 
        0 8px 20px rgba(0, 0, 0, 0.15),
        0 4px 8px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
    letter-spacing: 0.3px;
}

.activity-link::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0) 100%);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.activity-link::after {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at center, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.activity-link:hover {
    transform: translateY(-3px) scale(1.02);
    box-shadow: 
        0 15px 35px rgba(0, 0, 0, 0.25),
        0 8px 15px rgba(0, 0, 0, 0.15);
    color: #ffffff;
}

.activity-link:hover::before {
    opacity: 1;
}

.activity-link:hover::after {
    opacity: 1;
}

.activity-link span {
    position: relative;
    z-index: 1;
}

.activity-link svg {
    position: relative;
    z-index: 1;
    transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.activity-link:hover svg {
    transform: translateX(-5px);
}

/* Icon Badge on Cards */
.activity-icon {
    position: absolute;
    top: 2rem;
    right: 2rem;
    width: 80px;
    height: 80px;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border-radius: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: visible;
    z-index: 2;
    border: 3px solid rgba(255, 255, 255, 0.9);
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
    transition: all 0.4s ease;
}

.activity-icon::before {
    content: '';
    position: absolute;
    inset: -4px;
    background: var(--card-gradient);
    border-radius: 20px;
    opacity: 0;
    transition: opacity 0.4s ease;
    z-index: -1;
}

.activity-icon::after {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 18px;
    overflow: hidden;
    z-index: 1;
}

.activity-icon img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
    border-radius: 15px;
}

.activity-card:hover .activity-icon {
    transform: scale(1.1);
    border-color: transparent;
}

.activity-card:hover .activity-icon::before {
    opacity: 1;
}

.activity-card:hover .activity-icon img {
    transform: scale(1.15);
}

/* Responsive */
@media (max-width: 768px) {
    .activities-hero {
        padding: 5rem 0 7rem;
    }

    .activities-hero h1 {
        font-size: 3rem;
        letter-spacing: -1px;
    }

    .activities-hero p {
        font-size: 1.15rem;
    }

    .activities-list {
        padding: 4rem 0 5rem;
        margin-top: -3rem;
    }

    .activities-grid {
        grid-template-columns: 1fr;
        gap: 2.5rem;
    }

    .activity-header {
        padding-top: calc(2rem + 65px + 1.5rem);
        padding-left: 2rem;
        padding-right: 2rem;
        padding-bottom: 2.5rem;
        min-height: 300px;
    }

    .activity-header h2 {
        font-size: 2rem;
    }

    .activity-header h3 {
        font-size: 1.2rem;
    }

    .activity-header p {
        font-size: 1.05rem;
    }

    .activity-body {
        padding: 2rem;
    }

    .activity-link {
        width: 100%;
        padding: 1.1rem 2rem;
        font-size: 1.05rem;
    }

    .activity-icon {
        width: 65px;
        height: 65px;
        font-size: 1.8rem;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    .activities-hero h1 {
        font-size: 4.5rem;
    }

    .activities-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-pattern"></div>
    <div class="hero-section-wrapper">
        <div class="hero-badge scroll-reveal">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
            </svg>
            <span>برامجنا ومبادراتنا</span>
        </div>
        
        <h1 class="scroll-reveal">أنشطة الوقف</h1>
        <p class="scroll-reveal">
            نسعى من خلال برامجنا المتنوعة إلى خدمة المجتمع وتحقيق أهداف الوقف النبيلة
        </p>
    </div>
</section>

<!-- Activities List -->
<section class="activities-list">
    <div class="container">
        <div class="activities-grid">
            @foreach($activities as $index => $activity)
            <div class="activity-card scroll-reveal" 
                 style="--card-gradient: linear-gradient(90deg, {{ $activity['color_from'] }} 0%, {{ $activity['color_to'] }} 100%); transition-delay: {{ $index * 0.1 }}s;">
                <div class="activity-header" style="
                    background:
                    linear-gradient(
                        rgba(0, 0, 0, 0.45),
                        rgba(0,0,0,0.45)
                    ),
                    url('/images/{{ $activity['image'] }}') center / cover no-repeat;
                ">
                    <div class="activity-icon">
                        <img src="/images/{{ $activity['image'] }}" alt="{{ $activity['title'] }}">
                    </div>
                    <h2>{{ $activity['title'] }}</h2>
                    <h3>{{ $activity['subtitle'] }}</h3>
                    <p>{{ $activity['description'] }}</p>
                </div>
                <div class="activity-body">
                    <a href="{{ route('activities.show', ['slug' => $activity['slug']]) }}" class="activity-link" 
                        style="background: linear-gradient(135deg, {{ $activity['color_from'] }} 0%, {{ $activity['color_to'] }} 100%);">
                        <span>اعرف المزيد</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection