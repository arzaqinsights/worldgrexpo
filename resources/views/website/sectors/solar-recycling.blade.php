@extends('layouts.website')

@section('title', 'Solar Panel Recycling Industry')

@section('content')

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="{{ asset('images/sectors/solar-recycling.jpeg') }}" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(245,158,11,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-amber-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-amber-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-amber-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Photovoltaic Recovery Protocol</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    Solar <br>
    <span class="text-amber-600">Recycling.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-amber-600 pl-10 md:text-center mx-auto">
    Recovering valuable materials from end-of-life solar panels to power the circular clean energy economy.
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
      <span class="subtitle">End-of-Life Lifecycle Management</span>
      <h2 class="text-3xl font-bold text-slate-900">Solar <br><span class="text-amber-600">Recovery.</span></h2>
      <div class="accent-line bg-amber-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       <strong class="text-slate-900 font-bold ">Solar recycling</strong> refers to the process of recovering valuable materials such as glass, silicon, silver, and copper from end-of-life panels.
      </p>
      <p>
       With solar panels typically lasting 25–30 years, solar waste is now becoming a fast-growing segment of the circular clean energy economy.
      </p>
     </div>
    </div>

    <div class="relative group">
     <div class="absolute inset-0 bg-amber-600/10"></div>
     <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-sm">
      <img src="{{ asset('images/sectors/solar-recycling.jpeg') }}" alt="Solar Recycling Industry"
       class="w-full h-full object-cover transition-all duration-1000">
     </div>
     <div class="absolute top-0 right-0 p-8">
      <div class="bg-amber-600 text-white text-[10px] font-bold px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
       Urban Mining
      </div>
     </div>
    </div>
   </div>

   <!-- Key Recycling Processes -->
   <div class="space-y-12">
    <div class="text-center space-y-4">
     <span class="text-amber-600 text-[10px] font-bold uppercase tracking-[0.4em]">Operational Sequence</span>
     <h3 class="text-4xl font-bold text-slate-900">Technical Processes</h3>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 shadow-sm">
     @php
      $processes = [
       ['icon' => 'gears', 'title' => 'Mechanical Dismantling', 'desc' => 'Glass & Al-frame recovery'],
       ['icon' => 'fire', 'title' => 'Thermal Treatment', 'desc' => 'Layer separation'],
       ['icon' => 'flask', 'title' => 'Chemical Recovery', 'desc' => 'Silicon & Silver extraction'],
       ['icon' => 'robot', 'title' => 'Automated PV Systems', 'desc' => 'Advanced recycling tech'],
      ];
     @endphp
     @foreach($processes as $p)
      <div class="p-16 bg-slate-50 rounded-2xl p-8 flex flex-col items-center text-center group hover:shadow-lg transition-all">
       <div class="absolute top-0 left-0 w-full h-1 bg-amber-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
       <div class="w-16 h-16 mb-8 border border-slate-100 bg-slate-50 flex items-center justify-center text-amber-600 group-hover:bg-amber-600 group-hover:text-white transition-all duration-500 shadow-sm">
        <i class="fa-solid fa-{{ $p['icon'] }} text-2xl"></i>
       </div>
       <h4 class="text-[12px] font-bold uppercase text-slate-950 group-hover:text-white transition-colors tracking-[0.15em] mb-2">{{ $p['title'] }}</h4>
       <p class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.1em] leading-tight">{{ $p['desc'] }}</p>
      </div>
     @endforeach
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
       <div class="text-amber-400 text-[10px] font-bold uppercase tracking-[0.4em]">International Momentum</div>
       <h3 class="text-3xl font-bold text-slate-900">Global Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$422M</span>
       </div>
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Projected (2031)</span>
        <span class="text-4xl font-bold text-amber-500 tracking-tight ">$718M</span>
       </div>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-500 uppercase tracking-[0.4em]">Market Drivers</h4>
       <div class="grid grid-cols-2 gap-4">
        @foreach(['Rapid Installed Growth', 'WEEE Regulations', 'High Mineral Value', 'ESG Mandates'] as $driver)
         <div class="p-8 bg-slate-950 text-center text-[10px] font-bold uppercase tracking-[0.1em] text-slate-400 hover:bg-amber-600 hover:text-slate-950 transition-all cursor-default">{{ $driver }}</div>
        @endforeach
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
        <span class="text-4xl font-bold text-slate-950 tracking-tight ">$5.3M</span>
       </div>
       <div class="flex items-end justify-between border-b border-slate-100 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.3em]">Annual CAGR</span>
        <span class="text-4xl font-bold text-amber-600 tracking-tight ">17%</span>
       </div>
       <div class="p-12 bg-amber-50 border-l-8 border-amber-600 shadow-sm text-right">
        <p class="text-[9px] font-bold text-amber-600 uppercase tracking-[0.4em] mb-4 ">Forecast (2034)</p>
        <p class="text-3xl font-bold text-slate-950 uppercase leading-tight tracking-tight">$29 Million Value</p>
       </div>
      </div>
     </div>
    </div>
   </div>

   <!-- Comparison Snapshot -->
   <div class="space-y-12">
     <div class="text-center">
     <h3 class="text-3xl font-bold text-slate-950 ">Market Comparison</h3>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 shadow-sm">
     <div class="p-12 bg-slate-950 text-white space-y-8 flex flex-col justify-center border-r border-white/5">
      <h4 class="text-2xl font-bold text-amber-500">Parameter</h4>
      @foreach(['Market Size 2025', 'Forecast Value', 'CAGR', 'Market Stage'] as $param)
       <p class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.4em]">{{ $param }}</p>
      @endforeach
     </div>
     <div class="p-12 bg-white space-y-8 text-center flex flex-col justify-center group hover:bg-slate-950 transition-all duration-500">
      <h4 class="text-2xl font-bold text-slate-950 group-hover:text-white">Global</h4>
      <p class="text-2xl font-bold text-slate-900 group-hover:text-amber-500 tracking-tight">$422M</p>
      <p class="text-2xl font-bold text-slate-900 group-hover:text-amber-500 tracking-tight">$718M</p>
      <p class="text-2xl font-bold text-slate-900 group-hover:text-amber-500 tracking-tight">9%+</p>
      <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Early-Growth</p>
     </div>
     <div class="p-12 bg-white space-y-8 text-center flex flex-col justify-center group hover:bg-slate-950 transition-all duration-500">
      <h4 class="text-2xl font-bold text-slate-950 group-hover:text-white">India</h4>
      <p class="text-2xl font-bold text-slate-900 group-hover:text-amber-500 tracking-tight">$5.3M</p>
      <p class="text-2xl font-bold text-slate-900 group-hover:text-amber-500 tracking-tight">$29M</p>
      <p class="text-2xl font-bold text-slate-900 group-hover:text-amber-500 tracking-tight">17%+</p>
      <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Very Early-Stage</p>
     </div>
    </div>
   </div>

   <!-- Key Materials Recovered -->
   <div class="space-y-12">
    <div class="text-center space-y-4">
     <span class="text-amber-600 text-[10px] font-bold uppercase tracking-[0.4em]">Resource Classification</span>
     <h3 class="text-4xl font-bold text-slate-900">Materials Recovered</h3>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-5 gap-6 shadow-sm">
     @php
      $materials = [
       ['icon' => 'glass-water', 'title' => 'Glass', 'desc' => '70–80% Panel Weight', 'color' => 'sky'],
       ['icon' => 'cube', 'title' => 'Aluminum', 'desc' => 'Panel Frames', 'color' => 'slate'],
       ['icon' => 'microchip', 'title' => 'Silicon', 'desc' => 'Photovoltaic Wafers', 'color' => 'violet'],
       ['icon' => 'coins', 'title' => 'Silver', 'desc' => 'High-Value Recovery', 'color' => 'amber'],
       ['icon' => 'plug', 'title' => 'Copper', 'desc' => 'Internal Wiring', 'color' => 'orange'],
      ];
     @endphp
     @foreach($materials as $m)
      <div class="p-10 bg-slate-50 rounded-2xl p-8 flex flex-col items-center text-center group hover:shadow-lg transition-all">
       <div class="absolute top-0 left-0 w-1 h-full bg-{{ $m['color'] }}-500 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <div class="w-16 h-16 mb-8 border border-slate-100 bg-slate-50 flex items-center justify-center text-{{ $m['color'] }}-600 group-hover:bg-{{ $m['color'] }}-600 group-hover:text-white transition-all duration-500 shadow-sm">
        <i class="fa-solid fa-{{ $m['icon'] }} text-2xl"></i>
       </div>
       <h4 class="text-[12px] font-bold uppercase text-slate-950 group-hover:text-white transition-colors tracking-[0.15em] mb-2 ">{{ $m['title'] }}</h4>
       <p class="text-[9px] font-bold uppercase text-slate-400 tracking-[0.1em] leading-tight">{{ $m['desc'] }}</p>
      </div>
     @endforeach
    </div>
   </div>

   <!-- Future Roadmap -->
   <div class="grid lg:grid-cols-2 gap-32 items-center">
    <div class="space-y-16">
     <div class="section-heading text-left">
      <span class="subtitle">Global 2031 Roadmap</span>
      <h2 class="text-3xl font-bold text-slate-900">Future <br><span class="text-amber-600">Evolution.</span></h2>
      <div class="accent-line bg-amber-600"></div>
     </div>
     <div class="space-y-px bg-slate-200 border border-slate-200 shadow-sm">
      @foreach([
       'Market expected to double by early 2030s',
       'Rise in automated & chemical recycling tech',
       'Increasing recovery efficiency of Silver',
       'India rapid growth phase after 2027',
       'Solar retirement wave from 2030 onward'
      ] as $item)
      <div class="flex items-center gap-10 p-10 bg-white group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-amber-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <i class="fa-solid fa-check text-amber-600 group-hover:text-white transition-colors"></i>
       <span class="text-[14px] font-bold uppercase text-slate-700 group-hover:text-white tracking-[0.2em] transition-colors leading-tight ">{{ $item }}</span>
      </div>
      @endforeach
     </div>
    </div>

    <div class="p-8 lg:p-12 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-sm border border-white/5">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(245,158,11,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-12">
      <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-amber-400 text-[10px] font-bold uppercase tracking-[0.4em]">
       Sector Maturity
      </div>
      <h4 class="text-4xl font-bold text-amber-600">The Clean <br><span class="text-white">Loop.</span></h4>
      <p class="text-2xl text-slate-400 font-medium border-l-8 border-amber-600/30 pl-10 leading-relaxed ">
       Solar recycling is an emerging circular economy opportunity in the making.
      </p>
      <div class="grid grid-cols-2 gap-px bg-white/5 pt-12 border border-white/10">
        @foreach(['300+ OPERATORS', 'E-WASTE SYNERGY', 'GREEN MINING', 'FORMALIZING'] as $tag)
        <span class="p-8 bg-slate-950 border border-white/5 text-[10px] font-bold uppercase tracking-[0.4em] text-amber-300 text-center hover:bg-amber-600 hover:text-slate-950 transition-all cursor-default">{{ $tag }}</span>
        @endforeach
      </div>
     </div>
    </div>
   </div>

   <!-- Conclusion CTA -->
   <div class="relative p-12 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-sm group">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(245,158,11,0.2),transparent)]"></div>
    <div class="relative z-10 space-y-16">
     <h3 class="text-3xl md:text-5xl font-bold text-white leading-[0.85]">
      The Circular <br><span class="text-amber-600">Standard.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-amber-600 pl-10 md:text-center mx-auto ">
      Solar recycling will become a major clean-tech industry after 2030. Join the mission to recover valuable clean energy resources today.
     </p>
     <div class="flex justify-center">
      <a href="{{ route('join.index') }}" 
       class="btn-sharp px-16 group !border-amber-600/30 hover:!bg-amber-600">
       Explore Solar Support 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

@endsection
