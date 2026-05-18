@extends('layouts.website')

@section('title', 'Global Industry Sectors - World Grexpo Foundation')

@section('content')

    <!-- Clean Hero -->
    <section class="relative pt-48 pb-24 bg-slate-950 overflow-hidden">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950/80 via-slate-950 to-slate-950"></div>
        
        <div class="container relative z-10">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-3 mb-6 px-4 py-1.5 bg-brand-primary/10 border border-brand-primary/20 rounded-full">
                    <span class="w-2 h-2 bg-brand-primary rounded-full animate-pulse"></span>
                    <span class="text-brand-primary text-xs font-bold tracking-wider uppercase">Industry Hub</span>
                </div>
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                    Global Industry <br>
                    <span class="text-brand-primary">Sectors.</span>
                </h1>
                <p class="text-lg md:text-xl text-slate-400 leading-relaxed max-w-2xl">
                    Explore the economic engines architecting our global sustainability network through innovation and industrial excellence.
                </p>
            </div>
        </div>
    </section>

    <!-- Sectors Grid -->
    <section class="py-20 bg-white">
        <div class="container"> 
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @forelse(config('sectors.sectors') as $sector)
                    <a href="{{ route('sectors.show', $sector['slug']) }}" 
                        class="group relative bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col h-full">
                        
                        <!-- Thumbnail -->
                        <div class="aspect-video overflow-hidden bg-slate-100">
                            <img src="{{ $sector['thumbnail'] ? asset($sector['thumbnail']) : asset('images/sectors/textile.png') }}" 
                                alt="{{ $sector['title'] }}" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                        </div>

                        <!-- Content -->
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-xl font-bold text-slate-900 group-hover:text-brand-primary transition-colors mb-3">
                                {{ $sector['title'] }}
                            </h3>
                            
                            <p class="text-sm text-slate-500 leading-relaxed mb-6 flex-grow">
                                {{ Str::limit($sector['description'], 100) }}
                            </p>

                            <div class="inline-flex items-center gap-2 text-brand-primary font-bold text-xs uppercase tracking-wider group-hover:gap-4 transition-all">
                                Explore Sector <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full py-32 text-center bg-slate-50 rounded-2xl border-2 border-dashed border-slate-200">
                        <p class="text-slate-400 font-medium">No active industrial nodes published yet.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

@endsection


