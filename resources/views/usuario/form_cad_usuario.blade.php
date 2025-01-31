@extends('layouts.main-layout')

@section('content')

@component('components.common.sidebar')
@endcomponent

<!-- [ Layout container ] Start -->
<div class="layout-container">
    @component('components.common.navbar')
    @endcomponent

    <div class="layout-content">

        <div class="container-fluid flex-grow-1 container-p-y">
            <h3 class="font-weight-bold py-3 mb-0">Cadastrar Usuário</h3>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb"></div>
                <!-- [ ÍNICIO DO FORMULÁRIO PARA CADASTRAR AS INFORMAÇÕES DO TEMA ] -->
                <div class="card mb-4">
                    <h6 class="card-header">Informações do Usuário</h6>
                    <div class="card-body">
                        <form method="POST" action="{{route('usuario.salvar_usuario')}}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="form-label">Nome</label>
                                    <input type="text" class="form-control" placeholder="Insira o seu nome" name="name">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Insira o seu email" name="email">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-label">Senha</label>
                                    <input type="password" class="form-control" placeholder="Cadastre sua senha" name="password">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label class="form-label">Usuário Ativo?</label>
                                    <select class="custom-select" name="ativo">
                                        <option>Selecionar</option>
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-label">Permissão de Super Usuário?</label>
                                    <select class="custom-select" name="super_user">
                                        <option>Selecionar</option>
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-round btn-primary">Salvar</button>
                            <a class="btn btn-round btn-secondary" href="{{route('home')}}" role="button">Cancelar</a>
                        </form>
                    </div>
                </div>
                <!-- [ FIM DO FORMULÁRIO PARA CADASTRAR AS INFORMAÇÕES DO TEMA ] --> 
        </div>

        @component('components.common.footer')
        @endcomponent
        
    </div>

</div>
<!-- [ Layout container ] End -->

@endsection