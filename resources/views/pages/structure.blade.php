@extends('layouts.app')

@section('title', 'هيكل الوقف - وقف المودة')
@section('meta_description', 'تعرف على الهيكل التنظيمي والإداري لوقف المودة')

@section('content')
<style>
    .structure-hero {
        background: linear-gradient(135deg, var(--primary-brown) 0%, var(--primary-brown-dark) 100%);
        padding: 6rem 0;
        text-align: center;
    }

    .structure-hero h1 {
        font-size: 3.5rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 1rem;
    }

    .structure-hero p {
        font-size: 1.3rem;
        color: rgba(255, 255, 255, 0.9);
        max-width: 700px;
        margin: 0 auto;
    }

    .structure-content {
        padding: 6rem 0;
        background-color: var(--bg-light);
    }

    .structure-wrapper {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .structure-intro {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 5rem;
    }

    .structure-intro p {
        font-size: 1.2rem;
        line-height: 2;
        color: var(--text-gray);
    }

    /* Organizational Chart */
    .org-chart {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 3rem;
    }

    .org-level {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        gap: 2rem;
        position: relative;
    }

    .org-level::before {
        content: '';
        position: absolute;
        top: -1.5rem;
        left: 50%;
        transform: translateX(-50%);
        width: 2px;
        height: 1.5rem;
        background: linear-gradient(180deg, var(--accent-gold) 0%, transparent 100%);
    }

    .org-level:first-child::before {
        display: none;
    }

    .org-card {
        background: #ffffff;
        padding: 2.5rem 2rem;
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        border-top: 4px solid var(--accent-gold);
        text-align: center;
        max-width: 350px;
        width: 100%;
        transition: all 0.3s ease;
        position: relative;
    }

    .org-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.12);
    }

    .org-card.level-1 {
        border-top-color: var(--primary-brown);
        max-width: 400px;
    }

    .org-card.level-2 {
        border-top-color: var(--accent-gold);
        max-width: 380px;
    }

    .org-card.level-3 {
        border-top-color: var(--accent-gold-light);
        max-width: 320px;
    }

    .org-icon {
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

    .org-card.level-1 .org-icon {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, var(--primary-brown) 0%, var(--primary-brown-dark) 100%);
        font-size: 3rem;
    }

    .org-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--primary-brown-dark);
        margin-bottom: 1rem;
    }

    .org-card.level-1 .org-title {
        font-size: 1.8rem;
    }

    .org-description {
        font-size: 1.05rem;
        color: var(--text-gray);
        line-height: 1.8;
    }

    /* Connecting Lines for Level 3 */
    .org-level-3-wrapper {
        width: 100%;
        position: relative;
    }

    .org-level-3 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    /* Responsibilities Section */
    .responsibilities-section {
        margin-top: 5rem;
        padding: 4rem;
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    }

    .responsibilities-title {
        font-size: 2rem;
        font-weight: 700;
        color: var(--primary-brown-dark);
        margin-bottom: 2rem;
        text-align: center;
    }

    .responsibility-item {
        padding: 1.5rem;
        margin-bottom: 1rem;
        background: var(--bg-light);
        border-radius: 8px;
        border-right: 4px solid var(--accent-gold);
        transition: all 0.3s ease;
    }

    .responsibility-item:hover {
        transform: translateX(-5px);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    }

    .responsibility-item h4 {
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--primary-brown);
        margin-bottom: 0.5rem;
    }

    .responsibility-item p {
        font-size: 1.05rem;
        color: var(--text-gray);
        line-height: 1.8;
        margin: 0;
    }

    @media (max-width: 968px) {
        .structure-hero h1 {
            font-size: 2.5rem;
        }

        .org-level {
            flex-direction: column;
            align-items: center;
        }

        .org-level-3 {
            grid-template-columns: 1fr;
        }

        .responsibilities-section {
            padding: 2rem;
        }
    }
</style>

<!-- Hero Section -->
<section class="structure-hero">
    <div class="container">
        <h1>هيكل الوقف</h1>
        <p>تعرف على الهيكل التنظيمي والإداري لوقف المودة</p>
    </div>
</section>

<!-- Structure Content -->
<section class="structure-content">
    <div class="structure-wrapper">
        <!-- Introduction -->
        <div class="structure-intro">
            <p>
                يعتمد وقف المودة على هيكل تنظيمي واضح ومحدد، يضمن حسن إدارة الوقف وتحقيق أهدافه بكفاءة وفعالية، مع الالتزام الكامل بالشفافية والحوكمة الرشيدة.
            </p>
        </div>

        <!-- Organizational Chart -->
        <div class="org-chart">
            <!-- Level 1: Top Management -->
            <div class="org-level">
                <div class="org-card level-1">
                    <div class="org-icon">👑</div>
                    <h3 class="org-title">{{ $structureItems[0]['title'] }}</h3>
                    <p class="org-description">{{ $structureItems[0]['description'] }}</p>
                </div>
            </div>

            <!-- Level 2: Board of Directors -->
            <div class="org-level">
                <div class="org-card level-2">
                    <div class="org-icon">📋</div>
                    <h3 class="org-title">{{ $structureItems[1]['title'] }}</h3>
                    <p class="org-description">{{ $structureItems[1]['description'] }}</p>
                </div>
            </div>

            <!-- Level 3: Departments -->
            <div class="org-level-3-wrapper">
                <div class="org-level-3">
                    @foreach(array_slice($structureItems, 2) as $index => $item)
                    <div class="org-card level-3">
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
        <div class="responsibilities-section">
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