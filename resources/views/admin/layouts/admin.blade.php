<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/ico">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    {{-- Internal Style --}}
    @yield('css')

    <style> </style>

    <!-- Styles -->
    <link href="{{ mix('admin/css/admin.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed" style="height: auto;">
    {{-- Site wrapper --}}
    <div class="wrapper" id="app">
        {{-- Top navbar --}}
        @include('admin.partials.page-components.menu._admin-lte-top-navbar')
        @include('admin.partials.page-components.menu._admin-lte-sidebar')

        {{-- Content --}}
        <div class="content-wrapper p-2">
            @yield('content')
        </div>
    </div>

    {{-- Footer --}}
    @include('admin.partials.page-components._footer')

    {{-- JS --}}
    @include('admin.partials._app-js')

    @yield('main-script')

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    @yield('script')
</body>
</html>
