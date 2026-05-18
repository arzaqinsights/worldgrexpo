@extends('layouts.website')

@section('title', 'Import & Export Industry Overview')

@section('content')

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="{{ asset('images/sectors/import-export.jpg') }}" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(37,99,235,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-blue-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-blue-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-blue-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Global Logistics Protocol</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    Import & <br>
    <span class="text-blue-600">Export.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-blue-600 pl-10 md:text-center mx-auto">
    Driving Global Trade and International Business Expansion.
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
      <span class="subtitle">Global Commerce Framework</span>
      <h2 class="text-3xl font-bold text-slate-900">Backbone of <br><span class="text-blue-600">Commerce.</span></h2>
      <div class="accent-line bg-blue-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       <strong class="text-slate-900 font-bold ">Import and Export</strong> enable countries, businesses, and industries to exchange goods and services across international borders, connecting manufacturers with global consumers.
      </p>
      <p>
       It plays a vital role in supporting economic development and industrial growth while facilitating trade across key sectors such as manufacturing, agriculture, and pharmaceuticals.
      </p>
     </div>
    </div>

    <div class="grid grid-cols-2 gap-px bg-slate-200">
     @php
      $sectors = [
       ['icon' => 'industry', 'label' => 'Industrial Goods'],
       ['icon' => 'wheat-awn', 'label' => 'Agriculture'],
       ['icon' => 'pills', 'label' => 'Pharmaceuticals'],
       ['icon' => 'microchip', 'label' => 'Electronics'],
      ];
     @endphp
     @foreach($sectors as $sec)
      <div class="p-12 bg-white flex flex-col items-center justify-center text-center group hover:bg-slate-950 transition-all duration-700">
       <i class="fa-solid fa-{{ $sec['icon'] }} text-4xl mb-6 text-blue-600 transition-transform duration-500 group-hover:scale-110"></i>
       <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-400 group-hover:text-white">{{ $sec['label'] }}</p>
      </div>
     @endforeach
    </div>
   </div>

   <!-- Global vs India Market -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <!-- GLOBAL -->
    <div class="p-8 lg:p-12 bg-slate-950 text-white relative overflow-hidden group">
     <div class="absolute top-0 right-0 p-12 text-blue-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-earth-world text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16">
      <div class="space-y-4">
       <div class="text-blue-400 text-[10px] font-bold uppercase tracking-[0.4em]">Global Landscape</div>
       <h3 class="text-3xl font-bold text-slate-900">Global Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$33T+</span>
       </div>
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Value (2031)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$45T+</span>
       </div>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-500 uppercase tracking-[0.4em]">Growth Drivers</h4>
       <div class="grid grid-cols-2 gap-4">
        @foreach(['Global e-commerce', 'Trade Agreements', 'Globalization', 'Digital Markets'] as $driver)
         <div class="px-8 py-4 bg-slate-950 flex items-center gap-6 hover:bg-blue-600 hover:text-slate-950 transition-colors cursor-default group/item">
          <i class="fa-solid fa-circle-check text-blue-600 group-hover/item:text-slate-950 transition-colors"></i>
          <span class="text-[10px] font-bold uppercase tracking-[0.1em] text-center">{{ $driver }}</span>
         </div>
        @endforeach
       </div>
      </div>
     </div>
    </div>

    <!-- INDIA -->
    <div class="p-8 lg:p-12 bg-white relative overflow-hidden group border-l border-slate-200">
     <div class="absolute top-0 right-0 p-12 text-blue-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-ship text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16 text-right">
      <div class="space-y-4">
       <div class="text-blue-600 text-[10px] font-bold uppercase tracking-[0.4em]">National Momentum</div>
       <h3 class="text-3xl font-bold text-slate-900 ">Indian Market</h3>
      </div>
      
      <div class="p-12 bg-blue-50 border-l-8 border-blue-600 shadow-sm text-right space-y-6">
       <p class="text-[9px] font-bold text-blue-600 uppercase tracking-[0.4em] ">Market Forecast</p>
       <p class="text-4xl font-bold text-slate-950 uppercase leading-tight tracking-tight">$3 Trillion Target</p>
       <p class="text-[12px] font-bold text-slate-500 uppercase tracking-widest ">2031 Trade Volume Objective</p>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-400 uppercase tracking-[0.4em]">Growth Catalysts</h4>
       <div class="grid grid-cols-2 gap-6 shadow-sm">
        @foreach(['Make in India', 'PLI Schemes', 'Global FTAs', 'Logistics Infra'] as $cat)
         <div class="p-6 bg-white flex flex-col items-center justify-center gap-4 group/item hover:bg-slate-950 transition-all duration-500">
          <div class="w-1.5 h-1.5 bg-blue-600 group-hover/item:scale-150 transition-transform"></div>
          <span class="text-[9px] font-bold uppercase text-slate-600 group-hover/item:text-white tracking-[0.1em] leading-tight text-center">{{ $cat }}</span>
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
     <h4 class="text-4xl font-bold text-blue-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110">6-8%</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global CAGR</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-blue-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">1.5L</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Active Traders</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-blue-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">$1.7T</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Volume (2025)</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-blue-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">TOP 10</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Exporter Rank</p>
    </div>
   </div>

   <!-- Opportunities & Innovation -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <div class="p-12 bg-white space-y-16">
     <div class="section-heading text-left">
      <span class="subtitle">Global Horizons</span>
      <h2 class="text-3xl font-bold text-slate-900">High-Growth <br><span class="text-blue-600">Segments.</span></h2>
      <div class="accent-line bg-blue-600"></div>
     </div>
     
     <div class="grid grid-cols-2 gap-6 shadow-sm">
      @foreach(['E-commerce Trade', 'Export Consulting', 'Freight Forwarding', 'Supply Chain Tech', 'Trade Compliance', 'Customs Solutions', 'Warehousing', 'Digital Logistics'] as $seg)
       <div class="p-8 bg-white text-center group/seg hover:bg-slate-950 transition-all duration-500">
        <p class="text-[10px] font-bold uppercase text-slate-500 group-hover:text-white tracking-[0.2em] transition-colors leading-tight">{{ $seg }}</p>
       </div>
      @endforeach
     </div>
    </div>

    <div class="p-12 bg-slate-950 text-white space-y-12 relative overflow-hidden group border-l border-slate-200">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(37,99,235,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-16">
      <div class="space-y-4">
       <div class="text-blue-400 text-[10px] font-bold uppercase tracking-[0.4em]">Future Outlook</div>
       <h3 class="text-3xl font-bold text-white ">Digital Trade</h3>
      </div>
      <p class="text-2xl text-slate-400 font-medium border-l-4 border-blue-600/30 pl-10 leading-relaxed ">
       The future of trade is being reshaped by AI-based trade intelligence, blockchain supply chains, and green logistics.
      </p>
      <div class="grid grid-cols-2 gap-4 pt-12">
        @foreach(['AI-TRADE', 'BLOCKCHAIN', 'GREEN LOGISTICS', 'SMART PORTS'] as $tag)
        <div class="p-8 bg-slate-950 border border-white/5 flex flex-col items-center gap-4 group/item hover:bg-blue-600 transition-all duration-500">
         <span class="text-[10px] font-bold uppercase text-slate-300 group-hover:text-slate-950 tracking-[0.2em] transition-colors leading-tight">{{ $tag }}</span>
        </div>
        @endforeach
      </div>
     </div>
    </div>
   </div>

   <!-- Conclusion CTA -->
   <div class="relative p-12 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-sm group">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(37,99,235,0.2),transparent)]"></div>
    <div class="relative z-10 space-y-16">
     <h3 class="text-3xl md:text-5xl font-bold text-white leading-[0.85]">
      Global <br><span class="text-blue-600">Expansion.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-blue-600 pl-10 md:text-center mx-auto ">
      Bridge the gap between domestic production and international demand. Join the ecosystem of global traders to lead the next era of commerce.
     </p>
     <div class="flex justify-center">
      <a href="{{ route('join.index') }}" 
       class="btn-sharp px-16 group !border-blue-600/30 hover:!bg-blue-600">
       Register for Trade Support 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

@endsection
