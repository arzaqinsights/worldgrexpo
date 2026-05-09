<?php
    $popupEvent = $popupEvent ?? \App\Models\Event::where('status', 'published')
        ->where('show_as_popup', true)
        ->latest()
        ->first();
?>

<?php if(isset($popupEvent) && $popupEvent): ?>
    <div id="event-popup-container" class="fixed inset-0 z-9999 items-center justify-center p-4 sm:p-6" style="display: none;">
        <!-- Premium Backdrop -->
        <div id="popup-backdrop" class="absolute inset-0 bg-slate-950/90 backdrop-blur-md transition-opacity duration-700 opacity-0 cursor-pointer"></div>

        <!-- Modern Modal Content -->
        <div id="popup-content" class="relative w-full max-w-5xl bg-white rounded-[3rem] shadow-[0_50px_100px_-20px_rgba(0,0,0,0.5)] overflow-hidden flex flex-col lg:flex-row transform transition-all duration-700 translate-y-12 opacity-0">
            
            <!-- Floating Close Button -->
            <button id="close-popup-btn" class="absolute top-6 right-6 z-50 w-12 h-12 rounded-2xl bg-white/10 hover:bg-white/20 text-white lg:text-slate-400 lg:bg-slate-50 lg:hover:bg-brand-primary lg:hover:text-white flex items-center justify-center transition-all backdrop-blur-xl group">
                <i class="fa-solid fa-xmark group-hover:rotate-90 transition-transform"></i>
            </button>

            <!-- Visual Side -->
            <div class="lg:w-1/2 relative overflow-hidden bg-slate-100 min-h-[300px]">
                <?php if($popupEvent->image): ?>
                    <img src="<?php echo e(asset($popupEvent->image)); ?>" class="w-full h-full object-cover">
                <?php else: ?>
                    <div class="absolute inset-0 bg-linear-to-br from-brand-primary to-brand-accent"></div>
                <?php endif; ?>
                <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                
                <!-- Overlay Content -->
                <div class="absolute bottom-10 left-10 right-10 space-y-4">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-accent text-brand-primary-dark text-[10px] font-black uppercase tracking-[0.2em] shadow-xl">
                        <i class="fa-solid fa-star"></i> Featured Event
                    </div>
                    <div class="text-white">
                        <div class="text-[10px] font-black uppercase tracking-[0.3em] text-white/60 mb-1">Global Summit</div>
                        <div class="text-3xl font-black uppercase tracking-tighter"><?php echo e($popupEvent->title); ?></div>
                    </div>
                </div>
            </div>

            <!-- Data Side -->
            <div class="lg:w-1/2 p-10 lg:p-16 flex flex-col justify-center bg-white space-y-10">
                <div class="space-y-6">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary/5 text-brand-primary text-[10px] font-black uppercase tracking-[0.2em]">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-pulse"></span>
                        Event Spotlight
                    </div>
                    <h2 class="text-4xl font-black text-slate-900 leading-[0.9] tracking-tighter uppercase">
                        <?php echo e($popupEvent->title); ?>

                    </h2>
                    <p class="text-lg text-slate-500 font-medium leading-relaxed">
                        <?php echo e($popupEvent->short_description ?: ($popupEvent->description ?: 'Join us for this exclusive event. Network with industry experts and discover new growth opportunities.')); ?>

                    </p>
                </div>

                <div class="grid grid-cols-1 gap-6">
                    <div class="flex items-center gap-6 p-6 rounded-[2rem] bg-slate-50 border border-slate-100">
                        <div class="w-14 h-14 rounded-2xl bg-white shadow-xl flex items-center justify-center text-brand-primary text-xl">
                            <i class="fa-regular fa-calendar-check"></i>
                        </div>
                        <div>
                            <div class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Schedule</div>
                            <div class="text-lg font-black text-slate-900 tracking-tight">
                                <?php if($popupEvent->end_date): ?>
                                    <?php echo e($popupEvent->event_date->format('d')); ?> - <?php echo e($popupEvent->end_date->format('d M, Y')); ?>

                                <?php else: ?>
                                    <?php echo e($popupEvent->event_date->format('d M, Y')); ?>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="<?php echo e(route('events.show', $popupEvent->slug)); ?>" 
                        class="flex-1 py-5 rounded-2xl bg-brand-primary text-white text-center font-black uppercase tracking-widest text-xs shadow-2xl shadow-brand-primary/20 hover:bg-brand-primary-dark transition-all transform hover:-translate-y-1">
                        Register For Event
                    </a>
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
                    content.style.transform = 'translateY(24px) scale(0.95)';
                    
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