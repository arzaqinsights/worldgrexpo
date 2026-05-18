@extends('layouts.website')

@section('title', 'E-Waste Recycling Industry')

@section('content')

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="{{ asset('images/sectors/e-waste-recycling.jpeg') }}" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-yellow-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-yellow-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-yellow-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Urban Mining Protocol</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    E-Waste <br>
    <span class="text-yellow-600">Recycling.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-yellow-600 pl-10 md:text-center mx-auto">
    Mining the Urban Goldmine: Turning electronic waste into precious resources.
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
      <span class="subtitle">Molecular Resource Recovery</span>
      <h2 class="text-3xl font-bold text-slate-900">Resource <br><span class="text-yellow-600">Restoration.</span></h2>
      <div class="accent-line bg-yellow-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       <strong class="text-slate-900 font-bold ">E-Waste Recycling</strong> refers to the collection, dismantling, and recovery of valuable materials from discarded electrical equipment.
      </p>
      <p>
       The process helps recover precious metals like <strong>gold, silver, and copper</strong> while reducing hazardous landfill waste and environmental pollution.
      </p>
     </div>
    </div>

    <div class="relative group">
     <div class="absolute inset-0 bg-yellow-600/10"></div>
     <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-sm">
      <img src="{{ asset('images/sectors/e-waste-recycling.jpeg') }}" alt="E-Waste Recycling"
       class="w-full h-full object-cover transition-all duration-1000">
     </div>
     <div class="absolute top-0 right-0 p-8">
      <div class="bg-yellow-600 text-white text-[10px] font-bold px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
       Urban Mining
      </div>
     </div>
    </div>
   </div>

   <!-- Process Grid -->
   <div class="space-y-12">
    <div class="text-center space-y-4">
     <span class="text-yellow-600 text-[10px] font-bold uppercase tracking-[0.4em]">Operational Sequence</span>
     <h3 class="text-4xl font-bold text-slate-900">Recycling Process</h3>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6 shadow-sm">
     @php
      $process = [
       ['icon' => 'truck-ramp-box', 'label' => 'Collection'],
       ['icon' => 'screwdriver-wrench', 'label' => 'Dismantling'],
       ['icon' => 'gears', 'label' => 'Shredding'],
       ['icon' => 'recycle', 'label' => 'Material Recovery'],
       ['icon' => 'gem', 'label' => 'Metal Extraction'],
      ];
     @endphp
     @foreach($process as $p)
      <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all relative overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-yellow-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <div class="w-20 h-20 mx-auto mb-10 bg-slate-50 border border-slate-100 flex items-center justify-center text-yellow-600 group-hover:bg-yellow-600 group-hover:text-white transition-all shadow-sm duration-500">
        <i class="fa-solid fa-{{ $p['icon'] }} text-3xl"></i>
       </div>
       <p class="text-[10px] font-bold text-slate-900 group-hover:text-white uppercase tracking-[0.3em] leading-tight transition-colors">{{ $p['label'] }}</p>
      </div>
     @endforeach
    </div>
   </div>

   <!-- Global vs India Market -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <!-- GLOBAL -->
    <div class="p-8 lg:p-12 bg-slate-950 text-white relative overflow-hidden group">
     <div class="absolute top-0 right-0 p-12 text-yellow-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-earth-americas text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16">
      <div class="space-y-4">
       <div class="text-yellow-400 text-[10px] font-bold uppercase tracking-[0.4em]">Global Opportunity</div>
       <h3 class="text-3xl font-bold text-slate-900">Global Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Market Size (2025)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$70B</span>
       </div>
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Projected (2032)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$110B</span>
       </div>
       <div class="flex items-end justify-between">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Annual CAGR</span>
        <span class="text-4xl font-bold text-yellow-500 tracking-tight ">10%</span>
       </div>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-500 uppercase tracking-[0.4em]">Growth Drivers</h4>
       <div class="grid grid-cols-2 gap-4">
        @foreach(['Rapid Consumption', 'Shorter Lifecycles', 'IT Upgrades', 'ESG Mandates'] as $driver)
         <span class="px-8 py-6 bg-slate-950 text-[9px] font-bold text-slate-400 uppercase tracking-[0.2em] text-center hover:bg-yellow-600 hover:text-slate-950 transition-colors cursor-default">{{ $driver }}</span>
        @endforeach
       </div>
      </div>
     </div>
    </div>

    <!-- INDIA -->
    <div class="p-8 lg:p-12 bg-white relative overflow-hidden group border-l border-slate-200">
     <div class="absolute top-0 right-0 p-12 text-yellow-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-industry text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16 text-right">
      <div class="space-y-4">
       <div class="text-yellow-600 text-[10px] font-bold uppercase tracking-[0.4em]">National Momentum</div>
       <h3 class="text-3xl font-bold text-slate-950 ">Indian Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-slate-100 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-slate-950 tracking-tight ">₹10K Cr</span>
       </div>
       <div class="flex items-end justify-between border-b border-slate-100 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.3em]">Projected (2031)</span>
        <span class="text-4xl font-bold text-slate-950 tracking-tight ">₹25K Cr</span>
       </div>
       <div class="p-12 bg-yellow-50 border-l-8 border-yellow-600 shadow-sm text-right">
        <p class="text-[9px] font-bold text-yellow-600 uppercase tracking-[0.4em] mb-4">India Rank</p>
        <p class="text-4xl font-bold text-slate-950 uppercase leading-tight tracking-tight">Top 5 E-Waste Nation</p>
       </div>
      </div>
     </div>
    </div>
   </div>

   <!-- Stats Grid -->
   <div class="grid grid-cols-2 md:grid-cols-4 gap-6 shadow-sm">
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-yellow-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110">$70B+</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Market</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-yellow-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">₹10K Cr</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Market</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-yellow-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">5M+ MT</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Annual Waste</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-yellow-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">18%</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India CAGR</p>
    </div>
   </div>

   <!-- Hubs & Drivers -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm">
    <div class="p-8 lg:p-12 bg-white space-y-12 group relative overflow-hidden">
     <div class="absolute top-0 left-0 w-1 h-full bg-slate-950 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
     <h3 class="text-4xl font-bold text-slate-950 group-hover:text-white transition-colors">India Capacity</h3>
     <p class="text-2xl text-slate-500 group-hover:text-slate-400 font-medium border-l-4 border-slate-100 pl-10 leading-relaxed transition-colors">
      500+ authorized recyclers registered with CPCB/SPCB.
     </p>
     <div class="grid grid-cols-2 gap-4 pt-8">
       @foreach(['Delhi NCR', 'Mumbai', 'Bengaluru', 'Chennai', 'Hyderabad', 'Pune'] as $hub)
       <div class="flex items-center gap-4 group/item">
        <div class="w-2 h-2 bg-yellow-600 group-hover/item:scale-150 transition-transform"></div>
        <span class="text-[12px] font-bold uppercase text-slate-600 group-hover:text-slate-400 tracking-[0.2em] transition-colors leading-relaxed group-hover/item:text-yellow-600">{{ $hub }}</span>
       </div>
       @endforeach
     </div>
    </div>
    <div class="p-8 lg:p-12 bg-slate-50 space-y-12 group relative overflow-hidden border-l border-slate-200">
     <div class="absolute top-0 left-0 w-1 h-full bg-yellow-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
     <h3 class="text-4xl font-bold text-slate-950">Market Drivers</h3>
     <ul class="space-y-6">
      @foreach([
       'Massive electronics consumption',
       'Rapid technology obsolescence',
       'High value recovery (Gold, Silver, Copper)',
       'E-Waste Management Rules / EPR mandates',
       'Rising corporate ESG initiatives'
      ] as $driver)
       <li class="flex items-start gap-8 group/item">
        <div class="w-2 h-2 bg-yellow-600 mt-4 group-hover/item:scale-150 transition-transform"></div>
        <span class="text-[14px] font-bold uppercase text-slate-600 tracking-[0.2em] transition-colors leading-relaxed group-hover/item:text-slate-950 ">{{ $driver }}</span>
       </li>
      @endforeach
     </ul>
    </div>
   </div>

   <!-- High Potential Segments -->
   <div class="space-y-12">
    <div class="text-center space-y-4">
     <span class="text-yellow-600 text-[10px] font-bold uppercase tracking-[0.4em]">Vertical Opportunities</span>
     <h3 class="text-4xl font-bold text-slate-900">High Potential Segments</h3>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-6 shadow-sm">
     @foreach(['Precious Metal Recovery', 'PCB Recycling', 'Battery Recycling', 'Refurbishment', 'Data Destruction', 'Reverse Logistics'] as $seg)
      <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all relative overflow-hidden">
       <div class="absolute top-0 left-0 w-full h-1 bg-yellow-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
        <p class="text-[12px] font-bold uppercase text-slate-600 group-hover:text-white tracking-[0.2em] transition-colors leading-tight">{{ $seg }}</p>
      </div>
     @endforeach
    </div>
   </div>

   <!-- Strategic Hub -->
   <div class="grid lg:grid-cols-2 gap-32 items-center">
    <div class="relative group">
     <div class="absolute inset-0 bg-yellow-600/10"></div>
     <div class="relative overflow-hidden border border-slate-200 shadow-sm h-[500px]">
      <img src="{{ asset('images/sectors/e-waste-recycling.jpeg') }}" alt="India E-Waste Hub"
       class="w-full h-full object-cover transition-all duration-1000">
     </div>
    </div>

    <div class="p-8 lg:p-12 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-sm border border-white/5">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(234,179,8,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-12">
      <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-yellow-400 text-[10px] font-bold uppercase tracking-[0.4em]">
       Strategic Value
      </div>
      <h4 class="text-4xl font-bold text-yellow-600">Why India <br><span class="text-white">Hub.</span></h4>
      <p class="text-2xl text-slate-400 font-medium border-l-8 border-yellow-600/30 pl-10 leading-relaxed ">
       India is positioned as an urban mining leader due to its massive domestic market and cost-effective processing ecosystem.
      </p>
      <div class="grid grid-cols-1 gap-px bg-white/5 pt-12 border border-white/10">
        @foreach(['Massive Electronics Market', 'Cost-effective processing', 'Technical labor availability', 'Government formalization'] as $tag)
        <div class="p-8 bg-slate-950 border border-white/5 flex items-center gap-8 group/item hover:bg-yellow-600 transition-all duration-500">
         <i class="fa-solid fa-check-circle text-yellow-600 text-2xl group-hover/item:text-slate-950 transition-colors"></i>
         <span class="text-[12px] font-bold uppercase text-slate-300 group-hover/item:text-slate-950 tracking-[0.2em] transition-colors leading-tight">{{ $tag }}</span>
        </div>
        @endforeach
      </div>
     </div>
    </div>
   </div>

   <!-- Conclusion CTA -->
   <div class="relative p-12 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-sm group">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(234,179,8,0.2),transparent)]"></div>
    <div class="relative z-10 space-y-16">
     <h3 class="text-3xl md:text-5xl font-bold text-white leading-[0.85]">
      The Urban Mining <br><span class="text-yellow-600">Revolution.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-yellow-600 pl-10 md:text-center mx-auto ">
      E-waste recycling is transforming discarded electronics into valuable resources. Join the urban mining and circular economy leadership.
     </p>
     <div class="flex justify-center">
      <a href="{{ route('join.index') }}" 
       class="btn-sharp px-16 group !border-yellow-600/30 hover:!bg-yellow-600">
       Register for E-Waste Support 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

@endsection
