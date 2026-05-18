@extends('layouts.website')

@section('title', 'Flexible Packaging Adhesives Industry Overview')

@section('content')

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="{{ asset('images/sectors/packaging-adhesives-hero.png') }}" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(245,158,11,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-amber-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-amber-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-amber-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Bonding Intelligence Protocol</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    Packaging <br>
    <span class="text-amber-600">Adhesives.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-amber-600 pl-10 md:text-center mx-auto">
    The invisible strength behind multilayer high-performance industrial structures.
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
      <span class="subtitle">Molecular Bonding Architecture</span>
      <h2 class="text-3xl font-bold text-slate-900">Industrial <br><span class="text-amber-600">Cohesion.</span></h2>
      <div class="accent-line bg-amber-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       <strong class="text-slate-900 font-bold ">Flexible Packaging Adhesives</strong> are specialized bonding materials used in manufacturing multilayer structures like laminates and pouches.
      </p>
      <p>
       These adhesives bond materials like plastic films, foil, and paper to create durable, lightweight packaging, ensuring barrier protection and shelf-life enhancement.
      </p>
     </div>
    </div>

    <div class="relative group">
     <div class="absolute inset-0 bg-amber-600/10"></div>
     <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-sm">
      <img src="{{ asset('images/sectors/packaging-adhesives-hero.png') }}" alt="Packaging Adhesives Industry"
       class="w-full h-full object-cover transition-all duration-1000">
     </div>
     <div class="absolute top-0 right-0 p-8">
      <div class="bg-amber-600 text-white text-[10px] font-bold px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
       Structural Integrity
      </div>
     </div>
    </div>
   </div>

   <!-- Global vs India Market -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <!-- GLOBAL -->
    <div class="p-8 lg:p-12 bg-slate-950 text-white relative overflow-hidden group">
     <div class="absolute top-0 right-0 p-12 text-amber-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-earth-americas text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16">
      <div class="space-y-4">
       <div class="text-amber-400 text-[10px] font-bold uppercase tracking-[0.4em]">International Value</div>
       <h3 class="text-3xl font-bold text-slate-900">Global Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$8 Billion</span>
       </div>
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Projected (2033)</span>
        <span class="text-4xl font-bold text-amber-500 tracking-tight ">$12 Billion</span>
       </div>
      </div>

      <div class="grid grid-cols-2 gap-4">
       <div class="p-8 bg-slate-950 text-center space-y-2 group/item hover:bg-amber-600 transition-all duration-500">
        <p class="text-3xl font-bold group-hover:scale-110 transition-transform">5000+</p>
        <p class="text-[9px] font-bold uppercase text-slate-400 group-hover:text-slate-950 tracking-[0.2em]">Global Mfgrs</p>
       </div>
       <div class="p-8 bg-slate-950 text-center space-y-2 group/item hover:bg-amber-600 transition-all duration-500">
        <p class="text-3xl font-bold group-hover:scale-110 transition-transform">6% - 8%</p>
        <p class="text-[9px] font-bold uppercase text-slate-400 group-hover:text-slate-950 tracking-[0.2em]">Annual CAGR</p>
       </div>
      </div>
     </div>
    </div>

    <!-- INDIA -->
    <div class="p-8 lg:p-12 bg-white relative overflow-hidden group border-l border-slate-200">
     <div class="absolute top-0 right-0 p-12 text-amber-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-industry text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16 text-right">
      <div class="space-y-4">
       <div class="text-amber-600 text-[10px] font-bold uppercase tracking-[0.4em]">National Strategy</div>
       <h3 class="text-3xl font-bold text-slate-950 ">Indian Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-slate-100 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-slate-950 tracking-tight ">$1B+</span>
       </div>
       <div class="flex items-end justify-between border-b border-slate-100 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.3em]">Projected CAGR</span>
        <span class="text-4xl font-bold text-amber-600 tracking-tight ">12%</span>
       </div>
       <div class="p-12 bg-amber-50 border-l-8 border-amber-600 shadow-sm text-right">
        <p class="text-[9px] font-bold text-amber-600 uppercase tracking-[0.4em] mb-4 ">Economic Status</p>
        <p class="text-3xl font-bold text-slate-950 uppercase leading-tight tracking-tight">Fastest Growing Hub</p>
       </div>
      </div>
     </div>
    </div>
   </div>

   <!-- Hubs & Verticals -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <div class="p-12 bg-slate-950 text-white space-y-16">
     <h3 class="text-3xl font-bold text-slate-900 text-amber-500 border-l-8 border-amber-600 pl-10">Industrial Verticals</h3>
     <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
      @foreach([
       ['icon' => 'ban', 'label' => 'Solvent-Free'],
       ['icon' => 'droplet', 'label' => 'Water-Based'],
       ['icon' => 'shield', 'label' => 'High Barrier'],
       ['icon' => 'temperature-high', 'label' => 'Retort Apps'],
       ['icon' => 'leaf', 'label' => 'Bio-Based'],
       ['icon' => 'bolt', 'label' => 'High-Speed'],
      ] as $opp)
       <div class="p-10 bg-slate-950 group/item hover:bg-amber-600 transition-all duration-500 relative overflow-hidden text-center">
        <div class="absolute top-0 left-0 w-1 h-full bg-white scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
        <i class="fa-solid fa-{{ $opp['icon'] }} text-3xl mb-6 text-amber-600 group-hover/item:text-slate-950 transition-colors"></i>
        <p class="text-[12px] font-bold uppercase text-slate-400 group-hover/item:text-slate-950 tracking-[0.2em] leading-tight transition-colors ">{{ $opp['label'] }}</p>
       </div>
      @endforeach
     </div>
    </div>

    <div class="p-12 bg-white space-y-16 border-l border-slate-200">
     <h3 class="text-3xl font-bold text-slate-900 border-l-8 border-slate-950 pl-10">Manufacturing Hubs</h3>
     <div class="grid grid-cols-2 gap-4">
      @foreach(['Mumbai', 'Ahmedabad', 'Delhi NCR', 'Hyderabad', 'Pune', 'Chennai'] as $hub)
       <div class="p-10 bg-white border border-slate-100 flex items-center justify-center group/hub hover:bg-slate-950 transition-all duration-700 shadow-sm">
        <span class="text-[12px] font-bold uppercase text-slate-500 group-hover/hub:text-white tracking-[0.3em] transition-colors ">{{ $hub }}</span>
       </div>
      @endforeach
     </div>
     <p class="text-[12px] font-bold text-slate-400 uppercase tracking-widest text-center ">Key Indian Industrial Clusters</p>
    </div>
   </div>

   <!-- Architecture CTA -->
   <div class="relative p-12 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-sm group">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(245,158,11,0.2),transparent)]"></div>
    <div class="relative z-10 space-y-16">
     <h3 class="text-3xl md:text-5xl font-bold text-white leading-[0.85]">
      Bonding the <br><span class="text-amber-600">Future.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-amber-600 pl-10 md:text-center mx-auto ">
      Adhesives are the invisible strength of the packaging industry. World Grexpo facilitates industry transition towards solvent-free and sustainable solutions.
     </p>
     <div class="flex justify-center">
      <a href="{{ route('join.index') }}" 
       class="btn-sharp px-16 group !border-amber-600/30 hover:!bg-amber-600">
       Partner in Innovation 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

@endsection
