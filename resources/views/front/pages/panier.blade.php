@extends('front.layouts.master2')
@section('content')

<div id="panierModal" tabindex="-1" class="fixed z-50 overflow-hidden inset-0 m-auto justify-center items-center flex hidden" aria-modal="true" role="dialog">
    <div class="relative w-full h-auto max-w-md p-4">
        <div class="relative bg-white dark:bg-slate-900 rounded-lg shadow-sm dark:shadow-gray-800">
            <div class="flex justify-between items-center px-6 py-4 border-b border-gray-100 dark:border-gray-700">
                <h5 class="text-xl font-semibold">Votre Panier</h5>
                <button type="button" id="fermerPanierModal" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ms-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="p-6">
                <div id="panierContenu">
                    <p>Votre panier est vide.</p>
                </div>
            </div>
            <div class="px-6 py-4 border-t border-gray-100 dark:border-gray-700">
                <div class="flex justify-between font-semibold mb-2">
                    <span>Sous-total:</span>
                    <span id="panierSousTotal">0.00 €</span>
                </div>
                <a href="{{ route('cart.index') }}" class="btn rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white w-full"><i class="mdi mdi-cart-outline"></i> Voir le Panier et Payer</a>
            </div>
        </div>
    </div>
</div>

@endsection
