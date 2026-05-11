@extends('layouts.website')

@section('title', 'Media Gallery | World Grexpo Foundation')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        </div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-brand-primary opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 backdrop-blur-md">
                <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Visual Archives</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Media <br>
                <span class="text-brand-primary">Gallery.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-3xl mx-auto leading-relaxed font-medium">
                Explore institutional summits, industrial highlights, and memories from the global World Grexpo ecosystem.
            </p>
        </div>
    </section>

    <!-- Album Archives -->
    <section class="py-32 bg-white relative">
        <div class="container">
            @if($categories->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-2xl">
                    @foreach($categories as $category)
                        <a href="{{ route('gallery.show', base64_encode($category->category)) }}" 
                            class="group relative block bg-slate-950 overflow-hidden transition-all duration-700 hover:-translate-y-4 shadow-3xl">
                            
                            <!-- Media Node -->
                            <div class="aspect-[4/5] w-full relative overflow-hidden">
                                <img src="{{ asset($category->cover) }}" 
                                    class="w-full h-full object-cover transition-all duration-[3000ms] group-hover:scale-110 grayscale group-hover:grayscale-0 opacity-80 group-hover:opacity-100" 
                                    alt="{{ $category->category }}">
                                
                                <!-- Industrial Overlays -->
                                <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/40 to-transparent opacity-90 group-hover:opacity-60 transition-opacity"></div>
                                
                                <!-- Expansion Indicator -->
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-700">
                                    <div class="w-20 h-20 bg-white/5 backdrop-blur-xl border border-white/20 flex items-center justify-center text-white text-3xl translate-y-12 group-hover:translate-y-0 transition-all">
                                        <i class="fa-solid fa-expand"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Content Overlay -->
                            <div class="absolute bottom-0 left-0 right-0 p-12 space-y-8">
                                <div class="space-y-4">
                                    <h4 class="text-4xl font-black text-white uppercase tracking-tighter leading-none group-hover:text-brand-primary transition-colors">
                                        {{ $category->category }}
                                    </h4>
                                    <div class="flex items-center gap-6">
                                        <div class="h-1 w-12 bg-brand-primary transition-all group-hover:w-24"></div>
                                        <span class="text-[10px] font-black text-white/60 uppercase tracking-[0.3em]">Visual Archive</span>
                                    </div>
                                </div>
                                
                                <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 backdrop-blur-md text-brand-primary text-[10px] font-black uppercase tracking-[0.3em]">
                                    <i class="fa-regular fa-images"></i> 
                                    {{ $category->image_count }} Nodes
                                </div>
                            </div>

                            <!-- Industrial Top Border -->
                            <div class="absolute top-0 left-0 w-full h-2 bg-brand-primary scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-700 z-30"></div>
                        </a>
                    @endforeach
                </div>
            @else
                <div class="max-w-4xl mx-auto p-24 bg-slate-50 border border-slate-100 shadow-3xl text-center space-y-12 relative">
                    <div class="absolute top-0 left-0 w-2 h-full bg-brand-primary"></div>
                    <div class="w-32 h-32 bg-white border border-slate-100 mx-auto flex items-center justify-center text-slate-200 text-5xl shadow-xl">
                        <i class="fa-regular fa-folder-open"></i>
                    </div>
                    <div class="space-y-6">
                        <h3 class="text-5xl font-black text-slate-950 uppercase tracking-tighter">Archives <span class="text-brand-primary">Gathering.</span></h3>
                        <p class="text-2xl text-slate-500 font-medium leading-relaxed italic max-w-2xl mx-auto">
                            We are currently gathering our absolute industrial moments and summit captures. Check back soon for institutional visual intelligence.
                        </p>
                    </div>
                </div>
            @endif
        </div>
    </section>

@endsection

@endsection

@endsection

@endsection
