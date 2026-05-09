<section class="section-padding relative overflow-hidden bg-white">
    <!-- Sophisticated Background Decorators -->
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-brand-accent/5 rounded-full blur-[100px]"></div>
    <div class="absolute top-1/2 left-0 -translate-x-1/2 w-64 h-64 bg-brand-primary/5 rounded-full blur-[80px]"></div>

    <div class="container relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            
            <!-- Visual Content Side -->
            <div class="relative group" x-data="{ visible: false }" x-intersect="visible = true">
                <div class="relative z-10 grid grid-cols-2 gap-4">
                    <div class="space-y-4 pt-12">
                        <div class="aspect-[4/5] rounded-3xl overflow-hidden shadow-2xl transform transition-all duration-700 hover:scale-[1.02]"
                            :class="visible ? 'translate-y-0 opacity-100' : 'translate-y-12 opacity-0'">
                            <img src="{{ asset('images/home/growth.jpeg') }}" alt="Growth" class="w-full h-full object-cover">
                        </div>
                        <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl transform transition-all duration-700 delay-300 hover:scale-[1.02]"
                            :class="visible ? 'translate-y-0 opacity-100' : 'translate-y-12 opacity-0'">
                            <img src="{{ asset('images/home/award-1.jpeg') }}" alt="Award" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl transform transition-all duration-700 delay-150 hover:scale-[1.02]"
                            :class="visible ? 'translate-y-0 opacity-100' : 'translate-y-12 opacity-0'">
                            <img src="{{ asset('images/home/slide-1.webp') }}" alt="Innovation" class="w-full h-full object-cover">
                        </div>
                        <div class="aspect-[4/5] rounded-3xl overflow-hidden shadow-2xl transform transition-all duration-700 delay-450 hover:scale-[1.02]"
                            :class="visible ? 'translate-y-0 opacity-100' : 'translate-y-12 opacity-0'">
                            <img src="{{ asset('images/home/slide-3.webp') }}" alt="Global" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <!-- Floating Experience Badge -->
                <div class="absolute -bottom-8 -left-8 glass-panel p-8 rounded-3xl shadow-2xl z-20 hidden md:block animate-float"
                    x-show="visible" x-transition:enter="transition ease-out duration-1000 delay-700" x-transition:enter-start="scale-50 opacity-0">
                    <div class="text-5xl font-black text-brand-primary leading-none mb-2">15+</div>
                    <div class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-500">Years of Industrial<br>Global Leadership</div>
                </div>
            </div>

            <!-- Text Content Side -->
            <div class="space-y-10" x-data="{ visible: false }" x-intersect="visible = true">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary/5 text-brand-primary text-[10px] font-black uppercase tracking-[0.2em]">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-pulse"></span>
                        Our Vision & Mission
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black text-slate-900 leading-[1.1] tracking-tighter">
                        Empowering <span class="text-brand-primary">MSME Ecosystems</span> on a Global Stage.
                    </h2>
                    <p class="text-lg text-slate-500 leading-relaxed font-medium">
                        World Grexpo is more than a network; it's a dedicated catalyst for growth. We bridge the gap between local innovation and international markets, creating a vibrant community where enterprises thrive through cross-border trade and strategic partnerships.
                    </p>
                </div>

                <!-- Feature List -->
                <div class="grid grid-cols-1 gap-6">
                    <!-- Feature 1 -->
                    <div class="group flex items-start gap-6 p-6 rounded-3xl border border-slate-100 hover:border-brand-primary/20 hover:bg-brand-primary/5 transition-all duration-300">
                        <div class="shrink-0 w-14 h-14 rounded-2xl bg-brand-accent/20 flex items-center justify-center text-brand-primary group-hover:bg-brand-accent group-hover:scale-110 transition-all duration-300">
                            <i class="fa-solid fa-award text-2xl"></i>
                        </div>
                        <div class="space-y-1">
                            <h4 class="text-lg font-bold text-slate-900">Eminent Advisory Board</h4>
                            <p class="text-sm text-slate-500 leading-relaxed">Guided by Padma Shri and Padma Bhushan awardees, ensuring strategic excellence in every initiative.</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="group flex items-start gap-6 p-6 rounded-3xl border border-slate-100 hover:border-brand-primary/20 hover:bg-brand-primary/5 transition-all duration-300">
                        <div class="shrink-0 w-14 h-14 rounded-2xl bg-brand-primary/10 flex items-center justify-center text-brand-primary group-hover:bg-brand-primary group-hover:text-white group-hover:scale-110 transition-all duration-300">
                            <i class="fa-solid fa-globe-americas text-2xl"></i>
                        </div>
                        <div class="space-y-1">
                            <h4 class="text-lg font-bold text-slate-900">Global Strategic Impact</h4>
                            <p class="text-sm text-slate-500 leading-relaxed">Representing India's industrial interests across 40+ countries and major international trade bodies.</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="group flex items-start gap-6 p-6 rounded-3xl border border-slate-100 hover:border-brand-primary/20 hover:bg-brand-primary/5 transition-all duration-300">
                        <div class="shrink-0 w-14 h-14 rounded-2xl bg-slate-100 flex items-center justify-center text-slate-600 group-hover:bg-slate-900 group-hover:text-white group-hover:scale-110 transition-all duration-300">
                            <i class="fa-solid fa-handshake-angle text-2xl"></i>
                        </div>
                        <div class="space-y-1">
                            <h4 class="text-lg font-bold text-slate-900">B2B Networking Catalyst</h4>
                            <p class="text-sm text-slate-500 leading-relaxed">Directly connecting MSMEs with high-value investors, emerging markets, and strategic industrial partners.</p>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="{{ route('about.what_is') }}"
                        class="px-8 py-4 rounded-2xl bg-brand-primary text-white font-bold text-sm uppercase tracking-widest shadow-xl shadow-brand-primary/20 hover:bg-brand-primary-dark transition-all flex items-center gap-2">
                        Discover More <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                    <a href="{{ route('contact') }}"
                        class="px-8 py-4 rounded-2xl bg-white border border-slate-200 text-slate-900 font-bold text-sm uppercase tracking-widest hover:bg-slate-50 transition-all">
                        Connect with Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
