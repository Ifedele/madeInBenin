@include('front.layouts.partials.start')
<div class="boxed_wrapper ltr">


    @include('front.layouts.partials.loader')


    {{-- @include('front.layouts.partials.switcher') --}}

    <!-- main header -->
    @include('front.layouts.partials.nav')
    <!-- main-header end -->


    <!-- Mobile Menu  -->
    {{-- @include('front.layouts.partials.mobile_header') --}}
    <!-- End Mobile Menu -->


   


    @yield('content')

    <!-- main-footer -->
    @include('front.layouts.partials.footer')
    <!-- main-footer end -->



     <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-violet-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
     <!-- Back to top -->


</div>


@include('front.layouts.partials.end')
