@extends('layouts.website')

@section('title', 'Institutional Architecture | World Grexpo Foundation')

@section('content')
 <!-- Sharp Industrial Hero -->
 <section class="relative pt-40 pb-20 bg-slate-900 overflow-hidden">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 z-0">
   <div class="absolute inset-0 opacity-20 mix-blend-overlay" 
     style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center;"></div>
   <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
  </div>
  
  <div class="container relative z-10">
   <div class="max-w-4xl space-y-10">
    <div class="section-heading">
     <span class="subtitle text-brand-accent">Institutional Architecture</span>
     <h1 class="text-white text-3xl">About <span class="text-brand-primary">World Grexpo.</span></h1>
     <div class="accent-line bg-brand-accent"></div>
    </div>
    
    <p class="text-2xl text-slate-300 max-w-3xl leading-relaxed font-medium">
     Architecting the global industrial transition through robust networking, strategic advocacy, and unparalleled cross-border intelligence nodes.
    </p>
   </div>
  </div>
 </section>

 <!-- Content Sections -->
 <div class="bg-white">
  @include('website.about.partials.who_we_are')
  @include('website.about.partials.mission_vision')
  @include('website.about.partials.core_values')
  @include('website.about.partials.leadership')
 </div>

@endsection

