@if(isset($upcomingEvents) && $upcomingEvents->count() > 0)
    <section class="section-padding bg-white relative overflow-hidden">
        <!-- Sophisticated Background Decorators -->
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-brand-primary/5 rounded-full blur-[120px] translate-x-1/3 -translate-y-1/3"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-brand-accent/10 rounded-full blur-[80px] -translate-x-1/2 translate-y-1/2"></div>

        <div class="container relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 xl:gap-24 items-start">


                <!-- Event Cards Side -->
                <div class="lg:col-span-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    @foreach($upcomingEvents->take(3) as $event)
                        <div class="group relative flex flex-col h-full bg-white rounded overflow-hidden border border-brand-primary transition-all duration-700 hover:-translate-y-4"
                            x-data="{ visible: false }" x-intersect="visible = true"
                            :class="visible ? 'translate-y-0 opacity-100' : 'translate-y-12 opacity-0'"
                            style="transition-delay: {{ $loop->index * 150 }}ms">

                            <!-- Card Visual -->
                            <div class="relative aspect-video overflow-hidden">
                                <img src="{{ $event->image ? asset($event->image) : asset('images/event-placeholder.jpg') }}"
                                    alt="{{ $event->title }}"
                                    class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">

                                <!-- Date Badge -->
                                <!-- <div class="absolute top-6 left-6 p-4 rounded-2xl bg-white shadow-2xl text-center min-w-[70px]">
                                    <div class="text-2xl font-black text-brand-primary leading-none">{{ $event->event_date->format('d') }}</div>
                                    <div class="text-[10px] font-black uppercase tracking-widest text-slate-400 mt-1">{{ $event->event_date->format('M') }}</div>
                                </div> -->
                            </div>

                            <!-- Card Content -->
                            <div class="p-4 flex flex-col grow space-y-4">
                                <h3 class="text-2xl font-black text-slate-900 group-hover:text-brand-primary transition-colors leading-tight tracking-tight uppercase">
                                    {{ $event->title }}
                                </h3>

                                @if($event->short_description)
                                    <p class="text-sm text-slate-500 font-medium leading-relaxed line-clamp-3">
                                        {{ $event->short_description }}
                                    </p>
                                @endif

                                <!-- Meta Info -->
                                <div class="pt-4 border-t border-slate-100 space-y-4">
                                    <div class="flex items-center gap-4 group/item">
                                        <div class="w-10 h-10 rounded bg-brand-primary/5 flex items-center justify-center text-brand-primary transition-colors group-hover/item:bg-brand-primary group-hover/item:text-white border border-brand-primary/10">
                                            <i class="fa-solid fa-clock text-sm"></i>
                                        </div>
                                        <div>
                                            <div class="text-xs font-black text-slate-400 uppercase tracking-widest mb-0.5">Schedule</div>
                                            <div class="text-sm font-bold text-slate-700">
                                                @if($event->end_date)
                                                    {{ $event->event_date->format('d') }} - {{ $event->end_date->format('d M, Y') }}
                                                @else
                                                    {{ $event->event_date->format('d M, Y') }}
                                                @endif
                                                <span class="mx-2 text-slate-300">|</span>
                                                {{ $event->event_date->format('h:i A') }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex items-center gap-4 group/item">
                                        <div class="w-10 h-10 rounded bg-brand-accent/20 flex items-center justify-center text-brand-primary transition-colors group-hover/item:bg-brand-accent border border-brand-accent/20">
                                            <i class="fa-solid fa-location-dot text-sm"></i>
                                        </div>
                                        <div>
                                            <div class="text-xs font-black text-slate-400 uppercase tracking-widest mb-0.5">Venue</div>
                                            <div class="text-sm font-bold text-slate-700">{{ $event->location ?: 'India Expo Centre, Delhi NCR' }}</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Action -->
                                <div class="pt-4">
                                    <a href="{{ route('events.show', $event->slug) }}"
                                        class="w-full py-4 rounded bg-brand-primary text-white font-black text-xs uppercase tracking-widest flex items-center justify-center gap-3 hover:bg-brand-primary hover:text-white transition-all">
                                        Register For Event
                                        <i class="fa-solid fa-chevron-right text-[10px]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif
