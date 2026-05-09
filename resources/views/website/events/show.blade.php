@extends('layouts.website')

@section('title', $event->title . ' | World Grexpo Foundation')

@php
    // Fetch Wall of Excellence awards to show on the event page
    $excellenceAwards = \App\Models\ExcellenceAward::where('status', 'published')
        ->where('show_on_home', true)
        ->orderBy('order')
        ->take(3)
        ->get();
@endphp

@section('content')

    <!-- Premium Event Hero -->
    <section class="relative min-h-[85vh] flex items-center pt-48 pb-32 overflow-hidden bg-slate-950 text-white">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
            <div class="absolute top-1/4 right-0 w-[800px] h-[800px] bg-brand-primary/10 rounded-full blur-[140px] animate-pulse"></div>
            <div class="absolute -bottom-20 -left-20 w-[500px] h-[500px] bg-brand-accent/5 rounded-full blur-[100px]"></div>
        </div>

        <div class="container relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-20 items-center">
                <!-- Intelligence Details -->
                <div class="lg:col-span-7 space-y-12 animate-on-scroll">
                    <div class="space-y-8">
                        <div class="inline-flex items-center gap-3 px-5 py-2 bg-white/5 border border-white/10 backdrop-blur-md rounded-full">
                            <div class="w-2 h-2 bg-brand-accent rounded-full animate-ping"></div>
                            <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Summit Node Alpha</span>
                        </div>

                        <h1 class="text-6xl md:text-9xl font-black text-white leading-[0.85] tracking-tighter uppercase italic">
                            {{ $event->title }}
                        </h1>

                        <p class="text-2xl text-slate-400 font-medium italic max-w-2xl border-l-4 border-brand-primary pl-10">
                            Strategic industrial node designed for global synergy, facilitator of absolute growth and recognized transition excellence.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="p-8 bg-white/5 border border-white/10 rounded-[2.5rem] backdrop-blur-md group hover:border-brand-primary transition-all duration-700">
                            <div class="flex items-center gap-6">
                                <div class="w-16 h-16 bg-brand-primary/10 rounded-2xl flex items-center justify-center text-brand-primary text-2xl shadow-xl border border-brand-primary/20 group-hover:bg-brand-primary group-hover:text-white transition-all">
                                    <i class="fa-regular fa-clock"></i>
                                </div>
                                <div>
                                    <span class="block text-[9px] font-black text-slate-500 uppercase tracking-widest leading-none mb-2">Schedule Node</span>
                                    <span class="block text-2xl font-black text-white italic uppercase tracking-tighter">{{ $event->event_date->format('d M, Y') }}</span>
                                    <span class="block text-[10px] font-black text-brand-accent uppercase tracking-widest mt-1">{{ $event->event_date->format('h:i A') }} IST</span>
                                </div>
                            </div>
                        </div>

                        <div class="p-8 bg-white/5 border border-white/10 rounded-[2.5rem] backdrop-blur-md group hover:border-brand-primary transition-all duration-700">
                            <div class="flex items-center gap-6">
                                <div class="w-16 h-16 bg-brand-primary/10 rounded-2xl flex items-center justify-center text-brand-primary text-2xl shadow-xl border border-brand-primary/20 group-hover:bg-brand-primary group-hover:text-white transition-all">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <span class="block text-[9px] font-black text-slate-500 uppercase tracking-widest leading-none mb-2">Location Node</span>
                                    <span class="block text-2xl font-black text-white italic uppercase tracking-tighter">{{ $event->location ?: 'Global Node' }}</span>
                                    <span class="block text-[10px] font-black text-brand-accent uppercase tracking-widest mt-1">Hybrid Access Enabled</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($event->show_timer)
                        <div class="space-y-6">
                            <div class="flex items-center gap-4 text-[10px] font-black text-brand-accent uppercase tracking-[0.5em] italic">
                                <span class="w-12 h-px bg-brand-accent"></span> Node Activation In
                            </div>
                            <div x-data="{
                                target: new Date('{{ $event->event_date->format('Y-m-d\TH:i:s') }}').getTime(),
                                now: new Date().getTime(),
                                get t() { return Math.max(0, this.target - this.now); },
                                get d() { return Math.floor(this.t / (1000*60*60*24)); },
                                get h() { return Math.floor((this.t % (1000*60*60*24)) / (1000*60*60)); },
                                get m() { return Math.floor((this.t % (1000*60*60)) / (1000*60)); },
                                get s() { return Math.floor((this.t % (1000*60)) / 1000); }
                            }" x-init="setInterval(() => now = new Date().getTime(), 1000)" class="grid grid-cols-4 gap-4">
                                @foreach(['d' => 'Days', 'h' => 'Hrs', 'm' => 'Min', 's' => 'Sec'] as $key => $label)
                                    <div class="bg-white/5 border border-white/10 p-8 rounded-[2rem] text-center backdrop-blur-xl group hover:border-brand-accent transition-all duration-700 shadow-2xl">
                                        <span class="block text-4xl md:text-6xl font-black text-white tracking-tighter mb-1" x-text="{{ $key }}">0</span>
                                        <span class="block text-[9px] font-black text-slate-500 uppercase tracking-widest">{{ $label }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Media Architecture -->
                <div class="lg:col-span-5 animate-on-scroll">
                    <div class="relative rounded-[4rem] overflow-hidden border border-white/10 shadow-2xl group">
                        <img src="{{ $event->image ? asset($event->image) : asset('images/event-placeholder.jpg') }}" alt="{{ $event->title }}" 
                             class="w-full aspect-[4/5] object-cover grayscale group-hover:grayscale-0 scale-105 group-hover:scale-110 transition-all duration-[3000ms]">
                        <div class="absolute inset-0 bg-slate-950/20 group-hover:bg-transparent transition-all duration-1000"></div>
                        <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-transparent to-transparent opacity-60"></div>
                        
                        <!-- Floating Badge -->
                        <div class="absolute bottom-12 left-12 right-12 p-8 bg-white/10 backdrop-blur-xl border border-white/20 rounded-[2.5rem] shadow-2xl">
                            <div class="flex items-center justify-between">
                                <span class="text-white text-[10px] font-black uppercase tracking-widest italic">Industrial Identity</span>
                                <span class="text-brand-accent text-[10px] font-black uppercase tracking-widest">WGF-{{ $event->id }}-NODE</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Ecosystem -->
    <div class="bg-white py-32" 
         x-data="{ 
            activeSection: 'about',
            checkScroll() {
                const sections = ['about', 'guests', 'highlights', 'excellence', 'gallery', 'testimonials', 'pricing', 'faq', 'resources', 'venue', 'partners'];
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
        
        <div class="container">
            <div class="flex flex-col lg:flex-row gap-12 items-start relative">

                <!-- Navigation Sidebar -->
                <aside class="w-full hidden lg:block lg:w-[320px] sticky top-40 z-30">
                    <div class="bg-slate-950 rounded-[3rem] border border-slate-900 overflow-hidden shadow-2xl">
                        <div class="p-8 bg-slate-900/50 border-b border-slate-800">
                            <h4 class="text-[10px] font-black text-white uppercase tracking-[0.4em] flex items-center gap-4 italic">
                                 <span class="w-2 h-2 bg-brand-accent rounded-full animate-pulse"></span> Terminal Nodes
                            </h4>
                        </div>
                        <div class="p-4 space-y-2">
                            @php
                                $navItems = [
                                    ['id' => 'about', 'label' => 'Summit Intel', 'icon' => 'fa-info-circle'],
                                    ['id' => 'guests', 'label' => 'Elite Guests', 'icon' => 'fa-star'],
                                    ['id' => 'highlights', 'label' => 'Strategic Node', 'icon' => 'fa-bolt'],
                                    ['id' => 'excellence', 'label' => 'Excellence Node', 'icon' => 'fa-crown'],
                                    ['id' => 'gallery', 'label' => 'Visual Archive', 'icon' => 'fa-images'],
                                    ['id' => 'testimonials', 'label' => 'Node Logic', 'icon' => 'fa-comments'],
                                    ['id' => 'pricing', 'label' => 'Acquire Access', 'icon' => 'fa-ticket'],
                                    ['id' => 'faq', 'label' => 'Node FAQ', 'icon' => 'fa-question-circle'],
                                    ['id' => 'resources', 'label' => 'Data Center', 'icon' => 'fa-folder-open'],
                                    ['id' => 'venue', 'label' => 'Venue Node', 'icon' => 'fa-map-marker-alt'],
                                    ['id' => 'partners', 'label' => 'Synergy Grid', 'icon' => 'fa-handshake'],
                                ];
                            @endphp

                            @foreach($navItems as $item)
                                @php
                                    $showItem = false;
                                    if ($item['id'] === 'excellence') { $showItem = $excellenceAwards->count() > 0; }
                                    elseif (in_array($item['id'], ['gallery', 'testimonials', 'guests'])) {
                                        $showItem = isset($event->builder_content[$item['id']]) && count($event->builder_content[$item['id']]) > 0;
                                    } else {
                                        $showItem = isset($event->builder_content[$item['id']]) && (!is_array($event->builder_content[$item['id']]) || count($event->builder_content[$item['id']]) > 0);
                                    }
                                @endphp

                                @if($showItem)
                                    <a href="#{{ $item['id'] }}" 
                                       @click="activeSection = '{{ $item['id'] }}'"
                                       :class="activeSection === '{{ $item['id'] }}' ? 'bg-brand-primary text-white shadow-xl' : 'text-slate-500 hover:bg-white/5 hover:text-white'"
                                       class="flex items-center justify-between p-5 rounded-[1.5rem] text-[10px] font-black uppercase tracking-[0.3em] transition-all duration-500 italic group/nav">
                                        <span class="flex items-center gap-5">
                                            <i class="fa-solid {{ $item['icon'] }} w-4 transition-transform group-hover/nav:scale-125"></i>
                                            {{ $item['label'] }}
                                        </span>
                                        <i class="fa-solid fa-chevron-right text-[8px] opacity-30 group-hover/nav:translate-x-2 transition-transform"></i>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                        <div class="p-8 pt-0">
                            <a href="{{ $event->builder_content['about']['registration_url'] ?? url('join') }}" target="_blank" 
                               class="block w-full bg-brand-accent text-slate-950 hover:bg-white text-center py-7 rounded-[2rem] font-black text-[10px] uppercase tracking-[0.4em] transition-all duration-700 italic shadow-2xl group/reg">
                                 Register Node <i class="fa-solid fa-bolt ml-2 group-hover/reg:scale-125 transition-transform"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Contact Channels -->
                    <div class="mt-6 bg-slate-50 rounded-[3rem] p-10 border border-slate-100 shadow-xl space-y-4">
                        <h5 class="text-[10px] font-black text-slate-900 uppercase tracking-[0.3em] italic px-2">Support Nodes</h5>
                        <div class="grid grid-cols-1 gap-3">
                            <a href="https://wa.me/919810690843?text=Hi,%20I'm%20interested%20in%20the%20{{ urlencode($event->title) }}%20nomination." target="_blank" 
                               class="flex items-center justify-center gap-4 bg-[#25D366] text-white hover:bg-slate-950 py-5 rounded-[1.5rem] font-black text-[10px] uppercase tracking-[0.3em] transition-all duration-500 shadow-sm">
                                <i class="fa-brands fa-whatsapp text-lg"></i> WhatsApp Node
                            </a>
                            <a href="tel:+919810690843" 
                               class="flex items-center justify-center gap-4 bg-slate-950 text-white hover:bg-brand-primary py-5 rounded-[1.5rem] font-black text-[10px] uppercase tracking-[0.3em] transition-all duration-500 shadow-sm">
                                <i class="fa-solid fa-phone"></i> Voice Node
                            </a>
                        </div>
                    </div>
                </aside>

                <!-- Core Interface Sections -->
                <main class="flex-1 space-y-12">

                    <!-- About Summit -->
                    <div id="about" class="scroll-mt-40 p-12 md:p-24 rounded-[4rem] bg-slate-50 border border-slate-100 shadow-xl animate-on-scroll">
                        <div class="space-y-10">
                            <div class="flex items-center gap-8">
                                <div class="w-20 h-20 bg-brand-primary/10 rounded-[2rem] flex items-center justify-center text-brand-primary text-4xl shadow-2xl border border-brand-primary/20">
                                    <i class="fa-solid fa-circle-info"></i>
                                </div>
                                <div class="space-y-2">
                                    <h2 class="text-4xl md:text-6xl font-black text-slate-900 tracking-tighter uppercase italic leading-none">The <span class="text-brand-primary">Summit Node.</span></h2>
                                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.5em] italic">{{ $event->builder_content['about']['subtitle'] ?? 'Transforming the Future' }}</p>
                                </div>
                            </div>
                            <div class="text-2xl text-slate-500 font-medium italic leading-[1.6] border-l-8 border-brand-primary/20 pl-12 py-4">
                                {!! nl2br(e($event->builder_content['about']['description'] ?? $event->description)) !!}
                            </div>
                        </div>
                    </div>

                    <!-- Elite Guests -->
                    @if(isset($event->builder_content['guests']) && count($event->builder_content['guests']) > 0)
                        <div id="guests" class="scroll-mt-40 space-y-12 animate-on-scroll">
                            @php
                                $guests = $event->builder_content['guests'];
                                $fullGuests = array_filter($guests, fn($g) => (!isset($g['display_style']) || $g['display_style'] === 'full') && !empty($g['name']));
                                $portraitGuests = array_filter($guests, fn($g) => isset($g['display_style']) && $g['display_style'] === 'portrait' && !empty($g['name']));
                            @endphp

                            @if(count($fullGuests) > 0)
                                <div class="space-y-6">
                                    @foreach($fullGuests as $guest)
                                        <div class="group bg-slate-50 border border-slate-100 rounded-[4rem] overflow-hidden hover:bg-slate-950 transition-all duration-1000 p-12 md:p-20 relative flex flex-col md:flex-row gap-16 items-center shadow-xl">
                                            <div class="w-full md:w-80 h-auto overflow-hidden shrink-0 rounded-[3rem] bg-slate-900 border border-slate-200 group-hover:border-slate-800 transition-all duration-1000 shadow-2xl">
                                                @if(!empty($guest['photo']))
                                                    <img src="{{ asset($guest['photo']) }}" alt="{{ $guest['name'] }}" 
                                                         class="w-full aspect-[4/5] object-cover grayscale group-hover:grayscale-0 scale-105 group-hover:scale-110 transition-all duration-[2000ms]">
                                                @else
                                                    <div class="w-full aspect-[4/5] flex items-center justify-center text-slate-800">
                                                        <i class="fa-solid fa-user-tie text-9xl"></i>
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="flex-1 space-y-8 text-center md:text-left">
                                                <div class="space-y-4">
                                                    <div class="inline-flex px-6 py-2 bg-brand-primary text-white text-[9px] font-black uppercase tracking-widest rounded-full shadow-2xl">
                                                        {{ $guest['title'] ?? 'Strategic Node Guest' }}
                                                    </div>
                                                    <h3 class="text-4xl md:text-6xl font-black text-slate-900 group-hover:text-white transition-all duration-700 uppercase italic tracking-tighter leading-none">{{ $guest['name'] }}</h3>
                                                    <p class="text-brand-primary font-black text-[11px] uppercase tracking-[0.4em] italic">{{ $guest['designation'] }}</p>
                                                </div>

                                                @if(!empty($guest['about']))
                                                    <p class="text-xl text-slate-500 font-medium italic leading-relaxed group-hover:text-slate-400 transition-colors border-l-4 border-slate-200 group-hover:border-slate-800 pl-10">
                                                        {!! nl2br(e($guest['about'])) !!}
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            @if(count($portraitGuests) > 0)
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                                    @foreach($portraitGuests as $guest)
                                        <div class="bg-slate-50 border border-slate-100 rounded-[3.5rem] overflow-hidden p-10 group hover:bg-slate-950 transition-all duration-1000 shadow-xl">
                                            <div class="w-full aspect-square rounded-[2.5rem] overflow-hidden mb-8 border border-slate-200 group-hover:border-slate-800 transition-all duration-1000 shadow-2xl">
                                                @if(!empty($guest['photo']))
                                                    <img src="{{ asset($guest['photo']) }}" alt="{{ $guest['name'] }}" 
                                                         class="w-full h-full object-cover grayscale group-hover:grayscale-0 scale-105 group-hover:scale-110 transition-all duration-[1500ms]">
                                                @else
                                                    <div class="w-full h-full flex items-center justify-center bg-slate-900 text-slate-700">
                                                        <i class="fa-solid fa-user text-6xl"></i>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="space-y-4">
                                                <div class="inline-flex px-4 py-1.5 bg-brand-primary/10 text-brand-primary text-[8px] font-black uppercase tracking-widest rounded-full group-hover:bg-brand-primary group-hover:text-white transition-all">
                                                    {{ $guest['title'] ?? 'Guest Node' }}
                                                </div>
                                                <h3 class="text-2xl font-black text-slate-900 group-hover:text-white transition-colors uppercase italic tracking-tighter leading-none">{{ $guest['name'] }}</h3>
                                                <p class="text-[9px] font-black text-slate-400 group-hover:text-brand-accent transition-colors uppercase tracking-widest italic">{{ $guest['designation'] }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endif

                    <!-- Strategic Highlights -->
                    @if(isset($event->builder_content['highlights']) && count($event->builder_content['highlights']) > 0)
                        <div id="highlights" class="scroll-mt-40 space-y-12">
                            @foreach($event->builder_content['highlights'] as $hl)
                                <div class="p-12 md:p-24 rounded-[4rem] bg-slate-950 text-white overflow-hidden shadow-2xl group relative animate-on-scroll border border-slate-900">
                                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
                                    <div class="absolute top-0 right-0 w-80 h-80 bg-brand-primary/10 rounded-full blur-[100px]"></div>
                                    
                                    <div class="relative z-10 space-y-16">
                                        <div class="space-y-8">
                                            <h4 class="text-4xl md:text-6xl font-black uppercase italic tracking-tighter leading-none flex items-center gap-10">
                                                <span class="w-20 h-1 bg-brand-primary"></span>
                                                {{ $hl['title'] }}
                                            </h4>
                                            <p class="text-2xl font-medium italic text-slate-400 leading-relaxed border-l-4 border-brand-primary/20 pl-12 max-w-4xl">
                                                {!! nl2br(e($hl['desc'])) !!}
                                            </p>
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                            @foreach(['pdf1', 'pdf2'] as $pdf)
                                                @if(isset($hl[$pdf.'_path']) && $hl[$pdf.'_path'])
                                                    <div class="p-10 rounded-[3rem] bg-white/5 border border-white/10 group/pdf hover:bg-white/10 hover:border-brand-primary transition-all duration-700 shadow-2xl">
                                                        <div class="aspect-video bg-slate-900 rounded-[2rem] mb-8 overflow-hidden relative border border-white/5 shadow-2xl">
                                                            @if(isset($hl[$pdf.'_thumb']) && $hl[$pdf.'_thumb'])
                                                                <img src="{{ asset($hl[$pdf.'_thumb']) }}" class="w-full h-full object-cover grayscale group-hover/pdf:grayscale-0 transition-all duration-1000">
                                                            @else
                                                                <div class="w-full h-full flex flex-col items-center justify-center gap-6">
                                                                    <i class="fa-solid fa-file-pdf text-6xl text-brand-primary/20 group-hover/pdf:scale-110 transition-transform"></i>
                                                                    <span class="text-[9px] font-black text-slate-700 uppercase tracking-widest">Protocol Intelligence</span>
                                                                </div>
                                                            @endif
                                                            <div class="absolute inset-0 bg-slate-950/80 opacity-0 group-hover/pdf:opacity-100 transition-all duration-700 flex items-center justify-center backdrop-blur-md">
                                                                <a href="{{ asset($hl[$pdf.'_path']) }}" target="_blank" 
                                                                   class="bg-brand-primary text-white px-10 py-5 rounded-full text-[10px] font-black uppercase tracking-[0.3em] italic shadow-2xl hover:bg-white hover:text-slate-950 transition-all duration-500">
                                                                    Acquire Document <i class="fa-solid fa-up-right-from-square ml-4"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <h5 class="text-[11px] font-black text-slate-400 group-hover/pdf:text-white transition-all duration-700 uppercase italic tracking-widest leading-tight">
                                                            {{ $hl[$pdf.'_name'] ?: 'Strategic Mandate' }}
                                                        </h5>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <!-- Excellence Node -->
                    @if($excellenceAwards->count() > 0)
                        <div id="excellence" class="scroll-mt-40 p-12 md:p-24 rounded-[4rem] bg-white border border-slate-100 shadow-2xl animate-on-scroll">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-12 mb-16">
                                <div class="flex items-center gap-8">
                                    <div class="w-20 h-20 bg-brand-primary/10 rounded-[2rem] flex items-center justify-center text-brand-primary text-4xl shadow-2xl border border-brand-primary/20">
                                        <i class="fa-solid fa-crown"></i>
                                    </div>
                                    <div class="space-y-2">
                                        <h2 class="text-4xl md:text-6xl font-black text-slate-900 tracking-tighter uppercase italic leading-none">Excellence <span class="text-brand-primary">Node.</span></h2>
                                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.5em] italic">Join these recognized industrial leaders</p>
                                    </div>
                                </div>
                                <a href="{{ route('excellence.index') }}" class="group inline-flex items-center gap-6 px-8 py-4 bg-slate-950 text-white rounded-full text-[10px] font-black uppercase tracking-[0.4em] italic hover:bg-brand-primary transition-all duration-700 shadow-2xl">
                                    View Grid <i class="fa-solid fa-arrow-right group-hover:translate-x-3 transition-transform"></i>
                                </a>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                                @foreach($excellenceAwards as $award)
                                    <div class="group bg-slate-950 rounded-[3rem] overflow-hidden hover:shadow-brand-primary/20 transition-all duration-1000 shadow-2xl">
                                        <div class="relative aspect-[4/5] overflow-hidden">
                                            <img src="{{ asset($award->award_image) }}" alt="{{ $award->title }}" 
                                                 class="w-full h-full object-cover grayscale group-hover:grayscale-0 scale-105 group-hover:scale-110 transition-all duration-[2000ms]">
                                            <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-transparent to-transparent opacity-80"></div>
                                            <div class="absolute bottom-10 left-10 right-10">
                                                <p class="text-white font-black text-2xl uppercase italic tracking-tighter leading-none group-hover:text-brand-accent transition-all duration-700">{{ $award->title }}</p>
                                            </div>
                                        </div>
                                        <div class="p-10 flex items-center gap-6 border-t border-white/5">
                                            @if($award->giver_image)
                                                <img src="{{ asset($award->giver_image) }}" class="w-14 h-14 rounded-2xl grayscale group-hover:grayscale-0 border border-white/10 object-cover shadow-2xl transition-all">
                                            @endif
                                            <div>
                                                <p class="text-[11px] font-black text-white uppercase italic leading-none mb-2">{{ $award->giver_name }}</p>
                                                <p class="text-[9px] font-black text-slate-500 uppercase tracking-widest italic">{{ Str::limit($award->giver_designation, 30) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Visual Center -->
                    @if(isset($event->builder_content['gallery']) && count($event->builder_content['gallery']) > 0)
                        <div id="gallery" class="scroll-mt-40 p-12 md:p-24 rounded-[4rem] bg-slate-50 border border-slate-100 shadow-2xl animate-on-scroll">
                            <div class="mb-20 flex flex-col lg:flex-row lg:items-center justify-between gap-12">
                                <div class="flex items-center gap-8">
                                    <div class="w-20 h-20 bg-brand-primary/10 rounded-[2rem] flex items-center justify-center text-brand-primary text-4xl shadow-2xl border border-brand-primary/20">
                                        <i class="fa-solid fa-images"></i>
                                    </div>
                                    <div class="space-y-2">
                                        <h2 class="text-4xl md:text-6xl font-black text-slate-900 tracking-tighter uppercase italic leading-none">Visual <span class="text-brand-primary">Archive.</span></h2>
                                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.5em] italic">Glimpses from previous editions</p>
                                    </div>
                                </div>
                                <a href="{{ route('gallery') }}" class="group inline-flex items-center gap-6 px-10 py-5 bg-slate-950 text-white rounded-full text-[10px] font-black uppercase tracking-[0.4em] italic hover:bg-brand-primary transition-all duration-700 shadow-2xl">
                                    Full Archive <i class="fa-solid fa-arrow-right-long group-hover:translate-x-4 transition-transform"></i>
                                </a>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                @foreach($event->builder_content['gallery'] as $media)
                                    <div class="relative aspect-video rounded-[2.5rem] overflow-hidden bg-slate-950 border border-white/5 group shadow-2xl">
                                        @if(isset($media['type']) && $media['type'] === 'video')
                                            <video src="{{ asset($media['url']) }}" controls class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all"></video>
                                        @else
                                            <img src="{{ asset($media['url']) }}" 
                                                 class="w-full h-full object-cover grayscale group-hover:grayscale-0 scale-105 group-hover:scale-110 transition-all duration-[1500ms]">
                                        @endif
                                        <div class="absolute inset-0 bg-slate-950/40 group-hover:bg-transparent transition-all duration-1000"></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Node Logic -->
                    @if(isset($event->builder_content['testimonials']) && count($event->builder_content['testimonials']) > 0)
                        <div id="testimonials" class="scroll-mt-40 p-12 md:p-24 rounded-[4rem] bg-white border border-slate-100 shadow-2xl animate-on-scroll">
                            <div class="mb-20 flex items-center gap-8">
                                <div class="w-20 h-20 bg-brand-primary/10 rounded-[2rem] flex items-center justify-center text-brand-primary text-4xl shadow-2xl border border-brand-primary/20">
                                    <i class="fa-solid fa-comments"></i>
                                </div>
                                <div class="space-y-2">
                                    <h2 class="text-4xl md:text-6xl font-black text-slate-900 tracking-tighter uppercase italic leading-none">Node <span class="text-brand-primary">Logic.</span></h2>
                                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.5em] italic">Industrial proof from past nodes</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                @foreach($event->builder_content['testimonials'] as $testimonial)
                                    <div class="p-12 rounded-[3.5rem] bg-slate-50 border border-slate-100 relative hover:bg-slate-950 transition-all duration-1000 group shadow-xl">
                                        <i class="fa-solid fa-quote-left text-8xl text-slate-200 absolute top-12 right-12 group-hover:text-white/5 transition-all duration-1000"></i>
                                        <p class="text-xl font-medium italic text-slate-500 mb-12 relative z-10 group-hover:text-slate-400 transition-colors leading-relaxed">
                                            "{!! nl2br(e($testimonial['text'])) !!}"
                                        </p>
                                        <div class="flex items-center gap-8 relative z-10">
                                            <div class="w-20 h-20 rounded-[2rem] bg-slate-200 border border-slate-300 group-hover:border-white/10 overflow-hidden shrink-0 shadow-2xl transition-all duration-1000">
                                                @if(isset($testimonial['image']) && $testimonial['image'])
                                                    <img src="{{ asset($testimonial['image']) }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000">
                                                @else
                                                    <div class="w-full h-full flex items-center justify-center bg-slate-950 text-brand-primary font-black text-2xl italic">
                                                        {{ substr($testimonial['name'] ?? 'U', 0, 1) }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="space-y-2">
                                                <p class="text-[11px] font-black text-slate-950 group-hover:text-white transition-colors uppercase italic tracking-widest leading-none">{{ $testimonial['name'] }}</p>
                                                <p class="text-[9px] font-black text-slate-500 group-hover:text-brand-primary transition-colors uppercase tracking-[0.3em] italic">{{ $testimonial['designation'] ?? 'Representative' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Terminal Access -->
                    @if(isset($event->builder_content['pricing']) && count($event->builder_content['pricing']) > 0)
                        <div id="pricing" class="scroll-mt-40 p-12 md:p-24 rounded-[4rem] bg-slate-950 text-white overflow-hidden shadow-2xl animate-on-scroll border border-slate-900 group">
                            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
                            <div class="absolute -top-40 -right-40 w-96 h-96 bg-brand-primary/10 rounded-full blur-[120px]"></div>

                            <div class="text-center mb-24 relative z-10 space-y-8">
                                <div class="inline-flex px-8 py-3 bg-white/5 border border-white/10 rounded-full text-[10px] font-black uppercase tracking-[0.4em] italic backdrop-blur-md">
                                    <i class="fa-solid fa-lock text-brand-accent mr-3"></i> Encrypted Terminal Node Access
                                </div>
                                <h2 class="text-5xl md:text-8xl font-black text-white leading-none uppercase italic tracking-tighter">
                                    {!! $event->builder_content['pricing_header']['heading'] ?? 'Acquire Your <span class="text-brand-accent not-italic">Summit Pass.</span>' !!}
                                </h2>
                                <p class="text-[10px] font-black text-slate-500 uppercase tracking-[0.5em] italic">{{ $event->builder_content['pricing_header']['description'] ?? 'Choose your institutional access level' }}</p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 relative z-10">
                                @foreach($event->builder_content['pricing'] as $tier)
                                    <div class="p-12 md:p-16 rounded-[3.5rem] bg-white/5 backdrop-blur-xl border border-white/10 hover:border-brand-primary transition-all duration-1000 shadow-2xl flex flex-col group/tier relative overflow-hidden">
                                        @if(isset($tier['recommended']) && $tier['recommended'])
                                            <div class="absolute top-0 right-0 bg-brand-primary text-white text-[9px] font-black uppercase tracking-widest px-10 py-3 italic rounded-bl-[2rem] shadow-2xl">Priority Node</div>
                                        @endif

                                        <div class="space-y-12 flex-1">
                                            <div class="space-y-4">
                                                <h4 class="text-[11px] font-black text-slate-400 uppercase tracking-widest italic group-hover/tier:text-brand-primary transition-colors">{{ $tier['type'] }} Pass</h4>
                                                <div class="flex items-end gap-5">
                                                    <span class="text-xl font-black text-brand-primary uppercase italic mb-3">{{ $tier['currency'] ?? 'INR' }}</span>
                                                    <span class="text-6xl md:text-8xl font-black text-white tracking-tighter uppercase italic">{{ $tier['price'] }}</span>
                                                </div>
                                            </div>
                                            <p class="text-xl font-medium italic text-slate-400 leading-relaxed border-l-2 border-white/10 pl-8 group-hover/tier:text-slate-300 transition-colors">
                                                {{ $tier['desc'] }}
                                            </p>
                                        </div>

                                        <a href="{{ !empty($tier['form_url']) ? $tier['form_url'] : ($event->builder_content['about']['registration_url'] ?? url('join')) }}" target="_blank" 
                                           class="mt-16 w-full bg-brand-primary hover:bg-white text-white hover:text-slate-950 text-center py-7 rounded-[2rem] font-black text-[10px] uppercase tracking-[0.4em] transition-all duration-700 italic shadow-2xl group/btn-p">
                                            {{ !empty($tier['btn_text']) ? $tier['btn_text'] : 'Acquire Access' }} <i class="fa-solid fa-bolt-lightning ml-4 group-hover/btn-p:translate-x-4 transition-transform"></i>
                                        </a>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mt-20 pt-10 border-t border-white/5 flex flex-wrap items-center justify-center gap-12 grayscale opacity-30 group-hover:opacity-60 transition-all duration-1000 relative z-10">
                                @foreach(['visa', 'mastercard', 'building-columns', 'shield-halved'] as $icon)
                                    <div class="flex items-center gap-4 text-[10px] font-black uppercase tracking-widest">
                                        <i class="fa-solid fa-{{ $icon === 'visa' ? 'cc-visa' : ($icon === 'mastercard' ? 'cc-mastercard' : $icon) }} text-3xl"></i>
                                        {{ strtoupper($icon) }} NODE
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Node FAQ -->
                    @if(isset($event->builder_content['faq']) && count($event->builder_content['faq']) > 0)
                        <div id="faq" class="scroll-mt-40 p-12 md:p-24 rounded-[4rem] bg-slate-50 border border-slate-100 shadow-2xl animate-on-scroll">
                            <h2 class="text-4xl md:text-6xl font-black text-slate-900 mb-20 text-center uppercase italic tracking-tighter leading-none">Intelligence <span class="text-brand-primary">FAQ.</span></h2>
                            <div class="space-y-4 max-w-4xl mx-auto" x-data="{ openFaq: 0 }">
                                @foreach($event->builder_content['faq'] as $index => $q)
                                    <div class="bg-white border border-slate-100 rounded-[2.5rem] overflow-hidden group/faq transition-all duration-500 hover:bg-slate-950 shadow-xl">
                                        <button @click="openFaq = openFaq === {{ $index }} ? null : {{ $index }}" class="w-full flex items-center justify-between p-10 text-left">
                                            <span class="text-lg font-black text-slate-900 uppercase italic tracking-widest group-hover/faq:text-white transition-colors leading-tight">{{ $q['q'] }}</span>
                                            <div class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center transition-all duration-700" :class="openFaq === {{ $index }} ? 'rotate-180 bg-brand-primary border-brand-primary text-white' : 'group-hover/faq:border-white/20 group-hover/faq:text-white'">
                                                <i class="fa-solid fa-chevron-down text-[10px]"></i>
                                            </div>
                                        </button>
                                        <div x-show="openFaq === {{ $index }}" x-collapse class="px-10 pb-10">
                                            <p class="text-xl font-medium italic text-slate-500 leading-relaxed border-t border-slate-50 group-hover/faq:border-white/5 pt-10 group-hover/faq:text-slate-400 transition-all duration-700">
                                                {{ $q['a'] }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Data Center -->
                    @if(isset($event->builder_content['resources']) && count($event->builder_content['resources']) > 0)
                        <div id="resources" class="scroll-mt-40 animate-on-scroll space-y-12">
                            <div class="flex items-center gap-8">
                                <div class="w-20 h-20 bg-brand-primary/10 rounded-[2rem] flex items-center justify-center text-brand-primary text-4xl shadow-2xl border border-brand-primary/20">
                                    <i class="fa-solid fa-folder-open"></i>
                                </div>
                                <div class="space-y-2">
                                    <h2 class="text-4xl md:text-6xl font-black text-slate-900 tracking-tighter uppercase italic leading-none">Data <span class="text-brand-primary">Center.</span></h2>
                                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.5em] italic">Strategic industrial intelligence</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                                @foreach($event->builder_content['resources'] as $res)
                                    <a href="{{ asset($res['url']) }}" target="_blank" class="group bg-slate-50 border border-slate-100 rounded-[3rem] overflow-hidden hover:bg-slate-950 transition-all duration-1000 flex flex-col shadow-xl">
                                        <div class="relative aspect-video bg-slate-900 overflow-hidden border-b border-slate-100 group-hover:border-slate-800 shadow-2xl">
                                            @if(isset($res['thumbnail']) && $res['thumbnail'])
                                                <img src="{{ asset($res['thumbnail']) }}" alt="{{ $res['title'] }}" 
                                                     class="w-full h-full object-cover grayscale group-hover:grayscale-0 scale-105 group-hover:scale-110 transition-all duration-[2000ms]">
                                            @else
                                                <div class="w-full h-full flex flex-col items-center justify-center gap-6">
                                                    <i class="fa-solid fa-file-pdf text-7xl text-brand-primary/10 group-hover:text-brand-primary transition-all duration-700"></i>
                                                    <span class="text-[9px] font-black text-slate-700 uppercase tracking-[0.4em] italic">Node Preview</span>
                                                </div>
                                            @endif
                                            <div class="absolute inset-0 bg-slate-950/80 opacity-0 group-hover:opacity-100 transition-all duration-1000 flex items-center justify-center backdrop-blur-md">
                                                <span class="bg-brand-primary text-white px-8 py-4 rounded-full text-[10px] font-black uppercase tracking-widest italic shadow-2xl hover:bg-white hover:text-slate-950 transition-all duration-500">
                                                    Acquire Data <i class="fa-solid fa-up-right-from-square ml-3"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="p-10 flex-1 flex flex-col justify-between">
                                            <h5 class="text-xs font-black text-slate-900 group-hover:text-white uppercase tracking-widest leading-tight transition-colors italic">
                                                {{ $res['title'] }}
                                            </h5>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Venue Node -->
                    @if(isset($event->builder_content['venue']['name']) && $event->builder_content['venue']['name'])
                        <div id="venue" class="scroll-mt-40 bg-slate-950 rounded-[4rem] overflow-hidden shadow-2xl animate-on-scroll group/venue relative border border-slate-900">
                            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
                            <div class="grid grid-cols-1 md:grid-cols-2 relative z-10">
                                <div class="p-16 md:p-24 flex flex-col justify-center space-y-12">
                                    <div class="w-20 h-20 bg-brand-primary/10 rounded-[2rem] flex items-center justify-center text-brand-primary text-4xl shadow-2xl border border-brand-primary/20">
                                        <i class="fa-solid fa-map-location-dot"></i>
                                    </div>
                                    <div class="space-y-6">
                                        <h2 class="text-4xl md:text-6xl font-black text-white uppercase italic tracking-tighter leading-none">The <span class="text-brand-primary not-italic">Venue.</span></h2>
                                        <div class="space-y-2">
                                            <h4 class="text-2xl font-black text-white uppercase italic tracking-tighter leading-tight">{{ $event->builder_content['venue']['name'] }}</h4>
                                            <p class="text-slate-400 font-medium italic text-xl leading-relaxed border-l-4 border-brand-primary/20 pl-10">{{ $event->builder_content['venue']['address'] }}</p>
                                        </div>
                                    </div>

                                    <a href="https://maps.google.com/?q={{ urlencode($event->builder_content['venue']['address']) }}" target="_blank" 
                                       class="group/map inline-flex items-center gap-8 text-brand-primary font-black text-[10px] uppercase tracking-[0.5em] italic hover:text-white transition-all duration-700">
                                        Navigate Node <i class="fa-solid fa-arrow-right-long group-hover/map:translate-x-6 transition-transform"></i>
                                    </a>
                                </div>
                                <div class="relative min-h-[500px] border-l border-white/5 bg-slate-900">
                                     @if(isset($event->builder_content['venue']['image']) && $event->builder_content['venue']['image'])
                                        <img src="{{ asset($event->builder_content['venue']['image']) }}" 
                                             class="w-full h-full object-cover grayscale group-hover/venue:grayscale-0 scale-105 group-hover/venue:scale-110 transition-all duration-[3000ms]">
                                     @else
                                        <div class="w-full h-full flex items-center justify-center bg-slate-900">
                                            <i class="fa-solid fa-building-columns text-9xl text-white/5"></i>
                                        </div>
                                     @endif
                                     <div class="absolute inset-0 bg-slate-950/40 group-hover/venue:bg-transparent transition-all duration-1000"></div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Synergy Grid -->
                    @if(isset($event->builder_content['partners']) && count($event->builder_content['partners']) > 0)
                        <div id="partners" class="scroll-mt-40 p-12 md:p-24 rounded-[4rem] bg-white border border-slate-100 shadow-2xl animate-on-scroll overflow-hidden">
                            <div class="text-center mb-20">
                                <h2 class="text-4xl md:text-6xl font-black text-slate-900 mb-6 uppercase italic tracking-tighter leading-none">Synergy <span class="text-brand-primary">Grid.</span></h2>
                                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.5em] italic">Architected by global industry leaders</p>
                            </div>

                            <div class="relative">
                                <div class="flex gap-8 items-center animate-logo-slide whitespace-nowrap">
                                    @php 
                                        $slidingPartners = array_merge($event->builder_content['partners'], $event->builder_content['partners'], $event->builder_content['partners']); 
                                    @endphp

                                    @foreach($slidingPartners as $partner)
                                        <div class="flex-none bg-slate-50 rounded-[2.5rem] p-10 border border-slate-100 flex flex-col items-center justify-center h-52 w-72 group hover:bg-slate-950 transition-all duration-700 shadow-xl">
                                            <img src="{{ asset($partner['logo']) }}" alt="{{ $partner['name'] }}" 
                                                 class="max-h-20 max-w-full object-contain grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700">
                                            @if(isset($partner['name']) && $partner['name'])
                                                <p class="mt-6 text-[9px] font-black text-slate-400 uppercase tracking-widest italic text-center group-hover:text-brand-primary transition-colors">{{ $partner['name'] }}</p>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Final CTA Node -->
                    @if(isset($event->builder_content['cta']['form_url']) && $event->builder_content['cta']['form_url'])
                        <div id="cta" class="scroll-mt-40 bg-slate-950 rounded-[4rem] p-16 md:p-32 text-center animate-on-scroll relative overflow-hidden group shadow-2xl border border-slate-900">
                            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:50px_50px]"></div>
                            
                            <div class="relative z-10 max-w-5xl mx-auto space-y-16">
                                <div class="space-y-8">
                                    <h2 class="text-5xl md:text-9xl font-black text-white uppercase italic tracking-tighter leading-[0.85] animate-pulse">
                                        {{ $event->builder_content['cta']['heading'] ?? 'Architect Your Excellence Node.' }}
                                    </h2>
                                    <p class="text-slate-400 font-medium italic text-2xl leading-relaxed max-w-3xl mx-auto border-l-4 border-r-4 border-white/10 px-12">
                                        {{ $event->builder_content['cta']['description'] ?? 'Join the global industrial transition. Submit your intelligence node and secure your summit pass today.' }}
                                    </p>
                                </div>

                                <a href="{{ $event->builder_content['cta']['form_url'] }}" 
                                   class="inline-flex items-center justify-center w-full sm:w-auto gap-8 bg-brand-primary text-white hover:bg-white hover:text-slate-950 px-24 py-10 rounded-full font-black text-[11px] uppercase tracking-[0.5em] italic shadow-2xl transition-all duration-1000 group/final-btn">
                                    {{ $event->builder_content['cta']['btn_text'] ?: 'Register Node Now' }} <i class="fa-solid fa-arrow-right-long group-hover/final-btn:translate-x-6 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    @endif

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
@endsection
