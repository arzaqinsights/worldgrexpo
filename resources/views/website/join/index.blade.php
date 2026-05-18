@extends('layouts.website')

@section('title', 'Institutional Onboarding | World Grexpo Foundation')

@section('content')

<!-- Architectural Hero -->
<section class="relative pt-64 pb-32 bg-slate-950 text-white overflow-hidden border-b border-slate-900">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
    </div>
    
    <!-- Industrial Accents -->
    <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary opacity-5 -skew-x-12 translate-x-1/2"></div>

    <div class="container relative z-10 text-left">
        <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 backdrop-blur-md mb-12">
            <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
            <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Institutional Activation</span>
        </div>
        <h1 class="text-6xl md:text-[9rem] font-black text-white mb-12 tracking-tighter uppercase leading-[0.85]">
            Join the <br> <span class="text-brand-primary">Movement.</span>
        </h1>
        <p class="text-2xl text-slate-400 font-medium max-w-4xl leading-relaxed border-l-4 border-brand-primary pl-10">
            Select the appropriate industrial portal below to begin your transition journey with World Grexpo. We empower industrial nodes through strategic global synergy and authoritative leadership.
        </p>
    </div>
</section>

<!-- Forms Interface -->
<section class="py-32 bg-white relative">
    <div class="container relative z-10">
        @php
            $forms = \App\Models\Form::where('status', 'published')->where('is_hidden', false)->get();
        @endphp

        @if($forms->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-2xl">
                @foreach($forms as $form)
                    <div class="group bg-white hover:bg-slate-950 transition-all duration-700 flex flex-col h-full relative">
                        <!-- Top Accent -->
                        <div class="absolute top-0 left-0 w-0 h-1.5 bg-brand-primary group-hover:w-full transition-all duration-700 z-30"></div>
                        
                        <!-- Media Node -->
                        <div class="relative h-80 overflow-hidden bg-slate-900">
                            @if($form->thumbnail)
                                <img src="{{ asset($form->thumbnail) }}" 
                                     alt="{{ $form->name }}" 
                                     class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-[2000ms] opacity-60 group-hover:opacity-100">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-slate-700">
                                    <i class="fa-solid fa-file-signature text-7xl opacity-20"></i>
                                </div>
                            @endif
                            
                            <!-- Status Pin -->
                            <div class="absolute top-10 right-10 px-6 py-2 bg-slate-950/90 backdrop-blur-md text-brand-primary text-[8px] font-black uppercase tracking-[0.4em] border border-white/10">
                                Live Activation
                            </div>
                        </div>

                        <!-- Content Node -->
                        <div class="p-12 flex flex-col flex-grow space-y-8">
                            <h3 class="text-3xl font-black text-slate-950 uppercase tracking-tighter group-hover:text-white transition-colors leading-none">
                                {{ $form->name }}
                            </h3>
                            <p class="text-slate-500 text-[10px] font-black uppercase tracking-[0.3em] leading-relaxed flex-grow group-hover:text-slate-400 transition-colors">
                                {{ Str::limit(strip_tags($form->description), 140) }}
                            </p>
                            
                            <div class="pt-10 border-t border-slate-100 group-hover:border-white/10 transition-colors">
                                <a href="{{ route('join.forms.show', $form->slug) }}" 
                                   class="inline-flex items-center gap-6 text-slate-950 group-hover:text-brand-primary font-black text-[10px] uppercase tracking-[0.4em] transition-all group/btn">
                                    Open Portal Node 
                                    <i class="fa-solid fa-arrow-right-long group-hover/btn:translate-x-4 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-48 bg-slate-50 border border-slate-100 shadow-xl">
                <div class="w-32 h-32 bg-white border border-slate-100 mx-auto flex items-center justify-center mb-12 shadow-2xl">
                    <i class="fa-solid fa-hourglass-start text-5xl text-slate-200"></i>
                </div>
                <h3 class="text-4xl font-black text-slate-950 uppercase tracking-tighter leading-none mb-6">No Active Institutional Portals.</h3>
                <p class="text-slate-500 font-medium max-w-md mx-auto">Check back soon for new summits, awards, and membership activation nodes within the global industrial network.</p>
            </div>
        @endif
    </div>
</section>
@endsection
