@extends('layouts.website')

@section('title', 'Contact Us | World Grexpo Foundation')

@section('content')

    <!-- Premium Hero Section -->
    <section class="relative pt-48 pb-32 bg-slate-950 overflow-hidden">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        </div>
        
        <!-- Animated Decorators -->
        <div class="absolute top-1/4 right-0 w-[600px] h-[600px] bg-brand-primary/10 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand-accent/5 rounded-full blur-[100px]"></div>

        <div class="container relative z-10 text-center space-y-8">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 backdrop-blur-md text-brand-accent text-[10px] font-black uppercase tracking-[0.3em]">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-pulse"></span>
                Get in Touch
            </div>
            <h1 class="text-6xl md:text-8xl font-black text-white leading-[0.9] tracking-tighter uppercase">
                Let's Build the <br>
                <span class="text-brand-primary italic">Future.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-3xl mx-auto leading-relaxed font-medium">
                Have questions about institutional nodes, summits, or strategic partnerships? Our team is here to guide your industrial journey.
            </p>
        </div>
    </section>

    <!-- Contact Interface -->
    <section class="section-padding bg-white relative">
        <div class="container">
            <div class="grid lg:grid-cols-12 gap-12 items-start">
                
                <!-- Inquiry Form (8 Cols) -->
                <div class="lg:col-span-8 p-12 lg:p-20 rounded-[4rem] bg-slate-50 border border-slate-100 shadow-2xl animate-on-scroll">
                    <div class="space-y-12 mb-16">
                        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary/5 text-brand-primary text-[10px] font-black uppercase tracking-[0.2em]">
                            Direct Channel
                        </div>
                        <h2 class="text-5xl font-black text-slate-900 leading-[0.9] tracking-tighter uppercase">
                            Send a <br>
                            <span class="text-brand-primary italic">Message.</span>
                        </h2>
                    </div>
                    
                    <form action="#" method="POST" class="space-y-10">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            <div class="space-y-4">
                                <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-4">Full Identity</label>
                                <input type="text" name="name" required placeholder="JOHN DOE"
                                       class="w-full bg-white border border-slate-200 rounded-3xl p-6 focus:border-brand-primary focus:ring-4 focus:ring-brand-primary/5 outline-none text-slate-950 font-black transition-all shadow-sm text-xs uppercase tracking-widest">
                            </div>
                            <div class="space-y-4">
                                <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-4">Email Channel</label>
                                <input type="email" name="email" required placeholder="NAME@ENTERPRISE.COM"
                                       class="w-full bg-white border border-slate-200 rounded-3xl p-6 focus:border-brand-primary focus:ring-4 focus:ring-brand-primary/5 outline-none text-slate-950 font-black transition-all shadow-sm text-xs uppercase tracking-widest">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            <div class="space-y-4">
                                <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-4">Phone Protocol</label>
                                <input type="text" name="phone" placeholder="+91 00000 00000"
                                       class="w-full bg-white border border-slate-200 rounded-3xl p-6 focus:border-brand-primary focus:ring-4 focus:ring-brand-primary/5 outline-none text-slate-950 font-black transition-all shadow-sm text-xs uppercase tracking-widest">
                            </div>
                            <div class="space-y-4">
                                <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-4">Inquiry Vector</label>
                                <div class="relative">
                                    <select name="subject" class="w-full bg-white border border-slate-200 rounded-3xl p-6 focus:border-brand-primary focus:ring-4 focus:ring-brand-primary/5 outline-none text-slate-950 font-black transition-all shadow-sm text-xs uppercase tracking-widest appearance-none">
                                        <option>Membership Inquiry</option>
                                        <option>Summit Registration</option>
                                        <option>Sponsorship Nodes</option>
                                        <option>General Query</option>
                                    </select>
                                    <i class="fa-solid fa-chevron-down absolute right-6 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none"></i>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-4">Intelligence Data</label>
                            <textarea name="message" rows="5" required placeholder="DESCRIBE YOUR INDUSTRIAL REQUIREMENT..."
                                      class="w-full bg-white border border-slate-200 rounded-3xl p-6 focus:border-brand-primary focus:ring-4 focus:ring-brand-primary/5 outline-none text-slate-950 font-medium transition-all shadow-sm resize-none text-xs uppercase tracking-widest leading-relaxed"></textarea>
                        </div>

                        <button type="submit" class="w-full group relative p-8 rounded-3xl bg-slate-950 text-white font-black uppercase tracking-[0.3em] text-xs transition-all overflow-hidden shadow-2xl hover:bg-brand-primary">
                            <span class="relative z-10 flex items-center justify-center gap-6">
                                Dispatch Message
                                <i class="fa-solid fa-paper-plane group-hover:translate-x-4 group-hover:-translate-y-4 transition-transform duration-500"></i>
                            </span>
                        </button>
                    </form>
                </div>

                <!-- Contact Info Sidebar (4 Cols) -->
                <div class="lg:col-span-4 space-y-8">
                    
                    <!-- Location -->
                    <div class="p-12 rounded-[3.5rem] bg-slate-950 text-white space-y-8 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 p-12 text-brand-primary/10 group-hover:text-brand-primary/20 transition-colors">
                            <i class="fa-solid fa-location-dot text-8xl"></i>
                        </div>
                        <div class="relative z-10 space-y-6">
                            <div class="w-12 h-12 rounded-2xl bg-brand-primary flex items-center justify-center text-white shadow-xl">
                                <i class="fa-solid fa-map-pin"></i>
                            </div>
                            <h3 class="text-3xl font-black uppercase tracking-tighter">Corporate <br>Headquarters</h3>
                            <p class="text-slate-400 font-medium leading-relaxed">
                                H-1479, Chittaranjan Park,<br> New Delhi - 110019, India
                            </p>
                            <a href="https://maps.google.com" target="_blank" class="inline-flex items-center gap-4 text-[10px] font-black uppercase tracking-[0.3em] text-brand-accent hover:gap-6 transition-all">
                                Open Map Protocol <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Hotline -->
                    <div class="p-12 rounded-[3.5rem] bg-slate-50 border border-slate-100 space-y-8 group hover:bg-brand-primary transition-all duration-500">
                        <div class="relative z-10 space-y-6">
                            <div class="w-12 h-12 rounded-2xl bg-white shadow-xl flex items-center justify-center text-brand-primary transition-colors group-hover:text-brand-primary">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <h3 class="text-3xl font-black uppercase tracking-tighter text-slate-950 group-hover:text-white">Industrial <br>Hotline</h3>
                            <div class="space-y-4">
                                <a href="tel:+919810690843" class="block text-xl font-black text-slate-600 group-hover:text-white transition-colors">+91 98106 90843</a>
                                <a href="tel:+919810201957" class="block text-xl font-black text-slate-600 group-hover:text-white transition-colors">+91 98102 01957</a>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="p-12 rounded-[3.5rem] bg-brand-accent/5 border border-brand-accent/10 space-y-8 group hover:bg-brand-accent transition-all duration-500">
                        <div class="relative z-10 space-y-6">
                            <div class="w-12 h-12 rounded-2xl bg-brand-accent flex items-center justify-center text-slate-950 shadow-xl">
                                <i class="fa-solid fa-envelope-open-text"></i>
                            </div>
                            <h3 class="text-3xl font-black uppercase tracking-tighter text-slate-950">Official <br>Channels</h3>
                            <div class="space-y-4">
                                <a href="mailto:info@worldgrexpo.in" class="block text-lg font-black text-brand-primary group-hover:text-slate-950 transition-colors uppercase tracking-tight">info@worldgrexpo.in</a>
                                <a href="mailto:ighosh.1457@gmail.com" class="block text-lg font-black text-brand-primary group-hover:text-slate-950 transition-colors">ighosh.1457@gmail.com</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Map -->
    <section class="pb-32 bg-white">
        <div class="container">
            <div class="rounded-[4rem] overflow-hidden shadow-2xl border border-slate-100 h-[600px] w-full relative group">
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

@endsection
@endsection
