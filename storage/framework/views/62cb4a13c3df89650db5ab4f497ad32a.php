

<?php $__env->startPush('meta'); ?>
    <title><?php echo e($article->meta_title ?? $article->title . ' | World Grexpo Foundation'); ?></title>
    <?php if($article->meta_description): ?>
        <meta name="description" content="<?php echo e($article->meta_description); ?>">
    <?php else: ?>
        <meta name="description" content="<?php echo e($article->excerpt); ?>">
    <?php endif; ?>
    <meta property="og:title" content="<?php echo e($article->title); ?>">
    <meta property="og:description" content="<?php echo e($article->excerpt); ?>">
    <meta property="og:image" content="<?php echo e($article->thumbnail_url); ?>">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta name="twitter:card" content="summary_large_image">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<!-- Header -->
<div class="relative bg-slate-950 pt-32 pb-48 border-b border-slate-900">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
    </div>
</div>

<!-- Main Article Container -->
<section class="relative z-10 -mt-32 pb-32">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-8">
        
        <article class="bg-white border border-slate-100 overflow-hidden rounded-sm shadow-4xl">
            
            <!-- Hero Image -->
            <div class="w-full h-[500px] lg:h-[700px] relative border-b border-slate-100">
                <img src="<?php echo e($article->thumbnail_url); ?>" alt="<?php echo e($article->title); ?>" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-[2000ms]">
                <div class="absolute inset-0 bg-slate-950/20"></div>
                <?php if($article->category): ?>
                    <div class="absolute top-10 left-10 flex flex-wrap gap-3">
                        <?php $__currentLoopData = array_map('trim', explode(',', $article->category)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="bg-slate-950/80 backdrop-blur-md px-6 py-3 text-[10px] font-black text-brand-accent uppercase tracking-[0.3em] border border-white/10 italic rounded-sm"><?php echo e($cat); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Content Header -->
            <div class="px-12 md:px-24 pt-24 pb-16 border-b border-slate-100">
                <div class="flex flex-wrap items-center gap-8 text-[10px] font-black text-slate-500 mb-12 uppercase tracking-[0.3em] italic">
                    <span class="flex items-center gap-4">
                        <i class="fa-regular fa-calendar text-brand-accent"></i> <?php echo e($article->published_at ? $article->published_at->format('F d, Y') : $article->created_at->format('F d, Y')); ?>

                    </span>
                    <?php if($article->author): ?>
                        <span class="w-2 h-2 bg-slate-100"></span>
                        <span class="flex items-center gap-4">
                            <i class="fa-solid fa-user-pen text-brand-accent"></i> <?php echo e($article->author); ?>

                        </span>
                    <?php endif; ?>
                </div>
                
                <h1 class="text-4xl md:text-7xl font-black text-slate-950 leading-[0.9] tracking-tighter uppercase italic mb-12">
                    <?php echo e($article->title); ?>

                </h1>
                
                <div class="flex items-center gap-8">
                    <span class="text-[10px] font-black uppercase tracking-[0.5em] text-slate-400 italic">Distribute Node:</span>
                    <div class="flex gap-4">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(urlencode(url()->current())); ?>" target="_blank" class="w-14 h-14 bg-slate-50 text-slate-950 flex items-center justify-center hover:bg-slate-950 hover:text-white transition-all duration-500 border border-slate-100 rounded-sm group">
                            <i class="fa-brands fa-facebook-f text-sm group-hover:scale-125 transition-transform"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo e(urlencode(url()->current())); ?>&text=<?php echo e(urlencode($article->title)); ?>" target="_blank" class="w-14 h-14 bg-slate-50 text-slate-950 flex items-center justify-center hover:bg-slate-950 hover:text-white transition-all duration-500 border border-slate-100 rounded-sm group">
                            <i class="fa-brands fa-twitter text-sm group-hover:scale-125 transition-transform"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo e(urlencode(url()->current())); ?>&title=<?php echo e(urlencode($article->title)); ?>" target="_blank" class="w-14 h-14 bg-slate-50 text-slate-950 flex items-center justify-center hover:bg-slate-950 hover:text-white transition-all duration-500 border border-slate-100 rounded-sm group">
                            <i class="fa-brands fa-linkedin-in text-sm group-hover:scale-125 transition-transform"></i>
                        </a>
                        <a href="https://api.whatsapp.com/send?text=<?php echo e(urlencode($article->title . ' ' . url()->current())); ?>" target="_blank" class="w-14 h-14 bg-slate-50 text-slate-950 flex items-center justify-center hover:bg-slate-950 hover:text-white transition-all duration-500 border border-slate-100 rounded-sm group">
                            <i class="fa-brands fa-whatsapp text-sm group-hover:scale-125 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Block Content Renderer -->
            <div class="px-12 md:px-24 py-24 space-y-12">
                <?php $blocks = json_decode($article->content, true); ?>
                <?php if(is_array($blocks)): ?>
                    <?php $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php switch($block['type'] ?? ''):
                            case ('heading'): ?>
                                <?php $tag = $block['level'] ?? 'h2'; ?>
                                <?php if($tag === 'h1'): ?>
                                    <h1 class="text-5xl font-black text-slate-950 leading-none uppercase italic tracking-tighter border-l-8 border-brand-accent pl-10"><?php echo $block['content'] ?? ''; ?></h1>
                                <?php elseif($tag === 'h2'): ?>
                                    <h2 class="text-4xl font-black text-slate-950 leading-none uppercase italic tracking-tighter border-l-8 border-brand-accent pl-10"><?php echo $block['content'] ?? ''; ?></h2>
                                <?php elseif($tag === 'h3'): ?>
                                    <h3 class="text-3xl font-black text-slate-950 leading-none uppercase italic tracking-tighter border-l-8 border-brand-accent pl-10"><?php echo $block['content'] ?? ''; ?></h3>
                                <?php else: ?>
                                    <h4 class="text-2xl font-black text-slate-950 leading-none uppercase italic tracking-tighter border-l-8 border-brand-accent pl-10"><?php echo $block['content'] ?? ''; ?></h4>
                                <?php endif; ?>
                                <?php break; ?>

                            <?php case ('paragraph'): ?>
                                <div class="text-2xl text-slate-600 leading-relaxed font-light italic prose-builder-inline"><?php echo $block['content'] ?? ''; ?></div>
                                <?php break; ?>

                            <?php case ('image'): ?>
                                <?php if($block['url'] ?? ''): ?>
                                    <figure class="my-16 <?php echo e(($block['size'] ?? 'full') === 'medium' ? 'max-w-[75%] mx-auto' : (($block['size'] ?? 'full') === 'small' ? 'max-w-[50%] mx-auto' : '')); ?>">
                                        <img src="<?php echo e($block['url']); ?>" alt="<?php echo e($block['caption'] ?? ''); ?>" class="w-full h-auto rounded-sm grayscale hover:grayscale-0 transition-all duration-[2000ms] border border-slate-100">
                                        <?php if($block['caption'] ?? ''): ?>
                                            <figcaption class="text-left text-[10px] font-black text-slate-400 italic uppercase tracking-[0.3em] mt-6 border-l-2 border-slate-200 pl-4"><?php echo e($block['caption']); ?></figcaption>
                                        <?php endif; ?>
                                    </figure>
                                <?php endif; ?>
                                <?php break; ?>

                            <?php case ('gallery'): ?>
                                <?php if(!empty($block['images'])): ?>
                                    <div class="grid gap-2 my-16" style="grid-template-columns: repeat(<?php echo e($block['columns'] ?? 3); ?>, 1fr);">
                                        <?php $__currentLoopData = $block['images']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php echo e($img); ?>" target="_blank" class="block rounded-sm overflow-hidden border border-slate-100 hover:border-slate-950 transition-colors bg-slate-950 group/gal">
                                                <img src="<?php echo e($img); ?>" alt="Gallery node" class="w-full h-auto object-cover grayscale group-hover/gal:grayscale-0 transition-all duration-700">
                                            </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                                <?php break; ?>

                            <?php case ('list'): ?>
                                <?php if($block['style'] === 'ordered'): ?>
                                    <ol class="list-none pl-0 space-y-4 text-xl text-slate-600 leading-relaxed font-light italic prose-builder-inline">
                                        <?php $__currentLoopData = ($block['items'] ?? []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(trim(strip_tags($item))): ?>
                                                <li class="flex items-start gap-6">
                                                    <span class="text-brand-accent font-black tracking-tighter">0<?php echo e($loop->iteration); ?>.</span>
                                                    <span><?php echo $item; ?></span>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ol>
                                <?php else: ?>
                                    <ul class="list-none pl-0 space-y-4 text-xl text-slate-600 leading-relaxed font-light italic prose-builder-inline">
                                        <?php $__currentLoopData = ($block['items'] ?? []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(trim(strip_tags($item))): ?>
                                                <li class="flex items-start gap-6">
                                                    <span class="text-brand-accent font-black tracking-tighter">/</span>
                                                    <span><?php echo $item; ?></span>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                <?php endif; ?>
                                <?php break; ?>

                            <?php case ('quote'): ?>
                                <blockquote class="border-l-[16px] border-slate-950 bg-slate-50 p-16 my-16 prose-builder-inline rounded-sm relative overflow-hidden group hover:bg-slate-950 transition-all duration-700">
                                    <div class="absolute inset-0 bg-[linear-gradient(to_right,#00000005_1px,transparent_1px),linear-gradient(to_bottom,#00000005_1px,transparent_1px)] bg-[size:20px_20px] group-hover:bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)]"></div>
                                    <div class="text-3xl font-black text-slate-950 leading-tight uppercase italic tracking-tighter group-hover:text-white transition-colors relative z-10"><?php echo $block['content'] ?? ''; ?></div>
                                    <?php if($block['author'] ?? ''): ?>
                                        <cite class="block mt-8 text-[10px] font-black text-brand-primary uppercase tracking-[0.3em] not-italic group-hover:text-brand-accent transition-colors relative z-10">— <?php echo e($block['author']); ?></cite>
                                    <?php endif; ?>
                                </blockquote>
                                <?php break; ?>

                            <?php case ('code'): ?>
                                <div class="bg-slate-950 rounded-sm p-10 my-16 overflow-x-auto border-l-8 border-brand-accent">
                                    <pre class="text-brand-accent text-sm font-mono whitespace-pre-wrap"><?php echo strip_tags($block['content'] ?? ''); ?></pre>
                                </div>
                                <?php break; ?>

                            <?php case ('divider'): ?>
                                <hr class="border-slate-100 my-20">
                                <?php break; ?>

                            <?php case ('spacer'): ?>
                                <?php
                                    $h = ['small' => '24px','medium' => '48px','large' => '80px','xlarge' => '120px'][$block['height'] ?? 'medium'] ?? '48px';
                                ?>
                                <div style="height: <?php echo e($h); ?>;"></div>
                                <?php break; ?>
                        <?php endswitch; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    
                    <div class="prose prose-slate prose-2xl max-w-none prose-headings:uppercase prose-headings:italic prose-headings:font-black prose-headings:tracking-tighter prose-p:font-light prose-p:italic italic">
                        <?php echo $article->content; ?>

                    </div>
                <?php endif; ?>
            </div>
            
            <!-- Bottom Nav -->
            <div class="px-12 md:px-24 py-12 bg-slate-50 border-t border-slate-100 flex items-center justify-between group/bot transition-colors hover:bg-slate-950">
                <a href="<?php echo e(route('blog.index')); ?>" class="text-[10px] font-black text-slate-950 uppercase tracking-[0.4em] italic flex items-center gap-4 group-hover/bot:text-white transition-all">
                    <i class="fa-solid fa-arrow-left-long group-hover/bot:text-brand-accent"></i> Return to Intelligence Node
                </a>
            </div>
        </article>
    </div>
</section>

<?php if(isset($related) && $related->count() > 0): ?>
<section class="py-32 bg-slate-50 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-5xl font-black text-slate-950 tracking-tighter uppercase italic mb-16">Related <span class="text-brand-primary not-italic">Intelligence</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
            <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="bg-white border border-slate-100 rounded-sm overflow-hidden group hover:bg-slate-950 transition-all duration-700 flex flex-col relative shadow-sm">
                    <a href="<?php echo e(route('blog.show', $rel->slug)); ?>" class="block relative h-64 overflow-hidden border-b border-slate-100 group-hover:border-slate-800 transition-colors">
                        <img src="<?php echo e($rel->thumbnail_url); ?>" alt="<?php echo e($rel->title); ?>" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000">
                    </a>
                    <div class="p-10 flex flex-col flex-1">
                        <div class="text-[8px] font-black text-brand-primary uppercase tracking-[0.4em] italic mb-4 group-hover:text-brand-accent transition-colors"><?php echo e($rel->category ?? 'Intelligence Node'); ?></div>
                        <a href="<?php echo e(route('blog.show', $rel->slug)); ?>"><h3 class="text-xl font-black text-slate-950 leading-tight uppercase italic tracking-tighter group-hover:text-white transition-colors line-clamp-2 mb-6"><?php echo e($rel->title); ?></h3></a>
                        <p class="text-slate-500 text-[10px] font-black uppercase tracking-widest leading-loose line-clamp-2 flex-1 group-hover:text-slate-400 transition-colors"><?php echo e($rel->excerpt); ?></p>
                        <a href="<?php echo e(route('blog.show', $rel->slug)); ?>" class="text-[9px] font-black text-slate-950 group-hover:text-brand-accent transition-colors flex items-center gap-3 mt-8 uppercase tracking-[0.3em] italic">Read Insight <i class="fa-solid fa-arrow-right-long group-hover:translate-x-2 transition-transform"></i></a>
                    </div>
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/articles/show.blade.php ENDPATH**/ ?>