@extends('layouts.app')

@section('title', 'كلمة الواقف - وقف المودة')
@section('meta_description', 'كلمة الواقف - وقف المودة')

@section('content')
<style>
    .founder-hero {
        background: linear-gradient(135deg, var(--primary-brown) 0%, var(--primary-brown-dark) 100%);
        padding: 1rem 0 1rem;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at 30% 50%, rgba(212, 175, 120, 0.15) 0%, transparent 50%),
                    radial-gradient(circle at 70% 50%, rgba(139, 115, 85, 0.15) 0%, transparent 50%);
        pointer-events: none;
    }

    .hero-pattern {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: 
            repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(255,255,255,.03) 35px, rgba(255,255,255,.03) 70px);
        pointer-events: none;
    }

    .hero-content {
        position: relative;
        z-index: 1;
    }

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

    .founder-hero h1 {
        font-size: 4rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 1.5rem;
        text-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        animation: fadeInUp 0.8s ease-out;
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
    .hero-divider {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, transparent, var(--accent-gold-light), transparent);
        margin: 0 auto 1.5rem;
        border-radius: 2px;
    }

    .founder-hero p {
        font-size: 1.4rem;
        color: rgba(255, 255, 255, 0.95);
        max-width: 700px;
        margin: 0 auto;
        font-weight: 400;
        letter-spacing: 0.5px;
    }

    .hero-scroll {
        margin-top: 3rem;
        display: inline-flex;
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .hero-scroll:hover {
        color: #ffffff;
        transform: translateY(5px);
    }

    .hero-scroll svg {
        animation: bounce 2s infinite;
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-10px);
        }
        60% {
            transform: translateY(-5px);
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
        .founder-hero {
            padding: 0.5rem 0 0.5rem;
        }
        .hero-icon {
            width: 80px;
            height: 80px;
        }
        .hero-icon svg {
            width: 40px;
            height: 40px;
        }
        .founder-hero h1 {
            font-size: 2.5rem;
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
<section class="founder-hero">
    <div class="hero-overlay"></div>
    <div class="hero-pattern"></div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
            </div>
            <h1>كلمة الواقفين</h1>
            <div class="hero-divider"></div>
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
                <h2 class="founder-name">الشيخ/ أحمد العمودي</h2>
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
                <p class="opening">
                    بسم الله الرحمن الرحيم، والحمد لله رب العالمين، والصلاة والسلام على أشرف الأنبياء والمرسلين، نبينا محمد وعلى آله وصحبه أجمعين، وبعد:
                </p>

                <p>
                    إن من أعظم ما يتقرب به العبد إلى ربه الصدقة الجارية، التي يبقى أجرها وثوابها بعد موته، وقد جاء في الحديث الشريف عن أبي هريرة رضي الله عنه أن رسول الله صلى الله عليه وسلم قال: "إذا مات ابن آدم انقطع عمله إلا من ثلاث: صدقة جارية، أو علم ينتفع به، أو ولد صالح يدعو له" رواه مسلم.
                </p>

                <div class="quote-box">
                    <p>
                        "إن الوقف من أعظم أبواب الخير التي تبقى آثارها بعد الموت، وتكون صدقة جارية ينتفع بها الناس"
                    </p>
                </div>

                <p>
                    ومن هذا المنطلق، ورغبة في المساهمة في خدمة المجتمع ونشر الخير والعلم، تم بحمد الله تأسيس وقف المودة ليكون صدقة جارية نسأل الله تعالى أن ينفع بها، وأن يجعلها في ميزان حسناتنا يوم القيامة.
                </p>

                <p>
                    لقد حرصنا في وقف المودة على أن تكون برامجه وأنشطته متنوعة ومتوافقة مع احتياجات المجتمع الحقيقية، وأن تسهم في بناء جيل واعٍ ومتعلم، يقوم على القيم الإسلامية الأصيلة، ويساهم في نهضة الأمة وتقدمها.
                </p>

                <p>
                    إن الوقف ليس مجرد عمل خيري عابر، بل هو مؤسسة متكاملة تسعى لتحقيق التنمية المستدامة، وتقديم الخدمات النوعية التي تلبي احتياجات المجتمع في مختلف المجالات التعليمية والاجتماعية والثقافية.
                </p>

                <p>
                    وإنني إذ أتقدم بجزيل الشكر والامتنان لكل من ساهم ويساهم في دعم هذا الوقف المبارك، من متبرعين ومتطوعين وداعمين، أسأل الله العظيم أن يجزيهم خير الجزاء، وأن يبارك في جهودهم، وأن يجعل ذلك في موازين حسناتهم.
                </p>

                <p>
                    كما أدعو جميع أهل الخير والعطاء إلى المشاركة في دعم هذا الوقف، والمساهمة في تحقيق أهدافه النبيلة، فالخير لا يأتي إلا بتضافر الجهود وتكاتف الأيدي.
                </p>

                <p class="closing">
                    نسأل الله تعالى التوفيق والسداد، وأن يبارك في هذا الوقف وأن يجعله خالصاً لوجهه الكريم، وأن ينفع به الإسلام والمسلمين، وصلى الله وسلم على نبينا محمد وعلى آله وصحبه أجمعين.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection