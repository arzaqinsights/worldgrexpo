@extends('layouts.website')

@section('title', 'Jute Industry Overview')

@section('content')

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="{{ asset('images/sectors/jute-industry.jpg') }}" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(217,119,6,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-amber-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-amber-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-amber-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Golden Fiber Protocol</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    Jute <br>
    <span class="text-amber-600">Industry.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-amber-600 pl-10 md:text-center mx-auto">
    Empowering the future through the world's most sustainable and versatile natural material.
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
      <span class="subtitle">Sustainable Material Framework</span>
      <h2 class="text-3xl font-bold text-slate-900">Golden <br><span class="text-amber-600">Fiber.</span></h2>
      <div class="accent-line bg-amber-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       <strong class="text-slate-900 font-bold ">Jute</strong> is a natural, soft, and shiny fiber popularly known as the <strong>"Golden Fiber"</strong> due to its golden-brown color and immense economic value.
      </p>
      <p>
       It is one of the most affordable and eco-friendly natural fibers in the world. Fully biodegradable and renewable, jute is used globally for high-strength packaging, sustainable fashion, and industrial geotextiles.
      </p>
     </div>
    </div>

    <div class="relative group">
     <div class="absolute inset-0 bg-amber-600/10"></div>
     <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-sm">
      <img src="{{ asset('images/sectors/jute-industry.jpg') }}" alt="Jute Industry"
       class="w-full h-full object-cover transition-all duration-1000">
     </div>
     <div class="absolute top-0 right-0 p-8">
      <div class="bg-amber-600 text-white text-[10px] font-bold px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
       Sustainability Standard
      </div>
     </div>
    </div>
   </div>

   <!-- Global vs India Market -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <!-- GLOBAL -->
    <div class="p-8 lg:p-12 bg-slate-950 text-white relative overflow-hidden group">
     <div class="absolute top-0 right-0 p-12 text-amber-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-leaf text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16">
      <div class="space-y-4">
       <div class="text-amber-400 text-[10px] font-bold uppercase tracking-[0.4em]">Global Landscape</div>
       <h3 class="text-3xl font-bold text-slate-900">Global Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$3.0B</span>
       </div>
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Projected (2035)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$5.2B</span>
       </div>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-500 uppercase tracking-[0.4em]">Demand Drivers</h4>
       <div class="grid grid-cols-2 gap-4">
        @foreach(['Plastic Bans', 'Sustainable Packing', 'Eco-Fashion', 'Agriculture'] as $driver)
         <div class="px-8 py-4 bg-slate-950 flex items-center gap-6 hover:bg-amber-600 hover:text-slate-950 transition-colors cursor-default group/item">
          <i class="fa-solid fa-circle-check text-amber-600 group-hover/item:text-slate-950 transition-colors"></i>
          <span class="text-[10px] font-bold uppercase tracking-[0.1em] text-center">{{ $driver }}</span>
         </div>
        @endforeach
       </div>
      </div>
     </div>
    </div>

    <!-- INDIA -->
    <div class="p-8 lg:p-12 bg-white relative overflow-hidden group border-l border-slate-200">
     <div class="absolute top-0 right-0 p-12 text-amber-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-flag text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16 text-right">
      <div class="space-y-4">
       <div class="text-amber-600 text-[10px] font-bold uppercase tracking-[0.4em]">National Momentum</div>
       <h3 class="text-3xl font-bold text-slate-900 ">Indian Market</h3>
      </div>
      
      <div class="p-12 bg-amber-50 border-l-8 border-amber-600 shadow-sm text-right space-y-6">
       <p class="text-[9px] font-bold text-amber-600 uppercase tracking-[0.4em] ">Supply Share</p>
       <p class="text-4xl font-bold text-slate-950 uppercase leading-tight tracking-tight">60% World Raw Jute</p>
       <p class="text-[12px] font-bold text-slate-500 uppercase tracking-widest ">Largest Global Producer</p>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-400 uppercase tracking-[0.4em]">Producing States</h4>
       <div class="grid grid-cols-3 gap-6 shadow-sm">
        @foreach(['West Bengal', 'Bihar', 'Assam', 'Odisha', 'Meghalaya'] as $state)
         <div class="p-6 bg-white flex flex-col items-center justify-center gap-4 group/item hover:bg-slate-950 transition-all duration-500 text-center">
          <div class="w-1.5 h-1.5 bg-amber-600 group-hover/item:scale-150 transition-transform"></div>
          <span class="text-[9px] font-bold uppercase text-slate-600 group-hover/item:text-white tracking-[0.1em] leading-tight">{{ $state }}</span>
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
     <h4 class="text-4xl font-bold text-amber-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110">7.3%</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India CAGR</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-amber-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">60%</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Output Share</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-amber-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">80</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Major Jute Mills</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-amber-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">90%+</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Regional Output</p>
    </div>
   </div>

   <!-- Opportunities & Innovation -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <div class="relative overflow-hidden group">
     <div class="absolute inset-0 bg-amber-600/10"></div>
     <div class="relative overflow-hidden border border-slate-200 shadow-sm h-[600px]">
      <img src="{{ asset('images/sectors/handicraft.webp') }}" alt="Jute Opportunities"
       class="w-full h-full object-cover transition-all duration-1000">
     </div>
     <div class="absolute bottom-0 right-0 p-12">
      <div class="bg-amber-600 text-white p-10 space-y-2 border-r-8 border-white/20 shadow-2xl text-right">
       <p class="text-3xl font-bold tracking-tight uppercase ">#1</p>
       <p class="text-[10px] font-bold uppercase tracking-[0.3em] opacity-80">Raw Jute Producer</p>
      </div>
     </div>
    </div>

    <div class="p-12 bg-white space-y-16">
     <div class="section-heading text-left">
      <span class="subtitle">Circular Materials</span>
      <h2 class="text-3xl font-bold text-slate-900">Emerging <br><span class="text-amber-600">Markets.</span></h2>
      <div class="accent-line bg-amber-600"></div>
     </div>
     
     <div class="grid grid-cols-1 gap-4">
      @php
       $items = [
        ['icon' => 'bag-shopping', 'title' => 'Eco-Friendly Packaging Bags'],
        ['icon' => 'bullhorn', 'title' => 'Promotional Jute Bags'],
        ['icon' => 'bridge', 'title' => 'Geotextiles for Infrastructure'],
        ['icon' => 'car', 'title' => 'Automotive Jute Composites'],
        ['icon' => 'vest', 'title' => 'Sustainable Fashion & Lifestyle'],
        ['icon' => 'couch', 'title' => 'Home Furnishing & Interior'],
       ];
      @endphp
      @foreach($items as $i)
      <div class="flex items-center gap-10 p-10 bg-slate-50 group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
       <div class="absolute top-0 left-0 w-1 h-full bg-amber-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-amber-600 group-hover/opp:bg-amber-600 group-hover/opp:text-white transition-all duration-500 shadow-sm">
        <i class="fa-solid fa-{{ $i['icon'] }} text-2xl"></i>
       </div>
       <span class="text-xl font-bold uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight ">{{ $i['title'] }}</span>
      </div>
      @endforeach
     </div>
    </div>
   </div>

   <!-- Conclusion CTA -->
   <div class="relative p-12 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-sm group">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(217,119,6,0.2),transparent)]"></div>
    <div class="relative z-10 space-y-16">
     <h3 class="text-3xl md:text-5xl font-bold text-white leading-[0.85]">
      Green <br><span class="text-amber-600">Manufacturing.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-amber-600 pl-10 md:text-center mx-auto ">
      As we shift toward green manufacturing, jute is becoming a critical material in the future of global exports and packaging.
     </p>
     <div class="flex justify-center">
      <a href="{{ route('join.index') }}" 
       class="btn-sharp px-16 group !border-amber-600/30 hover:!bg-amber-600">
       Support Green Mfg 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

@endsection
