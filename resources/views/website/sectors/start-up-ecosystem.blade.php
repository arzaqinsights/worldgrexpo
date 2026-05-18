@extends('layouts.website')

@section('title', 'Start-Up Ecosystem Overview')

@section('content')

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="{{ asset('images/sectors/start-up-ecosystem.jpg') }}" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(192,38,211,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-fuchsia-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-fuchsia-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-fuchsia-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Innovation Disruption Protocol</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    Start-Up <br>
    <span class="text-fuchsia-600">Ecosystem.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-fuchsia-600 pl-10 md:text-center mx-auto">
    Entrepreneurial ventures developing innovative products, services, and technologies with high growth potential.
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
      <span class="subtitle">Innovation Value Framework</span>
      <h2 class="text-3xl font-bold text-slate-900">Disruption <br><span class="text-fuchsia-600">Engine.</span></h2>
      <div class="accent-line bg-fuchsia-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       <strong class="text-slate-900 font-bold ">Start-Ups</strong> are newly established ventures designed to develop innovative products with scalable business models.
      </p>
      <p>
       They are driven by technology and market transformation, addressing emerging global challenges and creating new industrial opportunities across the digital landscape.
      </p>
     </div>
    </div>

    <div class="relative group">
     <div class="absolute inset-0 bg-fuchsia-600/10"></div>
     <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-sm">
      <img src="{{ asset('images/sectors/start-up-ecosystem.jpg') }}" alt="Start-Up Ecosystem"
       class="w-full h-full object-cover transition-all duration-1000">
     </div>
     <div class="absolute top-0 right-0 p-8">
      <div class="bg-fuchsia-600 text-white text-[10px] font-bold px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
       Innovation Standard
      </div>
     </div>
    </div>
   </div>

   <!-- Global vs India Market -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <!-- GLOBAL -->
    <div class="p-8 lg:p-12 bg-slate-950 text-white relative overflow-hidden group">
     <div class="absolute top-0 right-0 p-12 text-fuchsia-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-earth-americas text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16">
      <div class="space-y-4">
       <div class="text-fuchsia-400 text-[10px] font-bold uppercase tracking-[0.4em]">Global Landscape</div>
       <h3 class="text-3xl font-bold text-slate-900">Global Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Total ventures</span>
        <span class="text-4xl font-bold text-white tracking-tight ">150M+</span>
       </div>
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Annual funding</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$300B+</span>
       </div>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-500 uppercase tracking-[0.4em]">Innovation Hubs</h4>
       <div class="grid grid-cols-3 gap-4">
        @foreach(['USA', 'UK', 'Germany', 'Singapore', 'Israel', 'UAE'] as $hub)
         <div class="p-6 bg-slate-950 flex flex-col items-center justify-center gap-4 group/item hover:bg-fuchsia-600 transition-all duration-500">
          <span class="text-[9px] font-bold uppercase text-slate-300 group-hover:text-slate-950 tracking-[0.1em] text-center">{{ $hub }}</span>
         </div>
        @endforeach
       </div>
      </div>
     </div>
    </div>

    <!-- INDIA -->
    <div class="p-8 lg:p-12 bg-white relative overflow-hidden group border-l border-slate-200">
     <div class="absolute top-0 right-0 p-12 text-fuchsia-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-rocket text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16 text-right">
      <div class="space-y-4">
       <div class="text-fuchsia-600 text-[10px] font-bold uppercase tracking-[0.4em]">National Momentum</div>
       <h3 class="text-3xl font-bold text-slate-900 ">Indian Market</h3>
      </div>
      
      <div class="p-12 bg-fuchsia-50 border-l-8 border-fuchsia-600 shadow-sm text-right space-y-6">
       <p class="text-[9px] font-bold text-fuchsia-600 uppercase tracking-[0.4em] ">Ecosystem Rank</p>
       <p class="text-4xl font-bold text-slate-950 uppercase leading-tight tracking-tight">3rd Largest Globally</p>
       <p class="text-[12px] font-bold text-slate-500 uppercase tracking-widest ">$1 Trillion Valuation (2030)</p>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-400 uppercase tracking-[0.4em]">Sector Highlights</h4>
       <div class="grid grid-cols-2 gap-6 shadow-sm">
        <div class="p-8 bg-white flex flex-col items-center justify-center gap-4 group/item hover:bg-slate-950 transition-all duration-500">
         <span class="text-4xl font-bold text-fuchsia-600 group-hover:text-white transition-colors">100+</span>
         <span class="text-[9px] font-bold uppercase text-slate-600 group-hover:text-white tracking-[0.1em] text-center">Unicorns</span>
        </div>
        <div class="p-8 bg-white flex flex-col items-center justify-center gap-4 group/item hover:bg-slate-950 transition-all duration-500">
         <span class="text-4xl font-bold text-fuchsia-600 group-hover:text-white transition-colors">1.5L+</span>
         <span class="text-[9px] font-bold uppercase text-slate-600 group-hover:text-white tracking-[0.1em] text-center">DPIIT Recognized</span>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>

   <!-- Stats Grid -->
   <div class="grid grid-cols-2 md:grid-cols-4 gap-6 shadow-sm">
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-fuchsia-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110">50M</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">New ventures / Yr</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-fuchsia-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">TOP 3</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Ecosystem Rank</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-fuchsia-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">$1.2T</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Projected Value</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-fuchsia-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">40%</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Growth CAGR</p>
    </div>
   </div>

   <!-- Opportunities & Growth -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <div class="p-12 bg-white space-y-16">
     <div class="section-heading text-left">
      <span class="subtitle">Innovation Horizons</span>
      <h2 class="text-3xl font-bold text-slate-900">Emerging <br><span class="text-fuchsia-600">Trends.</span></h2>
      <div class="accent-line bg-fuchsia-600"></div>
     </div>
     
     <div class="grid grid-cols-1 gap-4">
      @php
       $trends = [
        ['icon' => 'brain', 'title' => 'Deep Tech & AI Innovation'],
        ['icon' => 'leaf', 'title' => 'Climate-Tech & Green Ventures'],
        ['icon' => 'robot', 'title' => 'Industry 4.0 Automation'],
        ['icon' => 'seedling', 'title' => 'Rural & Agri-Tech Expansion'],
        ['icon' => 'venus', 'title' => 'Women-Led Entrepreneurship'],
       ];
      @endphp
      @foreach($trends as $item)
      <div class="flex items-center gap-10 p-10 bg-slate-50 group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
       <div class="absolute top-0 left-0 w-1 h-full bg-fuchsia-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-fuchsia-600 group-hover/opp:bg-fuchsia-600 group-hover/opp:text-white transition-all duration-500 shadow-sm">
        <i class="fa-solid fa-{{ $item['icon'] }} text-2xl"></i>
       </div>
       <span class="text-xl font-bold uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight ">{{ $item['title'] }}</span>
      </div>
      @endforeach
     </div>
    </div>

    <div class="p-12 bg-slate-950 text-white space-y-12 relative overflow-hidden group border-l border-slate-200 text-center flex flex-col justify-center items-center">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(192,38,211,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-10">
      <i class="fa-solid fa-lightbulb text-[8rem] text-fuchsia-600/10 group-hover:text-fuchsia-600 transition-all duration-700"></i>
      <h4 class="text-3xl font-bold uppercase text-white tracking-tight leading-tight">Venture Hubs</h4>
      <div class="grid grid-cols-2 gap-4">
       @foreach(['Bengaluru', 'Delhi NCR', 'Mumbai', 'Hyderabad', 'Pune', 'Chennai'] as $city)
        <div class="px-4 py-2 border border-white/10 text-[10px] font-bold uppercase tracking-widest text-slate-400 group-hover:text-white group-hover:border-fuchsia-600/50 transition-all">
         {{ $city }}
        </div>
       @endforeach
      </div>
     </div>
    </div>
   </div>

   <!-- Conclusion CTA -->
   <div class="relative p-12 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-sm group">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(192,38,211,0.2),transparent)]"></div>
    <div class="relative z-10 space-y-16">
     <h3 class="text-3xl md:text-5xl font-bold text-white leading-[0.85]">
      Future <br><span class="text-fuchsia-600">Ventures.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-fuchsia-600 pl-10 md:text-center mx-auto ">
      Start-ups are shaping the future of global industries. Organizations that collaborate with start-ups will drive the next wave of industrial expansion.
     </p>
     <div class="flex justify-center">
      <a href="{{ route('join.index') }}" 
       class="btn-sharp px-16 group !border-fuchsia-600/30 hover:!bg-fuchsia-600">
       Partner for Innovation 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

@endsection
