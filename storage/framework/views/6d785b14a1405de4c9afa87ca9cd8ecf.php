<?php
    $popupEvent = $popupEvent ?? \App\Models\Event::where('status', 'published')
        ->where('show_as_popup', true)
        ->latest()
        ->first();
?>

<?php if(isset($popupEvent) && $popupEvent): ?>
    <div id="event-popup-container" class="fixed inset-0 z-9999 items-center justify-center p-4 sm:p-12" style="display: none;">
        <!-- Sharp Industrial Backdrop -->
        <div id="popup-backdrop" class="absolute inset-0 bg-slate-950/95 transition-opacity duration-700 opacity-0 cursor-pointer"></div>

        <!-- Sharp Modal Content -->
        <div id="popup-content" class="relative w-full max-w-6xl bg-white border border-slate-200 shadow-[0_50px_100px_-20px_rgba(0,0,0,0.8)] overflow-hidden flex flex-col lg:flex-row transform transition-all duration-700 translate-y-24 opacity-0">
            
            <!-- Sharp Close Button -->
            <button id="close-popup-btn" class="absolute top-0 right-0 z-50 w-16 h-16 bg-slate-100 hover:bg-brand-primary text-slate-900 hover:text-white flex items-center justify-center transition-all group">
                <i class="fa-solid fa-xmark text-lg group-hover:rotate-90 transition-transform"></i>
            </button>

            <!-- Visual Side (Sharp) -->
            <div class="lg:w-5/12 relative overflow-hidden bg-slate-900 min-h-[400px]">
                <?php if($popupEvent->image): ?>
                    <img src="<?php echo e(asset($popupEvent->image)); ?>" class="w-full h-full object-cover grayscale opacity-60 group-hover:opacity-100 transition-opacity duration-1000">
                <?php else: ?>
                    <div class="absolute inset-0 bg-brand-primary opacity-20"></div>
                <?php endif; ?>
                <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                
                <!-- Overlay Content -->
                <div class="absolute bottom-12 left-12 right-12 space-y-6">
                    <div class="inline-flex items-center gap-4 bg-brand-accent px-6 py-2 shadow-2xl">
                        <i class="fa-solid fa-star text-brand-primary-dark text-xs"></i>
                        <span class="text-brand-primary-dark text-[10px] font-black uppercase tracking-[0.3em]">Featured Event</span>
                    </div>
                    <div class="space-y-2">
                        <div class="text-[10px] font-black uppercase tracking-[0.4em] text-white/60">Global Summit</div>
                        <div class="text-3xl font-black uppercase tracking-tighter text-white"><?php echo e($popupEvent->title); ?></div>
                    </div>
                </div>
            </div>

            <!-- Data Side (Sharp) -->
            <div class="lg:w-7/12 p-12 lg:p-20 flex flex-col justify-center bg-white">
                <div class="space-y-10">
                    <div class="space-y-8">
                        <div class="section-heading">
                            <span class="subtitle">Event Spotlight</span>
                            <h2><?php echo e($popupEvent->title); ?></h2>
                            <div class="accent-line"></div>
                        </div>
                        <p class="text-xl text-slate-500 font-medium leading-relaxed max-w-2xl">
                            <?php echo e($popupEvent->short_description ?: ($popupEvent->description ?: 'Join us for this exclusive event. Network with industry experts and discover new growth opportunities.')); ?>

                        </p>
                    </div>

                    <!-- Sharp Schedule Block -->
                    <div class="flex items-center gap-8 p-10 bg-slate-50 border border-slate-100 relative overflow-hidden group">
                        <div class="w-16 h-16 bg-white border border-slate-200 flex items-center justify-center text-brand-primary text-2xl shrink-0">
                            <i class="fa-regular fa-calendar-check"></i>
                        </div>
                        <div class="relative z-10">
                            <div class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] mb-2">Event Schedule</div>
                            <div class="text-2xl font-black text-slate-900 tracking-tighter uppercase tabular-nums">
                                <?php if($popupEvent->end_date): ?>
                                    <?php echo e($popupEvent->event_date->format('d')); ?> - <?php echo e($popupEvent->end_date->format('d M, Y')); ?>

                                <?php else: ?>
                                    <?php echo e($popupEvent->event_date->format('d M, Y')); ?>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <a href="<?php echo e(route('events.show', $popupEvent->slug)); ?>" 
                            class="btn-sharp w-full group">
                            Register For Event
                            <i class="fa-solid fa-arrow-right-long ml-4 group-hover:translate-x-2 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function() {
            const popupId = '<?php echo e($popupEvent->id); ?>';
            const storageKey = 'wgf_popup_seen_' + popupId;

            function initPopup() {
                const container = document.getElementById('event-popup-container');
                const backdrop = document.getElementById('popup-backdrop');
                const content = document.getElementById('popup-content');
                const closeBtn = document.getElementById('close-popup-btn');

                if (!container || !content) return;
                if (localStorage.getItem(storageKey)) return;

                setTimeout(() => {
                    container.style.display = 'flex';
                    container.offsetHeight; 
                    backdrop.style.opacity = '1';
                    content.style.opacity = '1';
                    content.style.transform = 'translateY(0) scale(1)';
                }, 1500);

                function closePopup() {
                    backdrop.style.opacity = '0';
                    content.style.opacity = '0';
                    content.style.transform = 'translateY(40px)';
                    
                    setTimeout(() => {
                        container.style.display = 'none';
                        localStorage.setItem(storageKey, 'true');
                    }, 700);
                }

                if(closeBtn) closeBtn.onclick = closePopup;
                if(backdrop) backdrop.onclick = closePopup;
            }

            if (document.readyState === 'complete') {
                initPopup();
            } else {
                window.addEventListener('load', initPopup);
            }
            
            document.addEventListener('turbo:load', initPopup);
        })();
    </script>
<?php endif; ?>
<?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/home/partials/popup.blade.php ENDPATH**/ ?>