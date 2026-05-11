@extends('layouts.website')

@section('title', 'Core Leadership | World Grexpo Foundation')

@section('content')
    <!-- Sharp Industrial Hero -->
    <section class="relative pt-64 pb-32 bg-slate-900 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 opacity-10 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
        </div>
        <div class="container relative z-10">
            <div class="max-w-4xl space-y-10">
                <div class="section-heading">
                    <span class="subtitle !text-brand-accent">Governance Node</span>
                    <h1 class="text-white">Board of <span class="text-brand-primary">Directors.</span></h1>
                    <div class="accent-line !bg-brand-accent"></div>
                </div>
                
                <p class="text-2xl text-slate-300 max-w-3xl leading-relaxed font-medium italic">
                    The absolute core of our industrial mission, architecting the future of global node sustainability through distinguished governance.
                </p>
            </div>
        </div>
    </section>

    <!-- Leadership Grid Partial -->
    @include('website.about.partials.leadership')

    <!-- Sharp CTA Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="container">
            <div class="bg-slate-950 p-12 lg:p-24 relative group border border-slate-800">
                <!-- Industrial Pattern -->
                <div class="absolute inset-0 z-0 opacity-10">
                    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:30px_30px]"></div>
                </div>
                
                <div class="relative z-10 space-y-12">
                    <div class="space-y-6">
                        <div class="flex items-center gap-4">
                            <span class="w-12 h-1 bg-brand-accent"></span>
                            <span class="text-white text-[10px] font-black tracking-[0.3em] uppercase">Membership Node</span>
                        </div>
                        <h3 class="text-5xl md:text-7xl font-black text-white tracking-tighter uppercase leading-none">Architect Your <br> <span class="text-brand-accent">Industrial Future.</span></h3>
                        <p class="text-slate-400 max-w-3xl text-xl font-medium leading-relaxed">
                            Our Leadership node is passionately committed to nurturing an ecosystem where industrial units can thrive globally. If you share our vision, join our institutional network today.
                        </p>
                    </div>
                    
                    <a href="{{ route('register') }}" class="btn-sharp bg-white text-slate-900 hover:bg-brand-accent">
                        Acquire Institutional Membership <i class="fa-solid fa-arrow-right-long ml-4 group-hover:translate-x-3 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection

