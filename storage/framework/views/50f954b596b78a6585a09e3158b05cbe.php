<section class="section-padding relative overflow-hidden bg-white border-b border-slate-100">
    <!-- Industrial Background Decorators -->
    <div class="absolute top-0 right-0 w-1/3 h-full bg-slate-50/50 -z-0"></div>

    <div class="container relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- Visual Content Side: Sharp Grid -->
            <div class="lg:col-span-6 relative">
                <div class="grid grid-cols-2 gap-2 p-2">
                    <div class="aspect-square bg-white overflow-hidden">
                        <img src="<?php echo e(asset('images/home/growth.jpeg')); ?>" alt="Growth" class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-4/5 bg-white overflow-hidden mt-8">
                        <img src="<?php echo e(asset('images/home/award-1.jpeg')); ?>" alt="Award" class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-4/5 bg-white overflow-hidden -mt-29">
                        <img src="<?php echo e(asset('images/home/slide-1.webp')); ?>" alt="Innovation" class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-square bg-white overflow-hidden">
                        <img src="<?php echo e(asset('images/home/slide-3.webp')); ?>" alt="Global" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Sharp Experience Badge -->
                <!-- <div class="absolute -bottom-8 -left-2 bg-brand-primary p-6 text-white z-20 hidden md:block">
                    <div class="text-6xl font-black leading-none mb-2">7+</div>
                    <div class="text-[10px] font-black uppercase tracking-[0.3em] opacity-80">Years of Industrial<br>Global Leadership</div>
                </div> -->
            </div>

            <!-- Text Content Side -->
            <div class="lg:col-span-6 space-y-8">
                <div class="space-y-6">
                    <div class="section-heading">
                        <span class="subtitle">Our Vision & Mission</span>
                        <h2>Empowering <span class="text-brand-primary">MSME Ecosystems</span> on a Global Stage.</h2>
                        <div class="accent-line"></div>
                    </div>
                    
                    <p class="text-xl text-slate-500 leading-relaxed font-medium max-w-2xl">
                        World Grexpo is more than a network; it's a dedicated catalyst for growth. We bridge the gap between local innovation and international markets, creating a vibrant community where enterprises thrive through cross-border trade and strategic partnerships.
                    </p>
                </div>

                <!-- Feature Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-1 border-t border-slate-300">
                    <!-- Feature 1 -->
                    <div class="group py-6 pr-6 border-b md:border-r border-slate-300 hover:bg-slate-50 transition-all duration-300">
                        <div class="w-12 h-12 bg-brand-primary/5 flex items-center justify-center text-brand-primary mb-6 group-hover:bg-brand-primary group-hover:text-white transition-all">
                            <i class="fa-solid fa-award text-xl"></i>
                        </div>
                        <h4 class="text-sm font-black text-slate-900 uppercase tracking-widest mb-3">Eminent Advisory Board</h4>
                        <p class="text-xs text-slate-500 leading-relaxed font-semibold uppercase tracking-wider">Guided by Padma Shri and Padma Bhushan awardees, ensuring strategic excellence in every initiative.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="group py-6 pl-6 border-b border-slate-300 hover:bg-slate-50 transition-all duration-300">
                        <div class="w-12 h-12 bg-brand-primary/5 flex items-center justify-center text-brand-primary mb-6 group-hover:bg-brand-primary group-hover:text-white transition-all">
                            <i class="fa-solid fa-globe-americas text-xl"></i>
                        </div>
                        <h4 class="text-sm font-black text-slate-900 uppercase tracking-widest mb-3">Global Strategic Impact</h4>
                        <p class="text-xs text-slate-500 leading-relaxed font-semibold uppercase tracking-wider">Representing India's industrial interests across 40+ countries and major international trade bodies.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="group py-6 col-span-2 border-b border-slate-300 hover:bg-slate-50 transition-all duration-300">
                        <div class="w-12 h-12 bg-brand-primary/5 flex items-center justify-center text-brand-primary mb-6 group-hover:bg-brand-primary group-hover:text-white transition-all">
                            <i class="fa-solid fa-handshake-angle text-xl"></i>
                        </div>
                        <h4 class="text-sm font-black text-slate-900 uppercase tracking-widest mb-3">B2B Networking Catalyst</h4>
                        <p class="text-xs text-slate-500 leading-relaxed font-semibold uppercase tracking-wider">Directly connecting MSMEs with high-value investors, emerging markets, and strategic industrial partners.</p>
                    </div>
                </div>

                <!-- Secondary Links -->
                <div class="flex gap-4 items-center pt-4">
                    <a href="<?php echo e(route('about.index')); ?>" class="text-xs font-black bg-brand-primary p-4 text-white uppercase tracking-widest transition-colors">Institutional Profile</a>
                    <a href="<?php echo e(route('contact')); ?>" class="text-xs font-black uppercase tracking-widest bg-white p-4 border border-brand-primary text-brand-primary transition-colors">Connect with us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/home/partials/about.blade.php ENDPATH**/ ?>