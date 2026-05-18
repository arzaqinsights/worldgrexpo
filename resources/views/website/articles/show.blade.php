@extends('layouts.website')

@push('meta')
 <title>{{ $article->meta_title ?? $article->title . ' | World Grexpo Foundation' }}</title>
 @if($article->meta_description)
  <meta name="description" content="{{ $article->meta_description }}">
 @else
  <meta name="description" content="{{ $article->excerpt }}">
 @endif
 <meta property="og:title" content="{{ $article->title }}">
 <meta property="og:description" content="{{ $article->excerpt }}">
 <meta property="og:image" content="{{ $article->thumbnail_url }}">
 <meta property="og:url" content="{{ url()->current() }}">
 <meta name="twitter:card" content="summary_large_image">
@endpush

@section('content')

<!-- Header Backdrop -->
<div class="relative bg-slate-950 pt-32 pb-48 overflow-hidden">
 <div class="absolute inset-0 z-0">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
 </div>
 <!-- Animated Decorators -->
 <div class="absolute top-1/4 right-0 w-[600px] h-[600px] bg-brand-primary/10 rounded-full blur-[120px] animate-pulse"></div>
</div>

<!-- Article Interface -->
<section class="relative z-10 -mt-32 pb-32">
 <div class="max-w-[1100px] mx-auto px-6">
  
  <article class="bg-white rounded-2xl shadow-2xl overflow-hidden border border-slate-100">
   
   <!-- Hero Media -->
   <div class="relative aspect-[16/9] overflow-hidden group">
    <img src="{{ $article->thumbnail_url }}" alt="{{ $article->title }}" 
      class="w-full h-full object-cover transition-all duration-[3000ms] group-hover:scale-110 group-">
    <div class="absolute inset-0 bg-linear-to-t from-slate-950/80 via-transparent to-transparent opacity-60 group-hover:opacity-20 transition-opacity"></div>
    
    @if($article->category)
     <div class="absolute top-10 left-10 flex flex-wrap gap-3 z-20">
      @foreach(array_map('trim', explode(',', $article->category)) as $cat)
       <span class="px-6 py-2 bg-brand-primary text-white text-[9px] font-bold uppercase tracking-widest rounded-full shadow-2xl">{{ $cat }}</span>
      @endforeach
     </div>
    @endif

    <!-- Meta Tag -->
    <div class="absolute bottom-10 left-10 px-6 py-3 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl text-white text-[10px] font-bold uppercase tracking-widest shadow-2xl">
     <i class="fa-regular fa-calendar mr-3 text-brand-accent"></i> 
     {{ $article->published_at ? $article->published_at->format('F d, Y') : $article->created_at->format('F d, Y') }}
    </div>
   </div>

   <!-- Content Header -->
   <div class="p-12 md:p-24 space-y-12">
    <div class="space-y-6">
     <div class="flex items-center gap-4">
      <div class="h-[1px] w-12 bg-brand-primary"></div>
      <span class="text-brand-primary text-[10px] font-bold uppercase tracking-[0.4em]">Intelligence Report</span>
     </div>
     <h1 class="text-3xl md:text-5xl font-bold text-slate-900 leading-[0.9] tracking-tight uppercase ">
      {{ $article->title }}
     </h1>
    </div>

    <div class="flex flex-col md:flex-row md:items-center justify-between gap-10 py-10 border-y border-slate-100">
     @if($article->author)
      <div class="flex items-center gap-4">
       <div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center text-brand-primary">
        <i class="fa-solid fa-user-pen"></i>
       </div>
       <div>
        <span class="block text-[8px] font-bold text-slate-400 uppercase tracking-widest">Architect</span>
        <span class="text-sm font-bold text-slate-900 uppercase tracking-tight">{{ $article->author }}</span>
       </div>
      </div>
     @endif

     <div class="flex items-center gap-6">
      <span class="text-[9px] font-bold uppercase tracking-[0.4em] text-slate-400">Distribution Nodes:</span>
      <div class="flex gap-3">
       @foreach([
        ['icon' => 'fa-facebook-f', 'url' => "https://www.facebook.com/sharer/sharer.php?u=".urlencode(url()->current())],
        ['icon' => 'fa-twitter', 'url' => "https://twitter.com/intent/tweet?url=".urlencode(url()->current())."&text=".urlencode($article->title)],
        ['icon' => 'fa-linkedin-in', 'url' => "https://www.linkedin.com/shareArticle?mini=true&url=".urlencode(url()->current())."&title=".urlencode($article->title)],
        ['icon' => 'fa-whatsapp', 'url' => "https://api.whatsapp.com/send?text=".urlencode($article->title . ' ' . url()->current())]
       ] as $social)
        <a href="{{ $social['url'] }}" target="_blank" 
         class="w-12 h-12 rounded-2xl bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-400 hover:bg-brand-primary hover:text-white hover:shadow-lg transition-all duration-500">
         <i class="fa-brands {{ $social['icon'] }} text-xs"></i>
        </a>
       @endforeach
      </div>
     </div>
    </div>

    <!-- Content Rendering Layer -->
    <div class="space-y-16 prose-builder">
     @php $blocks = json_decode($article->content, true); @endphp
     @if(is_array($blocks))
      @foreach($blocks as $block)
       @switch($block['type'] ?? '')
        @case('heading')
         @php $tag = $block['level'] ?? 'h2'; @endphp
         <{{ $tag }} class="text-4xl font-bold text-slate-900 leading-none uppercase tracking-tight pt-8">
          {!! $block['content'] ?? '' !!}<span class="text-brand-primary">.</span>
         </{{ $tag }}>
         @break

        @case('paragraph')
         <div class="text-xl text-slate-500 leading-relaxed font-medium prose-builder-inline">
          {!! $block['content'] ?? '' !!}
         </div>
         @break

        @case('image')
         @if($block['url'] ?? '')
          <figure class="rounded-2xl overflow-hidden shadow-2xl border border-slate-100">
           <img src="{{ $block['url'] }}" alt="{{ $block['caption'] ?? '' }}" class="w-full transition-all duration-1000">
           @if($block['caption'] ?? '')
            <figcaption class="p-6 bg-slate-50 text-[9px] font-bold text-slate-400 uppercase tracking-widest text-center">
             {{ $block['caption'] }}
            </figcaption>
           @endif
          </figure>
         @endif
         @break

        @case('quote')
         <div class="relative p-16 rounded-[3.5rem] bg-slate-950 overflow-hidden shadow-2xl">
          <div class="absolute top-0 right-0 w-32 h-32 bg-brand-primary/10 rounded-full blur-2xl"></div>
          <i class="fa-solid fa-quote-left text-brand-primary/10 text-9xl absolute -top-4 -left-4"></i>
          <div class="space-y-6 relative z-10">
           <p class="text-3xl text-white font-bold tracking-tight leading-tight">
            "{!! $block['content'] ?? '' !!}"
           </p>
           @if($block['author'] ?? '')
            <cite class="block text-[10px] font-bold text-brand-primary uppercase tracking-[0.4em] not-">— {{ $block['author'] }}</cite>
           @endif
          </div>
         </div>
         @break

        @case('list')
         <ul class="space-y-6">
          @foreach(($block['items'] ?? []) as $item)
           <li class="flex items-start gap-6 group">
            <div class="w-8 h-8 rounded-xl bg-brand-primary/10 flex items-center justify-center text-brand-primary shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-colors shadow-sm">
             <i class="fa-solid fa-check text-[10px]"></i>
            </div>
            <div class="text-xl text-slate-500 font-medium leading-relaxed">{!! $item !!}</div>
           </li>
          @endforeach
         </ul>
         @break

        @case('divider')
         <div class="py-8 flex items-center gap-4">
          <div class="h-px flex-1 bg-slate-100"></div>
          <div class="w-2 h-2 rounded-full bg-brand-primary"></div>
          <div class="h-px flex-1 bg-slate-100"></div>
         </div>
         @break
         
        @default
         {{-- Handle other blocks similarly with premium styling --}}
       @endswitch
      @endforeach
     @else
      <div class="prose prose-slate prose-xl max-w-none text-slate-500 font-medium leading-relaxed">
       {!! $article->content !!}
      </div>
     @endif
    </div>
    
    <!-- Return Channel -->
    <div class="pt-16 border-t border-slate-100">
     <a href="{{ route('blog.index') }}" class="group inline-flex items-center gap-4 text-[11px] font-bold text-slate-900 uppercase tracking-[0.3em] hover:text-brand-primary transition-all">
      <i class="fa-solid fa-arrow-left-long group-hover:-translate-x-3 transition-transform"></i>
      Return to Intelligence Node
     </a>
    </div>
   </div>
  </article>
 </div>
</section>

<!-- Related Intelligence -->
@if(isset($related) && $related->count() > 0)
<section class="py-20 bg-slate-50 border-t border-slate-100">
 <div class="container">
  <div class="space-y-16">
   <div class="space-y-4">
    <div class="h-1 w-24 bg-brand-primary"></div>
    <h2 class="text-3xl font-bold text-slate-900 uppercase tracking-tight">Related <br><span class="text-brand-primary ">Intelligence.</span></h2>
   </div>
   
   <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
    @foreach($related as $rel)
     <article class="group relative rounded-2xl bg-white border border-slate-100 overflow-hidden shadow-xl transition-all duration-700 hover:-translate-y-4 hover:shadow-brand-primary/20">
      <a href="{{ route('blog.show', $rel->slug) }}" class="block aspect-video overflow-hidden">
       <img src="{{ $rel->thumbnail_url }}" alt="{{ $rel->title }}" 
         class="w-full h-full object-cover group- transition-all duration-1000 group-hover:scale-110">
      </a>
      <div class="p-10 space-y-6">
       <div class="text-[9px] font-bold text-brand-primary uppercase tracking-widest">{{ $rel->category ?? 'Institutional Node' }}</div>
       <a href="{{ route('blog.show', $rel->slug) }}">
        <h3 class="text-xl font-bold text-slate-900 uppercase tracking-tight line-clamp-2 group-hover:text-brand-primary transition-colors leading-none">
         {{ $rel->title }}
        </h3>
       </a>
       <div class="pt-6 border-t border-slate-50">
        <a href="{{ route('blog.show', $rel->slug) }}" class="inline-flex items-center gap-4 text-[9px] font-bold text-slate-900 uppercase tracking-[0.3em] hover:gap-6 transition-all">
         Read Insight <i class="fa-solid fa-arrow-right-long"></i>
        </a>
       </div>
      </div>
     </article>
    @endforeach
   </div>
  </div>
 </div>
</section>
@endif

@endsection
