@extends('layouts.website')

@section('title', 'Hydrogen Industry Overview')

@section('content')

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="{{ asset('images/sectors/hydrogen-industry.jpg') }}" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(14,165,233,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-sky-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-sky-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-sky-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Clean Energy Protocol</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    Hydrogen <br>
    <span class="text-sky-600">Industry.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-sky-600 pl-10 md:text-center mx-auto">
    Clean and versatile energy carrier powering global decarbonization.
   </p>
  </div>
 </section>

 <!-- Content Interface -->
 <section class="py-20 bg-white relative">
  <div class="container space-y-20">

   <!-- Executive Summary -->
   <div class="grid lg:grid-cols-2 gap-6">
    <div class="p-8 lg:p-12 bg-white space-y-12">
     <div class="section-heading text-left">
      <span class="subtitle">Next-Gen Energy Carrier</span>
      <h2 class="text-3xl font-bold text-slate-900">Hydrogen <br><span class="text-sky-600">Dynamics.</span></h2>
      <div class="accent-line bg-sky-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       <strong class="text-slate-900 font-bold ">Hydrogen</strong> is a clean and versatile energy carrier used for power generation, industrial processes, mobility, and energy storage.
      </p>
      <p>
       It is considered one of the most promising fuels for achieving global decarbonization and net-zero emissions, produced through electrolysis, reforming, and biomass conversion.
      </p>
     </div>
    </div>

    <div class="relative group">
     <div class="absolute inset-0 bg-sky-600/10"></div>
     <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-sm">
      <img src="{{ asset('images/sectors/hydrogen-industry.jpg') }}" alt="Hydrogen Industry"
       class="w-full h-full object-cover transition-all duration-1000">
     </div>
     <div class="absolute top-0 right-0 p-8">
      <div class="bg-sky-600 text-white text-[10px] font-bold px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
       Fuel of the Future
      </div>
     </div>
    </div>
   </div>

   <!-- Hydrogen Segments -->
   <div class="space-y-12">
    <div class="text-center space-y-4">
     <span class="text-sky-600 text-[10px] font-bold uppercase tracking-[0.4em]">Resource Classification</span>
     <h3 class="text-4xl font-bold text-slate-900">Major Segments</h3>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-6 shadow-sm">
     @php
      $segments = [
       ['icon' => 'leaf', 'title' => 'Green Hydrogen', 'color' => 'emerald'],
       ['icon' => 'droplet', 'title' => 'Blue Hydrogen', 'color' => 'blue'],
       ['icon' => 'smog', 'title' => 'Grey Hydrogen', 'color' => 'slate'],
       ['icon' => 'bolt', 'title' => 'Fuel Cells', 'color' => 'violet'],
       ['icon' => 'database', 'title' => 'H2 Storage', 'color' => 'amber'],
       ['icon' => 'car-side', 'title' => 'H2 Mobility', 'color' => 'sky'],
       ['icon' => 'industry', 'title' => 'Industrial Apps', 'color' => 'rose'],
      ];
     @endphp
     @foreach($segments as $s)
      <div class="p-10 bg-slate-50 rounded-2xl p-8 flex flex-col items-center text-center group hover:shadow-lg transition-all">
       <div class="absolute top-0 left-0 w-1 h-full bg-{{ $s['color'] }}-500 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <div class="w-16 h-16 mb-8 border border-slate-100 bg-slate-50 flex items-center justify-center text-{{ $s['color'] }}-600 group-hover:bg-{{ $s['color'] }}-600 group-hover:text-white transition-all duration-500 shadow-sm">
        <i class="fa-solid fa-{{ $s['icon'] }} text-2xl"></i>
       </div>
       <h4 class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-400 group-hover:text-white transition-colors leading-tight ">{{ $s['title'] }}</h4>
      </div>
     @endforeach
    </div>
   </div>

   <!-- Global vs India Market -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <!-- GLOBAL -->
    <div class="p-8 lg:p-12 bg-slate-950 text-white relative overflow-hidden group">
     <div class="absolute top-0 right-0 p-12 text-sky-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-earth-americas text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16">
      <div class="space-y-4">
       <div class="text-sky-400 text-[10px] font-bold uppercase tracking-[0.4em]">Global Decarbonization</div>
       <h3 class="text-3xl font-bold text-slate-900">Global Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$230B</span>
       </div>
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Projected (2032)</span>
        <span class="text-4xl font-bold text-sky-500 tracking-tight ">$410B</span>
       </div>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-500 uppercase tracking-[0.4em]">Market Drivers</h4>
       <div class="grid grid-cols-2 gap-4">
        @foreach(['Net-Zero Commitments', 'Industrial Fuel Replacement', 'Green Mobility', 'Govt Subsidies'] as $driver)
         <div class="p-8 bg-slate-950 text-center text-[10px] font-bold uppercase tracking-[0.1em] text-slate-400 hover:bg-sky-600 hover:text-slate-950 transition-all cursor-default">{{ $driver }}</div>
        @endforeach
       </div>
      </div>
     </div>
    </div>

    <!-- INDIA -->
    <div class="p-8 lg:p-12 bg-white relative overflow-hidden group border-l border-slate-200">
     <div class="absolute top-0 right-0 p-12 text-sky-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-industry text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16 text-right">
      <div class="space-y-4">
       <div class="text-sky-600 text-[10px] font-bold uppercase tracking-[0.4em]">National Momentum</div>
       <h3 class="text-3xl font-bold text-slate-950 ">Indian Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-slate-100 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-slate-950 tracking-tight ">₹30K Cr</span>
       </div>
       <div class="flex items-end justify-between border-b border-slate-100 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.3em]">Annual CAGR</span>
        <span class="text-4xl font-bold text-sky-600 tracking-tight ">30%</span>
       </div>
       <div class="p-12 bg-sky-50 border-l-8 border-sky-600 shadow-sm text-right">
        <p class="text-[9px] font-bold text-sky-600 uppercase tracking-[0.4em] mb-4 ">Target (2031)</p>
        <p class="text-3xl font-bold text-slate-950 uppercase leading-tight tracking-tight">₹1.5 Lakh Cr+</p>
       </div>
      </div>
     </div>
    </div>
   </div>

   <!-- Stats Grid -->
   <div class="grid grid-cols-2 md:grid-cols-4 gap-6 shadow-sm">
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-sky-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110">$230B+</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Size</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-sky-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">₹30K Cr</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Size</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-sky-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">5 MMT</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India 2030 Target</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-sky-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">25-30%</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Growth</p>
    </div>
   </div>

   <!-- Trends & Opportunities -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <div class="p-12 bg-slate-950 text-white space-y-16">
     <h3 class="text-3xl font-bold text-slate-900 border-l-8 border-sky-600 pl-10">Emerging Trends</h3>
     <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
      @foreach([
       ['icon' => 'industry', 'label' => 'Mega Plants'],
       ['icon' => 'car-side', 'label' => 'Fuel Cell EVs'],
       ['icon' => 'pipe-section', 'label' => 'H2 Blending'],
       ['icon' => 'ship', 'label' => 'Ammonia Exports'],
       ['icon' => 'gas-pump', 'label' => 'Refueling Infra'],
       ['icon' => 'wind', 'label' => 'Offshore H2'],
      ] as $trend)
       <div class="p-10 bg-slate-950 group/item hover:bg-sky-600 transition-all duration-500 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-white scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
        <i class="fa-solid fa-{{ $trend['icon'] }} text-3xl mb-6 text-sky-600 group-hover/item:text-slate-950 transition-colors"></i>
        <p class="text-[12px] font-bold uppercase text-slate-400 group-hover/item:text-slate-950 tracking-[0.2em] leading-tight transition-colors ">{{ $trend['label'] }}</p>
       </div>
      @endforeach
     </div>
    </div>

    <div class="p-12 bg-white space-y-16 border-l border-slate-200">
     <h3 class="text-3xl font-bold text-slate-900 border-l-8 border-slate-950 pl-10">High Potential</h3>
     <div class="space-y-px bg-slate-200 border border-slate-200 shadow-sm">
      @foreach([
       ['icon' => 'gears', 'label' => 'Electrolyzer Manufacturing'],
       ['icon' => 'database', 'label' => 'Storage & Transportation'],
       ['icon' => 'bolt', 'label' => 'Fuel Cell Manufacturing'],
       ['icon' => 'flask', 'label' => 'Green Ammonia Production'],
       ['icon' => 'building', 'label' => 'Infrastructure Development'],
       ['icon' => 'industry', 'label' => 'Industrial Conversion'],
      ] as $opp)
      <div class="flex items-center gap-10 p-10 bg-white group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
       <div class="absolute top-0 left-0 w-1 h-full bg-sky-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <i class="fa-solid fa-{{ $opp['icon'] }} text-2xl text-sky-600 group-hover/opp:text-white transition-colors"></i>
       <span class="text-xl font-bold uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight ">{{ $opp['label'] }}</span>
      </div>
      @endforeach
     </div>
    </div>
   </div>

   <!-- Global Position -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm">
    <div class="p-12 bg-slate-50 space-y-16">
     <h3 class="text-3xl font-bold text-slate-900 border-l-8 border-sky-600 pl-10">Capacity Hubs</h3>
     <div class="grid grid-cols-2 gap-4">
      @foreach(['Gujarat', 'Rajasthan', 'Maharashtra', 'Tamil Nadu', 'Odisha', 'Andhra Pradesh'] as $state)
       <div class="p-10 bg-white border border-slate-100 flex items-center justify-center group/state hover:bg-slate-950 transition-all duration-700 shadow-sm">
        <span class="text-[12px] font-bold uppercase text-slate-500 group-hover/state:text-white tracking-[0.3em] transition-colors ">{{ $state }}</span>
       </div>
      @endforeach
     </div>
     <p class="text-[12px] font-bold text-slate-400 uppercase tracking-widest text-center ">Key Indian Development States</p>
    </div>

    <div class="p-12 bg-slate-950 text-white space-y-16 relative overflow-hidden group">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(14,165,233,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-12">
       <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-sky-400 text-[10px] font-bold uppercase tracking-[0.4em]">
       Global Advantage
      </div>
      <h4 class="text-4xl font-bold text-sky-600">The Export <br><span class="text-white">Mandate.</span></h4>
      <p class="text-lg text-slate-400 leading-relaxed border-l-4 border-sky-600 pl-6">
       India aims to become the lowest-cost producer of green hydrogen globally.
      </p>
      <div class="grid grid-cols-2 gap-px bg-white/5 pt-12 border border-white/10">
        @foreach(['EUROPE', 'JAPAN', 'KOREA', 'GLOBAL SOUTH'] as $target)
        <span class="p-8 bg-slate-950 border border-white/5 text-[10px] font-bold uppercase tracking-[0.4em] text-sky-300 text-center hover:bg-sky-600 hover:text-slate-950 transition-all cursor-default">{{ $target }}</span>
        @endforeach
      </div>
     </div>
    </div>
   </div>

   <!-- Conclusion CTA -->
   <div class="relative p-12 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-sm group">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(14,165,233,0.2),transparent)]"></div>
    <div class="relative z-10 space-y-16">
     <h3 class="text-3xl md:text-5xl font-bold text-white leading-[0.85]">
      The Hydrogen <br><span class="text-sky-600">Economy.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-sky-600 pl-10 md:text-center mx-auto ">
      Massive global investments are transforming the energy landscape. Join the mission to build a sustainable and technologically advanced industrial future.
     </p>
     <div class="flex justify-center">
      <a href="{{ route('join.index') }}" 
       class="btn-sharp px-16 group !border-sky-600/30 hover:!bg-sky-600">
       Explore Hydrogen Support 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

@endsection
