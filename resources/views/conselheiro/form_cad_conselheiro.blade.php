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
            <h3 class="font-weight-bold py-3 mb-0">Cadastrar Conselheiro(a)</h3>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb"></div>
                <!-- [ ÍNICIO DO FORMULÁRIO PARA CADASTRAR AS INFORMAÇÕES DO TEMA ] -->
                <div class="card mb-4">
                    <h6 class="card-header">Informações Conselheiro(a)</h6>
                    <div class="card-body">
                        <form method="POST" action="{{route('conselheiro.salvar_conselheiro')}}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="form-label">Nome Conselheiro(a)</label>
                                    <input type="text" class="form-control" placeholder="Ex: Irmã Maria José" name="nome_cons">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Informe o email" name="email_cons">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="form-label">Telefone</label>
                                    <input type="text" class="form-control" placeholder="Somente números" name="telefone_cons">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Endereço</label>
                                    <input type="text" class="form-control" placeholder="Informe o Endereço" name="endereco_cons">
                                    <div class="clearfix"></div>
                                </div>    
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="form-label">Aniversário</label>
                                    <input type="date" class="form-control" name="aniversario_cons">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label">Ordenação</label>
                                    <input type="date" class="form-control" name="ordenacao_cons">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label">Chegada na Equipe</label>
                                    <input type="date" class="form-control" name="chegada_equipe">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label">Saída da Equipe</label>
                                    <input type="date" class="form-control" name="saida_equipe">
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label class="form-label">Conselheiro(a) Ativo(a)?</label>
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