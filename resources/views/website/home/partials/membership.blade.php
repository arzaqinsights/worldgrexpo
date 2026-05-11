<!-- Membership Benefits -->
<section class="section-padding bg-white relative overflow-hidden border-b border-slate-100">
    <div class="container relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 xl:gap-24 items-start">
            
            <!-- Left Sticky Sidebar Image & CTA (Sharp) -->
            <div class="lg:col-span-5 sticky top-32 z-30 hidden lg:block">
                <div class="relative bg-slate-900 overflow-hidden border border-slate-200 aspect-[4/5]">
                    <img src="{{ asset('images/membership-sidebar.png') }}" alt="World Grexpo Membership" class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-105 transition-transform duration-1000">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/40 to-transparent"></div>
                    
                    <div class="absolute inset-0 p-12 flex flex-col justify-end">
                        <div class="space-y-8">
                            <div class="flex items-center gap-4">
                                <span class="w-12 h-1 bg-brand-accent"></span>
                                <span class="text-white text-[11px] font-black tracking-[0.3em] uppercase">Premium Network</span>
                            </div>
                            
                            <h2 class="text-4xl font-black text-white leading-tight uppercase tracking-tighter">
                                Empowering <br>Business <span class="text-brand-primary">Growth.</span>
                            </h2>
                            
                            <p class="text-white/70 text-lg font-medium leading-relaxed">
                                Connect with industry leaders, Padmashri & Padma Bhushan dignitaries. Expand your reach and grow worldwide.
                            </p>
                            
                            <a href="{{ route('join.index') }}" class="btn-sharp w-full group">
                                Join Membership Today
                                <i class="fa-solid fa-arrow-right ml-3 group-hover:translate-x-2 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Content -->
            <div class="lg:col-span-7 space-y-16">
                <!-- Section Heading -->
                <div class="space-y-8">
                    <div class="section-heading">
                        <span class="subtitle">Why Join World Grexpo?</span>
                        <h2>Unlock <span class="text-brand-primary">Premium Benefits.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    
                    <div class="relative p-10 border-l-8 border-brand-primary bg-slate-50">
                        <p class="text-2xl text-slate-900 font-black leading-tight tracking-tight uppercase italic">
                            "World Grexpo membership empowers businesses with networking, visibility, policy support, and growth opportunities."
                        </p>
                    </div>
                </div>

                @php
                    $benefits = [
                        ['title' => 'Strong Business Networking Platform', 'desc' => 'Access a global network of MSMEs and corporates. Join dedicated WhatsApp & digital groups to connect with worldwide investors and partners.'],
                        ['title' => 'Speaking & Brand Visibility', 'desc' => 'Become a Guest Speaker or Panelist at national & international conferences. Showcase your brand via summits, expos, and industry events.'],
                        ['title' => 'Business Growth & Promotion Support', 'desc' => 'Gain promotion through events, exhibitions, and chamber activities to increase brand recognition, credibility, and market exposure across sectors.'],
                        ['title' => 'Government Policy & Market Updates', 'desc' => 'Stay compliant and competitive with regular updates on critical Government schemes, MSME policies, and shifting industry regulations.'],
                        ['title' => 'Legal & Advisory Support', 'desc' => 'Receive vital legal assistance and strategic business guidance covering essential compliance, expansion, and detailed strategic planning.'],
                        ['title' => 'Events, Conferences & Awards Access', 'desc' => 'Secure exclusive invitations to premium industry conferences, targeted trade fairs, and prestigious business excellence awards.'],
                        ['title' => 'Business Planning & Support Services', 'desc' => 'Tailored assistance perfectly suited for Startups, MSMEs & Corporates in business planning, proactive growth strategies, and market entry tactics.'],
                        ['title' => 'Knowledge & Awareness Programs', 'desc' => 'Take part in skill-enhancing training programs, engaging awareness sessions, and sector-specific expert seminars.'],
                        ['title' => 'Liaisoning & Industry Representation', 'desc' => 'Strong support in connecting with key government bodies and authorities with an effective representation of crucial industry concerns.'],
                        ['title' => 'Multi-Sector Opportunities', 'desc' => 'Broad exposure to growing sectors like Recycling & Sustainability, Packaging & Plastics, Renewable Energy, Food Processing, Textile & Manufacturing.'],
                        ['title' => 'Exclusive Member Community', 'desc' => 'Become part of a highly trusted business ecosystem with direct access to an elite advisory board and renowned industry experts.'],
                        ['title' => 'Digital Platform & Visibility', 'desc' => 'Leverage our dynamic online platform to seamlessly share updates, widely promote your services, and effectively engage stakeholders.']
                    ];
                @endphp

                <!-- Sharp Benefits List -->
                <div class="grid grid-cols-1 gap-px bg-slate-100 border border-slate-100">
                    @foreach($benefits as $index => $benefit)
                        <div class="flex gap-10 bg-white p-10 group hover:bg-slate-50 transition-all duration-300">
                            <!-- Big Number (Sharp) -->
                            <div class="shrink-0">
                                <span class="text-5xl font-black text-slate-100 group-hover:text-brand-primary transition-colors duration-500 tabular-nums">
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </span>
                            </div>
                            
                            <!-- Content -->
                            <div class="space-y-3 pt-2">
                                <h4 class="text-xl font-black text-slate-900 group-hover:text-brand-primary transition-colors duration-300 uppercase tracking-tight">
                                    {{ $benefit['title'] }}
                                </h4>
                                <p class="text-[13px] text-slate-500 font-medium leading-relaxed max-w-xl">
                                    {{ $benefit['desc'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Final CTA -->
                <div class="pt-12">
                    <a href="{{ route('join.index') }}" class="btn-sharp w-full lg:w-auto px-16 group">
                        Apply For Membership Today
                        <i class="fa-solid fa-chevron-right ml-4 group-hover:translate-x-2 transition-transform text-[10px]"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
