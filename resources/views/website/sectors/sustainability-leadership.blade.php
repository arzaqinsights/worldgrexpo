@extends('layouts.website')

@section('title', 'Sustainability Leadership Overview')

@section('content')

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="{{ asset('images/sectors/sustainability-leadership.jpg') }}" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(101,163,13,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-lime-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-lime-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-lime-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Ethical Governance Protocol</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    Sustainable <br>
    <span class="text-lime-600">Leadership.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-lime-600 pl-10 md:text-center mx-auto">
    Shaping the future of responsible business through strategic vision and environmental stewardship.
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
      <span class="subtitle">Governance Value Framework</span>
      <h2 class="text-3xl font-bold text-slate-900">Strategic <br><span class="text-lime-600">Stewardship.</span></h2>
      <div class="accent-line bg-lime-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       <strong class="text-slate-900 font-bold ">Sustainability Leadership</strong> refers to the strategic vision taken by organizations to integrate environmental and social responsibility into core operations.
      </p>
      <p>
       It empowers businesses to achieve growth while ensuring responsible resource management, social equity, and environmental stewardship for future industrial generations.
      </p>
     </div>
    </div>

    <div class="relative group">
     <div class="absolute inset-0 bg-lime-600/10"></div>
     <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-sm">
      <img src="{{ asset('images/sectors/sustainability-leadership.jpg') }}" alt="Sustainability Leadership"
       class="w-full h-full object-cover transition-all duration-1000">
     </div>
     <div class="absolute bottom-0 left-0 p-8">
      <div class="bg-lime-600 text-white text-[10px] font-bold px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
       Governance Standard
      </div>
     </div>
    </div>
   </div>

   <!-- Impact Grid -->
   <div class="grid grid-cols-2 md:grid-cols-4 gap-6 shadow-sm">
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-lime-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110">90%</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Fortune 500 ESG Rpt.</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-lime-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">$30T</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global ESG Invest.</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-lime-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">#1</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Boardroom Priority</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-lime-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">ZERO</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Net Emission Target</p>
    </div>
   </div>

   <!-- Core Pillars -->
   <div class="p-12 bg-slate-950 text-white space-y-12 relative overflow-hidden group border border-white/5 shadow-sm">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(101,163,13,0.1),transparent)] opacity-50"></div>
    <div class="relative z-10 text-center space-y-6">
     <h3 class="text-4xl font-bold ">Foundational <span class="text-lime-600">Pillars.</span></h3>
     <p class="text-2xl text-slate-500 font-medium ">The ESG framework.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 relative z-10">
     @php
      $pillars = [
       ['icon' => 'leaf', 'title' => 'Environmental', 'desc' => 'Carbon reduction, Renewables & Waste Management.'],
       ['icon' => 'users', 'title' => 'Social', 'desc' => 'Wellbeing, Diversity & Ethical Labor Practices.'],
       ['icon' => 'landmark', 'title' => 'Governance', 'desc' => 'Transparency, Ethics & Compliance Oversight.'],
      ];
     @endphp
     @foreach($pillars as $p)
      <div class="p-12 bg-slate-950 group/item hover:bg-lime-600 transition-all duration-500">
       <i class="fa-solid fa-{{ $p['icon'] }} text-4xl text-lime-600 group-hover/item:text-slate-950 mb-8 transition-colors"></i>
       <h4 class="text-xl font-bold uppercase text-white group-hover/item:text-slate-950 mb-4 transition-colors ">{{ $p['title'] }}</h4>
       <p class="text-[10px] font-bold uppercase text-slate-500 group-hover/item:text-slate-900 tracking-widest leading-relaxed transition-colors ">{{ $p['desc'] }}</p>
      </div>
     @endforeach
    </div>
   </div>

   <!-- Opportunities & Innovation -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <div class="p-12 bg-white space-y-16">
     <div class="section-heading text-left">
      <span class="subtitle">Innovation Horizons</span>
      <h2 class="text-3xl font-bold text-slate-900">Emerging <br><span class="text-lime-600">Trends.</span></h2>
      <div class="accent-line bg-lime-600"></div>
     </div>
     
     <div class="grid grid-cols-1 gap-4">
      @php
       $trends = [
        ['icon' => 'bullseye', 'title' => 'Net Zero & Carbon Neutrality'],
        ['icon' => 'landmark', 'title' => 'ESG Integrated Governance'],
        ['icon' => 'truck', 'title' => 'Green Supply Chain Transformation'],
        ['icon' => 'coins', 'title' => 'Sustainable Finance & Green Bonds'],
        ['icon' => 'recycle', 'title' => 'Circular Economy Business Models'],
       ];
      @endphp
      @foreach($trends as $item)
      <div class="flex items-center gap-10 p-10 bg-slate-50 group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
       <div class="absolute top-0 left-0 w-1 h-full bg-lime-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-lime-600 group-hover/opp:bg-lime-600 group-hover/opp:text-white transition-all duration-500 shadow-sm">
        <i class="fa-solid fa-{{ $item['icon'] }} text-2xl"></i>
       </div>
       <span class="text-xl font-bold uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight ">{{ $item['title'] }}</span>
      </div>
      @endforeach
     </div>
    </div>

    <div class="p-12 bg-slate-950 text-white space-y-12 relative overflow-hidden group border-l border-slate-200 text-center flex flex-col justify-center items-center">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(101,163,13,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-10">
      <i class="fa-solid fa-shield-heart text-[8rem] text-lime-600/10 group-hover:text-lime-600 transition-all duration-700"></i>
      <h4 class="text-3xl font-bold uppercase text-white tracking-tight leading-tight">Future Ready</h4>
      <p class="text-2xl text-slate-400 font-medium max-w-sm mx-auto leading-relaxed">
       Sustainability is no longer a trend — it is the <span class="text-white font-bold tracking-tight">foundation</span> of resilient business success.
      </p>
     </div>
    </div>
   </div>

   <!-- Conclusion CTA -->
   <div class="relative p-12 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-sm group">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(101,163,13,0.2),transparent)]"></div>
    <div class="relative z-10 space-y-16">
     <h3 class="text-3xl md:text-5xl font-bold text-white leading-[0.85]">
      The Green <br><span class="text-lime-600">Standard.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-lime-600 pl-10 md:text-center mx-auto ">
      Organizations that lead in sustainability today will shape the markets, industries, and economies of tomorrow.
     </p>
     <div class="flex justify-center">
      <a href="{{ route('join.index') }}" 
       class="btn-sharp px-16 group !border-lime-600/30 hover:!bg-lime-600">
       Register for Leadership 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

@endsection
