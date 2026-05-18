<section class="py-20 bg-slate-50 relative overflow-hidden border-b border-slate-100">
 <!-- Industrial Accents -->
 <div class="absolute top-0 left-0 w-1/3 h-full bg-brand-primary opacity-5 -skew-x-12 -translate-x-1/2"></div>
 
 <div class="container relative z-10">
  <!-- Section Header -->
  <div class="max-w-4xl mb-24 animate-on-scroll">
   <div class="space-y-8">
    <div class="section-heading">
     <span class="subtitle">Institutional DNA</span>
     <h2 class="text-4xl md:text-5xl font-bold text-slate-900 tracking-tight uppercase">The <span class="text-brand-primary">POWER</span> Framework.</h2>
     <div class="accent-line"></div>
    </div>
    <p class="text-lg text-slate-500 leading-relaxed max-w-3xl font-medium">
     The structural DNA of World Grexpo Foundation is built upon the proprietary POWER framework, driving absolute precision in global industrial governance.
    </p>
   </div>
  </div>

  <!-- P-O-W-E-R Grid -->
  <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-1 bg-slate-200 border border-slate-200 shadow-2xl">
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
    <div class="p-12 bg-white group hover:bg-slate-900 transition-all duration-700 animate-on-scroll">
     <div class="space-y-10">
      <div class="w-14 h-14 bg-slate-50 border border-slate-100 flex items-center justify-center text-brand-primary hover:bg-brand-primary hover:text-white hover:border-brand-primary transition-all shadow-sm">
       <i class="fa-solid {{ $p['icon'] }} text-lg"></i>
      </div>
      
      <div class="space-y-6">
       <div class="flex items-baseline gap-4">
        <span class="text-2xl font-bold text-brand-primary leading-none">{{ $p['l'] }}</span>
        <h4 class="text-xl font-bold text-slate-900 hover:text-white uppercase tracking-tight transition-colors leading-none">{{ $p['t'] }}</h4>
       </div>
       <p class="text-[10px] font-bold text-slate-400 hover:text-white/40 uppercase tracking-[0.2em] leading-relaxed transition-colors">{{ $p['d'] }}</p>
      </div>
      
      <!-- Industrial Progress -->
      <div class="pt-4">
       <div class="h-1 w-full bg-slate-100 hover:bg-white/5 overflow-hidden">
        <div class="h-full bg-brand-primary w-0 hover:w-full transition-all duration-1000 ease-out"></div>
       </div>
      </div>
     </div>
    </div>
   @endforeach
  </div>
 </div>
</section>
