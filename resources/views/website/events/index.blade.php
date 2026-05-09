@extends('layouts.website')

@section('title', 'Global Summits & Business Events | World Grexpo Foundation')

@section('content')
    <section class="relative pt-48 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
        </div>
        <div class="container relative z-10 text-left">
            <div class="max-w-4xl animate-on-scroll">
                <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
                    <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Official Node Calendar</span>
                </div>
                <h1 class="text-6xl md:text-8xl font-black text-white leading-[0.85] tracking-tighter uppercase italic mb-8">
                    Upcoming <span class="text-brand-accent not-italic">Global Summits</span>
                </h1>
                <p class="text-2xl text-slate-400 font-light italic max-w-2xl border-l-2 border-slate-800 pl-8">
                    Strategic industrial nodes designed to facilitate global synergy and absolute growth acceleration.
                </p>
            </div>
        </div>
    </section>

    <section class="py-32 bg-white relative overflow-hidden">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                @forelse($events as $event)
                        <div class="group bg-slate-50 border border-slate-100 rounded-sm overflow-hidden hover:bg-slate-950 transition-all duration-700 animate-on-scroll flex flex-col h-full relative"
                            style="transition-delay: {{ $loop->index * 150 }}ms">
                            
                            <div class="absolute top-0 left-0 w-0 h-1 bg-brand-accent group-hover:w-full transition-all duration-700 z-30"></div>

                            <!-- Image Area -->
                            <div class="relative aspect-video overflow-hidden shrink-0 border-b border-slate-100 group-hover:border-slate-800 transition-colors">
                                <img src="{{ $event->image ? asset($event->image) : asset('images/event-placeholder.jpg') }}"
                                    alt="{{ $event->title }}"
                                    class="w-full h-full object-cover grayscale group-hover:grayscale-0 transform group-hover:scale-105 transition-all duration-[2000ms]">

                                <!-- Category Badge -->
                                <div class="absolute top-8 right-8 z-20">
                                    <span
                                        class="bg-slate-950/80 backdrop-blur-md text-brand-accent text-[8px] font-black uppercase tracking-[0.3em] px-4 py-2 rounded-sm border border-white/10 italic">
                                        {{ $event->design_style === 'featured' ? '★ Featured Node' : 'Industrial Summit' }}
                                    </span>
                                </div>
                            </div>

                            <!-- Details Area -->
                            <div class="p-10 flex flex-col grow relative">
                                <a href="{{ route('events.show', $event->slug) }}" class="block mb-8 grow">
                                    <h3
                                        class="text-2xl font-black text-slate-950 leading-tight uppercase italic tracking-tighter group-hover:text-white transition-colors line-clamp-2">
                                        {{ $event->title }}
                                    </h3>
                                </a>

                                @if($event->short_description)
                                    <p class="text-slate-500 text-[10px] font-black uppercase tracking-widest leading-loose mb-10 line-clamp-2 group-hover:text-slate-400 transition-colors italic">
                                        {{ $event->short_description }}
                                    </p>
                                @endif

                                <!-- Structured Info -->
                                <div class="grid grid-cols-1 gap-4">
                                    <div class="flex items-center gap-6 group/item p-4 bg-white border border-slate-100 rounded-sm group-hover:bg-white/5 group-hover:border-white/10 transition-all">
                                        <div class="w-12 h-12 bg-slate-950 flex items-center justify-center text-brand-accent rounded-sm shrink-0">
                                            <i class="fa-regular fa-calendar-check text-sm"></i>
                                        </div>
                                        <div>
                                            <p class="text-[8px] font-black text-slate-400 uppercase tracking-[0.3em] leading-none mb-2">Schedule Node</p>
                                            <p class="text-xs font-black text-slate-950 uppercase tracking-widest group-hover:text-white transition-colors italic">
                                                @if($event->end_date)
                                                    {{ $event->event_date->format('d') }} -
                                                    {{ $event->end_date->format('d M, Y') }}
                                                @else
                                                    {{ $event->event_date->format('d M, Y') }}
                                                @endif
                                            </p>
                                        </div>
                                    </div>

                                    <div class="flex items-center gap-6 group/item p-4 bg-white border border-slate-100 rounded-sm group-hover:bg-white/5 group-hover:border-white/10 transition-all">
                                        <div class="w-12 h-12 bg-slate-950 flex items-center justify-center text-brand-accent rounded-sm shrink-0">
                                            <i class="fa-solid fa-location-dot text-sm"></i>
                                        </div>
                                        <div>
                                            <p class="text-[8px] font-black text-slate-400 uppercase tracking-[0.3em] leading-none mb-2">Location Node</p>
                                            <p class="text-xs font-black text-slate-950 uppercase tracking-widest group-hover:text-white transition-colors italic"> 
                                                {{ $event->location ?: 'Global Node' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Action Footer -->
                                <div class="mt-12 flex items-center gap-2">
                                    <a href="{{ route('events.show', $event->slug) }}"
                                        class="grow bg-slate-950 text-white hover:bg-brand-accent hover:text-slate-950 text-center py-6 rounded-sm text-[10px] font-black uppercase tracking-[0.3em] italic transition-all duration-700 shadow-4xl group/btn">
                                        Acquire Pass <i class="fa-solid fa-arrow-right-long ml-4 group-hover/btn:translate-x-4 transition-transform"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                @empty
                    <div class="col-span-full py-32 text-center bg-slate-50 border border-slate-100 rounded-sm">
                        <i class="fa-solid fa-calendar-circle-exclamation text-slate-200 text-9xl mb-10 block"></i>
                        <h3 class="text-3xl font-black text-slate-400 uppercase italic tracking-widest leading-none">No Upcoming Event Nodes Found</h3>
                    </div>
                @endforelse
            </div>

            @if($events->hasPages())
                <div class="mt-24 flex justify-start">
                    {{ $events->links() }}
                </div>
            @endif
        </div>
    </section>
@endsection
