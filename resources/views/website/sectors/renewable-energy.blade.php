@extends('layouts.website')

@section('title', 'Renewable Energy (Solar & Wind)')

@section('content')

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="{{ asset('images/sectors/renewable-energy.png') }}" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(16,185,129,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-emerald-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-emerald-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-emerald-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Sustainable Power Protocol</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    Renewable <br>
    <span class="text-emerald-600">Energy.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-emerald-600 pl-10 md:text-center mx-auto">
    Clean and sustainable power generation through Solar and Wind technology.
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
      <span class="subtitle">Natural Resource Architecture</span>
      <h2 class="text-3xl font-bold text-slate-900">Sustainable <br><span class="text-emerald-600">Generation.</span></h2>
      <div class="accent-line bg-emerald-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       <strong class="text-slate-900 font-bold ">Renewable Energy</strong> refers to energy generated from naturally replenishing sources such as sunlight, wind, and biomass.
      </p>
      <p>
       Solar and Wind are the fastest-growing technologies globally due to falling costs and strong policies, playing a critical role in reducing global emissions.
      </p>
     </div>
    </div>

    <div class="relative group">
     <div class="absolute inset-0 bg-emerald-600/10"></div>
     <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-sm">
      <img src="{{ asset('images/sectors/renewable-energy.png') }}" alt="Renewable Energy"
       class="w-full h-full object-cover transition-all duration-1000">
     </div>
     <div class="absolute top-0 right-0 p-8">
      <div class="bg-emerald-600 text-white text-[10px] font-bold px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
       Eco-Friendly Power
      </div>
     </div>
    </div>
   </div>

   <!-- Global vs India Market -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <!-- GLOBAL -->
    <div class="p-8 lg:p-12 bg-slate-950 text-white relative overflow-hidden group">
     <div class="absolute top-0 right-0 p-12 text-emerald-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-earth-americas text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16">
      <div class="space-y-4">
       <div class="text-emerald-400 text-[10px] font-bold uppercase tracking-[0.4em]">International Transition</div>
       <h3 class="text-3xl font-bold text-slate-900">Global Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$1.8T</span>
       </div>
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Projected (2031)</span>
        <span class="text-4xl font-bold text-emerald-500 tracking-tight ">$4T</span>
       </div>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-500 uppercase tracking-[0.4em]">Market Drivers</h4>
       <div class="grid grid-cols-2 gap-4">
        @foreach(['Net Zero Targets', 'Fossil Replacement', 'Solar Cost Reduction', 'E-Mobility Growth'] as $driver)
         <div class="p-8 bg-slate-950 text-center text-[10px] font-bold uppercase tracking-[0.1em] text-slate-400 hover:bg-emerald-600 hover:text-slate-950 transition-all cursor-default">{{ $driver }}</div>
        @endforeach
       </div>
      </div>
     </div>
    </div>

    <!-- INDIA -->
    <div class="p-8 lg:p-12 bg-white relative overflow-hidden group border-l border-slate-200">
     <div class="absolute top-0 right-0 p-12 text-emerald-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-industry text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16 text-right">
      <div class="space-y-4">
       <div class="text-emerald-600 text-[10px] font-bold uppercase tracking-[0.4em]">National Leadership</div>
       <h3 class="text-3xl font-bold text-slate-950 ">Indian Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-slate-100 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-slate-950 tracking-tight ">$150B</span>
       </div>
       <div class="flex items-end justify-between border-b border-slate-100 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.3em]">Annual CAGR</span>
        <span class="text-4xl font-bold text-emerald-600 tracking-tight ">15%</span>
       </div>
       <div class="p-12 bg-emerald-50 border-l-8 border-emerald-600 shadow-sm text-right">
        <p class="text-[9px] font-bold text-emerald-600 uppercase tracking-[0.4em] mb-4 ">Target (2031)</p>
        <p class="text-3xl font-bold text-slate-950 uppercase leading-tight tracking-tight">$350 Billion Value</p>
       </div>
      </div>
     </div>
    </div>
   </div>

   <!-- Stats Grid -->
   <div class="grid grid-cols-2 md:grid-cols-4 gap-6 shadow-sm">
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-emerald-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110">$1.8T</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Market</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-emerald-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">$150B</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Market</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-emerald-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">250 GW</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Capacity</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-emerald-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">13-15%</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Growth</p>
    </div>
   </div>

   <!-- Growth Outlook -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <div class="p-12 bg-slate-950 text-white space-y-16">
     <h3 class="text-3xl font-bold text-slate-900 text-emerald-500 border-l-8 border-emerald-600 pl-10">Global Outlook</h3>
     <div class="space-y-px bg-white/5 border border-white/5">
      @foreach([
       'Capacity expected to double by 2030',
       'Solar PV contributing 80% of new installs',
       'Offshore & hybrid wind systems expansion',
       'Battery Energy Storage integration',
       'Green Hydrogen project synergy'
      ] as $outlook)
       <div class="p-10 bg-slate-950 group/item hover:bg-emerald-600 transition-all duration-500 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-white scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
        <p class="text-[12px] font-bold uppercase text-slate-400 group-hover/item:text-slate-950 tracking-[0.2em] leading-tight transition-colors ">{{ $outlook }}</p>
       </div>
      @endforeach
     </div>
    </div>

    <div class="p-12 bg-white space-y-16 border-l border-slate-200">
     <h3 class="text-3xl font-bold text-slate-900 border-l-8 border-slate-950 pl-10">India Outlook</h3>
     <div class="space-y-px bg-slate-100 border border-slate-100 shadow-2xl">
       @foreach([
       '150 GW new capacity addition expected',
       'Utility-scale solar dominance',
       'Offshore wind revival projects',
       'Green hydrogen industrial corridors',
       'Domestic module manufacturing (PLI)'
      ] as $outlook)
       <div class="p-10 bg-white group/val hover:bg-slate-950 transition-all duration-500 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-1 bg-emerald-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
        <p class="text-[12px] font-bold uppercase text-slate-500 group-hover/val:text-white tracking-[0.2em] leading-tight transition-colors ">{{ $outlook }}</p>
       </div>
      @endforeach
     </div>
    </div>
   </div>

   <!-- Ecosystem & Highlights -->
   <div class="grid lg:grid-cols-2 gap-32 items-center">
    <div class="space-y-16">
     <div class="section-heading text-left">
      <span class="subtitle">Systemic Progress Architecture</span>
      <h2 class="text-3xl font-bold text-slate-900">Key Industry <br><span class="text-emerald-600">Highlights.</span></h2>
      <div class="accent-line bg-emerald-600"></div>
     </div>
     <div class="grid grid-cols-2 gap-6 shadow-sm">
      @foreach([
       ['icon' => 'sun', 'label' => 'Solar EPC'],
       ['icon' => 'wind', 'label' => 'Wind OEM'],
       ['icon' => 'battery-full', 'label' => 'Storage Sys'],
       ['icon' => 'bolt', 'label' => 'Grid Stability'],
      ] as $h)
       <div class="p-12 bg-white text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-1 bg-emerald-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
        <i class="fa-solid fa-{{ $h['icon'] }} text-4xl mb-6 text-emerald-600 group-hover:text-white transition-colors"></i>
        <span class="text-[12px] font-bold uppercase text-slate-700 group-hover:text-white tracking-[0.15em] transition-colors leading-tight ">{{ $h['label'] }}</span>
       </div>
      @endforeach
     </div>
    </div>

    <div class="p-8 lg:p-12 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-sm border border-white/5">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(16,185,129,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-12">
       <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-emerald-400 text-[10px] font-bold uppercase tracking-[0.4em]">
       Global Advantage
      </div>
      <h4 class="text-4xl font-bold text-emerald-600">Historic <br><span class="text-white">Transition.</span></h4>
      <p class="text-2xl text-slate-400 font-medium border-l-8 border-emerald-600/30 pl-10 leading-relaxed ">
       India is emerging as a global hub for clean energy manufacturing and investments.
      </p>
      <div class="grid grid-cols-2 gap-px bg-white/5 pt-12 border border-white/10">
        @foreach(['500 GW TARGET', 'NET ZERO 2070', 'TOP 3 MARKET', 'EXPORT HUB'] as $tag)
        <span class="p-8 bg-slate-950 border border-white/5 text-[10px] font-bold uppercase tracking-[0.4em] text-emerald-300 text-center hover:bg-emerald-600 hover:text-slate-950 transition-all cursor-default">{{ $tag }}</span>
        @endforeach
      </div>
     </div>
    </div>
   </div>

   <!-- Conclusion CTA -->
   <div class="relative p-12 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-sm group">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(16,185,129,0.2),transparent)]"></div>
    <div class="relative z-10 space-y-16">
     <h3 class="text-3xl md:text-5xl font-bold text-white leading-[0.85]">
      The Power <br><span class="text-emerald-600">Standard.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-emerald-600 pl-10 md:text-center mx-auto ">
      Renewable energy is the foundation of a carbon-neutral future. Join the historic energy transition today.
     </p>
     <div class="flex justify-center">
      <a href="{{ route('join.index') }}" 
       class="btn-sharp px-16 group !border-emerald-600/30 hover:!bg-emerald-600">
       Explore Renewable Support 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

@endsection
