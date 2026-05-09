

<?php $__env->startSection('title', $event->title . ' | World Grexpo Foundation'); ?>

<?php
    // Fetch Wall of Excellence awards to show on the event page
    $excellenceAwards = \App\Models\ExcellenceAward::where('status', 'published')
        ->where('show_on_home', true)
        ->orderBy('order')
        ->take(3)
        ->get();
?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section class="relative min-h-[70vh] flex items-center pt-48 pb-32 overflow-hidden bg-slate-950 text-white">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
        </div>

        <div class="container relative z-10">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                <!-- Left Side Details -->
                <div class="w-full lg:w-3/5 animate-on-scroll">
                    <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
                        <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Institutional Summit Node</span>
                    </div>

                    <h1 class="text-6xl md:text-8xl font-black text-white leading-[0.85] tracking-tighter uppercase italic mb-10">
                        <?php echo e($event->title); ?>

                    </h1>

                    <p class="text-2xl text-slate-400 font-light italic max-w-2xl border-l-2 border-slate-800 pl-8 mb-12">
                        Strategic industrial node designed for global synergy, facilitator of absolute growth and recognized transition excellence.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                        <div class="flex items-center gap-6 p-6 bg-white/5 border border-white/10 rounded-sm group transition-all">
                            <div class="w-16 h-16 bg-brand-accent flex items-center justify-center text-slate-950 rounded-sm shrink-0 shadow-2xl">
                                <i class="fa-regular fa-clock text-2xl"></i>
                            </div>
                            <div>
                                <span class="block text-[8px] font-black text-slate-500 uppercase tracking-[0.3em] leading-none mb-2">Schedule Node</span>
                                <span class="block text-xl font-black text-white italic uppercase tracking-tighter"><?php echo e($event->event_date->format('d M, Y')); ?></span>
                                <span class="block text-xs font-bold text-brand-accent uppercase tracking-widest mt-1"><?php echo e($event->event_date->format('h:i A')); ?> IST</span>
                            </div>
                        </div>

                        <div class="flex items-center gap-6 p-6 bg-white/5 border border-white/10 rounded-sm group transition-all">
                            <div class="w-16 h-16 bg-brand-accent flex items-center justify-center text-slate-950 rounded-sm shrink-0 shadow-2xl">
                                <i class="fa-solid fa-location-dot text-2xl"></i>
                            </div>
                            <div>
                                <span class="block text-[8px] font-black text-slate-500 uppercase tracking-[0.3em] leading-none mb-2">Location Node</span>
                                <span class="block text-xl font-black text-white italic uppercase tracking-tighter"><?php echo e($event->location ?: 'Global Node'); ?></span>
                                <span class="block text-xs font-bold text-brand-accent uppercase tracking-widest mt-1">Hybrid Access Enabled</span>
                            </div>
                        </div>
                    </div>

                    <?php if($event->show_timer): ?>
                        <div class="space-y-4">
                            <div class="text-[10px] font-black text-brand-accent uppercase tracking-[0.5em] italic flex items-center gap-4">
                                <span class="w-12 h-px bg-brand-accent"></span> Node Activation In
                            </div>
                            <div x-data="{
                                target: new Date('<?php echo e($event->event_date->format('Y-m-d\TH:i:s')); ?>').getTime(),
                                now: new Date().getTime(),
                                get t() { return Math.max(0, this.target - this.now); },
                                get d() { return Math.floor(this.t / (1000*60*60*24)); },
                                get h() { return Math.floor((this.t % (1000*60*60*24)) / (1000*60*60)); },
                                get m() { return Math.floor((this.t % (1000*60*60)) / (1000*60)); },
                                get s() { return Math.floor((this.t % (1000*60)) / 1000); }
                            }" x-init="setInterval(() => now = new Date().getTime(), 1000)" class="grid grid-cols-4 gap-2">
                                <div class="bg-white/5 border border-white/10 p-6 rounded-sm text-center backdrop-blur-md group hover:border-brand-accent transition-colors">
                                    <span class="block text-5xl font-black text-white tracking-tighter mb-1" x-text="d">0</span>
                                    <span class="block text-[8px] font-black text-slate-500 uppercase tracking-widest">Days</span>
                                </div>
                                <div class="bg-white/5 border border-white/10 p-6 rounded-sm text-center backdrop-blur-md group hover:border-brand-accent transition-colors">
                                    <span class="block text-5xl font-black text-white tracking-tighter mb-1" x-text="h">0</span>
                                    <span class="block text-[8px] font-black text-slate-500 uppercase tracking-widest">Hrs</span>
                                </div>
                                <div class="bg-white/5 border border-white/10 p-6 rounded-sm text-center backdrop-blur-md group hover:border-brand-accent transition-colors">
                                    <span class="block text-5xl font-black text-white tracking-tighter mb-1" x-text="m">0</span>
                                    <span class="block text-[8px] font-black text-slate-500 uppercase tracking-widest">Min</span>
                                </div>
                                <div class="bg-white/5 border border-white/10 p-6 rounded-sm text-center backdrop-blur-md group hover:border-brand-accent transition-colors">
                                    <span class="block text-5xl font-black text-white tracking-tighter mb-1" x-text="s">0</span>
                                    <span class="block text-[8px] font-black text-slate-500 uppercase tracking-widest">Sec</span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Right Side Image -->
                <div class="w-full lg:w-2/5 animate-on-scroll">
                    <div class="relative rounded-sm overflow-hidden border border-white/10 shadow-4xl group">
                        <img src="<?php echo e($event->image ? asset($event->image) : asset('images/event-placeholder.jpg')); ?>" alt="<?php echo e($event->title); ?>" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-[2000ms]">
                        <div class="absolute inset-0 bg-slate-950/20 group-hover:bg-transparent transition-all duration-700"></div>
                        <div class="absolute top-0 left-0 w-0 h-1 bg-brand-accent group-hover:w-full transition-all duration-700 z-30"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Body -->
    <div class="bg-white py-32" 
         x-data="{ 
            activeSection: 'about',
            checkScroll() {
                const sections = ['about', 'guests', 'highlights', 'excellence', 'gallery', 'testimonials', 'pricing', 'partners', 'faq', 'resources', 'venue'];
                for (const section of sections) {
                    const el = document.getElementById(section);
                    if (el) {
                        const rect = el.getBoundingClientRect();
                        if (rect.top <= 200 && rect.bottom >= 200) {
                            this.activeSection = section;
                            break;
                        }
                    }
                }
            }
         }"
         @scroll.window.throttle.50ms="checkScroll()">
        <div class="container overflow-visible">
            <div class="flex flex-col lg:flex-row gap-4 items-start relative">

                <!-- Left Sticky Sidebar -->
                <aside class="w-full hidden lg:block lg:w-1/4 sticky top-40 z-30">
                    <div class="bg-slate-950 rounded-sm border border-slate-900 overflow-hidden shadow-4xl">
                        <div class="bg-slate-900 p-8 border-b border-slate-800">
                            <h4 class="text-[10px] font-black text-white uppercase tracking-[0.4em] flex items-center gap-4 italic">
                                 <span class="w-2 h-2 bg-brand-accent"></span> Navigation Node
                            </h4>
                        </div>
                        <div class="p-4 bg-slate-950">
                            <nav class="space-y-2">
                                <?php
                                    $navItems = [
                                        ['id' => 'about', 'label' => 'About Summit', 'icon' => 'fa-info-circle'],
                                        ['id' => 'guests', 'label' => 'Special Guests', 'icon' => 'fa-star'],
                                        ['id' => 'highlights', 'label' => 'Strategic Node', 'icon' => 'fa-bolt'],
                                        ['id' => 'excellence', 'label' => 'Wall of Excellence', 'icon' => 'fa-crown'],
                                        ['id' => 'gallery', 'label' => 'Visual Archives', 'icon' => 'fa-images'],
                                        ['id' => 'testimonials', 'label' => 'Industrial Proof', 'icon' => 'fa-comments'],
                                        ['id' => 'pricing', 'label' => 'Acquire Node', 'icon' => 'fa-ticket'],
                                        ['id' => 'faq', 'label' => 'Intelligence FAQ', 'icon' => 'fa-question-circle'],
                                        ['id' => 'resources', 'label' => 'Node Resources', 'icon' => 'fa-folder-open'],
                                        ['id' => 'venue', 'label' => 'Venue Node', 'icon' => 'fa-map-marker-alt'],
                                        ['id' => 'partners', 'label' => 'Global Partners', 'icon' => 'fa-handshake'],
                                    ];
                                ?>

                                <?php $__currentLoopData = $navItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $showItem = false;
                                        if ($item['id'] === 'excellence') {
                                            $showItem = $excellenceAwards->count() > 0;
                                        } elseif (in_array($item['id'], ['gallery', 'testimonials'])) {
                                            $showItem = isset($event->builder_content[$item['id']]) && count($event->builder_content[$item['id']]) > 0;
                                        } elseif ($item['id'] === 'guests') {
                                            $showItem = isset($event->builder_content['guests']) && count($event->builder_content['guests']) > 0;
                                        } else {
                                            $showItem = isset($event->builder_content[$item['id']]) && (!is_array($event->builder_content[$item['id']]) || count($event->builder_content[$item['id']]) > 0);
                                        }
                                    ?>

                                    <?php if($showItem): ?>
                                        <a href="#<?php echo e($item['id']); ?>" 
                                           @click="activeSection = '<?php echo e($item['id']); ?>'"
                                           :class="activeSection === '<?php echo e($item['id']); ?>' ? 'bg-brand-accent text-slate-950' : 'text-slate-500 hover:bg-white/5 hover:text-white'"
                                           class="flex items-center justify-between p-5 rounded-sm text-[10px] font-black uppercase tracking-[0.3em] transition-all italic group/nav">
                                            <span class="flex items-center gap-4">
                                                <i class="fa-solid <?php echo e($item['icon']); ?> w-4 text-xs transition-transform group-hover/nav:scale-125"></i>
                                                <?php echo e($item['label']); ?>

                                            </span>
                                            <i class="fa-solid fa-chevron-right text-[8px] opacity-50 group-hover/nav:translate-x-2 transition-transform"></i>
                                        </a>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </nav>
                        </div>
                        <div class="p-8 bg-slate-900 border-t border-slate-800">
                            <a href="<?php echo e($event->builder_content['about']['registration_url'] ?? url('join')); ?>" target="_blank" class="block w-full bg-brand-accent text-slate-950 hover:bg-white text-center py-6 rounded-sm font-black text-[10px] uppercase tracking-[0.3em] transition-all italic shadow-2xl">
                                 Register Node <i class="fa-solid fa-bolt ml-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- WhatsApp & Call CTA -->
                    <div class="mt-4 bg-slate-50 rounded-sm p-8 border border-slate-100 text-left">
                        <h5 class="text-[10px] font-black text-slate-950 uppercase tracking-[0.3em] mb-4 italic">Intelligence Assistance</h5>
                        <p class="text-[10px] text-slate-500 mb-8 font-black uppercase tracking-widest leading-loose">Our industrial team can guide you through the nomination node process.</p>
                        <div class="space-y-2">
                            <a href="https://wa.me/919810690843?text=Hi,%20I'm%20interested%20in%20the%20<?php echo e(urlencode($event->title)); ?>%20nomination." target="_blank" class="flex items-center justify-center gap-4 w-full bg-[#25D366] text-white hover:bg-slate-950 py-5 rounded-sm font-black text-[10px] uppercase tracking-[0.3em] transition-all italic shadow-sm">
                                <i class="fa-brands fa-whatsapp text-lg"></i> Apply via Node
                            </a>
                            <a href="tel:+919810690843" class="flex items-center justify-center gap-4 w-full bg-slate-950 text-white hover:bg-brand-accent hover:text-slate-950 py-5 rounded-sm font-black text-[10px] uppercase tracking-[0.3em] transition-all italic shadow-sm">
                                <i class="fa-solid fa-phone"></i> Direct Call
                            </a>
                        </div>
                    </div>
                </aside>

                <!-- Main Content Sections -->
                <main class="w-full lg:w-3/4 space-y-4">

                    <!-- About Section -->
                    <div id="about" class="scroll-mt-40 bg-slate-50 border border-slate-100 rounded-sm p-12 md:p-20 shadow-sm animate-on-scroll">
                        <div class="flex items-center gap-8 mb-16">
                            <div class="w-16 h-16 bg-slate-950 flex items-center justify-center text-brand-accent rounded-sm shadow-xl">
                                <i class="fa-solid fa-circle-info text-2xl"></i>
                            </div>
                            <div>
                                <h2 class="text-4xl font-black text-slate-950 tracking-tighter uppercase italic leading-none mb-2">About The <span class="text-brand-primary">Summit Node</span></h2>
                                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em] italic"><?php echo e($event->builder_content['about']['subtitle'] ?? 'Transforming the Future'); ?></p>
                            </div>
                        </div>
                        <div class="text-2xl text-slate-600 font-light italic leading-[1.6] border-l-4 border-slate-200 pl-12">
                            <?php echo nl2br(e($event->builder_content['about']['description'] ?? $event->description)); ?>

                        </div>
                    </div>

                    <!-- Special Guests Section -->
                    <?php if(isset($event->builder_content['guests']) && count($event->builder_content['guests']) > 0): ?>
                        <div id="guests" class="scroll-mt-40 animate-on-scroll">
                            <?php
                                $guests = $event->builder_content['guests'];
                                $fullGuests = array_filter($guests, fn($g) => (!isset($g['display_style']) || $g['display_style'] === 'full') && !empty($g['name']));
                                $portraitGuests = array_filter($guests, fn($g) => isset($g['display_style']) && $g['display_style'] === 'portrait' && !empty($g['name']));
                            ?>

                            <?php if(count($fullGuests) > 0): ?>
                                <div class="grid grid-cols-1 gap-2 mb-2">
                                    <?php $__currentLoopData = $fullGuests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="group bg-slate-50 border border-slate-100 rounded-sm overflow-hidden hover:bg-slate-950 transition-all duration-700 p-12 relative flex flex-col md:flex-row gap-16 items-center md:items-start">
                                            <div class="absolute top-0 left-0 w-0 h-1 bg-brand-accent group-hover:w-full transition-all duration-700 z-30"></div>
                                            
                                            <div class="w-full md:w-64 h-auto overflow-hidden shrink-0 rounded-sm bg-slate-900 border border-slate-200 group-hover:border-slate-800 transition-colors shadow-2xl">
                                                <?php if(!empty($guest['photo'])): ?>
                                                    <img src="<?php echo e(asset($guest['photo'])); ?>" alt="<?php echo e($guest['name']); ?>" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-[1500ms]">
                                                <?php else: ?>
                                                    <div class="w-full aspect-[4/5] flex items-center justify-center text-slate-800">
                                                        <i class="fa-solid fa-user-tie text-7xl"></i>
                                                    </div>
                                                <?php endif; ?>
                                            </div>

                                            <div class="flex-1 text-center md:text-left">
                                                <div class="inline-flex items-center gap-4 px-4 py-2 bg-slate-950 border border-white/5 rounded-sm text-[8px] font-black text-brand-accent uppercase tracking-[0.4em] italic mb-8 group-hover:border-white/10">
                                                    <i class="fa-solid fa-star"></i> <?php echo e($guest['title'] ?? 'Strategic Node Guest'); ?>

                                                </div>
                                                <h3 class="text-4xl md:text-5xl font-black text-slate-950 group-hover:text-white transition-colors mb-4 uppercase italic tracking-tighter leading-none"><?php echo e($guest['name']); ?></h3>
                                                <p class="text-brand-primary font-black text-[10px] uppercase tracking-[0.3em] italic mb-10 group-hover:text-brand-accent transition-colors"><?php echo e($guest['designation']); ?></p>

                                                <?php if(!empty($guest['about'])): ?>
                                                    <div class="text-xl text-slate-600 font-light italic leading-relaxed group-hover:text-slate-400 transition-colors border-l-2 border-slate-200 group-hover:border-slate-800 pl-8">
                                                        <?php echo nl2br(e($guest['about'])); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>

                            <?php if(count($portraitGuests) > 0): ?>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                    <?php $__currentLoopData = $portraitGuests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="bg-slate-50 border border-slate-100 rounded-sm overflow-hidden p-8 group hover:bg-slate-950 transition-all duration-700 text-left relative">
                                            <div class="absolute top-0 left-0 w-0 h-1 bg-brand-accent group-hover:w-full transition-all duration-700 z-30"></div>
                                            <div class="w-full aspect-[4/5] rounded-sm overflow-hidden mb-8 border border-slate-200 group-hover:border-slate-800 transition-all shadow-xl">
                                                <?php if(!empty($guest['photo'])): ?>
                                                    <img src="<?php echo e(asset($guest['photo'])); ?>" alt="<?php echo e($guest['name']); ?>" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000">
                                                <?php else: ?>
                                                    <div class="w-full h-full flex items-center justify-center bg-slate-900 text-slate-700">
                                                        <i class="fa-solid fa-user text-5xl"></i>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="inline-flex px-3 py-1 bg-slate-950 text-[6px] font-black text-brand-accent uppercase tracking-[0.3em] mb-4 italic rounded-sm">
                                                <?php echo e($guest['title'] ?? 'Guest'); ?>

                                            </div>
                                            <h3 class="text-xl font-black text-slate-950 group-hover:text-white transition-colors mb-2 uppercase italic tracking-tighter leading-none"><?php echo e($guest['name']); ?></h3>
                                            <p class="text-[8px] font-black text-slate-500 group-hover:text-brand-accent transition-colors uppercase tracking-widest italic"><?php echo e($guest['designation']); ?></p>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Highlights Section -->
                    <?php if(isset($event->builder_content['highlights']) && count($event->builder_content['highlights']) > 0): ?>
                        <div id="highlights" class="scroll-mt-40 space-y-2">
                            <?php $__currentLoopData = $event->builder_content['highlights']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="bg-slate-50 border border-slate-100 rounded-sm p-12 md:p-20 hover:bg-slate-950 transition-all duration-700 group relative">
                                    <div class="absolute top-0 left-0 w-0 h-1 bg-brand-accent group-hover:w-full transition-all duration-700 z-30"></div>
                                    
                                    <?php if(($hl['title'] && $hl['title'] !== '') || ($hl['desc'] && $hl['desc'] !== '')): ?>
                                        <div class="relative z-10 mb-16">
                                            <h4 class="text-4xl font-black uppercase italic tracking-tighter text-slate-950 group-hover:text-white transition-colors mb-8 leading-none flex items-center gap-8">
                                                <span class="w-16 h-1 bg-brand-accent"></span>
                                                <?php echo e($hl['title']); ?>

                                            </h4>
                                            <div class="text-xl font-light italic text-slate-500 group-hover:text-slate-400 transition-colors leading-relaxed border-l-2 border-slate-200 group-hover:border-slate-800 pl-12 max-w-4xl">
                                                <?php echo nl2br(e($hl['desc'])); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <?php if(isset($hl['pdf1_path']) && $hl['pdf1_path']): ?>
                                            <div class="bg-white border border-slate-200 rounded-sm p-8 group/pdf hover:bg-white/5 hover:border-white/10 transition-all">
                                                <div class="aspect-video bg-slate-950 rounded-sm mb-8 overflow-hidden relative border border-slate-900 group-hover/pdf:border-slate-700 shadow-2xl">
                                                    <?php if(isset($hl['pdf1_thumb']) && $hl['pdf1_thumb']): ?>
                                                        <img src="<?php echo e(asset($hl['pdf1_thumb'])); ?>" class="w-full h-full object-cover grayscale group-hover/pdf:grayscale-0 transition-all duration-700">
                                                    <?php else: ?>
                                                        <div class="w-full h-full flex flex-col items-center justify-center gap-4">
                                                            <i class="fa-solid fa-file-pdf text-5xl text-brand-accent/20 group-hover/pdf:scale-125 transition-transform"></i>
                                                            <span class="text-[8px] font-black text-slate-700 uppercase tracking-widest">Document Node 01</span>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="absolute inset-0 bg-slate-950/60 opacity-0 group-hover/pdf:opacity-100 transition-all duration-700 flex items-center justify-center backdrop-blur-sm">
                                                        <a href="<?php echo e(asset($hl['pdf1_path'])); ?>" target="_blank" class="bg-brand-accent text-slate-950 px-8 py-4 rounded-sm text-[10px] font-black uppercase tracking-[0.3em] italic shadow-4xl hover:bg-white transition-colors">
                                                            Acquire Document <i class="fa-solid fa-up-right-from-square ml-4"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h5 class="text-[10px] font-black text-slate-950 uppercase tracking-[0.3em] group-hover/pdf:text-white transition-colors italic leading-tight"><?php echo e($hl['pdf1_name'] ?: 'Strategic Intelligence'); ?></h5>
                                            </div>
                                        <?php endif; ?>

                                        <?php if(isset($hl['pdf2_path']) && $hl['pdf2_path']): ?>
                                            <div class="bg-white border border-slate-200 rounded-sm p-8 group/pdf hover:bg-white/5 hover:border-white/10 transition-all">
                                                <div class="aspect-video bg-slate-950 rounded-sm mb-8 overflow-hidden relative border border-slate-900 group-hover/pdf:border-slate-700 shadow-2xl">
                                                    <?php if(isset($hl['pdf2_thumb']) && $hl['pdf2_thumb']): ?>
                                                        <img src="<?php echo e(asset($hl['pdf2_thumb'])); ?>" class="w-full h-full object-cover grayscale group-hover/pdf:grayscale-0 transition-all duration-700">
                                                    <?php else: ?>
                                                        <div class="w-full h-full flex flex-col items-center justify-center gap-4">
                                                            <i class="fa-solid fa-file-pdf text-5xl text-brand-accent/20 group-hover/pdf:scale-125 transition-transform"></i>
                                                            <span class="text-[8px] font-black text-slate-700 uppercase tracking-widest">Document Node 02</span>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="absolute inset-0 bg-slate-950/60 opacity-0 group-hover/pdf:opacity-100 transition-all duration-700 flex items-center justify-center backdrop-blur-sm">
                                                        <a href="<?php echo e(asset($hl['pdf2_path'])); ?>" target="_blank" class="bg-brand-accent text-slate-950 px-8 py-4 rounded-sm text-[10px] font-black uppercase tracking-[0.3em] italic shadow-4xl hover:bg-white transition-colors">
                                                            Acquire Document <i class="fa-solid fa-up-right-from-square ml-4"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h5 class="text-[10px] font-black text-slate-950 uppercase tracking-[0.3em] group-hover/pdf:text-white transition-colors italic leading-tight"><?php echo e($hl['pdf2_name'] ?: 'Resource Intelligence'); ?></h5>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Wall of Excellence Section -->
                    <?php if($excellenceAwards->count() > 0): ?>
                        <div id="excellence" class="scroll-mt-40 bg-white border border-slate-100 rounded-sm p-12 md:p-20 shadow-sm animate-on-scroll">
                            <div class="flex items-center justify-between mb-16">
                                <div class="flex items-center gap-8">
                                    <div class="w-16 h-16 bg-slate-950 flex items-center justify-center text-brand-accent rounded-sm shadow-xl">
                                        <i class="fa-solid fa-crown text-2xl"></i>
                                    </div>
                                    <div>
                                        <h2 class="text-4xl font-black text-slate-950 tracking-tighter uppercase italic leading-none mb-2">Wall of <span class="text-brand-primary">Excellence</span></h2>
                                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em] italic">Join these recognized industrial leaders</p>
                                    </div>
                                </div>
                                <a href="<?php echo e(route('excellence.index')); ?>" class="hidden md:inline-flex items-center gap-4 text-slate-950 text-[10px] font-black uppercase tracking-[0.4em] italic hover:text-brand-accent transition-all group/all">
                                    View Node <i class="fa-solid fa-arrow-right group-hover/all:translate-x-4 transition-transform"></i>
                                </a>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                                <?php $__currentLoopData = $excellenceAwards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $award): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="group bg-slate-950 border border-slate-900 rounded-sm overflow-hidden hover:bg-slate-900 transition-all duration-700 shadow-4xl">
                                        <div class="relative aspect-[4/5] border-b border-white/5">
                                            <img src="<?php echo e(asset($award->award_image)); ?>" alt="<?php echo e($award->title); ?>" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000">
                                            <div class="absolute inset-0 bg-slate-950/40 group-hover:bg-slate-950/10 transition-all duration-700"></div>
                                            <div class="absolute bottom-10 left-10 right-10">
                                                <p class="text-white font-black text-xl uppercase italic tracking-tighter leading-none group-hover:text-brand-accent transition-colors"><?php echo e($award->title); ?></p>
                                            </div>
                                        </div>
                                        <div class="p-8 flex items-center gap-6">
                                            <?php if($award->giver_image): ?>
                                                <img src="<?php echo e(asset($award->giver_image)); ?>" class="w-12 h-12 rounded-sm grayscale group-hover:grayscale-0 border border-white/10 object-cover shadow-2xl">
                                            <?php endif; ?>
                                            <div>
                                                <p class="text-[10px] font-black text-white uppercase italic leading-none mb-2"><?php echo e($award->giver_name); ?></p>
                                                <p class="text-[8px] font-black text-slate-500 uppercase tracking-[0.2em] italic"><?php echo e(Str::limit($award->giver_designation, 30)); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Dynamic Past Gallery Section -->
                    <?php if(isset($event->builder_content['gallery']) && count($event->builder_content['gallery']) > 0): ?>
                        <div id="gallery" class="scroll-mt-40 bg-slate-50 border border-slate-100 rounded-sm p-12 md:p-20 shadow-sm animate-on-scroll">
                            <div class="mb-16 flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                                <div class="flex items-center gap-8">
                                    <div class="w-16 h-16 bg-slate-950 flex items-center justify-center text-brand-accent rounded-sm shadow-xl">
                                        <i class="fa-solid fa-images text-2xl"></i>
                                    </div>
                                    <div>
                                        <h2 class="text-4xl font-black text-slate-950 tracking-tighter uppercase italic leading-none mb-2">Visual <span class="text-brand-primary">Archives</span></h2>
                                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em] italic">Glimpses from previous editions</p>
                                    </div>
                                </div>
                                <a href="<?php echo e(route('gallery')); ?>" class="inline-flex items-center justify-center gap-6 bg-slate-950 hover:bg-brand-accent text-white hover:text-slate-950 px-10 py-6 rounded-sm text-[10px] font-black uppercase tracking-[0.3em] italic transition-all duration-700 shadow-4xl group/btn">
                                    View Full Archive <i class="fa-solid fa-arrow-right-long group-hover/btn:translate-x-4 transition-transform"></i>
                                </a>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                                <?php $__currentLoopData = $event->builder_content['gallery']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="relative aspect-video rounded-sm overflow-hidden bg-slate-950 border border-white/5 group shadow-4xl">
                                        <?php if(isset($media['type']) && $media['type'] === 'video'): ?>
                                            <video src="<?php echo e(asset($media['url'])); ?>" controls class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all"></video>
                                        <?php else: ?>
                                            <img src="<?php echo e(asset($media['url'])); ?>" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000 group-hover:scale-105">
                                        <?php endif; ?>
                                        <div class="absolute inset-0 bg-slate-950/40 group-hover:bg-transparent transition-all duration-700"></div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Dynamic Testimonials Section -->
                    <?php if(isset($event->builder_content['testimonials']) && count($event->builder_content['testimonials']) > 0): ?>
                        <div id="testimonials" class="scroll-mt-40 bg-white border border-slate-100 rounded-sm p-12 md:p-20 shadow-sm animate-on-scroll">
                            <div class="mb-16 flex items-center gap-8">
                                <div class="w-16 h-16 bg-slate-950 flex items-center justify-center text-brand-accent rounded-sm shadow-xl">
                                    <i class="fa-solid fa-comments text-2xl"></i>
                                </div>
                                <div>
                                    <h2 class="text-4xl font-black text-slate-950 tracking-tighter uppercase italic leading-none mb-2">Industrial <span class="text-brand-primary">Proof</span></h2>
                                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em] italic">What past nodes say</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <?php $__currentLoopData = $event->builder_content['testimonials']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="bg-slate-50 p-12 rounded-sm border border-slate-100 relative hover:bg-slate-950 transition-all duration-700 group/test shadow-sm">
                                        <div class="absolute top-0 left-0 w-0 h-1 bg-brand-accent group-hover/test:w-full transition-all duration-700 z-30"></div>
                                        <i class="fa-solid fa-quote-left text-6xl text-slate-200 absolute top-12 right-12 group-hover/test:text-white/5 transition-colors"></i>
                                        <p class="text-xl font-light italic text-slate-600 mb-12 relative z-10 group-hover/test:text-slate-400 transition-colors leading-relaxed">"<?php echo e($testimonial['text']); ?>"</p>
                                        <div class="flex items-center gap-6">
                                            <div class="w-16 h-16 rounded-sm bg-slate-200 border border-slate-300 group-hover/test:border-white/10 overflow-hidden shrink-0 shadow-xl transition-all">
                                                <?php if(isset($testimonial['image']) && $testimonial['image']): ?>
                                                    <img src="<?php echo e(asset($testimonial['image'])); ?>" class="w-full h-full object-cover grayscale group-hover/test:grayscale-0 transition-all">
                                                <?php else: ?>
                                                    <div class="w-full h-full flex items-center justify-center bg-slate-950 text-brand-accent font-black text-xl italic">
                                                        <?php echo e(substr($testimonial['name'] ?? 'U', 0, 1)); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div>
                                                <p class="text-[10px] font-black text-slate-950 group-hover/test:text-white transition-colors uppercase italic tracking-[0.3em] mb-2 leading-none"><?php echo e($testimonial['name']); ?></p>
                                                <p class="text-[8px] font-black text-slate-500 group-hover/test:text-brand-accent transition-colors uppercase tracking-widest italic"><?php echo e($testimonial['designation'] ?? 'Institutional Representative'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Pricing Section -->
                    <?php if(isset($event->builder_content['pricing']) && count($event->builder_content['pricing']) > 0): ?>
                        <div id="pricing" class="scroll-mt-40 animate-on-scroll bg-slate-950 rounded-sm p-12 md:p-24 text-white relative overflow-hidden border border-slate-900 shadow-4xl">
                            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:30px_30px]"></div>

                            <div class="text-center mb-20 relative z-10">
                                <div class="inline-flex items-center gap-4 px-6 py-3 bg-white/5 border border-white/10 rounded-sm mb-8 text-[10px] font-black uppercase tracking-[0.4em] italic backdrop-blur-md">
                                    <i class="fa-solid fa-lock text-brand-accent"></i> Cryptographically Secure Checkout Node
                                </div>
                                <h2 class="text-5xl md:text-7xl font-black text-white mb-6 uppercase italic tracking-tighter leading-none"><?php echo $event->builder_content['pricing_header']['heading'] ?? 'Acquire Your <span class="text-brand-accent not-italic">Summit Node</span>'; ?></h2>
                                <p class="text-[10px] font-black text-slate-500 uppercase tracking-[0.5em] italic"><?php echo e($event->builder_content['pricing_header']['description'] ?? 'Choose your institutional access level'); ?></p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 relative z-10">
                                <?php $__currentLoopData = $event->builder_content['pricing']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-sm p-12 hover:bg-white/10 hover:border-brand-accent transition-all duration-700 group relative overflow-hidden shadow-4xl">
                                        <?php if(isset($tier['recommended']) && $tier['recommended']): ?>
                                            <div class="absolute top-0 right-0 bg-brand-accent text-slate-950 text-[8px] font-black uppercase tracking-[0.5em] px-6 py-2 italic">Most Synergy</div>
                                        <?php endif; ?>

                                        <h4 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em] mb-4 italic group-hover:text-brand-accent transition-colors"><?php echo e($tier['type']); ?> Node</h4>
                                        <div class="flex items-end gap-4 mb-8">
                                            <span class="text-xs font-black text-brand-accent uppercase tracking-widest italic mb-2"><?php echo e($tier['currency'] ?? 'INR'); ?></span>
                                            <span class="text-6xl font-black text-white tracking-tighter uppercase italic"><?php echo e($tier['price']); ?></span>
                                        </div>
                                        <div class="text-[10px] text-slate-500 font-black uppercase tracking-[0.2em] mb-12 leading-loose italic border-l border-white/10 pl-6 group-hover:text-slate-300 transition-colors">
                                            <?php echo e($tier['desc']); ?>

                                        </div>
                                        <a href="<?php echo e(!empty($tier['form_url']) ? $tier['form_url'] : ($event->builder_content['about']['registration_url'] ?? url('join'))); ?>" target="_blank" class="block w-full bg-brand-accent hover:bg-white text-slate-950 text-center py-6 rounded-sm font-black text-[10px] uppercase tracking-[0.3em] transition-all duration-700 italic group/btn-p">
                                            <?php echo e(!empty($tier['btn_text']) ? $tier['btn_text'] : 'Acquire Access'); ?> <i class="fa-solid fa-bolt-lightning ml-4 group-hover/btn-p:translate-x-4 transition-transform"></i>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            <div class="mt-16 text-center text-[8px] font-black text-slate-600 uppercase tracking-[0.5em] italic relative z-10 flex flex-wrap items-center justify-center gap-12 grayscale opacity-50">
                                <span class="flex items-center gap-3"><i class="fa-brands fa-cc-visa text-2xl"></i> VISA NODE</span>
                                <span class="flex items-center gap-3"><i class="fa-brands fa-cc-mastercard text-2xl"></i> MASTERCARD NODE</span>
                                <span class="flex items-center gap-3"><i class="fa-solid fa-building-columns text-2xl"></i> BANKING GRID</span>
                                <span class="flex items-center gap-3"><i class="fa-solid fa-shield-halved text-2xl"></i> 256-BIT CRYPTO</span>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- FAQ Section -->
                    <?php if(isset($event->builder_content['faq']) && count($event->builder_content['faq']) > 0): ?>
                        <div id="faq" class="scroll-mt-40 bg-slate-50 border border-slate-100 rounded-sm p-12 md:p-20 shadow-sm animate-on-scroll">
                            <h2 class="text-4xl font-black text-slate-950 mb-16 text-center uppercase italic tracking-tighter leading-none">Intelligence <span class="text-brand-primary">FAQ Grid</span></h2>
                            <div class="space-y-2 max-w-4xl mx-auto" x-data="{ openFaq: null }">
                                <?php $__currentLoopData = $event->builder_content['faq']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="bg-white border border-slate-100 rounded-sm overflow-hidden group/faq transition-all hover:bg-slate-950 shadow-sm">
                                        <button @click="openFaq = openFaq === <?php echo e($index); ?> ? null : <?php echo e($index); ?>" class="w-full flex items-center justify-between p-8 text-left">
                                            <span class="text-sm font-black text-slate-950 uppercase italic tracking-widest group-hover/faq:text-white transition-colors leading-tight"><?php echo e($q['q']); ?></span>
                                            <i class="fa-solid fa-chevron-down text-slate-300 transition-all duration-700" :class="openFaq === <?php echo e($index); ?> ? 'rotate-180 text-brand-accent' : ''"></i>
                                        </button>
                                        <div x-show="openFaq === <?php echo e($index); ?>" x-collapse class="px-8 pb-8">
                                            <p class="text-xl font-light italic text-slate-500 leading-relaxed border-t border-slate-50 group-hover/faq:border-white/5 pt-8 group-hover/faq:text-slate-400 transition-colors">
                                                <?php echo e($q['a']); ?>

                                            </p>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Resources Section -->
                    <?php if(isset($event->builder_content['resources']) && count($event->builder_content['resources']) > 0): ?>
                        <div id="resources" class="scroll-mt-40 animate-on-scroll">
                            <div class="flex items-center gap-8 mb-16">
                                <div class="w-16 h-16 bg-slate-950 flex items-center justify-center text-brand-accent rounded-sm shadow-xl">
                                    <i class="fa-solid fa-folder-open text-2xl"></i>
                                </div>
                                <div>
                                    <h2 class="text-4xl font-black text-slate-950 tracking-tighter uppercase italic leading-none mb-2">Node <span class="text-brand-primary">Resources</span></h2>
                                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em] italic">Strategic industrial intelligence</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2">
                                <?php $__currentLoopData = $event->builder_content['resources']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $res): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(asset($res['url'])); ?>" target="_blank" class="group bg-slate-50 border border-slate-100 rounded-sm overflow-hidden hover:bg-slate-950 transition-all duration-700 flex flex-col relative shadow-sm">
                                        <div class="absolute top-0 left-0 w-0 h-1 bg-brand-accent group-hover:w-full transition-all duration-700 z-30"></div>
                                        <div class="relative aspect-video bg-slate-950 overflow-hidden border-b border-slate-100 group-hover:border-slate-800 transition-colors shadow-2xl">
                                            <?php if(isset($res['thumbnail']) && $res['thumbnail']): ?>
                                                <img src="<?php echo e(asset($res['thumbnail'])); ?>" alt="<?php echo e($res['title']); ?>" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000 group-hover:scale-105">
                                            <?php else: ?>
                                                <div class="w-full h-full flex flex-col items-center justify-center bg-slate-950 gap-6">
                                                    <i class="fa-solid fa-file-pdf text-6xl text-brand-accent/10 group-hover:text-brand-accent transition-colors"></i>
                                                    <span class="text-[8px] font-black text-slate-700 uppercase tracking-[0.5em] italic">Intelligence Preview</span>
                                                </div>
                                            <?php endif; ?>
                                            <div class="absolute inset-0 bg-slate-950/60 opacity-0 group-hover:opacity-100 transition-all duration-700 flex items-center justify-center backdrop-blur-sm">
                                                <span class="bg-brand-accent text-slate-950 px-8 py-4 rounded-sm text-[10px] font-black uppercase tracking-[0.3em] italic shadow-4xl hover:bg-white transition-colors">
                                                    Acquire Data <i class="fa-solid fa-up-right-from-square ml-4"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="p-10 flex-1 flex flex-col justify-between">
                                            <h5 class="text-xs font-black text-slate-950 uppercase tracking-[0.3em] leading-tight group-hover:text-white transition-colors italic">
                                                <?php echo e($res['title']); ?>

                                            </h5>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Venue Section -->
                    <?php if(isset($event->builder_content['venue']['name']) && $event->builder_content['venue']['name']): ?>
                        <div id="venue" class="scroll-mt-40 bg-slate-950 border border-slate-900 rounded-sm overflow-hidden shadow-4xl animate-on-scroll group/venue relative">
                            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:30px_30px]"></div>
                            <div class="grid grid-cols-1 md:grid-cols-2 relative z-10">
                                <div class="p-12 md:p-20 flex flex-col justify-center">
                                    <i class="fa-solid fa-map-location-dot text-6xl text-brand-accent mb-12 block"></i>
                                    <h2 class="text-5xl font-black text-white mb-6 uppercase italic tracking-tighter leading-none">The <span class="text-brand-primary not-italic">Venue Node</span></h2>
                                    <h4 class="text-2xl font-black text-white mb-4 uppercase italic tracking-tighter leading-tight"><?php echo e($event->builder_content['venue']['name']); ?></h4>
                                    <p class="text-slate-400 font-light italic text-xl leading-relaxed mb-12 border-l-2 border-white/10 pl-8"><?php echo e($event->builder_content['venue']['address']); ?></p>

                                    <a href="https://maps.google.com/?q=<?php echo e(urlencode($event->builder_content['venue']['address'])); ?>" target="_blank" class="inline-flex items-center gap-6 text-brand-accent font-black text-[10px] uppercase tracking-[0.4em] italic hover:text-white transition-all group/map">
                                        Navigate Industrial Node <i class="fa-solid fa-arrow-right-long group-hover/map:translate-x-4 transition-transform"></i>
                                    </a>
                                </div>
                                <div class="h-full bg-slate-900 relative min-h-[500px] border-l border-white/5">
                                     <?php if(isset($event->builder_content['venue']['image']) && $event->builder_content['venue']['image']): ?>
                                        <img src="<?php echo e(asset($event->builder_content['venue']['image'])); ?>" class="w-full h-full object-cover grayscale group-hover/venue:grayscale-0 transition-all duration-[2000ms]">
                                     <?php else: ?>
                                        <div class="w-full h-full flex items-center justify-center relative overflow-hidden">
                                            <div class="absolute inset-0 bg-brand-primary opacity-5 blur-3xl"></div>
                                            <div class="relative z-10 text-center p-12">
                                                <i class="fa-solid fa-building-circle-arrow-right text-8xl text-brand-accent mb-8 opacity-10"></i>
                                                <p class="text-[10px] font-black text-slate-700 uppercase tracking-[0.5em] italic">Venue Visual Architecture Pending</p>
                                            </div>
                                        </div>
                                     <?php endif; ?>
                                     <div class="absolute inset-0 bg-slate-950/20 group-hover/venue:bg-transparent transition-all duration-700"></div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Sponsors Section -->
                    <?php if(isset($event->builder_content['partners']) && count($event->builder_content['partners']) > 0): ?>
                        <div id="partners" class="scroll-mt-40 bg-white border border-slate-100 rounded-sm py-20 shadow-sm animate-on-scroll overflow-hidden">
                            <div class="text-center mb-16 container">
                                <h2 class="text-4xl font-black text-slate-950 mb-4 uppercase italic tracking-tighter leading-none">Global <span class="text-brand-primary">Synergy Grid</span></h2>
                                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em] italic">Architected by global industry leaders</p>
                            </div>

                            <div class="relative mt-12">
                                <div class="flex gap-2 items-center animate-logo-slide whitespace-nowrap">
                                    <?php 
                                        $slidingPartners = array_merge($event->builder_content['partners'], $event->builder_content['partners'], $event->builder_content['partners']); 
                                    ?>

                                    <?php $__currentLoopData = $slidingPartners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="flex-none bg-slate-50 rounded-sm p-10 border border-slate-100 flex flex-col items-center justify-center h-48 w-64 group hover:bg-slate-950 transition-all duration-700 shadow-sm">
                                            <img src="<?php echo e(asset($partner['logo'])); ?>" alt="<?php echo e($partner['name']); ?>" class="max-h-16 max-w-full object-contain grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700">
                                            <?php if(isset($partner['name']) && $partner['name']): ?>
                                                <p class="mt-6 text-[8px] font-black text-slate-400 uppercase tracking-[0.3em] italic text-center group-hover:text-brand-accent transition-colors"><?php echo e($partner['name']); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Dynamic CTA Section -->
                    <?php if(isset($event->builder_content['cta']['form_url']) && $event->builder_content['cta']['form_url']): ?>
                        <div id="cta" class="scroll-mt-40 bg-slate-950 border border-slate-900 rounded-sm p-16 md:p-32 text-center animate-on-scroll relative overflow-hidden group/final shadow-4xl">
                            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:50px_50px]"></div>
                            <div class="absolute top-0 left-0 w-0 h-1 bg-brand-accent group-hover/final:w-full transition-all duration-1000 z-30"></div>

                            <div class="relative z-10 max-w-4xl mx-auto">
                                <h2 class="text-5xl md:text-8xl font-black text-white uppercase italic tracking-tighter mb-12 leading-[0.85]"><?php echo e($event->builder_content['cta']['heading'] ?? 'Architect Your Excellence Node'); ?></h2>
                                <p class="text-slate-400 font-light italic mb-16 text-2xl leading-relaxed max-w-3xl mx-auto border-l border-r border-white/5 px-12"><?php echo e($event->builder_content['cta']['description'] ?? 'Join the global industrial transition. Submit your intelligence node and secure your summit pass today.'); ?></p>

                                <a href="<?php echo e($event->builder_content['cta']['form_url']); ?>" class="inline-flex items-center justify-center w-full sm:w-auto gap-8 bg-brand-accent text-slate-950 hover:bg-white px-20 py-10 rounded-sm font-black text-[10px] uppercase tracking-[0.4em] italic shadow-4xl transition-all duration-700 group/final-btn">
                                    <?php echo e($event->builder_content['cta']['btn_text'] ?: 'Register Node Now'); ?> <i class="fa-solid fa-arrow-right-long group-hover/final-btn:translate-x-6 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>

                </main>
            </div>
        </div>
    </div>

    <style>
        html { scroll-behavior: smooth; }
        [x-cloak] { display: none !important; }

        @keyframes logo-slide {
            0% { transform: translateX(0); }
            100% { transform: translateX(-33.33%); }
        }
        .animate-logo-slide {
            display: flex;
            width: max-content;
            animation: logo-slide 40s linear infinite;
        }
        .animate-logo-slide:hover {
            animation-play-state: paused;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/events/show.blade.php ENDPATH**/ ?>