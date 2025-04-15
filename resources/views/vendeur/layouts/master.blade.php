@include('vendeur.layouts.partials.start')

<!-- ===== Page Wrapper Start ===== -->
<div class="flex h-screen overflow-hidden">
    @include('vendeur.layouts.partials.sidebar')

    @include('vendeur.layouts.partials.header')

    @yield('content')
    @yield('scripts')
</div>
<!-- ===== Page Wrapper End ===== -->

<!-- page-wrapper -->


@include('vendeur.layouts.partials.end')
