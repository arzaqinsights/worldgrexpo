@extends('layouts.website')

@section('title', $category . ' - Visual Intelligence Archive')

@section('content')

    <!-- HERO -->
    <section class="relative pt-48 pb-16 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
        </div>
        <div class="container relative z-10 text-left">
            <a href="{{ route('gallery') }}" class="inline-flex items-center gap-4 text-slate-500 hover:text-brand-accent font-black text-[10px] mb-10 transition-all uppercase tracking-[0.3em] italic group">
                <i class="fa-solid fa-arrow-left group-hover:-translate-x-2 transition-transform"></i> Back to Archives
            </a>
            <h1 class="text-5xl md:text-7xl font-black mb-6 text-white leading-none uppercase italic tracking-tighter">
                {{ $category }}
            </h1>
            <p class="text-brand-accent font-black uppercase tracking-[0.4em] text-[10px] flex items-center gap-4 italic">
                <i class="fa-regular fa-image"></i> {{ $images->count() }} Institutional Nodes in Album
            </p>
        </div>
    </section>

    <!-- IMAGES GRID -->
    <section class="py-32 bg-white min-h-screen relative">
        <div class="container">
            <div class="columns-1 sm:columns-2 lg:columns-3 gap-2 space-y-2">
                @foreach($images as $image)
                    <div class="relative group rounded-sm overflow-hidden shadow-sm hover:shadow-4xl transition-all duration-700 cursor-pointer bg-slate-950 break-inside-avoid border border-slate-100 group-hover:border-slate-900"
                         onclick="openModal('{{ asset($image->image_path) }}')">
                        <img src="{{ asset($image->image_path) }}" class="w-full h-auto object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-[2000ms] block" alt="Gallery Image">
                        
                        <div class="absolute inset-0 bg-slate-950/60 opacity-0 group-hover:opacity-100 transition-all duration-700 flex items-center justify-center backdrop-blur-sm">
                            <div class="w-20 h-20 bg-brand-accent rounded-sm flex items-center justify-center text-slate-950 scale-50 group-hover:scale-100 transition-all duration-700">
                                <i class="fa-solid fa-magnifying-glass-plus text-2xl drop-shadow-2xl"></i>
                            </div>
                        </div>
                        <div class="absolute top-0 left-0 w-0 h-1 bg-brand-accent group-hover:w-full transition-all duration-700"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- LIGHTBOX MODAL -->
    <div id="imageModal" class="fixed inset-0 z-50 bg-slate-950/95 backdrop-blur-xl hidden items-center justify-center opacity-0 transition-all duration-700">
        <button onclick="closeModal()" class="absolute top-12 right-12 text-white hover:text-brand-accent transition-all bg-white/5 hover:bg-white/10 p-6 rounded-sm border border-white/10 italic font-black uppercase tracking-widest text-[10px] group">
            Close Node <i class="fa-solid fa-xmark ml-4 group-hover:rotate-90 transition-transform"></i>
        </button>
        <div class="relative p-4 md:p-12 w-full h-full flex items-center justify-center">
            <img id="modalImage" src="" class="max-w-full max-h-full rounded-sm shadow-4xl object-contain scale-95 transition-all duration-700 border border-white/5">
        </div>
    </div>

    <!-- LIGHTBOX SCRIPT -->
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
        }

        function closeModal() {
            modal.classList.add('opacity-0');
            modalImage.classList.remove('scale-100');
            modalImage.classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }, 700);
        }

        // Close on escape
        document.addEventListener('keydown', function(event) {
            if (event.key === "Escape" && !modal.classList.contains('hidden')) {
                closeModal();
            }
        });
        
        // Close on background click
        modal.addEventListener('click', function(e) {
            if (e.target === modal || e.target.closest('.relative') === e.target) {
                closeModal();
            }
        });
    </script>
@endsection
