@extends('front.layouts.master2')
@section('content')

<section class="relative md:pb-24 pb-16 lg:mt-24 mt-[74px]">
    <div class="container">
        <div class="group profile-banner relative overflow-hidden text-transparent lg:rounded-xl shadow-sm dark:shadow-gray-700">
            <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)">
            <div class="relative shrink-0">
                <img src="{{ asset('storage/photo_profil/single.jpg') }}" class="h-80 w-full object-cover" id="profile-banner" alt="">
                <div class="absolute inset-0 bg-slate/10 group-hover:bg-slate-900/40 transition duration-500"></div>
                <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
            </div>
        </div>

        <div class="md:flex justify-center">
            <div class="md:w-full">
                <div class="relative -mt-[60px] text-center">
                    <div class="group profile-pic w-[112px] mx-auto">
                        <input id="pro-img" name="profile-image" type="file" class="hidden" onchange="loadFile(event)">
                        <div>
                            @if(isset($vendeur->photo_profile))
                                <div class="relative h-28 w-28 mx-auto rounded-full shadow-sm dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800 overflow-hidden">
                                    <img src="{{ asset('storage/' . $vendeur->photo_profile) }}" class="rounded-full" id="profile-image" alt="">
                                    <div class="absolute inset-0 group-hover:bg-slate-900/40 transition duration-500"></div>
                                    <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                </div>
                            @else
                                <div class="relative h-28 w-28 mx-auto rounded-full shadow-sm dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800 overflow-hidden">
                                    <img src="{{ asset('storage/photo_profil/avatar.default.jpg') }}"  class="rounded-full" id="profile-image" alt="">
                                    <div class="absolute inset-0 group-hover:bg-slate-900/40 transition duration-500"></div>
                                    <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="mt-6">
                        <h5 class="text-xl font-semibold">{{$vendeur->nom}} {{$vendeur->prenom}}<i class="mdi mdi-check-decagram text-emerald-600 align-middle text-lg"></i></h5>
                        <p class="text-slate-400 text-[16px] mt-1">Boutique <a href="" class="text-violet-600 font-semibold">{{$vendeur->raison_social}}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end -->

    <div class="container mt-16">
        <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
            @foreach ($vendeur->produits as $produit )
                <div class="group relative overflow-hidden p-2 rounded-lg bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 hover:-mt-2 h-fit">
                    <div class="relative overflow-hidden">
                        <div class="relative overflow-hidden rounded-lg">
                            @if ($produit->images->isNotEmpty())
                                <img src="{{ asset('storage/' . $produit->images->first()->image_src) }}" class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500" alt="">
                            @else
                                <img src="{{ asset('storage/assets/images/image-par-defaut.png') }}" class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500" alt="">
                            @endif
                        </div>

                        <div class="absolute -bottom-20 group-hover:bottom-1/2 group-hover:translate-y-1/2 start-0 end-0 mx-auto text-center transition-all duration-500">
                            <a href="" class="btn btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-cart"></i> Ajouter au panier</a>
                        </div>

                        <div class="absolute top-2 end-2 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <a href="{{route('produit.view', $produit->id)}}" class="btn btn-icon btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-eye"></i></a>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="my-3">
                            <a href="item-detail.html" class="font-semibold hover:text-violet-600">{{$produit->nom}}</a>
                        </div>

                        <div class="flex justify-between p-2 bg-gray-50 dark:bg-slate-800 rounded-lg shadow-sm dark:shadow-gray-700">
                            <div>
                                <span class="text-[16px] font-medium text-slate-400 block">Prix</span>
                                <span class="text-[16px] font-semibold block">{{ number_format($produit->prix, 0, ',', ' ') }} FCFA</span>
                            </div>

                        </div>
                    </div>
                </div><!--end content-->
            @endforeach
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">
                <nav>
                    <ul class="inline-flex items-center -space-x-px">
                        <li>
                            <a href="#" class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 bg-white dark:bg-slate-900 hover:text-white shadow-xs dark:shadow-gray-700 hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600">
                                <i class="uil uil-angle-left text-[20px]"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-xs dark:shadow-gray-700 hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600">1</a>
                        </li>
                        <li>
                            <a href="#" class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-xs dark:shadow-gray-700 hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page" class="z-10 w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-white bg-violet-600 shadow-xs dark:shadow-gray-700">3</a>
                        </li>
                        <li>
                            <a href="#" class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-xs dark:shadow-gray-700 hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600">4</a>
                        </li>
                        <li>
                            <a href="#" class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 bg-white dark:bg-slate-900 hover:text-white shadow-xs dark:shadow-gray-700 hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600">
                                <i class="uil uil-angle-right text-[20px]"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section>

@endsection
