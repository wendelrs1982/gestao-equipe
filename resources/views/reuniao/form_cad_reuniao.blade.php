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
            <h3 class="font-weight-bold py-3 mb-0">Cadastrar Reunião de Equipe</h3>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb"></div>
                <div class="card mb-4">
                    <h6 class="card-header">Informações da Reunião</h6>
                    <div class="card-body">
                        <!-- [ ÍNICIO DO FORMULÁRIO] --> 
                        <form method="POST" action="{{route('reuniao.salvar_reuniao')}}">
                            @csrf
                            <!-- [ LINHA 01] --> 
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="form-label">Tema da Reunião</label>
                                    <select class="custom-select" name="tema_reuniao_id">
                                        <option>----</option>
                                        @foreach ( $temas as $tema )
                                            <option value="{{$tema->id_tema}}">{{$tema->tema_reuniao}}</option>    
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-label">Conselheiro(a)</label>
                                    <select class="custom-select" name="conselheiro_id">
                                        <option>----</option>
                                        @foreach ( $conselheiros as $conselheiro )
                                            <option value="{{$conselheiro->id_conselheiro}}">{{$conselheiro->nome_cons}}</option>    
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-label">Casal Anfitrião</label>
                                    <select class="custom-select" name="anfitriao_id">
                                        <option>----</option>
                                        @foreach ( $casais as $casal )
                                            <option value="{{$casal->id_membro}}">{{$casal->nome_membro}}</option>    
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- [ LINHA 02] --> 
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="form-label">Casal Animador</label>
                                    <select class="custom-select" name="animador_id">
                                        <option>----</option>
                                        @foreach ( $casais as $casal )
                                            <option value="{{$casal->id_membro}}">{{$casal->nome_membro}}</option>    
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-label">Casal Financeiro</label>
                                    <select class="custom-select" name="financeiro_id">
                                        <option>----</option>
                                        @foreach ( $casais as $casal )
                                            <option value="{{$casal->id_membro}}">{{$casal->nome_membro}}</option>    
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-label">Data da Reunião</label>
                                    <input type="date" class="form-control" name="data_reuniao">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- [ LINHA 03] --> 
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Ruptura</label>
                                    <textarea class="form-control" rows="8" style="resize:none !important" name="ruptura_reuniao"></textarea>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- [ LINHA 04] --> 
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Leitura</label>
                                    <textarea class="form-control" rows="8" style="resize:none !important" name="evangelho_reuniao"></textarea>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- [ LINHA 05] --> 
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Salmo</label>
                                    <textarea class="form-control" rows="8" style="resize:none !important" name="salmo_reuniao"></textarea>
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