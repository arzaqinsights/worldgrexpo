@extends('layouts.website')

@section('title', 'What is World Grexpo | Global Industrial Sustainability Foundation')

@section('content')
 <!-- Sharp Industrial Hero -->
 <section class="relative pt-40 pb-20 bg-slate-900 overflow-hidden">
  <div class="absolute inset-0 z-0">
   <div class="absolute inset-0 opacity-20 " 
     style="background-image: url('{{ asset('images/about/hero-bg.png') }}'); background-size: cover; background-position: center;"></div>
   <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
  </div>
  
  <div class="container relative z-10">
   <div class="max-w-4xl space-y-8">
    <div class="section-heading">
     <span class="subtitle text-brand-accent">The Foundation</span>
     <h1 class="text-white text-5xl md:text-7xl lg:text-8xl font-bold tracking-tight">What is <span class="text-brand-accent">World Grexpo?</span></h1>
     <div class="accent-line bg-brand-accent"></div>
    </div>
    
    <p class="text-lg md:text-xl text-slate-300 max-w-3xl leading-relaxed font-medium">
     Pioneering the global industrial transition through strategic ESG frameworks and absolute sustainability advocacy across cross-border trade corridors.
    </p>
   </div>
  </div>
 </section>

 <!-- Modular sections -->
 @include('website.about.partials.who_we_are')

 {{-- Reusing high-impact home partials --}}
 @include('website.home.partials.why_choose')
 @include('website.home.partials.growth')
 
 @include('website.about.partials.history')
 @include('website.about.partials.mission_vision')
 @include('website.about.partials.core_values')

 @include('website.home.partials.membership')

@endsection

