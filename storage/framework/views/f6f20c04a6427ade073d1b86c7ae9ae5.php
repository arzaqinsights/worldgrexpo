

<?php $__env->startSection('title', 'Wall of Excellence'); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-6 flex justify-between items-end">
    <div>
        <h2 class="text-2xl font-black text-slate-900">Wall of Excellence</h2>
        <p class="text-sm font-bold text-slate-500 mt-1">Manage awards, letters, and recognitions from dignitaries.</p>
    </div>
    <a href="<?php echo e(route('admin.excellence.create')); ?>" class="bg-brand-primary hover:bg-brand-primary-dark text-white font-black px-6 py-3 rounded-xl transition-all shadow-lg shadow-brand-primary/20 flex items-center gap-2">
        <i class="fa-solid fa-plus"></i> Add Recognition
    </a>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200">
                    <th class="px-6 py-4 text-xs font-black text-slate-500 uppercase tracking-widest">Order</th>
                    <th class="px-6 py-4 text-xs font-black text-slate-500 uppercase tracking-widest">Award / Letter</th>
                    <th class="px-6 py-4 text-xs font-black text-slate-500 uppercase tracking-widest">Dignitary</th>
                    <th class="px-6 py-4 text-xs font-black text-slate-500 uppercase tracking-widest">Home?</th>
                    <th class="px-6 py-4 text-xs font-black text-slate-500 uppercase tracking-widest">Status</th>
                    <th class="px-6 py-4 text-xs font-black text-slate-500 uppercase tracking-widest text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <?php $__empty_1 = true; $__currentLoopData = $awards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $award): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="hover:bg-slate-50/50 transition-colors">
                    <td class="px-6 py-4">
                        <span class="bg-slate-100 text-slate-600 font-black px-2 py-1 rounded text-xs">#<?php echo e($award->order); ?></span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-12 rounded-lg border border-slate-200 overflow-hidden bg-slate-100 shadow-sm">
                                <img src="<?php echo e(asset($award->award_image)); ?>" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <p class="font-bold text-slate-900 leading-tight"><?php echo e($award->title); ?></p>
                                <p class="text-[10px] font-black text-slate-400 uppercase mt-1 tracking-widest">ID: <?php echo e($award->id); ?></p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <?php if($award->giver_image): ?>
                            <img src="<?php echo e(asset($award->giver_image)); ?>" class="w-8 h-8 rounded-full border-2 border-white shadow-sm object-cover">
                            <?php else: ?>
                            <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center text-slate-400 border border-slate-200">
                                <i class="fa-solid fa-user text-[10px]"></i>
                            </div>
                            <?php endif; ?>
                            <div>
                                <p class="text-sm font-bold text-slate-700 leading-none mb-1"><?php echo e($award->giver_name); ?></p>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter"><?php echo e($award->giver_designation); ?></p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <?php if($award->show_on_home): ?>
                        <span class="text-emerald-500 bg-emerald-50 px-2 py-1 rounded-full text-[10px] font-black uppercase">Yes</span>
                        <?php else: ?>
                        <span class="text-slate-400 bg-slate-100 px-2 py-1 rounded-full text-[10px] font-black uppercase">No</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase <?php echo e($award->status === 'published' ? 'bg-green-100 text-green-700' : 'bg-amber-100 text-amber-700'); ?>">
                            <?php echo e($award->status); ?>

                        </span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-2">
                            <a href="<?php echo e(route('admin.excellence.edit', $award)); ?>" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="<?php echo e(route('admin.excellence.destroy', $award)); ?>" method="POST" onsubmit="return confirm('Delete this record?')">
                                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="6" class="px-6 py-12 text-center text-slate-400 font-bold italic">
                        No recognitions found. Start by adding one!
                    </td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/admin/excellence/index.blade.php ENDPATH**/ ?>