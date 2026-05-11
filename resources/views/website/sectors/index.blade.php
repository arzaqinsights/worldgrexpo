@extends('layouts.website')

@section('title', 'Global Industry Sectors - World Grexpo Foundation')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-10">
            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-brand-primary opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Industrial Infrastructure Hub</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Global <br>
                <span class="text-brand-primary">Sectors.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-brand-primary pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Explore the absolute economic engines architecting our global sustainability network.
            </p>
        </div>
    </section>

    <!-- Content Interface -->
    <section class="py-32 bg-white relative">
        <div class="container"> 
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                @forelse(config('sectors.sectors') as $sector)
                    <a href="{{ route('sectors.show', $sector['slug']) }}" 
                        class="group relative bg-white aspect-square overflow-hidden flex flex-col justify-end p-10 hover:bg-slate-950 transition-all duration-700">
                        
                        <!-- Visual Backdrop -->
                        <div class="absolute inset-0 z-0">
                            <img src="{{ $sector['thumbnail'] ? asset($sector['thumbnail']) : asset('images/sectors/textile.png') }}" 
                                alt="{{ $sector['title'] }}" 
                                class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-[2000ms] opacity-20 group-hover:opacity-40">
                            <div class="absolute inset-0 bg-linear-to-t from-white via-white/80 to-transparent group-hover:from-slate-950 group-hover:via-slate-950/80 transition-all duration-700"></div>
                        </div>

                        <!-- Content -->
                        <div class="relative z-10 space-y-6">
                            <div class="space-y-2">
                                <h3 class="text-2xl font-black text-slate-950 group-hover:text-white uppercase tracking-tighter italic leading-none transition-colors">
                                    {{ $sector['title'] }}
                                </h3>
                                <div class="w-12 h-1 bg-brand-primary group-hover:w-full transition-all duration-500"></div>
                            </div>
                            
                            <p class="text-[10px] font-black text-slate-500 group-hover:text-slate-300 uppercase tracking-widest leading-tight transition-colors">
                                {{ Str::limit($sector['description'], 80) }}
                            </p>

                            <div class="inline-flex items-center gap-4 text-brand-primary font-black text-[9px] tracking-[0.4em] uppercase italic group-hover:text-white transition-all">
                                Access Node <i class="fa-solid fa-arrow-right-long text-xs group-hover:translate-x-4 transition-transform"></i>
                            </div>
                        </div>

                        <!-- Accent Border -->
                        <div class="absolute top-0 left-0 w-0 h-1 bg-brand-primary group-hover:w-full transition-all duration-700"></div>
                    </a>
                @empty
                    <div class="col-span-full py-48 text-center bg-slate-50">
                        <p class="text-[10px] font-black uppercase tracking-[0.5em] text-slate-400 italic">No active industrial nodes published yet.</p>
                    </div>
                @endforelse
            </div>

        </div>
    </section>

@endsection

