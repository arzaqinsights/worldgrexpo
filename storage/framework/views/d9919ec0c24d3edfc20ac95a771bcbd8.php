<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title', 'World Grexpo Global Network'); ?></title>
    <meta name="description"
        content="<?php echo $__env->yieldContent('meta_description', 'World Grexpo - The premier global business ecosystem connecting visionaries and industry giants.'); ?>">

    <?php echo $__env->yieldPushContent('meta'); ?>

    <!-- DNS Prefetch & Preconnect for speed -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('images/logo/logo.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('images/logo/logo.png')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('images/logo/logo.png')); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('images/logo/logo.png')); ?>">

    <!-- Critical CSS: Fonts (swap to prevent FOIT) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"
        media="print" onload="this.media='all'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
            rel="stylesheet">
    </noscript>

    <!-- Font Awesome (deferred) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" media="print" onload="this.media='all'" />

    <!-- Swiper CSS (deferred) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" media="print"
        onload="this.media='all'" />

    <!-- Swiper JS (deferred) -->
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Tailwind Vite Directives & App JS (includes Alpine.js + Turbo) -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="font-sans text-gray-800 bg-white antialiased">

    <!-- Top Bar -->
    <div class="bg-brand-primary text-white py-2 hidden md:block">
        <div class="container flex justify-between items-center">
            <div class="flex items-center gap-8">
                <?php if($site['phone_1'] ?? false): ?>
                    <a href="tel:<?php echo e($site['phone_1']); ?>"
                        class="flex items-center gap-2 hover:text-brand-accent transition-colors text-[11px] font-bold tracking-widest uppercase">
                        <i class="fa-solid fa-phone text-brand-accent"></i>
                        <?php echo e($site['phone_1']); ?>

                    </a>
                <?php endif; ?>
                <?php if($site['email_1'] ?? false): ?>
                    <a href="mailto:<?php echo e($site['email_1']); ?>"
                        class="flex items-center gap-2 hover:text-brand-accent transition-colors text-[11px] font-bold tracking-widest uppercase">
                        <i class="fa-solid fa-envelope text-brand-accent"></i>
                        <?php echo e($site['email_1']); ?>

                    </a>
                <?php endif; ?>
            </div>
            <div class="flex items-center gap-4">
                <?php $__currentLoopData = ['facebook' => 'facebook-f', 'twitter' => 'x-twitter', 'linkedin' => 'linkedin-in', 'instagram' => 'instagram', 'youtube' => 'youtube']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $platform => $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($site[$platform . '_url'] ?? false): ?>
                        <a href="<?php echo e($site[$platform . '_url']); ?>" target="_blank"
                            class="text-white hover:text-brand-accent transition-colors text-xs">
                            <i class="fa-brands fa-<?php echo e($icon); ?>"></i>
                        </a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <header x-data="{ megaOpen: false, mobileOpen: false }"
        class="sticky top-0 left-0 w-full z-50 bg-white border-b border-slate-100 transition-all duration-300">

        <div class="container flex justify-between items-center py-4">
            <!-- Logo -->
            <a href="/" class="flex items-center">
                <img src="<?php echo e(asset('images/logo/logo.png')); ?>" alt="Logo" class="h-12 md:h-16 w-auto object-contain">
            </a>

            <?php
                $teamPages = \App\Models\TeamPage::where('status', true)->orderBy('order')->get()->map(function ($page) {
                    return [
                        'name' => $page->title,
                        'route' => 'about.team_page',
                        'slug' => $page->slug,
                        'active' => 'about/' . $page->slug
                    ];
                })->toArray();

                $menu = [
                    ['name' => 'HOME', 'route' => 'home', 'active' => '/'],
                    [
                        'name' => 'ABOUT',
                        'route' => 'about.index',
                        'active' => 'about.*',
                        'sub_menu' => array_merge(
                            [
                                ['name' => 'Institutional Profile', 'route' => 'about.index', 'active' => 'about'],
                                // ['name' => 'Global Chairman', 'route' => 'about.chairman', 'active' => 'about/chairman'],
                            ],
                            $teamPages,
                            [
                                ['name' => 'Wall of Excellence', 'route' => 'excellence.index', 'active' => 'wall-of-excellence'],
                            ]
                        )
                    ],
                    [
                        'name' => 'PARTICIPATE',
                        'route' => 'join.index',
                        'active' => 'join',
                        'sub_menu' => \App\Models\Form::where('status', 'published')->where('is_hidden', false)->whereNotIn('slug', ['nomination-form'])->get()->map(function ($form) {
                            return [
                                'name' => $form->name,
                                'route' => 'join.forms.show',
                                'slug' => $form->slug,
                                'active' => 'join/application/' . $form->slug
                            ];
                        })->toArray()
                    ],
                    [
                        'name' => 'AWARDS',
                        'route' => 'join.index',
                        'active' => 'join',
                        'sub_menu' => \App\Models\Form::where('status', 'published')->where('is_hidden', false)->where('slug', 'like', 'nomination%')->get()->map(function ($form) {
                            return [
                                'name' => $form->name,
                                'route' => 'join.forms.show',
                                'slug' => $form->slug,
                                'active' => 'join/application/' . $form->slug
                            ];
                        })->toArray()
                    ],
                    [
                        'name' => 'SECTORS',
                        'route' => 'sectors.index',
                        'active' => 'sectors.*',
                        'mega' => true,
                        'sub_menu' => config('sectors.sectors')
                    ],
                    ['name' => 'EVENTS & SUMMITS', 'route' => 'events.index', 'active' => 'events.*'],
                    ['name' => 'BLOGS', 'route' => 'blog.index', 'active' => 'blogs.*'],
                    ['name' => 'GALLERY', 'route' => 'gallery', 'active' => 'gallery.*'],
                ];
            ?>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center gap-8">
                <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(isset($m['sub_menu'])): ?>
                        <div class="relative group" <?php if(isset($m['mega'])): ?> @mouseenter="megaOpen = true"
                        @mouseleave="megaOpen = false" <?php endif; ?>>
                            <button
                                class="flex items-center gap-2 text-[12px] font-black tracking-[0.15em] transition-colors <?php echo e(request()->routeIs($m['active']) ? 'text-brand-primary' : 'text-slate-900 hover:text-brand-primary'); ?>">
                                <?php echo e($m['name']); ?>

                                <i
                                    class="fa-solid fa-chevron-down text-[10px] transition-transform duration-300 group-hover:rotate-180"></i>
                            </button>

                            <?php if(!isset($m['mega'])): ?>
                                <div
                                    class="absolute top-full left-0 pt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                                    <div class="w-72 bg-white border border-slate-200 shadow-xl p-4 flex flex-col gap-1">
                                        <?php $__currentLoopData = $m['sub_menu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php echo e(isset($sub['slug']) ? route($sub['route'], $sub['slug']) : route($sub['route'])); ?>"
                                                class="px-4 py-3 text-[11px] font-bold uppercase tracking-wider text-slate-700 hover:bg-brand-primary hover:text-white transition-all">
                                                <?php echo e($sub['name'] ?? $sub['title']); ?>

                                            </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php else: ?>
                        <a href="<?php echo e(route($m['route'])); ?>"
                            class="text-[12px] font-black tracking-[0.15em] transition-colors <?php echo e(request()->routeIs($m['active']) ? 'text-brand-primary' : 'text-slate-900 hover:text-brand-primary'); ?>">
                            <?php echo e($m['name']); ?>

                        </a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </nav>

            <!-- Action Buttons -->
            <div class="flex items-center gap-4">
                <a href="<?php echo e(!auth()->check() ? route('register') : route('dashboard')); ?>"
                    class="hidden md:flex items-center justify-center bg-brand-primary text-white px-8 py-3.5 text-[11px] font-black uppercase tracking-widest hover:bg-brand-primary-dark transition-all">
                    <?php echo e(!auth()->check() ? 'Get Started' : 'Dashboard'); ?>

                </a>

                <!-- Mobile Menu Toggle -->
                <button @click="mobileOpen = true" class="lg:hidden p-3 bg-slate-50 text-slate-900">
                    <i class="fa-solid fa-bars-staggered text-xl"></i>
                </button>
            </div>
        </div>

        
        <div x-show="megaOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            class="absolute top-full left-0 w-full bg-white h-[75vh] overflow-scroll border-t border-slate-200 shadow-2xl z-40"
            style="display: none;" @mouseenter="megaOpen = true" @mouseleave="megaOpen = false">
            <div class="container py-12">
                <div class="grid grid-cols-12 gap-12">
                    <div class="col-span-4 border-r border-slate-100 pr-12">
                        <div class="bg-slate-50 p-8">
                            <h3 class="text-2xl font-black text-slate-900 mb-4 uppercase tracking-tighter">Industry
                                Sectors</h3>
                            <p class="text-sm text-slate-500 leading-relaxed mb-6">Explore the diverse sectors powering
                                the global economy and connect with industry leaders through our specialized network.
                            </p>
                            <a href="<?php echo e(route('sectors.index')); ?>"
                                class="inline-flex items-center gap-3 text-xs font-black text-brand-primary uppercase tracking-widest hover:gap-5 transition-all">
                                View All Sectors <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-span-8 columns-3 gap-x-12 space-y-1">
                        <?php $__currentLoopData = config('sectors.sectors'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sector): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('sectors.show', $sector['slug'])); ?>"
                                class="group flex items-center gap-4 py-2 border-b border-transparent hover:border-brand-primary transition-all break-inside-avoid">
                                <span
                                    class="text-[10px] font-black text-slate-300 group-hover:text-brand-primary transition-colors">
                                    <?php echo e(str_pad($loop->iteration, 2, '0', STR_PAD_LEFT)); ?>

                                </span>
                                <span
                                    class="text-[11px] font-bold uppercase tracking-wider text-slate-600 group-hover:text-slate-900 transition-colors">
                                    <?php echo e($sector['title']); ?>

                                </span>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Slide-out Menu -->
    <div x-show="mobileOpen" class="fixed inset-0 z-[100] lg:hidden" style="display: none;">
        <!-- Overlay -->
        <div @click="mobileOpen = false" x-show="mobileOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="absolute inset-0 bg-slate-900/60"></div>

        <!-- Menu Content -->
        <div x-show="mobileOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            class="absolute top-0 right-0 w-[85%] max-w-sm h-full bg-white shadow-2xl flex flex-col">

            <!-- Mobile Header -->
            <div class="p-6 flex justify-between items-center border-b border-slate-100">
                <img src="<?php echo e(asset('images/logo/logo.png')); ?>" alt="Logo" class="h-10 w-auto">
                <button @click="mobileOpen = false" class="text-slate-900">
                    <i class="fa-solid fa-xmark text-2xl"></i>
                </button>
            </div>

            <!-- Scrollable Links -->
            <div class="flex-1 overflow-y-auto p-6 space-y-2">
                <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div x-data="{ open: false }">
                        <?php if(isset($m['sub_menu'])): ?>
                            <button @click="open = !open"
                                class="flex justify-between items-center w-full py-4 text-sm font-black uppercase tracking-widest text-slate-900">
                                <?php echo e($m['name']); ?>

                                <i class="fa-solid fa-chevron-down text-xs transition-transform"
                                    :class="open ? 'rotate-180' : ''"></i>
                            </button>
                            <div x-show="open" class="pl-4 space-y-4 pb-4">
                                <?php $__currentLoopData = $m['sub_menu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(isset($sub['slug']) ? route($sub['route'], $sub['slug']) : route($sub['route'])); ?>"
                                        class="block text-[11px] font-bold uppercase tracking-wider text-slate-500">
                                        <?php echo e($sub['name'] ?? $sub['title']); ?>

                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php else: ?>
                            <a href="<?php echo e(route($m['route'])); ?>"
                                class="block py-4 text-sm font-black uppercase tracking-widest text-slate-900">
                                <?php echo e($m['name']); ?>

                            </a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Mobile Footer CTA -->
            <div class="p-6 border-t border-slate-100">
                <a href="<?php echo e(!auth()->check() ? route('register') : route('dashboard')); ?>"
                    class="block w-full text-center bg-brand-primary text-white py-4 text-xs font-black uppercase tracking-widest">
                    <?php echo e(!auth()->check() ? 'Get Started' : 'Dashboard'); ?>

                </a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="relative min-h-screen">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Industrial Footer -->
    <footer class="bg-brand-primary pt-20 pb-12 overflow-hidden relative text-white">
        <!-- Subtle Industrial Pattern -->
        <div class="absolute inset-0 z-0 opacity-5">
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.1)_1px,transparent_1px)] bg-[size:40px_40px]">
            </div>
        </div>

        <div class="container relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 pb-16 border-b border-white/10">
                <!-- Brand Story -->
                <div class="lg:col-span-5">
                    <img src="<?php echo e(asset('images/logo/logo.png')); ?>" alt="Logo"
                        class="h-18 w-auto mb-8 brightness-0 invert">
                    <h2 class="text-2xl font-bold mb-6 leading-tight tracking-tight">
                        Bridging Global <br><span class="opacity-50">Industrial Excellence</span>
                    </h2>
                    <p class="text-white/60 leading-relaxed mb-8 text-sm max-w-md font-medium">
                        World Grexpo is the premier global business ecosystem bridging the gap between innovative
                        enterprises and industrial giants to redefine trade.
                    </p>
                    <div class="flex gap-3">
                        <?php $__currentLoopData = ['facebook' => 'facebook-f', 'twitter' => 'x-twitter', 'linkedin' => 'linkedin-in', 'instagram' => 'instagram', 'youtube' => 'youtube']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $platform => $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($site[$platform . '_url'] ?? false): ?>
                                <a href="<?php echo e($site[$platform . '_url']); ?>" target="_blank"
                                    class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white hover:bg-white hover:text-brand-primary transition-all duration-300">
                                    <i class="fa-brands fa-<?php echo e($icon); ?> text-sm"></i>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <!-- Footer Navigation Links -->
                <div class="lg:col-span-2">
                    <h3 class="text-xs font-bold uppercase tracking-widest text-white/40 mb-8">Platform</h3>
                    <ul class="space-y-4">
                        <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(!isset($m['sub_menu']) && $loop->index < 5): ?>
                                <li><a href="<?php echo e(route($m['route'])); ?>"
                                        class="text-white/70 hover:text-white text-sm transition-colors"><?php echo e($m['name']); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('join.index')); ?>"
                                class="text-white/70 hover:text-white text-sm transition-colors">Participate</a>
                        </li>
                    </ul>
                </div>

                <div class="lg:col-span-2">
                    <h3 class="text-xs font-bold uppercase tracking-widest text-white/40 mb-8">Quick Access</h3>
                    <ul class="space-y-4">
                        <li><a href="<?php echo e(route('sectors.index')); ?>"
                                class="text-white/70 hover:text-white text-sm transition-colors">Sectors</a></li>
                        <li><a href="<?php echo e(route('events.index')); ?>"
                                class="text-white/70 hover:text-white text-sm transition-colors">Global Events</a></li>
                        <li><a href="<?php echo e(route('blog.index')); ?>"
                                class="text-white/70 hover:text-white text-sm transition-colors">Insights</a></li>
                        <li><a href="<?php echo e(route('privacy')); ?>"
                                class="text-white/70 hover:text-white text-sm transition-colors">Privacy</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="lg:col-span-3">
                    <h3 class="text-xs font-bold uppercase tracking-widest text-white/40 mb-8">Headquarters</h3>
                    <div class="space-y-8">
                        <?php if($site['address'] ?? false): ?>
                            <div class="flex gap-4">
                                <i class="fa-solid fa-location-dot text-white/40 mt-1"></i>
                                <p class="text-white/70 text-xs leading-relaxed font-medium">
                                    <?php echo nl2br(e($site['address'])); ?>

                                </p>
                            </div>
                        <?php endif; ?>
                        <div class="space-y-4">
                            <?php if($site['phone_1'] ?? false): ?>
                                <a href="tel:<?php echo e($site['phone_1']); ?>"
                                    class="flex items-center gap-4 text-white/70 hover:text-white group transition-colors">
                                    <div class="w-8 h-8 bg-white/5 flex items-center justify-center rounded-lg">
                                        <i class="fa-solid fa-phone text-xs"></i>
                                    </div>
                                    <span class="text-sm font-bold tracking-wider"><?php echo e($site['phone_1']); ?></span>
                                </a>
                            <?php endif; ?>
                            <?php if($site['email_1'] ?? false): ?>
                                <a href="mailto:<?php echo e($site['email_1']); ?>"
                                    class="flex items-center gap-4 text-white/70 hover:text-white group transition-colors">
                                    <div class="w-8 h-8 bg-white/5 flex items-center justify-center rounded-lg">
                                        <i class="fa-solid fa-envelope text-xs"></i>
                                    </div>
                                    <span class="text-sm font-bold tracking-wider"><?php echo e($site['email_1']); ?></span>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright -->
            <div class="pt-8 flex flex-col md:flex-row justify-between items-center gap-6">
                <p class="text-white/40 text-xs font-medium">
                    &copy; <?php echo e(date('Y')); ?> World Grexpo Foundation. All Rights Reserved.
                </p>
                <div class="flex gap-12">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-white/20"></span>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-white/40">Industrial
                            Standards</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-white/40"></span>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-white/40">Global
                            Connectivity</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Simplified Floating Help -->
    <div x-data="{ open: false }" class="fixed bottom-6 right-6 z-[90]">
        <div x-show="open" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            x-cloak class="absolute bottom-full right-0 mb-4 flex flex-col gap-2 items-end">
            <?php if($site['whatsapp_url'] ?? false): ?>
                <a href="<?php echo e($site['whatsapp_url']); ?>" target="_blank"
                    class="flex items-center gap-3 bg-white border border-slate-100 p-3 rounded-xl hover:border-brand-primary transition-all group shadow-xl">
                    <span class="text-xs font-bold text-slate-700">WhatsApp</span>
                    <div class="w-8 h-8 rounded-full bg-green-50 flex items-center justify-center text-green-600">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                </a>
            <?php endif; ?>
            <?php if($site['email_1'] ?? false): ?>
                <a href="mailto:<?php echo e($site['email_1']); ?>"
                    class="flex items-center gap-3 bg-white border border-slate-100 p-3 rounded-xl hover:border-brand-primary transition-all group shadow-xl">
                    <span class="text-xs font-bold text-slate-700">Support</span>
                    <div class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center text-blue-600">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                </a>
            <?php endif; ?>
        </div>

        <button @click="open = !open"
            class="w-14 h-14 bg-brand-primary text-white rounded-full border-2 border-white/20 flex items-center justify-center hover:bg-brand-primary-dark transition-all shadow-xl group">
            <i class="fa-solid fa-plus text-xl transition-transform duration-300" :class="open ? 'rotate-45' : ''"></i>
        </button>
    </div>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/layouts/website.blade.php ENDPATH**/ ?>