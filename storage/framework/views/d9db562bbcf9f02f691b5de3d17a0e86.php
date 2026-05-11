<?php if(isset($latestArticles) && $latestArticles->count() > 0): ?>
    <section class="section-padding bg-white relative overflow-hidden border-b border-slate-100">
        <!-- Industrial Background Decor -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-slate-50/30 -z-0"></div>

        <div class="container relative z-10">
            <!-- Sharp Section Header -->
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-12 mb-24">
                <div class="max-w-3xl space-y-8">
                    <div class="section-heading">
                        <span class="subtitle">Latest Insights</span>
                        <h2>News & <span class="text-brand-primary">Articles.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    <p class="text-xl text-slate-500 font-medium leading-relaxed max-w-2xl">
                        Stay informed with industry insights, policy updates, and expert perspectives from the global
                        industrial ecosystem.
                    </p>
                </div>
                <a href="<?php echo e(route('blog.index')); ?>" class="btn-sharp-outline group">
                    View All Articles <i
                        class="fa-solid fa-arrow-right-long ml-4 group-hover:translate-x-3 transition-transform"></i>
                </a>
            </div>

            <!-- Sharp Blog Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1 bg-slate-100">
                <?php $__currentLoopData = $latestArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article
                        class="group relative flex flex-col border border-slate-300 hover:border-brand-primary bg-white p-6 transition-all duration-500 hover:bg-slate-100">

                        <!-- Sharp Media Area -->
                        <a href="<?php echo e(route('blog.show', $article->slug)); ?>"
                            class="block relative aspect-video overflow-hidden mb-10 bg-slate-100">
                            <img src="<?php echo e($article->thumbnail_url); ?>" alt="<?php echo e($article->title); ?>"
                                class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105"
                                loading="lazy">

                            <!-- Sharp Category Badges -->
                            <?php if($article->category): ?>
                                <div class="absolute top-0 left-0 p-4 flex flex-wrap gap-1">
                                    <?php $__currentLoopData = array_slice(array_map('trim', explode(',', $article->category)), 0, 2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span
                                            class="px-3 py-1 bg-brand-primary text-[8px] font-black text-white uppercase tracking-[0.2em]">
                                            <?php echo e($cat); ?>

                                        </span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>
                        </a>

                        <!-- Content Area -->
                        <div class="flex-1 space-y-6 flex flex-col">
                            <!-- Meta Info (Sharp) -->
                            <div
                                class="flex items-center gap-4 text-[10px] font-black text-slate-400 uppercase tracking-widest border-b border-slate-50 pb-4">
                                <span class="flex items-center gap-2">
                                    <i class="fa-regular fa-calendar-alt text-brand-primary"></i>
                                    <?php echo e($article->published_at ? $article->published_at->format('M d, Y') : $article->created_at->format('M d, Y')); ?>

                                </span>
                                <?php if($article->author): ?>
                                    <div class="w-[1px] h-3 bg-slate-200"></div>
                                    <span class="flex items-center gap-2">
                                        <i class="fa-solid fa-user-pen text-brand-primary"></i>
                                        <?php echo e($article->author); ?>

                                    </span>
                                <?php endif; ?>
                            </div>

                            <!-- Title & Excerpt -->
                            <div class="space-y-4 flex-1">
                                <a href="<?php echo e(route('blog.show', $article->slug)); ?>" class="block">
                                    <h3
                                        class="text-2xl font-black text-slate-900 group-hover:text-brand-primary transition-colors tracking-tighter uppercase leading-tight">
                                        <?php echo e($article->title); ?>

                                    </h3>
                                </a>
                                <p class="text-[13px] text-slate-500 font-medium leading-relaxed line-clamp-3">
                                    <?php echo e($article->excerpt); ?>

                                </p>
                            </div>

                            <!-- Read More CTA (Sharp) -->
                            <a href="<?php echo e(route('blog.show', $article->slug)); ?>"
                                class="inline-flex items-center gap-4 text-xs font-black text-slate-900 uppercase tracking-widest group/btn">
                                Read Article
                                <div
                                    class="w-8 h-8 border border-slate-200 flex items-center justify-center text-slate-400 group-hover/btn:bg-brand-primary group-hover/btn:text-white group-hover/btn:border-brand-primary transition-all">
                                    <i class="fa-solid fa-arrow-right-long text-[10px]"></i>
                                </div>
                            </a>
                        </div>
                    </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php endif; ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/home/partials/blog_preview.blade.php ENDPATH**/ ?>