<section class="section-padding bg-white relative overflow-hidden">
    <!-- Sophisticated Background Decorators -->
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-primary/5 rounded-full blur-[120px] -mr-96 -mt-96"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-brand-accent/5 rounded-full blur-[100px]"></div>

    <div class="container relative z-10">
        <div class="flex flex-col lg:flex-row gap-20 items-start">
            
            <!-- FAQ Content Area -->
            <div class="w-full lg:w-7/12 space-y-12" x-data="{ active: 1 }">
                <!-- Mobile Header -->
                <div class="lg:hidden text-center space-y-6">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary/5 text-brand-primary text-[10px] font-black uppercase tracking-[0.2em]">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-pulse"></span>
                        Knowledge Base
                    </div>
                    <h2 class="text-4xl font-black text-slate-900 tracking-tighter">
                        Common <span class="text-brand-primary italic">Questions.</span>
                    </h2>
                </div>

                <!-- Desktop Header -->
                <div class="hidden lg:block space-y-6">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary/5 text-brand-primary text-[10px] font-black uppercase tracking-[0.2em]">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-pulse"></span>
                        FAQ Center
                    </div>
                    <h2 class="text-5xl md:text-7xl font-black text-slate-900 leading-[0.9] tracking-tighter">
                        Everything you need <br>
                        <span class="text-brand-primary italic">to know.</span>
                    </h2>
                    <p class="text-xl text-slate-500 font-medium leading-relaxed max-w-xl">
                        Comprehensive answers about World Grexpo events, memberships, guidelines, and global opportunities.
                    </p>
                </div>

                @php
                    $faqs = [
                        ['id' => 1, 'q' => 'What is World Grexpo?', 'a' => 'World Grexpo Foundation is a leading platform dedicated to empowering MSMEs, startups, corporates, and entrepreneurs through high-impact networking, policy advocacy, and global business opportunities.'],
                        ['id' => 2, 'q' => 'What types of events do you organize?', 'a' => 'We organize Global Summits & Expos, Industry Conferences, Business Excellence Awards, Startup & Innovation Forums, and Sector-specific networking events.'],
                        ['id' => 3, 'q' => 'How can I register for an event?', 'a' => 'You can register directly through our website by selecting your desired event, filling in your details, and completing the registration via our secure portal.'],
                        ['id' => 4, 'q' => 'Is membership available for startups?', 'a' => 'Yes, we offer specialized membership tiers for MSMEs, Corporates, and Startups with exclusive access to events and industry insights.'],
                        ['id' => 5, 'q' => 'Who do I contact for technical support?', 'a' => 'Contact ighosh.1457@gmail.com or ighosh.chairman@worldgrexpo.com for all support and technical queries related to the platform.'],
                    ];
                @endphp

                <!-- Premium Accordion List -->
                <div class="space-y-4">
                    @foreach($faqs as $item)
                        <div class="group bg-white rounded-3xl border border-slate-100 transition-all duration-500 hover:shadow-xl hover:shadow-brand-primary/5"
                             :class="active === {{ $item['id'] }} ? 'border-brand-primary/20 shadow-xl shadow-brand-primary/5' : ''">
                            
                            <button class="w-full flex items-center justify-between p-8 text-left outline-none" 
                                    @click="active === {{ $item['id'] }} ? active = null : active = {{ $item['id'] }}">
                                <span class="text-lg font-black text-slate-900 group-hover:text-brand-primary transition-colors pr-6 leading-tight uppercase tracking-tight">
                                    {{ $item['q'] }}
                                </span>
                                <div class="w-10 h-10 rounded-2xl flex items-center justify-center shrink-0 transition-all duration-500"
                                     :class="active === {{ $item['id'] }} ? 'bg-brand-primary text-white rotate-180' : 'bg-slate-50 text-slate-400 group-hover:bg-brand-primary group-hover:text-white'">
                                    <i class="fa-solid fa-chevron-down text-xs"></i>
                                </div>
                            </button>

                            <div class="transition-all duration-500 overflow-hidden" 
                                 x-show="active === {{ $item['id'] }}" 
                                 x-collapse>
                                <div class="px-8 pb-8">
                                    <div class="h-[1px] w-full bg-slate-50 mb-6"></div>
                                    <p class="text-slate-500 font-medium leading-relaxed">
                                        {{ $item['a'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Sticky Visual Sidebar -->
            <div class="w-full lg:w-5/12 lg:sticky lg:top-32 self-start">
                <div class="relative rounded-[3rem] overflow-hidden shadow-2xl group min-h-[600px] flex items-end">
                    <img src="{{ asset('images/faq-bg.png') }}" alt="Support" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 grayscale group-hover:grayscale-0">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/60 to-transparent"></div>
                    
                    <div class="relative z-10 p-12 space-y-8">
                        <div class="space-y-4">
                            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white text-[10px] font-black uppercase tracking-[0.2em]">
                                <i class="fa-solid fa-headset text-brand-accent"></i>
                                24/7 Premium Support
                            </div>
                            <h3 class="text-4xl font-black text-white leading-tight">
                                Still have <br><span class="text-brand-accent italic">Questions?</span>
                            </h3>
                            <p class="text-white/70 font-medium leading-relaxed">
                                Our dedicated support team is available round the clock to help you with your global business journey.
                            </p>
                        </div>
                        
                        <a href="{{ route('contact') }}" 
                            class="w-full py-5 rounded-2xl bg-white text-slate-900 font-black text-xs uppercase tracking-widest flex items-center justify-center gap-3 hover:bg-brand-accent transition-all shadow-xl">
                            Contact Support Team
                            <i class="fa-solid fa-arrow-right-long transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
