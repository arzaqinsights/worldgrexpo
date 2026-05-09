@if(isset($upcomingEvents) && $upcomingEvents->count() > 0)
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Sharp Geometric Decor -->
        <div class="absolute top-0 right-0 w-64 h-64 border border-brand-accent/20 rotate-45 translate-x-1/2 -translate-y-1/2 -z-0"></div>
        <div class="absolute bottom-0 left-0 w-32 h-32 border border-brand-primary/10 -rotate-12 -translate-x-1/2 translate-y-1/2 -z-0"></div>

        <div class="container relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 xl:gap-24 items-start">

                <!-- Left Sidebar: Context & Stats -->
                <div class="lg:col-span-4 lg:sticky lg:top-32 space-y-12 animate-on-scroll">
                    <div>
                        <div class="inline-flex items-center gap-3 px-4 py-2 bg-brand-accent/10 border-l-4 border-brand-accent mb-8">
                            <span class="text-brand-primary text-xs font-black tracking-[0.2em] uppercase italic">Global Agenda</span>
                        </div>
                        <h2 class="text-5xl md:text-6xl font-black text-slate-950 leading-[0.9] mb-10 tracking-tighter uppercase italic">
                            Upcoming <br/>
                            <span class="text-brand-accent not-italic">Summits</span>
                        </h2>
                        <p class="text-slate-500 text-xl font-light leading-relaxed">
                            Experience premier global expos dedicated to industrial evolution and sustainable growth.
                        </p>
                    </div>

                    <!-- Statistics Grid -->
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-slate-50 p-6 rounded-sm border border-slate-100 group hover:border-brand-accent transition-colors">
                            <div class="text-4xl font-black text-slate-950 mb-2 group-hover:text-brand-accent transition-colors italic tracking-tighter">
                                {{ $upcomingEvents->count() }}+
                            </div>
                            <div class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400">Live Summits</div>
                        </div>
                        <div class="bg-slate-950 p-6 rounded-sm flex items-center justify-center text-center">
                            <div class="text-[9px] font-black uppercase tracking-[0.2em] text-brand-accent leading-relaxed">Join the global elite network</div>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center gap-6">
                        <a href="{{ route('events.index') }}"
                            class="inline-flex items-center justify-center gap-4 w-full sm:w-auto bg-slate-950 text-white px-8 py-5 rounded-sm font-black text-sm uppercase tracking-widest transition-all group hover:bg-brand-accent hover:text-brand-primary-dark shadow-xl">
                            All Events
                            <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                        </a>
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center justify-center gap-4 w-full sm:w-auto bg-transparent border border-slate-200 text-slate-950 px-8 py-5 rounded-sm font-black text-sm uppercase tracking-widest transition-all hover:bg-slate-50">
                            Get In Touch
                        </a>
                    </div>
                </div>

                <!-- Right Column: Event Cards -->
                <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-8 xl:gap-10">
                    @foreach($upcomingEvents->take(2) as $event)
<div class="group relative flex flex-col h-full bg-white border border-slate-100 rounded-sm overflow-hidden transition-all duration-700 hover:shadow-[0_20px_60px_-15px_rgba(0,0,0,0.1)] hover:-translate-y-4"
                                style="transition-delay: {{ $loop->index * 150 }}ms">

                                <!-- Image Area -->
                                <div class="relative aspect-video overflow-hidden shrink-0">
                                    <img src="{{ $event->image ? asset($event->image) : asset('images/event-placeholder.jpg') }}"
                                        alt="{{ $event->title }}"
                                        class="w-full h-full object-cover transform transition-transform duration-1000">
                                </div>

                                <a href="{{ route('events.show', $event->slug) }}" class="block mb-2 grow">
                                    <!-- Details Area -->
                                    <div class="p-6 flex flex-col grow">
                                        <h3
                                            class="text-3xl font-black text-slate-900 leading-tight mb-4 group-hover:text-brand-primary transition-colors line-clamp-2">
                                            {{ $event->title }}
                                        </h3>

                                        @if($event->short_description)
                                            <p class="text-slate-500 text-sm leading-relaxed mb-8 line-clamp-2 font-medium">
                                                {{ $event->short_description }}
                                            </p>
                                        @endif

                                        <!-- Structured Info (Date & Time Together) -->
                                        <div class="grid grid-cols-1 gap-4">
                                            <div class="flex items-center gap-4 group/item">
                                                <div
                                                    class="w-10 h-10 rounded-xl bg-brand-primary flex items-center justify-center text-white transition-colors border border-slate-100 shrink-0">
                                                    <i class="fa-regular fa-calendar-check text-sm"></i>
                                                </div>
                                                <div>
                                                    <p
                                                        class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none mb-2">
                                                        Event Schedule</p>
                                                    <div class="flex flex-wrap items-center gap-x-3 gap-y-1">
                                                        <span
                                                            class="text-sm font-black text-slate-800 uppercase tracking-wider">@if($event->end_date)
                                                                {{ $event->event_date->format('d') }} -
                                                                {{ $event->end_date->format('d M, Y') }}
                                                                {{ $event->event_date->format('h:i A') }}
                                                            @else
                                                                {{ $event->event_date->format('d M, Y h:i A') }}
                                                            @endif
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex items-center gap-4 group/item">
                                                <div
                                                    class="w-10 h-10 rounded-xl bg-brand-primary flex items-center justify-center text-white transition-colors border border-slate-100 shrink-0">
                                                    <i class="fa-solid fa-location-dot text-sm"></i>
                                                </div>
                                                <div>
                                                    <p
                                                        class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none mb-2">
                                                        Event Venue</p>
                                                    <p class="text-xs font-bold text-slate-700 uppercase tracking-wider"> {{
                        $event->location ?: 'New Delhi, India' }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Action Footer -->
                                        <!-- <div class="mt-10 flex items-center justify-between gap-4">
                                                            <a href="{{ route('events.show', $event->slug) }}"
                                                            class="grow bg-brand-accent hover:bg-brand-primary text-black hover:text-white text-center py-3 border rounded-md text-sm font-black uppercase tracking-widest transition-all">
                                                            Register Now
                                                        </a>
                                                            <a href="{{ route('events.show', $event->slug) }}"
                                                                class="w-11 h-11 rounded-md border flex items-center justify-center text-slate-400 hover:border-brand-primary hover:text-brand-primary transition-all">
                                                                <i class="fa-solid fa-arrow-right-long"></i>
                                                            </a>
                                                        </div> -->
                                    </div>
                                </a>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif
