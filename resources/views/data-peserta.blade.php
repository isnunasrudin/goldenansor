@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-12">
    <h1 class="text-3xl font-bold text-emerald-500 mb-8">Data Peserta</h1>
    
    <div class="bg-black/50 rounded-xl border border-emerald-900/30 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-emerald-900/50">
                <thead class="bg-emerald-900/20">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-emerald-300 uppercase tracking-wider">No</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-emerald-300 uppercase tracking-wider">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-emerald-300 uppercase tracking-wider">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-black divide-y divide-emerald-900/30">
                    @for($i = 1; $i <= 10; $i++)
                    <tr class="hover:bg-emerald-900/10 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-emerald-100">{{ $i }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-emerald-100">Peserta Contoh {{ $i }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-emerald-900/30 text-emerald-400">
                                Aktif
                            </span>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
