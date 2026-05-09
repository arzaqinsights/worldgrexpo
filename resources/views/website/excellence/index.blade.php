@extends('layouts.website')

@section('title', 'Wall of Excellence - World Grexpo Foundation Recognitions')

@section('content')
<!-- Hero Section -->
<section class="relative pt-48 pb-24 bg-slate-950 text-white overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
    </div>
    
    <div class="container relative z-10 text-left">
        <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
            <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Institutional Honor</span>
        </div>
        <h1 class="text-6xl md:text-8xl font-black text-white mb-8 tracking-tighter uppercase italic leading-[0.85]">
            Wall of <span class="text-brand-accent not-italic">Excellence</span>
        </h1>
        <p class="text-2xl text-slate-400 max-w-4xl leading-tight font-light italic border-l-2 border-slate-800 pl-8">
            Celebrating the honors, appreciations, and institutional recognitions architected for World Grexpo Foundation by global leaders.
        </p>
    </div>
</section>

<!-- Awards Grid -->
<section class="py-32 bg-white relative">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
            @forelse($awards as $award)
            <div class="group flex flex-col bg-slate-50 border border-slate-100 rounded-sm p-8 hover:bg-slate-950 transition-all duration-700 shadow-sm relative overflow-hidden">
                <div class="absolute top-0 right-0 p-8 opacity-5 group-hover:opacity-10 transition-opacity">
                    <i class="fa-solid fa-medal text-9xl"></i>
                </div>
                
                <!-- Image Wrapper -->
                <div class="relative overflow-hidden aspect-[3/4] mb-10 border border-slate-200 group-hover:border-slate-800 rounded-sm">
                    <img src="{{ asset($award->award_image) }}" alt="{{ $award->title }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-[2000ms]">
                    
                    <!-- Overlay Info -->
                    <div class="absolute inset-0 bg-slate-950/80 p-10 flex flex-col justify-end opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                        <p class="text-white text-[10px] font-black uppercase tracking-[0.2em] leading-relaxed italic">
                            {{ Str::limit($award->description, 150) }}
                        </p>
                    </div>
                </div>

                <!-- Content -->
                <div class="flex flex-col flex-1">
                    <h3 class="text-2xl font-black text-slate-950 mb-8 uppercase italic tracking-tighter group-hover:text-white transition-colors leading-tight">
                        {{ $award->title }}
                    </h3>

                    <!-- Giver Info & PDF -->
                    <div class="mt-auto space-y-4">
                        @if($award->pdf_path)
                        <a href="{{ asset($award->pdf_path) }}" target="_blank" class="flex items-center justify-center gap-4 w-full py-6 bg-slate-950 text-white font-black text-[10px] uppercase tracking-[0.3em] italic rounded-sm border border-white/10 hover:bg-brand-accent hover:text-slate-950 transition-all duration-700 group/btn">
                            <i class="fa-solid fa-file-pdf group-hover/btn:scale-125 transition-transform"></i> View Institutional Node
                        </a>
                        @endif
                        
                        <div class="flex items-center gap-6 p-6 bg-white border border-slate-200 rounded-sm group-hover:bg-white/5 group-hover:border-white/10 transition-all">
                            @if($award->giver_image)
                            <img src="{{ asset($award->giver_image) }}" class="w-16 h-16 grayscale group-hover:grayscale-0 object-cover rounded-sm border border-slate-100 group-hover:border-slate-800">
                            @else
                            <div class="w-16 h-16 rounded-sm bg-slate-100 flex items-center justify-center text-slate-300 border border-slate-200 group-hover:bg-white/5 group-hover:border-white/10">
                                <i class="fa-solid fa-user text-xl"></i>
                            </div>
                            @endif
                            <div>
                                <p class="text-[10px] font-black text-slate-950 uppercase tracking-[0.2em] leading-none mb-2 group-hover:text-white transition-colors">{{ $award->giver_name }}</p>
                                <p class="text-[9px] font-black text-slate-400 uppercase tracking-[0.3em] group-hover:text-brand-accent transition-colors">{{ $award->giver_designation }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute top-0 left-0 w-0 h-1 bg-brand-accent group-hover:w-full transition-all duration-700"></div>
            </div>
            @empty
            <div class="col-span-full py-32 text-center bg-slate-50 border border-slate-100 rounded-sm">
                <i class="fa-solid fa-medal text-8xl text-slate-200 mb-8"></i>
                <h3 class="text-2xl font-black text-slate-400 uppercase tracking-widest italic">Global Recognition Nodes are Being Authenticated</h3>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-20">
            {{ $awards->links() }}
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-32 bg-slate-950 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:30px_30px]"></div>
    </div>
    <div class="container relative z-10 text-center">
        <h2 class="text-5xl md:text-7xl font-black text-white mb-16 uppercase italic tracking-tighter">Part of a <span class="text-brand-accent not-italic">Global Node</span></h2>
        <a href="{{ route('register') }}" class="inline-flex items-center gap-6 px-16 py-8 bg-white text-slate-950 font-black uppercase tracking-[0.3em] text-xs rounded-sm hover:bg-brand-accent transition-all duration-700 shadow-4xl italic group">
            Acquire Institutional Node <i class="fa-solid fa-arrow-right group-hover:translate-x-4 transition-transform ml-4"></i>
        </a>
    </div>
</section>
@endsection
