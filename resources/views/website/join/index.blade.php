@extends('layouts.website')

@section('title', 'Institutional Onboarding | World Grexpo Foundation')

@section('content')
<!-- Hero Section -->
<section class="relative pt-48 pb-24 bg-slate-950 text-white overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
    </div>
    <div class="container relative z-10 text-left">
        <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
            <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Institutional Activation</span>
        </div>
        <h1 class="text-6xl md:text-8xl font-black text-white mb-8 tracking-tighter uppercase italic leading-[0.85]">Join the <br> <span class="text-brand-accent not-italic">Movement Node</span></h1>
        <p class="text-2xl text-slate-400 font-light italic max-w-4xl leading-relaxed border-l-2 border-slate-800 pl-8">
            Select the appropriate industrial portal below to begin your transition journey with World Grexpo. We empower industrial nodes through strategic global synergy.
        </p>
    </div>
</section>

<!-- Forms Grid -->
<section class="py-32 bg-white relative">
    <div class="container relative z-10">
        @php
            $forms = \App\Models\Form::where('status', 'published')->where('is_hidden', false)->get();
        @endphp

        @if($forms->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                @foreach($forms as $form)
                    <div class="group bg-slate-50 border border-slate-100 rounded-sm overflow-hidden hover:bg-slate-950 transition-all duration-700 flex flex-col h-full relative shadow-sm">
                        <div class="absolute top-0 left-0 w-0 h-1 bg-brand-accent group-hover:w-full transition-all duration-700 z-30"></div>
                        
                        <!-- Image Wrapper -->
                        <div class="relative h-72 overflow-hidden border-b border-slate-100 group-hover:border-slate-800 transition-colors">
                            @if($form->thumbnail)
                                <img src="{{ asset($form->thumbnail) }}" alt="{{ $form->name }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-[2000ms]">
                            @else
                                <div class="w-full h-full bg-slate-900 flex items-center justify-center text-slate-700">
                                    <i class="fa-solid fa-file-signature text-7xl"></i>
                                </div>
                            @endif
                            <!-- Badge -->
                            <div class="absolute top-8 right-8 px-4 py-2 bg-slate-950/80 backdrop-blur-md text-brand-accent text-[8px] font-black uppercase tracking-[0.3em] border border-white/10 rounded-sm italic">
                                Live Activation
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-12 flex flex-col flex-grow">
                            <h3 class="text-2xl font-black text-slate-950 mb-6 uppercase italic tracking-tighter group-hover:text-white transition-colors leading-tight">
                                {{ $form->name }}
                            </h3>
                            <p class="text-slate-500 text-[10px] font-black uppercase tracking-widest leading-loose mb-10 flex-grow group-hover:text-slate-400 transition-colors italic">
                                {{ Str::limit(strip_tags($form->description), 140) }}
                            </p>
                            
                            <div class="pt-8 border-t border-slate-200 group-hover:border-white/10 transition-colors">
                                <a href="{{ route('join.forms.show', $form->slug) }}" 
                                   class="inline-flex items-center gap-4 text-slate-950 group-hover:text-brand-accent font-black text-[10px] uppercase tracking-[0.4em] italic transition-all group/btn">
                                    Open Portal Node <i class="fa-solid fa-arrow-right-long group-hover/btn:translate-x-4 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-32 bg-slate-50 border border-slate-100 rounded-sm">
                <i class="fa-solid fa-hourglass-start text-9xl text-slate-200 mb-10 block"></i>
                <h3 class="text-3xl font-black text-slate-400 uppercase italic tracking-widest leading-none">No Active Institutional Portals Found</h3>
                <p class="text-slate-400 font-light italic mt-4">Check back soon for new summits, awards, and membership activation nodes.</p>
            </div>
        @endif
    </div>
</section>
@endsection
