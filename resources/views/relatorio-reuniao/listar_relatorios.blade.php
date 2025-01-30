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
            <h3 class="font-weight-bold py-3 mb-0">Relatórios da Equipe</h3>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb"></div>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Relatório / Reunião</th>
                        <th>Data da Realização da Reunião</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($relatorios as $relatorio)   
                        <tr>
                            <td>{{$relatorio->tema_reuniao}}</td>
                            <td>{{isset($relatorio->data_reuniao_formal) ? $relatorio->data_reuniao_formal : 'Data Não Cadastrada'}}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{route('relatorio-reuniao.info-relatorio', $relatorio->id_relatorio)}}" role="button">Ver</a>
                                <a class="btn btn-sm btn-primary" href="{{route('relatorio-reuniao.editar-relatorio', $relatorio->id_relatorio)}}" role="button">Editar</a>
                                <a class="btn btn-sm btn-success" href="{{route('home')}}" role="button">Gerar PDF</a>
                                <a class="btn btn-sm btn-danger" href="{{route('relatorio-reuniao.excluir-relatorio', $relatorio->id_relatorio)}}" role="button">Excluir</a>
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