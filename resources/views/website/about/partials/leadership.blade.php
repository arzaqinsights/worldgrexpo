<section class="py-32 bg-white relative overflow-hidden">
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row justify-between items-end mb-24 gap-12 animate-on-scroll">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
                    <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Executive Board</span>
                </div>
                <h2 class="text-6xl md:text-8xl font-black text-slate-950 uppercase italic leading-[0.85] tracking-tighter">
                    Institutional <br> <span class="text-brand-accent not-italic">Leadership</span>
                </h2>
            </div>
            <div class="w-px h-24 bg-slate-200 hidden md:block"></div>
            <p class="text-slate-500 text-xl font-light italic max-w-sm leading-tight">
                Architecting the global mission of World Grexpo Foundation through distinguished board governance.
            </p>
        </div>

        <!-- Leadership Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">
            
            @php
                $leaders = [
                    [
                        'name' => 'Dr. Indrajit Ghosh',
                        'role' => 'Global Chairman & MD',
                        'img' => asset('images/about/chairman.png'),
                        'desc' => 'Mechanical Engineer and MBA holder with over 36 years of international expertise spanning Plastics, Packaging, Leather, and Waste Management sectors.',
                        'delay' => 0
                    ],
                    [
                        'name' => 'Dr. Nirmalendu Nath',
                        'role' => 'President',
                        'img' => asset('images/about/president.png'),
                        'desc' => 'PhD in Botany, Dr. Nath serves as the backbone of our agrarian initiatives. Former Director of the Pusa Institute and the Botanical Survey of India.',
                        'delay' => 100
                    ],
                    [
                        'name' => 'Ms. Sagarika Ghosh',
                        'role' => 'Director',
                        'img' => asset('images/about/director.png'),
                        'desc' => 'Ms. Ghosh spearheads strategic alliance with ‘Publishing Matters’. A dynamic leader in scholarly publishing and an ardent advocate for Open Research.',
                        'delay' => 200
                    ],
                    [
                        'name' => 'Mr. Aditya Ghosh',
                        'role' => 'Managing Director',
                        'img' => asset('images/about/md.png'),
                        'desc' => 'Based strategically in Australia, Mr. Aditya pioneers aggressive international outreach and establishing high-value global trade corridors.',
                        'delay' => 300
                    ]
                ];
            @endphp

            @foreach($leaders as $leader)
            <div class="group bg-slate-50 border border-slate-100 rounded-sm overflow-hidden hover:bg-slate-950 transition-all duration-700 animate-on-scroll flex flex-col h-full" style="transition-delay: {{ $leader['delay'] }}ms">
                <div class="relative h-96 w-full overflow-hidden shrink-0 border-b border-slate-200 group-hover:border-slate-800">
                    <img src="{{ $leader['img'] }}" alt="{{ $leader['name'] }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-[1500ms]">
                    <div class="absolute inset-0 bg-slate-950/20 group-hover:bg-transparent transition-all duration-700"></div>
                </div>
                <div class="p-10 text-left flex-grow flex flex-col justify-between">
                    <div>
                        <h3 class="text-3xl font-black text-slate-950 mb-2 uppercase italic tracking-tighter group-hover:text-white transition-colors leading-none">{{ $leader['name'] }}</h3>
                        <p class="text-brand-primary font-black text-[10px] mb-8 uppercase tracking-[0.3em] italic group-hover:text-brand-accent transition-colors">{{ $leader['role'] }}</p>
                        <p class="text-slate-500 text-[10px] font-bold uppercase tracking-widest leading-relaxed group-hover:text-slate-400 transition-colors">
                            {{ $leader['desc'] }}
                        </p>
                    </div>
                    <div class="flex justify-start gap-4 pt-10 mt-10 border-t border-slate-200 group-hover:border-slate-800 transition-colors">
                        <a href="#" class="w-10 h-10 border border-slate-300 flex items-center justify-center text-slate-400 hover:bg-brand-accent hover:border-brand-accent hover:text-slate-950 transition-all duration-500 rounded-sm">
                            <i class="fa-brands fa-linkedin-in text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
