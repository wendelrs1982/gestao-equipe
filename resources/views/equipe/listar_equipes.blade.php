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
            <h3 class="font-weight-bold py-3 mb-0">Equipes</h3>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb"></div>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Nome da Equipe</th>
                        <th>Número</th>
                        <th>Setor</th>
                        <th>Fundação</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($equipes as $equipe)   
                        <tr>
                            <td>{{$equipe->nome_equipe}}</td>
                            <td>{{$equipe->numero_equipe}}</td>
                            <td>{{$equipe->setor_equipe}}</td>
                            <td>{{$equipe->fundacao_equipe}}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{route('equipe.info-equipe', $equipe->id_equipe)}}" role="button">Ver</a>
                                <a class="btn btn-sm btn-primary" href="{{route('equipe.editar-equipe', $equipe->id_equipe)}}" role="button">Editar</a>
                                <a class="btn btn-sm btn-danger" href="{{route('equipe.excluir-equipe', $equipe->id_equipe)}}" role="button">Excluir</a>
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