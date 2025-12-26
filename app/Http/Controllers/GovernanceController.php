<?php

namespace App\Http\Controllers;

class GovernanceController extends Controller
{
    /**
     * Display the governance page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $governanceContent = [
            [
                'title' => 'الهيكل التنظيمي',
                'description' => 'مكونات وهيكل إدارة الوقف.',
                'icon' => '🏛️',
                'route' => 'structure',
            ],
            [
                'title' => 'التقارير والشفافية',
                'description' => 'التقارير الدورية والبيانات المالية.',
                'icon' => '📊',
                'route' => '#',
            ],
            [
                'title' => 'اللوائح والسياسات',
                'description' => 'اللوائح الداخلية والسياسات التنظيمية.',
                'icon' => '⚖️',
                'route' => '#',
            ],
            [
                'title' => 'الخطط',
                'description' => 'الخطط الاستراتيجية والتشغيلية للوقف.',
                'icon' => '🗂️',
                'route' => '#',
            ],
            [
                'title' => 'الشهادات',
                'description' => 'الشهادات والاعتمادات التي حصل عليها الوقف.',
                'icon' => '🏅',
                'route' => '#',
            ],
            [
                'title' => 'الاستبيانات',
                'description' => 'نماذج الاستبيانات والتقييمات.',
                'icon' => '📝',
                'route' => '#',
            ]
        ];

        return view('governance.index', compact('governanceContent'));
    }
}
