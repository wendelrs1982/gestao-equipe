@extends('layouts.main-layout')
@section('titulo-pagina', 'Gestão Equipes ENS')

@section('content')

@component('components.common.sidebar')
@endcomponent

<!-- [ Layout container ] Start -->
<div class="layout-container">
    @component('components.common.navbar')
    @endcomponent

    <div class="layout-content">

        <div class="container-fluid flex-grow-1 container-p-y">
            <h3 class="font-weight-bold py-3 mb-0">Usuários</h3>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb"></div>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Perfil</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)   
                        <tr>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>{{$usuario->super_user == 1 ? 'Super Usuário' : 'Padrão'}}</td>
                            <td>{{$usuario->ativo == 1 ? 'Ativo' : 'Inativo'}}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{route('usuario.info-usuario', $usuario->id)}}" role="button">Ver</a>
                                <a class="btn btn-sm btn-primary" href="{{route('usuario.editar-usuario', $usuario->id)}}" role="button">Editar</a>
                                {{-- <a class="btn btn-sm btn-success" href="{{route('home')}}" role="button">Gerar PDF</a> --}}
                                <a class="btn btn-sm btn-danger" href="{{route('usuario.excluir-usuario', $usuario->id)}}" role="button">Excluir</a>
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