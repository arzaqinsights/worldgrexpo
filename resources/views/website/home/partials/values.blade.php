<!-- World Grexpo Core Values: Sharp Industrial Bento -->
<section class="section-padding bg-white relative overflow-hidden border-b border-slate-100">
    <!-- Industrial Pattern Background -->
    <div class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:40px_40px] opacity-30"></div>
    <div class="absolute top-0 right-0 w-1/3 h-full bg-slate-50/50 -z-0"></div>

    <div class="container relative z-10">
        <!-- Sharp Section Header -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-12 mb-24">
            <div class="max-w-4xl space-y-8">
                <div class="section-heading">
                    <span class="subtitle">Core Principles</span>
                    <h2>Architecting <span class="text-brand-primary">The Future.</span></h2>
                    <div class="accent-line"></div>
                </div>
                <p class="text-xl text-slate-500 font-medium leading-relaxed max-w-3xl">
                    At World Grexpo, our values are the structural foundations of every global initiative. These principles guide our trajectory toward global sustainability and industrial excellence.
                </p>
            </div>
        </div>

        @php
            $values = [
                [
                    'id' => '01',
                    'title' => 'Absolute Integrity',
                    'desc' => 'Unyielding standards of transparency in global operations.',
                    'image' => 'https://images.unsplash.com/photo-1491336477066-31156b5e4f35?w=600&auto=format&fit=crop&q=60',
                    'size' => 'lg:col-span-2 lg:row-span-1',
                ],
                [
                    'id' => '02',
                    'title' => 'Industrial Innovation',
                    'desc' => 'Proprietary thinking at our core.',
                    'image' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=1200',
                    'size' => 'lg:col-span-1 lg:row-span-1',
                ],
                [
                    'id' => '03',
                    'title' => 'Sustainability',
                    'desc' => 'Zero-carbon industrial frameworks.',
                    'image' => 'https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?auto=format&fit=crop&q=80&w=1200',
                    'size' => 'lg:col-span-1 lg:row-span-1',
                ],
                [
                    'id' => '04',
                    'title' => 'Global Synergy',
                    'desc' => 'Elite partnerships for absolute impact.',
                    'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=1200',
                    'size' => 'lg:col-span-1 lg:row-span-2',
                ],
                [
                    'id' => '05',
                    'title' => 'Operational Excellence',
                    'desc' => 'Precision in every global platform.',
                    'image' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&q=80&w=1200',
                    'size' => 'lg:col-span-2 lg:row-span-1',
                ],
                [
                    'id' => '06',
                    'title' => 'Economic Empowerment',
                    'desc' => 'Resources for rapid industrial scaling.',
                    'image' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=1200',
                    'size' => 'lg:col-span-1 lg:row-span-1',
                ],
                [
                    'id' => '07',
                    'title' => 'Global Inclusivity',
                    'desc' => 'Equal opportunity across all nodes.',
                    'image' => 'https://images.unsplash.com/photo-1740065592719-052d3e5ec6fb?w=600&auto=format&fit=crop&q=60',
                    'size' => 'lg:col-span-1 lg:row-span-1',
                ],
                [
                    'id' => '08',
                    'title' => 'Visionary Leadership',
                    'desc' => 'Driving the global industrial transition.',
                    'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=1200',
                    'size' => 'lg:col-span-2 lg:row-span-1',
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-px bg-slate-200 border border-slate-200 auto-rows-[300px]">
            @foreach ($values as $idx => $v)
                <div class="{{ $v['size'] }} group relative overflow-hidden bg-slate-900 transition-all duration-700">
                    <!-- Background Visual (Sharp) -->
                    <img src="{{ $v['image'] }}" alt="{{ $v['title'] }}"
                        class="absolute inset-0 w-full h-full object-cover grayscale opacity-40 group-hover:grayscale-0 group-hover:scale-105 group-hover:opacity-60 transition-all duration-1000">

                    <!-- Industrial Overlay (Sharp) -->
                    <div class="absolute inset-0 bg-slate-900/60 group-hover:bg-brand-primary/40 transition-colors duration-700"></div>

                    <!-- Content (Sharp) -->
                    <div class="absolute inset-0 p-12 flex flex-col justify-between z-20">
                        <div class="flex justify-between items-start">
                            <span class="text-6xl font-black text-white/5 group-hover:text-brand-accent transition-colors duration-500 tabular-nums">{{ $v['id'] }}</span>
                            <div class="w-12 h-12 border border-white/20 flex items-center justify-center text-white backdrop-blur-sm group-hover:bg-brand-accent group-hover:border-brand-accent group-hover:text-brand-primary-dark transition-all duration-500">
                                <i class="fa-solid fa-plus text-[10px] group-hover:rotate-90 transition-transform"></i>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <h3 class="text-2xl font-black text-white uppercase tracking-tighter leading-none transform group-hover:-translate-y-2 transition-transform duration-500">
                                {{ $v['title'] }}
                            </h3>
                            <p class="text-[11px] text-white/60 font-black uppercase tracking-[0.2em] leading-relaxed opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500">
                                {{ $v['desc'] }}
                            </p>
                        </div>
                    </div>

                    <!-- Sharp Accent Plate -->
                    <div class="absolute bottom-0 left-0 w-1 h-0 bg-brand-accent group-hover:h-full transition-all duration-700"></div>
                </div>
            @endforeach
        </div>
    </div>
</section>
