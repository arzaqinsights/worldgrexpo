@php
    $excellenceAwards = \App\Models\ExcellenceAward::where('status', 'published')
        ->where('show_on_home', true)
        ->orderBy('order')
        ->take(3)
        ->get();
@endphp

@if($excellenceAwards->count() > 0)
<section class="section-padding bg-slate-50 relative overflow-hidden">
    <!-- Sophisticated Background Accents -->
    <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary/5 -skew-x-12 translate-x-1/2"></div>
    <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-brand-accent/5 rounded-full blur-[100px]"></div>

    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="flex flex-col lg:flex-row justify-between items-end mb-20 gap-10" x-data="{ visible: false }" x-intersect="visible = true">
            <div class="max-w-2xl space-y-6">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary/5 text-brand-primary text-[10px] font-black uppercase tracking-[0.2em]">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-pulse"></span>
                    Wall of Excellence
                </div>
                <h2 class="text-5xl md:text-7xl font-black text-slate-900 leading-[0.9] tracking-tighter">
                    Recognized for <span class="text-brand-primary italic">Excellence.</span>
                </h2>
                <p class="text-xl text-slate-500 font-medium leading-relaxed">
                    Celebrating visionary leadership and transformative contributions that define the future of global industry.
                </p>
            </div>
            <a href="{{ route('excellence.index') }}" 
                class="group flex items-center gap-4 px-8 py-4 rounded-2xl bg-white border border-slate-200 text-slate-900 font-black uppercase tracking-widest text-xs hover:border-brand-primary hover:text-brand-primary transition-all shadow-sm">
                Explore Full Wall <i class="fa-solid fa-arrow-right-long group-hover:translate-x-2 transition-transform"></i>
            </a>
        </div>

        <!-- Excellence Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            @foreach($excellenceAwards as $award)
                <div class="group relative flex flex-col bg-white rounded-[2.5rem] p-6 border border-slate-100 transition-all duration-700 hover:-translate-y-4 hover:shadow-2xl hover:shadow-brand-primary/5"
                    x-data="{ visible: false }" x-intersect="visible = true"
                    :class="visible ? 'translate-y-0 opacity-100' : 'translate-y-12 opacity-0'"
                    style="transition-delay: {{ $loop->index * 150 }}ms">
                    
                    <!-- Award Image -->
                    <div class="relative rounded-[2rem] overflow-hidden aspect-[4/5] mb-8">
                        <img src="{{ asset($award->award_image) }}" alt="{{ $award->title }}" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                        <div class="absolute inset-0 bg-linear-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <p class="text-white font-black text-xl leading-tight tracking-tight uppercase">{{ $award->title }}</p>
                        </div>
                    </div>
                    
                    <!-- Giver Info -->
                    <div class="flex items-center justify-between gap-4 px-2">
                        <div class="flex items-center gap-4">
                            @if($award->giver_image)
                                <div class="relative">
                                    <img src="{{ asset($award->giver_image) }}" class="w-12 h-12 rounded-2xl border-2 border-white object-cover shadow-lg">
                                    <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-brand-accent rounded-full border-2 border-white flex items-center justify-center">
                                        <i class="fa-solid fa-check text-[8px] text-brand-primary-dark"></i>
                                    </div>
                                </div>
                            @endif
                            <div>
                                <p class="text-sm font-black text-slate-900 leading-none mb-1.5 uppercase">{{ $award->giver_name }}</p>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">{{ Str::limit($award->giver_designation, 30) }}</p>
                            </div>
                        </div>

                        @if($award->pdf_path)
                            <a href="{{ asset($award->pdf_path) }}" target="_blank" 
                                class="w-10 h-10 rounded-xl bg-slate-50 text-slate-400 flex items-center justify-center hover:bg-brand-primary hover:text-white transition-all shrink-0 shadow-sm" 
                                title="View Recognition Details">
                                <i class="fa-solid fa-file-invoice"></i>
                            </a>
                        @endif
                    </div>

                    <!-- Decorative Background -->
                    <div class="absolute -inset-2 bg-brand-primary/5 blur-2xl opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none -z-10"></div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif
