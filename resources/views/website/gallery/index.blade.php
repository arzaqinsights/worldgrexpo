@extends('layouts.website')

@section('title', 'Media Gallery | World Grexpo Foundation')

@section('content')

    <!-- HERO -->
    <section class="relative pt-48 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
        </div>

        <div class="container relative z-10 text-left">
            <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Visual Archives</span>
            </div>
            <h1 class="text-6xl md:text-8xl font-black uppercase mb-8 tracking-tighter italic leading-[0.85]">
                Media <span class="text-brand-accent not-italic">Gallery</span>
            </h1>
            <p class="text-2xl text-slate-400 max-w-4xl leading-tight font-light italic border-l-2 border-slate-800 pl-8">
                Explore memories, institutional summits, and industrial highlights from the World Grexpo ecosystem.
            </p>
        </div>
    </section>

    <!-- ALBUMS -->
    <section class="py-32 bg-white min-h-[50vh] relative">
        <div class="container">
            @if($categories->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                    @foreach($categories as $category)
                        <a href="{{ route('gallery.show', base64_encode($category->category)) }}" class="group block relative rounded-sm overflow-hidden shadow-sm hover:shadow-4xl transition-all duration-700 bg-slate-950 border border-slate-900">
                            <div class="aspect-[4/5] w-full relative overflow-hidden bg-slate-900">
                                <img src="{{ asset($category->cover) }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-[2000ms]" alt="{{ $category->category }}">
                                <div class="absolute inset-0 bg-slate-950/40 group-hover:bg-slate-950/10 transition-all duration-700"></div>
                                
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-700 z-20">
                                    <div class="w-20 h-20 bg-brand-accent rounded-sm flex items-center justify-center text-slate-950 shadow-2xl scale-50 group-hover:scale-100 transition-all duration-700">
                                        <i class="fa-solid fa-eye text-2xl"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full p-10 z-10">
                                <h4 class="text-white font-black text-2xl mb-4 uppercase italic tracking-tighter drop-shadow-2xl group-hover:text-brand-accent transition-colors leading-none">{{ $category->category }}</h4>
                                <div class="inline-flex items-center gap-4 px-4 py-2 bg-white/5 border border-white/10 rounded-sm text-brand-accent text-[10px] font-black uppercase tracking-[0.3em] backdrop-blur-md">
                                    <i class="fa-regular fa-images"></i> {{ $category->image_count }} Nodes
                                </div>
                            </div>
                            <div class="absolute top-0 left-0 w-0 h-1 bg-brand-accent group-hover:w-full transition-all duration-700"></div>
                        </a>
                    @endforeach
                </div>
            @else
                <div class="bg-slate-50 rounded-sm p-32 text-center border border-slate-100 max-w-4xl mx-auto">
                    <i class="fa-regular fa-folder-open text-9xl text-slate-200 mb-10 block"></i>
                    <h3 class="text-3xl font-black text-slate-400 uppercase italic tracking-widest">No Institutional Archives Available</h3>
                    <p class="text-slate-400 font-light italic mt-4">We are currently gathering our absolute industrial moments. Check back soon for visual intelligence.</p>
                </div>
            @endif
        </div>
    </section>

@endsection
