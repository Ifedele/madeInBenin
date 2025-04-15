@include('admin.layouts.partials.start')

<!-- ===== Page Wrapper Start ===== -->
<div class="flex h-screen overflow-hidden">
    @include('admin.layouts.partials.sidebar')

    @include('admin.layouts.partials.header')
        @livewireScripts
    @yield('content')
</div>
<!-- ===== Page Wrapper End ===== -->

<!-- page-wrapper -->


@include('admin.layouts.partials.end')
