@extends('layouts.app')

@section('title', 'وثائق الحوكمة' . ' - وقف المودة')

@section('content')

<style>
/* === SAME DESIGN AS activities.show === */

.activity-detail-hero {
    background: linear-gradient(135deg, #8B7355 0%, #A68968 100%);
    padding: 6rem 0;
    position: relative;
    overflow: hidden;
}

.activity-detail-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    opacity: 0.05;
    background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="2" fill="white"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
}

.activity-detail-content {
    max-width: 1000px;
    margin: 0 auto;
    padding: 0 2rem;
    position: relative;
    z-index: 1;
}

.activity-hero-grid {
    display: grid;
    grid-template-columns: 180px 1fr;
    gap: 3rem;
    align-items: center;
}

/* Icon */
.activity-hero-icon {
    width: 180px;
    height: 180px;
    background: #ffffff;
    border-radius: 24px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.25);
    display: flex;
    align-items: center;
    justify-content: center;
}

.activity-hero-icon img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

/* Text */
.activity-hero-text h1 {
    font-size: 3.5rem;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 1rem;
}

.activity-hero-text p {
    font-size: 1.3rem;
    color: rgba(255,255,255,0.95);
    line-height: 2;
}

/* Sections */
.governance-section {
    padding: 5rem 0;
    background: #f8f9fb;
}

.governance-title {
    text-align: center;
    font-size: 2.8rem;
    font-weight: 800;
    color: #2c2c2c;
    margin-bottom: 1rem;
}

.governance-subtitle {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 3.5rem;
    color: #666;
    font-size: 1.1rem;
}

.governance-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 2rem;
}

.governance-card {
    background: #ffffff;
    padding: 2.5rem 2rem;
    border-radius: 14px;
    text-decoration: none;
    color: inherit;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
    transition: all 0.3s ease;
    position: relative;
    border-top: 5px solid var(--accent-gold);
}

.governance-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 45px rgba(0, 0, 0, 0.1);
}

.governance-card .icon {
    font-size: 2.5rem;
    margin-bottom: 1.2rem;
}

.governance-card h3 {
    font-size: 1.4rem;
    margin-bottom: 0.8rem;
    color: var(--primary-brown);
}

.governance-card p {
    font-size: 0.95rem;
    color: #666;
    line-height: 1.8;
}

.governance-card .status {
    position: absolute;
    top: 1rem;
    left: 1rem;
    background: #f0f0f0;
    color: #999;
    font-size: 0.75rem;
    padding: 0.3rem 0.7rem;
    border-radius: 20px;
}


/* Mobile */
@media (max-width: 768px) {
    .activity-hero-grid {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .activity-hero-icon {
        margin: 0 auto 2rem;
    }
}
</style>


<section class="governance-section">
    <div class="container">
        <h1 class="governance-title">وثائق الحوكمة</h1>
        <p class="governance-subtitle">
            الأطر والسياسات التي تنظم أعمال وقف المودة وتضمن الشفافية والامتثال
        </p>

        <div class="governance-cards">

            @foreach ($governanceContent as $item)
                <a href="{{ $item['route'] }}" class="governance-card">
                    <div class="icon">{{ $item['icon'] }}</div>
                    <h3>{{ $item['title'] }}</h3>
                    <p>{{ $item['description'] }}</p>
                    
                </a>
            @endforeach

        </div>
    </div>
</section>

@endsection
