<?php if(isset($latestArticles) && $latestArticles->count() > 0): ?>
<section class="section-padding bg-slate-50 relative overflow-hidden">
    <!-- Sophisticated Background Decorators -->
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-brand-accent/5 rounded-full blur-[120px] -translate-x-1/3 translate-y-1/3"></div>
    <div class="absolute top-0 right-0 w-64 h-64 bg-brand-primary/5 rounded-full blur-[80px]"></div>

    <div class="container relative z-10">
        <!-- Modern Section Header -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-12 mb-20" x-data="{ visible: false }" x-intersect="visible = true">
            <div class="max-w-3xl space-y-6">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary/5 text-brand-primary text-[10px] font-black uppercase tracking-[0.2em]">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-pulse"></span>
                    Latest Insights
                </div>
                <h2 class="text-5xl md:text-7xl font-black text-slate-900 leading-[0.9] tracking-tighter">
                    News & <span class="text-brand-primary italic">Articles.</span>
                </h2>
                <p class="text-xl text-slate-500 font-medium leading-relaxed">
                    Stay informed with industry insights, policy updates, and expert perspectives from the global industrial ecosystem.
                </p>
            </div>
            <a href="<?php echo e(route('blog.index')); ?>" 
                class="group flex items-center gap-4 px-8 py-4 rounded-2xl bg-white border border-slate-200 text-slate-900 font-black uppercase tracking-widest text-xs hover:border-brand-primary hover:text-brand-primary transition-all shadow-sm">
                View All Articles <i class="fa-solid fa-arrow-right-long group-hover:translate-x-2 transition-transform"></i>
            </a>
        </div>

        <!-- Premium Blog Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <?php $__currentLoopData = $latestArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="group relative flex flex-col bg-white rounded-[2.5rem] p-4 border border-slate-100 transition-all duration-700 hover:-translate-y-4 hover:shadow-2xl hover:shadow-brand-primary/5"
                    x-data="{ visible: false }" x-intersect="visible = true"
                    :class="visible ? 'translate-y-0 opacity-100' : 'translate-y-12 opacity-0'"
                    style="transition-delay: <?php echo e($loop->index * 120); ?>ms">
                    
                    <!-- Media Area -->
                    <a href="<?php echo e(route('blog.show', $article->slug)); ?>" class="block relative aspect-[16/10] rounded-[2rem] overflow-hidden mb-8">
                        <img src="<?php echo e($article->thumbnail_url); ?>"
                             alt="<?php echo e($article->title); ?>"
                             class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110"
                             loading="lazy">
                        
                        <!-- Floating Category Badges -->
                        <?php if($article->category): ?>
                            <div class="absolute top-4 left-4 flex flex-wrap gap-2">
                                <?php $__currentLoopData = array_slice(array_map('trim', explode(',', $article->category)), 0, 2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="px-3 py-1 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-[8px] font-black text-white uppercase tracking-[0.2em] shadow-lg">
                                        <?php echo e($cat); ?>

                                    </span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>

                        <div class="absolute inset-0 bg-linear-to-t from-slate-950/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </a>

                    <!-- Content Area -->
                    <div class="flex-1 px-4 pb-4 space-y-6 flex flex-col">
                        <!-- Meta Info -->
                        <div class="flex items-center gap-4 text-[10px] font-black text-slate-400 uppercase tracking-widest">
                            <span class="flex items-center gap-2">
                                <i class="fa-regular fa-calendar-alt text-brand-primary"></i> 
                                <?php echo e($article->published_at ? $article->published_at->format('M d, Y') : $article->created_at->format('M d, Y')); ?>

                            </span>
                            <?php if($article->author): ?>
                                <span class="w-1 h-1 rounded-full bg-slate-200"></span>
                                <span class="flex items-center gap-2">
                                    <i class="fa-solid fa-user-pen text-brand-primary"></i> 
                                    <?php echo e($article->author); ?>

                                </span>
                            <?php endif; ?>
                        </div>

                        <!-- Title & Excerpt -->
                        <div class="space-y-3 flex-1">
                            <a href="<?php echo e(route('blog.show', $article->slug)); ?>" class="block">
                                <h3 class="text-2xl font-black text-slate-900 group-hover:text-brand-primary transition-colors leading-tight tracking-tight uppercase">
                                    <?php echo e($article->title); ?>

                                </h3>
                            </a>
                            <p class="text-sm text-slate-500 font-medium leading-relaxed line-clamp-3">
                                <?php echo e($article->excerpt); ?>

                            </p>
                        </div>

                        <!-- Read More CTA -->
                        <div class="pt-6 border-t border-slate-50">
                            <a href="<?php echo e(route('blog.show', $article->slug)); ?>" 
                                class="inline-flex items-center gap-3 text-xs font-black text-slate-900 uppercase tracking-widest group/btn">
                                Read Article 
                                <span class="w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center group-hover/btn:bg-brand-primary group-hover/btn:text-white transition-all">
                                    <i class="fa-solid fa-arrow-right-long transition-transform group-hover/btn:translate-x-1"></i>
                                </span>
                            </a>
                        </div>
                    </div>

                    <!-- Decorative Background -->
                    <div class="absolute -inset-2 bg-brand-primary/5 blur-2xl opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none -z-10"></div>
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- Mobile View All -->
        <div class="lg:hidden mt-12">
            <a href="<?php echo e(route('blog.index')); ?>" 
                class="w-full py-5 bg-slate-900 text-white rounded-2xl font-black text-xs uppercase tracking-widest flex items-center justify-center gap-3">
                View All Articles
                <i class="fa-solid fa-arrow-right-long"></i>
            </a>
        </div>
    </div>
</section>
<?php endif; ?>
<?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/home/partials/blog_preview.blade.php ENDPATH**/ ?>