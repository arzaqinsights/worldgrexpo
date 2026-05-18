@extends('layouts.website')

@section('title', 'Strategic Promotion Services - World Grexpo Foundation')

@section('content')

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 text-white overflow-hidden border-b border-slate-900">
  <div class="absolute inset-0 z-0">
   <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  </div>
  <div class="absolute inset-0 opacity-10 mix-blend-overlay"
   style="background-image: url('https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center;">
  </div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary opacity-5 -skew-x-12 translate-x-1/2"></div>

  <div class="container relative z-10 text-left">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 backdrop-blur-md mb-12">
    <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Market Dominance</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold mb-10 leading-tight">
    Strategic <br> <span class="text-brand-primary">Promotion.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-2xl leading-relaxed border-l-4 border-brand-primary pl-6">
    Architecting global brand visibility through proprietary industrial marketing frameworks and absolute digital precision.
   </p>
  </div>
 </section>

 <!-- Main Content Interface -->
 <section class="py-20 bg-white relative">
  <div class="container space-y-16">
   
   <!-- Section 1: Overview -->
   <div class="grid lg:grid-cols-2 gap-24 items-center">
    <div class="space-y-12 animate-on-scroll">
     <div class="section-heading text-left">
      <span class="subtitle">Growth Engineering</span>
      <h2>Engineering <br> <span class="text-brand-primary">Global Growth.</span></h2>
      <div class="accent-line"></div>
     </div>
     
     <p class="text-slate-500 text-lg leading-relaxed">
      In the global industrial landscape, growth is engineered, not accidental. World Grexpo Foundation's <strong>Strategic Promotion</strong> framework is architected to break through global noise, combining industrial intelligence with absolute digital precision.
     </p>
     
     <div class="space-y-6">
      @foreach(['Proprietary Brand Positioning', 'Multi-Node Global Campaigns', 'Industrial Lead Generation'] as $feature)
      <div class="flex items-center gap-8 group">
       <div class="w-12 h-12 bg-slate-50 border border-slate-100 flex items-center justify-center hover:bg-slate-950 transition-all duration-500 shadow-sm">
        <i class="fa-solid fa-check text-brand-primary text-sm hover:text-white"></i>
       </div>
       <span class="text-xs font-bold uppercase tracking-[0.2em] text-slate-950">{{ $feature }}</span>
      </div>
      @endforeach
     </div>
    </div>

    <div class="relative group">
     <div class="overflow-hidden border border-slate-200 shadow-2xl bg-slate-900">
      <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2026&auto=format&fit=crop" 
        class=" transition-all duration-[2000ms] hover:scale-105 opacity-80 hover:opacity-100 h-[600px] object-cover" 
        alt="Industrial Strategy">
     </div>
     <!-- Sharp Industrial Decorator -->
     <div class="absolute -top-8 -left-8 w-48 h-48 bg-[repeating-linear-gradient(45deg,transparent,transparent_5px,rgba(170,204,0,0.1)_5px,rgba(170,204,0,0.1)_10px)] -z-10"></div>
    </div>
   </div>

   <!-- Section 2: The Process -->
   <div class="grid lg:grid-cols-3 gap-6">
    @foreach([
     ['img' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop', 't' => 'Analyze', 'd' => 'Deep dive into global market gaps and industrial competitor nodes.'],
     ['img' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop', 't' => 'Strategize', 'd' => 'Architecting high-impact campaign roadmaps for global industrial export.'],
     ['img' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=2074&auto=format&fit=crop', 't' => 'Execute', 'd' => 'Launching targeted promotions across premium global industrial platforms.']
    ] as $step)
    <div class="group relative overflow-hidden h-[600px] bg-slate-900">
     <img src="{{ $step['img'] }}" 
       class="w-full h-full object-cover  hover:scale-105 transition-all duration-[2000ms] opacity-60 hover:opacity-100" 
       alt="Industrial Node">
     
     <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
     
     <div class="absolute inset-0 p-12 flex flex-col justify-end space-y-6">
      <h4 class="text-4xl font-bold text-white uppercase tracking-tight hover:text-brand-primary transition-colors">
       {{ $step['t'] }}
      </h4>
      <p class="text-slate-400 text-[10px] font-bold uppercase tracking-[0.3em] leading-relaxed hover:text-white transition-colors">
       {{ $step['d'] }}
      </p>
     </div>
     
     <!-- Sharp Hover Accent -->
     <div class="absolute bottom-0 left-0 w-0 h-1.5 bg-brand-primary hover:w-full transition-all duration-700"></div>
    </div>
    @endforeach
   </div>

   <!-- Section 3: Key Deliverables -->
   <div class="bg-slate-950 p-24 lg:p-32 relative overflow-hidden shadow-3xl">
    <!-- Industrial Pattern -->
    <div class="absolute inset-0 z-0">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
    </div>
    
    <div class="relative z-10 space-y-12">
     <div class="flex flex-col md:flex-row justify-between items-end gap-12 text-left">
      <div class="section-heading text-left">
       <span class="subtitle">Structural Output</span>
       <h2 class="text-white">Node <br> <span class="text-brand-primary">Deliverables.</span></h2>
       <div class="accent-line"></div>
      </div>
      <p class="text-2xl text-slate-400 font-medium max-w-xl leading-relaxed ">
       The absolute structural output of our Strategic Promotion partnership.
      </p>
     </div>

     <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-px bg-white/5 border border-white/10 shadow-3xl">
      @foreach([
       ['icon' => 'globe', 'title' => 'Global Exposure', 'desc' => 'Visibility across the absolute institutional network.'],
       ['icon' => 'bullhorn', 'title' => 'Industrial PR', 'desc' => 'High-authority press releases and industrial media kits.'],
       ['icon' => 'chart-simple', 'title' => 'Node Tracking', 'desc' => 'Comprehensive monthly industrial performance reports.'],
       ['icon' => 'user-plus', 'title' => 'VIP Access', 'desc' => 'Exclusive entry to elite global industrial circles.']
      ] as $dev)
      <div class="p-12 bg-transparent hover:bg-brand-primary transition-all duration-700 group">
       <div class="w-16 h-16 bg-white/5 border border-white/10 flex items-center justify-center mb-10 hover:bg-white hover:rotate-12 transition-all duration-700">
        <i class="fa-solid fa-{{ $dev['icon'] }} text-brand-primary text-2xl hover:text-brand-primary-dark"></i>
       </div>
       <h4 class="text-2xl font-bold text-white uppercase tracking-tight mb-6 hover:text-slate-950 transition-colors leading-none">
        {{ $dev['title'] }}
       </h4>
       <p class="text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em] leading-relaxed hover:text-slate-900 transition-colors">
        {{ $dev['desc'] }}
       </p>
      </div>
      @endforeach
     </div>
    </div>
   </div>

   <!-- Section 4: Final Message -->
   <div class="relative bg-slate-900 p-24 lg:p-32 overflow-hidden group border-t border-slate-800 text-center">
    <div class="absolute inset-0 z-0">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:30px_30px]"></div>
    </div>
    
    <div class="relative z-10 space-y-16 max-w-5xl mx-auto">
     <div class="space-y-8">
      <h3 class="text-4xl md:text-[8rem] font-bold text-white uppercase tracking-tight leading-[0.85]">
       Architect Your <br> <span class="text-brand-primary">Presence.</span>
      </h3>
      <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium">
       Uplift your industrial node. Leverage World Grexpo Foundation's authority to architect a global brand. Our node is ready to design your next breakthrough strategy.
      </p>
     </div>
     
     <a href="{{ route('contact') }}" class="btn-sharp px-20 group mx-auto">
      Acquire Strategic Mandate 
      <i class="fa-solid fa-arrow-right-long ml-6 hover:translate-x-4 transition-transform"></i>
     </a>
    </div>

    <!-- Industrial Accent Line -->
    <div class="absolute left-0 top-0 w-2 h-full bg-brand-primary"></div>
   </div>

  </div>
 </section>

@endsection
