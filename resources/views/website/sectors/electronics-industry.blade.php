@extends('layouts.website')

@section('title', 'Electronics Industry Overview')

@section('content')

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="{{ asset('images/sectors/electronics-industry.jpg') }}" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-blue-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-blue-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-blue-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Digital Infrastructure Protocol</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    Electronics <br>
    <span class="text-blue-600">Industry.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-blue-600 pl-10 md:text-center mx-auto">
    Empowering the Modern World Through Innovation and Smart Technology.
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
      <span class="subtitle">Foundation of the Digital Age</span>
      <h2 class="text-3xl font-bold text-slate-900">Silicon <br><span class="text-blue-600">Innovation.</span></h2>
      <div class="accent-line bg-blue-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       The <strong class="text-slate-900 font-bold ">Electronics industry</strong> is one of the most transformative sectors, driving technological advancement, digital connectivity, and modern lifestyle convenience.
      </p>
      <p>
       From semiconductors to smart devices, electronics power nearly every aspect of contemporary life, industrial manufacturing, and global communication networks.
      </p>
     </div>
    </div>

    <div class="grid grid-cols-2 gap-px bg-slate-200 shadow-sm">
     @php
      $segments = [
       ['icon' => 'microchip', 'label' => 'Semiconductors'],
       ['icon' => 'mobile-screen', 'label' => 'Consumer Electronics'],
       ['icon' => 'robot', 'label' => 'Industrial Automation'],
       ['icon' => 'satellite-dish', 'label' => 'Communication Tech'],
      ];
     @endphp
     @foreach($segments as $s)
      <div class="p-16 bg-slate-50 rounded-2xl p-8 flex flex-col items-center text-center group hover:shadow-lg transition-all">
        <div class="absolute top-0 left-0 w-1 h-full bg-blue-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <i class="fa-solid fa-{{ $s['icon'] }} text-5xl mb-8 text-slate-200 group-hover:text-blue-600 transition-all duration-500"></i>
       <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-slate-400 group-hover:text-white transition-colors">{{ $s['label'] }}</p>
      </div>
     @endforeach
    </div>
   </div>

   <!-- Global Landscape -->
   <div class="p-12 lg:p-32 bg-slate-950 relative overflow-hidden group shadow-sm border border-white/5">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(59,130,246,0.05),transparent)]"></div>
    <div class="relative z-10 grid lg:grid-cols-2 gap-12 items-center">
     <div class="space-y-12">
      <div class="space-y-4">
       <span class="text-blue-400 text-[10px] font-bold uppercase tracking-[0.4em]">International Market Dynamics</span>
       <h3 class="text-4xl font-bold text-white ">Global Landscape</h3>
      </div>
      <p class="text-2xl text-slate-400 font-medium leading-relaxed border-l-8 border-blue-600/30 pl-10 ">
       The electronics sector remains one of the world's fastest-evolving industries, fueled by AI integration and automation.
      </p>
      <div class="grid grid-cols-2 gap-px bg-white/10 border border-white/10 shadow-sm">
       <div class="p-12 bg-slate-950 space-y-4 group/stat hover:bg-blue-600 transition-all duration-500">
        <p class="text-[10px] font-bold uppercase text-slate-500 group-hover/stat:text-slate-950/70 tracking-[0.3em]">Market Value (2025)</p>
        <p class="text-4xl font-bold text-white group-hover/stat:text-slate-950 tracking-tight">$5T+</p>
       </div>
       <div class="p-12 bg-slate-950 space-y-4 group/stat hover:bg-blue-600 transition-all duration-500">
        <p class="text-[10px] font-bold uppercase text-slate-500 group-hover/stat:text-slate-950/70 tracking-[0.3em]">Projected (2031)</p>
        <p class="text-4xl font-bold text-blue-400 group-hover/stat:text-slate-950 tracking-tight">$8T+</p>
       </div>
      </div>
     </div>
     <div class="space-y-10">
      <h4 class="text-[10px] font-bold uppercase tracking-[0.4em] text-blue-400">Primary Growth Drivers</h4>
      <div class="space-y-px bg-white/10 border border-white/10 shadow-sm">
       @foreach([
        'Expansion of Artificial Intelligence & IoT',
        'Rising Smartphone & Smart Device Penetration',
        'Industrial Automation & Robotics Adoption',
        'Increasing Digital Infrastructure Investments'
       ] as $driver)
       <div class="flex items-center gap-10 p-10 bg-slate-950 hover:bg-white/5 transition-all group/item">
        <div class="w-2 h-2 bg-blue-600 group-hover/item:scale-150 transition-transform"></div>
        <span class="text-[14px] font-bold uppercase tracking-[0.2em] text-slate-400 group-hover:text-white transition-colors">{{ $driver }}</span>
       </div>
       @endforeach
      </div>
      <div class="p-10 bg-blue-600/10 border border-blue-600/20 text-center">
        <p class="text-sm font-bold uppercase tracking-[0.3em] text-blue-100 ">9% Expected Annual CAGR</p>
      </div>
     </div>
    </div>
   </div>

   <!-- India Manufacturing -->
   <div class="grid lg:grid-cols-2 gap-32 items-center">
    <div class="order-2 lg:order-1 grid grid-cols-2 gap-6 shadow-sm">
     <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all relative overflow-hidden">
       <div class="absolute top-0 left-0 w-1 h-full bg-slate-950 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
      <p class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.4em] mb-4">India Size (2025)</p>
      <h4 class="text-3xl font-bold text-slate-950 group-hover:text-white transition-colors tracking-tight ">$180B+</h4>
     </div>
     <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all relative overflow-hidden">
       <div class="absolute top-0 left-0 w-1 h-full bg-blue-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
      <p class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.4em] mb-4">Projected (2031)</p>
      <h4 class="text-3xl font-bold text-blue-600 group-hover:text-blue-400 transition-colors tracking-tight ">$400B+</h4>
     </div>
     <div class="col-span-2 p-8 lg:p-12 bg-slate-950 text-white space-y-12 relative overflow-hidden group">
      <div class="absolute top-0 left-0 w-full h-1 bg-blue-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
      <div class="flex items-center justify-between">
       <span class="text-[10px] font-bold uppercase tracking-[0.4em] text-blue-400">Growth Catalysts</span>
      </div>
      <div class="grid grid-cols-2 gap-px bg-white/5 border border-white/10 shadow-2xl">
       @foreach(['Make in India & PLI', 'Semiconductor Mission', 'Smartphone Demand', 'Digital Economy'] as $cat)
        <div class="p-8 bg-slate-950 border border-white/5 text-[10px] font-bold uppercase tracking-[0.2em] text-slate-300 text-center hover:bg-blue-600 hover:text-slate-950 transition-all">{{ $cat }}</div>
       @endforeach
      </div>
      <p class="text-[10px] text-slate-500 uppercase font-bold tracking-[0.4em] text-center ">India anticipates 16% CAGR by 2031</p>
     </div>
    </div>

    <div class="order-1 lg:order-2 space-y-16">
     <div class="section-heading text-left">
      <span class="subtitle">National Manufacturing Era</span>
      <h2 class="text-4xl font-bold ">India's Industrial <br><span class="text-blue-600">Ascension.</span></h2>
      <div class="accent-line bg-blue-600"></div>
     </div>
     <p class="text-2xl text-slate-500 font-medium leading-relaxed border-l-8 border-slate-100 pl-10 ">
      India is rapidly emerging as a global electronics manufacturing hub, supported by domestic demand and government-led initiatives.
     </p>
     <div class="space-y-px bg-slate-200 border border-slate-200 shadow-sm">
      @foreach([
       '20,000+ Electronics Manufacturing Units',
       'Major Hubs: Bengaluru, Noida, Chennai, Hyderabad',
       'Aggressive 16% CAGR anticipated by 2031',
       'Massive investments in Semiconductor Fabs'
      ] as $item)
      <div class="flex items-center gap-10 p-10 bg-white group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-blue-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <i class="fa-solid fa-check text-blue-600 group-hover:text-white transition-colors"></i>
       <span class="text-[14px] font-bold uppercase text-slate-700 group-hover:text-white tracking-[0.2em] transition-colors leading-tight ">{{ $item }}</span>
      </div>
      @endforeach
     </div>
    </div>
   </div>

   <!-- High Potential Segments -->
   <div class="space-y-12">
    <div class="text-center space-y-4">
     <span class="text-blue-600 text-[10px] font-bold uppercase tracking-[0.4em]">Vertical Specialization</span>
     <h3 class="text-4xl font-bold text-slate-900">High-Potential Segments</h3>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 shadow-sm">
     @foreach(['Artificial Intelligence Devices', 'Wearable Technology', 'Smart Home Automation', 'EV Electronics', 'Semiconductor Mfg.', 'Industrial IoT Systems', '5G / Telecom Hardware', 'Intelligent Sensors'] as $seg)
      <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all relative overflow-hidden">
       <div class="absolute top-0 left-0 w-full h-1 bg-blue-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
        <p class="text-[10px] font-bold uppercase text-slate-600 group-hover:text-white tracking-[0.2em] transition-colors leading-tight">{{ $seg }}</p>
      </div>
     @endforeach
    </div>
   </div>

   <!-- Strategic Importance -->
   <div class="grid lg:grid-cols-2 gap-32 items-center">
    <div class="space-y-16">
     <div class="section-heading text-left">
      <span class="subtitle">Systemic Progress Architecture</span>
      <h2 class="text-3xl font-bold text-slate-900">Why Electronics <br><span class="text-blue-600">Matter.</span></h2>
      <div class="accent-line bg-blue-600"></div>
     </div>
     <div class="space-y-px bg-slate-200 border border-slate-200 shadow-sm">
      @foreach([
       'Drives technological innovation and modernization',
       'Powers industrial productivity and automation',
       'Enables global digital transformation',
       'Supports healthcare, mobility, and infrastructure',
       'Creates large-scale manufacturing opportunities'
      ] as $imp)
      <div class="flex items-center gap-10 p-12 bg-white group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
       <div class="absolute top-0 left-0 w-1 h-full bg-blue-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <i class="fa-solid fa-bolt-lightning text-blue-600 text-2xl group-hover:text-white transition-colors"></i>
       <span class="text-[14px] font-bold uppercase tracking-[0.15em] text-slate-900 group-hover:text-white transition-colors leading-tight ">{{ $imp }}</span>
      </div>
      @endforeach
     </div>
    </div>

    <div class="p-8 lg:p-12 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-sm border border-white/5">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(59,130,246,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-12">
      <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-blue-400 text-[10px] font-bold uppercase tracking-[0.4em]">
       Future Vision
      </div>
      <h4 class="text-4xl font-bold text-blue-600">The Road <br><span class="text-white">Ahead.</span></h4>
      <p class="text-2xl text-slate-400 font-medium border-l-8 border-blue-600/30 pl-10 leading-relaxed ">
       Innovation, miniaturization, and intelligent connectivity will define the future of electronics.
      </p>
      <div class="grid grid-cols-2 gap-px bg-white/5 pt-12 border border-white/10">
        @foreach(['AI-DRIVEN', 'SMART CITIES', 'EV TECH', '5G ECOSYSTEM'] as $tag)
        <span class="p-8 bg-slate-950 border border-white/5 text-[10px] font-bold uppercase tracking-[0.4em] text-blue-300 text-center hover:bg-blue-600 hover:text-slate-950 transition-all cursor-default">{{ $tag }}</span>
        @endforeach
      </div>
     </div>
    </div>
   </div>

   <!-- Conclusion CTA -->
   <div class="relative p-12 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-sm group">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(59,130,246,0.2),transparent)]"></div>
    <div class="relative z-10 space-y-16">
     <h3 class="text-3xl md:text-5xl font-bold text-white leading-[0.85]">
      The Digital <br><span class="text-blue-600">Foundation.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-blue-600 pl-10 md:text-center mx-auto ">
      Empower your business with next-gen electronic manufacturing and IoT solutions. Join the mission to build a smart industrial future.
     </p>
     <div class="flex justify-center">
      <a href="{{ route('join.index') }}" 
       class="btn-sharp px-16 group !border-blue-600/30 hover:!bg-blue-600">
       Register for Electronics Support 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

@endsection
