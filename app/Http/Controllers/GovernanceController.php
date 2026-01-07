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
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-landmark">
                    <path d="M10 18v-7"/>
                    <path d="M11.12 2.198a2 2 0 0 1 1.76.006l7.866 3.847c.476.233.31.949-.22.949H3.474c-.53 0-.695-.716-.22-.949z"/>
                    <path d="M14 18v-7"/>
                    <path d="M18 18v-7"/>
                    <path d="M3 22h18"/>
                    <path d="M6 18v-7"/>
                </svg>',
                'route' => 'structure',
            ],
            [
                'title' => 'التقارير والشفافية',
                'description' => 'التقارير الدورية والبيانات المالية.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round" class="lucide lucide-chart-no-axes-column-icon lucide-chart-no-axes-column">
                 <path d="M5 21v-6"/><path d="M12 21V3"/><path d="M19 21V9"/></svg>',
                'route' => '#',
            ],
            [
                'title' => 'اللوائح والسياسات',
                'description' => 'اللوائح الداخلية والسياسات التنظيمية.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" 
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                stroke-linejoin="round" class="lucide lucide-scale-icon lucide-scale"><path d="M12 3v18"/>
                <path d="m19 8 3 8a5 5 0 0 1-6 0zV7"/><path d="M3 7h1a17 17 0 0 0 8-2 17 17 0 0 0 8 2h1"/>
                <path d="m5 8 3 8a5 5 0 0 1-6 0zV7"/><path d="M7 21h10"/></svg>',
                'route' => '#',
            ],
            [
                'title' => 'الخطط',
                'description' => 'الخطط الاستراتيجية والتشغيلية للوقف.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" 
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                stroke-linejoin="round" class="lucide lucide-folder-closed-icon lucide-folder-closed">
                <path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/>
                <path d="M2 10h20"/></svg>',
                'route' => '#',
            ],
            [
                'title' => 'الشهادات',
                'description' => 'الشهادات والاعتمادات التي حصل عليها الوقف.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" 
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                stroke-linejoin="round" class="lucide lucide-award-icon lucide-award">
                <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"/>
                <circle cx="12" cy="8" r="6"/></svg>',
                'route' => '#',
            ],
            [
                'title' => 'الاستبيانات',
                'description' => 'نماذج الاستبيانات والتقييمات.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" 
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                stroke-linejoin="round" class="lucide lucide-clipboard-pen-line-icon lucide-clipboard-pen-line">
                <rect width="8" height="4" x="8" y="2" rx="1"/><path d="M8 4H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-.5"/>
                <path d="M16 4h2a2 2 0 0 1 1.73 1"/><path d="M8 18h1"/>
                <path d="M21.378 12.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z"/>
                </svg>',
                'route' => '#',
            ]
        ];

        return view('governance.index', compact('governanceContent'));
    }
}
