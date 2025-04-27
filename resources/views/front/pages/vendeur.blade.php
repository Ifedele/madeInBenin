@extends('front.layouts.master2')
@section('content')

<section class="relative md:py-24 py-16">
    <div class="container">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
                @foreach ($vendeurs as $vendeur )
                <div class="group relative overflow-hidden bg-gray-50 dark:bg-slate-800 rounded-md shadow-sm hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-800 ease-in-out duration-500 hover:-mt-2 h-fit">
                    <div class="flex justify-between items-center p-3">
                        <div class="flex items-center">
                            @if(isset($vendeur->photo_profile))
                                <div class="relative inline-block">
                                    <img src="{{ asset('storage/' . $vendeur->photo_profile) }}" class="h-16 rounded-md" alt="">
                                    <i class="mdi mdi-check-decagram text-emerald-600 text-lg absolute -top-2 -end-2"></i>
                                </div>
                            @else
                                <div class="relative inline-block">
                                    <img src="{{ asset('storage/photo_profil/avatar.default.jpg') }}" class="h-16 rounded-md" alt="">
                                    <i class="mdi mdi-check-decagram text-emerald-600 text-lg absolute -top-2 -end-2"></i>
                                </div>
                            @endif


                            <div class="ms-3">
                                <a href="" class="font-semibold block hover:text-violet-600">{{$vendeur->nom}} {{$vendeur->prenom}}</a>
                                <span class="text-slate-400 text-sm block mt-1">{{$vendeur->raison_social}}</span>
                            </div>
                        </div>

                        <a href="{{route('vendeur.view',$vendeur->id)}}" class="btn btn-icon rounded-full bg-violet-600/5 hover:bg-violet-600 border-violet-600/10 hover:border-violet-600 text-violet-600 hover:text-white"><i class="uil uil-eye text-[20px]"></i></a>
                    </div>
                        <div class="p-2 border border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                @foreach ($vendeur->produits as $produit)
                                    <div class="w-1/2 p-1">
                                        <a href="" class="rounded-md lightbox tobii-zoom">
                                            @if ($produit->images->isNotEmpty())
                                                <img src="{{ asset('storage/' . $produit->images->first()->image_src) }}" class="rounded-md" alt="{{ $produit->nom }}">
                                            @else
                                                <img src="{{ asset('storage/assets/images/image-par-defaut.png') }}" class="rounded-md" alt="Image par défaut">
                                            @endif
                                            <div class="tobii-zoom__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                    <path d="M21 16v5h-5"></path>
                                                    <path d="M8 21H3v-5"></path>
                                                    <path d="M16 3h5v5"></path>
                                                    <path d="M3 8V3h5"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                <!-- End content -->
                @endforeach
            </div>

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

