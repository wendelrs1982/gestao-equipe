<!DOCTYPE html>
<html lang="pt-br" class="material-style layout-fixed">
<head>
    <title>@yield('titulo-pagina')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Sistema para gerenciamento das Equipes de Nossa Senhora" />
    <meta name="keywords" content="ens, casal responsável, equipes de nossa senhora">
    <meta name="author" content="Wendel Ribeiro" />
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/open-iconic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/feather.css')}}">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-material.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/shreerang-material.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/uikit.css')}}">

    <!-- Libs -->
    <link rel="stylesheet" href="{{asset('assets/libs/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!-- Page -->
    <link rel="stylesheet" href="{{asset('assets/css/pages/authentication.css')}}">
</head>
<body>

    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">

            <!-- [ ESPAÇO PARA RENDERIZAR O CONTEÚDO DA TELA DE LOGIN] Start -->
            @yield('content')
            <!-- [ ESPAÇO PARA RENDERIZAR O CONTEÚDO DA TELA DE LOGIN] End -->

        </div>    
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->

    <!-- Core scripts -->
    <script src="{{asset('assets/js/pace.js')}}"></script>
    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/libs/popper/popper.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/sidenav.js')}}"></script>
    <script src="{{asset('assets/js/layout-helpers.js')}}"></script>
    <script src="{{asset('assets/js/material-ripple.js')}}"></script>

    <!-- Libs -->
    <script src="{{asset('assets/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <!-- Demo -->
    <script src="{{asset('assets/js/demo.js')}}"></script><script src="{{asset('assets/js/analytics.js')}}"></script>

    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
</body>
</html>