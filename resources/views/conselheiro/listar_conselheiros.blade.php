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
            <h3 class="font-weight-bold py-3 mb-0">Conselheiro(a)</h3>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb"></div>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Conselheiro(a)</th>
                        <th>Aniversário</th>
                        <th>Ordenação</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($conselheiros as $conselheiro)   
                        <tr>
                            <td>{{$conselheiro->nome_cons}}</td>
                            <td>{{isset($conselheiro->aniversario_cons) ? $conselheiro->aniversario_cons : 'Data Não Cadastrada'}}</td>
                            <td>{{isset($conselheiro->ordenacao_cons) ? $conselheiro->ordenacao_cons : 'Data Não Cadastrada'}}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{route('conselheiro.info-conselheiro', $conselheiro->id_conselheiro)}}" role="button">Ver</a>
                                <a class="btn btn-sm btn-primary" href="{{route('conselheiro.editar-conselheiro', $conselheiro->id_conselheiro)}}" role="button">Editar</a>
                                <a class="btn btn-sm btn-danger" href="{{route('conselheiro.excluir-conselheiro', $conselheiro->id_conselheiro)}}" role="button">Excluir</a>
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