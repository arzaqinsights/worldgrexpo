@extends('layouts.website')

@section('title', 'Tourism Industry Overview')

@section('content')

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="{{ asset('images/sectors/tourism-industry.jpg') }}" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(6,182,212,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-sky-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-sky-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-sky-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Global Exploration Protocol</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    Tourism <br>
    <span class="text-sky-600">Industry.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-sky-600 pl-10 md:text-center mx-auto">
    Connecting cultures, economies, and experiences through international travel and hospitality.
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
      <span class="subtitle">Cultural Diplomacy Framework</span>
      <h2 class="text-3xl font-bold text-slate-900">Global <br><span class="text-sky-600">Dynamics.</span></h2>
      <div class="accent-line bg-sky-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       <strong class="text-slate-900 font-bold ">Tourism</strong> is one of the world's most influential economic sectors, driving cultural exchange and connectivity.
      </p>
      <p>
       As a major contributor to global GDP, it supports a broad ecosystem of industries including hospitality, aviation, travel technology, and local commerce.
      </p>
     </div>
    </div>

    <div class="relative group">
     <div class="absolute inset-0 bg-sky-600/10"></div>
     <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-sm">
      <img src="{{ asset('images/sectors/tourism-industry.jpg') }}" alt="Tourism Industry"
       class="w-full h-full object-cover transition-all duration-1000">
     </div>
     <div class="absolute bottom-0 left-0 p-8">
      <div class="bg-sky-600 text-white text-[10px] font-bold px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
       Travel Standard
      </div>
     </div>
    </div>
   </div>

   <!-- Global vs India Market -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <!-- GLOBAL -->
    <div class="p-8 lg:p-12 bg-slate-950 text-white relative overflow-hidden group">
     <div class="absolute top-0 right-0 p-12 text-sky-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-earth-americas text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16">
      <div class="space-y-4">
       <div class="text-sky-400 text-[10px] font-bold uppercase tracking-[0.4em]">Global Landscape</div>
       <h3 class="text-3xl font-bold text-slate-900">Global Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$11T+</span>
       </div>
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Projected (2031)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$16T+</span>
       </div>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-500 uppercase tracking-[0.4em]">Market Trends</h4>
       <div class="grid grid-cols-2 gap-4">
        @foreach(['Luxury Travel', 'Digital Booking', 'Connectivity', 'Leisure Demand'] as $driver)
         <div class="px-8 py-4 bg-slate-950 flex items-center gap-6 hover:bg-sky-600 hover:text-slate-950 transition-colors cursor-default group/item">
          <i class="fa-solid fa-circle-check text-sky-600 group-hover/item:text-slate-950 transition-colors"></i>
          <span class="text-[10px] font-bold uppercase tracking-[0.1em] text-center leading-tight">{{ $driver }}</span>
         </div>
        @endforeach
       </div>
      </div>
     </div>
    </div>

    <!-- INDIA -->
    <div class="p-8 lg:p-12 bg-white relative overflow-hidden group border-l border-slate-200">
     <div class="absolute top-0 right-0 p-12 text-sky-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-plane-up text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16 text-right">
      <div class="space-y-4">
       <div class="text-sky-600 text-[10px] font-bold uppercase tracking-[0.4em]">National Momentum</div>
       <h3 class="text-3xl font-bold text-slate-900 ">Indian Market</h3>
      </div>
      
      <div class="p-12 bg-sky-50 border-l-8 border-sky-600 shadow-sm text-right space-y-6">
       <p class="text-[9px] font-bold text-sky-600 uppercase tracking-[0.4em] ">Market Forecast</p>
       <p class="text-4xl font-bold text-slate-950 uppercase leading-tight tracking-tight">$500B Projected (2031)</p>
       <p class="text-[12px] font-bold text-slate-500 uppercase tracking-widest ">11% Annual CAGR Expansion</p>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-400 uppercase tracking-[0.4em]">Economic Base</h4>
       <div class="grid grid-cols-2 gap-6 shadow-sm">
        <div class="p-8 bg-white flex flex-col items-center justify-center gap-4 group/item hover:bg-slate-950 transition-all duration-500">
         <span class="text-4xl font-bold text-sky-600 group-hover:text-white transition-colors">50K+</span>
         <span class="text-[9px] font-bold uppercase text-slate-600 group-hover:text-white tracking-[0.1em] text-center">Hospitality Units</span>
        </div>
        <div class="p-8 bg-white flex flex-col items-center justify-center gap-4 group/item hover:bg-slate-950 transition-all duration-500">
         <span class="text-4xl font-bold text-sky-600 group-hover:text-white transition-colors">TOP 10</span>
         <span class="text-[9px] font-bold uppercase text-slate-600 group-hover:text-white tracking-[0.1em] text-center">Global Hub Rank</span>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>

   <!-- Segments Grid -->
   <div class="grid lg:grid-cols-3 gap-6 shadow-sm">
    @php
     $segments = [
      ['icon' => 'leaf', 'title' => 'Eco Tourism', 'desc' => 'Sustainable Travel & Conservation'],
      ['icon' => 'spa', 'title' => 'Wellness', 'desc' => 'Retreats & Medical Tourism'],
      ['icon' => 'gem', 'title' => 'Luxury', 'desc' => 'Premium Experiential Journeys'],
      ['icon' => 'building-columns', 'title' => 'Cultural', 'desc' => 'Heritage & Religious Circuits'],
      ['icon' => 'handshake', 'title' => 'MICE Events', 'desc' => 'Business, Meetings & Expo Hubs'],
      ['icon' => 'mobile-screen', 'title' => 'TravelTech', 'desc' => 'Digital Platforms & Aggregators'],
     ];
    @endphp
    @foreach($segments as $seg)
     <div class="p-16 bg-white space-y-8 group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
      <div class="absolute top-0 left-0 w-1 h-full bg-sky-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
      <div class="w-20 h-20 border border-slate-200 flex items-center justify-center text-sky-600 group-hover:bg-sky-600 group-hover:text-white transition-all duration-500">
       <i class="fa-solid fa-{{ $seg['icon'] }} text-3xl"></i>
      </div>
      <div class="space-y-4">
       <h4 class="text-2xl font-bold text-slate-900 group-hover:text-white transition-colors">{{ $seg['title'] }}</h4>
       <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-slate-400 group-hover:text-slate-500 transition-colors">{{ $seg['desc'] }}</p>
      </div>
     </div>
    @endforeach
   </div>

   <!-- Value Interface -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <div class="p-12 bg-white space-y-16">
     <div class="section-heading text-left">
      <span class="subtitle">Industrial Intelligence</span>
      <h2 class="text-3xl font-bold text-slate-900">Strategic <br><span class="text-sky-600">Impact.</span></h2>
      <div class="accent-line bg-sky-600"></div>
     </div>
     
     <div class="grid grid-cols-1 gap-4">
      @php
       $impacts = [
        ['icon' => 'users', 'title' => 'Massive Employment Gen'],
        ['icon' => 'vault', 'title' => 'Foreign Exchange Earnings'],
        ['icon' => 'building-circle-check', 'title' => 'MSME & Local Economy Support'],
        ['icon' => 'earth-asia', 'title' => 'Cultural Diplomacy Branding'],
       ];
      @endphp
      @foreach($impacts as $i)
      <div class="flex items-center gap-10 p-10 bg-slate-50 group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
       <div class="absolute top-0 left-0 w-1 h-full bg-sky-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-sky-600 group-hover/opp:bg-sky-600 group-hover/opp:text-white transition-all duration-500 shadow-sm">
        <i class="fa-solid fa-{{ $i['icon'] }} text-2xl"></i>
       </div>
       <span class="text-xl font-bold uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight ">{{ $i['title'] }}</span>
      </div>
      @endforeach
     </div>
    </div>

    <div class="p-12 bg-slate-950 text-white space-y-12 relative overflow-hidden group border-l border-slate-200">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(6,182,212,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-16">
      <div class="space-y-4">
       <div class="text-sky-400 text-[10px] font-bold uppercase tracking-[0.4em]">Future Outlook</div>
       <h3 class="text-3xl font-bold text-white ">Travel Hub</h3>
      </div>
      <p class="text-2xl text-slate-400 font-medium border-l-4 border-sky-600/30 pl-10 leading-relaxed ">
       India is among the fastest-growing tourism destinations globally, leveraging its natural landscapes and cultural diversity.
      </p>
      <div class="grid grid-cols-2 gap-4 pt-12">
        @foreach(['INCREDIBLE INDIA', 'MEDICAL TRAVEL', 'ECO TOURISM', 'MICE EVENTS'] as $tag)
        <div class="p-8 bg-slate-950 border border-white/5 flex flex-col items-center gap-4 group/item hover:bg-sky-600 transition-all duration-500">
         <span class="text-[10px] font-bold uppercase text-slate-300 group-hover:text-slate-950 tracking-[0.2em] transition-colors leading-tight text-center">{{ $tag }}</span>
        </div>
        @endforeach
      </div>
     </div>
    </div>
   </div>

   <!-- Conclusion CTA -->
   <div class="relative p-12 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-sm group">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(6,182,212,0.2),transparent)]"></div>
    <div class="relative z-10 space-y-16">
     <h3 class="text-3xl md:text-5xl font-bold text-white leading-[0.85]">
      Global <br><span class="text-sky-600">Exploration.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-sky-600 pl-10 md:text-center mx-auto ">
      Capitalize on the global tourism expansion. Join the ecosystem of travel innovators and hospitality leaders at World Grexpo.
     </p>
     <div class="flex justify-center">
      <a href="{{ route('join.index') }}" 
       class="btn-sharp px-16 group !border-sky-600/30 hover:!bg-sky-600">
       Explore Tourism Support 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

@endsection
