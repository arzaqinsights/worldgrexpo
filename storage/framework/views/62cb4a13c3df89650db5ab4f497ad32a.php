

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

<!-- Header Backdrop -->
<div class="relative bg-slate-950 pt-32 pb-48 overflow-hidden">
 <div class="absolute inset-0 z-0">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
 </div>
 <!-- Animated Decorators -->
 <div class="absolute top-1/4 right-0 w-[600px] h-[600px] bg-brand-primary/10 rounded-full blur-[120px] animate-pulse"></div>
</div>

<!-- Article Interface -->
<section class="relative z-10 -mt-32 pb-32">
 <div class="max-w-[1100px] mx-auto px-6">
  
  <article class="bg-white rounded-2xl shadow-2xl overflow-hidden border border-slate-100">
   
   <!-- Hero Media -->
   <div class="relative aspect-[16/9] overflow-hidden group">
    <img src="<?php echo e($article->thumbnail_url); ?>" alt="<?php echo e($article->title); ?>" 
      class="w-full h-full object-cover transition-all duration-[3000ms] group-hover:scale-110 group-">
    <div class="absolute inset-0 bg-linear-to-t from-slate-950/80 via-transparent to-transparent opacity-60 group-hover:opacity-20 transition-opacity"></div>
    
    <?php if($article->category): ?>
     <div class="absolute top-10 left-10 flex flex-wrap gap-3 z-20">
      <?php $__currentLoopData = array_map('trim', explode(',', $article->category)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <span class="px-6 py-2 bg-brand-primary text-white text-[9px] font-bold uppercase tracking-widest rounded-full shadow-2xl"><?php echo e($cat); ?></span>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
    <?php endif; ?>

    <!-- Meta Tag -->
    <div class="absolute bottom-10 left-10 px-6 py-3 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl text-white text-[10px] font-bold uppercase tracking-widest shadow-2xl">
     <i class="fa-regular fa-calendar mr-3 text-brand-accent"></i> 
     <?php echo e($article->published_at ? $article->published_at->format('F d, Y') : $article->created_at->format('F d, Y')); ?>

    </div>
   </div>

   <!-- Content Header -->
   <div class="p-12 md:p-24 space-y-12">
    <div class="space-y-6">
     <div class="flex items-center gap-4">
      <div class="h-[1px] w-12 bg-brand-primary"></div>
      <span class="text-brand-primary text-[10px] font-bold uppercase tracking-[0.4em]">Intelligence Report</span>
     </div>
     <h1 class="text-3xl md:text-5xl font-bold text-slate-900 leading-[0.9] tracking-tight uppercase ">
      <?php echo e($article->title); ?>

     </h1>
    </div>

    <div class="flex flex-col md:flex-row md:items-center justify-between gap-10 py-10 border-y border-slate-100">
     <?php if($article->author): ?>
      <div class="flex items-center gap-4">
       <div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center text-brand-primary">
        <i class="fa-solid fa-user-pen"></i>
       </div>
       <div>
        <span class="block text-[8px] font-bold text-slate-400 uppercase tracking-widest">Architect</span>
        <span class="text-sm font-bold text-slate-900 uppercase tracking-tight"><?php echo e($article->author); ?></span>
       </div>
      </div>
     <?php endif; ?>

     <div class="flex items-center gap-6">
      <span class="text-[9px] font-bold uppercase tracking-[0.4em] text-slate-400">Distribution Nodes:</span>
      <div class="flex gap-3">
       <?php $__currentLoopData = [
        ['icon' => 'fa-facebook-f', 'url' => "https://www.facebook.com/sharer/sharer.php?u=".urlencode(url()->current())],
        ['icon' => 'fa-twitter', 'url' => "https://twitter.com/intent/tweet?url=".urlencode(url()->current())."&text=".urlencode($article->title)],
        ['icon' => 'fa-linkedin-in', 'url' => "https://www.linkedin.com/shareArticle?mini=true&url=".urlencode(url()->current())."&title=".urlencode($article->title)],
        ['icon' => 'fa-whatsapp', 'url' => "https://api.whatsapp.com/send?text=".urlencode($article->title . ' ' . url()->current())]
       ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e($social['url']); ?>" target="_blank" 
         class="w-12 h-12 rounded-2xl bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-400 hover:bg-brand-primary hover:text-white hover:shadow-lg transition-all duration-500">
         <i class="fa-brands <?php echo e($social['icon']); ?> text-xs"></i>
        </a>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
     </div>
    </div>

    <!-- Content Rendering Layer -->
    <div class="space-y-16 prose-builder">
     <?php $blocks = json_decode($article->content, true); ?>
     <?php if(is_array($blocks)): ?>
      <?php $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php switch($block['type'] ?? ''):
        case ('heading'): ?>
         <?php $tag = $block['level'] ?? 'h2'; ?>
         <<?php echo e($tag); ?> class="text-4xl font-bold text-slate-900 leading-none uppercase tracking-tight pt-8">
          <?php echo $block['content'] ?? ''; ?><span class="text-brand-primary">.</span>
         </<?php echo e($tag); ?>>
         <?php break; ?>

        <?php case ('paragraph'): ?>
         <div class="text-xl text-slate-500 leading-relaxed font-medium prose-builder-inline">
          <?php echo $block['content'] ?? ''; ?>

         </div>
         <?php break; ?>

        <?php case ('image'): ?>
         <?php if($block['url'] ?? ''): ?>
          <figure class="rounded-2xl overflow-hidden shadow-2xl border border-slate-100">
           <img src="<?php echo e($block['url']); ?>" alt="<?php echo e($block['caption'] ?? ''); ?>" class="w-full transition-all duration-1000">
           <?php if($block['caption'] ?? ''): ?>
            <figcaption class="p-6 bg-slate-50 text-[9px] font-bold text-slate-400 uppercase tracking-widest text-center">
             <?php echo e($block['caption']); ?>

            </figcaption>
           <?php endif; ?>
          </figure>
         <?php endif; ?>
         <?php break; ?>

        <?php case ('quote'): ?>
         <div class="relative p-16 rounded-[3.5rem] bg-slate-950 overflow-hidden shadow-2xl">
          <div class="absolute top-0 right-0 w-32 h-32 bg-brand-primary/10 rounded-full blur-2xl"></div>
          <i class="fa-solid fa-quote-left text-brand-primary/10 text-9xl absolute -top-4 -left-4"></i>
          <div class="space-y-6 relative z-10">
           <p class="text-3xl text-white font-bold tracking-tight leading-tight">
            "<?php echo $block['content'] ?? ''; ?>"
           </p>
           <?php if($block['author'] ?? ''): ?>
            <cite class="block text-[10px] font-bold text-brand-primary uppercase tracking-[0.4em] not-">— <?php echo e($block['author']); ?></cite>
           <?php endif; ?>
          </div>
         </div>
         <?php break; ?>

        <?php case ('list'): ?>
         <ul class="space-y-6">
          <?php $__currentLoopData = ($block['items'] ?? []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <li class="flex items-start gap-6 group">
            <div class="w-8 h-8 rounded-xl bg-brand-primary/10 flex items-center justify-center text-brand-primary shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-colors shadow-sm">
             <i class="fa-solid fa-check text-[10px]"></i>
            </div>
            <div class="text-xl text-slate-500 font-medium leading-relaxed"><?php echo $item; ?></div>
           </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </ul>
         <?php break; ?>

        <?php case ('divider'): ?>
         <div class="py-8 flex items-center gap-4">
          <div class="h-px flex-1 bg-slate-100"></div>
          <div class="w-2 h-2 rounded-full bg-brand-primary"></div>
          <div class="h-px flex-1 bg-slate-100"></div>
         </div>
         <?php break; ?>
         
        <?php default: ?>
         
       <?php endswitch; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php else: ?>
      <div class="prose prose-slate prose-xl max-w-none text-slate-500 font-medium leading-relaxed">
       <?php echo $article->content; ?>

      </div>
     <?php endif; ?>
    </div>
    
    <!-- Return Channel -->
    <div class="pt-16 border-t border-slate-100">
     <a href="<?php echo e(route('blog.index')); ?>" class="group inline-flex items-center gap-4 text-[11px] font-bold text-slate-900 uppercase tracking-[0.3em] hover:text-brand-primary transition-all">
      <i class="fa-solid fa-arrow-left-long group-hover:-translate-x-3 transition-transform"></i>
      Return to Intelligence Node
     </a>
    </div>
   </div>
  </article>
 </div>
</section>

<!-- Related Intelligence -->
<?php if(isset($related) && $related->count() > 0): ?>
<section class="py-20 bg-slate-50 border-t border-slate-100">
 <div class="container">
  <div class="space-y-16">
   <div class="space-y-4">
    <div class="h-1 w-24 bg-brand-primary"></div>
    <h2 class="text-3xl font-bold text-slate-900 uppercase tracking-tight">Related <br><span class="text-brand-primary ">Intelligence.</span></h2>
   </div>
   
   <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
    <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <article class="group relative rounded-2xl bg-white border border-slate-100 overflow-hidden shadow-xl transition-all duration-700 hover:-translate-y-4 hover:shadow-brand-primary/20">
      <a href="<?php echo e(route('blog.show', $rel->slug)); ?>" class="block aspect-video overflow-hidden">
       <img src="<?php echo e($rel->thumbnail_url); ?>" alt="<?php echo e($rel->title); ?>" 
         class="w-full h-full object-cover group- transition-all duration-1000 group-hover:scale-110">
      </a>
      <div class="p-10 space-y-6">
       <div class="text-[9px] font-bold text-brand-primary uppercase tracking-widest"><?php echo e($rel->category ?? 'Institutional Node'); ?></div>
       <a href="<?php echo e(route('blog.show', $rel->slug)); ?>">
        <h3 class="text-xl font-bold text-slate-900 uppercase tracking-tight line-clamp-2 group-hover:text-brand-primary transition-colors leading-none">
         <?php echo e($rel->title); ?>

        </h3>
       </a>
       <div class="pt-6 border-t border-slate-50">
        <a href="<?php echo e(route('blog.show', $rel->slug)); ?>" class="inline-flex items-center gap-4 text-[9px] font-bold text-slate-900 uppercase tracking-[0.3em] hover:gap-6 transition-all">
         Read Insight <i class="fa-solid fa-arrow-right-long"></i>
        </a>
       </div>
      </div>
     </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>
  </div>
 </div>
</section>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/articles/show.blade.php ENDPATH**/ ?>