@extends('layouts.app')

@section('title', $activity['title'] . ' - وقف المودة')
@section('meta_description', $activity['description'])

@section('content')
<style>
    .activity-detail-hero {
        background: linear-gradient(135deg, {{ $activity['color_from'] }} 0%, {{ $activity['color_to'] }} 100%);
        padding: 6rem 0;
        position: relative;
        overflow: hidden;
        
    }

    .activity-detail-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0.05;
        background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="2" fill="white"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
    }

    .activity-hero-grid {
        display: grid;
        grid-template-columns: 180px 1fr;
        gap: 3rem;
        align-items: center;
    }

    /* Icon container */
    .activity-hero-icon {
        width: 180px;
        height: 180px;
        background: #ffffff;
        border-radius: 24px;
        padding: 0.5rem;
        box-shadow: 0 15px 40px rgba(0,0,0,0.25);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Icon image */
    .activity-hero-icon img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    .activity-detail-content {
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 2rem;
        position: relative;
        z-index: 1;
    }

    .activity-hero-text h1 {
        font-size: 3.5rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 1rem;
    }

    .activity-hero-text h2 {
        font-size: 1.8rem;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.95);
        margin-bottom: 2rem;
    }

    .activity-hero-text p {
        font-size: 1.3rem;
        color: rgba(255, 255, 255, 0.9);
        line-height: 2;
    }

    .detail-section {
        padding: 5rem 0;
    }

    .detail-section:nth-child(even) {
        background-color: var(--bg-light);
    }

    .detail-content {
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .detail-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--activity-color);
        filter: brightness(0.8);
        margin-bottom: 2.5rem;
        position: relative;
        padding-bottom: 1rem;
    }

    .detail-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width: 100px;
        height: 3px;
        background-color: var(--activity-color);
    }

    .detail-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
    }

    .detail-item {
        background: #ffffff;
        padding: 2rem;
        border-radius: 10px;
        border-right: 4px solid var(--activity-color);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .detail-item:hover {
        transform: translateX(-5px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    }

    .detail-item::before {
        content: '✓';
        display: inline-block;
        width: 30px;
        height: 30px;
        background-color: var(--activity-color);
        color: #ffffff;
        border-radius: 50%;
        text-align: center;
        line-height: 30px;
        font-weight: bold;
        margin-left: 1rem;
        float: right;
    }

    .detail-item p {
        font-size: 1.1rem;
        color: var(--text-dark);
        line-height: 1.8;
        margin: 0;
    }

    .info-box {
        background: linear-gradient(135deg, #ffffff 0%, var(--bg-light) 100%);
        padding: 2.5rem;
        border-radius: 12px;
        border: 1px solid rgba(139, 115, 85, 0.1);
        margin-top: 3rem;
    }

    .info-row {
        display: flex;
        align-items: center;
        padding: 1.5rem 0;
        border-bottom: 1px solid rgba(139, 115, 85, 0.1);
    }

    .info-row:last-child {
        border-bottom: none;
    }

    .info-label {
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--activity-color);
        min-width: 150px;
    }

    .info-value {
        font-size: 1.1rem;
        color: var(--text-gray);
    }

    .back-link {
        display: inline-block;
        padding: 1rem 2rem;
        background-color: var(--activity-color);
        color: #ffffff;
        text-decoration: none;
        font-weight: 600;
        border-radius: 8px;
        transition: all 0.3s ease;
        margin-top: 2rem;
    }

    .back-link:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
        filter: brightness(0.9);
        color: #ffffff;
    }

    @media (max-width: 768px) {
        .activity-detail-hero h1 {
            font-size: 2.5rem;
        }
        .activity-hero-grid {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .activity-hero-icon {
            margin: 0 auto 2rem;
        }

        .detail-list {
            grid-template-columns: 1fr;
        }

        .info-row {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.5rem;
        }
    }
</style>

<!-- Hero Section -->
<section class="activity-detail-hero" >
    <div class="activity-detail-content activity-hero-grid">

        <div class="activity-hero-icon">
            <img src="/images/{{ $activity['image'] }}" alt="مجمع المودة">
        </div>

        <div class="activity-hero-text">
            <h1>{{ $activity['title'] }}</h1>
            <h2>{{ $activity['subtitle'] }}</h2>
            <p>{{ $activity['description'] }}</p>
        </div>

    </div>
</section>

<!-- Objectives Section -->
<section class="detail-section">
    <div class="detail-content">
        <h3 class="detail-title" style="--activity-color: {{ $activity['color_from'] }};">أهداف البرنامج</h3>
        <div class="detail-list">
            @foreach($activity['objectives'] as $objective)
            <div class="detail-item" style="--activity-color: {{ $activity['color_from'] }};">
                <p>{{ $objective }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="detail-section">
    <div class="detail-content">
        <h3 class="detail-title" style="--activity-color: {{ $activity['color_from'] }};">مميزات البرنامج</h3>
        <div class="detail-list">
            @foreach($activity['features'] as $feature)
            <div class="detail-item" style="--activity-color: {{ $activity['color_from'] }};">
                <p>{{ $feature }}</p>
            </div>
            @endforeach
        </div>

        <!-- Additional Info -->
        <div class="info-box" style="--activity-color: {{ $activity['color_from'] }};">
            <div class="info-row">
                <span class="info-label">أوقات العمل:</span>
                <span class="info-value">{{ $activity['schedule'] }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">الموقع:</span>
                <span class="info-value">{{ $activity['location'] }}</span>
            </div>
            @if(isset($activity['target_group']))
            <div class="info-row">
                <span class="info-label">الفئة المستهدفة:</span>
                <span class="info-value">{{ $activity['target_group'] }}</span>
            </div>
            @endif
        </div>

        <a href="{{ route('activities.index') }}" class="back-link" style="--activity-color: {{ $activity['color_from'] }};">← العودة إلى الأنشطة</a>
    </div>
</section>
@endsection