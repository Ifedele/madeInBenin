
@extends('vendeur.layouts.master')
@section('content')
<div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
    <div class="grid grid-cols-12 gap-4 md:gap-6">
        <div class="col-span-12 space-y-6">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:gap-6">
                <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                    <div class="mt-5 flex items-end justify-between">
                        <div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Produits Enregistrés</span>
                            <h4 class="mt-2 text-title-sm font-bold text-gray-800 dark:text-white/90">
                                {{ $totalProduits }}
                            </h4>
                        </div>
                        <span class="flex items-center gap-1 rounded-full bg-{{ $variationProduits > 0 ? 'success' : ($variationProduits < 0 ? 'error' : 'brand') }}-50 py-0.5 pl-2 pr-2.5 text-sm font-medium text-{{ $variationProduits > 0 ? 'success' : ($variationProduits < 0 ? 'error' : 'brand') }}-600 dark:bg-{{ $variationProduits > 0 ? 'success' : ($variationProduits < 0 ? 'error' : 'brand') }}-500/15 dark:text-{{ $variationProduits > 0 ? 'success' : ($variationProduits < 0 ? 'error' : 'brand') }}-500">
                            @if ($pourcentageVariationProduits !== '∞' && $pourcentageVariationProduits !== '-∞')
                                @if ($variationProduits > 0)
                                    <i class="ri-arrow-up-line align-bottom"></i> {{ number_format($pourcentageVariationProduits, 2) }}%
                                @elseif ($variationProduits < 0)
                                    <i class="ri-arrow-down-line align-bottom"></i> {{ number_format(abs($pourcentageVariationProduits), 2) }}%
                                @else
                                    {{ number_format($pourcentageVariationProduits, 2) }}%
                                @endif
                            @else
                                @if ($variationProduits > 0)
                                    <i class="ri-arrow-up-line align-bottom"></i> ∞%
                                @elseif ($variationProduits < 0)
                                    <i class="ri-arrow-down-line align-bottom"></i> -∞%
                                @else
                                    0%
                                @endif
                            @endif
                            <span class="text-theme-xs text-gray-500 dark:text-gray-400">Vs mois dernier</span>
                        </span>
                    </div>
                </div>
                <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">

                    <div class="mt-5 flex items-end justify-between">
                        <div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Commandes Reçues</span>
                            <h4 class="mt-2 text-title-sm font-bold text-gray-800 dark:text-white/90">
                                {{ $totalCommandes }}
                            </h4>
                        </div>
                        <span class="flex items-center gap-1 rounded-full bg-{{ $variationCommandes > 0 ? 'success' : ($variationCommandes < 0 ? 'error' : 'brand') }}-50 py-0.5 pl-2 pr-2.5 text-sm font-medium text-{{ $variationCommandes > 0 ? 'success' : ($variationCommandes < 0 ? 'error' : 'brand') }}-600 dark:bg-{{ $variationCommandes > 0 ? 'success' : ($variationCommandes < 0 ? 'error' : 'brand') }}-500/15 dark:text-{{ $variationCommandes > 0 ? 'success' : ($variationCommandes < 0 ? 'error' : 'brand') }}-500">
                            @if ($pourcentageVariationCommandes !== '∞' && $pourcentageVariationCommandes !== '-∞')
                                @if ($variationCommandes > 0)
                                    <i class="ri-arrow-up-line align-bottom"></i> {{ number_format($pourcentageVariationCommandes, 2) }}%
                                @elseif ($variationCommandes < 0)
                                    <i class="ri-arrow-down-line align-bottom"></i> {{ number_format(abs($pourcentageVariationCommandes), 2) }}%
                                @else
                                    {{ number_format($pourcentageVariationCommandes, 2) }}%
                                @endif
                            @else
                                @if ($variationCommandes > 0)
                                    <i class="ri-arrow-up-line align-bottom"></i> ∞%
                                @elseif ($variationCommandes < 0)
                                    <i class="ri-arrow-down-line align-bottom"></i> -∞%
                                @else
                                    0%
                                @endif
                            @endif
                            <span class="text-theme-xs text-gray-500 dark:text-gray-400">Vs mois dernier</span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90 mb-4">
                    Évolution des Ventes
                </h3>
                <div>
                    <canvas id="ventesChart"></canvas>
                </div>
            </div>

            <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90 mb-4">
                    Produits les Plus Commandés
                </h3>
                <div class="overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="px-4 py-2 text-left text-gray-500 dark:text-gray-400">Nom du Produit</th>
                                <th class="px-4 py-2 text-left text-gray-500 dark:text-gray-400">Nombre de Commandes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($produitsPlusCommandes as $produit)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3">{{ $produit->nom }}</td>
                                    <td class="px-4 py-3">{{ $produit->nombre_commandes }}</td>
                                </tr>
                            @empty
                                <tr><td class="px-4 py-3 text-center" colspan="2">Aucun produit commandé pour le moment.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ventesData = JSON.parse('<?php echo $ventesParMois; ?>');

    const renderChart = (canvasId, data, label, borderColor) => {
        const ctx = document.getElementById(canvasId).getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: data.map(item => item.date),
                datasets: [{
                    label: label,
                    data: data.map(item => item.total_ventes),
                    borderColor: `rgb(${borderColor})`,
                    backgroundColor: `rgba(${borderColor}, 0.2)`,
                    fill: true,
                    tension: 0.3
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom',
                    }
                }
            }
        });
    };

    renderChart('ventesChart', ventesData, 'Chiffre d\'affaires par mois', '255, 165, 0'); // Orange
</script>
@endsection



