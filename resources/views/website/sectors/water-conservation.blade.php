@extends('layouts.website')

@section('title', 'Water Conservation Industry')

@section('content')

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="{{ asset('images/sectors/water-conservation.jpg') }}" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(37,99,235,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-blue-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-blue-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-blue-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Hydrological Resource Protocol</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    Water <br>
    <span class="text-blue-600">Conservation.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-blue-600 pl-10 md:text-center mx-auto">
    Preserving our most vital resource through efficient management and preservation.
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
      <span class="subtitle">Aqueous Optimization Architecture</span>
      <h2 class="text-3xl font-bold text-slate-900">Resource <br><span class="text-blue-600">Preservation.</span></h2>
      <div class="accent-line bg-blue-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       <strong class="text-slate-900 font-bold ">Water Conservation</strong> refers to the efficient management and sustainable use of water resources to reduce wastage.
      </p>
      <p>
       It involves strategic practices and technologies aimed at protecting freshwater resources while meeting the growing needs of industries and ecosystems.
      </p>
     </div>
    </div>

    <div class="grid grid-cols-2 gap-px bg-slate-200 shadow-sm">
     @php
      $inclusions = [
       ['icon' => 'cloud-rain', 'label' => 'Rainwater Harvesting', 'color' => 'blue'],
       ['icon' => 'recycle', 'label' => 'Wastewater Reuse', 'color' => 'cyan'],
       ['icon' => 'seedling', 'label' => 'Efficient Irrigation', 'color' => 'emerald'],
       ['icon' => 'industry', 'label' => 'Industrial Recycling', 'color' => 'indigo'],
       ['icon' => 'microchip', 'label' => 'Smart Technologies', 'color' => 'violet'],
       ['icon' => 'water', 'label' => 'Groundwater Recharge', 'color' => 'teal'],
      ];
     @endphp
     @foreach($inclusions as $inc)
      <div class="p-10 bg-slate-50 rounded-2xl p-8 flex flex-col items-center text-center group hover:shadow-lg transition-all">
        <div class="absolute top-0 left-0 w-1 h-full bg-{{ $inc['color'] }}-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <i class="fa-solid fa-{{ $inc['icon'] }} text-4xl mb-6 text-slate-200 group-hover:text-{{ $inc['color'] }}-600 transition-all duration-500"></i>
       <p class="text-[9px] font-bold uppercase tracking-[0.2em] text-slate-400 group-hover:text-white transition-colors leading-tight">{{ $inc['label'] }}</p>
      </div>
     @endforeach
    </div>
   </div>

   <!-- Global vs India Market -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <!-- GLOBAL -->
    <div class="p-8 lg:p-12 bg-slate-950 text-white relative overflow-hidden group">
     <div class="absolute top-0 right-0 p-12 text-blue-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-earth-americas text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16">
      <div class="space-y-4">
       <div class="text-blue-400 text-[10px] font-bold uppercase tracking-[0.4em]">International Value</div>
       <h3 class="text-3xl font-bold text-slate-900">Global Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$350B+</span>
       </div>
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Projected (2035)</span>
        <span class="text-4xl font-bold text-blue-500 tracking-tight ">$600B+</span>
       </div>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-500 uppercase tracking-[0.4em]">Market Drivers</h4>
       <div class="grid grid-cols-2 gap-4">
        @foreach(['Water Scarcity', 'Climate Change', 'Industrial Demand', 'Urban Growth'] as $driver)
         <div class="p-8 bg-slate-950 text-center text-[10px] font-bold uppercase tracking-[0.1em] text-slate-400 hover:bg-blue-600 hover:text-slate-950 transition-all cursor-default">{{ $driver }}</div>
        @endforeach
       </div>
      </div>
     </div>
    </div>

    <!-- INDIA -->
    <div class="p-8 lg:p-12 bg-white relative overflow-hidden group border-l border-slate-200">
     <div class="absolute top-0 right-0 p-12 text-blue-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-industry text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16 text-right">
      <div class="space-y-4">
       <div class="text-blue-600 text-[10px] font-bold uppercase tracking-[0.4em]">National Strategy</div>
       <h3 class="text-3xl font-bold text-slate-950 ">Indian Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-slate-100 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-slate-950 tracking-tight ">₹80K Cr+</span>
       </div>
       <div class="flex items-end justify-between border-b border-slate-100 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.3em]">Annual CAGR</span>
        <span class="text-4xl font-bold text-blue-600 tracking-tight ">15%</span>
       </div>
       <div class="p-12 bg-blue-50 border-l-8 border-blue-600 shadow-sm text-right">
        <p class="text-[9px] font-bold text-blue-600 uppercase tracking-[0.4em] mb-4 ">Projection (2031)</p>
        <p class="text-3xl font-bold text-slate-950 uppercase leading-tight tracking-tight">₹1.5 Lakh Cr+</p>
       </div>
      </div>
     </div>
    </div>
   </div>

   <!-- Stats Grid -->
   <div class="grid grid-cols-2 md:grid-cols-4 gap-6 shadow-sm">
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-blue-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110">$350B+</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Market</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-blue-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">₹80K Cr</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Market</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-blue-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">$600B</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global 2035</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-blue-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">12-15%</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Growth</p>
    </div>
   </div>

   <!-- Trends & Opportunities -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <div class="p-12 bg-slate-950 text-white space-y-16">
     <h3 class="text-3xl font-bold text-slate-900 text-blue-500 border-l-8 border-blue-600 pl-10">Emerging Trends</h3>
     <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
      @foreach([
       ['icon' => 'gauge-high', 'label' => 'Smart Metering'],
       ['icon' => 'brain', 'label' => 'AI Monitoring'],
       ['icon' => 'droplet-slash', 'label' => 'Zero Liquid Dis.'],
       ['icon' => 'recycle', 'label' => 'Adv. Reuse Tech'],
       ['icon' => 'filter', 'label' => 'Sustainable Desal.'],
       ['icon' => 'building', 'label' => 'Water Positive'],
      ] as $trend)
       <div class="p-10 bg-slate-950 group/item hover:bg-blue-600 transition-all duration-500 relative overflow-hidden text-center">
        <div class="absolute top-0 left-0 w-1 h-full bg-white scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
        <i class="fa-solid fa-{{ $trend['icon'] }} text-3xl mb-6 text-blue-600 group-hover/item:text-slate-950 transition-colors"></i>
        <p class="text-[12px] font-bold uppercase text-slate-400 group-hover/item:text-slate-950 tracking-[0.2em] leading-tight transition-colors ">{{ $trend['label'] }}</p>
       </div>
      @endforeach
     </div>
    </div>

    <div class="p-12 bg-white space-y-16 border-l border-slate-200">
     <h3 class="text-3xl font-bold text-slate-900 border-l-8 border-slate-950 pl-10">High Potential</h3>
     <div class="space-y-px bg-slate-200 border border-slate-200 shadow-sm">
      @foreach([
       ['icon' => 'building', 'label' => 'Treatment Infrastructure'],
       ['icon' => 'microchip', 'label' => 'Smart Tech Solutions'],
       ['icon' => 'recycle', 'label' => 'Industrial Recycling'],
       ['icon' => 'leaf', 'label' => 'ESG Consulting'],
       ['icon' => 'cloud-rain', 'label' => 'Rainwater Harvesting'],
       ['icon' => 'water', 'label' => 'Wastewater Mgmt'],
      ] as $opp)
      <div class="flex items-center gap-10 p-10 bg-white group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
       <div class="absolute top-0 left-0 w-1 h-full bg-blue-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <i class="fa-solid fa-{{ $opp['icon'] }} text-2xl text-blue-600 group-hover/opp:text-white transition-colors"></i>
       <span class="text-xl font-bold uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight ">{{ $opp['label'] }}</span>
      </div>
      @endforeach
     </div>
    </div>
   </div>

   <!-- Future Roadmap -->
   <div class="grid lg:grid-cols-2 gap-32 items-center">
    <div class="space-y-16">
     <div class="section-heading text-left">
      <span class="subtitle">Systemic Aqueous Architecture</span>
      <h2 class="text-3xl font-bold text-slate-900">Future <br><span class="text-blue-600">Evolution.</span></h2>
      <div class="accent-line bg-blue-600"></div>
     </div>
     <div class="space-y-px bg-slate-200 border border-slate-200 shadow-sm">
      @foreach([
       'Transformation into strategic business priority',
       'Integration with Sustainability Strategy',
       'Manufacturing Operations optimization',
       'Supply Chain Management synergy',
       'ESG Reporting and transparency mandates'
      ] as $item)
      <div class="flex items-center gap-10 p-10 bg-white group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-blue-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <i class="fa-solid fa-check text-blue-600 group-hover:text-white transition-colors"></i>
       <span class="text-[14px] font-bold uppercase text-slate-700 group-hover:text-white tracking-[0.2em] transition-colors leading-tight ">{{ $item }}</span>
      </div>
      @endforeach
     </div>
    </div>

    <div class="p-8 lg:p-12 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-sm border border-white/5">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(37,99,235,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-12">
       <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-blue-400 text-[10px] font-bold uppercase tracking-[0.4em]">
       Sector Maturity
      </div>
      <h4 class="text-4xl font-bold text-blue-600">Strategic <br><span class="text-white">Continuity.</span></h4>
      <p class="text-2xl text-slate-400 font-medium border-l-8 border-blue-600/30 pl-10 leading-relaxed ">
       Water conservation is no longer optional — it is essential for business continuity.
      </p>
      <div class="grid grid-cols-2 gap-px bg-white/5 pt-12 border border-white/10">
        @foreach(['ESG COMPLIANT', 'ZLD SYSTEMS', 'SMART WATER', 'REUSE HUB'] as $tag)
        <span class="p-8 bg-slate-950 border border-white/5 text-[10px] font-bold uppercase tracking-[0.4em] text-blue-300 text-center hover:bg-blue-600 hover:text-slate-950 transition-all cursor-default">{{ $tag }}</span>
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
      The Aqueous <br><span class="text-blue-600">Standard.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-blue-600 pl-10 md:text-center mx-auto ">
      Water conservation is essential for ensuring long-term socio-economic development in a water-stressed world.
     </p>
     <div class="flex justify-center">
      <a href="{{ route('join.index') }}" 
       class="btn-sharp px-16 group !border-blue-600/30 hover:!bg-blue-600">
       Register for Water Support 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

@endsection
