@extends('layouts.website')

@section('title', 'Other Types of Packaging')

@section('content')

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="{{ asset('images/sectors/other-types-of-packaging.webp') }}" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(79,70,229,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-indigo-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-indigo-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-indigo-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Packaging Intelligence Protocol</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    Specialized <br>
    <span class="text-indigo-600">Packaging.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-indigo-600 pl-10 md:text-center mx-auto">
    Industrial, protective, retail, luxury, transport, and sustainable packaging solutions across all sectors.
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
      <span class="subtitle">Material Diversity Framework</span>
      <h2 class="text-3xl font-bold text-slate-900">Packaging <br><span class="text-indigo-600">Spectrum.</span></h2>
      <div class="accent-line bg-indigo-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       <strong class="text-slate-900 font-bold ">Other Types of Packaging</strong> include a wide range of industrial, protective, retail, luxury, and transport solutions used across manufacturing and logistics.
      </p>
      <p>
       Designed for product safety, branding, and transportation, these materials are the invisible engine behind global e-commerce and retail expansion.
      </p>
     </div>
    </div>

    <div class="relative group">
     <div class="absolute inset-0 bg-indigo-600/10"></div>
     <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-sm">
      <img src="{{ asset('images/sectors/other-types-of-packaging.webp') }}" alt="Specialized Packaging"
       class="w-full h-full object-cover transition-all duration-1000">
     </div>
     <div class="absolute bottom-0 left-0 p-8">
      <div class="bg-indigo-600 text-white text-[10px] font-bold px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
       Material Standard
      </div>
     </div>
    </div>
   </div>

   <!-- Categories Grid -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <div class="p-12 bg-slate-950 text-white space-y-16">
     <h3 class="text-3xl font-bold text-slate-900 text-indigo-500 border-l-8 border-indigo-600 pl-10">Major Categories</h3>
     <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
      @foreach([
       ['icon' => 'box-open', 'label' => 'Corrugated & Paper'],
       ['icon' => 'gift', 'label' => 'Folding Boxes'],
       ['icon' => 'gem', 'label' => 'Luxury Packaging'],
       ['icon' => 'industry', 'label' => 'Industrial Bulk'],
       ['icon' => 'shield-halved', 'label' => 'Protective Systems'],
       ['icon' => 'tree', 'label' => 'Wooden Pallets'],
      ] as $cat)
       <div class="p-10 bg-slate-950 group/item hover:bg-indigo-600 transition-all duration-500 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-white scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
        <i class="fa-solid fa-{{ $cat['icon'] }} text-3xl mb-6 text-indigo-600 group-hover/item:text-slate-950 transition-colors"></i>
        <p class="text-[12px] font-bold uppercase text-slate-400 group-hover/item:text-slate-950 tracking-[0.2em] leading-tight transition-colors ">{{ $cat['label'] }}</p>
       </div>
      @endforeach
     </div>
    </div>

    <div class="p-12 bg-white space-y-16 border-l border-slate-200">
     <h3 class="text-3xl font-bold text-slate-900 border-l-8 border-slate-950 pl-10">Functional Outputs</h3>
     <div class="grid grid-cols-2 gap-4">
      @foreach(['Metal/Tin Cans', 'Glass Bottles', 'Blister Packs', 'Flexible Pouches', 'Kraft Wraps', 'Protective Films'] as $prod)
       <div class="p-10 bg-white border border-slate-100 flex items-center justify-center group/prod hover:bg-slate-950 transition-all duration-700 shadow-sm">
        <span class="text-[12px] font-bold uppercase text-slate-500 group-hover/prod:text-white tracking-[0.3em] transition-colors text-center">{{ $prod }}</span>
       </div>
      @endforeach
     </div>
     <p class="text-[12px] font-bold text-slate-400 uppercase tracking-widest text-center ">Advanced Logistics Solutions</p>
    </div>
   </div>

   <!-- Global vs India Market -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <!-- GLOBAL -->
    <div class="p-8 lg:p-12 bg-slate-950 text-white relative overflow-hidden group">
     <div class="absolute top-0 right-0 p-12 text-indigo-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-earth-americas text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16">
      <div class="space-y-4">
       <div class="text-indigo-400 text-[10px] font-bold uppercase tracking-[0.4em]">International Value</div>
       <h3 class="text-3xl font-bold text-slate-900">Global Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$1.2 Trillion</span>
       </div>
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Annual CAGR</span>
        <span class="text-4xl font-bold text-indigo-500 tracking-tight ">6%</span>
       </div>
      </div>
     </div>
    </div>

    <!-- INDIA -->
    <div class="p-8 lg:p-12 bg-white relative overflow-hidden group border-l border-slate-200">
     <div class="absolute top-0 right-0 p-12 text-indigo-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-industry text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16 text-right">
      <div class="space-y-4">
       <div class="text-indigo-600 text-[10px] font-bold uppercase tracking-[0.4em]">National Strategy</div>
       <h3 class="text-3xl font-bold text-slate-950 ">Indian Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-slate-100 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-slate-950 tracking-tight ">₹90,000 Cr</span>
       </div>
       <div class="flex items-end justify-between border-b border-slate-100 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.3em]">Growth Potential</span>
        <span class="text-4xl font-bold text-indigo-600 tracking-tight ">11%</span>
       </div>
       <div class="p-12 bg-indigo-50 border-l-8 border-indigo-600 shadow-sm text-right">
        <p class="text-[9px] font-bold text-indigo-600 uppercase tracking-[0.4em] mb-4 ">Industrial Outlook</p>
        <p class="text-3xl font-bold text-slate-950 uppercase leading-tight tracking-tight">Packaging Hub</p>
       </div>
      </div>
     </div>
    </div>
   </div>

   <!-- Architecture CTA -->
   <div class="relative p-12 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-sm group">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(79,70,229,0.2),transparent)]"></div>
    <div class="relative z-10 space-y-16">
     <h3 class="text-3xl md:text-5xl font-bold text-white leading-[0.85]">
      The Shield <br><span class="text-indigo-600">Framework.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-indigo-600 pl-10 md:text-center mx-auto ">
      World Grexpo is the bridge connecting master-manufacturers of specialized packaging with global retail and logistics industries.
     </p>
     <div class="flex justify-center">
      <a href="{{ route('join.index') }}" 
       class="btn-sharp px-16 group !border-indigo-600/30 hover:!bg-indigo-600">
       Partner for Packaging 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

@endsection
