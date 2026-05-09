@extends('layouts.website')

@section('title', 'Core Leadership | World Grexpo Foundation')

@section('content')
    <!-- Hero Banner -->
    <section class="relative pt-48 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
        </div>
        <div class="container relative z-10 text-left animate-on-scroll">
            <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Governance Node</span>
            </div>
            <h1 class="text-6xl md:text-8xl font-black text-white tracking-tighter uppercase italic leading-none">Board of <span class="text-brand-accent not-italic">Directors</span></h1>
            <p class="text-slate-400 mt-8 text-2xl font-light max-w-2xl leading-relaxed italic border-l-2 border-slate-800 pl-8">
                The absolute core of our industrial mission, architecting the future of global node sustainability.
            </p>
        </div>
    </section>

    <!-- Inclusion of our leadership partial -->
    @include('website.about.partials.leadership')

    <!-- Additional Content specific for Leadership Page -->
    <section class="py-32 bg-white relative overflow-hidden">
        <div class="container animate-on-scroll">
            <div class="bg-slate-950 border-l-[20px] border-brand-accent p-16 lg:p-24 rounded-sm text-left relative group">
                <div class="absolute inset-0 z-0">
                    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:30px_30px]"></div>
                </div>
                <div class="relative z-10">
                    <h3 class="text-5xl md:text-7xl font-black text-white mb-10 tracking-tighter uppercase italic leading-none">Architect Your <br> <span class="text-brand-accent">Industrial Future</span></h3>
                    <p class="text-slate-400 max-w-4xl mb-16 text-2xl font-light leading-relaxed italic">
                        Our Leadership node is passionately committed to nurturing an ecosystem where industrial units can thrive globally. If you share our vision, we encourage you to acquire a membership node and transition with us.
                    </p>
                    <a href="{{ route('register') }}" class="inline-flex items-center gap-6 px-16 py-8 bg-white text-slate-950 font-black uppercase tracking-[0.3em] text-xs rounded-sm hover:bg-brand-accent hover:text-slate-950 transition-all duration-700 shadow-4xl italic group">
                        Acquire Institutional Membership <i class="fa-solid fa-arrow-right ml-4 group-hover:translate-x-4 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
