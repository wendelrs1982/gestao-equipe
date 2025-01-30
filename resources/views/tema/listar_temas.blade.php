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
            <h3 class="font-weight-bold py-3 mb-0">Temas</h3>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb"></div>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Reunião/Tema</th>
                        <th>Ano do Tema</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($temas as $tema)   
                        <tr>
                            <td>{{$tema->tema_reuniao}}</td>
                            <td>{{$tema->ano_tema}}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{route('tema.info-tema', $tema->id_tema)}}" role="button">Ver</a>
                                <a class="btn btn-sm btn-primary" href="{{route('tema.editar-tema', $tema->id_tema)}}" role="button">Editar</a>
                                <a class="btn btn-sm btn-danger" href="{{route('tema.excluir-tema', $tema->id_tema)}}" role="button">Excluir</a>
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