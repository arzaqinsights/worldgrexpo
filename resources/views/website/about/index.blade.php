@extends('layouts.website')

@section('title', 'Institutional Architecture | World Grexpo Foundation')

@section('content')
    <!-- Combined About View to ensure design parity -->
    
    <!-- Hero Section -->
    <section class="relative pt-64 pb-32 bg-slate-950 text-white overflow-hidden border-b border-slate-900">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
            <div class="absolute inset-0 opacity-10 grayscale mix-blend-overlay" style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center;"></div>
        </div>

        <div class="container relative z-10 text-left animate-on-scroll">
            <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Institutional Architecture</span>
            </div>
            
            <h1 class="text-6xl md:text-8xl font-black text-white mb-8 tracking-tighter uppercase italic leading-[0.85]">
                About <br> <span class="text-brand-accent not-italic">World Grexpo</span>
            </h1>
            
            <p class="text-2xl text-slate-400 font-light italic max-w-4xl leading-relaxed border-l-2 border-slate-800 pl-8">
                Architecting the global industrial transition through robust networking, strategic advocacy, and unparalleled cross-border intelligence nodes.
            </p>
        </div>
    </section>

    <!-- Content Sections -->
    <div class="bg-white">
        @include('website.about.partials.who_we_are')
        @include('website.about.partials.mission_vision')
        @include('website.about.partials.core_values')
        @include('website.about.partials.leadership')
    </div>

@endsection
