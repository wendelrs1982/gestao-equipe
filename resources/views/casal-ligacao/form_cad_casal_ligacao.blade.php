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
            <h3 class="font-weight-bold py-3 mb-0">Cadastrar Casal Ligação (CL)</h3>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb"></div>
                <!-- [ ÍNICIO DO FORMULÁRIO PARA CADASTRAR AS INFORMAÇÕES DO TEMA ] -->
                <div class="card mb-4">
                    <h6 class="card-header">Informações do Casal Ligação (CL)</h6>
                    <div class="card-body">
                        <form method="POST" action="{{route('casal-ligacao.salvar_casal_ligacao')}}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label class="form-label">Nome do Casal Ligação</label>
                                    <input type="text" class="form-control" placeholder="Ex: Maria e José" name="casal_ligacao">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="form-label">Ano do Mandato</label>
                                    <select class="custom-select" name="ano">
                                        <option>Selecionar</option>
                                        <option value="2025">2025</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="form-label">CL Ativo?</label>
                                    <select class="custom-select" name="ativo">
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