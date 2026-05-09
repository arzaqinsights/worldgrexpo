<section class="section-padding bg-slate-50 relative overflow-hidden">
    <!-- Sophisticated Background Decor -->
    <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-brand-primary/5 rounded-full blur-[150px] -mr-96 -mt-96"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-brand-accent/5 rounded-full blur-[100px]"></div>

    <div class="container relative z-10">
        <!-- Modern Section Header -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-12 mb-24" x-data="{ visible: false }" x-intersect="visible = true">
            <div class="max-w-3xl space-y-6">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary/5 text-brand-primary text-[10px] font-black uppercase tracking-[0.2em]">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-pulse"></span>
                    Specialized Framework
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 leading-[0.9] tracking-tighter">
                    Our Core <span class="text-brand-primary italic">Service Pillars.</span>
                </h2>
                <p class="text-base text-slate-500 font-medium leading-relaxed">
                    Empowering enterprises through strategic initiatives, industry advocacy, and growth-driven solutions designed to foster global competitiveness.
                </p>
            </div>

            <!-- Stats Overlay Cards -->
            <div class="flex flex-col sm:flex-row gap-6">
                <div class="glass-panel p-4 rounded border border-slate-200 flex items-center gap-4 group hover:bg-white transition-all duration-500">
                    <div class="w-14 h-14 bg-brand-primary text-white rounded flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-users-gear text-2xl"></i>
                    </div>
                    <div>
                        <div class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Industry Support</div>
                        <div class="text-lg font-black text-slate-900">5,000+ Members</div>
                    </div>
                </div>
                <div class="glass-panel p-4 rounded border border-slate-200 flex items-center gap-4 group hover:bg-white transition-all duration-500">
                    <div class="w-14 h-14 bg-brand-accent text-brand-primary-dark rounded flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-earth-asia text-2xl"></i>
                    </div>
                    <div>
                        <div class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Global Presence</div>
                        <div class="text-lg font-black text-slate-900">40+ Countries</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Premium Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $services = [
                    [
                        'slug' => 'funding-initiative',
                        'image' => 'https://images.unsplash.com/photo-1560472355-536de3962603?q=80&w=2070&auto=format&fit=crop',
                        'icon' => 'hand-holding-dollar',
                        'title' => 'Funding Initiative',
                        'desc' => 'Strengthening enterprises by enabling seamless access to finance through top-tier global banking networks.'
                    ],
                    [
                        'slug' => 'strategic-promotion',
                        'image' => 'images/services/strategic-promotion.jpg',
                        'icon' => 'chart-line',
                        'title' => 'Strategic Promotion',
                        'desc' => 'Accelerating brand visibility and market share through data-driven promotional strategy and planning.'
                    ],
                    [
                        'slug' => 'global-awareness',
                        'image' => 'images/services/global-awareness.jpg',
                        'icon' => 'bullhorn',
                        'title' => 'Global Awareness',
                        'desc' => 'High-profile international platforms designed to project industrial innovation to global stakeholders.'
                    ],
                    [
                        'slug' => 'elite-networking',
                        'image' => 'images/services/elite-networking.jpg',
                        'icon' => 'people-group',
                        'title' => 'Elite Networking',
                        'desc' => 'Facilitating high-value B2B collaborations and cross-border partnerships through exclusive channels.'
                    ],
                    [
                        'slug' => 'market-intelligence',
                        'image' => 'images/services/market-intelligence.jpg',
                        'icon' => 'chart-pie',
                        'title' => 'Market Intelligence',
                        'desc' => 'Delivering real-time data and actionable insights to keep your business ahead of the global curve.'
                    ],
                    [
                        'slug' => 'policy-advocacy',
                        'image' => 'images/sectors/csr.jpg',
                        'icon' => 'file-contract',
                        'title' => 'Policy Advocacy',
                        'desc' => 'Dedicated representation at national and international governance levels for industrial interests.'
                    ],
                ];
            @endphp

            @foreach($services as $svc)
                <a href="{{ url('services/'.$svc['slug']) }}" 
                    class="group relative h-full flex flex-col rounded bg-brand-primary/10 border border-slate-100 p-4 transition-all duration-700 hover:-translate-y-4 hover:shadow-2xl hover:shadow-brand-primary/5"
                    x-data="{ visible: false }" x-intersect="visible = true"
                    :class="visible ? 'translate-y-0 opacity-100' : 'translate-y-12 opacity-0'"
                    style="transition-delay: {{ $loop->index * 100 }}ms">
                    
                    <!-- Card Media -->
                    <div class="h-64 relative rounded overflow-hidden">
                        <img src="{{ asset($svc['image']) }}" alt="{{ $svc['title'] }}" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                        <div class="absolute inset-0 bg-linear-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        
                        <!-- Floating Icon Container -->
                        <div class="absolute bottom-6 left-6 w-16 h-16 rounded bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-white transition-all duration-500 group-hover:bg-brand-accent group-hover:text-brand-primary group-hover:scale-110">
                            <i class="fa-solid fa-{{ $svc['icon'] }} text-2xl"></i>
                        </div>
                    </div>

                    <!-- Card Content -->
                    <div class="flex-1 p-8 space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="text-brand-primary font-black text-[10px] uppercase tracking-[0.3em]">Core Pillar {{ $loop->iteration }}</span>
                            <i class="fa-solid fa-arrow-up-right-from-square text-slate-300 text-xs transition-colors group-hover:text-brand-primary"></i>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 group-hover:text-brand-primary transition-colors tracking-tight uppercase">
                            {{ $svc['title'] }}
                        </h3>
                        <p class="text-sm text-slate-500 font-medium leading-relaxed">
                            {{ $svc['desc'] }}
                        </p>
                    </div>

                    <!-- Interactive Decoration -->
                    <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-2/3 h-1 bg-brand-primary/0 rounded-full transition-all duration-500 group-hover:bg-brand-primary group-hover:w-full"></div>
                </a>
            @endforeach
        </div>

        <!-- Modern CTA Banner -->
        <div class="mt-24 relative rounded premium-gradient p-12 lg:p-20 overflow-hidden group">
            <!-- Animated Background Pattern -->
            <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] mix-blend-overlay"></div>
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-brand-accent/20 rounded-full blur-[100px] animate-pulse"></div>
            
            <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-12">
                <div class="space-y-6 text-center lg:text-left">
                    <div class="inline-flex items-center gap-3 px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-brand-accent text-[11px] font-black uppercase tracking-[0.2em]">
                        Ready to elevate your business?
                    </div>
                    <h3 class="text-4xl md:text-5xl font-black text-white leading-[1.1] tracking-tighter">
                        Join the Global Network <br> <span class="text-brand-accent">Today.</span>
                    </h3>
                    <p class="text-white/70 text-lg font-medium max-w-xl">
                        Access six specialized industrial pillars designed to accelerate your growth and transform your business into a global leader.
                    </p>
                </div>
                
                <div class="flex flex-col gap-6 shrink-0">
                    <a href="{{ route('register') }}" 
                        class="px-12 py-6 rounded bg-brand-accent text-brand-primary-dark font-black uppercase text-sm tracking-widest hover:bg-white hover:scale-105 transition-all">
                        Get Started Now
                    </a>
                    <a href="{{ route('join.index') }}" 
                        class="px-12 py-6 rounded bg-white/10 backdrop-blur-md text-white font-black uppercase text-sm tracking-widest border border-white/20 hover:bg-white/20 transition-all">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
