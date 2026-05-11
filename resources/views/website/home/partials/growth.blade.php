<!-- CONFERENCE GROWTH SECTION (Homepage) -->
<section class="section-padding bg-white relative overflow-hidden border-b border-slate-100">
    <!-- Industrial Background Accents -->
    <div class="absolute top-0 right-0 w-1/3 h-full bg-slate-50/50 -z-0"></div>
    <div class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:40px_40px] opacity-30"></div>

    <div class="container relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 xl:gap-24 items-center">
            
            <!-- Left Content -->
            <div class="lg:col-span-4 space-y-10">
                <div class="section-heading">
                    <span class="subtitle">Impact Growth</span>
                    <h2>Scaling <span class="text-brand-primary">Global</span> Excellence.</h2>
                    <div class="accent-line"></div>
                </div>
                
                <p class="text-xl text-slate-500 font-medium leading-relaxed max-w-md">
                    What started as a focused initiative has evolved into a global powerhouse, connecting visionaries across the industrial spectrum.
                </p>
                
                <!-- Stats Grid (Sharp) -->
                <div class="grid grid-cols-2 gap-px bg-slate-200 border border-slate-200">
                    <div class="bg-white p-8 group">
                        <span class="block text-4xl font-black text-slate-900 tracking-tighter mb-2 group-hover:text-brand-primary transition-colors">5.2X</span>
                        <span class="block text-[9px] font-black text-slate-400 uppercase tracking-widest">Growth Factor</span>
                    </div>
                    <div class="bg-white p-8 group">
                        <span class="block text-4xl font-black text-slate-900 tracking-tighter mb-2 group-hover:text-brand-primary transition-colors">1.8K+</span>
                        <span class="block text-[9px] font-black text-slate-400 uppercase tracking-widest">Expected 2027</span>
                    </div>
                </div>
            </div>

            <!-- Right Content (Industrial Chart) -->
            <div class="lg:col-span-8 relative">
                <div class="bg-white border border-slate-200 p-12 lg:p-20 shadow-[40px_40px_0px_0px_rgba(0,75,35,0.03)] relative overflow-hidden">
                    <!-- Background Grid -->
                    <div class="absolute inset-0 border-b border-slate-100 flex flex-col justify-between p-12 lg:p-20 opacity-50">
                        <div class="w-full h-px bg-slate-100"></div>
                        <div class="w-full h-px bg-slate-100"></div>
                        <div class="w-full h-px bg-slate-100"></div>
                        <div class="w-full h-px bg-slate-100"></div>
                    </div>

                    <div class="flex items-end justify-center gap-4 lg:gap-10 relative z-10" style="min-height: 400px;">
                        @php 
                            $maxVal = $delegates->max(function($d) { 
                                return (int) preg_replace('/[^0-9]/', '', $d->value); 
                            }) ?: 1;
                        @endphp
                        @foreach($delegates as $index => $stat)
                            @php
                                $numericVal = (int) preg_replace('/[^0-9]/', '', $stat->value);
                                $percent = ($numericVal / $maxVal) * 100;
                                $h = max(25, $percent); 
                                $isLatest = ($index === count($delegates) - 1);
                            @endphp
                            <div class="flex-1 flex flex-col items-center group/bar">
                                <!-- The Bar (Sharp) -->
                                <div class="w-full relative transition-all duration-500 group-hover/bar:scale-x-105"
                                     style="height: {{ ($h / 100) * 350 }}px; background: {{ $isLatest ? 'var(--color-brand-primary)' : 'var(--color-brand-accent)' }};">
                                    
                                    <!-- Industrial Texture -->
                                    <div class="absolute inset-0 opacity-10">
                                        @for($i=0; $i<10; $i++)
                                            <div class="w-full h-px bg-white mt-4"></div>
                                        @endfor
                                    </div>

                                    <div class="absolute inset-0 flex flex-col items-center justify-center text-center p-2">
                                        <div class="text-xl lg:text-3xl font-black {{ $isLatest ? 'text-white' : 'text-brand-primary-dark' }} tracking-tighter tabular-nums leading-none">
                                            {{ $stat->value }}
                                        </div>
                                    </div>
                                    
                                    <!-- Latest Indicator -->
                                    @if($isLatest)
                                        <div class="absolute -top-12 left-1/2 -translate-x-1/2">
                                            <span class="bg-brand-primary text-white text-[8px] font-black px-3 py-1 uppercase tracking-widest whitespace-nowrap">Growth Peak</span>
                                        </div>
                                    @endif
                                </div>
                                
                                <!-- Year Label (Sharp) -->
                                <div class="mt-8">
                                    <span class="text-xs font-black {{ $isLatest ? 'text-brand-primary' : 'text-slate-400' }} tracking-widest uppercase">{{ $stat->year }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action (Sharp) -->
        <div class="mt-24 pt-16 border-t border-slate-100 flex flex-col lg:flex-row items-center justify-between gap-12">
            <div class="flex items-center gap-8">
                <div class="hidden sm:flex gap-1.5">
                    @for($i=0; $i<5; $i++)
                        <i class="fa-solid fa-star text-brand-accent text-[11px]"></i>
                    @endfor
                </div>
                <p class="text-slate-400 text-[10px] font-black uppercase tracking-[0.3em] italic">
                    Certified Industrial Excellence — Covering {{ count(config('sectors.sectors')) }}+ Global Sectors
                </p>
            </div>

            <a href="{{ route('growth') }}" class="btn-sharp px-16 group">
                Statistical Report
                <i class="fa-solid fa-arrow-right-long ml-4 group-hover:translate-x-2 transition-transform"></i>
            </a>
        </div>
    </div>
</section>

