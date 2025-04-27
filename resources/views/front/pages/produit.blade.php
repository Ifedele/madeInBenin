@extends('front.layouts.master2')
@section('content')

<section class="relative pt-28 md:pb-24 pb-16">
    <div class="container">
        <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-5">
                <div class="tiny-one-icon-item">
                    @foreach ($produit->images as $image )
                        <div class="tiny-slide">
                            <div class="m-2 p-3 bg-white rounded-lg shadow-sm">
                                    <img src="{{ asset('storage/' . $image->image_src) }}" class="rounded-md shadow-sm dark:shadow-gray-700" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div><!--end col-->

            <div class="lg:col-span-7 lg:ms-8">
                <h5 class="md:text-2xl text-xl font-semibold">{{$produit->nom}}</h5>

                <span class="font-medium text-slate-400 block mt-2">par la boutique: <a href="" class="text-violet-600">{{$produit->vendeur->raison_social}}</a></span>

                <p class="text-slate-400 mt-4">{{$produit->description}}</p>

                @if ($produit->statut=='disponible')
                    <p class="text-success-400 mt-4">{{$produit->statut}}</p>
                @else
                <p class="text-error-400 mt-4">{{$produit->statut}}</p>
                @endif


                <div class="mt-4">
                    <span class="text-lg font-medium text-slate-400 block">Prix</span>
                    <span class="tmd:text-2xl text-xl font-semibold block mt-2">{{ number_format($produit->prix, 0, ',', ' ') }} FCFA</span>
                </div>

                <div class="mt-6">
                    <button class="ajouter-au-panier-btn btn rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white" data-produit-id="{{ $produit->id }}">
                        <i class="mdi mdi-cart"></i>Ajouter au panier
                    </button>
                </div>

                <div class="md:flex p-6 bg-gray-50 dark:bg-slate-800 rounded-lg shadow-sm dark:shadow-gray-700 mt-6">
                    <div class="md:w-1/2">
                        <div class="flex items-center">
                            <div class="relative inline-block">
                                <img src="{{ asset('storage/photo_profil/avatar.default.jpg') }}" class="h-16 rounded-md" alt="">
                                <i class="mdi mdi-check-decagram text-emerald-600 text-lg absolute -top-2 -end-2"></i>
                            </div>

                            <div class="ms-3">
                                <a href="creator-profile.html" class="font-semibold block hover:text-violet-600">{{$produit->vendeur->nom}} {{$produit->vendeur->prenom}}</a>
                                <span class="text-slate-400 text-[16px] block mt-1">Vendeur</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->
</section>

@endsection


