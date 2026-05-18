@extends('layouts.website')

@section('title', 'Information Technology Industry Overview')

@section('content')

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="{{ asset('images/sectors/it-hero.png') }}" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(79,70,229,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-indigo-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-indigo-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-indigo-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Digital Transformation Protocol</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    Information <br>
    <span class="text-indigo-600">Technology.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-indigo-600 pl-10 md:text-center mx-auto">
    The backbone of the digital economy, enabling innovation, efficiency, and global connectivity.
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
      <span class="subtitle">Digital Infrastructure Framework</span>
      <h2 class="text-3xl font-bold text-slate-900">Computing <br><span class="text-indigo-600">Power.</span></h2>
      <div class="accent-line bg-indigo-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       <strong class="text-slate-900 font-bold ">Information Technology (IT)</strong> refers to the use of computers, software, networks, and cloud systems to process, manage, and secure information.
      </p>
      <p>
       The IT industry powers digital transformation across all sectors—from healthcare to finance—through AI, automation, and cybersecurity solutions.
      </p>
     </div>
    </div>

    <div class="relative group">
     <div class="absolute inset-0 bg-indigo-600/10"></div>
     <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-sm">
      <img src="{{ asset('images/sectors/it-details.png') }}" alt="IT Industry"
       class="w-full h-full object-cover transition-all duration-1000">
     </div>
     <div class="absolute top-0 right-0 p-8">
      <div class="bg-indigo-600 text-white text-[10px] font-bold px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
       Digital Protocol
      </div>
     </div>
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
       <div class="text-indigo-400 text-[10px] font-bold uppercase tracking-[0.4em]">Global Landscape</div>
       <h3 class="text-3xl font-bold text-slate-900">Global Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$10T</span>
       </div>
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Projected (2033)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$15T+</span>
       </div>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-500 uppercase tracking-[0.4em]">Growth Drivers</h4>
       <div class="grid grid-cols-2 gap-4">
        @foreach(['AI Adoption', 'Cloud Migration', 'Cybersecurity', 'Data Analytics'] as $driver)
         <div class="px-8 py-4 bg-slate-950 flex items-center gap-6 hover:bg-indigo-600 hover:text-slate-950 transition-colors cursor-default group/item">
          <i class="fa-solid fa-circle-check text-indigo-600 group-hover/item:text-slate-950 transition-colors"></i>
          <span class="text-[10px] font-bold uppercase tracking-[0.1em] text-center">{{ $driver }}</span>
         </div>
        @endforeach
       </div>
      </div>
     </div>
    </div>

    <!-- INDIA -->
    <div class="p-8 lg:p-12 bg-white relative overflow-hidden group border-l border-slate-200">
     <div class="absolute top-0 right-0 p-12 text-indigo-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-code text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16 text-right">
      <div class="space-y-4">
       <div class="text-indigo-600 text-[10px] font-bold uppercase tracking-[0.4em]">National Momentum</div>
       <h3 class="text-3xl font-bold text-slate-900 ">Indian Market</h3>
      </div>
      
      <div class="p-12 bg-indigo-50 border-l-8 border-indigo-600 shadow-sm text-right space-y-6">
       <p class="text-[9px] font-bold text-indigo-600 uppercase tracking-[0.4em] ">Market Forecast</p>
       <p class="text-4xl font-bold text-slate-950 uppercase leading-tight tracking-tight">$500B Projected (2030)</p>
       <p class="text-[12px] font-bold text-slate-500 uppercase tracking-widest ">12-15% Annual CAGR</p>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-400 uppercase tracking-[0.4em]">Major Hubs</h4>
       <div class="grid grid-cols-3 gap-6 shadow-sm">
        @foreach(['Bengaluru', 'Hyderabad', 'Pune', 'Chennai', 'Mumbai', 'Delhi NCR'] as $city)
         <div class="p-6 bg-white flex flex-col items-center justify-center gap-4 group/item hover:bg-slate-950 transition-all duration-500">
          <div class="w-1.5 h-1.5 bg-indigo-600 group-hover/item:scale-150 transition-transform"></div>
          <span class="text-[9px] font-bold uppercase text-slate-600 group-hover/item:text-white tracking-[0.1em] leading-tight text-center">{{ $city }}</span>
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
     <h4 class="text-4xl font-bold text-indigo-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110">100K+</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">IT Companies (India)</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-indigo-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">5M+</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Professionals (India)</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-indigo-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">$12T+</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Market (2031)</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-indigo-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">55%+</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Outsourcing Share</p>
    </div>
   </div>

   <!-- Opportunities & Innovation -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <div class="p-12 bg-white space-y-16">
     <div class="section-heading text-left">
      <span class="subtitle">Innovation Horizons</span>
      <h2 class="text-3xl font-bold text-slate-900">Emerging <br><span class="text-indigo-600">Tech.</span></h2>
      <div class="accent-line bg-indigo-600"></div>
     </div>
     
     <div class="grid grid-cols-1 gap-4">
      @php
       $items = [
        ['icon' => 'brain', 'title' => 'AI & Machine Learning'],
        ['icon' => 'shield-halved', 'title' => 'Cybersecurity Solutions'],
        ['icon' => 'cloud', 'title' => 'Cloud Computing Services'],
        ['icon' => 'cubes', 'title' => 'Blockchain Development'],
        ['icon' => 'chart-pie', 'title' => 'Data Analytics & BI'],
        ['icon' => 'robot', 'title' => 'IoT & Smart Automation'],
       ];
      @endphp
      @foreach($items as $i)
      <div class="flex items-center gap-10 p-10 bg-slate-50 group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
       <div class="absolute top-0 left-0 w-1 h-full bg-indigo-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-indigo-600 group-hover/opp:bg-indigo-600 group-hover/opp:text-white transition-all duration-500 shadow-sm">
        <i class="fa-solid fa-{{ $i['icon'] }} text-2xl"></i>
       </div>
       <span class="text-xl font-bold uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight ">{{ $i['title'] }}</span>
      </div>
      @endforeach
     </div>
    </div>

    <div class="p-12 bg-slate-950 text-white space-y-12 relative overflow-hidden group border-l border-slate-200">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(79,70,229,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-16">
      <div class="space-y-4">
       <div class="text-indigo-400 text-[10px] font-bold uppercase tracking-[0.4em]">Future Outlook</div>
       <h3 class="text-3xl font-bold text-white ">Outsourcing Hub</h3>
      </div>
      <p class="text-2xl text-slate-400 font-medium border-l-4 border-indigo-600/30 pl-10 leading-relaxed ">
       India contributes over 55% share of the global outsourcing market, recognized for software development and digital engineering.
      </p>
      <div class="grid grid-cols-2 gap-4 pt-12">
        @foreach(['USA', 'India', 'China', 'Germany', 'UK', 'Japan'] as $country)
        <div class="p-8 bg-slate-950 border border-white/5 flex flex-col items-center gap-4 group/item hover:bg-indigo-600 transition-all duration-500">
         <span class="text-[10px] font-bold uppercase text-slate-300 group-hover:text-slate-950 tracking-[0.2em] transition-colors leading-tight">{{ $country }}</span>
        </div>
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
      Scale <br><span class="text-indigo-600">Transform.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-indigo-600 pl-10 md:text-center mx-auto ">
      IT is the backbone of the digital economy. As industries worldwide embrace automation, IT continues to be the most future-ready and high-growth industry globally.
     </p>
     <div class="flex justify-center">
      <a href="{{ route('join.index') }}" 
       class="btn-sharp px-16 group !border-indigo-600/30 hover:!bg-indigo-600">
       Upskill with IT Resources 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

@endsection
