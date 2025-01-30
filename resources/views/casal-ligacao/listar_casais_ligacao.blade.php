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
                        <th>Ano</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($casalLigacao as $cl)   
                        <tr>
                            <td>{{$cl->casal_ligacao}}</td>
                            <td>{{$cl->ano}}</td>
                            <td>{{$cl->ativo == 1 ? 'Ativo' : 'Inativo'}}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{route('casal-ligacao.info-casal-ligacao', $cl->id_casal_ligacao)}}" role="button">Ver</a>
                                <a class="btn btn-sm btn-primary" href="{{route('casal-ligacao.editar-casal-ligacao', $cl->id_casal_ligacao)}}" role="button">Editar</a>
                                {{-- <a class="btn btn-sm btn-success" href="{{route('home')}}" role="button">Gerar PDF</a> --}}
                                <a class="btn btn-sm btn-danger" href="{{route('casal-ligacao.excluir-casal-ligacao', $cl->id_casal_ligacao)}}" role="button">Excluir</a>
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