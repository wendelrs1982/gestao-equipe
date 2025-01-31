<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
    <!-- Brand demo (see assets/css/demo/demo.css) -->
    <div class="app-brand demo">
        <span class="app-brand-logo demo">
            <img src="{{asset('assets/img/logo.png')}}" alt="Brand Logo" class="img-fluid">
        </span>
        <a href="{{route('home')}}" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Gestão Equipe ENS</a>
        <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
        </a>
    </div>
    <div class="sidenav-divider mt-0"></div>

    <!-- Links -->
    <ul class="sidenav-inner py-1">

        <!-- Informações do Sistema -->
        <li class="sidenav-header small font-weight-semibold">Informações do Sistema</li>

        <!-- Cadastrar Informações -->
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-file-plus"></i>
                <div>Cadastrar Dados</div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="{{route('tema.form_cad_tema')}}" class="sidenav-link">
                        <div>Novo Tema</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{route('equipe.form_cad_equipe')}}" class="sidenav-link">
                        <div>Nova Equipe</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{route('casal-ligacao.form_cad_casal_ligacao')}}" class="sidenav-link">
                        <div>Novo Casal Ligação</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{route('casal.form_cad_casal')}}" class="sidenav-link">
                        <div>Novo Casal da Equipe</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{route('conselheiro.form_cad_conselheiro')}}" class="sidenav-link">
                        <div>Novo(a) Conselheiro(a)</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{route('reuniao.form_cad_reuniao')}}" class="sidenav-link">
                        <div>Nova Reunião</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{route('relatorio-reuniao.form_cad_relatorio')}}" class="sidenav-link">
                        <div>Novo Relatório Reunião</div>
                    </a>
                </li>

            </ul>
        </li>
       
        <!-- Consultas e Edições -->
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-eye"></i>
                <div>Consulta e Edição</div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="{{route('tema.listar-temas')}}" class="sidenav-link">
                        <div>Temas</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{route('equipe.listar-equipes')}}" class="sidenav-link">
                        <div>Equipe</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{route('casal-ligacao.listar-casais-ligacao')}}" class="sidenav-link">
                        <div>Casal Ligação</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{route('casal.listar-casais')}}" class="sidenav-link">
                        <div>Casais da Equipe</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{route('conselheiro.listar-conselheiros')}}" class="sidenav-link">
                        <div>Conselheiro(a)</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{route('reuniao.listar-reunioes')}}" class="sidenav-link">
                        <div>Reuniões</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{route('relatorio-reuniao.listar-relatorios')}}" class="sidenav-link">
                        <div>Relatório Reunião</div>
                    </a>
                </li>

            </ul>
        </li>

        <!-- Super Usuários -->
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-user"></i>
                <div>Usuários</div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="{{route('usuario.form_cad_usuario')}}" class="sidenav-link">
                        <div>Cadastrar</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{route('usuario.listar-usuarios')}}" class="sidenav-link">
                        <div>Listar</div>
                    </a>
                </li>
            </ul>
        </li>
 
        <!-- Pages -->
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-header small font-weight-semibold">Outras Opções</li>
        <li class="sidenav-item">
            <a href="{{route('inicio')}}" class="sidenav-link">
                <i class="sidenav-icon feather icon-user"></i>
                <div>Encerrar Sessão</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="{{route('faq')}}" class="sidenav-link">
                <i class="sidenav-icon feather icon-anchor"></i>
                <div>FAQ</div>
            </a>
        </li>
    </ul>
</div>