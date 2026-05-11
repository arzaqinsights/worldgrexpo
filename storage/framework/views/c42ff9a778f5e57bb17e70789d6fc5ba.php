

<?php $__env->startSection('title', 'Contact Us | World Grexpo Foundation'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Premium Hero Section -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        </div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-1/2 bg-brand-accent opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12 animate-on-scroll">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 backdrop-blur-md">
                <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
                <span class="text-white text-[10px] font-black uppercase tracking-[0.4em]">Get in Touch</span>
            </div>
            
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Let's Build the <br>
                <span class="text-brand-primary">Future.</span>
            </h1>
            
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium">
                Have questions about institutional nodes, summits, or strategic partnerships? Our team is here to guide your industrial journey.
            </p>
        </div>
    </section>

    <!-- Contact Interface -->
    <section class="section-padding bg-white relative border-b border-slate-100">
        <div class="container">
            <div class="grid lg:grid-cols-12 gap-px bg-slate-200 border border-slate-200 shadow-2xl">
                
                <!-- Inquiry Form (8 Cols) -->
                <div class="lg:col-span-8 p-12 lg:p-24 bg-white animate-on-scroll">
                    <div class="space-y-10 mb-20">
                        <div class="section-heading">
                            <span class="subtitle">Direct Channel</span>
                            <h2>Send a <br> <span class="text-brand-primary">Message.</span></h2>
                            <div class="accent-line"></div>
                        </div>
                    </div>
                    
                    <form action="#" method="POST" class="space-y-12">
                        <?php echo csrf_field(); ?>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                            <div class="space-y-4">
                                <label class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] ml-1">Full Identity</label>
                                <input type="text" name="name" required placeholder="JOHN DOE"
                                       class="w-full bg-slate-50 border border-slate-100 p-8 focus:border-brand-primary focus:bg-white outline-none text-slate-950 font-black transition-all text-xs uppercase tracking-widest">
                            </div>
                            <div class="space-y-4">
                                <label class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] ml-1">Email Channel</label>
                                <input type="email" name="email" required placeholder="NAME@ENTERPRISE.COM"
                                       class="w-full bg-slate-50 border border-slate-100 p-8 focus:border-brand-primary focus:bg-white outline-none text-slate-950 font-black transition-all text-xs uppercase tracking-widest">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                            <div class="space-y-4">
                                <label class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] ml-1">Phone Protocol</label>
                                <input type="text" name="phone" placeholder="+91 00000 00000"
                                       class="w-full bg-slate-50 border border-slate-100 p-8 focus:border-brand-primary focus:bg-white outline-none text-slate-950 font-black transition-all text-xs uppercase tracking-widest">
                            </div>
                            <div class="space-y-4">
                                <label class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] ml-1">Inquiry Vector</label>
                                <div class="relative">
                                    <select name="subject" class="w-full bg-slate-50 border border-slate-100 p-8 focus:border-brand-primary focus:bg-white outline-none text-slate-950 font-black transition-all text-xs uppercase tracking-widest appearance-none">
                                        <option>Membership Inquiry</option>
                                        <option>Summit Registration</option>
                                        <option>Sponsorship Nodes</option>
                                        <option>General Query</option>
                                    </select>
                                    <i class="fa-solid fa-chevron-down absolute right-8 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none"></i>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <label class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] ml-1">Intelligence Data</label>
                            <textarea name="message" rows="6" required placeholder="DESCRIBE YOUR INDUSTRIAL REQUIREMENT..."
                                      class="w-full bg-slate-50 border border-slate-100 p-8 focus:border-brand-primary focus:bg-white outline-none text-slate-950 font-medium transition-all resize-none text-xs uppercase tracking-widest leading-relaxed"></textarea>
                        </div>

                        <div class="pt-6">
                            <button type="submit" class="btn-sharp w-full group">
                                Dispatch Message
                                <i class="fa-solid fa-paper-plane ml-6 group-hover:translate-x-4 group-hover:-translate-y-4 transition-transform duration-500"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Contact Info Sidebar (4 Cols) -->
                <div class="lg:col-span-4 flex flex-col gap-px bg-slate-200">
                    
                    <!-- Location -->
                    <div class="p-16 bg-slate-900 text-white flex-1 space-y-10 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 p-12 text-white/5 group-hover:text-brand-primary/10 transition-colors">
                            <i class="fa-solid fa-location-dot text-9xl"></i>
                        </div>
                        <div class="relative z-10 space-y-8">
                            <div class="w-16 h-16 bg-brand-primary flex items-center justify-center text-brand-primary-dark shadow-2xl">
                                <i class="fa-solid fa-map-pin text-xl"></i>
                            </div>
                            <div class="space-y-4">
                                <h3 class="text-3xl font-black uppercase tracking-tighter">Corporate <br>Headquarters</h3>
                                <p class="text-slate-400 font-medium leading-relaxed text-lg">
                                    H-1479, Chittaranjan Park,<br> New Delhi - 110019, India
                                </p>
                            </div>
                            <a href="https://maps.google.com" target="_blank" class="inline-flex items-center gap-4 text-[10px] font-black uppercase tracking-[0.4em] text-brand-accent group-hover:gap-8 transition-all">
                                Open Map Protocol <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Hotline -->
                    <div class="p-16 bg-white space-y-10 group hover:bg-brand-primary transition-all duration-700">
                        <div class="relative z-10 space-y-8">
                            <div class="w-16 h-16 bg-slate-50 border border-slate-100 shadow-sm flex items-center justify-center text-brand-primary transition-all group-hover:bg-white group-hover:border-white">
                                <i class="fa-solid fa-phone-volume text-xl"></i>
                            </div>
                            <div class="space-y-4">
                                <h3 class="text-3xl font-black uppercase tracking-tighter text-slate-950 group-hover:text-white transition-colors">Industrial <br>Hotline</h3>
                                <div class="space-y-4">
                                    <a href="tel:+919810690843" class="block text-2xl font-black text-slate-600 group-hover:text-white transition-colors tabular-nums">+91 98106 90843</a>
                                    <a href="tel:+919810201957" class="block text-2xl font-black text-slate-600 group-hover:text-white transition-colors tabular-nums">+91 98102 01957</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="p-16 bg-brand-accent space-y-10 group hover:bg-slate-950 transition-all duration-700">
                        <div class="relative z-10 space-y-8">
                            <div class="w-16 h-16 bg-brand-primary-dark flex items-center justify-center text-brand-accent shadow-2xl">
                                <i class="fa-solid fa-envelope-open-text text-xl"></i>
                            </div>
                            <div class="space-y-4">
                                <h3 class="text-3xl font-black uppercase tracking-tighter text-brand-primary-dark group-hover:text-white transition-colors">Official <br>Channels</h3>
                                <div class="space-y-4">
                                    <a href="mailto:info@worldgrexpo.in" class="block text-xl font-black text-brand-primary-dark group-hover:text-brand-primary transition-colors uppercase tracking-tighter">info@worldgrexpo.in</a>
                                    <a href="mailto:ighosh.1457@gmail.com" class="block text-xl font-black text-brand-primary-dark group-hover:text-brand-primary transition-colors">ighosh.1457@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Map -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="overflow-hidden shadow-2xl border border-slate-200 h-[700px] w-full relative group">
                <div class="absolute inset-0 bg-slate-950 opacity-10 group-hover:opacity-0 transition-opacity z-10 pointer-events-none"></div>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14018.675003504958!2d77.2478564!3d28.5413349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3c4f74d538b%3A0xe5a3c2605f13459c!2sChittaranjan%20Park%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1713430000000!5m2!1sen!2sin" 
                    class="absolute inset-0 w-full h-full border-0 grayscale group-hover:grayscale-0 transition-all duration-1000" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/contact/index.blade.php ENDPATH**/ ?>