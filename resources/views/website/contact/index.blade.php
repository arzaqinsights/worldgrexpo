@extends('layouts.website')

@section('title', 'Contact Us | World Grexpo Foundation')

@section('content')
<!-- Hero Section -->
<section class="relative pt-48 pb-24 bg-slate-950 text-white overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
    </div>
    
    <div class="container relative z-10 text-left">
        <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
            <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Get in Touch</span>
        </div>
        <h1 class="text-6xl md:text-8xl font-black text-white mb-8 tracking-tighter uppercase italic leading-[0.85]">Let's Build the <br> <span class="text-brand-accent not-italic">Future</span> Together</h1>
        <p class="text-2xl text-slate-400 font-light italic max-w-4xl leading-relaxed border-l-2 border-slate-800 pl-8">
            Have questions about institutional nodes, summits, or strategic partnerships? Our team of industrial experts is here to guide your transition journey.
        </p>
    </div>
</section>

<!-- Contact Content -->
<section class="py-32 bg-white relative">
    <div class="container">
        <div class="flex flex-col lg:flex-row gap-2">
            
            <!-- Left: Contact Form -->
            <div class="lg:w-3/5">
                <div class="bg-slate-50 p-12 lg:p-20 rounded-sm border border-slate-100 animate-on-scroll">
                    <h2 class="text-5xl font-black text-slate-950 mb-12 uppercase italic tracking-tighter">Send us a <span class="text-brand-primary">Message</span></h2>
                    
                    <form action="#" method="POST" class="space-y-8">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div>
                                <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-4 italic">Full Name</label>
                                <input type="text" name="name" required placeholder="John Doe"
                                       class="w-full bg-white border border-slate-200 rounded-sm p-6 focus:border-brand-primary outline-none text-slate-950 font-black transition-all shadow-sm italic uppercase text-xs">
                            </div>
                            <div>
                                <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-4 italic">Email Address</label>
                                <input type="email" name="email" required placeholder="john@example.com"
                                       class="w-full bg-white border border-slate-200 rounded-sm p-6 focus:border-brand-primary outline-none text-slate-950 font-black transition-all shadow-sm italic uppercase text-xs">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div>
                                <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-4 italic">Phone Number</label>
                                <input type="text" name="phone" placeholder="+91 00000 00000"
                                       class="w-full bg-white border border-slate-200 rounded-sm p-6 focus:border-brand-primary outline-none text-slate-950 font-black transition-all shadow-sm italic uppercase text-xs">
                            </div>
                            <div>
                                <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-4 italic">Subject</label>
                                <select name="subject" class="w-full bg-white border border-slate-200 rounded-sm p-6 focus:border-brand-primary outline-none text-slate-950 font-black transition-all shadow-sm italic uppercase text-xs appearance-none">
                                    <option>Membership Inquiry</option>
                                    <option>Summit Registration</option>
                                    <option>Sponsorship Nodes</option>
                                    <option>General Query</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-4 italic">Your Message</label>
                            <textarea name="message" rows="5" required placeholder="Tell us how we can help your industrial node..."
                                      class="w-full bg-white border border-slate-200 rounded-sm p-6 focus:border-brand-primary outline-none text-slate-950 font-medium transition-all shadow-sm resize-none italic uppercase text-xs"></textarea>
                        </div>

                        <button type="submit" class="w-full bg-slate-950 group hover:bg-brand-accent text-white hover:text-slate-950 font-black py-8 rounded-sm transition-all duration-700 shadow-4xl flex items-center justify-center gap-6 uppercase tracking-[0.3em] text-xs italic">
                            Submit Inquiry Node
                            <i class="fa-solid fa-paper-plane text-xs group-hover:translate-x-4 group-hover:-translate-y-4 transition-transform"></i>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Right: Contact Sidebar -->
            <div class="lg:w-2/5 space-y-2 animate-on-scroll delay-100">
                
                <!-- Office Location -->
                <div class="group bg-slate-50 p-12 rounded-sm border border-slate-100 hover:bg-slate-950 transition-all duration-700 h-1/3 flex flex-col justify-center">
                    <div class="w-16 h-16 bg-white border border-slate-200 rounded-sm shadow-xl flex items-center justify-center mb-10 text-slate-950 group-hover:bg-brand-accent group-hover:border-brand-accent transition-all duration-700">
                        <i class="fa-solid fa-location-dot text-2xl group-hover:scale-125 transition-transform"></i>
                    </div>
                    <h3 class="text-3xl font-black text-slate-950 mb-4 uppercase italic tracking-tighter group-hover:text-white transition-colors">Corporate Office</h3>
                    <p class="text-slate-500 font-light italic leading-relaxed mb-8 group-hover:text-slate-400 transition-colors">
                        H-1479, Chittaranjan Park,<br> New Delhi - 110019, India
                    </p>
                    <a href="https://maps.google.com" target="_blank" class="text-brand-primary font-black text-[10px] uppercase tracking-[0.4em] flex items-center gap-4 group-hover:text-brand-accent transition-colors italic">
                        Get Directions <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-4 transition-transform"></i>
                    </a>
                </div>

                <!-- Phone Lines -->
                <div class="group bg-slate-50 p-12 rounded-sm border border-slate-100 hover:bg-slate-950 transition-all duration-700 h-1/3 flex flex-col justify-center">
                    <div class="w-16 h-16 bg-white border border-slate-200 rounded-sm shadow-xl flex items-center justify-center mb-10 text-slate-950 group-hover:bg-brand-accent group-hover:border-brand-accent transition-all duration-700">
                        <i class="fa-solid fa-phone-volume text-2xl group-hover:scale-125 transition-transform"></i>
                    </div>
                    <h3 class="text-3xl font-black text-slate-950 mb-6 uppercase italic tracking-tighter group-hover:text-white transition-colors">Helpline Nodes</h3>
                    <div class="space-y-4">
                        <a href="tel:+919810690843" class="block text-slate-600 font-black text-xl italic hover:text-brand-accent transition-colors group-hover:text-slate-300">+91 98106 90843</a>
                        <a href="tel:+919810201957" class="block text-slate-600 font-black text-xl italic hover:text-brand-accent transition-colors group-hover:text-slate-300">+91 98102 01957</a>
                    </div>
                </div>

                <!-- Email Support -->
                <div class="group bg-slate-950 p-12 rounded-sm text-white transition-all duration-700 h-1/3 flex flex-col justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:20px_20px]"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-brand-primary border border-brand-primary rounded-sm flex items-center justify-center mb-10 text-white group-hover:bg-brand-accent group-hover:border-brand-accent group-hover:text-slate-950 transition-all duration-700">
                            <i class="fa-solid fa-envelope-open-text text-2xl group-hover:scale-125 transition-transform"></i>
                        </div>
                        <h3 class="text-3xl font-black mb-6 uppercase italic tracking-tighter">Official Emails</h3>
                        <div class="space-y-4">
                            <a href="mailto:info@worldgrexpo.in" class="block text-slate-400 font-black text-xl italic hover:text-brand-accent transition-colors uppercase">info@worldgrexpo.in</a>
                            <a href="mailto:ighosh.1457@gmail.com" class="block text-slate-400 font-black text-xl italic hover:text-brand-accent transition-colors">ighosh.1457@gmail.com</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Maps Section -->
<section class="pb-32 bg-white">
    <div class="container">
        <div class="rounded-sm overflow-hidden shadow-4xl border border-slate-100 h-[600px] w-full relative grayscale hover:grayscale-0 transition-all duration-1000">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14018.675003504958!2d77.2478564!3d28.5413349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3c4f74d538b%3A0xe5a3c2605f13459c!2sChittaranjan%20Park%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1713430000000!5m2!1sen!2sin" 
                class="absolute inset-0 w-full h-full border-0" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>
@endsection
