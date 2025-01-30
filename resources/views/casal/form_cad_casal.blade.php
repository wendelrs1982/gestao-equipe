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
            <h3 class="font-weight-bold py-3 mb-0">Cadastrar Casal da Equipe</h3>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb"></div>
                <!-- [ ÍNICIO DO FORMULÁRIO PARA CADASTRAR AS INFORMAÇÕES CASAL ] -->
                <div class="card mb-4">
                    <h6 class="card-header">Informações do Casal</h6>
                    <div class="card-body">
                        <form method="POST" action="{{route('casal.salvar_casal')}}">
                        @csrf
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="form-label">Nome do Casal</label>
                                    <input type="text" class="form-control" placeholder="Ex: Maria e José" name="nome_membro">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label">Aniversário de Casamento</label>
                                    <input type="date" class="form-control" name="aniversario_casamento">
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
                                <div class="form-group col-md-12">
                                    <label class="form-label">Endereço</label>
                                    <input type="text" class="form-control" placeholder="Informe o Endereço" name="endereco">
                                    <div class="clearfix"></div>
                                </div>    
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="form-label">Aniversário Dela</label>
                                    <input type="date" class="form-control" name="aniversario_ela">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label">Email Dela</label>
                                    <input type="email" class="form-control" placeholder="Informe o Email" name="email_ela">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label">Telefone Dela</label>
                                    <input type="text" class="form-control" placeholder="Somente Números" name="telefone_ela">
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="form-label">Aniversário Dele</label>
                                    <input type="date" class="form-control" name="aniversario_ele">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label">Email Dele</label>
                                    <input type="email" class="form-control" placeholder="Informe o Email" name="email_ele">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label">Telefone Dele</label>
                                    <input type="text" class="form-control" placeholder="Somente Números" name="telefone_ele">
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label class="form-label">Ativo?</label>
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
                <!-- [ FIM DO FORMULÁRIO PARA CADASTRAR AS INFORMAÇÕES CASAL ] --> 
        </div>
        
        @component('components.common.footer')
        @endcomponent
        
    </div>

</div>
<!-- [ Layout container ] End -->

@endsection