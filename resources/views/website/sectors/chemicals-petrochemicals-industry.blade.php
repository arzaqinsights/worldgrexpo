@extends('layouts.website')

@section('title', 'Chemicals & Petrochemicals Industry Overview')

@section('content')

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="{{ asset('images/sectors/chemicals-petrochemicals-industry.jpg') }}" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-indigo-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-indigo-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-indigo-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Global Manufacturing Backbone</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    Chemicals & <br>
    <span class="text-indigo-600">Petrochemicals.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-indigo-600 pl-10 md:text-center mx-auto">
    Backbone of Modern Manufacturing & Industrial Transformation.
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
      <span class="subtitle">Industrial Foundation Architecture</span>
      <h2 class="text-3xl font-bold text-slate-900">Primary <br><span class="text-indigo-600">Transformation.</span></h2>
      <div class="accent-line bg-indigo-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       From everyday consumer products to advanced industrial applications, the <strong class="text-slate-900 font-bold ">Chemicals & Petrochemicals sector</strong> forms the invisible foundation of the global economy.
      </p>
      <p>
       It powers industries ranging from agriculture and healthcare to automotive, construction, packaging, and energy, transforming raw materials into thousands of value-added products.
      </p>
     </div>
    </div>

    <div class="grid grid-cols-2 gap-px bg-slate-200 shadow-sm">
     @php
      $segments = [
       ['icon' => 'flask-vial', 'label' => 'Basic Chemicals', 'color' => 'indigo'],
       ['icon' => 'oil-well', 'label' => 'Petrochemicals', 'color' => 'indigo'],
       ['icon' => 'vial-circle-check', 'label' => 'Specialty Chemicals', 'color' => 'indigo'],
       ['icon' => 'clover', 'label' => 'Agrochemicals', 'color' => 'indigo'],
      ];
     @endphp
     @foreach($segments as $s)
      <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all relative overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-indigo-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <div class="w-20 h-20 mx-auto mb-10 bg-slate-50 border border-slate-100 flex items-center justify-center text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white transition-all shadow-sm duration-500">
        <i class="fa-solid fa-{{ $s['icon'] }} text-3xl font-bold"></i>
       </div>
       <p class="text-[10px] font-bold text-slate-900 group-hover:text-white uppercase tracking-[0.3em] leading-tight transition-colors">{{ $s['label'] }}</p>
      </div>
     @endforeach
    </div>
   </div>

   <!-- Snapshot Bento -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <div class="p-12 bg-slate-950 space-y-16 relative group">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(79,70,229,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-12">
      <div class="text-indigo-400 text-[10px] font-bold uppercase tracking-[0.4em]">Sector Metrics</div>
      <h3 class="text-4xl font-bold text-white leading-tight">Industry <br>Snapshot.</h3>
      <p class="text-2xl text-slate-500 font-medium leading-relaxed border-l-4 border-white/10 pl-10 ">
       Structural transformation driven by sustainability, innovation, and global supply chain realignment.
      </p>
      <div class="space-y-8 pt-12 border-t border-white/5">
       @foreach([
        'Global Market Size (2025): USD 5.5T+',
        'Projected Market Size (2031): USD 7.5T+',
        'Expected Growth Rate: ~5–6% CAGR',
        'India Market Outlook (2031): USD 400B'
       ] as $stat)
        <div class="flex items-center gap-8 group/item">
         <div class="w-2 h-2 bg-indigo-500 group-hover/item:scale-150 transition-transform duration-500"></div>
         <span class="text-[12px] font-bold uppercase text-slate-400 tracking-[0.3em] group-hover/item:text-white transition-colors duration-500 leading-tight">{{ $stat }}</span>
        </div>
       @endforeach
      </div>
     </div>
    </div>

    <div class="grid grid-cols-2 gap-px bg-slate-200">
     <div class="p-8 lg:p-12 bg-white space-y-10 group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
       <div class="absolute top-0 left-0 w-1 h-full bg-slate-950 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
      <p class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.4em] transition-colors group-hover:text-slate-500">India (2025)</p>
      <h4 class="text-7xl font-bold text-slate-950 group-hover:text-white transition-colors tracking-tight ">$220B+</h4>
     </div>
     <div class="p-8 lg:p-12 bg-white space-y-10 group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
       <div class="absolute top-0 left-0 w-1 h-full bg-indigo-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
      <p class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.4em] transition-colors group-hover:text-slate-500">India (2031)</p>
      <h4 class="text-7xl font-bold text-indigo-600 group-hover:text-indigo-400 transition-colors tracking-tight ">$400B</h4>
     </div>
     <div class="col-span-2 p-8 lg:p-12 bg-slate-50 space-y-10 text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
       <div class="absolute top-0 left-0 w-full h-1 bg-indigo-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
       <div class="text-[10px] font-bold uppercase tracking-[0.4em] text-indigo-600 group-hover:text-indigo-400">Sector Status</div>
       <h4 class="text-3xl font-bold text-slate-950 group-hover:text-white transition-colors leading-tight">Rising Sector Momentum</h4>
     </div>
    </div>
   </div>

   <!-- Global Hub Strategy -->
   <div class="grid lg:grid-cols-2 gap-32 items-center">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 shadow-sm">
     @foreach([
      ['t' => 'Basic Chemicals', 'd' => 'Industrial Chemicals'],
      ['t' => 'Petrochemicals', 'd' => 'Polymers & Olefins'],
      ['t' => 'Specialty Chemicals', 'd' => 'Adhesives & Coatings'],
      ['t' => 'Agrochemicals', 'd' => 'Fertilizers & Protection'],
     ] as $idx => $pill)
     <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all relative overflow-hidden">
      <div class="absolute top-0 left-0 w-1 h-full bg-indigo-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
      <p class="text-[10px] font-bold uppercase text-indigo-600 group-hover:text-indigo-400 tracking-[0.4em] mb-6 transition-colors">Segment 0{{ $idx + 1 }}</p>
      <p class="text-3xl font-bold text-slate-950 group-hover:text-white leading-tight mb-4 transition-colors">{{ $pill['t'] }}</p>
      <p class="text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em] transition-colors">{{ $pill['d'] }}</p>
     </div>
     @endforeach
    </div>

    <div class="space-y-16">
     <div class="section-heading text-left">
      <span class="subtitle">Global Manufacturing Expansion</span>
      <h2 class="text-3xl font-bold text-slate-900">India: A <br><span class="text-indigo-600">Global Hub.</span></h2>
      <div class="accent-line bg-indigo-600"></div>
     </div>
     <p class="text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8 ">
      India is emerging as a strategic alternative in global supply chains, fueled by competitive manufacturing and domestic demand.
     </p>
     <div class="space-y-10 pt-8">
      @foreach([
       'Competitive manufacturing costs',
       'Strong domestic demand across sectors',
       'Government PLI schemes & clusters',
       'China+1 diversification strategy'
      ] as $item)
      <div class="flex items-center gap-10 group">
       <div class="w-2 h-2 bg-indigo-500 group-hover:scale-150 transition-transform duration-500"></div>
       <p class="text-[14px] font-bold uppercase text-slate-700 tracking-[0.2em] transition-all duration-500 group-hover:translate-x-6 leading-tight group-hover:text-slate-950">{{ $item }}</p>
      </div>
      @endforeach
     </div>
    </div>
   </div>

   <!-- Connectivity Grid -->
   <div class="space-y-12">
    <div class="text-center space-y-4">
     <span class="text-indigo-600 text-[10px] font-bold uppercase tracking-[0.4em]">Integrated Industrial Web</span>
     <h3 class="text-4xl font-bold text-slate-900">Industry Connectivity</h3>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 shadow-sm">
     @foreach(['Packaging & FMCG', 'Agriculture', 'Automotive', 'Construction', 'Healthcare', 'Textiles'] as $eco)
      <div class="p-12 bg-white text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-1 bg-indigo-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
        <div class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-600 group-hover:text-white transition-colors leading-tight">{{ $eco }}</div>
      </div>
     @endforeach
    </div>
   </div>

   <!-- Strategic Importance -->
   <div class="grid lg:grid-cols-2 gap-32 items-center">
    <div class="space-y-16">
     <div class="section-heading text-left">
      <span class="subtitle">Systemic Impact Architecture</span>
      <h2 class="text-3xl font-bold text-slate-900">Strategic <br><span class="text-indigo-600">Significance.</span></h2>
      <div class="accent-line bg-indigo-600"></div>
     </div>
     <div class="space-y-px bg-slate-200 border border-slate-200 shadow-sm">
      @foreach([
       'Core input provider for nearly all manufacturing',
       'Drives industrial growth & export competitiveness',
       'Enables material & product innovation',
       'Supports sustainability & advanced materials',
       'Significant contribution to GDP & employment'
      ] as $imp)
      <div class="flex items-center gap-10 p-12 bg-white group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
       <div class="absolute top-0 left-0 w-1 h-full bg-indigo-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <i class="fa-solid fa-check text-indigo-400 text-2xl font-bold transition-colors group-hover:text-indigo-500"></i>
       <span class="text-[14px] font-bold uppercase tracking-[0.15em] text-slate-900 group-hover:text-white transition-colors leading-tight">{{ $imp }}</span>
      </div>
      @endforeach
     </div>
    </div>

    <div class="p-8 lg:p-12 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-sm">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(79,70,229,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-12">
      <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-indigo-400 text-[10px] font-bold uppercase tracking-[0.4em]">
       Future Evolution
      </div>
      <h4 class="text-4xl font-bold text-indigo-600">The Transition <br><span class="text-white">Ahead.</span></h4>
      <p class="text-2xl text-slate-400 font-medium border-l-8 border-indigo-600/30 pl-10 leading-relaxed ">
       Low-carbon technologies, hydrogen feedstocks, and green chemicals will define the next decade of industrial transformation.
      </p>
      <div class="grid grid-cols-2 gap-px bg-white/5 pt-12">
        @foreach(['GREEN CHEM', 'ESG FOCUS', 'HYDROGEN', 'CIRCULAR'] as $tag)
        <span class="p-6 bg-slate-950 border border-white/5 text-[10px] font-bold uppercase tracking-[0.4em] text-indigo-300 text-center hover:bg-indigo-600 hover:text-slate-950 transition-all cursor-default">{{ $tag }}</span>
        @endforeach
      </div>
     </div>
    </div>
   </div>

   <!-- Conclusion CTA -->
   <div class="relative p-12 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-sm group">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(79,70,229,0.2),transparent)]"></div>
    <div class="relative z-10 space-y-16">
     <h3 class="text-3xl md:text-5xl font-bold text-white leading-[0.85]">
      Industrial <br><span class="text-indigo-600">Foundation.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-indigo-600 pl-10 md:text-center mx-auto">
      India stands at a pivotal point to become a global leader in chemical manufacturing and exports. Join the mission to shape the future of industrial manufacturing.
     </p>
     <div class="flex justify-center">
      <a href="{{ route('join.index') }}" 
       class="btn-sharp px-16 group !border-indigo-600/30 hover:!bg-indigo-600">
       Register for Chemical Support 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

@endsection
