

<?php $__env->startSection('title', 'Institutional Insights & News - World Grexpo Foundation'); ?>

<?php $__env->startSection('content'); ?>

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
                Intelligence Hub
            </div>
            <h1 class="text-6xl md:text-8xl font-black text-white leading-[0.9] tracking-tighter uppercase">
                Institutional <br>
                <span class="text-brand-primary italic">Insights.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-3xl mx-auto leading-relaxed font-medium">
                Stay architecturally updated with the latest industry trends, press intelligence, and crucial global transition initiatives.
            </p>
        </div>
    </section>

    <!-- Insights Grid -->
    <section class="section-padding bg-white relative">
        <div class="container relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <article class="group relative flex flex-col rounded-[3rem] overflow-hidden bg-slate-50 border border-slate-100 shadow-xl transition-all duration-700 hover:-translate-y-4 hover:shadow-brand-primary/20">
                        
                        <!-- Media Container -->
                        <a href="<?php echo e(route('blog.show', $article->slug)); ?>" class="relative aspect-[16/10] overflow-hidden">
                            <img src="<?php echo e($article->thumbnail_url); ?>" alt="<?php echo e($article->title); ?>" 
                                 class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-[3000ms]">
                            
                            <!-- Overlays -->
                            <div class="absolute inset-0 bg-linear-to-t from-slate-950/80 via-transparent to-transparent opacity-60 group-hover:opacity-20 transition-opacity"></div>
                            
                            <?php if($article->category): ?>
                                <div class="absolute top-6 left-6 flex flex-wrap gap-2 z-20">
                                    <?php $__currentLoopData = array_map('trim', explode(',', $article->category)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="px-4 py-1.5 bg-brand-primary text-white text-[8px] font-black uppercase tracking-widest rounded-full shadow-lg"><?php echo e($cat); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>

                            <!-- Interactive Date Tag -->
                            <div class="absolute bottom-6 left-6 px-4 py-2 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl text-white text-[9px] font-black uppercase tracking-widest">
                                <i class="fa-regular fa-calendar mr-2 text-brand-accent"></i> 
                                <?php echo e($article->published_at ? $article->published_at->format('M d, Y') : $article->created_at->format('M d, Y')); ?>

                            </div>
                        </a>

                        <!-- Content Layer -->
                        <div class="p-10 flex flex-col flex-1 space-y-6">
                            <div class="space-y-4">
                                <a href="<?php echo e(route('blog.show', $article->slug)); ?>" class="block">
                                    <h3 class="text-2xl font-black text-slate-900 leading-tight tracking-tighter uppercase line-clamp-2 group-hover:text-brand-primary transition-colors">
                                        <?php echo e($article->title); ?>

                                    </h3>
                                </a>
                                <p class="text-slate-500 text-[11px] font-bold uppercase tracking-widest leading-relaxed line-clamp-3">
                                    <?php echo e($article->excerpt); ?>

                                </p>
                            </div>
                            
                            <div class="mt-auto pt-6 border-t border-slate-100 flex items-center justify-between">
                                <a href="<?php echo e(route('blog.show', $article->slug)); ?>" class="text-[10px] font-black text-slate-900 group-hover:text-brand-primary transition-colors flex items-center gap-4 uppercase tracking-[0.3em]">
                                    Read Insight <i class="fa-solid fa-arrow-right-long group-hover:translate-x-3 transition-transform"></i>
                                </a>
                                <?php if($article->author): ?>
                                    <div class="flex items-center gap-2 text-[9px] font-black text-slate-400 uppercase italic">
                                        <i class="fa-solid fa-user-pen text-brand-primary"></i>
                                        <?php echo e($article->author); ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Indicator -->
                        <div class="absolute top-0 left-0 w-full h-2 bg-brand-primary scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-700"></div>
                    </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-span-full py-32 rounded-[4rem] bg-slate-50 border border-slate-100 text-center space-y-10 animate-on-scroll">
                        <div class="w-32 h-32 rounded-[2.5rem] bg-white shadow-xl flex items-center justify-center text-slate-200 text-5xl mx-auto">
                            <i class="fa-regular fa-folder-open"></i>
                        </div>
                        <div class="space-y-4">
                            <h3 class="text-4xl font-black text-slate-900 uppercase tracking-tighter italic">Intelligence <span class="text-brand-primary">Gathering.</span></h3>
                            <p class="text-xl text-slate-500 font-medium leading-relaxed italic">
                                We are currently architecting insightful intelligence for you. <br>Check back soon for institutional updates.
                            </p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Pagination Protocol -->
            <?php if($articles->hasPages()): ?>
                <div class="mt-24">
                    <?php echo e($articles->links('vendor.pagination.tailwind')); ?>

                </div>
            <?php endif; ?>

        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/articles/index.blade.php ENDPATH**/ ?>