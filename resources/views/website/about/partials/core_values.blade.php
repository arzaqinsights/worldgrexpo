<section class="py-16 bg-slate-50 relative overflow-hidden border-b border-slate-100">
 <!-- Industrial Accents -->
 <div class="absolute top-0 left-0 w-1/3 h-full bg-brand-primary opacity-[0.02] -skew-x-12 -translate-x-1/2"></div>
  
 <div class="container relative z-10">
  <!-- Section Header -->
  <div class="max-w-3xl mb-16 animate-on-scroll">
   <div class="space-y-4">
    <div class="section-heading">
     <span class="subtitle text-xs font-black tracking-[0.2em] text-slate-400 uppercase">Institutional DNA</span>
     <h2 class="text-3xl md:text-4xl font-black text-slate-900 tracking-tight uppercase mt-2">The <span class="text-brand-primary">POWER</span> Framework.</h2>
     <div class="accent-line bg-brand-primary w-12 h-1 mt-3"></div>
    </div>
    <p class="text-sm md:text-base text-slate-500 leading-relaxed max-w-xl font-normal">
     The structural DNA of World Grexpo Foundation is built upon the proprietary POWER framework, driving absolute precision in global industrial governance.
    </p>
   </div>
  </div>

  <!-- P-O-W-E-R Grid -->
  <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-1 bg-slate-200 border border-slate-200 shadow-xl">
   @php
    $power = [
     ['l' => 'P', 't' => 'Passion', 'd' => 'Unwavering institutional dedication to our mission and nodes.', 'icon' => 'fa-fire-flame-curved'],
     ['l' => 'O', 't' => 'Ownership', 'd' => 'Taking absolute responsibility for global industrial outcomes.', 'icon' => 'fa-hand-holding-heart'],
     ['l' => 'W', 't' => 'Work-Life', 'd' => 'Promoting a sustainable balance for industrial visionaries.', 'icon' => 'fa-scale-balanced'],
     ['l' => 'E', 't' => 'Excellence', 'd' => 'Consistently exceeding absolute global industrial standards.', 'icon' => 'fa-award'],
     ['l' => 'R', 't' => 'Respect', 'd' => 'Operating with absolute institutional integrity and honor.', 'icon' => 'fa-handshake'],
    ];
   @endphp

   @foreach($power as $idx => $p)
    <div class="p-6 md:p-8 bg-white group hover:bg-slate-900 transition-all duration-500">
     <div class="space-y-6">
      <div class="w-10 h-10 bg-slate-50 border border-slate-100 flex items-center justify-center text-brand-primary group-hover:bg-brand-primary group-hover:text-white group-hover:border-brand-primary transition-all shadow-sm">
       <i class="fa-solid {{ $p['icon'] }} text-sm"></i>
      </div>
      
      <div class="space-y-4">
       <div class="flex items-baseline gap-2">
        <span class="text-xl font-black text-brand-primary leading-none">{{ $p['l'] }}</span>
        <h4 class="text-sm font-black text-slate-900 group-hover:text-white uppercase tracking-wider transition-colors leading-none">{{ $p['t'] }}</h4>
       </div>
       <p class="text-xs text-slate-500 group-hover:text-slate-400 font-normal leading-relaxed transition-colors">{{ $p['d'] }}</p>
      </div>
      
      <!-- Industrial Progress -->
      <div class="pt-2">
       <div class="h-1 w-full bg-slate-100 group-hover:bg-white/5 overflow-hidden">
        <div class="h-full bg-brand-primary w-0 group-hover:w-full transition-all duration-700 ease-out"></div>
       </div>
      </div>
     </div>
    </div>
   @endforeach
  </div>
 </div>
</section>
