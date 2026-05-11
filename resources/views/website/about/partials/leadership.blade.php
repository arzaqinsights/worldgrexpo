<section class="section-padding bg-white relative overflow-hidden border-b border-slate-100">
    <!-- Industrial Pattern Background -->
    <div class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:40px_40px] opacity-30"></div>
    
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="flex flex-col lg:flex-row justify-between items-end mb-24 gap-12 animate-on-scroll">
            <div class="max-w-4xl space-y-8">
                <div class="section-heading">
                    <span class="subtitle">Executive Board</span>
                    <h2>Institutional <span class="text-brand-primary">Leadership.</span></h2>
                    <div class="accent-line"></div>
                </div>
                <p class="text-2xl text-slate-500 font-medium leading-relaxed max-w-2xl">
                    Architecting the global mission of World Grexpo Foundation through distinguished board governance and industrial expertise.
                </p>
            </div>
        </div>

        <!-- Leadership Grid (Sharp) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-2xl">
            
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
            <div class="group relative bg-white overflow-hidden transition-all duration-700 animate-on-scroll">
                <!-- Media Layer (Sharp) -->
                <div class="relative aspect-[4/5] overflow-hidden bg-slate-900">
                    <img src="{{ $leader['img'] }}" 
                        alt="{{ $leader['name'] }}" 
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-[2000ms] group-hover:scale-105 opacity-80 group-hover:opacity-100">
                    
                    <!-- Industrial Overlays -->
                    <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                    
                    <!-- Content Overlay (Sharp) -->
                    <div class="absolute bottom-0 left-0 right-0 p-10">
                        <div class="space-y-4">
                            <h3 class="text-3xl font-black text-white uppercase tracking-tighter leading-none group-hover:text-brand-primary transition-colors">
                                {{ $leader['name'] }}
                            </h3>
                            <div class="flex items-center gap-4">
                                <span class="w-10 h-1 bg-brand-accent"></span>
                                <span class="text-[9px] font-black text-brand-accent uppercase tracking-[0.2em]">{{ $leader['role'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bio Layer (Sharp) -->
                <div class="p-10 space-y-8 bg-white group-hover:bg-slate-50 transition-colors duration-700 h-full">
                    <p class="text-slate-500 text-[11px] font-bold uppercase tracking-widest leading-relaxed">
                        {{ $leader['desc'] }}
                    </p>
                    
                    <div class="pt-8 border-t border-slate-100 group-hover:border-slate-200">
                        <a href="#" class="inline-flex items-center gap-4 text-[9px] font-black text-slate-900 uppercase tracking-[0.4em] group-hover:text-brand-primary transition-all">
                            View Profile <i class="fa-solid fa-plus text-[8px] group-hover:rotate-90 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Sharp Side Accent -->
                <div class="absolute top-0 right-0 w-1 h-0 bg-brand-primary group-hover:h-full transition-all duration-700"></div>
            </div>
            @endforeach

        </div>
    </div>
</section>
