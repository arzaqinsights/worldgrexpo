

<?php $__env->startSection('title', 'System Overview'); ?>

<?php $__env->startSection('content'); ?>

    <!-- High-Impact Live Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

        <!-- Stat: Settings -->
        <div class="bg-slate-950 p-10 rounded-sm border-l-4 border-brand-accent relative overflow-hidden group shadow-2xl">
            <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 -skew-x-12 translate-x-1/2 -translate-y-1/2 group-hover:bg-brand-accent/20 transition-colors duration-1000"></div>
            <div class="flex justify-between items-start mb-6 relative z-10">
                <p class="text-[10px] font-black text-slate-500 uppercase tracking-[0.4em]">Site Settings</p>
                <div class="w-10 h-10 bg-white/5 text-brand-accent flex items-center justify-center rounded-sm">
                    <i class="fa-solid fa-sliders text-sm"></i>
                </div>
            </div>
            <h3 class="text-6xl font-black text-white italic tracking-tighter relative z-10 leading-none">
                <?php echo e($stats['settings']); ?>

            </h3>
            <p class="text-[9px] font-black text-brand-accent mt-6 uppercase tracking-widest flex items-center gap-2 relative z-10">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-pulse"></span>
                Active Registry Keys
            </p>
        </div>

        <!-- Stat: Forms -->
        <div class="bg-white p-10 rounded-sm border border-slate-200 relative overflow-hidden group shadow-xl">
            <div class="absolute top-0 right-0 w-32 h-32 bg-slate-50 -skew-x-12 translate-x-1/2 -translate-y-1/2 group-hover:bg-brand-accent/5 transition-colors duration-1000"></div>
            <div class="flex justify-between items-start mb-6 relative z-10">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em]">Inbound Funnels</p>
                <div class="w-10 h-10 bg-slate-950 text-brand-accent flex items-center justify-center rounded-sm">
                    <i class="fa-solid fa-list-check text-sm"></i>
                </div>
            </div>
            <h3 class="text-6xl font-black text-slate-950 italic tracking-tighter relative z-10 leading-none">
                <?php echo e($stats['forms']); ?>

            </h3>
            <p class="text-[9px] font-black text-slate-400 mt-6 uppercase tracking-widest flex items-center gap-2 relative z-10">
                Total Live Endpoints
            </p>
        </div>

        <!-- Stat: Events -->
        <div class="bg-slate-950 p-10 rounded-sm border-l-4 border-brand-accent relative overflow-hidden group shadow-2xl">
            <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 -skew-x-12 translate-x-1/2 -translate-y-1/2 group-hover:bg-brand-accent/20 transition-colors duration-1000"></div>
            <div class="flex justify-between items-start mb-6 relative z-10">
                <p class="text-[10px] font-black text-slate-500 uppercase tracking-[0.4em]">Event Registry</p>
                <div class="w-10 h-10 bg-white/5 text-brand-accent flex items-center justify-center rounded-sm">
                    <i class="fa-regular fa-calendar-check text-sm"></i>
                </div>
            </div>
            <h3 class="text-6xl font-black text-white italic tracking-tighter relative z-10 leading-none">
                <?php echo e($stats['events']); ?>

            </h3>
            <p class="text-[9px] font-black text-brand-accent mt-6 uppercase tracking-widest flex items-center gap-2 relative z-10">
                Published Summits
            </p>
        </div>

        <!-- Stat: Users -->
        <div class="bg-white p-10 rounded-sm border border-slate-200 relative overflow-hidden group shadow-xl">
            <div class="absolute top-0 right-0 w-32 h-32 bg-slate-50 -skew-x-12 translate-x-1/2 -translate-y-1/2 group-hover:bg-brand-accent/5 transition-colors duration-1000"></div>
            <div class="flex justify-between items-start mb-6 relative z-10">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em]">Network Nodes</p>
                <div class="w-10 h-10 bg-slate-950 text-brand-accent flex items-center justify-center rounded-sm">
                    <i class="fa-solid fa-database text-sm"></i>
                </div>
            </div>
            <h3 class="text-6xl font-black text-slate-950 italic tracking-tighter relative z-10 leading-none">
                <?php echo e($stats['users']); ?>

            </h3>
            <p class="text-[9px] font-black text-slate-400 mt-6 uppercase tracking-widest flex items-center gap-2 relative z-10">
                Institutional CRM
            </p>
        </div>

    </div>

    <!-- Live Google Analytics Data -->
    <?php if($gaId && config('analytics.property_id')): ?>
        <?php if($analyticsError): ?>
        <!-- Configuration Issue Block -->
        <div class="bg-red-600 p-10 rounded-sm border-l-4 border-red-950 mt-10 shadow-2xl">
            <h4 class="text-lg font-black text-white uppercase tracking-widest italic flex items-center gap-4">
                <i class="fa-solid fa-triangle-exclamation"></i> Analytics Connection Terminated
            </h4>
            <p class="text-sm text-white/80 mt-4 font-light leading-relaxed"><?php echo e(explode('(', $analyticsError)[0]); ?></p>
            <div class="mt-8 bg-black/20 p-6 border border-white/10 rounded-sm text-[11px] font-mono text-red-100">
                1. Place your <b>Service Account JSON</b> file anywhere on the server and add its path to your <code>.env</code> file:<br>
                   <span class="text-brand-accent font-black ml-4">ANALYTICS_CREDENTIALS_PATH="C:/absolute/path/to/credentials.json"</span><br>
                2. Ensure that the Service Account email has "Viewer" permission on Analytics property <code><?php echo e(config('analytics.property_id')); ?></code>.
            </div>
        </div>
        <?php elseif($analyticsData && $analyticsData->count() > 0): ?>
        <!-- Live Setup Connected -->
        <div class="bg-white rounded-sm border border-slate-200 mt-10 overflow-hidden shadow-2xl">
            
            <!-- Dashboard Header -->
            <div class="px-10 py-8 border-b border-slate-100 flex items-center justify-between bg-slate-50">
                <div class="flex items-center gap-6">
                    <div class="w-12 h-12 bg-slate-950 flex items-center justify-center rounded-sm text-brand-accent shadow-lg shadow-slate-900/20">
                        <i class="fa-solid fa-chart-line text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-black text-slate-950 uppercase tracking-tighter italic flex items-center gap-4">
                            Live Intelligence
                            <?php if(isset($activeUsersCount) && $activeUsersCount > 0): ?>
                                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-sm bg-slate-950 text-brand-accent text-[9px] font-black uppercase tracking-widest shadow-xl">
                                    <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-pulse"></span>
                                    <?php echo e($activeUsersCount); ?> Active
                                </span>
                            <?php endif; ?>
                        </h3>
                        <p class="text-[10px] text-slate-400 font-black uppercase tracking-[0.2em] mt-1">7-Day Global Traffic Analysis</p>
                    </div>
                </div>
            </div>

            <div class="p-8 relative z-10 space-y-8 bg-white">
                
                <!-- TOP SECTION: Chart & Pages -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Main Chart -->
                    <div class="lg:col-span-2 bg-white p-6 rounded-2xl border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)]">
                        <div class="flex justify-between items-center mb-6 border-b border-slate-100 pb-4">
                            <h4 class="text-sm font-bold text-slate-700 uppercase tracking-widest"><i class="fa-solid fa-chart-area text-blue-500 mr-2"></i> Visitors vs Page Views</h4>
                        </div>
                        <div id="analyticsChart" class="w-full h-[320px]"></div>
                    </div>

                    <!-- Right Column: Top Pages -->
                    <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] flex flex-col">
                        <div class="flex justify-between items-center mb-6 border-b border-slate-100 pb-4">
                            <h4 class="text-sm font-bold text-slate-700 uppercase tracking-widest"><i class="fa-solid fa-fire text-orange-500 mr-2"></i> Top Landing Pages</h4>
                        </div>
                        <?php if($topPages && $topPages->count() > 0): ?>
                            <div class="space-y-4 flex-1">
                                <?php $__currentLoopData = $topPages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="flex items-center justify-between group">
                                        <a href="//<?php echo e($page['fullPageUrl'] ?? ''); ?>" target="_blank" class="text-sm font-medium text-slate-600 group-hover:text-blue-600 truncate max-w-[180px] transition-colors" title="<?php echo e($page['pageTitle'] ?? 'Page'); ?>">
                                            <?php echo e($page['pageTitle'] ?? 'Untitled Page'); ?>

                                        </a>
                                        <span class="text-xs font-bold text-blue-700 bg-blue-50 px-2.5 py-1 rounded-lg shrink-0 border border-blue-100"><?php echo e($page['screenPageViews'] ?? 0); ?> views</span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php else: ?>
                            <p class="text-sm text-slate-500 italic py-8 text-center flex-1">Not enough data available yet.</p>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- BOTTOM ROW: Additional Metrics -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <!-- Top Countries -->
                    <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                        <h4 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-4"><i class="fa-solid fa-earth-americas text-emerald-500 mr-1.5"></i> Geography</h4>
                        <?php if($topCountries && $topCountries->count() > 0): ?>
                            <div class="space-y-3">
                                <?php $__currentLoopData = $topCountries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm font-medium text-slate-700 truncate pr-2"><?php echo e($country['country']); ?></span>
                                        <span class="text-xs font-bold text-slate-500 bg-white px-2 py-0.5 rounded border border-slate-200"><?php echo e($country['screenPageViews'] ?? 0); ?></span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php else: ?>
                            <p class="text-xs text-slate-400 italic">No geographic data.</p>
                        <?php endif; ?>
                    </div>

                    <!-- Top Referrers -->
                    <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                        <h4 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-4"><i class="fa-solid fa-link text-indigo-500 mr-1.5"></i> Traffic Sources</h4>
                        <?php if($topReferrers && $topReferrers->count() > 0): ?>
                            <div class="space-y-3">
                                <?php $__currentLoopData = $topReferrers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm font-medium text-slate-700 truncate pr-2" title="<?php echo e($ref['pageReferrer']); ?>"><?php echo e(Str::limit($ref['pageReferrer'], 20)); ?></span>
                                        <span class="text-xs font-bold text-slate-500 bg-white px-2 py-0.5 rounded border border-slate-200"><?php echo e($ref['screenPageViews'] ?? 0); ?></span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php else: ?>
                            <p class="text-xs text-slate-400 italic">Direct traffic mostly.</p>
                        <?php endif; ?>
                    </div>

                    <!-- Tech: Browsers -->
                    <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                        <h4 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-4"><i class="fa-brands fa-chrome text-rose-500 mr-1.5"></i> System Tech</h4>
                        <?php if($topBrowsers && $topBrowsers->count() > 0): ?>
                            <div class="space-y-3">
                                <?php $__currentLoopData = $topBrowsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $browser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm font-medium text-slate-700 truncate pr-2"><?php echo e($browser['browser']); ?></span>
                                        <span class="text-xs font-bold text-slate-500 bg-white px-2 py-0.5 rounded border border-slate-200"><?php echo e($browser['screenPageViews'] ?? 0); ?></span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php else: ?>
                            <p class="text-xs text-slate-400 italic">No browser data.</p>
                        <?php endif; ?>
                    </div>

                    <!-- Audience / OS -->
                    <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                        <h4 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-4"><i class="fa-solid fa-mobile-screen text-slate-700 mr-1.5"></i> Target Audience</h4>
                        <?php if($userTypes && $userTypes->count() > 0): ?>
                            <div class="space-y-3 mb-4 border-b border-slate-200 pb-3">
                                <?php $__currentLoopData = $userTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ut): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm font-bold text-brand-primary truncate pr-2"><?php echo e($ut['newVsReturning']); ?></span>
                                        <span class="text-xs font-bold text-slate-600 bg-brand-primary/10 px-2 py-0.5 rounded"><?php echo e($ut['activeUsers']); ?> users</span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                        
                        <?php if($topOS && $topOS->count() > 0): ?>
                            <div class="flex gap-2 flex-wrap">
                                <?php $__currentLoopData = $topOS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $os): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="text-[10px] font-bold text-slate-500 uppercase bg-white border border-slate-200 px-2 py-1 rounded-md"><?php echo e($os['operatingSystem'] ?? 'Unknown'); ?> (<?php echo e($os['screenPageViews'] ?? 0); ?>)</span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
        
        <!-- Add ApexCharts -->
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>
            (function() {
                const initChart = () => {
                    const container = document.querySelector("#analyticsChart");
                    if (!container || container.getAttribute('data-chart-initialized')) return;

                    var dates = <?php echo json_encode($analyticsData->pluck('date')->map->format('M d')); ?>;
                    var visitors = <?php echo json_encode($analyticsData->pluck('activeUsers')); ?>;
                    var pageViews = <?php echo json_encode($analyticsData->pluck('screenPageViews')); ?>;

                    var options = {
                        series: [{
                            name: 'Unique Visitors',
                            data: visitors
                        }, {
                            name: 'Page Views',
                            data: pageViews
                        }],
                        chart: {
                            type: 'area',
                            height: 320,
                            toolbar: { show: false },
                            zoom: { enabled: false },
                            background: 'transparent',
                            fontFamily: 'Inter, sans-serif'
                        },
                        colors: ['#0ea5e9', '#10b981'],
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shadeIntensity: 1,
                                opacityFrom: 0.35,
                                opacityTo: 0.05,
                                stops: [0, 90, 100]
                            }
                        },
                        dataLabels: { enabled: false },
                        stroke: { curve: 'smooth', width: 3 },
                        xaxis: {
                            categories: dates,
                            axisBorder: { show: false },
                            axisTicks: { show: false },
                            labels: { style: { colors: '#64748b', fontWeight: 500 } }
                        },
                        yaxis: {
                            labels: { style: { colors: '#64748b', fontWeight: 500 } }
                        },
                        grid: {
                            borderColor: '#f1f5f9',
                            strokeDashArray: 4,
                            yaxis: { lines: { show: true } }
                        },
                        theme: { mode: 'light' },
                        legend: { position: 'top', horizontalAlign: 'right', fontWeight: 600 }
                    };

                    var chart = new ApexCharts(container, options);
                    chart.render();
                    container.setAttribute('data-chart-initialized', 'true');
                };

                // Initialize on load
                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', initChart);
                } else {
                    initChart();
                }

                // Handle Turbo navigations
                document.addEventListener('turbo:load', initChart);
                document.addEventListener('turbo:render', initChart);
            })();
        </script>
        <?php else: ?>
        <!-- Connecting... (Data empty) -->
        <div class="bg-white rounded-3xl p-12 shadow-sm border border-slate-200 mt-8 text-center">
            <div class="w-20 h-20 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fa-solid fa-satellite-dish text-4xl text-blue-500 animate-pulse"></i>
            </div>
            <h4 class="text-xl font-black text-slate-800">Connection Established</h4>
            <p class="text-slate-500 mt-2 font-medium">Google Analytics API is linked, but no traffic data was recorded in the last 7 days.</p>
        </div>
        <?php endif; ?>

    <?php else: ?>
    <div class="bg-amber-50 rounded-2xl p-6 border border-amber-200 mt-8 flex items-start gap-4">
        <i class="fa-solid fa-triangle-exclamation text-amber-500 text-xl mt-0.5"></i>
        <div>
            <h4 class="font-bold text-amber-800">Google Analytics Not Connected</h4>
            <p class="text-sm text-amber-700 mt-1">To view live traffic, add <code class="bg-amber-100 px-2 py-0.5 rounded font-mono text-xs">ANALYTICS_PROPERTY_ID=XXXXXXXXXX</code> to your <code class="bg-amber-100 px-2 py-0.5 rounded font-mono text-xs">.env</code> file.</p>
        </div>
    </div>
    <?php endif; ?>

    <!-- Quick Action Launchpad -->
    <div class="bg-white rounded-3xl p-8 shadow-sm border border-slate-200 mt-8">
        <h3 class="text-xl font-black text-slate-900 mb-6">Quick Builder Launchpad</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <a href="<?php echo e(route('admin.settings.index')); ?>" class="block p-6 rounded-2xl border-2 border-slate-100 hover:border-brand-primary/30 hover:bg-brand-primary/5 transition-all group">
                <div class="w-12 h-12 rounded-xl bg-slate-900 text-white flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-gear"></i>
                </div>
                <h4 class="text-lg font-bold text-slate-900 mb-2">Manage Site Settings</h4>
                <p class="text-sm text-slate-500 font-medium leading-relaxed">Configure contact info, social links, and other key-value settings used across the website.</p>
            </a>

            <a href="<?php echo e(route('admin.forms.create')); ?>" class="block p-6 rounded-2xl border-2 border-slate-100 hover:border-emerald-500/30 hover:bg-emerald-500/5 transition-all group">
                <div class="w-12 h-12 rounded-xl bg-emerald-500 text-white flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-list-check"></i>
                </div>
                <h4 class="text-lg font-bold text-slate-900 mb-2">Create Nomination Form</h4>
                <p class="text-sm text-slate-500 font-medium leading-relaxed">Use the form visualizer to assemble text fields, dropdowns, and file uploaders intuitively.</p>
            </a>

            <a href="<?php echo e(route('admin.events.create')); ?>" class="block p-6 rounded-2xl border-2 border-slate-100 hover:border-purple-500/30 hover:bg-purple-500/5 transition-all group">
                <div class="w-12 h-12 rounded-xl bg-purple-500 text-white flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-bullhorn"></i>
                </div>
                <h4 class="text-lg font-bold text-slate-900 mb-2">Schedule New Event</h4>
                <p class="text-sm text-slate-500 font-medium leading-relaxed">Broadcast a new standard or featured event out to the global landing page easily.</p>
            </a>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>