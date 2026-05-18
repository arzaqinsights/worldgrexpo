@extends('layouts.website')

@section('title', 'Decarbonization / Carbon Net Zero Industry Overview')

@section('content')

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="{{ asset('images/sectors/decarbonization.jpg') }}" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-emerald-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-emerald-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-emerald-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Emissions Mitigation Protocol</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    Carbon <br>
    <span class="text-emerald-600">Net Zero.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-emerald-600 pl-10 md:text-center mx-auto">
    Decarbonization: The Path to Global Industrial Sustainability.
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
      <span class="subtitle">Systemic Emission Reduction</span>
      <h2 class="text-3xl font-bold text-slate-900">Building A <br><span class="text-emerald-600">Zero Future.</span></h2>
      <div class="accent-line bg-emerald-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       <strong class="text-slate-900 font-bold ">Decarbonization</strong> refers to the process of reducing or eliminating carbon dioxide (CO₂) and greenhouse gas emissions from industrial and societal activities.
      </p>
      <p>
       <strong>Carbon Net Zero</strong> is achieved when the amount of carbon emissions released into the atmosphere is balanced by the amount removed, creating a neutral impact on the global climate.
      </p>
     </div>
    </div>

    <div class="grid grid-cols-2 gap-px bg-slate-200 shadow-sm">
     @php
      $focusAreas = [
       ['icon' => 'industry', 'label' => 'Industrial Emission'],
       ['icon' => 'building', 'label' => 'Green Building'],
       ['icon' => 'truck-fast', 'label' => 'Sustainable Transport'],
       ['icon' => 'chart-line', 'label' => 'ESG Compliance'],
      ];
     @endphp
     @foreach($focusAreas as $area)
      <div class="p-16 bg-slate-50 rounded-2xl p-8 flex flex-col items-center text-center group hover:shadow-lg transition-all">
        <div class="absolute top-0 left-0 w-1 h-full bg-emerald-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <i class="fa-solid fa-{{ $area['icon'] }} text-5xl mb-8 text-slate-200 group-hover:text-emerald-600 transition-all duration-500"></i>
       <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-slate-400 group-hover:text-white transition-colors">{{ $area['label'] }}</p>
      </div>
     @endforeach
    </div>
   </div>

   <!-- Strategies Grid -->
   <div class="space-y-12">
    <div class="text-center space-y-4">
     <span class="text-emerald-600 text-[10px] font-bold uppercase tracking-[0.4em]">Mitigation Methodologies</span>
     <h3 class="text-4xl font-bold text-slate-900">Decarbonization Strategies</h3>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 shadow-sm">
     @php
      $strategies = [
       ['title' => 'Renewable Energy', 'desc' => 'Switching to solar, wind, and green energy sources.'],
       ['title' => 'Energy Efficiency', 'desc' => 'Optimizing systems to reduce waste and consumption.'],
       ['title' => 'CCUS Technology', 'desc' => 'Carbon Capture, Utilization & Storage initiatives.'],
       ['title' => 'Green Hydrogen', 'desc' => 'Leveraging clean hydrogen for industrial processes.'],
       ['title' => 'Sustainable Mfg.', 'desc' => 'Implementing eco-friendly manufacturing practices.'],
       ['title' => 'Carbon Offsetting', 'desc' => 'Balancing emissions through credits and trading.'],
      ];
     @endphp
     @foreach($strategies as $strat)
      <div class="p-16 bg-white space-y-6 group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
       <div class="absolute top-0 left-0 w-full h-1 bg-emerald-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
       <h4 class="text-xl font-bold uppercase text-slate-950 group-hover:text-white tracking-tight transition-colors">{{ $strat['title'] }}</h4>
       <p class="text-[12px] font-bold uppercase text-slate-400 tracking-[0.1em] leading-relaxed group-hover:text-slate-300 transition-colors">{{ $strat['desc'] }}</p>
      </div>
     @endforeach
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
       <div class="text-emerald-400 text-[10px] font-bold uppercase tracking-[0.4em]">Global Opportunity</div>
       <h3 class="text-3xl font-bold text-slate-900">Global Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Investment (2025)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$2T+</span>
       </div>
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Opportunity (2031)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$5T+</span>
       </div>
       <div class="flex items-end justify-between">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Annual CAGR</span>
        <span class="text-4xl font-bold text-emerald-500 tracking-tight ">18%</span>
       </div>
      </div>

      <div class="grid grid-cols-2 gap-px bg-white/5 border border-white/10 shadow-2xl">
        <div class="p-10 bg-slate-950 text-center space-y-4 hover:bg-emerald-600 transition-all duration-500 group/card">
        <p class="text-2xl font-bold text-emerald-400 group-hover/card:text-slate-950 ">50,000+</p>
        <p class="text-[10px] text-slate-500 group-hover/card:text-slate-950/70">Global ESG Firms</p>
        </div>
        <div class="p-10 bg-slate-950 text-center space-y-4 hover:bg-emerald-600 transition-all duration-500 group/card">
        <p class="text-2xl font-bold text-emerald-400 group-hover/card:text-slate-950 ">Paris Agreement</p>
        <p class="text-[10px] text-slate-500 group-hover/card:text-slate-950/70">Primary Driver</p>
        </div>
      </div>
     </div>
    </div>

    <!-- INDIA -->
    <div class="p-8 lg:p-12 bg-white relative overflow-hidden group border-l border-slate-200">
     <div class="absolute top-0 right-0 p-12 text-emerald-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-leaf text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16 text-right">
      <div class="space-y-4">
       <div class="text-emerald-600 text-[10px] font-bold uppercase tracking-[0.4em]">National Momentum</div>
       <h3 class="text-3xl font-bold text-slate-950 ">Indian Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-slate-100 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-slate-950 tracking-tight ">$35B</span>
       </div>
       <div class="flex items-end justify-between border-b border-slate-100 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.3em]">Projected (2031)</span>
        <span class="text-4xl font-bold text-slate-950 tracking-tight ">$100B</span>
       </div>
       <div class="p-12 bg-emerald-50 border-l-8 border-emerald-600 shadow-sm text-right">
        <p class="text-[9px] font-bold text-emerald-600 uppercase tracking-[0.4em] mb-4">National Commitment</p>
        <p class="text-4xl font-bold text-slate-950 uppercase leading-tight tracking-tight">Net Zero by 2070</p>
       </div>
      </div>
     </div>
    </div>
   </div>

   <!-- Comparison Table -->
   <div class="space-y-16">
    <div class="text-center space-y-4">
     <span class="text-emerald-600 text-[10px] font-bold uppercase tracking-[0.4em]">Analytical Comparison</span>
     <h3 class="text-4xl font-bold text-slate-900">Snapshot Comparison</h3>
    </div>
    <div class="overflow-x-auto shadow-sm">
     <table class="w-full text-sm border-collapse border border-slate-200">
      <thead>
       <tr class="bg-slate-950 text-white">
        <th class="text-left p-12 font-bold uppercase tracking-[0.3em] border border-white/10">Parameter</th>
        <th class="text-center p-12 font-bold uppercase tracking-[0.3em] border border-white/10">Global Market</th>
        <th class="text-center p-12 font-bold uppercase tracking-[0.3em] border border-white/10">India Market</th>
       </tr>
      </thead>
      <tbody class="bg-white font-medium">
       <tr class="hover:bg-slate-50 transition-colors">
        <td class="p-10 font-bold text-slate-900 uppercase tracking-[0.1em] border border-slate-200 bg-slate-50/50">Market Stage</td>
        <td class="p-10 text-center text-slate-600 font-bold border border-slate-200 tracking-widest uppercase">Rapid Expansion</td>
        <td class="p-10 text-center text-emerald-600 font-bold border border-slate-200 tracking-widest uppercase">High Growth Emerging</td>
       </tr>
       <tr class="hover:bg-slate-50 transition-colors">
        <td class="p-10 font-bold text-slate-900 uppercase tracking-[0.1em] border border-slate-200 bg-slate-50/50">Primary Driver</td>
        <td class="p-10 text-center text-slate-600 font-bold border border-slate-200 tracking-widest uppercase">Climate Policy + ESG</td>
        <td class="p-10 text-center text-slate-600 font-bold border border-slate-200 tracking-widest uppercase">Industrial Transition</td>
       </tr>
      </tbody>
     </table>
    </div>
   </div>

   <!-- Growth Outlook -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm">
    <div class="p-12 bg-white space-y-16">
     <h3 class="text-3xl font-bold uppercase text-slate-950 border-l-8 border-slate-950 pl-10 tracking-tight">Global Outlook</h3>
     <ul class="space-y-10">
      @foreach([
       'Massive investment in green technologies',
       'Rapid scaling of carbon capture & hydrogen',
       'Growth in green finance and carbon markets',
       'Mandatory ESG reporting in major economies'
      ] as $outlook)
       <li class="flex items-start gap-8 group/item">
        <div class="w-2 h-2 bg-slate-950 mt-4 group-hover/item:scale-150 transition-transform duration-500"></div>
        <span class="text-[12px] font-bold text-slate-600 uppercase tracking-[0.2em] group-hover/item:text-slate-950 transition-colors leading-relaxed">{{ $outlook }}</span>
       </li>
      @endforeach
     </ul>
    </div>
    <div class="p-12 bg-slate-50 space-y-16 border-l border-slate-200">
     <h3 class="text-3xl font-bold uppercase text-slate-950 border-l-8 border-emerald-600 pl-10 tracking-tight">India Outlook</h3>
     <ul class="space-y-10">
      @foreach([
       'Decarbonization in steel, cement, and chemicals',
       'Expansion of carbon trading frameworks',
       'Growth in renewable integration & green mobility',
       'Rising demand for carbon auditing & consulting'
      ] as $outlook)
       <li class="flex items-start gap-8 group/item">
        <div class="w-2 h-2 bg-emerald-600 mt-4 group-hover/item:scale-150 transition-transform duration-500"></div>
        <span class="text-[12px] font-bold text-slate-600 uppercase tracking-[0.2em] group-hover/item:text-slate-950 transition-colors leading-relaxed">{{ $outlook }}</span>
       </li>
      @endforeach
     </ul>
    </div>
   </div>

   <!-- Industry Segments -->
   <div class="space-y-12">
    <div class="text-center space-y-4">
     <span class="text-emerald-600 text-[10px] font-bold uppercase tracking-[0.4em]">Vertical Specialization</span>
     <h3 class="text-4xl font-bold text-slate-900">Key Industry Segments</h3>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 shadow-sm">
     @foreach(['Renewable Energy', 'Green Hydrogen', 'Energy Efficiency', 'Battery Systems', 'Carbon Trading', 'Carbon Capture', 'Sustainability Auditing', 'Green Finance'] as $segment)
      <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all relative overflow-hidden">
       <div class="absolute top-0 left-0 w-full h-1 bg-emerald-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
        <p class="text-[10px] font-bold uppercase text-slate-600 group-hover:text-white tracking-[0.2em] transition-colors leading-tight">{{ $segment }}</p>
      </div>
     @endforeach
    </div>
   </div>

   <!-- Strategic Importance -->
   <div class="grid lg:grid-cols-2 gap-32 items-center">
    <div class="space-y-16">
     <div class="section-heading text-left">
      <span class="subtitle">Environmental Resilience Architecture</span>
      <h2 class="text-3xl font-bold text-slate-900">Strategic <br><span class="text-emerald-600">Importance.</span></h2>
      <div class="accent-line bg-emerald-600"></div>
     </div>
     <div class="space-y-px bg-slate-200 border border-slate-200 shadow-sm">
      @foreach([
       'Helps combat climate change and global warming',
       'Supports national and international emission targets',
       'Improves energy efficiency and cost savings',
       'Enhances ESG and investor attractiveness',
       'Future-proofs industries against regulations'
      ] as $imp)
      <div class="flex items-center gap-10 p-12 bg-white group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
       <div class="absolute top-0 left-0 w-1 h-full bg-emerald-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <i class="fa-solid fa-check-circle text-emerald-600 text-2xl group-hover:text-white transition-colors"></i>
       <span class="text-[14px] font-bold uppercase tracking-[0.15em] text-slate-900 group-hover:text-white transition-colors leading-tight ">{{ $imp }}</span>
      </div>
      @endforeach
     </div>
    </div>

    <div class="p-8 lg:p-12 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-sm border border-white/5">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(16,185,129,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-12">
      <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-emerald-400 text-[10px] font-bold uppercase tracking-[0.4em]">
       Future Mandate
      </div>
      <h4 class="text-4xl font-bold text-emerald-600">The Green <br><span class="text-white">Transition.</span></h4>
      <p class="text-2xl text-slate-400 font-medium border-l-8 border-emerald-600/30 pl-10 leading-relaxed ">
       Decarbonization is the foundation of future industrial growth, transforming how businesses operate globally.
      </p>
      <div class="grid grid-cols-2 gap-px bg-white/5 pt-12 border border-white/10">
        @foreach(['NET ZERO', 'ESG FOCUS', 'CARBON CAPTURE', 'GREEN HYDROGEN'] as $tag)
        <span class="p-8 bg-slate-950 border border-white/5 text-[10px] font-bold uppercase tracking-[0.4em] text-emerald-400 text-center hover:bg-emerald-600 hover:text-slate-950 transition-all cursor-default">{{ $tag }}</span>
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
      The Net Zero <br><span class="text-emerald-600">Revolution.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-emerald-600 pl-10 md:text-center mx-auto ">
      Lead the transition toward a sustainable industrial future. Explore carbon auditing, green energy integration, and ESG compliance solutions to achieve your decarbonization goals.
     </p>
     <div class="flex justify-center">
      <a href="{{ route('join.index') }}" 
       class="btn-sharp px-16 group !border-emerald-600/30 hover:!bg-emerald-600">
       Register for Sustainability Support 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

@endsection
