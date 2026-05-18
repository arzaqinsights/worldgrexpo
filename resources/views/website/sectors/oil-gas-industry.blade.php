@extends('layouts.website')

@section('title', 'Oil & Gas Industry Overview')

@section('content')

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="{{ asset('images/sectors/oil-gas-hero.png') }}" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(249,115,22,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-orange-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-orange-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-orange-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Global Energy Protocol</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    Oil & <br>
    <span class="text-orange-600">Gas.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-orange-600 pl-10 md:text-center mx-auto">
    The global energy cornerstone, powering industries, transportation, and households worldwide.
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
      <span class="subtitle">Energy Backbone Framework</span>
      <h2 class="text-3xl font-bold text-slate-900">Hydrocarbon <br><span class="text-orange-600">Dynamics.</span></h2>
      <div class="accent-line bg-orange-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       <strong class="text-slate-900 font-bold ">The Oil & Gas industry</strong> involves the exploration, extraction, and refining of petroleum, natural gas, LNG, and other hydrocarbon resources.
      </p>
      <p>
       Despite the rise of renewables, these resources continue to dominate the global energy mix and play a crucial role in ensuring energy security and industrial productivity across the globe.
      </p>
     </div>
    </div>

    <div class="relative group">
     <div class="absolute inset-0 bg-orange-600/10"></div>
     <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-sm">
      <img src="{{ asset('images/sectors/oil-gas-hero.png') }}" alt="Oil & Gas Industry"
       class="w-full h-full object-cover transition-all duration-1000">
     </div>
     <div class="absolute top-0 right-0 p-8">
      <div class="bg-orange-600 text-white text-[10px] font-bold px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
       Energy Standard
      </div>
     </div>
    </div>
   </div>

   <!-- Global vs India Market -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <!-- GLOBAL -->
    <div class="p-8 lg:p-12 bg-slate-950 text-white relative overflow-hidden group">
     <div class="absolute top-0 right-0 p-12 text-orange-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-earth-americas text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16">
      <div class="space-y-4">
       <div class="text-orange-400 text-[10px] font-bold uppercase tracking-[0.4em]">Global Landscape</div>
       <h3 class="text-3xl font-bold text-slate-900">Global Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$5.3T+</span>
       </div>
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Projected (2032)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$15T</span>
       </div>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-500 uppercase tracking-[0.4em]">Market Share</h4>
       <div class="p-8 bg-white/5 border border-white/10 shadow-2xl">
         <p class="text-[10px] font-bold text-orange-400 uppercase tracking-[0.4em] mb-4 ">Dominant Region</p>
         <p class="text-2xl font-bold text-white uppercase leading-tight tracking-tight">35% APAC Share</p>
         <p class="text-sm text-slate-500 mt-4 ">Leading global consumption & refining.</p>
       </div>
      </div>
     </div>
    </div>

    <!-- INDIA -->
    <div class="p-8 lg:p-12 bg-white relative overflow-hidden group border-l border-slate-200">
     <div class="absolute top-0 right-0 p-12 text-orange-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-gas-pump text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16 text-right">
      <div class="space-y-4">
       <div class="text-orange-600 text-[10px] font-bold uppercase tracking-[0.4em]">National Momentum</div>
       <h3 class="text-3xl font-bold text-slate-900 ">Indian Market</h3>
      </div>
      
      <div class="p-12 bg-orange-50 border-l-8 border-orange-600 shadow-sm text-right space-y-6">
       <p class="text-[9px] font-bold text-orange-600 uppercase tracking-[0.4em] ">Market Projection</p>
       <p class="text-4xl font-bold text-slate-950 uppercase leading-tight tracking-tight">$31.24B Expected</p>
       <p class="text-[12px] font-bold text-slate-500 uppercase tracking-widest ">2031 Expansion Target</p>
      </div>

      <div class="space-y-8 text-left">
       <h4 class="text-[9px] font-bold text-slate-400 uppercase tracking-[0.4em] text-right">Refining Hubs</h4>
       <div class="grid grid-cols-3 gap-6 shadow-sm">
        @foreach(['Mumbai', 'Gujarat', 'Assam', 'Andhra Pradesh', 'Tamil Nadu', 'Delhi NCR'] as $city)
         <div class="p-6 bg-white flex flex-col items-center justify-center gap-4 group/item hover:bg-slate-950 transition-all duration-500">
          <div class="w-1.5 h-1.5 bg-orange-600 group-hover/item:scale-150 transition-transform"></div>
          <span class="text-[9px] font-bold uppercase text-slate-600 group-hover/item:text-white tracking-[0.1em] leading-tight text-center">{{ $city }}</span>
         </div>
        @endforeach
       </div>
      </div>
     </div>
    </div>
   </div>

   <!-- Stats Grid -->
   <div class="grid grid-cols-2 md:grid-cols-4 gap-6 shadow-sm">
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-orange-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110">5.9M</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Barrels/Day (India)</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-orange-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">3rd</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Consumer Rank</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-orange-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">23</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Active Refineries</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-orange-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">~16%</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Annual CAGR</p>
    </div>
   </div>

   <!-- Opportunities & Position -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <div class="p-12 bg-white space-y-16">
     <div class="section-heading text-left">
      <span class="subtitle">Market Horizons</span>
      <h2 class="text-3xl font-bold text-slate-900">Emerging <br><span class="text-orange-600">Opportunities.</span></h2>
      <div class="accent-line bg-orange-600"></div>
     </div>
     
     <div class="grid grid-cols-1 gap-4">
      @php
       $items = [
        ['icon' => 'truck-moving', 'title' => 'LNG Infra Development'],
        ['icon' => 'diagram-project', 'title' => 'Gas Pipeline Expansion'],
        ['icon' => 'industry', 'title' => 'Petrochemical Manufacturing'],
        ['icon' => 'building-shield', 'title' => 'Refinery Expansion'],
        ['icon' => 'ship', 'title' => 'Offshore Exploration'],
        ['icon' => 'leaf', 'title' => 'Hydrogen Integration'],
       ];
      @endphp
      @foreach($items as $i)
      <div class="flex items-center gap-10 p-10 bg-slate-50 group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
       <div class="absolute top-0 left-0 w-1 h-full bg-orange-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-orange-600 group-hover/opp:bg-orange-600 group-hover/opp:text-white transition-all duration-500 shadow-sm">
        <i class="fa-solid fa-{{ $i['icon'] }} text-2xl"></i>
       </div>
       <span class="text-xl font-bold uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight ">{{ $i['title'] }}</span>
      </div>
      @endforeach
     </div>
    </div>

    <div class="p-12 bg-slate-950 text-white space-y-12 relative overflow-hidden group border-l border-slate-200">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(249,115,22,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-16">
      <div class="space-y-4">
       <div class="text-orange-400 text-[10px] font-bold uppercase tracking-[0.4em]">Future Outlook</div>
       <h3 class="text-3xl font-bold text-white ">Energy Mix</h3>
      </div>
      <p class="text-2xl text-slate-400 font-medium border-l-4 border-orange-600/30 pl-10 leading-relaxed ">
       Oil & Gas remains a cornerstone of global development, powering transportation, industries, and households.
      </p>
      <div class="grid grid-cols-2 gap-4 pt-12">
        <div class="p-8 bg-slate-950 border border-white/5 flex flex-col items-center gap-4 group/item hover:bg-orange-600 transition-all duration-500">
         <i class="fa-solid fa-industry text-orange-600 text-3xl group-hover:text-slate-950 transition-colors"></i>
         <span class="text-[10px] font-bold uppercase text-slate-300 group-hover:text-slate-950 tracking-[0.2em] transition-colors leading-tight">Refining Hub</span>
        </div>
        <div class="p-8 bg-slate-950 border border-white/5 flex flex-col items-center gap-4 group/item hover:bg-orange-600 transition-all duration-500">
         <i class="fa-solid fa-leaf text-orange-600 text-3xl group-hover:text-slate-950 transition-colors"></i>
         <span class="text-[10px] font-bold uppercase text-slate-300 group-hover:text-slate-950 tracking-[0.2em] transition-colors leading-tight">Hydrogen Tech</span>
        </div>
      </div>
     </div>
    </div>
   </div>

   <!-- Conclusion CTA -->
   <div class="relative p-12 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-sm group">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(249,115,22,0.2),transparent)]"></div>
    <div class="relative z-10 space-y-16">
     <h3 class="text-3xl md:text-5xl font-bold text-white leading-[0.85]">
      Energy <br><span class="text-orange-600">Dynamics.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-orange-600 pl-10 md:text-center mx-auto ">
      The industrial ecosystem depends on stable energy supplies. Join World Grexpo to explore EPC and refinery supply opportunities.
     </p>
     <div class="flex justify-center">
      <a href="{{ route('join.index') }}" 
       class="btn-sharp px-16 group !border-orange-600/30 hover:!bg-orange-600">
       Register for Energy Support 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

@endsection
