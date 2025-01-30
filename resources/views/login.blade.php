@extends('layouts.main-layout')

@section('titulo-pagina', 'SysCre - Login')

@section('content')

<div class="authentication-wrapper authentication-1 px-4">
    <div class="authentication-inner py-5">

        <!-- [ Logo ] Start -->
        <div class="d-flex justify-content-center align-items-center" style="width:69%;">
            <div class="ui-w-60">
                <div class="w-100 position-relative">
                    <img src="{{asset('assets/img/logo-ens.webp')}}" alt="Brand Logo" class="img-fluid-logo-ens" >
                </div>
            </div>
        </div>
        <!-- [ Logo ] End -->

        <!-- [ Form ] Start -->
        <form class="my-5" method="post">
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="text" class="form-control">
                <div class="clearfix"></div>
            </div>
            <div class="form-group">
                <label class="form-label d-flex justify-content-between align-items-end">
                    <span>Senha</span>
                    <a href="pages_authentication_password-reset.html" class="d-block small">Esqueceu a senha?</a>
                </label>
                <input type="password" class="form-control">
                <div class="clearfix"></div>
            </div>
            <div class="d-flex justify-content-between align-items-center m-0">
                <label class="custom-control custom-checkbox m-0">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-label">Lembrar-me</span>
                </label>
                <!-- <button type="submit" class="btn btn-primary">Acessar</button> -->
                <a class="btn btn-primary" href="{{route('home')}}" role="button">Acessar</a>
            </div>
        </form>
        <!-- [ Form ] End -->

    </div>
</div>

@endsection