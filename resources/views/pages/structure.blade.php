@extends('layouts.app')

@section('title', 'هيكل الوقف - وقف المودة')
@section('meta_description', 'تعرف على الهيكل التنظيمي والإداري لوقف المودة')

@section('content')
<style>
/* Hero Section */
.structure-hero {
    background: linear-gradient(135deg, var(--primary-brown) 0%, var(--primary-brown-dark) 100%);
    padding: 14rem 15rem;
    position: relative;
    overflow: hidden;
}

.structure-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, var(--primary-brown-dark) 0%, transparent 100%);
}

.structure-hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background: url('data:image/svg+xml,<svg width="60" height="60" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="dots" width="60" height="60" patternUnits="userSpaceOnUse"><circle cx="2" cy="2" r="1" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="60" height="60" fill="url(%23dots)"/></svg>');
    opacity: 0.4;
}

/* Animated Shapes */
.hero-shape {
    position: absolute;
    opacity: 0.08;
    animation: float-shape 20s ease-in-out infinite;
}

.hero-shape-1 {
    width: 600px;
    height: 600px;
    background: linear-gradient(135deg, var(--accent-gold) 0%, var(--accent-gold-light) 100%);
    border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
    top: -200px;
    right: -200px;
    filter: blur(120px);
}

.hero-shape-2 {
    width: 500px;
    height: 500px;
    background: linear-gradient(225deg, var(--accent-gold) 0%, var(--accent-gold-light) 100%);
    border-radius: 70% 30% 30% 70% / 60% 60% 40% 40%;
    bottom: -150px;
    left: -150px;
    filter: blur(100px);
    animation-delay: 7s;
}

@keyframes float-shape {
    0%, 100% {
        transform: translate(0, 0) rotate(0deg);
    }
    33% {
        transform: translate(50px, -50px) rotate(120deg);
    }
    66% {
        transform: translate(-30px, 30px) rotate(240deg);
    }
}

.structure-hero-content {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 2rem;
    position: relative;
    z-index: 1;
    text-align: center;
}

/* Badge */
.structure-badge {
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

.structure-badge svg {
    filter: drop-shadow(0 2px 4px rgba(184, 149, 106, 0.4));
}

/* Title */
.structure-hero h1 {
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

.structure-hero p {
    font-size: 1.4rem;
    color: rgba(255, 255, 255, 0.85);
    line-height: 2.1;
    font-weight: 400;
    max-width: 800px;
    margin: 0 auto;
}

/* Structure Content */
.structure-content {
    padding: 6rem 0 8rem;
    background-color: var(--bg-light);
    position: relative;
    margin-top: -4rem;
    overflow: hidden;
}

.structure-content::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 200px;
    background: linear-gradient(180deg, var(--bg-light) 0%, transparent 100%);
    pointer-events: none;
}

.structure-content::after {
    content: '';
    position: absolute;
    inset: 0;
    background: url('data:image/svg+xml,<svg width="60" height="60" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="dots" width="60" height="60" patternUnits="userSpaceOnUse"><circle cx="2" cy="2" r="1" fill="rgba(139,115,85,0.03)"/></pattern></defs><rect width="60" height="60" fill="url(%23dots)"/></svg>');
    opacity: 0.5;
}

.structure-wrapper {
    max-width: 1300px;
    margin: 0 auto;
    padding: 0 2rem;
    position: relative;
    z-index: 1;
}

/* Introduction */
.structure-intro {
    text-align: center;
    max-width: 900px;
    margin: 0 auto 5rem;
    padding: 3rem;
    
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(184, 149, 106, 0.15);
}

.structure-intro p {
    font-size: 1.25rem;
    line-height: 2.2;
    color: var(--primary-brown);
    font-weight: 500;
    margin: 0;
}

/* Organizational Chart */
.org-chart {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 3.5rem;
    margin-bottom: 5rem;
}

.org-level {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    gap: 2.5rem;
    position: relative;
}

.org-level::before {
    content: '';
    position: absolute;
    top: -1.75rem;
    left: 50%;
    transform: translateX(-50%);
    width: 3px;
    height: 1.75rem;
    background: linear-gradient(180deg, var(--accent-gold) 0%, var(--accent-gold-light) 100%);
}

.org-level:first-child::before {
    display: none;
}

/* Org Cards */
.org-card {
    background: #ffffff;
    padding: 3rem 2.5rem;
    border-radius: 24px;
    box-shadow: 
        0 20px 40px rgba(0, 0, 0, 0.08),
        0 0 0 1px rgba(184, 149, 106, 0.1);
    text-align: center;
    max-width: 380px;
    width: 100%;
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
}

.org-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--accent-gold) 0%, var(--accent-gold-light) 100%);
    transform: scaleX(0);
    transform-origin: right;
    transition: transform 0.5s ease;
}

/* Level 1: Top Management */
.org-card.level-1 {
    max-width: 450px;
}

.org-card.level-1::before {
    height: 5px;
    background: linear-gradient(90deg, var(--primary-brown) 0%, var(--primary-brown-dark) 100%);
}

/* Level 2: Board */
.org-card.level-2 {
    max-width: 420px;
}

/* Level 3: Departments */
.org-card.level-3 {
    max-width: 340px;
}

/* Org Icons */
.org-icon {
    width: 90px;
    height: 90px;
    background: linear-gradient(135deg, rgba(175, 159, 140, 0.15) 0%, rgba(147, 136, 122, 0.2) 100%);
    border-radius: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.8rem;
    font-size: 2.8rem;
    transition: all 0.4s ease;
    border: 1px solid rgba(184, 149, 106, 0.2);
}


.org-card.level-1 .org-icon {
    width: 110px;
    height: 110px;
    font-size: 3.5rem;
    background: linear-gradient(135deg, rgba(139, 115, 85, 0.2) 0%, rgba(139, 115, 85, 0.3) 100%);
}


/* Org Titles */
.org-title {
    font-size: 1.6rem;
    font-weight: 800;
    color: var(--primary-brown);
    margin-bottom: 1.2rem;
    transition: color 0.3s ease;
}


.org-card.level-1 .org-title {
    font-size: 2rem;
}

.org-description {
    font-size: 1.1rem;
    color: var(--text-gray);
    line-height: 1.9;
    transition: color 0.3s ease;
}


/* Level 3 Grid */
.org-level-3-wrapper {
    width: 100%;
    position: relative;
}

.org-level-3 {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2.5rem;
    margin-top: 3.5rem;
}

/* Responsibilities Section */
.responsibilities-section {
    margin-top: 5rem;
    padding: 4rem;
    background: #ffffff;
    border-radius: 24px;
    box-shadow: 
        0 20px 40px rgba(0, 0, 0, 0.08),
        0 0 0 1px rgba(184, 149, 106, 0.1);
    position: relative;
    overflow: hidden;
}

.responsibilities-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--accent-gold) 0%, var(--accent-gold-light) 100%);
}

.responsibilities-title {
    font-size: 2.4rem;
    font-weight: 800;
    color: var(--primary-brown);
    margin-bottom: 3rem;
    text-align: center;
    position: relative;
    padding-bottom: 1rem;
}

.responsibilities-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 3px;
    background: linear-gradient(90deg, transparent 0%, var(--accent-gold) 50%, transparent 100%);
    border-radius: 2px;
}

.responsibility-item {
    padding: 2rem 2.5rem;
    margin-bottom: 1.5rem;
    background: linear-gradient(135deg, rgba(230, 226, 222, 0.15) 0%, rgba(206, 205, 203, 0.2) 100%);
    border-radius: 16px;
    border-right: 4px solid var(--accent-gold);
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
}

.responsibility-item::before {
    content: '';
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    width: 4px;
    background: linear-gradient(180deg, var(--accent-gold) 0%, var(--accent-gold-light) 100%);
    transform: scaleY(0);
    transform-origin: bottom;
    transition: transform 0.4s ease;
}

.responsibility-item h4 {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--primary-brown);
    margin-bottom: 0.8rem;
    display: flex;
    align-items: center;
    gap: 0.8rem;
    transition: color 0.3s ease;
}

.responsibility-item h4::before {
    content: '●';
    color: var(--accent-gold);
    font-size: 0.8rem;
}

.responsibility-item p {
    font-size: 1.08rem;
    color: var(--text-gray);
    line-height: 1.9;
    margin: 0;
    transition: color 0.3s ease;
}

/* Responsive */
@media (max-width: 968px) {
    .structure-hero {
        padding: 5rem 0 7rem;
    }

    .structure-hero h1 {
        font-size: 3rem;
        letter-spacing: -1px;
    }

    .structure-hero p {
        font-size: 1.15rem;
    }

    .structure-content {
        padding: 4rem 0 5rem;
        margin-top: -3rem;
    }

    .structure-intro {
        padding: 2rem;
        margin-bottom: 3rem;
    }

    .structure-intro p {
        font-size: 1.1rem;
    }

    .org-chart {
        gap: 2.5rem;
        margin-bottom: 3rem;
    }

    .org-level {
        flex-direction: column;
        align-items: center;
        gap: 2rem;
    }

    .org-level-3 {
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    .org-card {
        max-width: 100% !important;
        padding: 2.5rem 2rem;
    }

    .responsibilities-section {
        padding: 2.5rem 1.5rem;
        margin-top: 3rem;
    }

    .responsibilities-title {
        font-size: 2rem;
    }

    .responsibility-item {
        padding: 1.5rem 1.8rem;
    }

    .responsibility-item h4 {
        font-size: 1.2rem;
    }
}

@media (min-width: 969px) and (max-width: 1200px) {
    .structure-hero h1 {
        font-size: 4.5rem;
    }

    .org-level-3 {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>

<!-- Hero Section -->
<section class="structure-hero">
    <div class="hero-shape hero-shape-1"></div>
    <div class="hero-shape hero-shape-2"></div>
    
    <div class="hero-pattern"></div>

    <div class="structure-hero-content">
        <div class="structure-badge scroll-reveal">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="3" y1="9" x2="21" y2="9"></line>
                <line x1="9" y1="21" x2="9" y2="9"></line>
            </svg>
            <span>البنية التنظيمية</span>
        </div>
        
        <h1 class="scroll-reveal">هيكل الوقف</h1>
        <p class="scroll-reveal">
            تعرف على الهيكل التنظيمي والإداري لوقف المودة
        </p>
    </div>
</section>

<!-- Structure Content -->
<section class="structure-content">
    <div class="structure-wrapper">
        <!-- Introduction -->
        <div class="structure-intro scroll-reveal">
            <p>
                يعتمد وقف المودة على هيكل تنظيمي واضح ومحدد، يضمن حسن إدارة الوقف وتحقيق أهدافه بكفاءة وفعالية، مع الالتزام الكامل بالشفافية والحوكمة الرشيدة.
            </p>
        </div>

        <!-- Organizational Chart -->
        <div class="org-chart">
            <!-- Level 1: Top Management -->
            <div class="org-level">
                <div class="org-card level-1 scroll-reveal">
                    <div class="org-icon">👤</div>
                    <h3 class="org-title">{{ $structureItems[0]['title'] }}</h3>
                    <p class="org-description">{{ $structureItems[0]['description'] }}</p>
                </div>
            </div>

            <!-- Level 2: Board of Directors -->
            <div class="org-level">
                <div class="org-card level-2 scroll-reveal" style="transition-delay: 0.1s;">
                    <div class="org-icon">🏛️</div>
                    <h3 class="org-title">{{ $structureItems[1]['title'] }}</h3>
                    <p class="org-description">{{ $structureItems[1]['description'] }}</p>
                </div>
            </div>

            <!-- Level 3: Departments -->
            <div class="org-level-3-wrapper">
                <div class="org-level-3">
                    @foreach(array_slice($structureItems, 2) as $index => $item)
                    <div class="org-card level-3 scroll-reveal" style="transition-delay: {{ ($index + 2) * 0.1 }}s;">
                        @php
                            $icons = ['💼', '⚖️', '🌱', '📊'];
                        @endphp

                        <div class="org-icon">
                            {{ $icons[$index] ?? '📌' }}
                        </div>
                        <h3 class="org-title">{{ $item['title'] }}</h3>
                        <p class="org-description">{{ $item['description'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Responsibilities Section -->
        <div class="responsibilities-section scroll-reveal">
            <h3 class="responsibilities-title">المسؤوليات والصلاحيات</h3>
            
            <div class="responsibility-item">
                <h4>الناظر على الوقف</h4>
                <p>الإشراف العام على الوقف، ومتابعة تنفيذ شروط الواقف، والتأكد من سير العمل وفق الأنظمة واللوائح المعتمدة.</p>
            </div>

            <div class="responsibility-item">
                <h4>مجلس النظارة</h4>
                <p>وضع السياسات والخطط الاستراتيجية، واعتماد الميزانيات والبرامج، ومراقبة الأداء العام للوقف.</p>
            </div>

            <div class="responsibility-item">
                <h4>المدير التنفيذي</h4>
                <p>تنفيذ قرارات مجلس الإدارة، والإشراف على العمليات اليومية، وإدارة الموارد البشرية والمالية.</p>
            </div>

            <div class="responsibility-item">
                <h4>الإدارة المالية</h4>
                <p>إدارة الموارد المالية للوقف، وإعداد التقارير المالية، وضمان الشفافية والامتثال للمعايير المحاسبية.</p>
            </div>

            <div class="responsibility-item">
                <h4>إدارة البرامج</h4>
                <p>تخطيط وتنفيذ البرامج والمشاريع الخيرية، ومتابعة تنفيذها، وقياس أثرها على المستفيدين.</p>
            </div>
        </div>
    </div>
</section>
@endsection