<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the about page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display the founder's word page.
     *
     * @return \Illuminate\View\View
     */
    public function founder()
    {
        return view('pages.founder');
    }

    /**
     * Display the structure page.
     *
     * @return \Illuminate\View\View
     */
    public function structure()
    {
        // هيكل الوقف التنظيمي
        $structureItems = [
            [
                'title' => 'الناظر على الوقف',
                'description' => 'الإشراف العام على الوقف ومتابعة تنفيذ شروط الواقف',
                'level' => 1,
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" 
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                        stroke-linejoin="round" class="lucide lucide-users-round-icon lucide-users-round">
                        <path d="M18 21a8 8 0 0 0-16 0"/><circle cx="10" cy="8" r="5"/>
                        <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3"/></svg>'
            ],
            [
                'title' => 'مجلس النظارة',
                'description' => 'رسم السياسات العامة والإشراف على تنفيذ الخطط الاستراتيجية',
                'level' => 2,
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="55" height="55"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-landmark">
                            <path d="M10 18v-7"/>
                            <path d="M11.12 2.198a2 2 0 0 1 1.76.006l7.866 3.847c.476.233.31.949-.22.949H3.474c-.53 0-.695-.716-.22-.949z"/>
                            <path d="M14 18v-7"/>
                            <path d="M18 18v-7"/>
                            <path d="M3 22h18"/>
                            <path d="M6 18v-7"/>
                        </svg>'
            ],
            [
                'title' => 'المدير التنفيذي',
                'description' => 'إدارة العمليات اليومية وتنفيذ قرارات مجلس الإدارة',
                'level' => 3,
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" 
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                stroke-linejoin="round" class="lucide lucide-toolbox-icon lucide-toolbox"><path d="M16 12v4"/>
                <path d="M16 6a2 2 0 0 1 1.414.586l4 4A2 2 0 0 1 22 12v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 .586-1.414l4-4A2 2 0 0 1 8 6z"/>
                <path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><path d="M2 14h20"/><path d="M8 12v4"/></svg>'
            ],
            [
                'title' => 'الإدارة المالية',
                'description' => 'إدارة موارد الوقف وأصوله وضمان الشفافية المالية',
                'level' => 3,
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" 
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                stroke-linejoin="round" class="lucide lucide-scale-icon lucide-scale"><path d="M12 3v18"/>
                <path d="m19 8 3 8a5 5 0 0 1-6 0zV7"/><path d="M3 7h1a17 17 0 0 0 8-2 17 17 0 0 0 8 2h1"/>
                <path d="m5 8 3 8a5 5 0 0 1-6 0zV7"/><path d="M7 21h10"/></svg>'
            ],
            [
                'title' => 'إدارة البرامج',
                'description' => 'تخطيط وتنفيذ البرامج والأنشطة الخيرية',
                'level' => 3,
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" 
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                stroke-linejoin="round" class="lucide lucide-sprout-icon lucide-sprout">
                <path d="M14 9.536V7a4 4 0 0 1 4-4h1.5a.5.5 0 0 1 .5.5V5a4 4 0 0 1-4 4 4 4 0 0 0-4 4c0 2 1 3 1 5a5 5 0 0 1-1 3"/>
                <path d="M4 9a5 5 0 0 1 8 4 5 5 0 0 1-8-4"/><path d="M5 21h14"/></svg>'
            ]
        ];

        return view('pages.structure', compact('structureItems'));
    }

    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Handle contact form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitContact(Request $request)
    {
        // التحقق من صحة البيانات
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ], [
            'name.required' => 'الاسم مطلوب',
            'email.required' => 'البريد الإلكتروني مطلوب',
            'email.email' => 'يرجى إدخال بريد إلكتروني صحيح',
            'subject.required' => 'الموضوع مطلوب',
            'message.required' => 'الرسالة مطلوبة',
        ]);

        // هنا يمكن إضافة كود لإرسال البريد الإلكتروني
        // أو حفظ الرسالة في قاعدة البيانات
        
        // مثال لإرسال بريد إلكتروني:
        // Mail::to('info@waqfmawadda.org')->send(new ContactMessage($validated));
        
        // مثال لحفظ في قاعدة البيانات:
        // ContactMessage::create($validated);

        return back()->with('success', 'تم إرسال رسالتك بنجاح. سنتواصل معك في أقرب وقت ممكن.');
    }
}