<section class="relative lg:pt-24 pt-[74px] overflow-hidden">
    <div class="container-fluid lg:px-10 md:px-3 relative overflow-hidden">
        <span class="absolute blur-[200px] w-[600px] h-[600px] rounded-full top-1/2 start-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2 -translate-y-1/2 bg-gradient-to-tl from-red-600/40 to-violet-600/40">
        </span>
        <div class="lg:py-24 py-[74px] md:rounded-lg shadow-sm bg-violet-700/10">
            <div class="container">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                    <div class="md:col-span-7">
                        <div class="md:me-6">
                            <h4 class="font-bold lg:leading-snug leading-snug text-4xl lg:text-6xl mb-4"><span class="bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">Achetez, vendez</span> et <br> découvrez des produits uniques</h4>
                            <p class="text-lg max-w-xl">Nous sommes une vaste plateforme dédiée à la mise en relation des acheteurs et des vendeurs de produits de qualité.</p>
                            <div class="mt-6">
                                <a href="{{route('explore.index')}}" class="btn bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-full me-2 mt-2">Explorer les produits</a>
                                <a href="" class="btn bg-transparent hover:bg-violet-600 border-violet-600 text-violet-600 hover:text-white rounded-full mt-2">Devenir vendeur</a>
                            </div>
                        </div>
                        <div class="overflow-hidden after:content-[''] after:absolute after:h-10 after:w-10 after:bg-violet-600/10 after:-bottom-[50px] after:start-[30%] after:-z-1 after:rounded-full after:animate-ping"></div>
                    </div>
                    <div class="md:col-span-5 relative">
                        <div class="tiny-one-icon-item">
                            @foreach ($randomProducts as $randomProduct)
                                    @if ($randomProduct->images->isNotEmpty())
                                        @foreach ($randomProduct->images as $image)
                                            <div class="tiny-slide">
                                                <div class="m-2 p-3 bg-white rounded-lg shadow-sm">
                                                    <a href="{{ route('produits.show', $randomProduct->id) }}" class="group relative overflow-hidden rounded-lg">
                                                        <img src="{{ asset('storage/' . $image->image_src) }}" class="rounded-lg" alt="{{ $randomProduct->nom }}">
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="tiny-slide">
                                            <div class="m-2 p-3 bg-white rounded-lg shadow-sm">
                                                <a href="{{ route('produits.show', $randomProduct->id) }}" class="group relative overflow-hidden rounded-lg">
                                                    <img src="{{ asset('storage/assets/images/items/1.jpg') }}" class="rounded-lg" alt="{{ $randomProduct->nom }}">
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                        </div>
                        <div class="overflow-hidden after:content-[''] after:absolute after:h-14 after:w-14 after:bg-violet-600/10 after:-top-[50px] after:start-[30%] after:-z-1 after:rounded-lg after:animate-[spin_10s_linear_infinite]"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
