<section class="py-20 bg-white relative overflow-hidden border-b border-slate-100">
 <div class="container relative z-10">
  <!-- Sharp Header -->
  <div class="flex flex-col lg:flex-row items-end justify-between gap-12 mb-20">
   <div class="max-w-3xl space-y-8">
    <div class="section-heading">
     <span class="subtitle">The Global Foundation</span>
     <h2 class="text-4xl md:text-5xl font-bold text-slate-900 tracking-tight uppercase">World <span class="text-brand-primary">Grexpo.</span></h2>
     <div class="accent-line"></div>
    </div>
    <p class="text-lg text-slate-500 leading-relaxed max-w-2xl font-medium">
     World Grexpo Foundation (WGF) is a Global Think-Tank architecting the future of industrial sustainability and cross-border trade excellence.
    </p>
   </div>
  </div>

  <!-- Sharp Bento Grid -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-1 border border-slate-100">
   <!-- Vision Card -->
   <div class="md:col-span-2 bg-white space-y-8 border-b md:border-b-0 md:border-r border-slate-100">
    <div class="flex items-center gap-4">
     <span class="w-12 h-1 bg-brand-primary"></span>
     <span class="text-[10px] font-bold uppercase tracking-[0.3em] text-slate-400">Institutional Mandate</span>
    </div>
    <h3 class="text-3xl font-bold text-slate-900 leading-tight uppercase tracking-tight">
     Architecting a <span class="text-brand-primary">Global Industrial Ecosystem</span> where growth and sustainability are structurally inseparable.
    </h3>
    <p class="text-lg text-slate-500 leading-relaxed font-medium">
     We operate at the absolute intersection of industrial innovation and environmental stewardship, driving the global transition toward a zero-carbon economy.
    </p>
   </div>

   <!-- Stats Column -->
   <div class="bg-slate-950 p-6 flex flex-col justify-between space-y-6">
    <div class="space-y-8">
     <div class="flex items-center gap-4">
      <span class="w-8 h-[1px] bg-brand-accent"></span>
      <span class="text-[9px] font-bold uppercase tracking-[0.3em] text-brand-accent">Global Impact</span>
     </div>
     <div class="grid grid-cols-1 gap-8">
      <div>
       <span class="block text-3xl md:text-4xl lg:text-3xl font-bold text-white tracking-tight">30+</span>
       <span class="text-[9px] font-bold uppercase tracking-[0.3em] text-slate-500">Nations Reached</span>
      </div>
      <div>
       <span class="block text-3xl md:text-4xl lg:text-3xl font-bold text-white tracking-tight">{{ count(config('sectors.sectors')) }}</span>
       <span class="text-[9px] font-bold uppercase tracking-[0.3em] text-slate-500">Strategic Sectors</span>
      </div>
     </div>
    </div>
    <!-- <div class="pt-8 border-t border-white/10">
     <p class="text-[11px] font-bold text-white/40 uppercase tracking-widest leading-loose">
      Operated by World Grexpo Foundation. <br>Section-8 Not-for-Profit.
     </p>
    </div> -->
   </div>

   <!-- Focus Grid -->
   <div class="md:col-span-3 grid grid-cols-2 md:grid-cols-4 gap-px bg-slate-100 mt-20">
    @php
     $focus = [
      ['icon' => 'fa-leaf', 'label' => 'Green Hydrogen', 'desc' => 'Next-gen energy nodes'],
      ['icon' => 'fa-cloud-sun', 'label' => 'Carbon Neutrality', 'desc' => 'Zero-emission mandates'],
      ['icon' => 'fa-recycle', 'label' => 'Circular Economy', 'desc' => 'Waste-to-wealth logic'],
      ['icon' => 'fa-water', 'label' => 'ESG Frameworks', 'desc' => 'Governance excellence'],
     ];
    @endphp
    @foreach($focus as $item)
     <div class="bg-white p-8 border border-slate-300 group hover:bg-slate-100 hover:border-brand-primary transition-all">
      <div class="w-10 h-10 bg-slate-50 flex items-center justify-center mb-6 hover:bg-brand-primary hover:text-white transition-all">
       <i class="fa-solid {{ $item['icon'] }} text-xs"></i>
      </div>
      <h4 class="text-[11px] font-bold uppercase tracking-widest text-slate-900 mb-2">{{ $item['label'] }}</h4>
      <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">{{ $item['desc'] }}</p>
     </div>
    @endforeach
   </div>
  </div>
 </div>
</section>

