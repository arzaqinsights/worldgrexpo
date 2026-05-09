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

    <!-- Google Analytics (GA4) — async, non-blocking -->
    <!-- <?php if(config('services.google.analytics_id')): ?>
        <script async
            src="https://www.googletagmanager.com/gtag/js?id=<?php echo e(config('services.google.analytics_id')); ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());
            gtag('config', '<?php echo e(config('services.google.analytics_id')); ?>');
        </script>
    <?php endif; ?>
    <script type="text/javascript">
        (function (c, l, a, r, i, t, y) {
            c[a] = c[a] || function () { (c[a].q = c[a].q || []).push(arguments) };
            t = l.createElement(r); t.async = 1; t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0]; y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "wk5b6320u4");
    </script>

    <script
        id="mcjs">!function (c, h, i, m, p) { m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m, p) }(document, "script", "https://chimpstatic.com/mcjs-connected/js/users/bfa5e1a8b8328405286aaebf5/35d901f961084419576fcf66c.js");</script> -->
</head>

<body class="font-sans text-gray-800 bg-white antialiased">

    <!-- Header Navigation
    <div class="bg-brand-light hidden md:block">
        <div class="flex py-1.5 container items-center justify-between">
            <div class="flex items-center gap-5">
                    <?php if($site['phone_1'] ?? false): ?>
                        <a href="tel:<?php echo e($site['phone_1']); ?>" class="flex items-center gap-2 hover:opacity-80 transition-opacity">
                            <i class="fa-solid fa-phone text-brand-primary text-xs"></i>
                            <span class="text-brand-primary text-xs font-medium"><?php echo e($site['phone_1']); ?></span>
                        </a>
                    <?php endif; ?>
                    <?php if($site['email_1'] ?? false): ?>
                        <a href="mailto:<?php echo e($site['email_1']); ?>" class="flex items-center gap-2 hover:opacity-80 transition-opacity">
                            <i class="fa-solid fa-envelope text-brand-primary text-xs"></i>
                            <span class="text-brand-primary text-xs font-medium"><?php echo e($site['email_1']); ?></span>
                        </a>
                    <?php endif; ?>
            </div>
            <div class="flex items-center gap-3">
                <?php if($site['facebook_url'] ?? false): ?>
                    <a href="<?php echo e($site['facebook_url']); ?>" target="_blank"
                        class="text-brand-primary hover:text-brand-accent transition-colors duration-300">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                <?php endif; ?>
                <?php if($site['twitter_url'] ?? false): ?>
                    <a href="<?php echo e($site['twitter_url']); ?>" target="_blank"
                        class="text-brand-primary hover:text-brand-accent transition-colors duration-300">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                <?php endif; ?>
                <?php if($site['instagram_url'] ?? false): ?>
                    <a href="<?php echo e($site['instagram_url']); ?>" target="_blank"
                        class="text-brand-primary hover:text-brand-accent transition-colors duration-300">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                <?php endif; ?>
                <?php if($site['linkedin_url'] ?? false): ?>
                    <a href="<?php echo e($site['linkedin_url']); ?>" target="_blank"
                        class="text-brand-primary hover:text-brand-accent transition-colors duration-300">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                <?php endif; ?>
                <?php if($site['youtube_url'] ?? false): ?>
                    <a href="<?php echo e($site['youtube_url']); ?>" target="_blank"
                        class="text-brand-primary hover:text-brand-accent transition-colors duration-300">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                <?php endif; ?>
                <?php if($site['whatsapp_url'] ?? false): ?>
                    <a href="<?php echo e($site['whatsapp_url']); ?>" target="_blank"
                        class="text-brand-primary hover:text-brand-accent transition-colors duration-300">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div> -->

    <header x-data="{ megaOpen: false, toggleMenu() { this.megaOpen = !this.megaOpen; } }"
        class="sticky bg-white border-b border-slate-200 top-0 left-0 w-full z-50 transition-all duration-500">

        <div class="container flex justify-between items-center py-3">
            <!-- Logo - ICON ONLY as requested -->
            <a href="/" class="relative group flex items-center">
                <img src="<?php echo e(asset('images/logo/logo.png')); ?>" alt="Logo" class="h-14 w-full shrink-0 object-contain">
                <!-- Hidden label for accessibility -->
                <!-- <span class="sr-only">World Grexpo Home</span> -->
            </a>

            <?php
                $menu = [
                    ['name' => 'HOME', 'route' => 'home', 'active' => '/'],
                    [
                        'name' => 'ABOUT',
                        'route' => 'about.index',
                        'active' => 'about.*',
                        'sub_menu' => [
                            ['name' => 'Institutional Profile', 'route' => 'about.index', 'active' => 'about'],
                            ['name' => 'Global Chairman', 'route' => 'about.chairman', 'active' => 'about/chairman'],
                            ['name' => 'Core Leadership', 'route' => 'about.leadership', 'active' => 'about/leadership'],
                            ['name' => 'Wall of Excellence', 'route' => 'excellence.index', 'active' => 'wall-of-excellence'],
                        ]
                    ],
                    [
                        'name' => 'PARTICIPATE',
                        'route' => 'join.index',
                        'active' => 'join.*',
                        'sub_menu' => \App\Models\Form::where('status', 'published')->where('is_hidden', false)->get()->map(function ($form) {
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
            <nav class="hidden lg:flex items-center gap-4 xl:gap-6">
                <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(isset($m['sub_menu'])): ?>
                        <div class="relative group/nav" <?php if(isset($m['mega'])): ?> @mouseenter="megaOpen = true"
                        @mouseleave="megaOpen = false" <?php endif; ?>>
                            <button
                                class="flex items-center gap-1.5 text-sm font-bold tracking-tight transition-colors <?php echo e(request()->routeIs($m['active']) ? 'text-brand-primary' : 'text-slate-700 hover:text-brand-primary'); ?>">
                                <?php echo e($m['name']); ?>

                                <i
                                    class="fa-solid fa-chevron-down text-[10px] opacity-50 group-hover/nav:rotate-180 transition-transform duration-300"></i>
                            </button>

                            <?php if(!isset($m['mega'])): ?>
                                <div
                                    class="absolute top-full left-1/2 -translate-x-1/2 pt-4 opacity-0 invisible group-hover/nav:opacity-100 group-hover/nav:visible transition-all duration-300 translate-y-2 group-hover/nav:translate-y-0 z-50">
                                    <div class="w-64 bg-white rounded shadow-2xl border border-slate-200 overflow-hidden p-2">
                                        <?php $__currentLoopData = $m['sub_menu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php echo e(isset($sub['slug']) ? route($sub['route'], $sub['slug']) : route($sub['route'])); ?>"
                                                class="flex items-center gap-3 px-4 py-3 rounded text-[13px] font-semibold text-slate-700 hover:bg-slate-100 hover:text-brand-primary transition-all">
                                                <span
                                                    class="w-2 h-2 rounded-full bg-brand-primary/50 group-hover:bg-brand-primary"></span>
                                                <?php echo e($sub['name'] ?? $sub['title']); ?>

                                            </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php else: ?>
                        <a href="<?php echo e(route($m['route'])); ?>"
                            class="text-sm font-bold tracking-tight transition-colors <?php echo e(request()->routeIs($m['active']) ? 'text-brand-primary' : 'text-slate-700 hover:text-brand-primary'); ?>">
                            <?php echo e($m['name']); ?>

                        </a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </nav>

            <!-- Action Buttons -->
            <div class="flex items-center gap-4">
                <a href="<?php echo e(!auth()->check() ? route('register') : route('dashboard')); ?>"
                    class="hidden md:flex items-center justify-center rounded px-6 py-3 font-bold text-sm transition-all duration-300 bg-brand-primary text-white hover:bg-brand-primary-dark">
                    <?php echo e(!auth()->check() ? 'Get Started' : 'Dashboard'); ?>

                </a>

                <!-- Mobile Menu Toggle -->
                <button @click="mobileOpen = true" class="p-2.5 rounded-xl lg:hidden transition-colors"
                    :class="scrolled ? 'bg-slate-100 text-slate-900' : 'bg-white/10 text-white backdrop-blur-md'">
                    <i class="fa-solid fa-bars-staggered text-xl"></i>
                </button>
            </div>
        </div>

        
        <div x-show="megaOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="absolute top-full left-0 w-full bg-white border-t border-slate-200 h-[75vh] shadow-2xl z-40 overflow-scroll"
            style="display: none;" @mouseenter="megaOpen = true" @mouseleave="megaOpen = false">
            <div class="container py-6">
                <div class="flex flex-col gap-6">
                    <div
                        class="bg-brand-primary/5 flex items-center justify-between p-4 rounded h-full border border-brand-primary/20">
                        <div class="flex gap-4 items-center">
                            <div
                                class="w-12 h-12 bg-brand-primary text-white rounded flex items-center justify-center">
                                <i class="fa-solid fa-industry text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-slate-900 mb-1 uppercase tracking-tight">Industry
                                    Sectors
                                </h3>
                                <p class="text-sm text-slate-500 leading-relaxed">Explore the diverse sectors powering
                                    the global economy and connect with industry leaders.</p>
                            </div>
                        </div>
                        <a href="<?php echo e(route('sectors.index')); ?>"
                            class="inline-flex items-center gap-2 text-sm font-bold text-brand-primary hover:gap-3 transition-all">
                            View All Sectors <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-2">
                        <?php $__currentLoopData = config('sectors.sectors'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sector): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('sectors.show', $sector['slug'])); ?>"
                                class="group flex items-center gap-3 px-3 py-2 rounded-xl text-sm font-semibold text-slate-600 hover:bg-slate-50 hover:text-brand-primary transition-all">
                                <span
                                    class="w-8 h-8 rounded-lg bg-slate-100 flex items-center justify-center text-[10px] font-black group-hover:bg-brand-primary group-hover:text-white transition-colors">
                                    <?php echo e(str_pad($loop->iteration, 2, '0', STR_PAD_LEFT)); ?>

                                </span>
                                <?php echo e($sector['title']); ?>

                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>

    <!-- Mobile Slide-out Menu -->
    <div x-show="mobileOpen" class="fixed inset-0 z-100 lg:hidden" style="display: none;">
        <!-- Overlay -->
        <div @click="mobileOpen = false" x-show="mobileOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm"></div>

        <!-- Menu Content -->
        <div x-show="mobileOpen" x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in duration-400" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            class="absolute top-0 right-0 w-[85%] max-w-md h-full bg-white shadow-2xl flex flex-col">

            <!-- Mobile Header -->
            <div class="p-6 flex justify-between items-center border-b border-slate-100">
                <div class="h-10 w-10 bg-brand-primary p-1 rounded-lg">
                    <img src="<?php echo e(asset('images/logo/logo.png')); ?>" alt="Logo"
                        class="h-full w-full object-contain brightness-0 invert">
                </div>
                <button @click="mobileOpen = false"
                    class="w-10 h-10 flex items-center justify-center rounded-xl bg-slate-100 text-slate-600 hover:bg-red-50 hover:text-red-600 transition-colors">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>

            <!-- Scrollable Links -->
            <div class="flex-1 overflow-y-auto p-6 space-y-2">
                <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mIndex => $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div x-data="{ open: false }">
                        <?php if(isset($m['sub_menu'])): ?>
                            <button @click="open = !open"
                                class="flex justify-between items-center w-full p-4 rounded text-lg font-bold text-slate-800 hover:bg-slate-50">
                                <?php echo e($m['name']); ?>

                                <i class="fa-solid fa-chevron-down text-xs transition-transform"
                                    :class="open ? 'rotate-180' : ''"></i>
                            </button>
                            <div x-show="open" x-collapse>
                                <div class="pl-4 py-2 space-y-1">
                                    <?php $__currentLoopData = $m['sub_menu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="<?php echo e(isset($sub['slug']) ? route($sub['route'], $sub['slug']) : route($sub['route'])); ?>"
                                            class="block p-3 rounded-xl text-[15px] font-semibold text-slate-600 hover:bg-slate-50 hover:text-brand-primary">
                                            <?php echo e($sub['name'] ?? $sub['title']); ?>

                                        </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <a href="<?php echo e(route($m['route'])); ?>"
                                class="block p-4 rounded text-lg font-bold text-slate-800 hover:bg-slate-50">
                                <?php echo e($m['name']); ?>

                            </a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Mobile Footer CTA -->
            <div class="p-6 border-t border-slate-100 bg-slate-50/50">
                <?php if(!auth()->check()): ?>
                    <a href="<?php echo e(route('register')); ?>"
                        class="block w-full text-center bg-brand-primary text-white py-4 rounded font-bold shadow-lg shadow-brand-primary/20">
                        Get Started Today
                    </a>
                <?php else: ?>
                    <a href="<?php echo e(route('dashboard')); ?>"
                        class="block w-full text-center bg-brand-primary text-white py-4 rounded font-bold shadow-lg shadow-brand-primary/20">
                        My Account Dashboard
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="relative min-h-screen">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Premium Footer -->
    <footer class="bg-brand-primary-dark text-white pt-16 overflow-hidden relative">

        <div class="container relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 pb-20 border-b border-white/5">
                <!-- Brand Story -->
                <div class="lg:col-span-4">
                    <div class="h-24 bg-white p-2 rounded mb-8 border border-white/10">
                        <img src="<?php echo e(asset('images/logo/logo.png')); ?>" alt="Logo" class="h-full shrink-0">
                    </div>
                    <h2 class="text-2xl font-bold mb-6 uppercase tracking-tighter">Connecting Global <br><span
                            class="text-brand-accent">Excellence</span></h2>
                    <p class="text-slate-400 leading-relaxed mb-10 text-sm max-w-sm">
                        World Grexpo is the premier global business ecosystem bridging the gap between innovative
                        enterprises and industrial giants to redefine the future of trade.
                    </p>
                    <div class="flex gap-4">
                        <?php $__currentLoopData = ['facebook' => 'facebook-f', 'twitter' => 'x-twitter', 'linkedin' => 'linkedin-in', 'instagram' => 'instagram', 'youtube' => 'youtube']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $platform => $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($site[$platform . '_url'] ?? false): ?>
                                <a href="<?php echo e($site[$platform . '_url']); ?>" target="_blank"
                                    class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-slate-300 hover:bg-brand-primary hover:text-white hover:border-brand-primary transition-all duration-300">
                                    <i class="fa-brands fa-<?php echo e($icon); ?>"></i>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <!-- Footer Navigation Links -->
                <div class="lg:col-span-2">
                    <h3 class="text-xs font-black uppercase tracking-[0.2em] text-white/80 mb-8">Platform</h3>
                    <ul class="space-y-4">
                        <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(!isset($m['sub_menu']) && $loop->index < 5): ?>
                                <li><a href="<?php echo e(route($m['route'])); ?>"
                                        class="text-slate-400 hover:text-brand-accent text-[13px] font-semibold transition-colors"><?php echo e($m['name']); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('join.index')); ?>"
                                class="text-slate-400 hover:text-brand-accent text-[13px] font-semibold transition-colors">Participate</a>
                        </li>
                        <li><a href="<?php echo e(route('about.chairman')); ?>"
                                class="text-slate-400 hover:text-brand-accent text-[13px] font-semibold transition-colors">Chairman's
                                Message</a></li>
                    </ul>
                </div>

                <div class="lg:col-span-2">
                    <h3 class="text-xs font-black uppercase tracking-[0.2em] text-white/80 mb-8">Quick Access</h3>
                    <ul class="space-y-4">
                        <li><a href="<?php echo e(route('sectors.index')); ?>"
                                class="text-slate-400 hover:text-brand-accent text-[13px] font-semibold transition-colors">Industry
                                Sectors</a></li>
                        <li><a href="<?php echo e(route('events.index')); ?>"
                                class="text-slate-400 hover:text-brand-accent text-[13px] font-semibold transition-colors">Global
                                Events</a></li>
                        <li><a href="<?php echo e(route('blog.index')); ?>"
                                class="text-slate-400 hover:text-brand-accent text-[13px] font-semibold transition-colors">Insights
                                & News</a></li>
                        <li><a href="<?php echo e(route('register')); ?>"
                                class="text-slate-400 hover:text-brand-accent text-[13px] font-semibold transition-colors">Join
                                Network</a></li>
                    </ul>
                </div>

                <!-- Contact & Support -->
                <div class="lg:col-span-4">
                    <h3 class="text-xs font-black uppercase tracking-[0.2em] text-white/80 mb-8">Connect With Us</h3>
                    <div class="space-y-6">
                        <?php if($site['address'] ?? false): ?>
                            <div class="flex gap-5 group">
                                <div
                                    class="w-12 h-12 rounded bg-white/5 border border-white/10 flex items-center justify-center shrink-0 group-hover:bg-brand-primary/20 group-hover:border-brand-primary/30 transition-all duration-500">
                                    <i class="fa-solid fa-location-dot text-brand-accent"></i>
                                </div>
                                <p class="text-slate-400 text-sm leading-relaxed"><?php echo nl2br(e($site['address'])); ?></p>
                            </div>
                        <?php endif; ?>

                        <div class="grid grid-cols-1 gap-4">
                            <?php if($site['phone_1'] ?? false): ?>
                                <a href="tel:<?php echo e($site['phone_1']); ?>"
                                    class="flex items-center gap-4 p-3 rounded bg-white/5 border border-white/10 hover:bg-white/10 transition-all">
                                    <i class="fa-solid fa-phone text-brand-accent text-sm"></i>
                                    <span class="text-slate-300 text-[13px] font-medium"><?php echo e($site['phone_1']); ?></span>
                                </a>
                            <?php endif; ?>
                            <?php if($site['email_1'] ?? false): ?>
                                <a href="mailto:<?php echo e($site['email_1']); ?>"
                                    class="flex items-center gap-4 p-3 rounded bg-white/5 border border-white/10 hover:bg-white/10 transition-all">
                                    <i class="fa-solid fa-envelope text-brand-accent text-sm"></i>
                                    <span
                                        class="text-slate-300 text-[13px] font-medium truncate"><?php echo e($site['email_1']); ?></span>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright -->
            <div class="py-10 flex flex-col md:flex-row justify-between items-center gap-6">
                <p class="text-slate-500 text-[13px] font-medium">
                    &copy; <?php echo e(date('Y')); ?> World Grexpo Global Network. Crafted for Industrial Evolution.
                </p>
                <div class="flex gap-8">
                    <a href="<?php echo e(route('privacy')); ?>"
                        class="text-slate-500 hover:text-white text-[13px] font-semibold transition-colors">Privacy
                        Policy</a>
                    <a href="<?php echo e(route('terms')); ?>"
                        class="text-slate-500 hover:text-white text-[13px] font-semibold transition-colors">Terms of
                        Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating Quick Help -->
    <div x-data="{ open: false }" class="fixed bottom-6 right-6 z-[90]">
        <div x-show="open" x-transition x-cloak class="absolute bottom-full right-0 mb-4 flex flex-col gap-3 items-end">
            <?php if($site['whatsapp_url'] ?? false): ?>
                <a href="<?php echo e($site['whatsapp_url']); ?>" target="_blank" class="flex items-center gap-3 group">
                    <span
                        class="px-3 py-1.5 rounded-xl bg-white text-slate-900 text-[11px] font-bold shadow-2xl opacity-0 group-hover:opacity-100 transition-all">WhatsApp</span>
                    <div
                        class="w-12 h-12 rounded bg-green-500 text-white flex items-center justify-center shadow-lg hover:scale-110 transition-transform">
                        <i class="fa-brands fa-whatsapp text-xl"></i>
                    </div>
                </a>
            <?php endif; ?>
            <?php if($site['email_1'] ?? false): ?>
                <a href="mailto:<?php echo e($site['email_1']); ?>" class="flex items-center gap-3 group">
                    <span
                        class="px-3 py-1.5 rounded-xl bg-white text-slate-900 text-[11px] font-bold shadow-2xl opacity-0 group-hover:opacity-100 transition-all">Email
                        Us</span>
                    <div
                        class="w-12 h-12 rounded bg-blue-500 text-white flex items-center justify-center shadow-lg hover:scale-110 transition-transform">
                        <i class="fa-solid fa-envelope text-lg"></i>
                    </div>
                </a>
            <?php endif; ?>
        </div>

        <button @click="open = !open"
            class="w-14 h-14 rounded bg-brand-primary text-white flex items-center justify-center shadow-2xl hover:scale-105 active:scale-95 transition-all relative overflow-hidden group">
            <div class="absolute inset-0 bg-white/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
            <i class="fa-solid fa-headset text-xl" x-show="!open"></i>
            <i class="fa-solid fa-xmark text-xl" x-show="open"></i>
        </button>
    </div>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/layouts/website.blade.php ENDPATH**/ ?>