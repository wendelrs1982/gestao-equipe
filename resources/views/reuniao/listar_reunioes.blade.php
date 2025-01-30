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
            <h3 class="font-weight-bold py-3 mb-0">Reuniões</h3>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb"></div>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Tema de Estudo</th>
                        <th>Casal Anfitrião</th>
                        <th>Data da Reunião</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reunioes as $reuniao)   
                        <tr>
                            <td>{{$reuniao->temaDeEstudo->tema_reuniao}}</td>
                            <td>{{$reuniao->anfitriao->nome_membro}}</td>
                            <td>{{$reuniao->data_reuniao}}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{route('reuniao.info-reuniao', $reuniao->id_reuniao)}}" role="button">Ver</a>
                                <a class="btn btn-sm btn-primary" href="{{route('reuniao.form_edit_reuniao', $reuniao->id_reuniao)}}" role="button">Editar</a>
                                <a class="btn btn-sm btn-success" href="#" role="button">Gerar PDF</a>
                                <a class="btn btn-sm btn-danger" href="{{route('reuniao.excluir-reuniao', $reuniao->id_reuniao)}}" role="button">Excluir</a>
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