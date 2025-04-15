<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container flex items-center justify-between">
        <!-- Logo container-->
        <a class="logo ps-0" href="index.html">
            <img src="{{asset('storage/assets/images/logo-icon-28.png')}}" class="inline-block sm:hidden"  alt="">
            <div class="sm:block hidden">
                <img src="{{asset('storage/assets/images/logo-dark.png')}}" class="inline-block h-7" alt="">
                <img src="{{asset('storage/assets/images/logo-white.png')}}" class="hidden h-7" alt="">
            </div>
        </a>
        <!-- End Logo container-->

        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation" class="flex items-center">
            <!-- Navigation Menu-->
            <ul class="navigation-menu !justify-start">
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Catégorie</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="index.html" class="sub-menu-item">Home One</a></li>
                        <li><a href="index-two.html" class="sub-menu-item">Home Two</a></li>
                        <li><a href="index-three.html" class="sub-menu-item">Home Three</a></li>
                        <li><a href="index-four.html" class="sub-menu-item">Home Four <span class="bg-gray-50 text-[10px] shadow-sm shadow-gray-300 font-bold px-2.5 py-0.5 rounded h-5 ms-1">Light</span></a></li>
                        <li><a href="index-five.html" class="sub-menu-item">Home Five <span class="bg-gray-50 text-[10px] shadow-sm shadow-gray-300 font-bold px-2.5 py-0.5 rounded h-5 ms-1">Light</span></a></li>
                        <li><a href="index-six.html" class="sub-menu-item">Home Six <span class="bg-gray-50 text-[10px] shadow-sm shadow-gray-300 font-bold px-2.5 py-0.5 rounded h-5 ms-1">Light</span></a></li>
                        <li><a href="index-seven.html" class="sub-menu-item">Home Seven</a></li>
                        <li><a href="index-eight.html" class="sub-menu-item">Home Eight <span class="bg-gray-50 text-[10px] shadow-sm shadow-gray-300 font-bold px-2.5 py-0.5 rounded h-5 ms-1">Light</span></a></li>
                        <li><a href="index-nine.html" class="sub-menu-item">Home Nine</a></li>
                        <li><a href="index-ten.html" class="sub-menu-item">Home Ten <span class="bg-gray-50 text-[10px] shadow-sm shadow-gray-300 font-bold px-2.5 py-0.5 rounded h-5 ms-1">Light</span></a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Explore</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="explore-one.html" class="sub-menu-item"> Explore One</a></li>
                        <li><a href="explore-two.html" class="sub-menu-item"> Explore Two</a></li>
                        <li><a href="explore-three.html" class="sub-menu-item"> Explore Three</a></li>
                        <li><a href="auction.html" class="sub-menu-item">Live Auction</a></li>
                        <li><a href="item-detail.html" class="sub-menu-item"> Item Detail</a></li>
                        <li><a href="activity.html" class="sub-menu-item"> Activities</a></li>
                        <li><a href="collections.html" class="sub-menu-item">Collections</a></li>
                        <li><a href="upload-work.html" class="sub-menu-item">Upload Works</a></li>
                    </ul>
                </li>

                <li><a href="wallet.html" class="sub-menu-item">Wallet</a></li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="aboutus.html" class="sub-menu-item">About Us</a></li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Creator </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="creators.html" class="sub-menu-item"> Creators</a></li>
                                <li><a href="creator-profile.html" class="sub-menu-item"> Creator Profile</a></li>
                                <li><a href="creator-profile-edit.html" class="sub-menu-item"> Profile Edit</a></li>
                                <li><a href="become-creator.html" class="sub-menu-item"> Become Creator</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="blogs.html" class="sub-menu-item"> Blogs</a></li>
                                <li><a href="blog-detail.html" class="sub-menu-item"> Blog Detail</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="login.html" class="sub-menu-item"> Login</a></li>
                                <li><a href="signup.html" class="sub-menu-item"> Signup</a></li>
                                <li><a href="reset-password.html" class="sub-menu-item"> Forgot Password</a></li>
                                <li><a href="lock-screen.html" class="sub-menu-item"> Lock Screen</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="comingsoon.html" class="sub-menu-item"> Coming Soon</a></li>
                                <li><a href="maintenance.html" class="sub-menu-item"> Maintenance</a></li>
                                <li><a href="error.html" class="sub-menu-item"> 404!</a></li>
                                <li><a href="thankyou.html" class="sub-menu-item"> Thank you</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Help Center </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="helpcenter-overview.html" class="sub-menu-item"> Overview</a></li>
                                <li><a href="helpcenter-faqs.html" class="sub-menu-item"> FAQs</a></li>
                                <li><a href="helpcenter-guides.html" class="sub-menu-item"> Guides</a></li>
                                <li><a href="helpcenter-support.html" class="sub-menu-item"> Support</a></li>
                            </ul>
                        </li>
                        <li><a href="terms.html" class="sub-menu-item">Terms Policy</a></li>
                        <li><a href="privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                    </ul>
                </li>

                <li><a href="contact.html" class="sub-menu-item">Contact</a></li>
            </ul><!--end navigation menu-->
        </div>
        <!--end navigation-->

         <!--Login button Start-->
         <ul class="flex items-center">
            <!-- <li class="sm:inline-block hidden mb-0"> -->
            <li class="inline-block mb-0">
                <div class="form-icon relative">
                    <i class="uil uil-search text-lg absolute top-1/2 -translate-y-1/2 start-3"></i>
                    <input type="text" class="form-input sm:w-44 w-28 ps-10 py-2 px-3 h-10 bg-transparent rounded-3xl outline-none border border-gray-200 focus:border-violet-600 focus:ring-0 bg-white" name="s" id="searchItem" placeholder="Search...">
                </div>
            </li>
            @guest

                <li class="inline-block ps-1 mb-0">
                    <a href="{{route('login')}}" class="btn btn-[14px] rounded-md font-semibold py-1.5 px-4 hover:text-violet-600"><i class="uil uil-sign-in-alt text-[16px] align-middle me-1"></i> Se connecter</a>
                </li>

            @else
                <li class="dropdown inline-block relative ps-1">
                    <button data-dropdown-toggle="dropdown" class="dropdown-toggle btn btn-icon rounded-full  flex items-center text-gray-700 dark:text-gray-400" type="button">
                        <i class="uil uil-user text-[16px] align-middle me-1"></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-48 rounded-md overflow-hidden bg-white shadow-sm hidden" onclick="event.stopPropagation();">

                        <ul class="py-2 text-start">
                            <li>
                                <a href="creator-profile.html" class="block text-[14px] font-semibold py-1.5 px-4 hover:text-violet-600"><i class="uil uil-user text-[16px] align-middle me-1"></i> Mon Profile</a>
                            </li>
                            <li>
                                <a href="{{route('logout')}}"" class="block text-[14px] font-semibold py-1.5 px-4 hover:text-violet-600"><i class="uil uil-signout text-[16px] align-middle me-1"></i> Déconnexion</a>
                            </li>
                            <li class="border-t border-gray-100 my-2"></li>

                        </ul>
                    </div>
                </li>
        </ul>
        <!--Login button End-->
            @endguest
    </div><!--end container-->
</nav><!--end header-->
