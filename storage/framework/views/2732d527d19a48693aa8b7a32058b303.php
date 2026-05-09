

<?php $__env->startPush('meta'); ?>
    <?php if($form->og_title): ?>
        <meta property="og:title" content="<?php echo e($form->og_title); ?>">
        <meta name="twitter:title" content="<?php echo e($form->og_title); ?>">
    <?php else: ?>
        <meta property="og:title" content="<?php echo e($form->name); ?> | World Grexpo Foundation">
        <meta name="twitter:title" content="<?php echo e($form->name); ?> | World Grexpo Foundation">
    <?php endif; ?>

    <?php if($form->og_description): ?>
        <meta property="og:description" content="<?php echo e($form->og_description); ?>">
        <meta name="twitter:description" content="<?php echo e($form->og_description); ?>">
    <?php else: ?>
        <meta property="og:description" content="<?php echo e($form->description); ?>">
        <meta name="twitter:description" content="<?php echo e($form->description); ?>">
    <?php endif; ?>

    <?php if($form->og_image): ?>
        <meta property="og:image" content="<?php echo e(asset($form->og_image)); ?>">
        <meta name="twitter:image" content="<?php echo e(asset($form->og_image)); ?>">
    <?php else: ?>
        <?php if($form->thumbnail): ?>
            <meta property="og:image" content="<?php echo e(asset($form->thumbnail)); ?>">
            <meta name="twitter:image" content="<?php echo e(asset($form->thumbnail)); ?>">
        <?php endif; ?>
    <?php endif; ?>

    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Force Load Razorpay if yield fails -->
    <script src="https://checkout.razorpay.com/v1/checkout.js" async
        onload="console.log('Razorpay Loaded Successfully')"></script>

    <!-- Form Header -->
    <section class="relative pt-48 pb-24 bg-slate-950 text-white overflow-hidden border-b border-slate-900">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
        </div>
        <?php if($form->thumbnail): ?>
            <div class="absolute inset-0 opacity-20 grayscale pointer-events-none">
                <img src="<?php echo e(asset($form->thumbnail)); ?>" alt="<?php echo e($form->name); ?>" class="w-full h-full object-cover mix-blend-overlay">
            </div>
        <?php endif; ?>
        <div class="container relative z-10 text-left">
            <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Institutional Activation Node</span>
            </div>
            <h1 class="text-6xl md:text-8xl font-black text-white mb-8 tracking-tighter uppercase italic leading-[0.85]">
                <?php echo e($form->name); ?>

            </h1>
            <?php if($form->description): ?>
                <p class="text-2xl text-slate-400 font-light italic max-w-4xl leading-relaxed border-l-2 border-slate-800 pl-8">
                    <?php echo nl2br(e($form->description)); ?>

                </p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Dynamic Reactive Engine -->
    <section class="py-32 bg-white relative">
        <div class="container relative z-10 max-w-5xl">

            <form action="<?php echo e(route('join.forms.store', $form->slug)); ?>" method="POST" enctype="multipart/form-data"
                class="bg-slate-50 p-12 md:p-24 rounded-sm border border-slate-100 shadow-4xl relative" x-data="formEngine()"
                @submit.prevent="submitForm">
                <?php echo csrf_field(); ?>
                
                <div class="absolute top-0 left-0 w-1 bg-brand-accent h-full"></div>

                <!-- Standard Authentication Block -->
                <div class="pb-16 mb-16 border-b border-slate-200">
                    <h3 class="text-3xl font-black text-slate-950 mb-12 uppercase italic tracking-tighter flex items-center gap-6">
                        <i class="fa-solid fa-user-shield text-brand-primary"></i> Primary Identification
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div>
                            <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-4 italic">Full Name <span class="text-brand-primary ml-1">*</span></label>
                            <input type="text" name="first_name" placeholder="e.g. Indrajit Ghosh"
                                value="<?php echo e(old('first_name', auth()->check() ? auth()->user()->name : '')); ?>" required
                                class="w-full bg-white border border-slate-200 rounded-sm p-6 focus:border-brand-primary outline-none text-slate-950 font-black italic uppercase text-xs transition-all shadow-sm">
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-4 italic">Email Address <span class="text-brand-primary ml-1">*</span></label>
                            <input type="email" name="email" placeholder="e.g. info@worldgrexpo.in"
                                value="<?php echo e(old('email', auth()->check() ? auth()->user()->email : '')); ?>" required
                                class="w-full bg-white border border-slate-200 rounded-sm p-6 focus:border-brand-primary outline-none text-slate-950 font-black italic uppercase text-xs transition-all shadow-sm">
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-4 italic">Phone Number <span class="text-brand-primary ml-1">*</span></label>
                            <input type="text" name="phone_number" placeholder="e.g. 9876543210"
                                value="<?php echo e(old('phone_number', auth()->check() ? auth()->user()->phone_number : '')); ?>"
                                required
                                class="w-full bg-white border border-slate-200 rounded-sm p-6 focus:border-brand-primary outline-none text-slate-950 font-black italic uppercase text-xs transition-all shadow-sm">
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-4 italic">Company Name <span class="text-brand-primary ml-1">*</span></label>
                            <input type="text" name="company_name" placeholder="e.g. Global Industry Node"
                                value="<?php echo e(old('company_name', auth()->check() ? auth()->user()->company_name : '')); ?>"
                                required
                                class="w-full bg-white border border-slate-200 rounded-sm p-6 focus:border-brand-primary outline-none text-slate-950 font-black italic uppercase text-xs transition-all shadow-sm">
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-4 italic">Designation <span class="text-brand-primary ml-1">*</span></label>
                            <input type="text" name="designation" placeholder="e.g. Chief Strategist"
                                value="<?php echo e(old('designation', auth()->check() ? auth()->user()->designation : '')); ?>"
                                required
                                class="w-full bg-white border border-slate-200 rounded-sm p-6 focus:border-brand-primary outline-none text-slate-950 font-black italic uppercase text-xs transition-all shadow-sm">
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-4 italic">Website</label>
                            <input type="text" name="website" placeholder="e.g. www.worldgrexpo.in"
                                value="<?php echo e(old('website', auth()->check() ? auth()->user()->website : '')); ?>"
                                class="w-full bg-white border border-slate-200 rounded-sm p-6 focus:border-brand-primary outline-none text-slate-950 font-black italic uppercase text-xs transition-all shadow-sm">
                        </div>
                    </div>

                    <div class="mt-10">
                        <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-4 italic">Full Institutional Address <span class="text-brand-primary ml-1">*</span></label>
                        <textarea name="address" rows="3" required
                            class="w-full bg-white border border-slate-200 rounded-sm p-6 focus:border-brand-primary outline-none text-slate-950 font-medium italic uppercase text-xs transition-all shadow-sm resize-none"><?php echo e(old('address', auth()->check() ? auth()->user()->address : '')); ?></textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10">
                        <div>
                            <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-4 italic">City <span class="text-brand-primary ml-1">*</span></label>
                            <input type="text" name="city" placeholder="e.g. New Delhi"
                                value="<?php echo e(old('city', auth()->check() ? auth()->user()->city : '')); ?>" required
                                class="w-full bg-white border border-slate-200 rounded-sm p-6 focus:border-brand-primary outline-none text-slate-950 font-black italic uppercase text-xs transition-all shadow-sm">
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-4 italic">Pin Code <span class="text-brand-primary ml-1">*</span></label>
                            <input type="text" name="pincode" placeholder="e.g. 110001"
                                value="<?php echo e(old('pincode', auth()->check() ? auth()->user()->pincode : '')); ?>" required
                                class="w-full bg-white border border-slate-200 rounded-sm p-6 focus:border-brand-primary outline-none text-slate-950 font-black italic uppercase text-xs transition-all shadow-sm">
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-4 italic">Country <span class="text-brand-primary ml-1">*</span></label>
                            <input type="text" name="country" placeholder="e.g. India"
                                value="<?php echo e(old('country', auth()->check() ? auth()->user()->country : 'India')); ?>" required
                                class="w-full bg-white border border-slate-200 rounded-sm p-6 focus:border-brand-primary outline-none text-slate-950 font-black italic uppercase text-xs transition-all shadow-sm">
                        </div>
                    </div>

                    <div class="mt-10">
                        <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-4 italic">GSTIN Node</label>
                        <input type="text" name="gstin" placeholder="e.g. 07AAAAA0000A1Z5"
                            value="<?php echo e(old('gstin', auth()->check() ? auth()->user()->gstin : '')); ?>"
                            class="w-full bg-white border border-slate-200 rounded-sm p-6 focus:border-brand-primary outline-none text-slate-950 font-black italic uppercase text-xs transition-all shadow-sm">
                    </div>
                </div>

                <!-- Dynamic Logic Block -->
                <div class="space-y-12">
                    <template x-for="field in fields" :key="field.field_identifier">

                        <div x-show="field.type !== 'hidden_price' && isFieldVisible(field)" x-transition.opacity
                            duration.500ms>
                            <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-6 italic">
                                <span x-text="field.label"></span>
                                <span x-show="field.is_required" class="text-brand-primary ml-1">*</span>
                            </label>

                            <!-- Text Input -->
                            <template x-if="field.type === 'text'">
                                <input type="text" :name="'dynamic_fields[' + field.field_identifier + ']'"
                                    x-model="formData[field.field_identifier]"
                                    @input="handleFieldChange(field.field_identifier)" :placeholder="field.placeholder"
                                    :required="field.is_required && isFieldVisible(field)"
                                    class="w-full bg-white border border-slate-200 rounded-sm p-6 focus:border-brand-primary outline-none text-slate-950 font-black italic uppercase text-xs transition-all shadow-sm">
                            </template>

                            <!-- Textarea -->
                            <template x-if="field.type === 'textarea'">
                                <textarea :name="'dynamic_fields[' + field.field_identifier + ']'"
                                    x-model="formData[field.field_identifier]"
                                    @input="handleFieldChange(field.field_identifier)" :placeholder="field.placeholder"
                                    :required="field.is_required && isFieldVisible(field)" rows="5"
                                    class="w-full bg-white border border-slate-200 rounded-sm p-6 focus:border-brand-primary outline-none text-slate-950 font-medium italic uppercase text-xs transition-all shadow-sm resize-none"></textarea>
                            </template>

                            <!-- Dropdown / Event -->
                            <template x-if="field.type === 'dropdown' || field.type === 'event'">
                                <select :name="'dynamic_fields[' + field.field_identifier + ']'"
                                    x-model="formData[field.field_identifier]"
                                    @change="handleFieldChange(field.field_identifier)"
                                    :required="field.is_required && isFieldVisible(field)"
                                    class="w-full bg-white border border-slate-200 rounded-sm p-6 focus:border-brand-primary outline-none text-slate-950 font-black italic uppercase text-xs appearance-none cursor-pointer shadow-sm">
                                    <option value="" disabled selected>-- Select Industrial Node --</option>
                                    <template x-for="option in getFieldOptions(field)" :key="option.label">
                                        <option :value="option.label" x-text="option.label"></option>
                                    </template>
                                </select>
                            </template>

                            <!-- File Input -->
                            <template x-if="field.type === 'file'">
                                <input type="file" :name="'dynamic_fields[' + field.field_identifier + ']'"
                                    :required="field.is_required && isFieldVisible(field)"
                                    class="w-full bg-white border border-slate-200 focus:border-brand-primary p-6 rounded-sm outline-none font-black italic uppercase text-[10px] text-slate-950 transition-all cursor-pointer shadow-sm file:mr-8 file:py-2 file:px-6 file:rounded-sm file:border-0 file:text-[8px] file:font-black file:uppercase file:tracking-widest file:bg-slate-950 file:text-white hover:file:bg-brand-accent hover:file:text-slate-950">
                            </template>

                            <!-- Number Input (Converted to Range) -->
                            <template x-if="field.type === 'number'">
                                <div class="bg-white p-10 rounded-sm border border-slate-200 shadow-sm">
                                    <div class="flex justify-between items-center mb-8">
                                        <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest italic">Node Intensity</span>
                                        <div class="bg-slate-950 text-brand-accent px-6 py-2 rounded-sm text-xs font-black italic shadow-2xl">
                                            <span x-text="formData[field.field_identifier] || field.options.min || 0"></span>
                                        </div>
                                    </div>
                                    <input type="range" :name="'dynamic_fields[' + field.field_identifier + ']'"
                                        x-model="formData[field.field_identifier]"
                                        @input="handleFieldChange(field.field_identifier)"
                                        :min="field.options ? field.options.min : 0"
                                        :max="field.options ? field.options.max : 100"
                                        class="w-full h-1 bg-slate-100 rounded-sm appearance-none cursor-pointer accent-brand-primary">
                                    <div class="flex justify-between text-[8px] font-black text-slate-400 uppercase tracking-widest mt-6 italic">
                                        <span x-text="'Min Node: ' + (field.options ? field.options.min : 0)"></span>
                                        <span x-text="'Max Node: ' + (field.options ? field.options.max : 100)"></span>
                                    </div>
                                </div>
                            </template>

                        </div>

                    </template>
                </div>

                <!-- Pre-Checkout Injector (Monetization Engine) -->
                <div x-show="totalCalculated > 0" x-transition
                    class="mt-16 bg-slate-950 rounded-sm p-12 text-white relative overflow-hidden shadow-4xl">
                    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:20px_20px]"></div>

                    <h4 class="text-[10px] font-black uppercase tracking-[0.4em] text-brand-accent mb-10 relative z-10 italic">Institutional Ledger Node</h4>

                    <div class="space-y-4 relative z-10 border-b border-white/5 pb-10 mb-10">
                        <template x-for="item in priceBreakdown" :key="item.label">
                            <div class="flex justify-between items-center text-[10px] uppercase tracking-widest italic font-black">
                                <span class="text-slate-400" x-text="item.label"></span>
                                <span>₹<span x-text="item.amount.toFixed(2)"></span></span>
                            </div>
                        </template>

                        <div class="pt-6 mt-6 border-t border-white/5 flex justify-between items-center text-xs font-black uppercase tracking-widest italic">
                            <span class="text-slate-400">Total Subtotal</span>
                            <span>₹<span x-text="subtotal.toFixed(2)"></span></span>
                        </div>
                        <div class="flex justify-between items-center text-xs font-black uppercase tracking-widest italic">
                            <span class="text-slate-400">Taxes & Processing Nodes</span>
                            <span>₹<span x-text="totalTax.toFixed(2)"></span></span>
                        </div>
                    </div>

                    <div class="flex justify-between items-end relative z-10">
                        <span class="text-[10px] font-black text-slate-500 uppercase tracking-[0.5em] italic">Absolute Amount Due</span>
                        <span class="text-5xl font-black text-white italic tracking-tighter uppercase">₹<span x-text="totalCalculated.toFixed(2)"></span></span>
                    </div>
                </div>

                <!-- Bank Details for Manual Payment -->
                <div x-show="isManualPayment" x-transition
                    class="mt-12 p-12 bg-slate-950 text-white rounded-sm border border-slate-900 shadow-4xl relative overflow-hidden">
                    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:20px_20px]"></div>
                    <div class="relative z-10">
                        <div class="flex items-center gap-6 mb-12">
                            <div class="w-16 h-16 bg-brand-accent rounded-sm flex items-center justify-center text-slate-950 shadow-2xl">
                                <i class="fa-solid fa-building-columns text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-black text-white uppercase italic tracking-tighter leading-none">Manual Grid Transfer Node</h4>
                                <p class="text-[10px] font-black text-brand-accent uppercase tracking-widest italic mt-2">Complete industrial transition via bank node</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-10 border-l border-white/5 pl-12">
                            <div class="space-y-2">
                                <p class="text-[8px] font-black text-slate-500 uppercase tracking-[0.3em] italic">Beneficiary Node</p>
                                <p class="text-xl font-black text-white italic uppercase tracking-tighter">
                                    <?php echo e($site['account_name'] ?? 'World Grexpo Foundation'); ?></p>
                            </div>
                            <div class="space-y-2">
                                <p class="text-[8px] font-black text-slate-500 uppercase tracking-[0.3em] italic">Banking Grid</p>
                                <p class="text-xl font-black text-white italic uppercase tracking-tighter"><?php echo e($site['bank_name'] ?? 'Contact Intelligence Node'); ?>

                                </p>
                            </div>
                            <div class="space-y-2">
                                <p class="text-[8px] font-black text-slate-500 uppercase tracking-[0.3em] italic">Account Index</p>
                                <p class="text-xl font-black text-brand-accent font-mono tracking-widest italic">
                                    <?php echo e($site['account_number'] ?? 'Node Not Configured'); ?></p>
                            </div>
                            <div class="space-y-2">
                                <p class="text-[8px] font-black text-slate-500 uppercase tracking-[0.3em] italic">IFSC Node (Domestic)</p>
                                <p class="text-xl font-black text-brand-accent font-mono tracking-widest italic"><?php echo e($site['ifsc_code'] ?? 'N/A'); ?></p>
                            </div>
                            <?php if(isset($site['swift_code']) && $site['swift_code']): ?>
                                <div class="space-y-2">
                                    <p class="text-[8px] font-black text-slate-500 uppercase tracking-[0.3em] italic">SWIFT Node (Global)</p>
                                    <p class="text-xl font-black text-brand-accent font-mono tracking-widest italic"><?php echo e($site['swift_code']); ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if(isset($site['bank_branch']) && $site['bank_branch']): ?>
                                <div class="space-y-2 md:col-span-2">
                                    <p class="text-[8px] font-black text-slate-500 uppercase tracking-[0.3em] italic">Branch Node Address</p>
                                    <p class="text-sm font-black text-slate-400 italic uppercase leading-relaxed"><?php echo e($site['bank_branch']); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="mt-12 p-8 bg-white/5 rounded-sm border border-white/10 flex gap-6 italic">
                            <i class="fa-solid fa-circle-exclamation text-brand-accent text-xl mt-1"></i>
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-loose">
                                Post transition, distribute receipt intelligence to <?php echo e($site['email_1'] ??
                                'info@worldgrexpo.in'); ?> or WhatsApp Node +91 9810690843 for validation.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Trust Signals -->
                <div class="mt-16 pt-12 border-t border-slate-200">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-center gap-6 bg-slate-950 p-8 rounded-sm border border-slate-900 group">
                            <div class="w-16 h-16 bg-brand-accent/20 rounded-sm flex items-center justify-center text-brand-accent group-hover:bg-brand-accent group-hover:text-slate-950 transition-all duration-700">
                                <i class="fa-solid fa-lock text-2xl"></i>
                            </div>
                            <div class="text-left">
                                <span class="font-black block text-white uppercase italic tracking-[0.3em] text-[10px] mb-1">Secure Activation Node</span>
                                <span class="text-slate-500 font-black text-[8px] uppercase tracking-widest italic">256-bit SSL Encrypted Grid</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-6 bg-slate-950 p-8 rounded-sm border border-slate-900 group">
                            <div class="w-16 h-16 bg-emerald-500/20 rounded-sm flex items-center justify-center text-emerald-500 group-hover:bg-emerald-500 group-hover:text-white transition-all duration-700">
                                <i class="fa-solid fa-shield-halved text-2xl"></i>
                            </div>
                            <div class="text-left">
                                <span class="font-black block text-white uppercase italic tracking-[0.3em] text-[10px] mb-1">Verified Portal Grid</span>
                                <span class="text-slate-500 font-black text-[8px] uppercase tracking-widest italic">Official Foundation Intelligence Server</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-16 pt-12 border-t border-slate-100">
                    <input type="hidden" name="payment_method" :value="isManualPayment ? 'manual' : 'gateway'">
                    <button type="submit" :disabled="loading"
                        class="w-full bg-slate-950 hover:bg-brand-accent text-white hover:text-slate-950 font-black py-10 rounded-sm transition-all duration-700 shadow-4xl text-xs uppercase tracking-[0.4em] italic flex justify-center items-center gap-6 disabled:opacity-50 disabled:cursor-wait">
                        <template x-if="loading">
                            <i class="fa-solid fa-circle-notch fa-spin"></i>
                        </template>
                        <span
                            x-text="loading ? 'Processing Intelligence...' : (isManualPayment ? 'Activate Institutional Node' : '<?php echo e($form->submit_button_text); ?>')"></span>
                        <i x-show="!loading" class="fa-solid fa-arrow-right-long text-sm group-hover:translate-x-4 transition-transform"></i>
                    </button>

                    <!-- Contact CTA -->
                    <div class="mt-12 text-center">
                        <p class="text-[10px] font-black uppercase tracking-[0.5em] text-slate-400 mb-8 italic">Intelligence Assistance Nodes</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <a href="https://wa.me/919810690843?text=Hi,%20I'm%20interested%20in%20the%20<?php echo e(urlencode($form->name)); ?>%20nomination."
                                target="_blank"
                                class="flex items-center justify-center gap-4 px-8 bg-[#25D366] hover:bg-slate-950 text-white py-6 rounded-sm font-black text-[10px] uppercase tracking-[0.3em] transition-all italic shadow-4xl group/wa">
                                <i class="fa-brands fa-whatsapp text-xl group-hover/wa:scale-125 transition-transform"></i> Apply via Node
                            </a>
                            <a href="tel:+919810690843"
                                class="flex items-center justify-center gap-4 px-8 bg-slate-950 hover:bg-brand-accent text-white hover:text-slate-950 py-6 rounded-sm font-black text-[10px] uppercase tracking-[0.3em] transition-all italic shadow-4xl group/call">
                                <i class="fa-solid fa-phone text-xl group-hover/call:scale-125 transition-transform"></i> Direct Intelligence
                            </a>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </section>

    <script>
        function formEngine() {
            const rawFields = <?php echo json_encode($form->fields, 15, 512) ?>;

            return {
                fields: rawFields,
                formData: {},
                loading: false,
                gatewayLimit: <?php echo e((float) ($site['payment_gateway_limit'] ?? 500000)); ?>,
                forceManualPayment: <?php echo e($form->force_manual_payment ? 'true' : 'false'); ?>,

                get isManualPayment() {
                    if (this.forceManualPayment) return true;
                    return this.totalCalculated > this.gatewayLimit;
                },

                init() {
                    // Initialize default form data paths to allow reactive tracking
                    this.fields.forEach(f => {
                        this.formData[f.field_identifier] = f.type === 'number' && f.options && f.options.min ? f.options.min : '';
                    });

                    // Emergency Loader for Razorpay
                    if (typeof Razorpay === 'undefined') {
                        console.warn('Razorpay undefined on init, attempting dynamic injection...');
                        let script = document.createElement('script');
                        script.src = 'https://checkout.razorpay.com/v1/checkout.js';
                        document.head.appendChild(script);
                    }
                },

                handleFieldChange(fieldId) {
                    // Find all fields that depend on this changed field
                    this.fields.forEach(f => {
                        if (f.depends_on === fieldId) {
                            // Reset child value
                            this.formData[f.field_identifier] = '';
                            // Recursively reset grandchildren
                            this.handleFieldChange(f.field_identifier);
                        }
                    });
                },

                // Dependency Logic 
                isFieldVisible(field) {
                    if (!field.depends_on) {
                        return true;
                    }

                    const parentValue = this.formData[field.depends_on];
                    if (parentValue === undefined || parentValue === null || parentValue === '') {
                        return false;
                    }

                    // Mapped Options Dependency Type (Child options change dynamically)
                    if (field.depends_on_value === '__MAPPED__') {
                        if (typeof field.options === 'object' && field.options !== null) {
                            return (field.options[parentValue] && field.options[parentValue].length > 0);
                        }
                        return false;
                    }

                    if (field.depends_on_value && field.depends_on_value.trim() !== '') {
                        return parentValue.toString().trim() === field.depends_on_value.trim();
                    }

                    return true;
                },

                // Dynamic Options Resolver
                getFieldOptions(field) {
                    if (field.depends_on_value === '__MAPPED__' && typeof field.options === 'object' && field.options !== null) {
                        const parentValue = this.formData[field.depends_on];
                        if (parentValue && field.options[parentValue]) {
                            let opts = field.options[parentValue];
                            if (typeof opts === 'object' && !Array.isArray(opts)) opts = Object.values(opts);
                            return opts.map(o => typeof o === 'string' ? { label: o, price: 0, tax: 0 } : o);
                        }
                        return [];
                    }

                    let opts = field.options;

                    // If it was stored as a JSON string, parse it
                    if (typeof opts === 'string') {
                        try {
                            opts = JSON.parse(opts);
                        } catch (e) {
                            if (opts.trim() !== '') {
                                opts = opts.split(',').map(s => s.trim());
                            } else {
                                opts = [];
                            }
                        }
                    }

                    // If it became an object (e.g. {0: {label:...}}), convert to array
                    if (typeof opts === 'object' && opts !== null && !Array.isArray(opts)) {
                        opts = Object.values(opts);
                    }

                    if (Array.isArray(opts)) {
                        return opts.map(o => typeof o === 'string' ? { label: o, price: 0, tax: 0 } : o);
                    }
                    return [];
                },

                // Financial Engine
                get subtotal() {
                    let total = 0;
                    this.fields.forEach(f => {
                        if (this.isFieldVisible(f)) {
                            if ((f.type === 'dropdown' || f.type === 'event') && this.formData[f.field_identifier] !== '') {
                                const opts = this.getFieldOptions(f);
                                const selected = opts.find(o => o.label === this.formData[f.field_identifier]);
                                if (selected && selected.price) total += parseFloat(selected.price);
                            } else if (f.type === 'hidden_price' || this.formData[f.field_identifier] !== '') {
                                if (f.base_amount && parseFloat(f.base_amount) > 0) {
                                    if (f.type === 'number') {
                                        total += parseFloat(this.formData[f.field_identifier] || 0) * parseFloat(f.base_amount);
                                    } else {
                                        total += parseFloat(f.base_amount);
                                    }
                                }
                            }
                        }
                    });
                    return total;
                },

                get totalTax() {
                    let tax = 0;
                    this.fields.forEach(f => {
                        if (this.isFieldVisible(f)) {
                            if ((f.type === 'dropdown' || f.type === 'event') && this.formData[f.field_identifier] !== '') {
                                const opts = this.getFieldOptions(f);
                                const selected = opts.find(o => o.label === this.formData[f.field_identifier]);
                                if (selected && selected.price && selected.tax) {
                                    tax += parseFloat(selected.price) * (parseFloat(selected.tax) / 100);
                                }
                            } else if (f.type === 'hidden_price' || this.formData[f.field_identifier] !== '') {
                                if (f.base_amount && parseFloat(f.base_amount) > 0 && f.tax_percentage && parseFloat(f.tax_percentage) > 0) {
                                    if (f.type === 'number') {
                                        tax += (parseFloat(this.formData[f.field_identifier] || 0) * parseFloat(f.base_amount)) * (parseFloat(f.tax_percentage) / 100);
                                    } else {
                                        tax += parseFloat(f.base_amount) * (parseFloat(f.tax_percentage) / 100);
                                    }
                                }
                            }
                        }
                    });
                    return tax;
                },

                get totalCalculated() {
                    return this.subtotal + this.totalTax;
                },

                get priceBreakdown() {
                    let breakdown = [];
                    this.fields.forEach(f => {
                        if (this.isFieldVisible(f)) {
                            let amount = 0;
                            let label = f.label;

                            if ((f.type === 'dropdown' || f.type === 'event') && this.formData[f.field_identifier] !== '') {
                                const opts = this.getFieldOptions(f);
                                const selected = opts.find(o => o.label === this.formData[f.field_identifier]);
                                if (selected && selected.price) {
                                    amount = parseFloat(selected.price);
                                    label = `${f.label}: ${selected.label}`;
                                }
                            } else if (f.type === 'hidden_price' || this.formData[f.field_identifier] !== '') {
                                if (f.base_amount && parseFloat(f.base_amount) > 0) {
                                    if (f.type === 'number') {
                                        const qty = parseFloat(this.formData[f.field_identifier] || 0);
                                        amount = qty * parseFloat(f.base_amount);
                                        label = `${f.label} (${qty} units)`;
                                    } else {
                                        amount = parseFloat(f.base_amount);
                                    }
                                }
                            }

                            if (amount > 0) {
                                breakdown.push({ label: label, amount: amount });
                            }
                        }
                    });
                    return breakdown;
                },

                async submitForm(e) {
                    if (this.totalCalculated > 0 && typeof Razorpay === 'undefined') {
                        alert('Activation node failure: Gateway intelligence failed to load. Please refresh Node.');
                        return;
                    }
                    this.loading = true;
                    const formData = new FormData(e.target);

                    try {
                        const response = await fetch(e.target.action, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        });

                        const result = await response.json();

                        if (!result.success) {
                            alert(result.message || 'Transition node failure.');
                            this.loading = false;
                            return;
                        }

                        if (result.is_test) {
                            // Environment is LOCAL and keys are missing - Simulate success
                            alert('✨ Intelligence Test Node: ' + result.message);
                            window.location.href = result.redirect;
                            return;
                        }

                        if (result.is_paid) {
                            this.payWithRazorpay(result);
                        } else {
                            window.location.href = result.redirect;
                        }

                    } catch (error) {
                        console.error(error);
                        alert('Critical intelligence failure. Re-initialize Node.');
                        this.loading = false;
                    }
                },

                payWithRazorpay(data) {
                    const options = {
                        key: data.key,
                        amount: data.amount,
                        currency: "INR",
                        name: data.name,
                        description: data.description,
                        order_id: data.order_id,
                        handler: async function (response) {
                            // Dynamically build verification URL
                            const verifyUrl = "<?php echo e(route('payment.verify')); ?>";
                            const params = new URLSearchParams({
                                razorpay_order_id: response.razorpay_order_id,
                                razorpay_payment_id: response.razorpay_payment_id,
                                razorpay_signature: response.razorpay_signature
                            });

                            window.location.href = `${verifyUrl}?${params.toString()}`;
                        },
                        prefill: {
                            name: data.user.name,
                            email: data.user.email,
                            contact: data.user.contact
                        },
                        theme: {
                            color: "#0f172a"
                        }
                    };
                    const rzp1 = new Razorpay(options);
                    rzp1.on('payment.failed', function (response) {
                        alert("Activation Node Failed: " + response.error.description);
                    });
                    rzp1.open();
                    this.loading = false;
                }
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/forms/show.blade.php ENDPATH**/ ?>