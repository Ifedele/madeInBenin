{{-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Finalisez votre inscription')</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html> --}}

@include('vendeur.layouts.partials.start')

<!-- ===== Page Wrapper Start ===== -->
<div class="flex h-screen overflow-hidden">
    {{-- @include('vendeur.layouts.partials.sidebar') --}}

    {{-- @include('vendeur.layouts.partials.header') --}}

    @yield('content')
    @yield('scripts')
</div>
<!-- ===== Page Wrapper End ===== -->

<!-- page-wrapper -->


@include('vendeur.layouts.partials.end')
