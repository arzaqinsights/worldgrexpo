@extends('layouts.website')

@section('title', 'Institutional Insights & News - World Grexpo Foundation')

@section('content')
<!-- Hero Section -->
<section class="relative pt-48 pb-24 bg-slate-950 text-white overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
    </div>
    
    <div class="container relative z-10 text-left">
        <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
            <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Intelligence Hub</span>
        </div>
        <h1 class="text-6xl md:text-8xl font-black text-white mb-8 tracking-tighter uppercase italic leading-[0.85]">
            World Grexpo <br> <span class="text-brand-accent not-italic">Insights</span>
        </h1>
        <p class="text-2xl text-slate-400 max-w-4xl leading-tight font-light italic border-l-2 border-slate-800 pl-8">
            Stay architecturally updated with the latest industry trends, press intelligence, and crucial global transition initiatives.
        </p>
    </div>
</section>

<!-- Blog Grid -->
<section class="py-32 bg-white relative">
    <div class="container relative z-10">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
            @forelse($articles as $article)
                <article class="bg-slate-50 border border-slate-100 rounded-sm overflow-hidden group hover:bg-slate-950 transition-all duration-700 flex flex-col relative shadow-sm">
                    <div class="absolute top-0 left-0 w-0 h-1 bg-brand-accent group-hover:w-full transition-all duration-700 z-30"></div>
                    
                    <a href="{{ route('blog.show', $article->slug) }}" class="block relative h-[350px] overflow-hidden border-b border-slate-100 group-hover:border-slate-800">
                        <img src="{{ $article->thumbnail_url }}" alt="{{ $article->title }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-[2000ms]">
                        <div class="absolute inset-0 bg-slate-950/20 group-hover:bg-transparent transition-all duration-700"></div>
                        
                        @if($article->category)
                            <div class="absolute top-8 left-8 flex flex-wrap gap-2 z-20">
                                @foreach(array_map('trim', explode(',', $article->category)) as $cat)
                                    <span class="bg-slate-950/80 backdrop-blur-md px-4 py-2 text-[8px] font-black text-brand-accent uppercase tracking-widest border border-white/10 italic rounded-sm">{{ $cat }}</span>
                                @endforeach
                            </div>
                        @endif
                    </a>

                    <div class="p-12 flex flex-col flex-1 relative">
                        <div class="flex items-center gap-6 text-[10px] font-black text-slate-400 mb-8 uppercase tracking-widest group-hover:text-slate-500 transition-colors">
                            <span class="flex items-center gap-2 italic"><i class="fa-regular fa-calendar text-brand-accent"></i> {{ $article->published_at ? $article->published_at->format('M d, Y') : $article->created_at->format('M d, Y') }}</span>
                            @if($article->author)
                                <span class="w-1 h-1 bg-slate-200 group-hover:bg-slate-800"></span>
                                <span class="flex items-center gap-2 italic"><i class="fa-solid fa-user-pen text-brand-accent"></i> {{ $article->author }}</span>
                            @endif
                        </div>
                        
                        <a href="{{ route('blog.show', $article->slug) }}" class="block mb-8">
                            <h3 class="text-2xl font-black text-slate-950 leading-tight tracking-tighter uppercase italic group-hover:text-white transition-colors line-clamp-2">
                                {{ $article->title }}
                            </h3>
                        </a>
                        
                        <p class="text-slate-500 text-[10px] font-black uppercase tracking-widest leading-loose mb-10 line-clamp-3 flex-1 group-hover:text-slate-400 transition-colors">
                            {{ $article->excerpt }}
                        </p>
                        
                        <div class="mt-auto pt-10 border-t border-slate-200 group-hover:border-white/10 flex items-center justify-between transition-colors">
                            <a href="{{ route('blog.show', $article->slug) }}" class="text-[10px] font-black text-slate-950 group-hover:text-brand-accent transition-colors flex items-center gap-4 uppercase tracking-[0.4em] italic">
                                Read Insight <i class="fa-solid fa-arrow-right-long text-xs transition-transform group-hover:translate-x-4"></i>
                            </a>
                        </div>
                    </div>
                </article>
            @empty
                <div class="col-span-full py-32 text-center bg-slate-50 border border-slate-100 rounded-sm">
                    <i class="fa-regular fa-folder-open text-9xl text-slate-200 mb-10 block"></i>
                    <h2 class="text-3xl font-black text-slate-400 uppercase italic tracking-widest leading-none mb-4">No Institutional Insights Yet</h2>
                    <p class="text-slate-400 font-light italic">We are currently architecting insightful intelligence for you.</p>
                </div>
            @endforelse
        </div>

        @if($articles->hasPages())
            <div class="mt-24 flex justify-start">
                {{ $articles->links() }}
            </div>
        @endif

    </div>
</section>
@endsection
