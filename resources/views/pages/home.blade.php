@extends('layouts.app')

@section('title', 'الرئيسية - وقف المودة')
@section('meta_description', 'وقف المودة - مؤسسة خيرية تسعى لخدمة المجتمع من خلال برامج ومبادرات نوعية')

@section('content')
<style>
    
    .hero-home {
        background: linear-gradient(135deg, var(--primary-brown) 0%, var(--primary-brown-dark) 100%);
        padding: 8rem 0;
        position: relative;
        overflow: hidden;
    }

    .hero-home::before {
        content: '';
        position: absolute;
        inset: 0;
        background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="100" height="100" patternUnits="userSpaceOnUse"><path d="M 100 0 L 0 0 0 100" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
    }

    .hero-content-wrapper {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 2rem;
        position: relative;
        z-index: 1;
    }

    .hero-home h1 {
        font-size: 4rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 1.5rem;
        letter-spacing: -1px;
    }

    .hero-home p {
        font-size: 1.6rem;
        color: rgba(255, 255, 255, 0.9);
        max-width: 700px;
        line-height: 2;
        margin-bottom: 2.5rem;
    }

    .btn-primary {
        display: inline-block;
        padding: 1rem 2.5rem;
        background: linear-gradient(135deg, var(--accent-gold) 0%, var(--accent-gold-light) 100%);
        color: #ffffff;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.1rem;
        border-radius: 8px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(184, 149, 106, 0.3);
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 25px rgba(184, 149, 106, 0.4);
        color: #ffffff;
    }

    .video-section {
        padding: 6rem 0;
        background-color: var(--bg-light);
    }

    .video-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .section-title {
        font-size: 2.8rem;
        font-weight: 700;
        color: var(--primary-brown-dark);
        text-align: center;
        margin-bottom: 3rem;
        position: relative;
        padding-bottom: 1.5rem;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: linear-gradient(90deg, var(--accent-gold) 0%, var(--accent-gold-light) 100%);
    }

    .video-wrapper {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        background: linear-gradient(135deg, #e8e6e3 0%, #d4d2cf 100%);
    }

    .video-placeholder {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .video-placeholder-content {
        text-align: center;
    }

    .play-icon {
        width: 80px;
        height: 80px;
        background-color: rgba(139, 115, 85, 0.9);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .play-icon:hover {
        transform: scale(1.1);
        background-color: var(--primary-brown);
    }

    .play-icon::after {
        content: '';
        width: 0;
        height: 0;
        border-top: 15px solid transparent;
        border-bottom: 15px solid transparent;
        border-left: 25px solid #ffffff;
        margin-right: -5px;
    }

  
    .video-placeholder p {
        color: var(--primary-brown-dark);
        font-size: 1.3rem;
        font-weight: 600;
        background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.85) 100%);
        padding: 1rem 2rem;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        display: inline-block;
    }

    
    .stats-section {
        padding: 6rem 0;
        background-color: #ffffff;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2.5rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    .stat-card {
        text-align: center;
        padding: 2.5rem 2rem;
        background: linear-gradient(135deg, #ffffff 0%, var(--bg-light) 100%);
        border-radius: 12px;
        border: 1px solid rgba(139, 115, 85, 0.1);
        transition: all 0.3s ease;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(139, 115, 85, 0.12);
        border-color: var(--accent-gold);
    }

    .stat-number {
        font-size: 3rem;
        font-weight: 800;
        color: var(--primary-brown);
        margin-bottom: 0.5rem;
        display: block;
    }

    .stat-label {
        font-size: 1.3rem;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
    }

   
    .stat-description {
        font-size: 1.05rem;
        color: var(--text-gray);
        line-height: 1.6;
        background: rgba(139, 115, 85, 0.05);
        padding: 0.6rem 1rem;
        border-radius: 6px;
        margin-top: 0.8rem;
        font-weight: 500;
    }

   
    .intro-section {
        padding: 6rem 0;
        background-color: var(--bg-light);
    }

    .intro-content {
        max-width: 900px;
        margin: 0 auto;
        text-align: center;
    }

    .intro-content h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary-brown-dark);
        margin-bottom: 2rem;
    }

    
    .intro-content p {
        font-size: 1.25rem;
        color: #5a5a5a;
        line-height: 2.3;
        margin-bottom: 2rem;
        background: linear-gradient(135deg, rgba(255,255,255,0.8) 0%, rgba(248,248,248,0.6) 100%);
        padding: 1.8rem 2.5rem;
        border-radius: 10px;
        border-right: 4px solid var(--accent-gold);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
        font-weight: 500;
        text-align: right;
    }

    /* ------------------------------------- */
    /* opinions Section */
    .opinions-section {
        padding: 6rem 0;
        background: linear-gradient(135deg, #f8f7f5 0%, #eae8e4 100%);
        position: relative;
        overflow: hidden;
    }

    .opinions-subtitle {
        text-align: center;
        font-size: 1.2rem;
        color: var(--text-gray);
        margin-bottom: 3rem;
        font-weight: 500;
    }

    .opinions-wrapper {
        position: relative;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 5rem;
        overflow: hidden;
    }

    
    .opinions-container {
        display: flex;
        gap: 2.5rem;
        transition: transform 0.5s ease;
        padding: 2rem 0;
    }

    .opinion-card {
        min-width: calc(33.333% - 2rem);
        max-width: calc(33.333% - 2rem);
        background: #ffffff;
        border-radius: 20px;
        padding: 2.5rem 2rem;
        box-shadow: 0 8px 25px rgba(139, 115, 85, 0.12);
        transition: all 0.3s ease;
        border: 2px solid transparent;
        flex-shrink: 0;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        min-height: 400px;
    }

    .opinion-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 45px rgba(139, 115, 85, 0.18);
        border-color: var(--accent-gold);
    }

    
    .opinion-header {
        display: none;
    }

    .opinion-name {
        font-size: 1.3rem;
        font-weight: 700;
        color: var(--accent-gold);
        margin-bottom: 0.3rem;
        text-align: center;
    }

    
    .opinion-rating {
        display: flex;
        gap: 0.2rem;
        justify-content: center;
        margin-bottom: 1.5rem;
    }

    .star {
        color: #FFB800;
        font-size: 1.3rem;
    }

    
    .opinion-text {
        font-size: 1.05rem;
        color: #4a4a4a;
        line-height: 1.9;
        margin-bottom: auto;
        text-align: center;
        font-style: normal;
        position: relative;
        word-wrap: break-word;
        overflow-wrap: break-word;
        white-space: normal;
        flex-grow: 1;
    }

    .opinion-text::before {
        content: '"';
        position: absolute;
        right: 50%;
        transform: translateX(50%);
        top: -35px;
        font-size: 4rem;
        color: var(--accent-gold);
        opacity: 0.2;
        font-family: Georgia, serif;
        line-height: 1;
    }

    
    .opinion-footer {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.8rem;
        padding-top: 1.5rem;
        margin-top: 1.5rem;
        border-top: 1px solid rgba(139, 115, 85, 0.15);
    }

    .google-icon {
        width: 18px;
        height: 18px;
        opacity: 0.7;
    }

    .opinion-date {
        font-size: 0.85rem;
        color: var(--text-gray);
        text-align: center;
    }

    .opinion-author {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
    }

    .opinion-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 50px;
        height: 50px;
        background: #ffffff;
        border: 2px solid var(--accent-gold);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .opinion-arrow:hover {
        background: var(--accent-gold);
        transform: translateY(-50%) scale(1.1);
        box-shadow: 0 6px 20px rgba(184, 149, 106, 0.3);
    }

    .opinion-arrow:hover svg {
        stroke: #ffffff;
    }

    .opinion-arrow svg {
        stroke: var(--primary-brown);
        transition: stroke 0.3s ease;
    }

    .opinion-arrow-left {
        left: 1rem;
    }

    .opinion-arrow-right {
        right: 1rem;
    }

    .opinions-dots {
        display: flex;
        justify-content: center;
        gap: 0.8rem;
        margin-top: 2rem;
    }

    .dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(139, 115, 85, 0.3);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .dot.active {
        background: var(--accent-gold);
        width: 30px;
        border-radius: 6px;
    }

    .dot:hover {
        background: var(--accent-gold);
        transform: scale(1.2);
    }

    @media (max-width: 768px) {
        .hero-home h1 {
            font-size: 2.5rem;
        }

        .hero-home p {
            font-size: 1.1rem;
        }

        .stats-grid {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
        }

        .intro-content p {
            font-size: 1.1rem;
            padding: 1.2rem 1.5rem;
        }

        .video-placeholder p {
            font-size: 1.1rem;
            padding: 0.8rem 1.5rem;
        }

        
        .opinions-wrapper {
            padding: 0 3.5rem;
            max-width: 100%;
        }

        .opinion-arrow {
            width: 40px;
            height: 40px;
        }

        .opinion-arrow-left {
            left: 0.3rem;
        }

        .opinion-arrow-right {
            right: 0.3rem;
        }

        .opinion-card {
            min-width: 100%;
            max-width: 100%;
            padding: 2rem 1.5rem;
            min-height: auto;
        }

        .opinion-text {
            font-size: 0.95rem;
        }
    }

    @media (min-width: 769px) and (max-width: 1024px) {

        .opinions-wrapper {
            max-width: 900px;
        }
        
        .opinion-card {
            min-width: calc(50% - 1.5rem);
            max-width: calc(50% - 1.5rem);
        }
    }

    @media (min-width: 1025px) {
        
        .opinions-wrapper {
            max-width: 1400px;
        }
        
        .opinion-card {
            min-width: calc(33.333% - 2rem);
            max-width: calc(33.333% - 2rem);
        }
    }
</style>


<section class="hero-home scroll-reveal">
    <div class="hero-content-wrapper">
        <h1 class="scroll-reveal">وقف المودة</h1>
        <p>مؤسسة خيرية تسعى لخدمة المجتمع من خلال برامج ومبادرات نوعية تهدف إلى نشر الخير والعلم في المجتمع</p>
        <a href="{{ route('about') }}" class="btn-primary">تعرف على الوقف</a>
    </div>
</section>

<section class="video-section">
    <div class="video-container">
        <h2 class="section-title scroll-reveal">التعريف بالوقف ومشاريعه</h2>
        <div class="video-wrapper scroll-reveal-scale">
            <div class="video-placeholder">
                <div class="video-placeholder-content">
                    <div class="play-icon"></div>
                    <p>مقطع فيديو تعريفي بالوقف وأنشطته</p>
                </div>
            </div>

            <!-- <iframe src="YOUR_VIDEO_URL" frameborder="0" allowfullscreen></iframe> -->
        </div>
    </div>
</section>

<section class="intro-section">
    <div class="container">
        <div class="intro-content">
            <h2 class="scroll-reveal">عن وقف المودة</h2>
            <p class="scroll-reveal-right">
                وقف المودة هو مؤسسة خيرية تأسست بهدف المساهمة في بناء مجتمع واعٍ ومتماسك، يقوم على القيم الإسلامية الأصيلة والعمل الخيري المستدام.
            </p>
            <p class="scroll-reveal-left">
                نسعى من خلال برامجنا المتنوعة إلى خدمة المجتمع في مجالات التعليم والثقافة والخدمات الاجتماعية، بما يحقق التنمية المستدامة ويعود بالنفع على جميع أفراد المجتمع.
            </p>
        </div>
    </div>
</section>


<section class="stats-section">
    <div class="container">
        <h2 class="section-title scroll-reveal">إنجازاتنا في أرقام</h2>
        <div class="stats-grid">
            @foreach($stats as $index => $stat)
            
            <div class="stat-card scroll-reveal" style="transition-delay: {{ $index * 0.02 }}s;">
                <span class="stat-number">{{ $stat['number'] }}</span>
                <div class="stat-label">{{ $stat['label'] }}</div>
                <div class="stat-description">{{ $stat['description'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- opinions Section -->
<section class="opinions-section">
    
    
    <div class="opinions-wrapper">
        <h2 class="section-title scroll-reveal">ماذا قالوا عنا؟</h2>
        <div class="opinions-subtitle scroll-reveal">عبر تقييمات Google Maps</div>
            
            <button class="opinion-arrow opinion-arrow-right" id="nextBtn" aria-label="السابق">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </button>
            
            <button class="opinion-arrow opinion-arrow-left" id="prevBtn" aria-label="التالي">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </button>

            
            <div class="opinions-container" id="opinionsContainer">
                <!-- بطاقات التقييمات ستتم إضافتها هنا بواسطة JavaScript -->
            </div>

            
            <div class="opinions-dots" id="opinionsDots">
                <div class="dot"></div>
            </div>
        </div>
    </div>
</section>

<script>
    // دالة لفحص إذا كان العنصر ظاهر في الشاشة
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // دالة لفحص إذا كان جزء من العنصر ظاهر
    function isElementPartiallyInViewport(el) {
        const rect = el.getBoundingClientRect();
        const windowHeight = (window.innerHeight || document.documentElement.clientHeight);
        const vertInView = (rect.top <= windowHeight) && ((rect.top + rect.height) >= 0);
        return vertInView;
    }

    
    function handleScrollAnimations() {
        
        const scrollElements = document.querySelectorAll('.scroll-reveal, .scroll-reveal-left, .scroll-reveal-right, .scroll-reveal-scale');
        
        scrollElements.forEach(el => {
            // add class "active"
            if (isElementPartiallyInViewport(el)) {
                el.classList.add('active');
            }
        });
    }

    
    document.addEventListener('DOMContentLoaded', function() {
        handleScrollAnimations();
    });

    window.addEventListener('scroll', function() {
        handleScrollAnimations();
    });

    window.addEventListener('resize', function() {
        handleScrollAnimations();
    });
    

    // ------------------------------------- //
    // opinions section
    document.addEventListener('DOMContentLoaded', function () {
        const wrapper = document.querySelector('.opinions-wrapper');
        const container = document.getElementById('opinionsContainer');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        const allOpinions = @json($opinions);
        
        let currentStartIndex = 0;
        const cardsToShow = 3;

        // دالة لإنشاء بطاقة تقييم
        function createOpinionCard(opinion) {
            const card = document.createElement('div');
            card.className = 'opinion-card';
            
            let starsHTML = '';
            for (let i = 0; i < opinion.rating; i++) {
                starsHTML += '<span class="star">★</span>';
            }
            
            card.innerHTML = `
                <p class="opinion-text">${opinion.text}</p>
                <div class="opinion-footer">
                    <div class="opinion-rating">${starsHTML}</div>
                    <div class="opinion-author">
                        <h3 class="opinion-name">${opinion.name}</h3>
                        <span class="opinion-date">${opinion.date}</span>
                    </div>
                </div>
            `;
            
            return card;
        }

        function updateDisplayedCards() {
            
            container.innerHTML = '';
            
            for (let i = 0; i < cardsToShow; i++) {
                const opinionIndex = (currentStartIndex + i) % allOpinions.length;
                const card = createOpinionCard(allOpinions[opinionIndex]);
                container.appendChild(card);
            }
            
            updateButtonStates();
        }

        
        function updateButtonStates() {
        
            if (allOpinions.length <= cardsToShow) {
                prevBtn.style.display = 'none';
                nextBtn.style.display = 'none';
            } else {
                prevBtn.style.display = 'flex';
                nextBtn.style.display = 'flex';
                
                prevBtn.style.opacity = '1';
                nextBtn.style.opacity = '1';
                prevBtn.style.cursor = 'pointer';
                nextBtn.style.cursor = 'pointer';
            }
        }

        function goNext() {
            if (allOpinions.length <= cardsToShow) return;
            
            currentStartIndex = (currentStartIndex + 1) % allOpinions.length;
            
            container.style.transition = 'opacity 0.6s ease';
            container.style.opacity = '0';
            
            setTimeout(() => {
                updateDisplayedCards();
                container.style.opacity = '1';
            }, 300);
        }

        function goPrev() {
            if (allOpinions.length <= cardsToShow) return;
            
            currentStartIndex = (currentStartIndex - 1 + allOpinions.length) % allOpinions.length;
            

            container.style.transition = 'opacity 0.6s ease';
            container.style.opacity = '0';
            
            setTimeout(() => {
                updateDisplayedCards();
                container.style.opacity = '1';
            }, 300);
        }

        nextBtn.addEventListener('click', goNext);
        prevBtn.addEventListener('click', goPrev);

        let touchStartX = 0;
        let touchEndX = 0;

        container.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        });

        container.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });

        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    goPrev();
                } else {
                    goNext();
                }
            }
        }

        function init() {
            updateDisplayedCards();
        }

        init();
        
        let autoPlayInterval;
        const autoPlayDelay = 5000;

        function startAutoPlay() {
            autoPlayInterval = setInterval(() => {
                goNext();
            }, autoPlayDelay);
        }

        function stopAutoPlay() {
            clearInterval(autoPlayInterval);
        }

        wrapper.addEventListener('mouseenter', stopAutoPlay);
        wrapper.addEventListener('mouseleave', startAutoPlay);
        
        startAutoPlay();
    });
</script>
@endsection