<section class="py-32 bg-slate-50 relative overflow-hidden">
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-left max-w-4xl mb-24 animate-on-scroll">
            <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Institutional DNA</span>
            </div>
            <h2 class="text-6xl md:text-8xl font-black text-slate-950 mb-10 tracking-tighter uppercase italic leading-[0.85]">
                The <span class="text-brand-accent not-italic">POWER</span> <br> Framework
            </h2>
            <p class="text-slate-500 text-2xl font-light leading-relaxed italic border-l-2 border-slate-200 pl-8">
                The structural DNA of World Grexpo Foundation is built upon the proprietary POWER framework, driving absolute precision in global industrial node governance.
            </p>
        </div>

        <!-- P-O-W-E-R Grid -->
        <div class="relative">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-2 relative z-10">
                
                @php
                    $power = [
                        ['l' => 'P', 't' => 'Passion', 'd' => 'Unwavering institutional dedication to our mission and nodes.', 'c' => 'bg-slate-950'],
                        ['l' => 'O', 't' => 'Ownership', 'd' => 'Taking absolute responsibility for global industrial outcomes.', 'c' => 'bg-brand-primary'],
                        ['l' => 'W', 't' => 'Work-Life', 'd' => 'Promoting a sustainable balance for industrial visionaries.', 'c' => 'bg-slate-950'],
                        ['l' => 'E', 't' => 'Excellence', 'd' => 'Consistently exceeding absolute global industrial standards.', 'c' => 'bg-brand-primary'],
                        ['l' => 'R', 't' => 'Respect', 'd' => 'Operating with absolute institutional integrity and honor.', 'c' => 'bg-slate-950'],
                    ];
                @endphp

                @foreach($power as $idx => $p)
                    <div class="bg-white rounded-sm p-12 border border-slate-100 group hover:bg-slate-950 transition-all duration-700 animate-on-scroll" style="transition-delay: {{ $idx * 100 }}ms">
                        <div class="w-20 h-20 {{ $p['c'] }} border border-slate-950/10 rounded-sm flex items-center justify-center mb-10 shadow-2xl group-hover:bg-brand-accent group-hover:border-brand-accent transition-all duration-700">
                            <span class="text-5xl font-black text-white italic group-hover:text-slate-950 transition-colors">{{ $p['l'] }}</span>
                        </div>
                        <h4 class="text-3xl font-black text-slate-950 mb-6 group-hover:text-white uppercase tracking-tighter italic transition-colors leading-none">{{ $p['t'] }}</h4>
                        <p class="text-[10px] font-black text-slate-500 group-hover:text-slate-400 uppercase tracking-[0.3em] leading-relaxed transition-colors">{{ $p['d'] }}</p>
                        
                        <div class="mt-12 w-0 h-1.5 bg-brand-accent group-hover:w-full transition-all duration-700"></div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
