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
            <h3 class="font-weight-bold py-3 mb-0">Cadastrar Relatório da Reunião</h3>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb"></div>
                <div class="card mb-4">
                    <h6 class="card-header">Relatório</h6>
                    <div class="card-body">
                        <!-- [ ÍNICIO DO FORMULÁRIO] --> 
                        <form method="POST" action="{{route('relatorio-reuniao.salvar_relatorio')}}">
                            @csrf

                            <!-- [ LINHA 01] --> 
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="form-label">Nome Equipe</label>
                                    <select class="custom-select" name="nome_equipe">
                                        <option>----</option>
                                        @foreach ( $equipes as $equipe )
                                            <option value="{{$equipe->nome_equipe}}">{{$equipe->nome_equipe}}</option>    
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="form-label">Número Equipe</label>
                                    <select class="custom-select" name="numero_equipe">
                                        <option>----</option>
                                        @foreach ( $equipes as $equipe )
                                            <option value="{{$equipe->numero_equipe}}">{{$equipe->numero_equipe}}</option>    
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="form-label">Setor Equipe</label>
                                    <select class="custom-select" name="setor_equipe">
                                        <option>----</option>
                                        @foreach ( $equipes as $equipe )
                                            <option value="{{$equipe->setor_equipe}}">{{$equipe->setor_equipe}}</option>    
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="form-label">Cidade Equipe</label>
                                    <select class="custom-select" name="cidade_equipe">
                                        <option>----</option>
                                        @foreach ( $equipes as $equipe )
                                            <option value="{{$equipe->cidade_equipe}}">{{$equipe->cidade_equipe}}</option>    
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label">Conselheiro(a)</label>
                                    <select class="custom-select" name="conselheiro">
                                        <option>----</option>
                                        @foreach ( $conselheiros as $conselheiro )
                                            <option value="{{$conselheiro->nome_cons}}">{{$conselheiro->nome_cons}}</option>    
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- [ LINHA 02] --> 
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="form-label">Casal Responsável</label>
                                    <select class="custom-select" name="cre">
                                        <option>----</option>
                                        @foreach ( $casais as $casal )
                                            <option value="{{$casal->nome_membro}}">{{$casal->nome_membro}}</option>    
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label">Casal Ligação</label>
                                    <select class="custom-select" name="cl">
                                        <option>----</option>
                                        @foreach ( $ligacao as $cl )
                                            <option value="{{$cl->casal_ligacao}}">{{$cl->casal_ligacao}}</option>    
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="form-label">Número da Reunião</label>
                                    <select class="custom-select" name="numero_reuniao">
                                        <option>----</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>    
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-label">Tema da Reunião</label>
                                    <select class="custom-select" name="tema_reuniao">
                                        <option>----</option>
                                        @foreach ( $temas as $temas )
                                            <option value="{{$temas->tema_reuniao}}" required>{{$temas->tema_reuniao}}</option>    
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- [ LINHA 03] --> 
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label class="form-label">Local Reunião Preparatória</label>
                                    <select class="custom-select" name="local_reuniao_prep">
                                        <option>----</option>
                                        @foreach ( $casais as $casal )
                                            <option value="{{$casal->nome_membro}}">{{$casal->nome_membro}}</option>    
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="form-label">Data da Reunião Preparatória</label>
                                    <input type="date" class="form-control" name="data_reuniao_prep">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group col-md-8">
                                    <label class="form-label">Participantes Reunião Preparatória</label>
                                    <textarea class="form-control" rows="1" style="resize:none !important" name="participantes_reuniao_prep"></textarea>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <!-- [ LINHA 04] --> 
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Preparação da Reunião Formal</label>
                                    <textarea class="form-control" rows="4" style="resize:none !important" name="desc_reuniao_formal"></textarea>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <!-- [ LINHA 05] --> 
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="form-label">Data da Reunião Formal</label>
                                    <input type="date" class="form-control" name="data_reuniao_formal">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-label">Horário de Início da Reunião Formal</label>
                                    <input type="time" class="form-control" name="inicio_reuniao_formal">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-label">Horário de Encerramento da Reunião Formal</label>
                                    <input type="time" class="form-control" name="fim_reuniao_formal">
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <!-- [ LINHA 06] --> 
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Participantes da Reunião Formal</label>
                                    <textarea class="form-control" rows="4" style="resize:none !important" name="participantes_reuniao_formal"></textarea>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <!-- [ LINHA 07] --> 
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Ausentes e Justificativas</label>
                                    <textarea class="form-control" rows="4" style="resize:none !important" name="ausentes_reuniao_formal"></textarea>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <!-- [ LINHA 08] --> 
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Como foi o momento da refeição?</label>
                                    <textarea class="form-control" rows="4" style="resize:none !important" name="desc_refeicao_formal"></textarea>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <!-- [ LINHA 09] --> 
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Como foi o momento da oração?</label>
                                    <textarea class="form-control" rows="4" style="resize:none !important" name="desc_oracao_formal"></textarea>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <!-- [ LINHA 10] --> 
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Como foi o momento da partilha?</label>
                                    <textarea class="form-control" rows="4" style="resize:none !important" name="desc_partilha_formal"></textarea>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <!-- [ LINHA 11] --> 
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Como foi o momento do Estudo do Tema?</label>
                                    <textarea class="form-control" rows="4" style="resize:none !important" name="desc_estudo_tema_formal"></textarea>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <!-- [ LINHA 12] --> 
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Como foi o momento da Coparticipação?</label>
                                    <textarea class="form-control" rows="4" style="resize:none !important" name="desc_coparticipacao_formal"></textarea>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <!-- [ LINHA 13] --> 
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Como foi a participação do Conselheiro(a) Espiritual?</label>
                                    <textarea class="form-control" rows="4" style="resize:none !important" name="desc_conselheiro_formal"></textarea>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <!-- [ LINHA 14] --> 
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Como está a vida em Equipe?</label>
                                    <textarea class="form-control" rows="4" style="resize:none !important" name="desc_vida_em_equipe"></textarea>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <!-- [ LINHA 15] --> 
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">De forma geral, como pode ser avaliada a Reunião?</label>
                                    <textarea class="form-control" rows="4" style="resize:none !important" name="desc_avaliacao_reuniao_formal"></textarea>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <!-- [ LINHA 16] --> 
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Como está a vida pastoral dos casais fora da Equipe?</label>
                                    <textarea class="form-control" rows="4" style="resize:none !important" name="vida_casal_extra_equipe"></textarea>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <!-- [ LINHA 17] --> 
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="form-label">Local da próxima Reunião Formal</label>
                                    <select class="custom-select" name="local_proxima_reuniao_formal">
                                        <option>----</option>
                                        @foreach ( $casais as $casal )
                                            <option value="{{$casal->nome_membro}}">{{$casal->nome_membro}}</option>    
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label">Data da Próxima Reunião Formal</label>
                                    <input type="date" class="form-control" name="data_proxima_reuniao_formal">
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                             <!-- [ LINHA 18] --> 
                             <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="form-label">Contribuição da Equipe nessa reunião</label>
                                    <input type="text" class="form-control" name="contribuicao_equipe">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label">Valor médio da contribuição por Casal</label>
                                    <input type="text" class="form-control" name="media_contribuicao_equipe">
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <!-- [ LINHA 19] --> 
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Comunicação e Avisos para o Setor</label>
                                    <textarea class="form-control" rows="4" style="resize:none !important" name="desc_avisos_setor"></textarea>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-round btn-primary">Salvar</button>
                            <a class="btn btn-round btn-secondary" href="{{route('home')}}" role="button">Cancelar</a>
                        </form> 
                        <!-- [ FIM DO FORMULÁRIO] -->
                    </div>
                </div>
                
        </div>
        
        @component('components.common.footer')
        @endcomponent
        
    </div>

</div>
<!-- [ Layout container ] End -->

@endsection