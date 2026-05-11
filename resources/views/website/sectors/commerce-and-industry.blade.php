@extends('layouts.website')

@section('title', 'Commerce & Industry Sector')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/sectors/commerce-industry-hero.png') }}" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-indigo-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-indigo-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-indigo-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Economic Integration Protocol</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Commerce & <br>
                <span class="text-indigo-600">Industry.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-indigo-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Empowering Trade. Enabling Industry. Accelerating Growth.
            </p>
        </div>
    </section>

    <!-- Content Interface -->
    <section class="py-32 bg-white relative">
        <div class="container space-y-48">

            <!-- Executive Summary -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200">
                <div class="p-16 lg:p-24 bg-white space-y-12">
                    <div class="section-heading text-left">
                        <span class="subtitle">Global Competitiveness Architecture</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Driving <br><span class="text-indigo-600">MSME Growth.</span></h2>
                        <div class="accent-line bg-indigo-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            The <strong class="text-slate-900 font-black uppercase tracking-tight">Commerce & Industry</strong> sector of World Grexpo acts as a strategic bridge between businesses, government, and global markets.
                        </p>
                        <p>
                            It is dedicated to strengthening India's MSME ecosystem by enabling trade, fostering industrial growth, and supporting entrepreneurship at all levels.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute inset-0 bg-indigo-600/10"></div>
                    <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-3xl">
                        <img src="{{ asset('images/sectors/commerce-industry-details.png') }}" alt="Commerce & Industry"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div class="absolute top-0 right-0 p-8">
                        <div class="bg-indigo-600 text-white text-[10px] font-black px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
                            Strategic Trade Bridge
                        </div>
                    </div>
                </div>
            </div>

            <!-- Focus Areas & Services -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <!-- Focus Areas -->
                <div class="p-16 lg:p-24 bg-slate-950 text-white space-y-16 relative overflow-hidden group">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(79,70,229,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-12">
                        <div class="text-indigo-400 text-[10px] font-black uppercase tracking-[0.4em]">Strategic Nodes</div>
                        <h3 class="text-5xl font-black uppercase tracking-tighter italic text-white leading-tight">Key Focus Areas</h3>
                        
                        <div class="space-y-10 pt-8">
                            @foreach([
                                ['title' => 'Business Growth', 'desc' => 'Scaling operations & market linkage.'],
                                ['title' => 'Trade & Export', 'desc' => 'Connecting with global buyers.'],
                                ['title' => 'Policy Advocacy', 'desc' => 'Voice of MSMEs to policymakers.'],
                                ['title' => 'Industrial Dev', 'desc' => 'Promoting "Make in India" initiatives.'],
                                ['title' => 'Investment', 'desc' => 'Connecting startups with VC funding.'],
                            ] as $area)
                                <div class="space-y-4 group/item">
                                    <div class="flex items-center gap-6">
                                        <div class="w-2 h-2 bg-indigo-600 group-hover/item:scale-150 transition-transform duration-500"></div>
                                        <span class="text-xl font-black uppercase tracking-widest text-indigo-400 group-hover/item:text-white transition-colors duration-500 leading-tight">{{ $area['title'] }}</span>
                                    </div>
                                    <p class="text-[12px] font-black uppercase text-slate-500 tracking-[0.1em] pl-8">{{ $area['desc'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Services -->
                <div class="p-16 lg:p-24 bg-white space-y-16 border-l border-slate-200">
                    <div class="section-heading text-left">
                        <span class="subtitle">Operational Excellence</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Key Services <br><span class="text-indigo-600">Offered.</span></h2>
                        <div class="accent-line bg-indigo-600"></div>
                    </div>
                    
                    <div class="grid grid-cols-1 gap-px bg-slate-200 border border-slate-200 shadow-2xl">
                        @foreach([
                            ['icon' => 'network-wired', 'label' => 'Business Networking Forums'],
                            ['icon' => 'plane-departure', 'label' => 'International Trade Fairs'],
                            ['icon' => 'users-gear', 'label' => 'Policy Roundtables'],
                            ['icon' => 'trophy', 'label' => 'Awards & Recognition Platforms'],
                            ['icon' => 'graduation-cap', 'label' => 'Skill Development Programs'],
                        ] as $svc)
                            <div class="flex items-center gap-8 p-10 bg-white group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                                <div class="absolute top-0 left-0 w-1 h-full bg-indigo-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                                <div class="w-16 h-16 bg-slate-50 border border-slate-100 flex items-center justify-center text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white transition-all shadow-sm duration-500">
                                    <i class="fa-solid fa-{{ $svc['icon'] }} text-2xl"></i>
                                </div>
                                <span class="text-xl font-black uppercase text-slate-900 group-hover:text-white tracking-[0.1em] leading-tight italic transition-colors">{{ $svc['label'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Industries Covered -->
            <div class="p-24 lg:p-32 bg-slate-950 relative overflow-hidden group shadow-3xl border border-white/5">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(79,70,229,0.05),transparent)]"></div>
                <div class="relative z-10 grid lg:grid-cols-2 gap-24 items-center">
                    <div class="space-y-12">
                        <h3 class="text-6xl font-black uppercase tracking-tighter italic text-indigo-600">Diverse Industries <br><span class="text-white">Covered.</span></h3>
                        <p class="text-2xl text-slate-400 font-medium leading-relaxed italic border-l-8 border-indigo-600/30 pl-10 uppercase tracking-tighter">
                            Our Commerce & Industry domain connects multiple high-growth sectors, ensuring comprehensive growth strategies across the national economy.
                        </p>
                        <div class="grid grid-cols-2 gap-px bg-white/10 border border-white/10 shadow-2xl">
                             <div class="p-10 bg-slate-950 text-center space-y-4 hover:bg-indigo-600 transition-all duration-500 group/card">
                                <p class="text-2xl font-black text-indigo-400 group-hover/card:text-slate-950 italic">Multi-Sector</p>
                                <p class="text-[10px] text-slate-500 uppercase tracking-tight group-hover/card:text-slate-950/70">Ecosystem Integration</p>
                             </div>
                             <div class="p-10 bg-slate-950 text-center space-y-4 hover:bg-indigo-600 transition-all duration-500 group/card">
                                <p class="text-2xl font-black text-indigo-400 group-hover/card:text-slate-950 italic">Make In India</p>
                                <p class="text-[10px] text-slate-500 uppercase tracking-tight group-hover/card:text-slate-950/70">Self Reliant Economy</p>
                             </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-px bg-white/10 border border-white/10 shadow-3xl">
                        @foreach(['Manufacturing & Engineering', 'FMCG & Retail', 'Chemicals & Petro', 'Textile & Apparel', 'Renewable Energy', 'IT & Digital', 'Agriculture & Food', 'Logistics & Supply'] as $ind)
                        <div class="flex items-center gap-6 p-8 bg-slate-950 hover:bg-indigo-600 group/ind transition-all duration-500">
                            <i class="fa-solid fa-check text-indigo-400 group-hover/ind:text-slate-950"></i> 
                            <span class="text-[10px] font-black uppercase text-indigo-100 group-hover/ind:text-slate-950 tracking-widest leading-tight">{{ $ind }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Why Join -->
            <div class="grid lg:grid-cols-2 gap-32 items-center">
                <div class="space-y-16">
                    <h2 class="text-6xl font-black text-slate-950 uppercase tracking-tighter italic">Why Join <br><span class="text-indigo-600">This Platform?</span></h2>
                    <div class="grid grid-cols-1 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                        @foreach([
                            ['icon' => 'globe', 'title' => 'Connection to 100K+ business network'],
                            ['icon' => 'building-columns', 'title' => 'Direct connect with government & policymakers'],
                            ['icon' => 'ship', 'title' => 'Opportunities for global trade expansion'],
                            ['icon' => 'medal', 'title' => 'Recognition through national awards platforms'],
                            ['icon' => 'calendar-check', 'title' => 'Participation in high-impact industry events & expos'],
                        ] as $i)
                        <div class="flex items-center gap-10 p-12 bg-white group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-indigo-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-16 h-16 flex shrink-0 items-center justify-center bg-slate-50 border border-slate-100 text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white transition-all shadow-sm duration-500">
                                <i class="fa-solid fa-{{ $i['icon'] }} text-2xl"></i>
                            </div>
                            <span class="text-xl font-black text-slate-700 group-hover:text-white uppercase tracking-widest leading-tight transition-colors italic">{{ $i['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-16 lg:p-24 bg-indigo-50 border border-indigo-100 shadow-3xl relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-600/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                    <div class="relative z-10 text-center space-y-12">
                        <div class="w-24 h-24 mx-auto bg-white flex items-center justify-center shadow-2xl text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-700">
                            <i class="fa-solid fa-rocket text-5xl"></i>
                        </div>
                        <h3 class="text-5xl font-black text-slate-950 italic uppercase tracking-tighter">Accelerate Your Journey</h3>
                        <p class="text-2xl text-slate-500 font-medium leading-relaxed italic border-l-8 border-indigo-600/30 pl-10 uppercase tracking-tighter">
                            Whether you are a startup seeking investment, or an established enterprise looking for global export opportunities, the Commerce & Industry wing is your dedicated partner.
                        </p>
                        <div class="flex justify-center pt-8">
                            <a href="{{ route('join.index') }}" class="btn-sharp px-16 w-full !bg-indigo-600 !text-white hover:!bg-slate-950 transition-all duration-700">
                                Become a Member <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(79,70,229,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        Collaborate. <br><span class="text-indigo-600">Succeed.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-indigo-600 pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        Take your business to the next level with World Grexpo. Connect with global leaders, shape policies, and drive industrial growth.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('contact') }}" 
                            class="btn-sharp px-16 group !border-indigo-600/30 hover:!bg-indigo-600">
                            Get In Touch 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
