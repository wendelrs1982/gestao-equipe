<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MembroEquipe;

class MembroEquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Instanciando o Model
        $membros = MembroEquipe::all();

        // Retornando todos os registros da tabela
        return view('casal.listar_casais',  compact('membros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function formCreate()
    {
        
        return view('casal.form_cad_casal'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function saveData(Request $request)
    {
        // Vardump nos dados do formulário
        // dd($request->all());

        //Recebendo os dados do formulário
        $casal = $request->only([
            'nome_membro',
            'email_ele',
            'email_ela',
            'telefone_ele',
            'telefone_ela',
            'endereco',
            'aniversario_ele',
            'aniversario_ela',
            'aniversario_casamento',
            'chegada_equipe',
            'saida_equipe',
            'ativo'
        ]);

        //Gravando os dados no Banco
        $salvarCasal = MembroEquipe::create($casal);

        //Depois de gravar, redireciona para a Home (implementar o uma mensagem de gravado com sucesso e depois redirecionar)
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     */
    public function ViewData(string $id)
    {
        // Instanciando o Model
        $membro = new MembroEquipe();

        // Exibindo os registros pelo valor da chave primária da tabela
        $membros = $membro->find($id);

        return $membros;
        // Var dump no Model MembroEquipe
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
        $membros = MembroEquipe::find($id)->update([
            'email_ele' => 'wendel.silva@teste.com'
        ]);

        return $membros;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Localizando o registro que irá ser apagado (pela chave primária)
       $membros = MembroEquipe::find($id);

       //Verificando se existe um registro com esse id no banco de dados
       // Se existir, esse registro será apagado
       if ($membros) {
            return $membros->delete();
       }

       // Caso não exista, será exibida  uma mensagem
       return 'Não existem membros cadastrados com esse ID';


        // DELETANDO TODOS OS REGISTROS DA TABELA REUNIOES
        //    $membros = MembroEquipe::where($id)->delete();
        //    return $membros;
    }
}
