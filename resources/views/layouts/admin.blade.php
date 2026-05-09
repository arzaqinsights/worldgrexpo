<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') | World Grexpo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-slate-50 text-slate-950 antialiased font-sans flex h-screen overflow-hidden" x-data="{ sidebarOpen: false }">

    <!-- Mobile sidebar backdrop -->
    <div x-show="sidebarOpen" class="fixed inset-0 z-40 bg-slate-950/80 backdrop-blur-sm lg:hidden transition-opacity" @click="sidebarOpen = false"></div>

    <!-- Sidebar -->
    <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" class="fixed inset-y-0 left-0 z-50 w-80 bg-slate-950 border-r border-slate-900 transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-auto lg:flex flex-col shadow-2xl lg:shadow-none">
        
        <!-- Sidebar Header -->
        <div class="flex items-center justify-between h-24 px-8 bg-slate-950 border-b border-white/5">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-4 group">
                <div class="w-10 h-10 rounded-sm bg-brand-accent flex items-center justify-center shadow-[0_0_20px_rgba(var(--brand-accent-rgb),0.3)] group-hover:scale-110 transition-transform duration-500">
                    <i class="fa-solid fa-bolt-lightning text-slate-950 text-sm"></i>
                </div>
                <span class="text-2xl font-black text-white tracking-tighter uppercase italic">
                    World<span class="text-brand-accent not-italic">Grexpo</span>
                </span>
            </a>
            <button @click="sidebarOpen = false" class="lg:hidden text-slate-500 hover:text-white transition-colors">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>

        <!-- Sidebar Links -->
        <div class="flex-1 px-4 py-8 overflow-y-auto space-y-1 custom-scrollbar">
            <div class="text-[10px] font-black text-slate-600 uppercase tracking-[0.4em] mb-6 ml-4 mt-2">Architecture Core</div>
            
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-4 px-5 py-4 rounded-sm transition-all duration-300 {{ request()->routeIs('admin.dashboard') ? 'bg-brand-accent text-slate-950' : 'text-slate-500 hover:bg-white/5 hover:text-white' }}">
                <i class="fa-solid fa-gauge-high w-5 text-center text-sm"></i>
                <span class="text-[11px] font-black uppercase tracking-widest">Command Center</span>
            </a>

            <!-- Settings -->
            <a href="{{ route('admin.settings.index') }}" class="flex items-center gap-4 px-5 py-4 rounded-sm transition-all duration-300 {{ request()->routeIs('admin.settings.*') ? 'bg-brand-accent text-slate-950' : 'text-slate-500 hover:bg-white/5 hover:text-white' }}">
                <i class="fa-solid fa-sliders w-5 text-center text-sm"></i>
                <span class="text-[11px] font-black uppercase tracking-widest">Global Constants</span>
            </a>

            <a href="{{ route('admin.events.index') }}" class="flex items-center gap-4 px-5 py-4 rounded-sm transition-all duration-300 {{ request()->routeIs('admin.events.*') ? 'bg-brand-accent text-slate-950' : 'text-slate-500 hover:bg-white/5 hover:text-white' }}">
                <i class="fa-regular fa-calendar-check w-5 text-center text-sm"></i>
                <span class="text-[11px] font-black uppercase tracking-widest">Events Registry</span>
            </a>

            <a href="{{ route('admin.gallery.index') }}" class="flex items-center gap-4 px-5 py-4 rounded-sm transition-all duration-300 {{ request()->routeIs('admin.gallery.*') ? 'bg-brand-accent text-slate-950' : 'text-slate-500 hover:bg-white/5 hover:text-white' }}">
                <i class="fa-solid fa-photo-film w-5 text-center text-sm"></i>
                <span class="text-[11px] font-black uppercase tracking-widest">Digital Assets</span>
            </a>

            <a href="{{ route('admin.file-manager.index') }}" class="flex items-center gap-4 px-5 py-4 rounded-sm transition-all duration-300 {{ request()->routeIs('admin.file-manager.*') ? 'bg-brand-accent text-slate-950' : 'text-slate-500 hover:bg-white/5 hover:text-white' }}">
                <i class="fa-solid fa-server w-5 text-center text-sm"></i>
                <span class="text-[11px] font-black uppercase tracking-widest">Filesystem</span>
            </a>

            <div class="text-[10px] font-black text-slate-600 uppercase tracking-[0.4em] mb-6 ml-4 mt-10">Institutional Content</div>

            <a href="{{ route('admin.sliders.index') }}" class="flex items-center gap-4 px-5 py-4 rounded-sm transition-all duration-300 {{ request()->routeIs('admin.sliders.*') ? 'bg-brand-accent text-slate-950' : 'text-slate-500 hover:bg-white/5 hover:text-white' }}">
                <i class="fa-solid fa-layer-group w-5 text-center text-sm"></i>
                <span class="text-[11px] font-black uppercase tracking-widest">Hero Engines</span>
            </a>

            <a href="{{ route('admin.team-pages.index') }}" class="flex items-center gap-4 px-5 py-4 rounded-sm transition-all duration-300 {{ request()->routeIs('admin.team-pages.*') ? 'bg-brand-accent text-slate-950' : 'text-slate-500 hover:bg-white/5 hover:text-white' }}">
                <i class="fa-solid fa-shield-halved w-5 text-center text-sm"></i>
                <span class="text-[11px] font-black uppercase tracking-widest">Leadership</span>
            </a>

            <a href="{{ route('admin.articles.index') }}" class="flex items-center gap-4 px-5 py-4 rounded-sm transition-all duration-300 {{ request()->routeIs('admin.articles.*') ? 'bg-brand-accent text-slate-950' : 'text-slate-500 hover:bg-white/5 hover:text-white' }}">
                <i class="fa-solid fa-newspaper w-5 text-center text-sm"></i>
                <span class="text-[11px] font-black uppercase tracking-widest">Think-Tank Blog</span>
            </a>

            <div class="text-[10px] font-black text-slate-600 uppercase tracking-[0.4em] mb-6 ml-4 mt-10">Commercial Engines</div>

            <a href="{{ route('admin.forms.index') }}" class="flex items-center gap-4 px-5 py-4 rounded-sm transition-all duration-300 {{ request()->routeIs('admin.forms.*') ? 'bg-brand-accent text-slate-950' : 'text-slate-500 hover:bg-white/5 hover:text-white' }}">
                <i class="fa-solid fa-list-check w-5 text-center text-sm"></i>
                <span class="text-[11px] font-black uppercase tracking-widest">Funnel Builder</span>
            </a>

            <a href="{{ route('admin.invoice-designer.index') }}" class="flex items-center gap-4 px-5 py-4 rounded-sm transition-all duration-300 {{ request()->routeIs('admin.invoice-designer.*') ? 'bg-brand-accent text-slate-950' : 'text-slate-500 hover:bg-white/5 hover:text-white' }}">
                <i class="fa-solid fa-file-invoice-dollar w-5 text-center text-sm"></i>
                <span class="text-[11px] font-black uppercase tracking-widest">Invoice Studio</span>
            </a>

            <a href="{{ route('admin.excellence.index') }}" class="flex items-center gap-4 px-5 py-4 rounded-sm transition-all duration-300 {{ request()->routeIs('admin.excellence.*') ? 'bg-brand-accent text-slate-950' : 'text-slate-500 hover:bg-white/5 hover:text-white' }}">
                <i class="fa-solid fa-medal w-5 text-center text-sm"></i>
                <span class="text-[11px] font-black uppercase tracking-widest">Excellence Hub</span>
            </a>

            <div class="text-[10px] font-black text-slate-600 uppercase tracking-[0.4em] mb-6 ml-4 mt-10">Intelligence</div>
            <a href="{{ route('admin.users.index') }}" class="flex items-center gap-4 px-5 py-4 rounded-sm transition-all duration-300 {{ request()->routeIs('admin.users.*') ? 'bg-brand-accent text-slate-950' : 'text-slate-500 hover:bg-white/5 hover:text-white' }}">
                <i class="fa-solid fa-database w-5 text-center text-sm"></i>
                <span class="text-[11px] font-black uppercase tracking-widest">Nodes & CRM</span>
            </a>
        </div>

        <!-- Sidebar Footer -->
        <div class="p-6 border-t border-white/5 bg-black/20">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-12 h-12 rounded-sm bg-slate-900 border border-white/10 flex items-center justify-center text-brand-accent font-black text-lg italic shadow-inner">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
                <div>
                    <p class="text-xs font-black text-white uppercase tracking-tighter leading-none mb-1">{{ Auth::user()->name }}</p>
                    <p class="text-[9px] text-brand-accent font-black uppercase tracking-[0.2em]">Primary Admin</p>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center gap-4 px-5 py-4 rounded-sm text-slate-500 hover:bg-red-500 hover:text-white transition-all duration-500 group">
                    <i class="fa-solid fa-power-off w-5 text-center text-sm group-hover:rotate-90 transition-transform duration-500"></i>
                    <span class="text-[10px] font-black uppercase tracking-widest">Terminate Session</span>
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content Wrapper -->
    <div class="flex-1 flex flex-col min-w-0 overflow-hidden bg-slate-50">
        
        <!-- Top Navbar -->
        <header class="h-24 bg-white border-b border-slate-200 flex items-center justify-between px-10 shrink-0 z-20">
            <div class="flex items-center gap-8">
                <button @click="sidebarOpen = true" class="lg:hidden text-slate-950 p-3 rounded-sm bg-slate-100">
                    <i class="fa-solid fa-bars-staggered text-xl"></i>
                </button>
                <div>
                    <h1 class="text-3xl font-black text-slate-950 tracking-tighter uppercase italic leading-none">@yield('title', 'Control')</h1>
                    <div class="flex items-center gap-2 mt-2">
                        <span class="w-2 h-2 rounded-full bg-brand-accent"></span>
                        <p class="text-[10px] font-black text-slate-500 uppercase tracking-[0.3em]">Institutional Infrastructure v2.0</p>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-6">
                <a href="/" target="_blank" class="hidden sm:flex items-center gap-3 px-6 py-3 bg-slate-950 text-white rounded-sm hover:bg-brand-accent hover:text-slate-950 transition-all duration-500 text-[10px] font-black uppercase tracking-widest shadow-lg shadow-slate-900/10">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    View Portal
                </a>
                
                <div class="w-px h-10 bg-slate-200 mx-2"></div>
                
                <div class="flex items-center gap-4">
                    <div class="text-right hidden md:block">
                        <p class="text-[10px] font-black text-slate-950 uppercase tracking-tighter leading-none mb-1">System Node</p>
                        <p class="text-[9px] text-slate-400 font-medium">127.0.0.1:Secure</p>
                    </div>
                    <div class="w-12 h-12 rounded-sm bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-400">
                        <i class="fa-solid fa-shield-check text-xl"></i>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Scrollable Content -->
        <main class="flex-1 overflow-y-auto w-full custom-scrollbar">
            <div class="p-10 max-w-7xl mx-auto">
                
                <!-- Feedback Alerts -->
                @if (session('success'))
                    <div class="bg-slate-950 border-l-4 border-brand-accent p-6 rounded-sm mb-10 shadow-2xl flex items-center gap-5 animate-on-scroll">
                        <div class="w-10 h-10 bg-brand-accent flex items-center justify-center rounded-sm">
                            <i class="fa-solid fa-check text-slate-950"></i>
                        </div>
                        <p class="text-white text-sm font-black uppercase tracking-widest">{{ session('success') }}</p>
                    </div>
                @endif
                
                @if (session('error'))
                    <div class="bg-red-600 border-l-4 border-red-950 p-6 rounded-sm mb-10 shadow-2xl flex items-center gap-5 animate-on-scroll">
                        <div class="w-10 h-10 bg-red-950 flex items-center justify-center rounded-sm">
                            <i class="fa-solid fa-xmark text-white"></i>
                        </div>
                        <p class="text-white text-sm font-black uppercase tracking-widest">{{ session('error') }}</p>
                    </div>
                @endif

                @yield('content')
            </div>
            
            <!-- Admin Footer -->
            <footer class="p-10 border-t border-slate-200 bg-white flex flex-col md:flex-row items-center justify-between gap-6">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em]">World Grexpo Foundation &copy; {{ date('Y') }}</p>
                <div class="flex items-center gap-8">
                    <span class="text-[9px] font-black text-slate-300 uppercase tracking-widest flex items-center gap-2">
                        <i class="fa-solid fa-code"></i> Developed by Antigravity
                    </span>
                    <span class="text-[9px] font-black text-slate-300 uppercase tracking-widest flex items-center gap-2">
                        <i class="fa-solid fa-microchip"></i> Node v1.4.2
                    </span>
                </div>
            </footer>
        </main>
    </div>
</body>
</html>
