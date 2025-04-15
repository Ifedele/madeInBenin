@extends('front.layouts.master')
@section('content')
        <section class="relative md:py-24 py-16">
            <div class="container">
                <div class="md:flex justify-between items-center">
                    <div class="md:w-10/12 md:text-start text-center">
                        <h3 class="md:text-[30px] text-[26px] font-semibold mb-4">Best Creators & Sellers of
                            <select class="form-select z-2 text-violet-600 focus-visible:outline-none bg-transparent border-0 focus:ring-transparent" aria-label="Default select example">
                                <option class="text-lg font-medium">Week</option>
                                <option class="text-lg font-medium">Month</option>
                                <option class="text-lg font-medium">Year</option>
                            </select>
                        </h3>
                        <p class="text-slate-400">Best sellers of the week's NFTs</p>
                    </div>
                    <div class="md:w-2/12 text-end md:block hidden">
                        <a href="creators.html" class="btn btn-link text-[16px] font-medium hover:text-violet-600 after:bg-violet-600 duration-500 ease-in-out">All Creators <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
                    <div class="flex justify-between items-center p-3 rounded-md bg-white shadow-sm">
                        <div class="flex items-center">
                            <div class="relative inline-block">
                                <img src="{{asset('storage/assets/images/avatar/1.jpg')}}" class="h-16 rounded-md" alt="">
                                <i class="mdi mdi-check-decagram text-emerald-600 text-lg absolute -top-2 -end-2"></i>
                            </div>

                            <div class="ms-3">
                                <a href="creator-profile.html" class="font-semibold block hover:text-violet-600">Steven Townsend</a>
                                <span class="text-slate-400 text-sm block mt-0.5">@StreetBoy</span>
                            </div>
                        </div>

                        <a href="#" class="btn btn-icon rounded-full bg-violet-600/5 hover:bg-violet-600 border-violet-600/10 hover:border-violet-600 text-violet-600 hover:text-white"><i class="uil uil-user-plus text-[20px]"></i></a>
                    </div>
                    <!--end content-->

                    <div class="flex justify-between items-center p-3 rounded-md bg-white shadow-sm">
                        <div class="flex items-center">
                            <div class="relative inline-block">
                                <img src="{{asset('storage/assets/images/avatar/2.jpg')}}" class="h-16 rounded-md" alt="">
                                <i class="mdi mdi-check-decagram text-emerald-600 text-lg absolute -top-2 -end-2"></i>
                            </div>

                            <div class="ms-3">
                                <a href="creator-profile.html" class="font-semibold block hover:text-violet-600">Tiffany Betancourt</a>
                                <span class="text-slate-400 text-sm block mt-0.5">@CutieGirl</span>
                            </div>
                        </div>

                        <a href="#" class="btn btn-icon rounded-full bg-violet-600/5 hover:bg-violet-600 border-violet-600/10 hover:border-violet-600 text-violet-600 hover:text-white"><i class="uil uil-user-plus text-[20px]"></i></a>
                    </div>
                    <!--end content-->

                    <div class="flex justify-between items-center p-3 rounded-md bg-white shadow-sm">
                        <div class="flex items-center">
                            <div class="relative inline-block">
                                <img src="{{asset('storage/assets/images/items/3.gif')}}" class="h-16 rounded-md" alt="">
                                <i class="mdi mdi-check-decagram text-emerald-600 text-lg absolute -top-2 -end-2"></i>
                            </div>

                            <div class="ms-3">
                                <a href="creator-profile.html" class="font-semibold block hover:text-violet-600">Jacqueline Burns</a>
                                <span class="text-slate-400 text-sm block mt-0.5">@ButterFly</span>
                            </div>
                        </div>

                        <a href="#" class="btn btn-icon rounded-full bg-violet-600/5 hover:bg-violet-600 border-violet-600/10 hover:border-violet-600 text-violet-600 hover:text-white"><i class="uil uil-user-plus text-[20px]"></i></a>
                    </div>
                    <!--end content-->

                    <div class="flex justify-between items-center p-3 rounded-md bg-white shadow-sm">
                        <div class="flex items-center">
                            <div class="relative inline-block">
                                <img src="{{asset('storage/assets/images/avatar/3.jpg')}}" class="h-16 rounded-md" alt="">
                                <i class="mdi mdi-check-decagram text-emerald-600 text-lg absolute -top-2 -end-2"></i>
                            </div>

                            <div class="ms-3">
                                <a href="creator-profile.html" class="font-semibold block hover:text-violet-600">Mari Harrington</a>
                                <span class="text-slate-400 text-sm block mt-0.5">@NorseQueen</span>
                            </div>
                        </div>

                        <a href="#" class="btn btn-icon rounded-full bg-violet-600/5 hover:bg-violet-600 border-violet-600/10 hover:border-violet-600 text-violet-600 hover:text-white"><i class="uil uil-user-plus text-[20px]"></i></a>
                    </div>
                    <!--end content-->

                    <div class="flex justify-between items-center p-3 rounded-md bg-white shadow-sm">
                        <div class="flex items-center">
                            <div class="relative inline-block">
                                <img src="{{asset('storage/assets/images/avatar/4.jpg')}}" class="h-16 rounded-md" alt="">
                                <i class="mdi mdi-check-decagram text-emerald-600 text-lg absolute -top-2 -end-2"></i>
                            </div>

                            <div class="ms-3">
                                <a href="creator-profile.html" class="font-semibold block hover:text-violet-600">Floyd Glasgow</a>
                                <span class="text-slate-400 text-sm block mt-0.5">@BigBull</span>
                            </div>
                        </div>

                        <a href="#" class="btn btn-icon rounded-full bg-violet-600/5 hover:bg-violet-600 border-violet-600/10 hover:border-violet-600 text-violet-600 hover:text-white"><i class="uil uil-user-plus text-[20px]"></i></a>
                    </div>
                    <!--end content-->

                    <div class="flex justify-between items-center p-3 rounded-md bg-white shadow-sm">
                        <div class="flex items-center">
                            <div class="relative inline-block">
                                <img src="{{asset('storage/assets/images/avatar/5.jpg')}}" class="h-16 rounded-md" alt="">
                                <i class="mdi mdi-check-decagram text-emerald-600 text-lg absolute -top-2 -end-2"></i>
                            </div>

                            <div class="ms-3">
                                <a href="creator-profile.html" class="font-semibold block hover:text-violet-600">Donna Schultz</a>
                                <span class="text-slate-400 text-sm block mt-0.5">@Angel</span>
                            </div>
                        </div>

                        <a href="#" class="btn btn-icon rounded-full bg-violet-600/5 hover:bg-violet-600 border-violet-600/10 hover:border-violet-600 text-violet-600 hover:text-white"><i class="uil uil-user-plus text-[20px]"></i></a>
                    </div>
                    <!--end content-->

                    <div class="flex justify-between items-center p-3 rounded-md bg-white shadow-sm">
                        <div class="flex items-center">
                            <div class="relative inline-block">
                                <img src="{{asset('storage/assets/images/avatar/6.jpg')}}" class="h-16 rounded-md" alt="">
                                <i class="mdi mdi-check-decagram text-emerald-600 text-lg absolute -top-2 -end-2"></i>
                            </div>

                            <div class="ms-3">
                                <a href="creator-profile.html" class="font-semibold block hover:text-violet-600">Joshua Morris</a>
                                <span class="text-slate-400 text-sm block mt-0.5">@CrazyAnyone</span>
                            </div>
                        </div>

                        <a href="#" class="btn btn-icon rounded-full bg-violet-600/5 hover:bg-violet-600 border-violet-600/10 hover:border-violet-600 text-violet-600 hover:text-white"><i class="uil uil-user-plus text-[20px]"></i></a>
                    </div>
                    <!--end content-->

                    <div class="flex justify-between items-center p-3 rounded-md bg-white shadow-sm">
                        <div class="flex items-center">
                            <div class="relative inline-block">
                                <img src="{{asset('storage/assets/images/items/5.gif')}}" class="h-16 rounded-md" alt="">
                                <i class="mdi mdi-check-decagram text-emerald-600 text-lg absolute -top-2 -end-2"></i>
                            </div>

                            <div class="ms-3">
                                <a href="creator-profile.html" class="font-semibold block hover:text-violet-600">Rosaria Vargas</a>
                                <span class="text-slate-400 text-sm block mt-0.5">@Princess</span>
                            </div>
                        </div>

                        <a href="#" class="btn btn-icon rounded-full bg-violet-600/5 hover:bg-violet-600 border-violet-600/10 hover:border-violet-600 text-violet-600 hover:text-white"><i class="uil uil-user-plus text-[20px]"></i></a>
                    </div>
                    <!--end content-->

                    <div class="flex justify-between items-center p-3 rounded-md bg-white shadow-sm">
                        <div class="flex items-center">
                            <div class="relative inline-block">
                                <img src="{{asset('storage/assets/images/avatar/7.jpg')}}" class="h-16 rounded-md" alt="">
                                <i class="mdi mdi-check-decagram text-emerald-600 text-lg absolute -top-2 -end-2"></i>
                            </div>

                            <div class="ms-3">
                                <a href="creator-profile.html" class="font-semibold block hover:text-violet-600">Carl Williams</a>
                                <span class="text-slate-400 text-sm block mt-0.5">@LooserBad</span>
                            </div>
                        </div>

                        <a href="#" class="btn btn-icon rounded-full bg-violet-600/5 hover:bg-violet-600 border-violet-600/10 hover:border-violet-600 text-violet-600 hover:text-white"><i class="uil uil-user-plus text-[20px]"></i></a>
                    </div>
                    <!--end content-->
                </div><!--end grid-->

                <div class="grid grid-cols-1 mt-6 md:hidden">
                    <div class="text-center">
                        <a href="creators.html" class="btn btn-link text-[16px] font-medium hover:text-violet-600 after:bg-violet-600 duration-500 ease-in-out">All Creators <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container md:mt-24 mt-16">
                <div class="grid grid-cols-1 text-center">
                    <h3 class="mb-4 md:text-3xl text-2xl md:leading-snug leading-snug font-semibold">Giglink is a web3 destination.</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">We are a huge marketplace dedicated to connecting great artists of all Giglink with their fans and unique token collectors!</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
                    <!-- Content -->
                    <div class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                        <div class="relative overflow-hidden text-transparent -m-3">
                            <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                            <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                <i class="uil uil-sitemap"></i>
                            </div>
                        </div>

                        <div class="mt-6">
                            <a href="#" class="text-lg h5 font-semibold transition duration-500 ease-in-out hover:text-violet-600">Create Item</a>
                            <p class="text-slate-400 transition duration-500 ease-in-out mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                        </div>
                    </div>
                    <!-- Content -->

                    <!-- Content -->
                    <div class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                        <div class="relative overflow-hidden text-transparent -m-3">
                            <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                            <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                <i class="uil uil-layers"></i>
                            </div>
                        </div>

                        <div class="mt-6">
                            <a href="#" class="text-lg h5 font-semibold transition duration-500 ease-in-out hover:text-violet-600">Collect</a>
                            <p class="text-slate-400 transition duration-500 ease-in-out mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                        </div>
                    </div>
                    <!-- Content -->

                    <!-- Content -->
                    <div class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                        <div class="relative overflow-hidden text-transparent -m-3">
                            <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                            <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                <i class="uil uil-camera-plus"></i>
                            </div>
                        </div>

                        <div class="mt-6">
                            <a href="#" class="text-lg h5 font-semibold transition duration-500 ease-in-out hover:text-violet-600">Sell Item</a>
                            <p class="text-slate-400 transition duration-500 ease-in-out mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                        </div>
                    </div>
                    <!-- Content -->
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container md:mt-24 mt-16">
                <div class="grid grid-cols-1 text-center">
                    <h3 class="md:text-[30px] text-[26px] font-semibold">Explore Hot Items</h3>
                </div><!--end grid-->

                <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
                    <div class="group relative p-2 rounded-lg bg-white border border-gray-100 hover:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 h-fit">
                        <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-violet-600 rounded-lg -mt-1 group-hover:-mt-2 -ms-1 group-hover:-ms-2 h-[98%] w-[98%] -z-1 transition-all duration-500"></div>
                        <div class="relative overflow-hidden">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="{{asset('storage/assets/images/items/1.jpg')}}" class="rounded-lg shadow-md group-hover:scale-110 transition-all duration-500" alt="">
                            </div>

                            <div class="absolute -bottom-20 group-hover:bottom-1/2 group-hover:translate-y-1/2 start-0 end-0 mx-auto text-center transition-all duration-500">
                                <a href="item-detail.html" class="btn btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-lightning-bolt"></i> Buy Now</a>
                            </div>

                            <div class="absolute top-2 end-2 opacity-0 group-hover:opacity-100 transition-all duration-500">
                                <a href="javascript:void(0)" class="btn btn-icon btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-plus"></i></a>
                            </div>
                        </div>

                        <div class="mt-3">
                            <div class="flex items-center">
                                <img src="{{asset('storage/assets/images/avatar/1.jpg')}}" class="rounded-full h-8 w-8" alt="">
                                <a href="creator-profile.html" class="ms-2 text-[15px] font-medium text-slate-400 hover:text-violet-600">@StreetBoy</a>
                            </div>

                            <div class="my-3">
                                <a href="item-detail.html" class="font-semibold hover:text-violet-600">Genuine Undead #3902</a>
                            </div>

                            <div class="flex justify-between p-2 bg-gray-50 rounded-lg shadow-sm">
                                <div>
                                    <span class="text-[16px] font-medium text-slate-400 block">Price</span>
                                    <span class="text-[16px] font-semibold block"><i class="mdi mdi-ethereum"></i> 3.5 ETH</span>
                                </div>

                                <div>
                                    <span class="text-[16px] font-medium text-slate-400 block">Highest Bid</span>
                                    <span class="text-[16px] font-semibold block"><i class="mdi mdi-ethereum"></i> 3.55 ETH</span>
                                </div>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group relative p-2 rounded-lg bg-white border border-gray-100 hover:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 h-fit">
                        <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-violet-600 rounded-lg -mt-1 group-hover:-mt-2 -ms-1 group-hover:-ms-2 h-[98%] w-[98%] -z-1 transition-all duration-500"></div>
                        <div class="relative overflow-hidden">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="{{asset('storage/assets/images/items/2.gif')}}" class="rounded-lg shadow-md group-hover:scale-110 transition-all duration-500" alt="">
                            </div>

                            <div class="absolute -bottom-20 group-hover:bottom-1/2 group-hover:translate-y-1/2 start-0 end-0 mx-auto text-center transition-all duration-500">
                                <a href="item-detail.html" class="btn btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-lightning-bolt"></i> Buy Now</a>
                            </div>

                            <div class="absolute top-2 end-2 opacity-0 group-hover:opacity-100 transition-all duration-500">
                                <a href="javascript:void(0)" class="btn btn-icon btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-plus"></i></a>
                            </div>

                            <div class="absolute bottom-2 start-0 end-0 mx-auto text-center bg-gradient-to-r from-violet-600 to-red-600 text-white inline-table text-lg px-3 rounded-full">
                                <i class="uil uil-clock align-middle me-1"></i> <small id="auction-item-1" class="font-bold"></small>
                            </div>
                        </div>

                        <div class="mt-3">
                            <div class="flex items-center">
                                <img src="{{asset('storage/assets/images/avatar/2.jpg')}}" class="rounded-full h-8 w-8" alt="">
                                <a href="creator-profile.html" class="ms-2 text-[15px] font-medium text-slate-400 hover:text-violet-600">@CutieGirl</a>
                            </div>

                            <div class="my-3">
                                <a href="item-detail.html" class="font-semibold hover:text-violet-600">Windchime #768</a>
                            </div>

                            <div class="flex justify-between p-2 bg-gray-50 rounded-lg shadow-sm">
                                <div>
                                    <span class="text-[16px] font-medium text-slate-400 block">Price</span>
                                    <span class="text-[16px] font-semibold block"><i class="mdi mdi-ethereum"></i> 3.5 ETH</span>
                                </div>

                                <div>
                                    <span class="text-[16px] font-medium text-slate-400 block">Highest Bid</span>
                                    <span class="text-[16px] font-semibold block"><i class="mdi mdi-ethereum"></i> 3.55 ETH</span>
                                </div>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group relative p-2 rounded-lg bg-white border border-gray-100 hover:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 h-fit">
                        <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-violet-600 rounded-lg -mt-1 group-hover:-mt-2 -ms-1 group-hover:-ms-2 h-[98%] w-[98%] -z-1 transition-all duration-500"></div>
                        <div class="relative overflow-hidden">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="{{asset('storage/assets/images/items/2.jpg')}}" class="rounded-lg shadow-md group-hover:scale-110 transition-all duration-500" alt="">
                            </div>

                            <div class="absolute -bottom-20 group-hover:bottom-1/2 group-hover:translate-y-1/2 start-0 end-0 mx-auto text-center transition-all duration-500">
                                <a href="item-detail.html" class="btn btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-lightning-bolt"></i> Buy Now</a>
                            </div>

                            <div class="absolute top-2 end-2 opacity-0 group-hover:opacity-100 transition-all duration-500">
                                <a href="javascript:void(0)" class="btn btn-icon btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-plus"></i></a>
                            </div>
                        </div>

                        <div class="mt-3">
                            <div class="flex items-center">
                                <img src="{{asset('storage/assets/images/items/3.gif')}}" class="rounded-full h-8 w-8" alt="">
                                <a href="creator-profile.html" class="ms-2 text-[15px] font-medium text-slate-400 hover:text-violet-600">@ButterFly</a>
                            </div>

                            <div class="my-3">
                                <a href="item-detail.html" class="font-semibold hover:text-violet-600">Probably A Label #3277</a>
                            </div>

                            <div class="flex justify-between p-2 bg-gray-50 rounded-lg shadow-sm">
                                <div>
                                    <span class="text-[16px] font-medium text-slate-400 block">Price</span>
                                    <span class="text-[16px] font-semibold block"><i class="mdi mdi-ethereum"></i> 3.5 ETH</span>
                                </div>

                                <div>
                                    <span class="text-[16px] font-medium text-slate-400 block">Highest Bid</span>
                                    <span class="text-[16px] font-semibold block"><i class="mdi mdi-ethereum"></i> 3.55 ETH</span>
                                </div>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group relative p-2 rounded-lg bg-white border border-gray-100 hover:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 h-fit">
                        <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-violet-600 rounded-lg -mt-1 group-hover:-mt-2 -ms-1 group-hover:-ms-2 h-[98%] w-[98%] -z-1 transition-all duration-500"></div>
                        <div class="relative overflow-hidden">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="{{asset('storage/assets/images/items/3.jpg')}}" class="rounded-lg shadow-md group-hover:scale-110 transition-all duration-500" alt="">
                            </div>

                            <div class="absolute -bottom-20 group-hover:bottom-1/2 group-hover:translate-y-1/2 start-0 end-0 mx-auto text-center transition-all duration-500">
                                <a href="item-detail.html" class="btn btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-lightning-bolt"></i> Buy Now</a>
                            </div>

                            <div class="absolute top-2 end-2 opacity-0 group-hover:opacity-100 transition-all duration-500">
                                <a href="javascript:void(0)" class="btn btn-icon btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-plus"></i></a>
                            </div>
                        </div>

                        <div class="mt-3">
                            <div class="flex items-center">
                                <img src="{{asset('storage/assets/images/avatar/3.jpg')}}" class="rounded-full h-8 w-8" alt="">
                                <a href="creator-profile.html" class="ms-2 text-[15px] font-medium text-slate-400 hover:text-violet-600">@NorseQueen</a>
                            </div>

                            <div class="my-3">
                                <a href="item-detail.html" class="font-semibold hover:text-violet-600">Probably A Label #1711</a>
                            </div>

                            <div class="flex justify-between p-2 bg-gray-50 rounded-lg shadow-sm">
                                <div>
                                    <span class="text-[16px] font-medium text-slate-400 block">Price</span>
                                    <span class="text-[16px] font-semibold block"><i class="mdi mdi-ethereum"></i> 3.5 ETH</span>
                                </div>

                                <div>
                                    <span class="text-[16px] font-medium text-slate-400 block">Highest Bid</span>
                                    <span class="text-[16px] font-semibold block"><i class="mdi mdi-ethereum"></i> 3.55 ETH</span>
                                </div>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group relative p-2 rounded-lg bg-white border border-gray-100 hover:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 h-fit">
                        <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-violet-600 rounded-lg -mt-1 group-hover:-mt-2 -ms-1 group-hover:-ms-2 h-[98%] w-[98%] -z-1 transition-all duration-500"></div>
                        <div class="relative overflow-hidden">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="{{asset('storage/assets/images/items/3.gif')}}" class="rounded-lg shadow-md group-hover:scale-110 transition-all duration-500" alt="">
                            </div>

                            <div class="absolute -bottom-20 group-hover:bottom-1/2 group-hover:translate-y-1/2 start-0 end-0 mx-auto text-center transition-all duration-500">
                                <a href="item-detail.html" class="btn btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-lightning-bolt"></i> Buy Now</a>
                            </div>

                            <div class="absolute top-2 end-2 opacity-0 group-hover:opacity-100 transition-all duration-500">
                                <a href="javascript:void(0)" class="btn btn-icon btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-plus"></i></a>
                            </div>
                        </div>

                        <div class="mt-3">
                            <div class="flex items-center">
                                <img src="{{asset('storage/assets/images/avatar/4.jpg')}}" class="rounded-full h-8 w-8" alt="">
                                <a href="creator-profile.html" class="ms-2 text-[15px] font-medium text-slate-400 hover:text-violet-600">@BigBull</a>
                            </div>

                            <div class="my-3">
                                <a href="item-detail.html" class="font-semibold hover:text-violet-600">Shibuya Scramble Punks</a>
                            </div>

                            <div class="flex justify-between p-2 bg-gray-50 rounded-lg shadow-sm">
                                <div>
                                    <span class="text-[16px] font-medium text-slate-400 block">Price</span>
                                    <span class="text-[16px] font-semibold block"><i class="mdi mdi-ethereum"></i> 3.5 ETH</span>
                                </div>

                                <div>
                                    <span class="text-[16px] font-medium text-slate-400 block">Highest Bid</span>
                                    <span class="text-[16px] font-semibold block"><i class="mdi mdi-ethereum"></i> 3.55 ETH</span>
                                </div>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group relative p-2 rounded-lg bg-white border border-gray-100 hover:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 h-fit">
                        <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-violet-600 rounded-lg -mt-1 group-hover:-mt-2 -ms-1 group-hover:-ms-2 h-[98%] w-[98%] -z-1 transition-all duration-500"></div>
                        <div class="relative overflow-hidden">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="{{asset('storage/assets/images/items/4.jpg')}}" class="rounded-lg shadow-md group-hover:scale-110 transition-all duration-500" alt="">
                            </div>

                            <div class="absolute -bottom-20 group-hover:bottom-1/2 group-hover:translate-y-1/2 start-0 end-0 mx-auto text-center transition-all duration-500">
                                <a href="item-detail.html" class="btn btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-lightning-bolt"></i> Buy Now</a>
                            </div>

                            <div class="absolute top-2 end-2 opacity-0 group-hover:opacity-100 transition-all duration-500">
                                <a href="javascript:void(0)" class="btn btn-icon btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-plus"></i></a>
                            </div>
                        </div>

                        <div class="mt-3">
                            <div class="flex items-center">
                                <img src="{{asset('storage/assets/images/avatar/5.jpg')}}" class="rounded-full h-8 w-8" alt="">
                                <a href="creator-profile.html" class="ms-2 text-[15px] font-medium text-slate-400 hover:text-violet-600">@Angel</a>
                            </div>

                            <div class="my-3">
                                <a href="item-detail.html" class="font-semibold hover:text-violet-600">Probably A Label #650</a>
                            </div>

                            <div class="flex justify-between p-2 bg-gray-50 rounded-lg shadow-sm">
                                <div>
                                    <span class="text-[16px] font-medium text-slate-400 block">Price</span>
                                    <span class="text-[16px] font-semibold block"><i class="mdi mdi-ethereum"></i> 3.5 ETH</span>
                                </div>

                                <div>
                                    <span class="text-[16px] font-medium text-slate-400 block">Highest Bid</span>
                                    <span class="text-[16px] font-semibold block"><i class="mdi mdi-ethereum"></i> 3.55 ETH</span>
                                </div>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group relative p-2 rounded-lg bg-white border border-gray-100 hover:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 h-fit">
                        <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-violet-600 rounded-lg -mt-1 group-hover:-mt-2 -ms-1 group-hover:-ms-2 h-[98%] w-[98%] -z-1 transition-all duration-500"></div>
                        <div class="relative overflow-hidden">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="{{asset('storage/assets/images/items/5.jpg')}}" class="rounded-lg shadow-md group-hover:scale-110 transition-all duration-500" alt="">
                            </div>

                            <div class="absolute -bottom-20 group-hover:bottom-1/2 group-hover:translate-y-1/2 start-0 end-0 mx-auto text-center transition-all duration-500">
                                <a href="item-detail.html" class="btn btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-lightning-bolt"></i> Buy Now</a>
                            </div>

                            <div class="absolute top-2 end-2 opacity-0 group-hover:opacity-100 transition-all duration-500">
                                <a href="javascript:void(0)" class="btn btn-icon btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-plus"></i></a>
                            </div>

                            <div class="absolute bottom-2 start-0 end-0 mx-auto text-center bg-gradient-to-r from-violet-600 to-red-600 text-white inline-table text-lg px-3 rounded-full">
                                <i class="uil uil-clock align-middle me-1"></i> <small id="auction-item-5" class="font-bold"></small>
                            </div>
                        </div>

                        <div class="mt-3">
                            <div class="flex items-center">
                                <img src="{{asset('storage/assets/images/avatar/6.jpg')}}" class="rounded-full h-8 w-8" alt="">
                                <a href="creator-profile.html" class="ms-2 text-[15px] font-medium text-slate-400 hover:text-violet-600">@CrazyAnyone</a>
                            </div>

                            <div class="my-3">
                                <a href="item-detail.html" class="font-semibold hover:text-violet-600">Looki#0147</a>
                            </div>

                            <div class="flex justify-between p-2 bg-gray-50 rounded-lg shadow-sm">
                                <div>
                                    <span class="text-[16px] font-medium text-slate-400 block">Price</span>
                                    <span class="text-[16px] font-semibold block"><i class="mdi mdi-ethereum"></i> 3.5 ETH</span>
                                </div>

                                <div>
                                    <span class="text-[16px] font-medium text-slate-400 block">Highest Bid</span>
                                    <span class="text-[16px] font-semibold block"><i class="mdi mdi-ethereum"></i> 3.55 ETH</span>
                                </div>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group relative p-2 rounded-lg bg-white border border-gray-100 hover:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 h-fit">
                        <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-violet-600 rounded-lg -mt-1 group-hover:-mt-2 -ms-1 group-hover:-ms-2 h-[98%] w-[98%] -z-1 transition-all duration-500"></div>
                        <div class="relative overflow-hidden">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="{{asset('storage/assets/images/items/6.jpg')}}" class="rounded-lg shadow-md group-hover:scale-110 transition-all duration-500" alt="">
                            </div>

                            <div class="absolute -bottom-20 group-hover:bottom-1/2 group-hover:translate-y-1/2 start-0 end-0 mx-auto text-center transition-all duration-500">
                                <a href="item-detail.html" class="btn btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-lightning-bolt"></i> Buy Now</a>
                            </div>

                            <div class="absolute top-2 end-2 opacity-0 group-hover:opacity-100 transition-all duration-500">
                                <a href="javascript:void(0)" class="btn btn-icon btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-plus"></i></a>
                            </div>
                        </div>

                        <div class="mt-3">
                            <div class="flex items-center">
                                <img src="{{asset('storage/assets/images/items/5.gif')}}" class="rounded-full h-8 w-8" alt="">
                                <a href="creator-profile.html" class="ms-2 text-[15px] font-medium text-slate-400 hover:text-violet-600">@Princess</a>
                            </div>

                            <div class="my-3">
                                <a href="item-detail.html" class="font-semibold hover:text-violet-600">Poob #285</a>
                            </div>

                            <div class="flex justify-between p-2 bg-gray-50 rounded-lg shadow-sm">
                                <div>
                                    <span class="text-[16px] font-medium text-slate-400 block">Price</span>
                                    <span class="text-[16px] font-semibold block"><i class="mdi mdi-ethereum"></i> 3.5 ETH</span>
                                </div>

                                <div>
                                    <span class="text-[16px] font-medium text-slate-400 block">Highest Bid</span>
                                    <span class="text-[16px] font-semibold block"><i class="mdi mdi-ethereum"></i> 3.55 ETH</span>
                                </div>
                            </div>
                        </div>
                    </div><!--end content-->
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container lg:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-3xl text-2xl md:leading-snug leading-snug font-semibold">Latest Blog or News</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">We are a huge marketplace dedicated to connecting great artists of all Giglink with their fans and unique token collectors!</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                    <div class="group relative overflow-hidden bg-white rounded-md shadow-sm hover:shadow-md transition-all duration-500">
                        <img src="{{asset('storage/assets/images/blog/01.jpg')}}" alt="">

                        <div class="relative p-6">
                            <div class="absolute start-6 -top-4">
                                <span class="bg-violet-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5">Arts</span>
                            </div>

                            <div class="">
                                <div class="flex mb-4">
                                    <span class="text-slate-400 text-[16px]"><i class="uil uil-calendar-alt text-slate-900 me-2"></i>20th October, 2022</span>
                                    <span class="text-slate-400 text-[16px] ms-3"><i class="uil uil-clock text-slate-900 me-2"></i>5 min read</span>
                                </div>

                                <a href="blog-detail.html" class="title text-lg font-medium hover:text-violet-600 duration-500 ease-in-out">Mindfulness Activities for Kids & Toddlers with NFT</a>

                                <div class="flex justify-between mt-4">
                                    <a href="blog-detail.html" class="btn btn-link text-[16px] font-medium hover:text-violet-600 after:bg-violet-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                    <span class="text-slate-400 text-[16px]">by <a href="creator-profile.html" class="text-slate-900 hover:text-violet-600 font-medium">@StreetBoy</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end content-->

                    <div class="group relative overflow-hidden bg-white rounded-md shadow-sm hover:shadow-md transition-all duration-500">
                        <img src="{{asset('storage/assets/images/blog/02.jpg')}}" alt="">

                        <div class="relative p-6">
                            <div class="absolute start-6 -top-4">
                                <span class="bg-violet-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5">Illustration</span>
                            </div>

                            <div class="">
                                <div class="flex mb-4">
                                    <span class="text-slate-400 text-[16px]"><i class="uil uil-calendar-alt text-slate-900 me-2"></i>20th October, 2022</span>
                                    <span class="text-slate-400 text-[16px] ms-3"><i class="uil uil-clock text-slate-900 me-2"></i>5 min read</span>
                                </div>

                                <a href="blog-detail.html" class="title text-lg font-medium hover:text-violet-600 duration-500 ease-in-out">Save Thousands Of Lives Through This NFT</a>

                                <div class="flex justify-between mt-4">
                                    <a href="blog-detail.html" class="btn btn-link text-[16px] font-medium hover:text-violet-600 after:bg-violet-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                    <span class="text-slate-400 text-[16px]">by <a href="creator-profile.html" class="text-slate-900 hover:text-violet-600 font-medium">@CutieGirl</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end content-->

                    <div class="group relative overflow-hidden bg-white rounded-md shadow-sm hover:shadow-md transition-all duration-500">
                        <img src="{{asset('storage/assets/images/blog/03.jpg')}}" alt="">

                        <div class="relative p-6">
                            <div class="absolute start-6 -top-4">
                                <span class="bg-violet-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5">Music</span>
                            </div>

                            <div class="">
                                <div class="flex mb-4">
                                    <span class="text-slate-400 text-[16px]"><i class="uil uil-calendar-alt text-slate-900 me-2"></i>20th October, 2022</span>
                                    <span class="text-slate-400 text-[16px] ms-3"><i class="uil uil-clock text-slate-900 me-2"></i>5 min read</span>
                                </div>

                                <a href="blog-detail.html" class="title text-lg font-medium hover:text-violet-600 duration-500 ease-in-out">A place where technology meets craftsmanship</a>

                                <div class="flex justify-between mt-4">
                                    <a href="blog-detail.html" class="btn btn-link text-[16px] font-medium hover:text-violet-600 after:bg-violet-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                    <span class="text-slate-400 text-[16px]">by <a href="creator-profile.html" class="text-slate-900 hover:text-violet-600 font-medium">@ButterFly</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end content-->
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container md:mt-24 mt-16">
                <div class="grid grid-cols-1 text-center">
                    <h3 class="mb-4 md:text-3xl text-2xl md:leading-snug leading-snug font-semibold">Have Question ? Get in touch!</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">We are a huge marketplace dedicated to connecting great artists of all Giglink with their fans and unique token collectors!</p>

                    <div class="mt-6">
                        <a href="helpcenter-support.html" class="btn bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-full me-2 mt-2"><i class="uil uil-phone"></i> Contact us</a>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->
@endsection


