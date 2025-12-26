@extends('layouts.app')

@section('title', 'أنشطة الوقف - وقف المودة')
@section('meta_description', 'تعرف على أنشطة وبرامج وقف المودة الخيرية')

@section('content')
<style>
    .activities-hero {
        background: linear-gradient(135deg, var(--primary-brown) 0%, var(--primary-brown-dark) 100%);
        padding: 3rem 0;
        text-align: center;
    }

    .activities-hero h1 {
        font-size: 3.5rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 1rem;
    }

    .activities-hero p {
        font-size: 1.3rem;
        color: rgba(255, 255, 255, 0.9);
        max-width: 700px;
        margin: 0 auto;
    }

    .activities-list {
        padding: 6rem 0;
    }

    .activities-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
        gap: 3rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    .activity-card {
        background: #ffffff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        border: 1px solid rgba(139, 115, 85, 0.1);
    }

    .activity-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    }

    .activity-header {
        padding: 4rem 2.5rem 3rem;
        position: relative;
        overflow: hidden;
    }

    .activity-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0.05;
        background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="2" fill="white"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
    }

    .activity-header h2 {
        font-size: 2.2rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 0.5rem;
        position: relative;
        z-index: 1;
    }

    .activity-header h3 {
        font-size: 1.3rem;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.95);
        margin-bottom: 1.5rem;
        position: relative;
        z-index: 1;
    }

    .activity-header p {
        font-size: 1.1rem;
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.8;
        position: relative;
        z-index: 1;
    }

    .activity-body {
        padding: 2.5rem;
    }

    .activity-link {
        display: inline-block;
        padding: 1rem 2.5rem;
        background-color: var(--primary-brown);
        color: #ffffff;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.05rem;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .activity-link:hover {
        background-color: var(--primary-brown-dark);
        transform: translateX(-5px);
        color: #ffffff;
    }

    @media (max-width: 768px) {
        .activities-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .activities-hero h1 {
            font-size: 2.5rem;
        }
    }
</style>

<!-- Hero Section -->
<section class="activities-hero">
    <div class="container">
        <h1>أنشطة الوقف</h1>
        <p>نسعى من خلال برامجنا المتنوعة إلى خدمة المجتمع وتحقيق أهداف الوقف النبيلة</p>
    </div>
</section>

<!-- Activities List -->
<section class="activities-list">
    <div class="container">
        <div class="activities-grid">
            @foreach($activities as $activity)
            <div class="activity-card">
                <div class="activity-header" style="
                    background:
                    linear-gradient(
                        rgba(0, 0, 0, 0.45),
                        rgba(0,0,0,0.45)
                    ),
                    url('/images/{{ $activity['image'] }}') center / cover no-repeat;
                ">
                    <h2>{{ $activity['title'] }}</h2>
                    <h3>{{ $activity['subtitle'] }}</h3>
                    <p>{{ $activity['description'] }}</p>
                </div>
                <div class="activity-body">
                    <a href="{{ route('activities.show', ['slug' => $activity['slug']]) }}" class="activity-link" 
                        style="background: linear-gradient(135deg, {{ $activity['color_from'] }} 0%, {{ $activity['color_to'] }} 100%);">
                        اعرف المزيد ←
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection