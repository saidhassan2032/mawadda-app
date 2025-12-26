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
                'level' => 1
            ],
            [
                'title' => 'مجلس النظارة',
                'description' => 'رسم السياسات العامة والإشراف على تنفيذ الخطط الاستراتيجية',
                'level' => 2
            ],
            [
                'title' => 'المدير التنفيذي',
                'description' => 'إدارة العمليات اليومية وتنفيذ قرارات مجلس الإدارة',
                'level' => 3
            ],
            [
                'title' => 'الإدارة المالية',
                'description' => 'إدارة موارد الوقف وأصوله وضمان الشفافية المالية',
                'level' => 3
            ],
            [
                'title' => 'إدارة البرامج',
                'description' => 'تخطيط وتنفيذ البرامج والأنشطة الخيرية',
                'level' => 3
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