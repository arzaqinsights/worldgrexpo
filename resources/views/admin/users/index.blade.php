@extends('layouts.admin')

@section('title', 'User Intelligence')

@section('content')

<div class="mb-10 flex flex-col md:flex-row justify-between items-start md:items-end gap-6">
    <div>
        <h2 class="text-3xl font-black text-slate-950 uppercase tracking-tighter italic">Platform <span class="text-brand-primary">Intelligence</span></h2>
        <p class="text-xs font-black text-slate-500 mt-2 uppercase tracking-[0.2em]">Global Membership Control & Analytics</p>
    </div>
    
    <div class="flex items-center gap-3">
        <button class="bg-slate-950 text-white px-6 py-3 rounded-sm font-black text-xs uppercase tracking-widest hover:bg-brand-primary transition-all flex items-center gap-2">
            <i class="fa-solid fa-file-export"></i> Export Data
        </button>
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="bg-white border border-slate-200 text-slate-900 px-6 py-3 rounded-sm font-black text-xs uppercase tracking-widest hover:bg-slate-50 transition-all flex items-center gap-2">
                Bulk Actions <i class="fa-solid fa-chevron-down text-[10px]"></i>
            </button>
            <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-56 bg-white border border-slate-200 shadow-2xl rounded-sm z-50 overflow-hidden">
                <a href="#" class="block px-4 py-3 text-xs font-bold text-slate-700 hover:bg-slate-50 border-b border-slate-100 uppercase tracking-widest">Send Broadcast Email</a>
                <a href="#" class="block px-4 py-3 text-xs font-bold text-slate-700 hover:bg-slate-50 border-b border-slate-100 uppercase tracking-widest">Update Membership Status</a>
                <a href="#" class="block px-4 py-3 text-xs font-bold text-red-600 hover:bg-red-50 uppercase tracking-widest">Deactivate Selected</a>
            </div>
        </div>
    </div>
</div>

<div class="bg-white rounded-sm shadow-2xl border border-slate-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-950 border-b border-slate-800 text-[10px] text-slate-400 uppercase tracking-[0.2em] font-black italic">
                    <th class="p-6 pl-8">Identity</th>
                    <th class="p-6">Organization</th>
                    <th class="p-6">Digital Reach</th>
                    <th class="p-6">Activity</th>
                    <th class="p-6">Joined Date</th>
                    <th class="p-6 pr-8 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="text-sm text-slate-700 divide-y divide-slate-100">
                @forelse($users->where('role', 'user') as $user)
                    <tr class="hover:bg-slate-50/80 transition-all group">
                        <td class="p-6 pl-8">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-sm {{ $user->role === 'admin' ? 'bg-purple-950 text-purple-400' : 'bg-brand-primary text-white' }} flex items-center justify-center font-black relative border border-white/10 shadow-lg">
                                    {{ substr($user->name, 0, 1) }}
                                    @if($user->role === 'admin')
                                        <div class="absolute -bottom-1 -right-1 text-[10px] text-purple-400 bg-slate-950 rounded-sm leading-none p-1 border border-purple-900"><i class="fa-solid fa-crown"></i></div>
                                    @endif
                                </div>
                                <div>
                                    <h3 class="font-black text-slate-950 uppercase tracking-tighter">{{ $user->name }}</h3>
                                    <p class="text-[9px] uppercase font-black tracking-widest text-brand-primary mt-1">{{ $user->role }} NODE</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-6">
                            <span class="font-black text-slate-950 uppercase tracking-tighter text-base block mb-1">{{ $user->company_name ?: 'INDEPENDENT' }}</span>
                            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">{{ $user->designation ?: 'Professional' }}</span>
                        </td>
                        <td class="p-6">
                            <div class="flex flex-col gap-2">
                                <span class="font-bold text-slate-600 text-xs flex items-center gap-2"><i class="fa-regular fa-envelope text-brand-primary"></i> {{ $user->email }}</span>
                                <span class="text-[10px] font-black text-slate-400 flex items-center gap-2"><i class="fa-solid fa-phone text-brand-primary"></i> {{ $user->phone_number ?: 'UNAVAILABLE' }}</span>
                            </div>
                        </td>
                        <td class="p-6">
                            @if($user->submissions_count > 0)
                                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-sm bg-brand-primary/10 border border-brand-primary/20 text-brand-primary text-[10px] font-black uppercase tracking-widest shadow-sm">
                                    <i class="fa-solid fa-file-waveform"></i> {{ $user->submissions_count }} Active
                                </div>
                            @else
                                <span class="text-[10px] font-black text-slate-400 bg-slate-100 px-3 py-1.5 rounded-sm uppercase tracking-widest">Inactive</span>
                            @endif
                        </td>
                        <td class="p-6 text-[10px] font-black text-slate-400 uppercase tracking-widest italic">
                            {{ $user->created_at->format('M d, Y') }}
                        </td>
                        <td class="p-6 pr-8 text-right">
                            <a href="{{ route('admin.users.show', $user->id) }}" class="inline-flex items-center justify-center w-10 h-10 rounded-sm bg-slate-950 text-white hover:bg-brand-accent hover:text-brand-primary-dark transition-all shadow-xl group-hover:scale-110" title="Inspect Node">
                                <i class="fa-solid fa-magnifying-glass-chart"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="p-20 text-center text-slate-500">
                            <div class="flex flex-col items-center justify-center">
                                <div class="w-20 h-20 bg-slate-50 flex items-center justify-center rounded-sm border border-slate-100 mb-6">
                                    <i class="fa-solid fa-network-wired text-4xl text-slate-200"></i>
                                </div>
                                <span class="font-black text-slate-950 uppercase tracking-widest text-lg mb-2">No Nodes Detected</span>
                                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">The global membership database is currently empty.</span>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($users->hasPages())
        <div class="p-6 border-t border-slate-100 bg-slate-50">
            {{ $users->links() }}
        </div>
    @endif
</div>

@endsection
