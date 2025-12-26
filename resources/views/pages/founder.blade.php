@extends('layouts.app')

@section('title', 'كلمة الواقف - وقف المودة')
@section('meta_description', 'كلمة الواقف - وقف المودة')

@section('content')
<style>
    .founder-hero {
        background: linear-gradient(135deg, var(--primary-brown) 0%, var(--primary-brown-dark) 100%);
        padding: 6rem 0;
        text-align: center; 
    }

    .founder-hero h1 {
        font-size: 3.5rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 1rem;
    }

    .founder-hero p {
        font-size: 1.3rem;
        color: rgba(255, 255, 255, 0.9);
        max-width: 700px;
        margin: 0 auto;
    }

    .founder-content {
        padding: 6rem 0;
        background-color: var(--bg-light);
    }

    .founder-wrapper {
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .founder-profile {
        text-align: center;
        margin-bottom: 4rem;
    }

    .founder-image {
        width: 200px;
        height: 200px;
        background: linear-gradient(135deg, var(--accent-gold) 0%, var(--accent-gold-light) 100%);
        border-radius: 50%;
        margin: 0 auto 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 5rem;
        color: #ffffff;
        box-shadow: 0 15px 50px rgba(139, 115, 85, 0.2);
    }

    .founder-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 30%;
    }

    .founder-name {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary-brown-dark);
        margin-bottom: 0.5rem;
    }

    .founder-title {
        font-size: 1.3rem;
        color: var(--text-gray);
        font-weight: 500;
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

    @media (max-width: 768px) {
        .founder-hero h1 {
            font-size: 2.5rem;
        }

        .founder-message {
            padding: 2rem;
        }

        .message-text p {
            font-size: 1.1rem;
        }
    }
</style>

<!-- Hero Section -->
<section class="founder-hero">
    <div class="container">
        <h1>كلمة الواقف</h1>
        <p>رؤية وكلمة من مؤسس وقف المودة</p>
    </div>
</section>

<!-- Founder Content -->
<section class="founder-content">
    <div class="founder-wrapper">
        <!-- Founder Profile -->
        <div class="founder-profile">
            <div class="founder-image">
                <img src="/images/freeh_image.jpg" alt="الشيخ فريح بن علي بن تركي العقلاء">
            </div>
            <h2 class="founder-name">الشيخ / فريح بن علي بن تركي العقلاء رحمه الله</h2>
            <p class="founder-title">مؤسس وقف المودة</p>
        </div>

        <!-- Founder Message -->
        <div class="founder-message">
            <h3 class="message-header">كلمة الواقف</h3>
            
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