@extends('layouts.main-layout')

@section('titulo-pagina', 'SysCre - Página Inicial')
@section('content')

@component('components.common.sidebar')
@endcomponent

<!-- [ Layout container ] Start -->
<div class="layout-container">
    @component('components.common.navbar')
    @endcomponent

    <div class="layout-content">

        @component('components.dash')
        @endcomponent

        @component('components.common.footer')
        @endcomponent

    </div>

</div>
<!-- [ Layout container ] End -->

@endsection