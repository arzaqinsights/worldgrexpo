@extends('layouts.website')

@section('title', $page->title . ' | World Grexpo Foundation')

@section('content')
    <!-- Hero Banner -->
    <section class="relative pt-48 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
        </div>
        <div class="container relative z-10 text-left animate-on-scroll">
            <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">{{ $page->title }} Node</span>
            </div>
            <h1 class="text-6xl md:text-8xl font-black text-white tracking-tighter uppercase italic leading-none">{{ $page->title }}</h1>
            @if($page->description)
                <div class="text-slate-400 mt-8 text-2xl font-light max-w-4xl leading-relaxed italic border-l-2 border-slate-800 pl-8">
                    {!! $page->description !!}
                </div>
            @endif
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-32 bg-white relative">
        <div class="container relative z-10">
            
            <!-- Members Grid (Grouped) -->
            @php
                $groupedMembers = $members->groupBy(function($item) {
                    return $item->group_name ?: 'Members';
                });
            @endphp

            @foreach($groupedMembers as $groupName => $group)
                @if($groupName !== 'Members' || $groupedMembers->count() > 1)
                    <div class="mb-16 mt-24 first:mt-0 animate-on-scroll">
                        <h3 class="text-4xl font-black text-slate-950 uppercase italic tracking-tighter flex items-center gap-6">
                            {{ $groupName }}
                            <span class="flex-grow h-px bg-slate-100"></span>
                        </h3>
                    </div>
                @endif

                <div class="grid grid-cols-1 gap-2 mb-24 last:mb-0">
                    @foreach($group as $member)
                    <div class="group bg-slate-50 border border-slate-100 rounded-sm overflow-hidden hover:bg-slate-950 transition-all duration-700 animate-on-scroll flex flex-col md:flex-row h-full relative">
                        <div class="relative h-auto w-full md:w-1/4 overflow-hidden shrink-0 border-r border-slate-100 group-hover:border-slate-800 transition-colors">
                            @if($member->image)
                                <img src="{{ asset($member->image) }}" alt="{{ $member->name }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-[2000ms]">
                            @else
                                <div class="w-full h-full bg-slate-100 flex items-center justify-center text-slate-300 group-hover:bg-slate-900 group-hover:text-slate-700 transition-all">
                                    <i class="fa-solid fa-user text-9xl"></i>
                                </div>
                            @endif
                            <div class="absolute inset-0 bg-slate-950/20 group-hover:bg-transparent transition-all duration-700"></div>
                        </div>
                        <div class="p-12 md:p-16 text-left flex-grow flex flex-col justify-between relative">
                            <div>
                                <h3 class="text-3xl font-black text-slate-950 mb-2 uppercase italic tracking-tighter group-hover:text-white transition-colors leading-none">{{ $member->name }}</h3>
                                <p class="text-brand-primary font-black text-[10px] mb-8 uppercase tracking-[0.3em] italic group-hover:text-brand-accent transition-colors">{{ $member->designation }}</p>
                                
                                @if($member->company_name)
                                    <div class="inline-flex items-center gap-3 px-4 py-2 bg-white border border-slate-200 mb-8 group-hover:bg-white/5 group-hover:border-white/10 transition-all">
                                        <p class="text-slate-500 text-[10px] font-black uppercase tracking-widest group-hover:text-slate-400">{{ $member->company_name }}</p>
                                    </div>
                                @endif

                                <p class="text-slate-600 text-lg leading-relaxed font-light italic group-hover:text-slate-400 transition-colors">
                                    {{ $member->description }}
                                </p>
                            </div>
                            
                            @if($member->social_links)
                            <div class="flex gap-4 pt-10 mt-10 border-t border-slate-200 group-hover:border-white/10 transition-colors">
                                @foreach($member->social_links as $platform => $url)
                                    @if($url)
                                    <a href="{{ $url }}" target="_blank" class="w-12 h-12 bg-white border border-slate-200 flex items-center justify-center text-slate-950 hover:bg-brand-accent hover:border-brand-accent transition-all duration-500 rounded-sm group-hover:bg-white/5 group-hover:border-white/10 group-hover:text-white">
                                        <i class="fa-brands fa-{{ $platform }} text-sm"></i>
                                    </a>
                                    @endif
                                @endforeach
                            </div>
                            @endif
                        </div>
                        <div class="absolute top-0 left-0 w-0 h-1 bg-brand-accent group-hover:w-full transition-all duration-700"></div>
                    </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>

    <!-- Join Vision -->
    <section class="py-32 bg-slate-950 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:30px_30px]"></div>
        </div>
        <div class="container animate-on-scroll relative z-10 text-center">
            <h3 class="text-5xl md:text-7xl font-black text-white mb-10 tracking-tighter uppercase italic leading-none">Architect Your <br> <span class="text-brand-accent">Industrial Future</span></h3>
            <p class="text-slate-400 max-w-4xl mx-auto mb-16 text-2xl font-light leading-relaxed italic">
                Our Institutional node is committed to nurturing an ecosystem where industrial units can thrive globally. If you share our vision, we encourage you to acquire a membership node and transition with us.
            </p>
            <a href="{{ route('register') }}" class="inline-flex items-center gap-6 px-16 py-8 bg-white text-slate-950 font-black uppercase tracking-[0.3em] text-xs rounded-sm hover:bg-brand-accent hover:text-slate-950 transition-all duration-700 shadow-4xl italic group">
                Acquire Institutional Membership <i class="fa-solid fa-arrow-right ml-4 group-hover:translate-x-4 transition-transform"></i>
            </a>
        </div>
    </section>

@endsection
