<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CasalLigacaoController;
use App\Http\Controllers\ConselheiroEquipeController;
use App\Http\Controllers\DadosEquipeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MembroEquipeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RelatorioReuniaoController;
use App\Http\Controllers\ReuniaoController;
use App\Http\Controllers\TemaDeEstudoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

//  Rota Padrão do Laravel
Route::get('/welcome', function () {
    return view('welcome');
});

// Rotas que o usuário precisa logar no sistema para acessar
Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Grupo de Rotas Conselheiro da Equipe
    // Route::group([
    //     'prefix' => 'conselheiro',
    //     'as' => 'conselheiro.'
    // ], function(){
    //     Route::get('criar', [ConselheiroEquipeController::class, 'formCreate'])->name('form_cad_conselheiro');
    //     Route::post('salvar-conselheiro', [ConselheiroEquipeController::class, 'saveData'])->name('salvar_conselheiro');
    //     Route::get('listar-conselheiros', [ConselheiroEquipeController::class, 'index'])->name('listar-conselheiros');
    //     Route::get('info-conselheiro/{id}', [ConselheiroEquipeController::class, 'viewData'])->name('info-conselheiro');
    //     Route::get('editar-conselheiro/{id}', [ConselheiroEquipeController::class, 'updateData'])->name('editar-conselheiro');
    //     Route::get('excluir-conselheiro/{id}', [ConselheiroEquipeController::class, 'destroy'])->name('excluir-conselheiro');
    // });


});


// Rota para a página de Login
Route::get('/', [LoginController::class, 'index'])->name('inicio');

// Rota para Home do Sistema
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Grupo de Rotas Reunião de Equipes
Route::group([
    'prefix' => 'reuniao',
    'as' => 'reuniao.'
], function(){
    Route::get('criar', [ReuniaoController::class, 'formCreate'])->name('form_cad_reuniao');
    Route::post('salvar-reuniao', [ReuniaoController::class, 'saveData'])->name('salvar_reuniao');
    Route::get('listar-reunioes', [ReuniaoController::class, 'index'])->name('listar-reunioes');
    Route::get('info-reuniao/{id}', [ReuniaoController::class, 'viewData'])->name("info-reuniao");
    Route::get('editar-reuniao/{id}', [ReuniaoController::class, 'updateData'])->name('form_edit_reuniao');
    Route::post('salvar-edicao-reuniao', [ReuniaoController::class, 'saveData'])->name('salvar_edicao_reuniao');
    Route::get('deletar-reuniao/{id}', [ReuniaoController::class, 'destroy'])->name('excluir-reuniao');
});

// Grupo de Rotas Relatório Reunião de Equipes
Route::group([
    'prefix' => 'relatorio-reuniao',
    'as' => 'relatorio-reuniao.'
], function(){
    Route::get('criar', [RelatorioReuniaoController::class, 'formCreate'])->name('form_cad_relatorio');
    Route::post('salvar-relatorio', [RelatorioReuniaoController::class, 'saveData'])->name('salvar_relatorio');
    Route::get('listar-relatorios', [RelatorioReuniaoController::class, 'index'])->name('listar-relatorios');
    Route::get('info-relatorio/{id}', [RelatorioReuniaoController::class, 'viewData'])->name('info-relatorio');
    Route::get('editar-relatorio/{id}', [RelatorioReuniaoController::class, 'updateData'])->name('editar-relatorio');
    Route::get('excluir-relatorio/{id}', [RelatorioReuniaoController::class, 'destroy'])->name('excluir-relatorio');
});

// Grupo de Rotas Casais da Equipe
Route::group([
    'prefix' => 'casal',
    'as' => 'casal.'
], function(){
    Route::get('criar', [MembroEquipeController::class, 'formCreate'])->name('form_cad_casal');
    Route::post('salvar-casal', [MembroEquipeController::class, 'saveData'])->name('salvar_casal');
    Route::get('listar-casais', [MembroEquipeController::class, 'index'])->name('listar-casais');
    Route::get('info-casal/{id}', [MembroEquipeController::class, 'viewData'])->name('info-casal');
    Route::get('editar-casal/{id}', [MembroEquipeController::class, 'updateData'])->name('editar-casal');
    Route::get('excluir-casal/{id}', [MembroEquipeController::class, 'destroy'])->name('excluir-casal');
});

// Grupo de Rotas Conselheiro da Equipe
Route::group([
    'prefix' => 'conselheiro',
    'as' => 'conselheiro.'
], function(){
    Route::get('criar', [ConselheiroEquipeController::class, 'formCreate'])->name('form_cad_conselheiro');
    Route::post('salvar-conselheiro', [ConselheiroEquipeController::class, 'saveData'])->name('salvar_conselheiro');
    Route::get('listar-conselheiros', [ConselheiroEquipeController::class, 'index'])->name('listar-conselheiros');
    Route::get('info-conselheiro/{id}', [ConselheiroEquipeController::class, 'viewData'])->name('info-conselheiro');
    Route::get('editar-conselheiro/{id}', [ConselheiroEquipeController::class, 'updateData'])->name('editar-conselheiro');
    Route::get('excluir-conselheiro/{id}', [ConselheiroEquipeController::class, 'destroy'])->name('excluir-conselheiro');
});

// Grupo de Rotas Temas de Estudo
Route::group([
    'prefix' => 'tema',
    'as' => 'tema.'
], function(){
    Route::get('criar', [TemaDeEstudoController::class, 'formCreate'])->name('form_cad_tema');
    Route::post('salvar-tema', [TemaDeEstudoController::class, 'saveData'])->name('salvar_tema');
    Route::get('listar-temas', [TemaDeEstudoController::class, 'index'])->name('listar-temas');
    Route::get('info-tema/{id}', [TemaDeEstudoController::class, 'viewData'])->name('info-tema');
    Route::get('editar-tema/{id}', [TemaDeEstudoController::class, 'updateData'])->name('editar-tema');
    Route::get('excluir-tema/{id}', [TemaDeEstudoController::class, 'destroy'])->name('excluir-tema');
});


// Grupo de Rotas Casal Ligação
Route::group([
    'prefix' => 'casal-ligacao',
    'as' => 'casal-ligacao.'
], function(){
    Route::get('criar', [CasalLigacaoController::class, 'formCreate'])->name('form_cad_casal_ligacao');
    Route::post('salvar-casal-ligacao', [CasalLigacaoController::class, 'saveData'])->name('salvar_casal_ligacao');
    Route::get('listar-casal-ligacao', [CasalLigacaoController::class, 'index'])->name('listar-casais-ligacao');
    Route::get('info-casal-ligacao/{id}', [CasalLigacaoController::class, 'viewData'])->name('info-casal-ligacao');
    Route::get('editar-casal-ligacao/{id}', [CasalLigacaoController::class, 'updateData'])->name('editar-casal-ligacao');
    Route::get('excluir-casal-ligacao/{id}', [CasalLigacaoController::class, 'destroy'])->name('excluir-casal-ligacao');
});

// Grupo de Rotas Dados da Equipe
Route::group([
    'prefix' => 'equipe',
    'as' => 'equipe.'
], function(){
    Route::get('criar', [DadosEquipeController::class, 'formCreate'])->name('form_cad_equipe');
    Route::post('salvar-equipe', [DadosEquipeController::class, 'saveData'])->name('salvar_equipe');
    Route::get('listar-equipes', [DadosEquipeController::class, 'index'])->name('listar-equipes');
    Route::get('info-equipe/{id}', [DadosEquipeController::class, 'viewData'])->name('info-equipe');
    Route::get('editar-equipe/{id}', [DadosEquipeController::class, 'updateData'])->name('editar-equipe');
    Route::get('excluir-equipe/{id}', [DadosEquipeController::class, 'destroy'])->name('excluir-equipe');
});

// Grupo de Rotas Cadastro usuário 
Route::group([
    'prefix' => 'usuario',
    'as' => 'usuario.'
], function(){
    Route::get('criar', [UsuarioController::class, 'formCreate'])->name('form_cad_usuario');
    Route::post('salvar-usuario', [UsuarioController::class, 'saveData'])->name('salvar_usuario');
    Route::get('listar-usuarios', [UsuarioController::class, 'index'])->name('listar-usuarios');
    Route::get('info-usuario/{id}', [UsuarioController::class, 'viewData'])->name('info-usuario');
    Route::get('editar-usuario/{id}', [UsuarioController::class, 'updateData'])->name('editar-usuario');
    Route::get('excluir-usuario/{id}', [UsuarioController::class, 'destroy'])->name('excluir-usuario');
});

// Rota para a FAQ do Sistema
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

// require __DIR__.'/auth.php';