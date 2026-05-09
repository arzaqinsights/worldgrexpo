@extends('layouts.website')

@section('title', 'Legal & Government Liaisoning Services - World Grexpo Foundation')

@section('content')

    <!-- HERO SECTION -->
    <section class="relative pt-48 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
        </div>
        <div class="absolute inset-0 opacity-10 grayscale"
            style="background-image: url('https://images.unsplash.com/photo-1505664194779-8beaceb93744?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-left">
            <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Node Security</span>
            </div>
            <h1 class="text-6xl md:text-8xl font-black uppercase mb-8 tracking-tighter leading-[0.85] italic">
                Legal & <span class="text-brand-accent not-italic">Liaisoning</span>
            </h1>
            <p class="text-2xl text-slate-400 max-w-4xl leading-tight font-light italic">
                Absolute industrial security through specialized institutional legal support and strategic agency liaisoning.
            </p>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="py-32 bg-white relative">
        <div class="container space-y-32">
            
            <!-- SECTION 1: BUSINESS SECURITY -->
            <div class="flex flex-col lg:flex-row items-center gap-24">
                <div class="w-full lg:w-1/2 relative group">
                    <div class="rounded-sm overflow-hidden border border-slate-100 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?q=80&w=2070&auto=format&fit=crop" class="grayscale group-hover:grayscale-0 transition-all duration-1000 scale-105 group-hover:scale-100" alt="Legal Security">
                    </div>
                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-brand-primary opacity-10 rounded-sm -z-10 rotate-12"></div>
                </div>
                <div class="w-full lg:w-1/2 space-y-12 animate-on-scroll">
                    <h2 class="text-5xl font-black text-slate-950 uppercase italic leading-none tracking-tighter">
                        Architecting <span class="text-brand-primary not-italic">Compliance</span> <br> <span class="text-slate-400 text-3xl">Institutional Risk Mitigation</span>
                    </h2>
                    <p class="text-slate-500 text-xl leading-relaxed font-light">
                        In the global industrial node, non-compliance is an absolute risk. World Grexpo Foundation provides highly <strong>Specialized Legal Support</strong> and essential Government Liaisoning nodes, architected to protect industrial security. From complex contract laws to environmental node clearances, our framework ensures absolute focus on transition.
                    </p>
                     <div class="grid grid-cols-2 gap-2">
                        @foreach(['Environmental', 'Corporate Law', 'Arbitration', 'Licensing'] as $law)
                            <div class="p-6 bg-slate-50 border border-slate-100 rounded-sm flex items-center justify-center text-[10px] font-black uppercase tracking-widest text-slate-600 hover:bg-slate-950 hover:text-white transition-all duration-500 cursor-default">
                                {{ $law }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- SECTION 2: LIAISON FRAMEWORK -->
            <div class="space-y-20">
                <div class="text-left max-w-3xl">
                    <h3 class="text-5xl font-black uppercase italic text-slate-950 mb-8 tracking-tighter">Liaisoning Pathways</h3>
                    <p class="text-slate-500 text-xl font-light italic">Streamlining institutional interactions with global and central regulatory nodes.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-2">
                    @php
                        $liaison = [
                            ['t' => 'Regulatory Clearances', 'img' => 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=2070&auto=format&fit=crop', 'd' => 'Fast-track node approvals from global industrial & pollution boards.'],
                            ['t' => 'Certifications Support', 'img' => 'https://images.unsplash.com/photo-1544725121-be3b5d0c0bc5?q=80&w=2026&auto=format&fit=crop', 'd' => 'Institutional guidance on ISO, ZED, and zero-carbon certifications.'],
                            ['t' => 'Grievance Redressal', 'img' => 'https://images.unsplash.com/photo-1606857521015-7f9fdf423740?q=80&w=2070&auto=format&fit=crop', 'd' => 'Official institutional representation in cases of node disputes.']
                        ];
                    @endphp
                    @foreach($liaison as $li)
                    <div class="group relative h-[550px] overflow-hidden rounded-sm border border-slate-900">
                        <img src="{{ $li['img'] }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000" alt="Liaison Node">
                        <div class="absolute inset-0 bg-slate-950/80 group-hover:bg-brand-primary/80 transition-colors duration-700"></div>
                        <div class="absolute inset-0 p-12 flex flex-col justify-end">
                            <h4 class="text-3xl font-black text-brand-accent mb-4 uppercase italic tracking-tighter group-hover:text-white transition-colors">{{ $li['t'] }}</h4>
                            <p class="text-slate-400 text-[10px] font-bold leading-relaxed uppercase tracking-widest group-hover:text-white transition-colors">{{ $li['d'] }}</p>
                        </div>
                        <div class="absolute top-0 left-0 w-0 h-1.5 bg-brand-accent group-hover:w-full transition-all duration-700"></div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- SECTION 3: SERVICE STRENGTH -->
            <div class="bg-slate-950 p-16 lg:p-24 rounded-sm relative overflow-hidden text-center space-y-20">
                 <div class="absolute inset-0 z-0">
                    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:40px_40px]"></div>
                 </div>
                 <h3 class="text-5xl font-black uppercase italic tracking-tighter text-white relative z-10">Institutional <span class="text-brand-accent">Security Nodes</span></h3>
                 <div class="grid grid-cols-2 md:grid-cols-4 gap-4 relative z-10">
                    @foreach([
                        ['t' => 'Legal Advisory', 'val' => '24/7 Support'],
                        ['t' => 'Agency Liaison', 'val' => '100+ Nodes'],
                        ['t' => 'Dispute Resolution', 'val' => '95% Success'],
                        ['t' => 'Certifications', 'val' => 'Absolute Node']
                    ] as $metric)
                    <div class="p-10 bg-white/5 border border-white/10 rounded-sm hover:bg-brand-primary transition-all duration-700 group">
                        <p class="text-brand-accent font-black text-3xl mb-4 group-hover:text-slate-950 transition-colors italic tracking-tighter">{{ $metric['val'] }}</p>
                        <p class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em] group-hover:text-slate-900 transition-colors">{{ $metric['t'] }}</p>
                    </div>
                    @endforeach
                 </div>
            </div>

            <!-- SECTION 4: CALL TO ACTION -->
            <div class="relative bg-slate-950 p-24 rounded-sm text-left overflow-hidden border-l-[20px] border-brand-accent group">
                <div class="absolute inset-0 z-0">
                    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:30px_30px]"></div>
                </div>
                <div class="relative z-10 space-y-12 text-left">
                    <h3 class="text-6xl md:text-9xl font-black text-white uppercase tracking-tighter italic leading-none">Secure Your <br> <span class="text-brand-accent">Deal Node.</span></h3>
                    <p class="text-2xl text-slate-400 max-w-4xl leading-relaxed font-light italic opacity-80 mb-16">
                        Don't let institutional ambiguity stop your industrial node momentum. Get absolute protection and liaisoning support today.
                    </p>
                    <a href="{{ route('forms.show', ['slug' => 'join-us']) }}" class="inline-flex items-center gap-6 px-16 py-8 bg-white text-slate-950 font-black uppercase tracking-[0.3em] text-xs rounded-sm hover:bg-brand-accent hover:text-slate-950 transition-all duration-700 shadow-4xl italic group">
                        Acquire Legal Consultation <i class="fa-solid fa-scale-balanced text-brand-accent group-hover:translate-x-4 transition-transform"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
