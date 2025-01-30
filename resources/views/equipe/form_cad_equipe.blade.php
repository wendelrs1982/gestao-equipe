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
            <h3 class="font-weight-bold py-3 mb-0">Cadastrar Dados da Equipe</h3>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb"></div>
                <!-- [ ÍNICIO DO FORMULÁRIO PARA CADASTRAR AS INFORMAÇÕES DA EQUIPE ] -->
                <div class="card mb-4">
                    <h6 class="card-header">Informações da Equipe</h6>
                    <div class="card-body">
                        <form method="POST" action="{{route('equipe.salvar_equipe')}}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="form-label">Nome da Equipe</label>
                                    <input type="text" class="form-control" placeholder="Informe o nome da equipe" name="nome_equipe">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label">Data da Fundação</label>
                                    <input type="date" class="form-control" name="fundacao_equipe">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label">Número da Equipe</label>
                                    <input type="text" class="form-control" maxlength="2" name="numero_equipe">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label">Setor da Equipe</label>
                                    <input type="text" class="form-control" maxlength="1" name="setor_equipe">
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="form-label">Região</label>
                                    <select class="custom-select" name="regiao_equipe">
                                        <option>Selecionar</option>
                                        <option value="Região Brasília III">Região Brasília III</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label">Cidade</label>
                                    <select class="custom-select" name="cidade_equipe">
                                        <option>Selecionar</option>
                                        <option value="Brasília-DF">Brasília-DF</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
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