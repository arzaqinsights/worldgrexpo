@extends('layouts.website')

@section('title', $category . ' - Visual Intelligence Archive')

@section('content')

    <!-- Premium Hero Section -->
    <section class="relative pt-48 pb-16 bg-slate-950 overflow-hidden">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        </div>
        
        <!-- Animated Decorators -->
        <div class="absolute top-1/4 right-0 w-[600px] h-[600px] bg-brand-primary/10 rounded-full blur-[120px] animate-pulse"></div>

        <div class="container relative z-10 space-y-12">
            <a href="{{ route('gallery') }}" class="inline-flex items-center gap-4 text-white/40 hover:text-brand-accent font-black text-[10px] transition-all uppercase tracking-[0.3em] group">
                <i class="fa-solid fa-arrow-left group-hover:-translate-x-2 transition-transform"></i> Back to Archives
            </a>
            
            <div class="space-y-6">
                <h1 class="text-5xl md:text-7xl font-black text-white leading-none uppercase tracking-tighter">
                    {{ $category }}<span class="text-brand-primary">.</span>
                </h1>
                <div class="flex items-center gap-4">
                    <div class="h-[1px] w-12 bg-brand-accent"></div>
                    <p class="text-brand-accent font-black uppercase tracking-[0.4em] text-[10px]">
                        {{ $images->count() }} Institutional Nodes Recorded
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Institutional Archives Grid -->
    <section class="section-padding bg-white relative">
        <div class="container">
            <div class="columns-1 sm:columns-2 lg:columns-3 gap-8 space-y-8">
                @foreach($images as $image)
                    <div class="relative group rounded-[2.5rem] overflow-hidden bg-slate-950 shadow-2xl transition-all duration-700 cursor-pointer break-inside-avoid border border-slate-100 hover:border-brand-primary hover:-translate-y-2"
                         onclick="openModal('{{ asset($image->image_path) }}')">
                        
                        <img src="{{ asset($image->image_path) }}" 
                             class="w-full h-auto object-cover transition-all duration-[2000ms] group-hover:scale-110 grayscale group-hover:grayscale-0 block" 
                             alt="Institutional Node">
                        
                        <!-- Interaction Layer -->
                        <div class="absolute inset-0 bg-slate-950/60 opacity-0 group-hover:opacity-100 transition-all duration-700 flex items-center justify-center backdrop-blur-md">
                            <div class="w-20 h-20 bg-white/10 backdrop-blur-xl border border-white/20 rounded-full flex items-center justify-center text-white scale-50 group-hover:scale-100 transition-all duration-500">
                                <i class="fa-solid fa-expand text-2xl"></i>
                            </div>
                        </div>

                        <!-- Indicator -->
                        <div class="absolute top-0 left-0 w-full h-2 bg-brand-primary scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-700"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Premium Lightbox Modal -->
    <div id="imageModal" class="fixed inset-0 z-[100] bg-slate-950/95 backdrop-blur-2xl hidden items-center justify-center opacity-0 transition-all duration-700">
        <!-- Close Controls -->
        <button onclick="closeModal()" class="absolute top-12 right-12 z-10 w-16 h-16 rounded-full bg-white/5 border border-white/10 text-white flex items-center justify-center text-2xl hover:bg-brand-primary hover:border-brand-primary hover:text-slate-950 transition-all group">
            <i class="fa-solid fa-xmark group-hover:rotate-90 transition-transform"></i>
        </button>

        <div class="relative w-full h-full p-12 md:p-24 flex items-center justify-center" onclick="closeModal()">
            <img id="modalImage" src="" 
                 class="max-w-full max-h-full rounded-[2rem] shadow-2xl object-contain scale-95 transition-all duration-700 border border-white/10"
                 onclick="event.stopPropagation()">
            
            <!-- Branding Tag -->
            <div class="absolute bottom-12 left-1/2 -translate-x-1/2 px-6 py-2 rounded-full bg-white/5 border border-white/10 backdrop-blur-xl text-[10px] font-black text-white/40 uppercase tracking-[0.4em]">
                World Grexpo <span class="text-brand-primary">Visual Archive</span>
            </div>
        </div>
    </div>

    <!-- Lightbox Logic -->
    <script>
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');

        function openModal(src) {
            modalImage.src = src;
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalImage.classList.remove('scale-95');
                modalImage.classList.add('scale-100');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modal.classList.add('opacity-0');
            modalImage.classList.remove('scale-100');
            modalImage.classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = 'auto';
            }, 700);
        }

        // Keyboard Protocol
        document.addEventListener('keydown', function(event) {
            if (event.key === "Escape" && !modal.classList.contains('hidden')) {
                closeModal();
            }
        });
    </script>

@endsection
@endsection
