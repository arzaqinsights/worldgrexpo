<!-- World Grexpo Core Values: Industrial Bento Design -->
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Grid Pattern Overlay -->
    <div class="absolute inset-0 opacity-[0.05]"
        style="background-image: linear-gradient(#000 1px, transparent 1px), linear-gradient(90deg, #000 1px, transparent 1px); background-size: 50px 50px;"></div>

    <div class="container relative z-10">
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-12 mb-16 animate-on-scroll">
            <div class="max-w-4xl">
                <h2 class="text-5xl md:text-7xl font-black text-slate-950 leading-[0.9] mb-8 tracking-tighter uppercase italic">
                    Our Core <span class="text-brand-accent not-italic">Values</span> <br> Architecting the Future
                </h2>
                <p class="text-slate-500 text-xl font-light leading-relaxed">
                    At World Grexpo, our values are the structural foundations of every global initiative. From empowering visionaries to driving absolute industrial modernization, these principles guide our trajectory toward global sustainability.
                </p>
            </div>
        </div>

        <?php
            $values = [
                [
                    'id' => '01',
                    'title' => 'Absolute Integrity',
                    'desc' => 'Unyielding standards of transparency in global operations.',
                    'image' => 'https://images.unsplash.com/photo-1491336477066-31156b5e4f35?w=600&auto=format&fit=crop&q=60',
                    'size' => 'lg:col-span-2 lg:row-span-1',
                ],
                [
                    'id' => '02',
                    'title' => 'Industrial Innovation',
                    'desc' => 'Proprietary thinking at our core.',
                    'image' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=1200',
                    'size' => 'lg:col-span-1 lg:row-span-1',
                ],
                [
                    'id' => '03',
                    'title' => 'Sustainability',
                    'desc' => 'Zero-carbon industrial frameworks.',
                    'image' => 'https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?auto=format&fit=crop&q=80&w=1200',
                    'size' => 'lg:col-span-1 lg:row-span-1',
                ],
                [
                    'id' => '04',
                    'title' => 'Global Synergy',
                    'desc' => 'Elite partnerships for absolute impact.',
                    'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=1200',
                    'size' => 'lg:col-span-1 lg:row-span-2',
                ],
                [
                    'id' => '05',
                    'title' => 'Operational Excellence',
                    'desc' => 'Precision in every global platform.',
                    'image' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&q=80&w=1200',
                    'size' => 'lg:col-span-2 lg:row-span-1',
                ],
                [
                    'id' => '06',
                    'title' => 'Economic Empowerment',
                    'desc' => 'Resources for rapid industrial scaling.',
                    'image' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=1200',
                    'size' => 'lg:col-span-1 lg:row-span-1',
                ],
                [
                    'id' => '07',
                    'title' => 'Global Inclusivity',
                    'desc' => 'Equal opportunity across all nodes.',
                    'image' => 'https://images.unsplash.com/photo-1740065592719-052d3e5ec6fb?w=600&auto=format&fit=crop&q=60',
                    'size' => 'lg:col-span-1 lg:row-span-1',
                ],
                [
                    'id' => '08',
                    'title' => 'Visionary Leadership',
                    'desc' => 'Driving the global industrial transition.',
                    'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=1200',
                    'size' => 'lg:col-span-2 lg:row-span-1',
                ],
            ];
        ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 auto-rows-[300px]">
            <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="<?php echo e($v['size']); ?> group relative rounded-sm overflow-hidden animate-on-scroll border border-slate-900"
                    style="transition-delay: <?php echo e($idx * 100); ?>ms">
                    <!-- Background Image with Zoom -->
                    <img src="<?php echo e($v['image']); ?>" alt="<?php echo e($v['title']); ?>"
                        class="absolute inset-0 w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000">

                    <!-- Industrial Overlay -->
                    <div class="absolute inset-0 bg-slate-950/80 group-hover:bg-brand-primary/80 transition-colors duration-700"></div>

                    <!-- Content -->
                    <div class="absolute inset-0 p-10 flex flex-col justify-between z-20">
                        <div class="flex justify-between items-start">
                            <span class="text-6xl font-black text-white/10 group-hover:text-brand-accent transition-colors duration-500 italic"><?php echo e($v['id']); ?></span>
                            <div class="w-12 h-12 rounded-sm border border-white/20 flex items-center justify-center text-white backdrop-blur-sm group-hover:bg-brand-accent group-hover:border-brand-accent group-hover:text-brand-primary transition-all duration-500">
                                <i class="fa-solid fa-arrow-up-right text-xs -rotate-45 group-hover:rotate-0 transition-transform"></i>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-2xl font-black text-white uppercase tracking-tighter italic mb-3 transform group-hover:-translate-y-2 transition-transform duration-500">
                                <?php echo e($v['title']); ?>

                            </h3>
                            <p class="text-slate-400 text-xs font-bold uppercase tracking-widest leading-relaxed opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500">
                                <?php echo e($v['desc']); ?>

                            </p>
                        </div>
                    </div>

                    <!-- Sharp Accent Border -->
                    <div class="absolute bottom-0 left-0 w-0 h-1.5 bg-brand-accent group-hover:w-full transition-all duration-700"></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/home/partials/values.blade.php ENDPATH**/ ?>