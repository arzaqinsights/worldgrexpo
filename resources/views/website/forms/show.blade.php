@extends('layouts.website')

@push('meta')
    @if($form->og_title)
        <meta property="og:title" content="{{ $form->og_title }}">
        <meta name="twitter:title" content="{{ $form->og_title }}">
    @else
        <meta property="og:title" content="{{ $form->name }} | World Grexpo Foundation">
        <meta name="twitter:title" content="{{ $form->name }} | World Grexpo Foundation">
    @endif

    @if($form->og_description)
        <meta property="og:description" content="{{ $form->og_description }}">
        <meta name="twitter:description" content="{{ $form->og_description }}">
    @else
        <meta property="og:description" content="{{ $form->description }}">
        <meta name="twitter:description" content="{{ $form->description }}">
    @endif

    @if($form->og_image)
        <meta property="og:image" content="{{ asset($form->og_image) }}">
        <meta name="twitter:image" content="{{ asset($form->og_image) }}">
    @else
        @if($form->thumbnail)
            <meta property="og:image" content="{{ asset($form->thumbnail) }}">
            <meta name="twitter:image" content="{{ asset($form->thumbnail) }}">
        @endif
    @endif

    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
@endpush

@section('content')
    <!-- Force Load Razorpay if yield fails -->
    <script src="https://checkout.razorpay.com/v1/checkout.js" async
        onload="console.log('Razorpay Loaded Successfully')"></script>

    <!-- Form Header -->
    <section class="relative pt-40 pb-20 bg-slate-950 text-white overflow-hidden border-b border-slate-900">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        </div>
        @if($form->thumbnail)
            <div class="absolute inset-0 opacity-20 pointer-events-none">
                <img src="{{ asset($form->thumbnail) }}" alt="{{ $form->name }}" class="w-full h-full object-cover mix-blend-overlay">
            </div>
        @endif
        <div class="container relative z-10">
            <div class="inline-flex items-center gap-3 px-4 py-2 bg-white/5 border border-white/10 mb-8">
                <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
                <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Registration Portal</span>
            </div>
            <h1 class="text-3xl md:text-5xl font-bold text-white mb-6 leading-tight">
                {{ $form->name }}
            </h1>
            @if($form->description)
                <p class="text-lg text-slate-400 max-w-2xl leading-relaxed border-l-4 border-brand-primary pl-6">
                    {!! nl2br(e($form->description)) !!}
                </p>
            @endif
        </div>
    </section>

    <!-- Dynamic Reactive Engine -->
    <section class="py-20 bg-white relative">
        <div class="container relative z-10">
            <div class="max-w-3xl mx-auto">
                <form action="{{ route('join.forms.store', $form->slug) }}" method="POST" enctype="multipart/form-data"
                    class="bg-slate-50 p-8 md:p-12 rounded-2xl border border-slate-100 shadow-sm relative" x-data="formEngine()"
                    @submit.prevent="submitForm">
                    @csrf
                
                <div class="absolute top-0 left-0 w-1 bg-brand-accent h-full"></div>

                <!-- Standard Authentication Block -->
                <div class="pb-12 mb-12 border-b border-slate-200">
                    <h3 class="text-2xl font-bold text-slate-950 mb-8 flex items-center gap-4">
                        <i class="fa-solid fa-user-shield text-brand-primary"></i> Primary Identification
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-3">Full Name <span class="text-brand-primary ml-1">*</span></label>
                            <input type="text" name="first_name" placeholder="e.g. Indrajit Ghosh"
                                value="{{ old('first_name', auth()->check() ? auth()->user()->name : '') }}" required
                                class="w-full bg-white border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none text-slate-950 font-medium text-sm transition-all shadow-sm">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-3">Email Address <span class="text-brand-primary ml-1">*</span></label>
                            <input type="email" name="email" placeholder="e.g. info@worldgrexpo.in"
                                value="{{ old('email', auth()->check() ? auth()->user()->email : '') }}" required
                                class="w-full bg-white border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none text-slate-950 font-medium text-sm transition-all shadow-sm">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-3">Phone Number <span class="text-brand-primary ml-1">*</span></label>
                            <input type="text" name="phone_number" placeholder="e.g. 9876543210"
                                value="{{ old('phone_number', auth()->check() ? auth()->user()->phone_number : '') }}"
                                required
                                class="w-full bg-white border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none text-slate-950 font-medium text-sm transition-all shadow-sm">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-3">Company Name <span class="text-brand-primary ml-1">*</span></label>
                            <input type="text" name="company_name" placeholder="e.g. Global Industry Node"
                                value="{{ old('company_name', auth()->check() ? auth()->user()->company_name : '') }}"
                                required
                                class="w-full bg-white border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none text-slate-950 font-medium text-sm transition-all shadow-sm">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-3">Designation <span class="text-brand-primary ml-1">*</span></label>
                            <input type="text" name="designation" placeholder="e.g. Chief Strategist"
                                value="{{ old('designation', auth()->check() ? auth()->user()->designation : '') }}"
                                required
                                class="w-full bg-white border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none text-slate-950 font-medium text-sm transition-all shadow-sm">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-3">Website</label>
                            <input type="text" name="website" placeholder="e.g. www.worldgrexpo.in"
                                value="{{ old('website', auth()->check() ? auth()->user()->website : '') }}"
                                class="w-full bg-white border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none text-slate-950 font-medium text-sm transition-all shadow-sm">
                        </div>
                    </div>

                    <div class="mt-8">
                        <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-3">Full Institutional Address <span class="text-brand-primary ml-1">*</span></label>
                        <textarea name="address" rows="3" required
                            class="w-full bg-white border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none text-slate-950 font-medium text-sm transition-all shadow-sm resize-none">{{ old('address', auth()->check() ? auth()->user()->address : '') }}</textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                        <div>
                            <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-3">City <span class="text-brand-primary ml-1">*</span></label>
                            <input type="text" name="city" placeholder="e.g. New Delhi"
                                value="{{ old('city', auth()->check() ? auth()->user()->city : '') }}" required
                                class="w-full bg-white border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none text-slate-950 font-medium text-sm transition-all shadow-sm">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-3">Pin Code <span class="text-brand-primary ml-1">*</span></label>
                            <input type="text" name="pincode" placeholder="e.g. 110001"
                                value="{{ old('pincode', auth()->check() ? auth()->user()->pincode : '') }}" required
                                class="w-full bg-white border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none text-slate-950 font-medium text-sm transition-all shadow-sm">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-3">Country <span class="text-brand-primary ml-1">*</span></label>
                            <input type="text" name="country" placeholder="e.g. India"
                                value="{{ old('country', auth()->check() ? auth()->user()->country : 'India') }}" required
                                class="w-full bg-white border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none text-slate-950 font-medium text-sm transition-all shadow-sm">
                        </div>
                    </div>

                    <div class="mt-8">
                        <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-3">GSTIN Node</label>
                        <input type="text" name="gstin" placeholder="e.g. 07AAAAA0000A1Z5"
                            value="{{ old('gstin', auth()->check() ? auth()->user()->gstin : '') }}"
                            class="w-full bg-white border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none text-slate-950 font-medium text-sm transition-all shadow-sm">
                    </div>
                </div>

                <!-- Dynamic Logic Block -->
                <div class="space-y-10">
                    <template x-for="field in fields" :key="field.field_identifier">

                        <div x-show="field.type !== 'hidden_price' && isFieldVisible(field)" x-transition.opacity
                            duration.500ms>
                            <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-4">
                                <span x-text="field.label"></span>
                                <span x-show="field.is_required" class="text-brand-primary ml-1">*</span>
                            </label>

                            <!-- Text Input -->
                            <template x-if="field.type === 'text'">
                                <input type="text" :name="'dynamic_fields[' + field.field_identifier + ']'"
                                    x-model="formData[field.field_identifier]"
                                    @input="handleFieldChange(field.field_identifier)" :placeholder="field.placeholder"
                                    :required="field.is_required && isFieldVisible(field)"
                                    class="w-full bg-white border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none text-slate-950 font-medium text-sm transition-all shadow-sm">
                            </template>

                            <!-- Textarea -->
                            <template x-if="field.type === 'textarea'">
                                <textarea :name="'dynamic_fields[' + field.field_identifier + ']'"
                                    x-model="formData[field.field_identifier]"
                                    @input="handleFieldChange(field.field_identifier)" :placeholder="field.placeholder"
                                    :required="field.is_required && isFieldVisible(field)" rows="5"
                                    class="w-full bg-white border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none text-slate-950 font-medium text-sm transition-all shadow-sm resize-none"></textarea>
                            </template>

                            <!-- Dropdown / Event -->
                            <template x-if="field.type === 'dropdown' || field.type === 'event'">
                                <select :name="'dynamic_fields[' + field.field_identifier + ']'"
                                    x-model="formData[field.field_identifier]"
                                    @change="handleFieldChange(field.field_identifier)"
                                    :required="field.is_required && isFieldVisible(field)"
                                    class="w-full bg-white border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none text-slate-950 font-medium text-sm appearance-none cursor-pointer shadow-sm">
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
                                    class="w-full bg-white border border-slate-200 focus:border-brand-primary p-4 rounded-xl outline-none font-bold text-[10px] text-slate-950 transition-all cursor-pointer shadow-sm file:mr-6 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-[8px] file:font-bold file:uppercase file:tracking-widest file:bg-slate-950 file:text-white hover:file:bg-brand-accent hover:file:text-slate-950">
                            </template>

                            <!-- Number Input (Converted to Range) -->
                            <template x-if="field.type === 'number'">
                                <div class="bg-white p-8 rounded-xl border border-slate-200 shadow-sm">
                                    <div class="flex justify-between items-center mb-6">
                                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Node Intensity</span>
                                        <div class="bg-slate-950 text-brand-accent px-4 py-1.5 rounded-lg text-xs font-bold shadow-sm">
                                            <span x-text="formData[field.field_identifier] || field.options.min || 0"></span>
                                        </div>
                                    </div>
                                    <input type="range" :name="'dynamic_fields[' + field.field_identifier + ']'"
                                        x-model="formData[field.field_identifier]"
                                        @input="handleFieldChange(field.field_identifier)"
                                        :min="field.options ? field.options.min : 0"
                                        :max="field.options ? field.options.max : 100"
                                        class="w-full h-1 bg-slate-100 rounded-full appearance-none cursor-pointer accent-brand-primary">
                                    <div class="flex justify-between text-[8px] font-bold text-slate-400 uppercase tracking-widest mt-4">
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
                    class="mt-12 bg-slate-950 rounded-2xl p-8 text-white relative overflow-hidden shadow-sm">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:30px_30px]"></div>

                    <h4 class="text-[10px] font-bold uppercase tracking-[0.4em] text-brand-accent mb-8 relative z-10">Institutional Ledger</h4>

                    <div class="space-y-4 relative z-10 border-b border-white/5 pb-8 mb-8">
                        <template x-for="item in priceBreakdown" :key="item.label">
                            <div class="flex justify-between items-center text-[10px] uppercase tracking-widest font-bold">
                                <span class="text-slate-400" x-text="item.label"></span>
                                <span>₹<span x-text="item.amount.toFixed(2)"></span></span>
                            </div>
                        </template>

                        <div class="pt-4 mt-4 border-t border-white/5 flex justify-between items-center text-xs font-bold uppercase tracking-widest">
                            <span class="text-slate-400">Subtotal</span>
                            <span>₹<span x-text="subtotal.toFixed(2)"></span></span>
                        </div>
                        <div class="flex justify-between items-center text-xs font-bold uppercase tracking-widest">
                            <span class="text-slate-400">Taxes & Fees</span>
                            <span>₹<span x-text="totalTax.toFixed(2)"></span></span>
                        </div>
                    </div>

                    <div class="flex justify-between items-end relative z-10">
                        <span class="text-[10px] font-bold text-slate-500 uppercase tracking-[0.5em]">Amount Due</span>
                        <span class="text-4xl font-bold text-white tracking-tight">₹<span x-text="totalCalculated.toFixed(2)"></span></span>
                    </div>
                </div>

                <!-- Bank Details for Manual Payment -->
                <div x-show="isManualPayment" x-transition
                    class="mt-8 p-8 bg-slate-950 text-white rounded-2xl border border-slate-900 shadow-sm relative overflow-hidden">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:30px_30px]"></div>
                    <div class="relative z-10">
                        <div class="flex items-center gap-6 mb-10">
                            <div class="w-12 h-12 bg-brand-primary/20 rounded-xl flex items-center justify-center text-brand-primary">
                                <i class="fa-solid fa-building-columns text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-white uppercase tracking-tight leading-none">Bank Transfer Details</h4>
                                <p class="text-[10px] font-bold text-brand-accent uppercase tracking-widest mt-2">Complete payment via bank node</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 border-l border-white/10 pl-8">
                            <div class="space-y-1">
                                <p class="text-[8px] font-bold text-slate-500 uppercase tracking-widest">Beneficiary</p>
                                <p class="text-lg font-bold text-white uppercase tracking-tight">
                                    {{ $site['account_name'] ?? 'World Grexpo Foundation' }}</p>
                            </div>
                            <div class="space-y-1">
                                <p class="text-[8px] font-bold text-slate-500 uppercase tracking-widest">Bank</p>
                                <p class="text-lg font-bold text-white uppercase tracking-tight">{{ $site['bank_name'] ?? 'Contact Intelligence Node' }}
                                </p>
                            </div>
                            <div class="space-y-1">
                                <p class="text-[8px] font-bold text-slate-500 uppercase tracking-widest">Account Number</p>
                                <p class="text-lg font-bold text-brand-accent font-mono tracking-widest">
                                    {{ $site['account_number'] ?? 'Node Not Configured' }}</p>
                            </div>
                            <div class="space-y-1">
                                <p class="text-[8px] font-bold text-slate-500 uppercase tracking-widest">IFSC Code</p>
                                <p class="text-lg font-bold text-brand-accent font-mono tracking-widest">{{ $site['ifsc_code'] ?? 'N/A' }}</p>
                            </div>
                            @if(isset($site['swift_code']) && $site['swift_code'])
                                <div class="space-y-1">
                                    <p class="text-[8px] font-bold text-slate-500 uppercase tracking-widest">SWIFT Code</p>
                                    <p class="text-lg font-bold text-brand-accent font-mono tracking-widest">{{ $site['swift_code'] }}</p>
                                </div>
                            @endif
                        </div>

                        <div class="mt-8 p-6 bg-white/5 rounded-xl border border-white/10 flex gap-4">
                            <i class="fa-solid fa-circle-exclamation text-brand-accent text-lg"></i>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest leading-relaxed">
                                Share receipt at {{ $site['email_1'] ?? 'info@worldgrexpo.in' }} or WhatsApp +91 9810690843.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Trust Signals -->
                <div class="mt-12 pt-8 border-t border-slate-200">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-center gap-4 bg-slate-50 p-6 rounded-xl border border-slate-100 group">
                            <div class="w-12 h-12 bg-slate-200 rounded-xl flex items-center justify-center text-slate-400 group-hover:bg-brand-primary group-hover:text-white transition-all">
                                <i class="fa-solid fa-lock text-xl"></i>
                            </div>
                            <div class="text-left">
                                <span class="font-bold block text-slate-900 uppercase tracking-widest text-[10px] mb-1">Secure SSL</span>
                                <span class="text-slate-500 font-bold text-[8px] uppercase tracking-widest">256-bit Encryption</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 bg-slate-50 p-6 rounded-xl border border-slate-100 group">
                            <div class="w-12 h-12 bg-slate-200 rounded-xl flex items-center justify-center text-slate-400 group-hover:bg-emerald-500 group-hover:text-white transition-all">
                                <i class="fa-solid fa-shield-halved text-xl"></i>
                            </div>
                            <div class="text-left">
                                <span class="font-bold block text-slate-900 uppercase tracking-widest text-[10px] mb-1">Verified Portal</span>
                                <span class="text-slate-500 font-bold text-[8px] uppercase tracking-widest">Official Foundation Server</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-12 pt-8 border-t border-slate-100">
                    <input type="hidden" name="payment_method" :value="isManualPayment ? 'manual' : 'gateway'">
                    <button type="submit" :disabled="loading"
                        class="w-full bg-slate-950 hover:bg-brand-primary text-white font-bold py-6 rounded-xl transition-all shadow-lg text-sm uppercase tracking-widest flex justify-center items-center gap-4 disabled:opacity-50 disabled:cursor-wait">
                        <template x-if="loading">
                            <i class="fa-solid fa-circle-notch fa-spin"></i>
                        </template>
                        <span
                            x-text="loading ? 'Processing...' : (isManualPayment ? 'Activate Membership' : '{{ $form->submit_button_text }}')"></span>
                        <i x-show="!loading" class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform"></i>
                    </button>

                    <!-- Contact CTA -->
                    <div class="mt-10 text-center">
                        <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-6">Assistance</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <a href="https://wa.me/919810690843?text=Hi,%20I'm%20interested%20in%20the%20{{ urlencode($form->name) }}%20nomination."
                                target="_blank"
                                class="flex items-center justify-center gap-3 px-6 bg-[#25D366] hover:bg-emerald-600 text-white py-4 rounded-xl font-bold text-[10px] uppercase tracking-widest transition-all shadow-md group">
                                <i class="fa-brands fa-whatsapp text-lg group-hover:scale-110 transition-transform"></i> WhatsApp
                            </a>
                            <a href="tel:+919810690843"
                                class="flex items-center justify-center gap-3 px-6 bg-slate-100 hover:bg-slate-200 text-slate-900 py-4 rounded-xl font-bold text-[10px] uppercase tracking-widest transition-all shadow-sm group">
                                <i class="fa-solid fa-phone text-lg group-hover:scale-110 transition-transform"></i> Call Support
                            </a>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </section>

    <script>
        function formEngine() {
            const rawFields = @json($form->fields);

            return {
                fields: rawFields,
                formData: {},
                loading: false,
                gatewayLimit: {{ (float) ($site['payment_gateway_limit'] ?? 500000) }},
                forceManualPayment: {{ $form->force_manual_payment ? 'true' : 'false' }},

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
                            const verifyUrl = "{{ route('payment.verify') }}";
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
@endsection
