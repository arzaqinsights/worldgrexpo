@if(isset($galleryImages) && $galleryImages->count() > 0)
<section class="section-padding bg-white relative overflow-hidden border-b border-slate-100">
    <!-- Industrial Background Accents -->
    <div class="absolute top-0 right-0 w-1/3 h-full bg-slate-50/50 -z-0"></div>
    <div class="absolute top-0 left-0 w-12 h-full bg-[repeating-linear-gradient(45deg,transparent,transparent_10px,rgba(0,0,0,0.02)_10px,rgba(0,0,0,0.02)_20px)]"></div>

    <div class="container relative z-10">
        <!-- Sharp Section Header -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-12 mb-24">
            <div class="max-w-3xl space-y-8">
                <div class="section-heading">
                    <span class="subtitle">Visual Legacy</span>
                    <h2>Moments That <span class="text-brand-primary">Define Us.</span></h2>
                    <div class="accent-line"></div>
                </div>
                <p class="text-xl text-slate-500 font-medium leading-relaxed max-w-2xl">
                    Experience the global impact of World Grexpo through a curated selection of milestones, summits, and transformative networking events.
                </p>
            </div>
            <a href="{{ route('gallery') }}" 
                class="btn-sharp group">
                Explore Full Gallery <i class="fa-solid fa-arrow-right-long ml-4 group-hover:translate-x-3 transition-transform"></i>
            </a>
        </div>

        <!-- Sharp Asymmetrical Bento Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-1 bg-slate-100 border border-slate-100 auto-rows-[250px]">
            @foreach($galleryImages->take(8) as $idx => $img)
                @php
                    $spans = [
                        0 => 'md:col-span-2 md:row-span-2', // Large Feature
                        1 => 'md:col-span-1 md:row-span-1', // Regular
                        2 => 'md:col-span-1 md:row-span-2', // Tall
                        3 => 'md:col-span-1 md:row-span-1', // Regular
                        4 => 'md:col-span-2 md:row-span-1', // Wide
                        5 => 'md:col-span-1 md:row-span-1', // Regular
                        6 => 'md:col-span-1 md:row-span-1', // Regular
                        7 => 'md:col-span-2 md:row-span-1', // Wide Bottom
                    ];
                    $spanClass = $spans[$idx % 8] ?? 'md:col-span-1 md:row-span-1';
                @endphp
                
                <div class="{{ $spanClass }} group relative overflow-hidden bg-slate-900 transition-all duration-700">
                    
                    <!-- Sharp Visual -->
                    <img src="{{ asset($img->image_path) }}"
                         alt="{{ $img->title ?? $img->category }}"
                         class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105 opacity-80 group-hover:opacity-100"
                         loading="lazy">
                    
                    <!-- Sharp Industrial Overlay -->
                    <!-- <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div> -->
                    
                    <!-- Sharp Badge Overlay -->
                    @if($img->category)
                        <div class="absolute top-0 left-0 p-6 z-20 hidden md:block">
                            <span class="px-4 py-1.5 bg-brand-primary text-[8px] font-black text-white uppercase tracking-[0.2em] shadow-2xl">
                                {{ $img->category }}
                            </span>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif
