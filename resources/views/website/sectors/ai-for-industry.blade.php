@extends('layouts.website')

@section('title', 'AI for Industry - Transforming Every Sector')

@section('content')

    <!-- Premium Hero Section -->
    <section class="relative pt-48 pb-32 bg-slate-950 overflow-hidden">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-30">
            <img src="{{ asset('images/sectors/ai-for-industry.jpg') }}" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/80 to-slate-950"></div>
        
        <!-- Animated Decorators -->
        <div class="absolute top-1/4 right-0 w-[600px] h-[600px] bg-brand-primary/10 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand-accent/5 rounded-full blur-[100px]"></div>

        <div class="container relative z-10 text-center space-y-8">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 backdrop-blur-md text-brand-accent text-[10px] font-black uppercase tracking-[0.3em]">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-pulse"></span>
                Intelligent Systems Era
            </div>
            <h1 class="text-6xl md:text-8xl font-black text-white leading-[0.9] tracking-tighter uppercase">
                AI FOR <br>
                <span class="text-brand-primary italic">Industry.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-3xl mx-auto leading-relaxed font-medium">
                Transforming global industrial landscapes through autonomous intelligence and cognitive computing.
            </p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="section-padding bg-white relative">
        <div class="container space-y-32">

            <!-- Executive Summary -->
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div class="space-y-8" x-data="{ visible: false }" x-intersect="visible = true">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary/5 text-brand-primary text-[10px] font-black uppercase tracking-[0.2em]">
                        Executive Summary
                    </div>
                    <h2 class="text-5xl font-black text-slate-900 leading-[0.9] tracking-tighter uppercase">
                        The Horizontal <br>
                        <span class="text-brand-primary italic">Capability Layer.</span>
                    </h2>
                    <div class="space-y-6 text-xl text-slate-500 font-medium leading-relaxed">
                        <p>
                            Artificial Intelligence is no longer sector-specific—it is a <strong class="text-slate-900">horizontal capability layer</strong> transforming every major industry.
                        </p>
                        <p>
                            AI enabling Industry 4.0, where machines learn, predict failures, and optimize production in real time, driving intelligent, sustainable, and inclusive growth.
                        </p>
                    </div>
                </div>

                <!-- Segments Grid -->
                <div class="grid grid-cols-2 gap-6">
                    @foreach(['Manufacturing', 'Sustainability', 'Agriculture', 'Healthcare'] as $idx => $svc)
                        <div class="p-10 rounded-[2.5rem] bg-slate-50 border border-slate-100 flex flex-col items-center text-center group hover:bg-brand-primary transition-all duration-500">
                            <div class="text-4xl font-black text-brand-primary group-hover:text-white transition-colors mb-4">
                                0{{ $idx + 1 }}
                            </div>
                            <p class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 group-hover:text-white/80">{{ $svc }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Focus Areas Grid -->
            <div class="grid lg:grid-cols-3 gap-10">
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
                    <div class="p-12 rounded-[3rem] bg-slate-50 border border-slate-100 space-y-8 group hover:bg-white hover:shadow-2xl hover:shadow-brand-primary/5 transition-all duration-500">
                        <div class="space-y-2">
                            <div class="text-brand-primary text-[10px] font-black uppercase tracking-[0.3em]">{{ $area['tag'] }}</div>
                            <h3 class="text-3xl font-black text-slate-900 uppercase tracking-tighter">{{ $area['title'] }}</h3>
                        </div>
                        <ul class="space-y-4">
                            @foreach($area['items'] as $item)
                                <li class="flex items-center gap-4 text-xs font-black uppercase tracking-widest text-slate-500 group-hover:text-slate-900 transition-colors">
                                    <i class="fa-solid fa-microchip text-brand-primary"></i>
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                        <div class="pt-6 border-t border-slate-200">
                            <div class="text-[10px] font-black text-brand-primary uppercase tracking-[0.2em]">{{ $area['impact'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Investor Snapshot -->
            <div class="relative p-12 lg:p-24 rounded-[4rem] bg-slate-950 overflow-hidden shadow-2xl">
                <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-brand-primary/10 rounded-full blur-[150px]"></div>
                <div class="relative z-10 grid lg:grid-cols-2 gap-20 items-center">
                    <div class="space-y-10">
                        <div class="space-y-6">
                            <div class="text-brand-accent text-[10px] font-black uppercase tracking-[0.3em]">Market Intelligence</div>
                            <h2 class="text-5xl font-black text-white leading-[0.9] tracking-tighter uppercase">
                                Investor <br>
                                <span class="text-brand-primary italic">Snapshot.</span>
                            </h2>
                            <p class="text-xl text-slate-400 font-medium leading-relaxed">
                                Why AI is the #1 Investment Opportunity of the Decade.
                            </p>
                        </div>
                        <div class="space-y-4">
                            @foreach([
                                'Fastest-growing global tech sector',
                                'Cross-industry adoption (100% applicability)',
                                'High ROI through efficiency & automation',
                                'Strong government & corporate backing'
                            ] as $hl)
                                <div class="flex items-center gap-4 group">
                                    <div class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-pulse"></div>
                                    <span class="text-xs font-black uppercase text-slate-400 group-hover:text-white transition-colors tracking-widest">{{ $hl }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        @foreach(['Generative AI', 'AI SaaS', 'AI Infrastructure', 'Industry Solutions'] as $tag)
                            <div class="p-10 rounded-[2.5rem] bg-white/5 border border-white/10 backdrop-blur-md flex flex-col items-center justify-center text-center group hover:bg-brand-primary transition-all duration-500">
                                <span class="text-[10px] font-black uppercase tracking-[0.3em] text-white group-hover:text-white">{{ $tag }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Global Summit Concept -->
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div class="space-y-10">
                    <div class="space-y-6">
                        <div class="text-brand-primary text-[10px] font-black uppercase tracking-[0.3em]">Thought Leadership</div>
                        <h2 class="text-5xl font-black text-slate-900 leading-[0.9] tracking-tighter uppercase">
                            Global AI <br>
                            <span class="text-brand-primary italic">Summit.</span>
                        </h2>
                    </div>
                    <div class="p-10 rounded-[3rem] bg-slate-50 border border-slate-100 space-y-6">
                        <p class="text-[10px] font-black text-brand-primary uppercase tracking-[0.2em]">Summit Theme</p>
                        <p class="text-3xl font-black text-slate-900 leading-tight tracking-tight uppercase">
                            "AI for Viksit Bharat 2047: Driving Intelligent, Sustainable & Inclusive Growth"
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-4">
                        @foreach(['Global Leaders', 'Policy Makers', 'Startup Founders', 'Academic Experts'] as $spk)
                             <div class="px-6 py-3 rounded-2xl bg-slate-900 text-white text-[10px] font-black uppercase tracking-widest">{{ $spk }}</div>
                        @endforeach
                    </div>
                </div>

                <div class="p-12 lg:p-20 rounded-[4rem] bg-slate-950 text-white space-y-12 relative overflow-hidden group">
                    <div class="absolute inset-0 bg-linear-to-br from-brand-primary/20 to-transparent"></div>
                    <div class="relative z-10 space-y-8">
                        <h4 class="text-2xl font-black uppercase tracking-[0.2em] text-brand-accent">Conference Tracks</h4>
                        <div class="space-y-6">
                            @foreach([
                                'AI in Manufacturing & Industry 4.0',
                                'AI for Sustainability & Net Zero',
                                'AI in Healthcare & Life Sciences',
                                'AI in Agriculture & Food Security',
                                'Finance, Cybersecurity & Governance',
                                'Generative AI & Future of Work'
                            ] as $track)
                            <div class="flex items-center gap-6 group/track">
                                <div class="w-10 h-10 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-brand-primary group-hover/track:bg-brand-primary group-hover/track:text-white transition-all">
                                    <i class="fa-solid fa-circle-nodes"></i>
                                </div>
                                <p class="text-sm font-black uppercase tracking-widest text-slate-400 group-hover/track:text-white transition-colors">{{ $track }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-16 lg:p-24 rounded-[4rem] bg-slate-950 overflow-hidden text-center shadow-[0_50px_100px_-20px_rgba(0,0,0,0.5)] border border-white/5">
                <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_bottom,rgba(0,75,35,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-12">
                    <h3 class="text-4xl md:text-6xl font-black text-white uppercase tracking-tighter leading-none">
                        Structural Shift <br>in <span class="text-brand-primary italic">Industry.</span>
                    </h3>
                    <p class="text-xl text-slate-400 max-w-3xl mx-auto leading-relaxed font-medium">
                        AI is not just a technology wave—it is a structural shift in how economies function and industries operate. Empower your industrial future with intelligent systems today.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="group flex items-center gap-4 px-12 py-6 rounded-2xl bg-brand-primary text-white font-black uppercase tracking-widest text-sm hover:bg-brand-primary-dark transition-all shadow-2xl shadow-brand-primary/20">
                            Register for AI Training & Support
                            <i class="fa-solid fa-arrow-right-long group-hover:translate-x-2 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
on
