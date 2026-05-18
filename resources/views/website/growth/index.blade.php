@extends('layouts.website')

@section('title', 'Conference Growth & Statistics - World Grexpo Foundation')

@section('content')
  <!-- Hero -->
  <section class="relative pt-40 pb-20 bg-slate-950 text-white overflow-hidden">
    <div class="absolute inset-0 z-0">
      <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
    </div>
    <div class="container relative z-10 text-left">
      <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
        <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase ">Trajectory Metrics</span>
      </div>
      <h1 class="text-3xl md:text-3xl font-bold uppercase mb-8 tracking-tight leading-[0.85] ">
        Conference <span class="text-brand-accent not-">Growth</span>
      </h1>
      <p class="text-lg text-slate-400 max-w-4xl leading-tight font-light border-l-2 border-slate-800 pl-8">
        Tracking our absolute institutional trajectory from conceptual roots to global industrial node excellence.
      </p>
    </div>
  </section>

  <!-- SECTION 1: CONFERENCES -->
  <section class="py-20 bg-white relative overflow-hidden">
    <div class="container">
      <div class="text-left mb-24">
        <h2 class="text-3xl md:text-3xl font-bold text-slate-950 uppercase leading-none tracking-tight mb-8">
          Conference <span class="text-brand-primary not-">Journey</span>
        </h2>
        <div class="w-24 h-2 bg-brand-accent rounded-sm"></div>
      </div>

      <!-- Dynamic Staircase (Delegates) -->
      <div class="flex items-end justify-start gap-2 mb-32 overflow-x-auto pb-10 no-scrollbar" style="min-height: 500px;">
        @php 
          $maxVal = $delegates->max(function($d) { 
            return (int) preg_replace('/[^0-9]/', '', $d->value); 
          }) ?: 1;
        @endphp
        @foreach($delegates as $index => $stat)
          @php
            $numericVal = (int) preg_replace('/[^0-9]/', '', $stat->value);
            $percent = ($numericVal / $maxVal) * 100;
            $h = max(20, $percent); 
          @endphp
          <div class="flex-1 min-w-[150px] flex flex-col items-start group">
            <div class="mb-6 text-left">
              <span class="text-3xl font-bold text-slate-200 group-hover:text-brand-accent transition-colors duration-700 ">{{ $h['y'] ?? $stat->year }}</span>
            </div>
            <div class="w-full relative overflow-hidden shadow-2xl group-hover:bg-brand-primary transition-all duration-700 border border-slate-950 rounded-sm bg-slate-950"
               style="height: {{ ($h / 100) * 400 }}px;">
              <div class="absolute inset-0 flex flex-col items-start justify-end p-8">
                <div class="text-4xl font-bold text-white leading-none tracking-tight ">{{ $stat->value }}</div>
                <div class="text-[8px] font-bold text-brand-accent uppercase tracking-[0.3em] mt-4 pt-4 border-t border-white/10 w-full">{{ $stat->label ?: 'Delegates' }}</div>
              </div>
              <div class="absolute inset-0 opacity-5 group-hover:opacity-10 bg-[linear-gradient(to_right,#ffffff10_1px,transparent_1px),linear-gradient(to_bottom,#ffffff10_1px,transparent_1px)] bg-[size:20px_20px] transition-opacity"></div>
            </div>
          </div>
        @endforeach
      </div>

      <!-- Conference Sub-tables -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
        <!-- Speakers Table -->
        <div class="bg-slate-50 border border-slate-100 rounded-sm p-16 group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
           <div class="absolute top-0 right-0 p-12 text-slate-950/5 group-hover:text-white/5 transition-colors">
            <i class="fa-solid fa-microphone-lines text-9xl"></i>
           </div>
           <h3 class="text-3xl font-bold text-slate-950 uppercase mb-10 tracking-tight group-hover:text-white transition-colors">
            Speakers 
            <span class="text-[10px] font-bold text-slate-400 normal-case tracking-[0.3em] block mt-2">Institutional Halls</span>
           </h3>
           <div class="space-y-2">
            @php $latestSpeakerYear = $speakers->max('year'); @endphp
            @foreach($speakers as $stat)
              <div class="flex items-center justify-between p-8 border border-slate-200 {{ $stat->year == $latestSpeakerYear ? 'bg-slate-950 text-white border-slate-950' : 'bg-white' }} group-hover:bg-white/5 group-hover:border-white/10 group-hover:text-white transition-all rounded-sm">
                <span class="font-bold tracking-widest text-[10px] uppercase {{ $stat->year == $latestSpeakerYear ? 'text-brand-accent' : 'text-slate-400' }}">{{ $stat->year }}</span>
                <span class="font-bold text-4xl tracking-tight ">{{ $stat->value }}</span>
              </div>
            @endforeach
           </div>
        </div>

        <!-- Excellence Table -->
        <div class="bg-slate-50 border border-slate-100 rounded-sm p-16 group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
           <div class="absolute top-0 right-0 p-12 text-slate-950/5 group-hover:text-white/5 transition-colors">
            <i class="fa-solid fa-award text-9xl"></i>
           </div>
           <h3 class="text-3xl font-bold text-slate-950 uppercase mb-10 tracking-tight group-hover:text-white transition-colors">
            Excellence 
            <span class="text-[10px] font-bold text-slate-400 normal-case tracking-[0.3em] block mt-2">Institutional Sectors</span>
           </h3>
           <div class="space-y-2">
            @php $latestExcellenceYear = $excellence->max('year'); @endphp
            @foreach($excellence as $stat)
              <div class="flex items-center justify-between p-8 border border-slate-200 {{ $stat->year == $latestExcellenceYear ? 'bg-slate-950 text-white border-slate-950' : 'bg-white' }} group-hover:bg-white/5 group-hover:border-white/10 group-hover:text-white transition-all rounded-sm">
                <span class="font-bold tracking-widest text-[10px] uppercase {{ $stat->year == $latestExcellenceYear ? 'text-brand-accent' : 'text-slate-400' }}">{{ $stat->year }}</span>
                <span class="font-bold text-4xl tracking-tight ">{{ $stat->value }}</span>
              </div>
            @endforeach
           </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: EXCELLENCE AWARDS -->
  <section class="py-20 bg-slate-950 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
      <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:40px_40px]"></div>
    </div>

    <div class="container relative z-10">
      <div class="text-left mb-24">
        <div class="inline-flex items-center gap-3 px-4 py-2 bg-white/5 border-l-4 border-brand-accent mb-10">
          <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase ">Recognition & Honor</span>
        </div>
        <h2 class="text-3xl md:text-3xl font-bold text-white uppercase leading-[0.85] tracking-tight">
          National <span class="text-brand-accent not-">Excellence</span> Awards
        </h2>
      </div>

      @foreach($awards as $awardTitle => $awardStats)
        <div class="mb-2 px-0">
          <div class="bg-white/5 border border-white/10 rounded-sm p-16 lg:p-24 relative overflow-hidden group hover:bg-white/10 transition-colors">
            <div class="absolute -top-12 -right-12 w-96 h-96 bg-brand-accent opacity-5 rounded-full blur-[120px]"></div>
            
            <div class="text-left mb-20 relative">
              <h4 class="text-4xl md:text-4xl font-bold text-white mb-6 tracking-tight uppercase leading-none">{{ $awardTitle }}</h4>
              <p class="text-brand-accent text-[10px] font-bold uppercase tracking-[0.5em] ">Global Honor Node Statistics</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-2 relative">
              @foreach($awardStats as $stat)
                <div class="bg-white rounded-sm p-12 text-left shadow-2xl group/card hover:bg-brand-primary transition-all duration-700 min-h-[250px] border border-transparent">
                  <div class="text-3xl md:text-3xl font-bold text-slate-950 mb-6 tabular-nums tracking-tight group-hover/card:text-white transition-colors">{{ $stat->value }}</div>
                  <div class="text-[10px] font-bold text-slate-500 uppercase tracking-[0.3em] leading-relaxed group-hover/card:text-brand-accent transition-colors">{{ $stat->label ?: $stat->category }}</div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      @endforeach

      <!-- Footer Quote -->
      <div class="text-left mt-24 max-w-2xl">
        <p class="text-white/40 text-[10px] font-bold uppercase tracking-[0.5em] leading-relaxed">
          Including Industrial Units, Transition Organizations, and Institutional Governance Nodes.
        </p>
      </div>
    </div>
  </section>

  <!-- Admin CTA -->
  @if(Auth::check() && Auth::user()->role === 'admin')
    <a href="{{ route('admin.growth.index') }}" class="fixed bottom-12 right-12 z-[100] bg-brand-accent text-slate-950 px-8 py-4 rounded-sm shadow-4xl hover:bg-white transition-all group flex items-center gap-4 border border-slate-950">
      <i class="fa-solid fa-gear group-hover:rotate-90 transition-transform"></i>
      <span class="font-bold text-[10px] uppercase tracking-widest ">Manage Metrics</span>
    </a>
  @endif

@endsection
