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
            <h3 class="font-weight-bold py-3 mb-0">Casais Ligação</h3>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb"></div>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Casal</th>
                        <th>Aniversário de Equipe</th>
                        <th>Aniversário de Casamento</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($membros as $casal)   
                        <tr>
                            <td>{{$casal->nome_membro}}</td>
                            <td>{{isset($casal->chegada_equipe) ? $casal->chegada_equipe : 'Data Não Cadastrada'}}</td>
                            <td>{{isset($casal->aniversario_casamento) ? $casal->aniversario_casamento : 'Data Não Cadastrada'}}</td>
                            <td>{{$casal->ativo == 1 ? 'Ativo' : 'Inativo'}}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{route('casal.info-casal', $casal->id_membro)}}" role="button">Ver</a>
                                <a class="btn btn-sm btn-primary" href="{{route('casal.editar-casal', $casal->id_membro)}}" role="button">Editar</a>
                                {{-- <a class="btn btn-sm btn-success" href="{{route('home')}}" role="button">Gerar PDF</a> --}}
                                <a class="btn btn-sm btn-danger" href="{{route('casal.excluir-casal', $casal->id_membro)}}" role="button">Excluir</a>
                            </td>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
                 
        </div>

        @component('components.common.footer')
        @endcomponent
        
    </div>

</div>
<!-- [ Layout container ] End -->

@endsection