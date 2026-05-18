<section class="py-16 bg-white relative overflow-hidden border-b border-slate-100">
 <div class="container relative z-10">
  <!-- Sharp Header -->
  <div class="flex flex-col lg:flex-row items-start justify-between gap-8 mb-16">
   <div class="max-w-2xl space-y-4">
    <div class="section-heading">
     <span class="subtitle text-xs font-black tracking-[0.2em] text-slate-400 uppercase">The Global Foundation</span>
     <h2 class="text-3xl md:text-4xl font-black text-slate-900 tracking-tight uppercase mt-2">World <span class="text-brand-primary">Grexpo.</span></h2>
     <div class="accent-line bg-brand-primary w-12 h-1 mt-3"></div>
    </div>
    <p class="text-sm md:text-base text-slate-500 leading-relaxed font-normal">
     World Grexpo Foundation (WGF) is a Global Think-Tank architecting the future of industrial sustainability and cross-border trade excellence.
    </p>
   </div>
  </div>

  <!-- Sharp Bento Grid -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-0 border border-slate-200">
   <!-- Vision Card -->
   <div class="md:col-span-2 bg-white p-8 md:p-12 space-y-6 border-b md:border-b-0 md:border-r border-slate-200">
    <div class="flex items-center gap-3">
     <span class="w-8 h-1 bg-brand-primary"></span>
     <span class="text-[10px] font-bold uppercase tracking-[0.25em] text-slate-400">Institutional Mandate</span>
    </div>
    <h3 class="text-xl md:text-2xl font-black text-slate-900 leading-snug uppercase tracking-tight">
     Architecting a <span class="text-brand-primary">Global Industrial Ecosystem</span> where growth and sustainability are structurally inseparable.
    </h3>
    <p class="text-sm md:text-base text-slate-500 leading-relaxed font-normal">
     We operate at the absolute intersection of industrial innovation and environmental stewardship, driving the global transition toward a zero-carbon economy.
    </p>
   </div>

   <!-- Stats Column -->
   <div class="bg-slate-950 p-8 md:p-12 flex flex-col justify-between space-y-8">
    <div class="space-y-6">
     <div class="flex items-center gap-3">
      <span class="w-6 h-[1px] bg-brand-accent"></span>
      <span class="text-[9px] font-bold uppercase tracking-[0.25em] text-brand-accent">Global Impact</span>
     </div>
     <div class="grid grid-cols-1 gap-6">
      <div>
       <span class="block text-2xl md:text-3xl font-black text-white tracking-tight">30+</span>
       <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-500">Nations Reached</span>
      </div>
      <div>
       <span class="block text-2xl md:text-3xl font-black text-white tracking-tight">{{ count(config('sectors.sectors')) }}</span>
       <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-500">Strategic Sectors</span>
      </div>
     </div>
    </div>
   </div>
  </div>

  <!-- Focus Grid -->
  <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border-x border-b border-slate-200">
   @php
    $focus = [
     ['icon' => 'fa-leaf', 'label' => 'Green Hydrogen', 'desc' => 'Next-gen energy nodes'],
     ['icon' => 'fa-cloud-sun', 'label' => 'Carbon Neutrality', 'desc' => 'Zero-emission mandates'],
     ['icon' => 'fa-recycle', 'label' => 'Circular Economy', 'desc' => 'Waste-to-wealth logic'],
     ['icon' => 'fa-water', 'label' => 'ESG Frameworks', 'desc' => 'Governance excellence'],
    ];
   @endphp
   @foreach($focus as $item)
    <div class="bg-white p-6 md:p-8 group hover:bg-slate-50 transition-all">
     <div class="w-10 h-10 bg-slate-50 flex items-center justify-center mb-6 group-hover:bg-brand-primary group-hover:text-white transition-all border border-slate-100">
      <i class="fa-solid {{ $item['icon'] }} text-sm text-slate-700 group-hover:text-white"></i>
     </div>
     <h4 class="text-xs font-black uppercase tracking-wider text-slate-900 mb-1">{{ $item['label'] }}</h4>
     <p class="text-xs text-slate-400 font-medium">{{ $item['desc'] }}</p>
    </div>
   @endforeach
  </div>
 </div>
</section>
