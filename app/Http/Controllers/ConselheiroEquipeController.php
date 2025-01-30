<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ConselheiroEquipe;
use Illuminate\Http\Request;

class ConselheiroEquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Instanciando o Model
        $conselheiros = ConselheiroEquipe::all();

        // Retornando todos os registros da tabela
        // return $conselheiro;

        return view('conselheiro.listar_conselheiros',  compact('conselheiros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function formCreate()
    {
        return view('conselheiro.form_cad_conselheiro');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function saveData(Request $request)
    {
        // Vardump nos dados do formulário
        // dd($request->all());

        //Recebendo os dados do formulário
        $conselheiro = $request->only([
            'nome_cons',
            'email_cons',
            'telefone_cons',
            'endereco_cons',
            'aniversario_cons',
            'ordenacao_cons',
            'chegada_equipe',
            'saida_equipe',
            'ativo'    
        ]);

        //Gravando os dados no Banco
        $salvarConselheiro = ConselheiroEquipe::create($conselheiro);

        //Depois de gravar, redireciona para a Home (implementar o uma mensagem de gravado com sucesso e depois redirecionar)
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     */
    public function ViewData(string $id)
    {
        // Instanciando o Model
        $conselheiro = new ConselheiroEquipe();

        // Exibindo os registros pelo valor da chave primária da tabela
        $conselheiros = $conselheiro->find($id);

        return $conselheiros;
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
        $conselheiros = ConselheiroEquipe::find($id)->update([
            'email' => 'irma.darlene@teste.com'
        ]);

        return $conselheiros;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Localizando o registro que irá ser apagado (pela chave primária)
       $conselheiros = ConselheiroEquipe::find($id);

       //Verificando se existe um registro com esse id no banco de dados
       // Se existir, esse registro será apagado
       if ($conselheiros) {
            return $conselheiros->delete();
       }

       // Caso não exista, será exibida  uma mensagem
       return 'Não existem conselheiros cadastrados com esse ID';


        // DELETANDO TODOS OS REGISTROS DA TABELA REUNIOES
        //    $membros = MembroEquipe::where($id)->delete();
        //    return $membros;
    }
}
