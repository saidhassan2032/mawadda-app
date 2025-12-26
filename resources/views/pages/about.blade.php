@extends('layouts.app')

@section('title', 'عن الوقف - وقف المودة')
@section('meta_description', 'تعرف على وقف المودة، رؤيتنا، رسالتنا، وقيمنا')

@section('content')
<style>
    .about-hero {
        background: linear-gradient(135deg, var(--primary-brown) 0%, var(--primary-brown-dark) 100%);
        padding: 6rem 0;
        text-align: center;
    }

    .about-hero h1 {
        font-size: 3.5rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 1rem;
    }

    .about-hero p {
        font-size: 1.3rem;
        color: rgba(255, 255, 255, 0.9);
        max-width: 700px;
        margin: 0 auto;
    }

    .about-content-section {
        padding: 6rem 0;
    }

    .about-text {
        max-width: 900px;
        margin: 0 auto 4rem;
        text-align: justify;
    }

    .about-text p {
        font-size: 1.2rem;
        line-height: 2.2;
        color: var(--text-gray);
        margin-bottom: 1.5rem;
    }

    .vision-mission-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        gap: 3rem;
        max-width: 1200px;
        margin: 0 auto;
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
        .about-hero h1 {
            font-size: 2.5rem;
        }

        .vision-mission-grid,
        .values-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- Hero Section -->
<section class="about-hero">
    <div class="container">
        <h1>عن وقف المودة</h1>
        <p>مؤسسة خيرية تسعى لخدمة المجتمع من خلال برامج ومبادرات نوعية تهدف إلى نشر الخير والعلم في المجتمع</p>
    </div>
</section>

<!-- About Content -->
<section class="about-content-section">
    <div class="container">
        <div class="about-text">
            <p>
                وقف المودة هو مؤسسة خيرية أُنشئت بهدف خدمة المجتمع من خلال مجموعة متنوعة من البرامج والمبادرات التي تهدف إلى نشر الخير والعلم في المجتمع. تأسس الوقف على مبادئ راسخة من القيم الإسلامية الأصيلة والتزام عميق بخدمة الإنسانية.
            </p>
            <p>
                نؤمن في وقف المودة بأن العمل الخيري المستدام هو السبيل الأمثل لبناء مجتمع متماسك ومزدهر. ولهذا، نسعى جاهدين لتقديم برامج ذات جودة عالية تلبي احتياجات المجتمع الحقيقية وتساهم في تحقيق التنمية الشاملة.
            </p>
            <p>
                من خلال فريق عمل متخصص ومتفاني، نعمل على تحقيق أهدافنا الاستراتيجية وتوسيع نطاق خدماتنا لتشمل المزيد من المستفيدين في مختلف المجالات.
            </p>
        </div>

        <!-- Vision and Mission -->
        <div class="vision-mission-grid">
            <div class="vm-card">
                <h3>رؤيتنا</h3>
                <p>
                    أن نكون وقفاً رائداً في العمل الخيري والتنموي، يساهم في بناء مجتمع متكامل يقوم على العلم والمودة والتعاون، ونموذجاً يُحتذى به في الشفافية والحوكمة الرشيدة.
                </p>
            </div>

            <div class="vm-card">
                <h3>رسالتنا</h3>
                <p>
                    تقديم برامج ومبادرات خيرية نوعية تخدم المجتمع وتحقق التنمية المستدامة من خلال الاستثمار الأمثل لموارد الوقف.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="values-section">
    <div class="container">
        <h2 class="section-title">قيمنا</h2>
        <div class="values-grid">
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