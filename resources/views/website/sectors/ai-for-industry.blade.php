@extends('layouts.website')

@section('title', 'AI for Industry - Transforming Every Sector')

@section('content')

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="{{ asset('images/sectors/ai-for-industry.jpg') }}" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-brand-primary opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Intelligent Systems Era</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    AI FOR <br>
    <span class="text-brand-primary">Industry.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-brand-primary pl-10">
    Transforming global industrial landscapes through autonomous intelligence and cognitive computing.
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
      <span class="subtitle">Executive Summary</span>
      <h2 class="text-3xl font-bold ">The Horizontal <br><span class="text-brand-primary">Capability Layer.</span></h2>
      <div class="accent-line"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       Artificial Intelligence is no longer sector-specific—it is a <strong class="text-slate-900 font-bold ">horizontal capability layer</strong> transforming every major industry.
      </p>
      <p>
       AI enabling Industry 4.0, where machines learn, predict failures, and optimize production in real time, driving intelligent, sustainable, and inclusive growth.
      </p>
     </div>
    </div>

    <!-- Segments Grid -->
    <div class="grid grid-cols-2 gap-px bg-slate-200">
     @foreach(['Manufacturing', 'Sustainability', 'Agriculture', 'Healthcare'] as $idx => $svc)
      <div class="p-12 bg-slate-50 flex flex-col items-center justify-center text-center group hover:bg-brand-primary transition-all duration-700">
       <div class="text-4xl font-bold text-brand-primary group-hover:text-white transition-colors mb-6">
        0{{ $idx + 1 }}
       </div>
       <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-slate-400 group-hover:text-slate-900 transition-colors">{{ $svc }}</p>
      </div>
     @endforeach
    </div>
   </div>

   <!-- Focus Areas Grid -->
   <div class="space-y-12">
    <div class="section-heading text-center">
     <span class="subtitle">Strategic Nodes</span>
     <h2 class="text-4xl font-bold ">Primary Focus <span class="text-brand-primary">Architectures.</span></h2>
     <div class="accent-line mx-auto"></div>
    </div>

    <div class="grid lg:grid-cols-3 gap-6 shadow-sm">
     @php
      $focusAreas = [
       ['title' => 'AI in Manufacturing', 'tag' => 'Smart Factories', 'items' => ['Predictive Maintenance', 'Quality Inspection', 'Demand Forecasting', 'Robotics & Automation'], 'impact' => '30-50% Downtime Reduction', 'color' => 'brand-primary'],
       ['title' => 'AI in Sustainability', 'tag' => 'Climate Action', 'items' => ['Carbon Footprint Tracking', 'Energy Optimization', 'Recycling Automation', 'Climate Risk Modeling'], 'impact' => 'Accelerates Decarbonization', 'color' => 'brand-accent'],
       ['title' => 'AI in Agriculture', 'tag' => 'Precision Farming', 'items' => ['Crop Health Monitoring', 'Soil Analysis', 'Yield Prediction', 'Pest Detection'], 'impact' => 'Increased Productivity', 'color' => 'slate-900'],
       ['title' => 'AI in Healthcare', 'tag' => 'Diagnostics', 'items' => ['Medical Imaging', 'Drug Discovery', 'Virtual Assistants', 'Predictive Analytics'], 'impact' => 'Better Patient Outcomes', 'color' => 'brand-primary'],
       ['title' => 'AI in Retail', 'tag' => 'Consumer Intel', 'items' => ['Demand Forecasting', 'Hyper-Personalization', 'Smart Pricing', 'Inventory Optimization'], 'impact' => 'Increased Sales & Margins', 'color' => 'brand-accent'],
       ['title' => 'AI in Cybersecurity', 'tag' => 'Threat Detection', 'items' => ['Real-Time Detection', 'Behavioral Analytics', 'Fraud Prevention', 'Risk Assessment'], 'impact' => 'Stronger Data Protection', 'color' => 'slate-900'],
      ];
     @endphp
     @foreach($focusAreas as $area)
      <div class="p-16 bg-white space-y-12 group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
       <div class="absolute top-0 left-0 w-1 h-full bg-slate-100 group-hover:bg-brand-primary transition-colors"></div>
       <div class="space-y-4">
        <div class="text-brand-primary text-[10px] font-bold uppercase tracking-[0.4em]">{{ $area['tag'] }}</div>
        <h3 class="text-3xl font-bold text-slate-900 group-hover:text-white ">{{ $area['title'] }}</h3>
       </div>
       <ul class="space-y-6">
        @foreach($area['items'] as $item)
         <li class="flex items-center gap-4 text-[10px] font-bold uppercase tracking-[0.2em] text-slate-500 group-hover:text-slate-300 transition-colors">
          <span class="w-1.5 h-1.5 bg-brand-primary"></span>
          {{ $item }}
         </li>
        @endforeach
       </ul>
       <div class="pt-8 border-t border-slate-100 group-hover:border-white/10">
        <div class="text-[10px] font-bold text-brand-primary uppercase tracking-[0.3em]">{{ $area['impact'] }}</div>
       </div>
      </div>
     @endforeach
    </div>
   </div>

   <!-- Investor Snapshot -->
   <div class="p-12 lg:p-32 bg-slate-950 relative overflow-hidden group shadow-sm">
    <div class="absolute inset-0 z-0">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
    </div>
    <div class="relative z-10 grid lg:grid-cols-2 gap-px bg-white/10 border border-white/10 shadow-sm">
     <div class="p-8 lg:p-12 bg-slate-950 space-y-16">
      <div class="space-y-8">
       <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-brand-accent text-[10px] font-bold uppercase tracking-[0.4em]">
        Market Intelligence
       </div>
       <h2 class="text-6xl md:text-8xl font-bold text-white leading-[0.85] tracking-tight uppercase">
        Investor <br>
        <span class="text-brand-primary">Snapshot.</span>
       </h2>
       <p class="text-2xl text-slate-400 font-medium leading-relaxed border-l-4 border-brand-primary pl-10">
        Why AI is the #1 Investment Opportunity of the Decade.
       </p>
      </div>
      <div class="grid gap-6">
       @foreach([
        'Fastest-growing global tech sector',
        'Cross-industry adoption (100% applicability)',
        'High ROI through efficiency & automation',
        'Strong government & corporate backing'
       ] as $hl)
        <div class="flex items-center gap-6 group">
         <div class="w-3 h-3 bg-brand-accent"></div>
         <span class="text-xs font-bold uppercase text-slate-400 group-hover:text-white transition-colors tracking-[0.2em]">{{ $hl }}</span>
        </div>
       @endforeach
      </div>
     </div>

     <div class="grid grid-cols-2 gap-px bg-white/10">
      @foreach(['Generative AI', 'AI SaaS', 'AI Infrastructure', 'Industry Solutions'] as $tag)
       <div class="p-12 bg-slate-950 flex flex-col items-center justify-center text-center group hover:bg-brand-primary transition-all duration-700">
        <span class="text-[10px] font-bold uppercase tracking-[0.4em] text-white group-hover:text-slate-950 transition-colors">{{ $tag }}</span>
       </div>
      @endforeach
     </div>
    </div>
   </div>

   <!-- Global Summit Concept -->
   <div class="grid lg:grid-cols-2 gap-6">
    <div class="p-8 lg:p-12 bg-white space-y-16">
     <div class="section-heading text-left">
      <span class="subtitle">Thought Leadership</span>
      <h2 class="text-3xl font-bold ">Global AI <br><span class="text-brand-primary">Summit.</span></h2>
      <div class="accent-line"></div>
     </div>
     <div class="p-16 bg-slate-950 text-white space-y-8 relative group">
      <div class="absolute top-0 left-0 w-2 h-full bg-brand-primary"></div>
      <p class="text-[10px] font-bold text-brand-primary uppercase tracking-[0.3em]">Summit Theme</p>
      <p class="text-4xl font-bold text-white leading-tight tracking-tight uppercase ">
       "AI for Viksit Bharat 2047: Driving Intelligent, Sustainable & Inclusive Growth"
      </p>
     </div>
     <div class="flex flex-wrap gap-6">
      @foreach(['Global Leaders', 'Policy Makers', 'Startup Founders', 'Academic Experts'] as $spk)
        <div class="px-8 py-6 bg-slate-950 text-white text-[10px] font-bold uppercase tracking-[0.3em] flex-1 text-center whitespace-nowrap">{{ $spk }}</div>
      @endforeach
     </div>
    </div>

    <div class="p-8 lg:p-12 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-sm">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(0,255,100,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-12">
      <h4 class="text-4xl font-bold text-brand-accent">Conference Tracks</h4>
      <div class="grid gap-px bg-white/10 border border-white/10">
       @foreach([
        'AI in Manufacturing & Industry 4.0',
        'AI for Sustainability & Net Zero',
        'AI in Healthcare & Life Sciences',
        'AI in Agriculture & Food Security',
        'Finance, Cybersecurity & Governance',
        'Generative AI & Future of Work'
       ] as $track)
       <div class="flex items-center gap-8 p-8 bg-slate-950 group/track hover:bg-brand-primary transition-all duration-500">
        <div class="w-12 h-12 bg-white/5 border border-white/10 flex items-center justify-center text-brand-primary group-hover/track:bg-white group-hover/track:text-brand-primary transition-all">
         <i class="fa-solid fa-circle-nodes"></i>
        </div>
        <p class="text-xs font-bold uppercase tracking-[0.2em] text-slate-400 group-hover/track:text-slate-950 transition-colors">{{ $track }}</p>
       </div>
       @endforeach
      </div>
     </div>
    </div>
   </div>

   <!-- Conclusion CTA -->
   <div class="relative p-12 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-sm group">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(0,75,35,0.3),transparent)]"></div>
    <div class="relative z-10 space-y-16">
     <h3 class="text-3xl md:text-5xl font-bold text-white leading-[0.85]">
      Structural Shift <br>in <span class="text-brand-primary">Industry.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-brand-primary pl-10">
      AI is not just a technology wave—it is a structural shift in how economies function and industries operate. Empower your industrial future with intelligent systems today.
     </p>
     <div class="flex justify-center">
      <a href="{{ route('join.index') }}" 
       class="btn-sharp px-16 group !border-brand-primary/30 hover:!bg-brand-primary">
       Register for AI Training & Support
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

@endsection
