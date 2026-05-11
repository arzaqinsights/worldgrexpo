<section class="section-padding bg-white relative overflow-hidden border-b border-slate-100">
    <!-- Industrial Background Accents -->
    <div class="absolute top-0 right-0 w-1/3 h-full bg-slate-50/50 -z-0"></div>
    <div class="absolute top-0 left-0 w-1 h-full bg-brand-primary opacity-20"></div>

    <div class="container relative z-10">
        <div class="flex flex-col lg:flex-row gap-12 items-start">
            
            <!-- FAQ Content Area -->
            <div class="w-full lg:w-7/12 space-y-8" x-data="{ active: 1 }">
                <!-- Sharp Header -->
                <div class="space-y-8">
                    <div class="section-heading">
                        <span class="subtitle">FAQ Center</span>
                        <h2>Everything you need <span class="text-brand-primary">to know.</span></h2>
                        <div class="accent-line"></div>
                    </div>
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

                <!-- Sharp Accordion List -->
                <div class="space-y-px bg-slate-100 md:h-[432px] overflow-scroll">
                    @foreach($faqs as $item)
                        <div class="group bg-white transition-all duration-300 border border-slate-300"
                             :class="active === {{ $item['id'] }} ? 'bg-slate-50' : ''">
                            
                            <button class="w-full flex items-center justify-between p-8 text-left outline-none" 
                                    @click="active === {{ $item['id'] }} ? active = null : active = {{ $item['id'] }}">
                                <span class="text-lg font-black text-slate-900 group-hover:text-brand-primary transition-colors pr-6 leading-tight uppercase tracking-tighter">
                                    {{ $item['q'] }}
                                </span>
                                <div class="w-10 h-10 border border-slate-200 flex items-center justify-center shrink-0 transition-all duration-300"
                                     :class="active === {{ $item['id'] }} ? 'bg-brand-primary text-white border-brand-primary rotate-180' : 'text-slate-400 group-hover:bg-slate-50'">
                                    <i class="fa-solid fa-chevron-down text-[10px]"></i>
                                </div>
                            </button>

                            <div class="transition-all duration-500 overflow-hidden" 
                                 x-show="active === {{ $item['id'] }}" 
                                 x-collapse>
                                <div class="px-8 pb-10">
                                    <div class="h-[1px] w-12 bg-brand-primary mb-8"></div>
                                    <p class="text-[15px] text-slate-500 font-medium leading-relaxed max-w-2xl">
                                        {{ $item['a'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Sticky Visual Sidebar (Sharp) -->
            <div class="w-full lg:w-5/12 lg:sticky lg:top-32 self-start">
                <div class="relative bg-slate-900 overflow-hidden group min-h-[650px] flex items-end border border-slate-200">
                    <img src="{{ asset('images/faq-bg.png') }}" alt="Support" class="absolute inset-0 w-full h-full object-cover opacity-40 group-hover:opacity-60 transition-opacity duration-1000">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/40 to-transparent"></div>
                    
                    <div class="relative z-10 p-12 space-y-10">
                        <div class="space-y-6">
                            <div class="flex items-center gap-4">
                                <span class="w-12 h-1 bg-brand-accent"></span>
                                <span class="text-white text-[10px] font-black tracking-[0.3em] uppercase">Premium Support</span>
                            </div>
                            <h3 class="text-4xl font-black text-white leading-tight uppercase tracking-tighter">
                                Still have <br><span class="text-brand-accent">Questions?</span>
                            </h3>
                            <p class="text-white/60 text-lg font-medium leading-relaxed">
                                Our dedicated support team is available round the clock to help you with your global business journey.
                            </p>
                        </div>
                        
                        <a href="{{ route('contact') }}" 
                            class="btn-sharp w-full group">
                            Contact Support Team
                            <i class="fa-solid fa-arrow-right ml-4 group-hover:translate-x-2 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
