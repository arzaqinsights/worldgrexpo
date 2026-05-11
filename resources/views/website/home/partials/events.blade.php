@if(isset($upcomingEvents) && $upcomingEvents->count() > 0)
    <section class="section-padding bg-white relative overflow-hidden border-b border-slate-100">
        <!-- Industrial Background Decor -->
        <div class="absolute top-0 left-0 w-1/3 h-full bg-slate-50/50 -z-0"></div>

        <div class="container relative z-10">
            <!-- Sharp Section Header -->
            <div class="flex flex-col lg:flex-row justify-between items-end mb-24 gap-12">
                <div class="max-w-3xl space-y-8">
                    <div class="section-heading">
                        <span class="subtitle">Global Summits</span>
                        <h2>Upcoming <span class="text-brand-primary">Industry Events.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    <p class="text-xl text-slate-500 font-medium leading-relaxed max-w-2xl">
                        Connect with global leaders and innovators through our curated summits and high-impact industrial conferences.
                    </p>
                </div>
                <a href="{{ route('events.index') }}" 
                    class="btn-sharp-outline group">
                    View All Events <i class="fa-solid fa-arrow-right-long ml-4 group-hover:translate-x-3 transition-transform"></i>
                </a>
            </div>

            <!-- Sharp Events Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-px bg-slate-100 border border-slate-100">
                @foreach($upcomingEvents->take(3) as $event)
                    <div class="group relative bg-white flex flex-col h-full transition-all duration-500 hover:shadow-[0_20px_50px_rgba(0,0,0,0.05)] border border-gray-300 hover:border-brand-primary">
                        <!-- Card Visual -->
                        <div class="relative aspect-[16/10] overflow-hidden bg-slate-100">
                            <img src="{{ asset($event->image) }}" 
                                 alt="{{ $event->title }}" 
                                 class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105">
                            
                            <!-- Overlay Date Badge -->
                            <div class="absolute bottom-0 left-0 bg-brand-primary p-5 text-white text-center min-w-[80px]">
                                <div class="text-3xl font-black leading-none tracking-tighter">{{ $event->event_date->format('d') }}</div>
                                <div class="text-[10px] font-black uppercase tracking-[0.2em] mt-1 opacity-90">{{ $event->event_date->format('M') }}</div>
                            </div>

                            <!-- Industrial Corner Accent -->
                            <div class="absolute top-0 right-0 w-8 h-8 border-t-2 border-r-2 border-white/30 m-4 transition-all duration-500 group-hover:border-white/80 group-hover:scale-110"></div>
                        </div>

                        <!-- Card Content -->
                        <div class="p-6 flex flex-col flex-1 space-y-6">
                            <div class="space-y-4">
                                <h3 class="text-2xl font-black text-slate-900 group-hover:text-brand-primary transition-colors tracking-tighter uppercase leading-tight line-clamp-2 min-h-[4rem]">
                                    {{ $event->title }}
                                </h3>
                                <div class="w-12 h-1 bg-brand-accent transition-all duration-500 group-hover:w-20"></div>
                            </div>

                            <!-- Meta Info (Sharp) -->
                            <div class="space-y-6 flex-1 pt-2">
                                <div class="flex items-start gap-4 group/item">
                                    <div class="w-9 h-9 bg-brand-primary/30 flex items-center justify-center text-brand-primary transition-colors group-hover/item:bg-brand-primary group-hover/item:text-white">
                                        <i class="fa-solid fa-clock text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Time & Schedule</p>
                                        <p class="text-sm font-bold text-slate-800 uppercase tracking-wider">
                                            @if($event->end_date)
                                                {{ $event->event_date->format('d') }} - {{ $event->end_date->format('d M, Y') }}
                                            @else
                                                {{ $event->event_date->format('d M, Y') }}
                                            @endif
                                            <span class="mx-2 text-slate-300">|</span>
                                            {{ $event->event_date->format('h:i A') }}
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4 group/item">
                                    <div class="w-9 h-9 bg-brand-primary/30 flex items-center justify-center text-brand-primary transition-colors group-hover/item:bg-brand-primary group-hover/item:text-white">
                                        <i class="fa-solid fa-location-dot text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Industrial Venue</p>
                                        <p class="text-sm font-bold text-slate-800 uppercase tracking-wider leading-relaxed">{{ $event->location ?: 'India Expo Centre, Greater Noida' }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Action (Sharp) -->
                            <div class="pt-2">
                                <a href="{{ route('events.show', $event->slug) }}"
                                    class="btn-sharp w-full group/btn">
                                    Register Now
                                    <i class="fa-solid fa-arrow-right ml-3 group-hover/btn:translate-x-2 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>
@endif
