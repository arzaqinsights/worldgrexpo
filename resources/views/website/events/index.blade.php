@extends('layouts.website')

@section('title', 'Global Summits & Business Events | World Grexpo Foundation')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        </div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-1/2 bg-brand-accent opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 space-y-12">
            <div class="max-w-4xl space-y-8 animate-on-scroll">
                <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 backdrop-blur-md">
                    <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
                    <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Intelligence Calendar</span>
                </div>
                <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                    Global <br> <span class="text-brand-primary">Summits.</span>
                </h1>
                <p class="text-2xl text-slate-400 font-medium max-w-2xl border-l-4 border-brand-primary pl-10 leading-relaxed">
                    Strategic industrial nodes designed to facilitate global synergy and absolute growth acceleration.
                </p>
            </div>
        </div>
    </section>

    <!-- Events Interface -->
    <section class="section-padding bg-white relative overflow-hidden">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1 bg-slate-200 border border-slate-200 shadow-2xl">
                @forelse($events as $event)
                    <article class="group bg-white overflow-hidden transition-all duration-1000 flex flex-col h-full relative animate-on-scroll">
                        
                        <!-- Media Node (Sharp) -->
                        <div class="relative aspect-[4/3] overflow-hidden shrink-0 bg-slate-900">
                            <img src="{{ $event->image ? asset($event->image) : asset('images/event-placeholder.jpg') }}"
                                 alt="{{ $event->title }}"
                                 class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-[2000ms] opacity-80 group-hover:opacity-100">
                            
                            <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                            
                            <!-- Status Tag (Sharp) -->
                            <div class="absolute top-0 left-0 z-20">
                                <span class="px-8 py-3 bg-brand-primary text-brand-primary-dark text-[10px] font-black uppercase tracking-[0.2em] shadow-2xl">
                                    {{ $event->design_style === 'featured' ? 'Priority Node' : 'Institutional Node' }}
                                </span>
                            </div>
                        </div>

                        <!-- Content Node (Sharp) -->
                        <div class="p-12 flex flex-col grow space-y-12 bg-white group-hover:bg-slate-50 transition-colors">
                            <div class="grow space-y-6">
                                <a href="{{ route('events.show', $event->slug) }}" class="block">
                                    <h3 class="text-3xl font-black text-slate-900 leading-[0.9] uppercase tracking-tighter group-hover:text-brand-primary transition-colors line-clamp-2">
                                        {{ $event->title }}
                                    </h3>
                                </a>
                                @if($event->short_description)
                                    <p class="text-slate-500 text-[11px] font-bold uppercase tracking-widest leading-relaxed line-clamp-3">
                                        {{ $event->short_description }}
                                    </p>
                                @endif
                            </div>

                            <!-- Meta Grid (Sharp) -->
                            <div class="grid grid-cols-1 gap-px bg-slate-100 border border-slate-100">
                                <div class="flex items-center gap-6 p-6 bg-white group-hover:bg-slate-50 transition-all">
                                    <div class="w-12 h-12 bg-slate-50 border border-slate-100 flex items-center justify-center text-brand-primary shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-all">
                                        <i class="fa-regular fa-calendar-check text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="text-[8px] font-black text-slate-400 uppercase tracking-[0.3em] leading-none mb-2">Schedule</p>
                                        <p class="text-[11px] font-black text-slate-900 uppercase tracking-widest tabular-nums">
                                            @if($event->end_date)
                                                {{ $event->event_date->format('d') }} - {{ $event->end_date->format('d M, Y') }}
                                            @else
                                                {{ $event->event_date->format('d M, Y') }}
                                            @endif
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-center gap-6 p-6 bg-white group-hover:bg-slate-50 transition-all">
                                    <div class="w-12 h-12 bg-slate-50 border border-slate-100 flex items-center justify-center text-brand-primary shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-all">
                                        <i class="fa-solid fa-location-dot text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="text-[8px] font-black text-slate-400 uppercase tracking-[0.3em] leading-none mb-2">Location</p>
                                        <p class="text-[11px] font-black text-slate-900 uppercase tracking-widest"> 
                                            {{ $event->location ?: 'Global Node' }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- CTA Node (Sharp) -->
                            <div class="pt-4">
                                <a href="{{ route('events.show', $event->slug) }}"
                                   class="btn-sharp w-full group/btn text-center">
                                    Acquire Pass <i class="fa-solid fa-arrow-right-long ml-4 group-hover/btn:translate-x-3 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Sharp Hover Accent -->
                        <div class="absolute bottom-0 left-0 w-0 h-1 bg-brand-primary group-hover:w-full transition-all duration-700"></div>
                    </article>
                @empty
                    <div class="col-span-full py-48 text-center bg-slate-50 border border-slate-100">
                        <div class="w-32 h-32 bg-white border border-slate-200 flex items-center justify-center text-slate-200 text-5xl mx-auto mb-10 shadow-xl">
                            <i class="fa-solid fa-calendar-circle-exclamation"></i>
                        </div>
                        <h3 class="text-4xl font-black text-slate-400 uppercase tracking-tighter leading-none">No Upcoming Event Nodes</h3>
                    </div>
                @endforelse
            </div>

            @if($events->hasPages())
                <div class="mt-24">
                    {{ $events->links() }}
                </div>
            @endif
        </div>
    </section>

@endsection

