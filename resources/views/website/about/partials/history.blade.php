<section class="py-16 bg-white relative overflow-hidden border-b border-slate-100">
 <div class="container relative z-10">
  <!-- Section Header -->
  <div class="text-left max-w-3xl mb-16">
   <div class="inline-flex items-center gap-2 px-3 py-1 bg-slate-950 border-l-2 border-brand-accent mb-6">
    <span class="text-white text-[10px] font-black tracking-[0.25em] uppercase">Institutional Trajectory</span>
   </div>
   <h2 class="text-3xl md:text-4xl font-black text-slate-950 mb-4 tracking-tight uppercase leading-tight">
    Our Structural <span class="text-brand-accent">History.</span>
   </h2>
   <p class="text-slate-500 text-sm md:text-base font-normal leading-relaxed border-l-2 border-slate-200 pl-6 max-w-xl">
    The strategic evolution of the world's most influential industrial sustainability foundation nodes.
   </p>
  </div>

  <!-- Vertical Timeline Journey -->
  <div class="relative max-w-5xl">
   <!-- Central Line -->
   <div class="hidden md:block absolute top-0 left-12 w-px h-full bg-slate-200"></div>

   <div class="space-y-12">
    @php
     $history = [
      ['y' => '2019', 't' => 'The Genesis Node', 'd' => 'Formally architected under Section 8 of the Companies Act with a distinct vision to uplift global industrial units.', 'i' => 'seedling'],
      ['y' => '2021', 't' => 'Global Node Expansion', 'd' => 'Dr. Indrajit Ghosh leads institutional delegations to multiple nations, establishing absolute export mechanisms.', 'i' => 'globe'],
      ['y' => '2024', 't' => 'Strategic Synergy', 'd' => 'A monumental institutional partnership forming unshakeable bonds between industrial units and research nodes.', 'i' => 'handshake'],
      ['y' => '2026', 't' => 'The Apex Mandate', 'd' => 'Setting the absolute stage for the Sustainable Global Tex Trade Fair, a landmark institutional event.', 'i' => 'flag-checkered']
     ];
    @endphp

    @foreach($history as $h)
    <div class="relative flex flex-col md:flex-row items-start group">
     <!-- Node point -->
     <div class="hidden md:flex absolute left-12 w-12 h-12 bg-white border border-slate-200 rounded-sm items-center justify-center -translate-x-1/2 z-10 group-hover:bg-slate-950 group-hover:border-slate-950 transition-all duration-500 shadow-md">
      <span class="text-[10px] font-black text-slate-950 group-hover:text-brand-accent transition-colors">{{ $h['y'] }}</span>
     </div>
     
     <div class="md:ml-24 w-full">
      <div class="p-6 md:p-8 bg-slate-50 border border-slate-100 rounded-sm group-hover:bg-slate-950 transition-all duration-500 relative overflow-hidden">
       <div class="absolute top-0 right-0 p-6 opacity-[0.03] group-hover:opacity-[0.08] transition-all">
        <i class="fa-solid fa-{{ $h['i'] }} text-7xl text-slate-900 group-hover:text-white"></i>
       </div>
       <div class="md:hidden inline-block px-3 py-1 bg-slate-950 text-brand-accent font-bold text-[10px] mb-4 rounded-sm">{{ $h['y'] }}</div>
       <h3 class="text-lg md:text-xl font-black text-slate-950 mb-3 group-hover:text-white uppercase tracking-tight transition-colors leading-none">{{ $h['t'] }}</h3>
       <p class="text-xs md:text-sm text-slate-500 leading-relaxed font-normal group-hover:text-slate-300 transition-colors max-w-xl">
        {{ $h['d'] }}
       </p>
      </div>
     </div>
    </div>
    @endforeach

   </div>
  </div>
 </div>
</section>
