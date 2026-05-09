@extends('layouts.website')

@section('title', 'Global Summits & Business Events | World Grexpo Foundation')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-48 pb-32 bg-slate-950 overflow-hidden">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        </div>
        
        <!-- Animated Decorators -->
        <div class="absolute top-1/4 right-0 w-[600px] h-[600px] bg-brand-primary/10 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand-accent/5 rounded-full blur-[100px]"></div>

        <div class="container relative z-10 space-y-12">
            <div class="max-w-4xl space-y-8 animate-on-scroll">
                <div class="inline-flex items-center gap-3 px-5 py-2 bg-white/5 border border-white/10 backdrop-blur-md rounded-full">
                    <div class="w-2 h-2 bg-brand-accent rounded-full animate-ping"></div>
                    <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Intelligence Calendar</span>
                </div>
                <h1 class="text-6xl md:text-9xl font-black text-white leading-[0.85] tracking-tighter uppercase italic">
                    Global <br> <span class="text-brand-primary not-italic">Summits.</span>
                </h1>
                <p class="text-2xl text-slate-400 font-medium italic max-w-2xl border-l-4 border-brand-primary pl-10">
                    Strategic industrial nodes designed to facilitate global synergy and absolute growth acceleration.
                </p>
            </div>
        </div>
    </section>

    <!-- Events Interface -->
    <section class="section-padding bg-white relative overflow-hidden">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @forelse($events as $event)
                    <article class="group bg-white rounded-[3.5rem] border border-slate-100 overflow-hidden shadow-xl hover:shadow-brand-primary/10 transition-all duration-1000 flex flex-col h-full relative animate-on-scroll"
                             style="transition-delay: {{ $loop->index * 100 }}ms">
                        
                        <!-- Media Node -->
                        <div class="relative aspect-[4/3] overflow-hidden shrink-0">
                            <img src="{{ $event->image ? asset($event->image) : asset('images/event-placeholder.jpg') }}"
                                 alt="{{ $event->title }}"
                                 class="w-full h-full object-cover grayscale group-hover:grayscale-0 scale-105 group-hover:scale-110 transition-all duration-[2000ms]">
                            
                            <div class="absolute inset-0 bg-linear-to-t from-slate-950/80 via-transparent to-transparent opacity-60 group-hover:opacity-20 transition-opacity"></div>
                            
                            <!-- Status Tag -->
                            <div class="absolute top-8 left-8 z-20">
                                <span class="px-6 py-2 bg-brand-primary text-white text-[9px] font-black uppercase tracking-widest rounded-full shadow-2xl">
                                    {{ $event->design_style === 'featured' ? '★ Priority Node' : 'Institutional Node' }}
                                </span>
                            </div>
                        </div>

                        <!-- Content Node -->
                        <div class="p-10 flex flex-col grow space-y-8">
                            <div class="grow space-y-4">
                                <a href="{{ route('events.show', $event->slug) }}" class="block">
                                    <h3 class="text-2xl font-black text-slate-900 leading-none uppercase italic tracking-tighter group-hover:text-brand-primary transition-colors line-clamp-2">
                                        {{ $event->title }}
                                    </h3>
                                </a>
                                @if($event->short_description)
                                    <p class="text-slate-500 text-[11px] font-bold uppercase tracking-widest leading-relaxed line-clamp-2 italic">
                                        {{ $event->short_description }}
                                    </p>
                                @endif
                            </div>

                            <!-- Meta Grid -->
                            <div class="space-y-4">
                                <div class="flex items-center gap-6 p-6 bg-slate-50 rounded-[2rem] border border-slate-100 group-hover:bg-slate-950 group-hover:border-slate-800 transition-all duration-700">
                                    <div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center text-brand-primary shadow-sm shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-all">
                                        <i class="fa-regular fa-calendar-check"></i>
                                    </div>
                                    <div>
                                        <p class="text-[8px] font-black text-slate-400 uppercase tracking-widest leading-none mb-2">Schedule Node</p>
                                        <p class="text-xs font-black text-slate-900 uppercase tracking-widest group-hover:text-white transition-colors italic">
                                            @if($event->end_date)
                                                {{ $event->event_date->format('d') }} - {{ $event->end_date->format('d M, Y') }}
                                            @else
                                                {{ $event->event_date->format('d M, Y') }}
                                            @endif
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-center gap-6 p-6 bg-slate-50 rounded-[2rem] border border-slate-100 group-hover:bg-slate-950 group-hover:border-slate-800 transition-all duration-700">
                                    <div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center text-brand-primary shadow-sm shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-all">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div>
                                        <p class="text-[8px] font-black text-slate-400 uppercase tracking-widest leading-none mb-2">Location Node</p>
                                        <p class="text-xs font-black text-slate-900 uppercase tracking-widest group-hover:text-white transition-colors italic"> 
                                            {{ $event->location ?: 'Global Node' }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- CTA Node -->
                            <a href="{{ route('events.show', $event->slug) }}"
                               class="w-full bg-slate-950 text-white hover:bg-brand-primary py-7 rounded-[2rem] text-[10px] font-black uppercase tracking-[0.4em] italic text-center transition-all duration-700 group/btn">
                                Acquire Pass <i class="fa-solid fa-arrow-right-long ml-4 group-hover/btn:translate-x-3 transition-transform"></i>
                            </a>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full py-48 text-center bg-slate-50 border border-slate-100 rounded-[4rem]">
                        <div class="w-32 h-32 bg-white rounded-[3rem] flex items-center justify-center text-slate-200 text-5xl mx-auto mb-10 shadow-xl">
                            <i class="fa-solid fa-calendar-circle-exclamation"></i>
                        </div>
                        <h3 class="text-4xl font-black text-slate-400 uppercase italic tracking-tighter leading-none">No Upcoming Event Nodes</h3>
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

