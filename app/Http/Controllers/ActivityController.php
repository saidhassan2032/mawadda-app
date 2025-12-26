<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of activities.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // قائمة أنشطة الوقف
        $activities = [
            [
                'id' => 1,
                'slug' => 'mujamma-almawadda',
                'title' => 'مجمع المودة القرآني',
                'subtitle' => 'لتحفيظ القرآن الكريم',
                'description' => 'مجمع متخصص في تحفيظ القرآن الكريم بأحدث الأساليب التعليمية',
                'color_from' => '#7BA428',  
                'color_to' => '#9CB82E',  
                'image' => 'mujamma-almawadda.jpg'
            ],
            [
                'id' => 2,
                'slug' => 'aljaira',
                'title' => 'الجيرة',
                'subtitle' => 'برنامج خيري اجتماعي',
                'description' => 'برنامج يهدف لخدمة المجتمع وتعزيز الروابط بين أفراده',
                'color_from' => '#043103',  
                'color_to' => 'rgba(11, 55, 22, 0.45)',   
                'image' => 'aljaira.jpg'
            ]
        ];

        return view('activities.index', compact('activities'));
    }

    /**
     * Display the specified activity.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        // بيانات تفصيلية لكل نشاط
        $activities = [
            'mujamma-almawadda' => [
                'title' => 'مجمع المودة القرآني',
                'subtitle' => 'لتحفيظ القرآن الكريم',
                'description' => 'مجمع متخصص في تحفيظ القرآن الكريم يهدف إلى تعليم كتاب الله بأحدث الأساليب التربوية والتعليمية، مع التركيز على التجويد وأحكام التلاوة.',
                'color_from' => '#7BA428',
                'color_to' => '#9CB82E',
                'objectives' => [
                    'تحفيظ القرآن الكريم بالقراءات الصحيحة وفق منهج متدرج',
                    'تعليم أحكام التجويد والتلاوة بطريقة علمية ومبسطة',
                    'تربية النشء على القيم الإسلامية والأخلاق الفاضلة',
                    'إقامة الدورات والمسابقات القرآنية التحفيزية'
                ],
                'features' => [
                    'معلمون مؤهلون ومتخصصون في علوم القرآن',
                    'حلقات تحفيظ منظمة حسب المستويات العمرية',
                    'برامج تحفيزية ومكافآت تشجيعية للطلاب',
                    'بيئة تعليمية محفزة ومجهزة بأحدث الوسائل'
                ],
                'schedule' => 'يومياً بين المغرب والعشاء (ما عدا الجمعة والسبت)',
                'location' => 'المملكة العربية السعودية - جدة',
                'target_group' => 'الطلاب من سن 7 سنوات وما فوق',
                'image' => 'mujamma-almawadda.jpg'
            ],
            'aljaira' => [
                'title' => 'الجيرة',
                'subtitle' => 'فعاليات وأنشطة مجتمعية',
                'description' => 'مبادرة مجتمعية يقدمها وقف المودة، تهدف إلى تعزيز الروابط بين أهالي الحي من خلال فعاليات وأنشطة اجتماعية وثقافية وترفيهية تُقام على مدار العام.',
                'color_from' => '#043103',
                'color_to' => 'rgba(11, 55, 22, 0.45)',
                'objectives' => [
                    'تعزيز روح الألفة والتواصل بين سكان الحي',
                    'تنظيم فعاليات مجتمعية تشجع المشاركة والتعاون',
                    'توفير بيئة محفزة للإبداع والتطوع',
                    'دعم الأنشطة الثقافية والترفيهية لأهالي الحي'
                ],
                'features' => [
                    'تنظيم فعاليات متنوعة تناسب جميع الفئات',
                    'مساحات تفاعلية لزيادة التواصل بين الجيران',
                    'ورش عمل وأنشطة تعليمية وترفيهية',
                    'تنفيذ البرامج بإشراف وقف المودة وبجودة عالية'
                ],
                'schedule' => 'حسب الفعاليات المجدولة',
                'location' => 'المملكة العربية السعودية - جدة',
                'target_group' => 'أهالي الحي من جميع الفئات',
                'image' => 'aljaira.jpg'
        ]

        ];

        // التحقق من وجود النشاط
        if (!isset($activities[$slug])) {
            abort(404, 'النشاط غير موجود');
        }

        $activity = $activities[$slug];

        return view('activities.show', compact('activity'));
    }

    /**
     * Get activity by ID (optional - for API or AJAX requests).
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getActivity($id)
    {
        $activities = [
            1 => [
                'id' => 1,
                'slug' => 'mujamma-almawadda',
                'title' => 'مجمع المودة المسائي',
                'subtitle' => 'لتحفيظ القرآن الكريم',
            ],
            2 => [
                'id' => 2,
                'slug' => 'aljaira',
                'title' => 'الجيرة',
                'subtitle' => 'برنامج خيري اجتماعي',
            ]
        ];

        if (!isset($activities[$id])) {
            return response()->json([
                'success' => false,
                'message' => 'النشاط غير موجود'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $activities[$id]
        ]);
    }
}