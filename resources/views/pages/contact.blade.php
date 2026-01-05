@extends('layouts.app')

@section('title', 'تواصل معنا - وقف المودة')
@section('meta_description', 'تواصل مع وقف المودة - نسعد بالاستماع إليكم والرد على استفساراتكم')

@section('content')
<style>
/* Hero Section */
.contact-hero {
    background: linear-gradient(135deg, var(--primary-brown) 0%, var(--primary-brown-dark) 100%);
    padding: 8rem 0 10rem;
    position: relative;
    overflow: hidden;
}

.contact-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, var(--primary-brown-dark) 0%, transparent 100%);
}

.contact-hero::after {
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

.contact-hero-content {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 2rem;
    position: relative;
    z-index: 1;
    text-align: center;
}

/* Badge */
.contact-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.8rem;
    background: linear-gradient(135deg, rgba(184, 149, 106, 0.2) 0%, rgba(184, 149, 106, 0.15) 100%);
    backdrop-filter: blur(20px);
    padding: 0.9rem 2rem;
    border-radius: 50px;
    color: #ffffff;
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 2.5rem;
    border: 1px solid rgba(184, 149, 106, 0.3);
    box-shadow: 0 8px 32px rgba(184, 149, 106, 0.15);
    animation: badge-glow 3s ease-in-out infinite;
}

@keyframes badge-glow {
    0%, 100% {
        box-shadow: 0 8px 32px rgba(184, 149, 106, 0.15);
    }
    50% {
        box-shadow: 0 8px 40px rgba(184, 149, 106, 0.3);
    }
}

.contact-badge svg {
    filter: drop-shadow(0 2px 4px rgba(184, 149, 106, 0.4));
}

/* Title */
.contact-hero h1 {
    font-size: 5.5rem;
    font-weight: 900;
    background: linear-gradient(135deg, #ffffff 0%, var(--accent-gold-light) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 2rem;
    letter-spacing: -3px;
    line-height: 1.1;
}

.contact-hero p {
    font-size: 1.4rem;
    color: rgba(255, 255, 255, 0.85);
    line-height: 2.1;
    font-weight: 400;
    max-width: 800px;
    margin: 0 auto;
}

/* Contact Section */
.contact-section {
    padding: 6rem 0 8rem;
    background-color: var(--bg-light);
    position: relative;
    margin-top: -4rem;
    overflow: hidden;
}

.contact-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 200px;
    background: linear-gradient(180deg, var(--bg-light) 0%, transparent 100%);
    pointer-events: none;
}

.contact-section::after {
    content: '';
    position: absolute;
    inset: 0;
    background: url('data:image/svg+xml,<svg width="60" height="60" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="dots" width="60" height="60" patternUnits="userSpaceOnUse"><circle cx="2" cy="2" r="1" fill="rgba(139,115,85,0.03)"/></pattern></defs><rect width="60" height="60" fill="url(%23dots)"/></svg>');
    opacity: 0.5;
}

.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1.3fr;
    gap: 4rem;
    max-width: 1400px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}

/* Contact Info Cards */
.contact-info {
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

.info-card {
    background: #ffffff;
    padding: 2.5rem;
    border-radius: 20px;
    box-shadow: 
        0 15px 30px rgba(0, 0, 0, 0.08),
        0 0 0 1px rgba(184, 149, 106, 0.1);
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
}

.info-card::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 4px;
    height: 100%;
    background: linear-gradient(180deg, var(--accent-gold) 0%, var(--accent-gold-light) 100%);
    transform: scaleY(0);
    transform-origin: bottom;
    transition: transform 0.4s ease;
}

.info-card:hover {
    transform: translateX(-8px);
    box-shadow: 
        0 25px 50px rgba(0, 0, 0, 0.12),
        0 0 0 1px rgba(184, 149, 106, 0.3);
}

.info-card:hover::before {
    transform: scaleY(1);
    transform-origin: top;
}

.info-card-header {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    margin-bottom: 1.2rem;
}

.info-icon {
    width: 65px;
    height: 65px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    transition: all 0.4s ease;
    border: 1px solid rgba(184, 149, 106, 0.2);
}

.info-card:hover .info-icon {
    transform: scale(1.1);
    box-shadow: 0 8px 25px rgba(184, 149, 106, 0.4);
}

.info-card h3 {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary-brown);
    transition: color 0.3s ease;
}

.info-card:hover h3 {
    color: var(--accent-gold-light);
}

.info-card a,
.info-card p {
    font-size: 1.1rem;
    color: var(--text-gray);
    line-height: 1.8;
    margin: 0;
    transition: color 0.3s ease;
}

.info-card a {
    text-decoration: none;
}

.info-card:hover a,
.info-card:hover p {
    color: var(--primary-brown);
}

/* Contact Form */
.contact-form-wrapper {
    background: #ffffff;
    padding: 3.5rem;
    border-radius: 24px;
    box-shadow: 
        0 20px 40px rgba(0, 0, 0, 0.08),
        0 0 0 1px rgba(184, 149, 106, 0.1);
    position: relative;
    overflow: hidden;
}

.contact-form-wrapper::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--accent-gold) 0%, var(--accent-gold-light) 100%);
}

.contact-form-wrapper h2 {
    font-size: 2.2rem;
    font-weight: 800;
    color: var(--primary-brown);
    margin-bottom: 2.5rem;
    text-align: right;
    position: relative;
    padding-bottom: 1rem;
}

.contact-form-wrapper h2::after {
    content: '';
    position: absolute;
    bottom: 0;
    right: 0;
    width: 80px;
    height: 3px;
    background: linear-gradient(90deg, var(--accent-gold) 0%, transparent 100%);
    border-radius: 2px;
}

.form-group {
    margin-bottom: 2rem;
}

.form-group label {
    display: block;
    font-size: 1.05rem;
    font-weight: 600;
    color: var(--primary-brown);
    margin-bottom: 0.7rem;
    text-align: right;
}

.form-control {
    width: 100%;
    padding: 1.1rem 1.3rem;
    font-size: 1.05rem;
    border: 2px solid rgba(184, 149, 106, 0.2);
    border-radius: 12px;
    transition: all 0.3s ease;
    font-family: inherit;
    text-align: right;
    background: #fafafa;
}

.form-control:focus {
    outline: none;
    border-color: var(--accent-gold);
    background: #ffffff;
    box-shadow: 
        0 0 0 4px rgba(184, 149, 106, 0.1),
        0 4px 12px rgba(184, 149, 106, 0.15);
}

textarea.form-control {
    resize: vertical;
    min-height: 160px;
}

.submit-btn {
    width: 100%;
    padding: 1.3rem;
    background: linear-gradient(135deg, var(--primary-brown) 0%, var(--primary-brown-dark) 100%);
    color: #ffffff;
    border: none;
    border-radius: 12px;
    font-size: 1.15rem;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 
        0 8px 20px rgba(0, 0, 0, 0.15),
        0 4px 8px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
}

.submit-btn::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0) 100%);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.submit-btn:hover {
    transform: translateY(-3px);
    box-shadow: 
        0 15px 35px rgba(0, 0, 0, 0.25),
        0 8px 15px rgba(0, 0, 0, 0.15);
}

.submit-btn:hover::before {
    opacity: 1;
}

.submit-btn:active {
    transform: translateY(-1px);
}

/* Alert */
.alert {
    padding: 1.2rem 1.8rem;
    border-radius: 12px;
    margin-bottom: 2rem;
    font-size: 1.05rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 1rem;
}

.alert-success {
    background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
    color: #155724;
    border: 2px solid #b1dfbb;
    box-shadow: 0 4px 12px rgba(21, 87, 36, 0.1);
}

.alert-success::before {
    content: '✓';
    width: 30px;
    height: 30px;
    background: #28a745;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
}

/* Responsive */
@media (max-width: 968px) {
    .contact-hero {
        padding: 5rem 0 7rem;
    }

    .contact-hero h1 {
        font-size: 3rem;
        letter-spacing: -1px;
    }

    .contact-hero p {
        font-size: 1.15rem;
    }

    .contact-section {
        padding: 4rem 0 5rem;
        margin-top: -3rem;
    }

    .contact-grid {
        grid-template-columns: 1fr;
        gap: 3rem;
    }

    .contact-form-wrapper {
        padding: 2.5rem 2rem;
    }

    .contact-form-wrapper h2 {
        font-size: 1.9rem;
    }

    .info-card {
        padding: 2rem;
    }
}

@media (min-width: 969px) and (max-width: 1200px) {
    .contact-hero h1 {
        font-size: 4.5rem;
    }

    .contact-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<!-- Hero Section -->
<section class="contact-hero">
    <div class="hero-shape hero-shape-1"></div>
    <div class="hero-shape hero-shape-2"></div>

    <div class="hero-pattern"></div>
    
    <div class="contact-hero-content">
        <div class="contact-badge scroll-reveal">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
            </svg>
            <span>نحن هنا للاستماع إليك</span>
        </div>
        
        <h1 class="scroll-reveal">تواصل معنا</h1>
        <p class="scroll-reveal">
            نسعد بالاستماع إليكم والرد على جميع استفساراتكم
        </p>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Information -->
            <div class="contact-info">
                <div class="info-card scroll-reveal" style="transition-delay: 0.1s;">
                    <div class="info-card-header">
                        <div class="info-icon">📞</div>
                        <h3>الهاتف</h3>
                    </div>
                    <a href="tel:+966531443818">
                        <span dir="ltr" style="white-space: nowrap;">
                            +966 53 144 3818
                        </span>
                    </a>
                </div>

                <div class="info-card scroll-reveal" style="transition-delay: 0.2s;">
                    <div class="info-card-header">
                        <div class="info-icon">📧</div>
                        <h3>البريد الإلكتروني</h3>
                    </div>
                    <a href="mailto:info@mawadda.sa">
                        <span dir="ltr">info@mawadda.sa</span>
                    </a>
                </div>

                <div class="info-card scroll-reveal" style="transition-delay: 0.3s;">
                    <div class="info-card-header">
                        <div class="info-icon">📍</div>
                        <h3>العنوان</h3>
                    </div>
                    <a href="https://share.google/ZJ2yUJ1IKdItUfWPu" target="_blank">
                        المملكة العربية السعودية - جدة - حي الفيحاء
                    </a>
                </div>

                <div class="info-card scroll-reveal" style="transition-delay: 0.4s;">
                    <div class="info-card-header">
                        <div class="info-icon">🕐</div>
                        <h3>أوقات العمل</h3>
                    </div>
                    <p>الأحد - الخميس: 8:00 صباحاً - 4:00 مساءً</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-wrapper scroll-reveal" style="transition-delay: 0.2s;">
                <h2>أرسل لنا رسالة</h2>

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <div>
                    <div class="form-group">
                        <label for="name">الاسم الكامل</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="أدخل اسمك الكامل" required>
                    </div>

                    <div class="form-group">
                        <label for="email">البريد الإلكتروني</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="example@email.com" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">الموضوع</label>
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="موضوع الرسالة" required>
                    </div>

                    <div class="form-group">
                        <label for="message">الرسالة</label>
                        <textarea id="message" name="message" class="form-control" placeholder="اكتب رسالتك هنا..." required></textarea>
                    </div>

                    <button type="button" onclick="handleSubmit()" class="submit-btn">إرسال الرسالة</button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function handleSubmit() {
    // في التطبيق الفعلي، سيتم إرسال البيانات إلى السيرفر
    // هنا فقط رسالة توضيحية
    alert('شكراً لتواصلك معنا. سنرد على رسالتك في أقرب وقت ممكن.');
    
    // مسح الحقول
    document.getElementById('name').value = '';
    document.getElementById('email').value = '';
    document.getElementById('subject').value = '';
    document.getElementById('message').value = '';
}
</script>
@endsection