<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DadoEquipe;
use Illuminate\Http\Request;

class DadosEquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Instanciando o Model
        $equipes = DadoEquipe::all();

        // Retornando todos os registros da tabela
        // return $equipes;
        return view('equipe.listar_equipes',  compact('equipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function formCreate()
    {
        return view('equipe.form_cad_equipe');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function saveData(Request $request)
    {
        // Vardump nos dados do formulário
        // dd($request->all());

        //Recebendo os dados do formulário
        $equipe = $request->only([
            'nome_equipe',
            'numero_equipe',
            'setor_equipe',
            'regiao_equipe',
            'cidade_equipe',
            'fundacao_equipe',
            'ativo'    
        ]);

        //Gravando os dados no Banco
        $salvarEquipe = DadoEquipe::create($equipe);

        //Depois de gravar, redireciona para a Home (implementar o uma mensagem de gravado com sucesso e depois redirecionar)
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     */
    public function viewData(string $id)
    {
        // Instanciando o Model
        $equipe = new DadoEquipe();

        // Exibindo os registros pelo valor da chave primária da tabela
        $equipes = $equipe->find($id);

        return $equipes;
        // Var dump no Model TemaDeEstudo
        //dd($membros);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function formEditData(string $id)
    {
        // NO FUTURO, SERÁ EXIBIDO UM FORMULÁRIO NESSA ROTA
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateData(Request $request, string $id)
    {
        //NO FUTURO, RECEBERA AS INFORMAÇÕES DO FORM DA FUNCTION formEditarDadosReunia, E ATUALIZARÁ DESSE REGISTRO NO BANCO DE DADOS
        $equipes = DadoEquipe::find($id)->update([
            'ativo' => '0'
        ]);

        return $equipes;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Localizando o registro que irá ser apagado (pela chave primária)
       $equipes = DadoEquipe::find($id);

       //Verificando se existe um registro com esse id no banco de dados
       // Se existir, esse registro será apagado
       if ($equipes) {
            return $equipes->delete();
       }

       // Caso não exista, será exibida  uma mensagem
       return 'Não existem equipes cadastradas com esse ID';


        // DELETANDO TODOS OS REGISTROS DA TABELA REUNIOES
        //    $membros = MembroEquipe::where($id)->delete();
        //    return $membros;
    }
}
