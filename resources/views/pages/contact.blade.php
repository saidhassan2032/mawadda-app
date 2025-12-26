@extends('layouts.app')

@section('title', 'تواصل معنا - وقف المودة')
@section('meta_description', 'تواصل مع وقف المودة - نسعد بالاستماع إليكم والرد على استفساراتكم')

@section('content')
<style>
    .contact-hero {
        background: linear-gradient(135deg, var(--primary-brown) 0%, var(--primary-brown-dark) 100%);
        padding: 6rem 0;
        text-align: center;
    }

    .contact-hero h1 {
        font-size: 3.5rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 1rem;
    }

    .contact-hero p {
        font-size: 1.3rem;
        color: rgba(255, 255, 255, 0.9);
        max-width: 700px;
        margin: 0 auto;
    }

    .contact-section {
        padding: 6rem 0;
    }

    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        gap: 4rem;
        max-width: 1300px;
        margin: 0 auto;
    }

    .contact-info {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .info-card {
        background: linear-gradient(135deg, #ffffff 0%, var(--bg-light) 100%);
        padding: 2.5rem;
        border-radius: 12px;
        border-right: 4px solid var(--accent-gold);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
        transition: all 0.3s ease;
    }

    .info-card:hover {
        transform: translateX(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .info-card-header {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        margin-bottom: 1rem;
    }

    .info-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--accent-gold) 0%, var(--accent-gold-light) 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
    }

    .info-card h3 {
        font-size: 1.4rem;
        font-weight: 700;
        color: var(--primary-brown);
    }

    .info-card p {
        font-size: 1.1rem;
        color: var(--text-dark);
        line-height: 1.8;
        margin: 0;
    }

    .contact-form-wrapper {
        background: #ffffff;
        padding: 3rem;
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        border: 1px solid rgba(139, 115, 85, 0.1);
    }

    .contact-form-wrapper h2 {
        font-size: 2rem;
        font-weight: 700;
        color: var(--primary-brown-dark);
        margin-bottom: 2rem;
        text-align: right;
    }

    .form-group {
        margin-bottom: 1.8rem;
    }

    .form-group label {
        display: block;
        font-size: 1.05rem;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
        text-align: right;
    }

    .form-control {
        width: 100%;
        padding: 1rem 1.2rem;
        font-size: 1.05rem;
        border: 2px solid rgba(139, 115, 85, 0.2);
        border-radius: 8px;
        transition: all 0.3s ease;
        font-family: inherit;
        text-align: right;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--accent-gold);
        box-shadow: 0 0 0 3px rgba(184, 149, 106, 0.1);
    }

    textarea.form-control {
        resize: vertical;
        min-height: 150px;
    }

    .submit-btn {
        width: 100%;
        padding: 1.2rem;
        background: linear-gradient(135deg, var(--primary-brown) 0%, var(--primary-brown-dark) 100%);
        color: #ffffff;
        border: none;
        border-radius: 8px;
        font-size: 1.15rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(139, 115, 85, 0.3);
    }

    .alert {
        padding: 1rem 1.5rem;
        border-radius: 8px;
        margin-bottom: 2rem;
        font-size: 1.05rem;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    @media (max-width: 968px) {
        .contact-grid {
            grid-template-columns: 1fr;
            gap: 3rem;
        }

        .contact-hero h1 {
            font-size: 2.5rem;
        }
    }
</style>

<!-- Hero Section -->
<section class="contact-hero">
    <div class="container">
        <h1>تواصل معنا</h1>
        <p>نسعد بالاستماع إليكم والرد على جميع استفساراتكم</p>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Information -->
            <div class="contact-info">
                <div class="info-card">
                    <div class="info-card-header">
                        <div class="info-icon">📞</div>
                        <h3>الهاتف</h3>
                    </div>
                    <p>+966 53 144 3818</p>
                </div>

                <div class="info-card">
                    <div class="info-card-header">
                        <div class="info-icon">📧</div>
                        <h3>البريد الإلكتروني</h3>
                    </div>
                    <p>info@mawadda.sa</p>
                </div>

                <div class="info-card">
                    <div class="info-card-header">
                        <div class="info-icon">📍</div>
                        <h3>العنوان</h3>
                    </div>
                    <p>المملكة العربية السعودية</p>
                </div>

                <div class="info-card">
                    <div class="info-card-header">
                        <div class="info-icon">🕐</div>
                        <h3>أوقات العمل</h3>
                    </div>
                    <p>الأحد - الخميس: 8:00 صباحاً - 4:00 مساءً</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-wrapper">
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