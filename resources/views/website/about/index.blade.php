@extends('layouts.website')

@section('title', 'Institutional Architecture | World Grexpo Foundation')

@section('content')
    <!-- Combined About View to ensure design parity -->
    
    <!-- Premium Hero Section -->
    <section class="relative pt-48 pb-32 bg-slate-950 overflow-hidden">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
            <div class="absolute inset-0 opacity-10 grayscale mix-blend-overlay" style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center;"></div>
        </div>
        
        <!-- Animated Decorators -->
        <div class="absolute top-1/4 right-0 w-[600px] h-[600px] bg-brand-primary/10 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand-accent/5 rounded-full blur-[100px]"></div>

        <div class="container relative z-10 text-center space-y-8 animate-on-scroll">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 backdrop-blur-md text-brand-accent text-[10px] font-black uppercase tracking-[0.3em]">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-pulse"></span>
                Institutional Architecture
            </div>
            <h1 class="text-6xl md:text-8xl font-black text-white leading-[0.9] tracking-tighter uppercase">
                About <br>
                <span class="text-brand-primary italic">World Grexpo.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-3xl mx-auto leading-relaxed font-medium">
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
