<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CasalLigacao;
use Illuminate\Http\Request;

class CasalLigacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Instanciando o Model
        $casalLigacao = CasalLigacao::all();

        // Retornando todos os registros da tabela
        return view('casal-ligacao.listar_casais_ligacao',  compact('casalLigacao'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function formCreate()
    {
        return view('casal-ligacao.form_cad_casal_ligacao');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function saveData(Request $request)
    {
        // Vardump nos dados do formulário
        // dd($request->all());

        //Recebendo os dados do formulário
        $cl = $request->only([
            'casal_ligacao',
            'ano',
            'ativo'
        ]);

        //Gravando os dados no Banco
        $salvarCl = CasalLigacao::create($cl);

        //Depois de gravar, redireciona para a Home (implementar o uma mensagem de gravado com sucesso e depois redirecionar)
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     */
    public function viewData(string $id)
    {
        // Instanciando o Model
        $casal = new CasalLigacao();

        // Exibindo os registros pelo valor da chave primária da tabela
        $casais = $casal->find($id);

        return $casais;
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
        $casais = CasalLigacao::find($id)->update([
            'ano' => '2029'
        ]);

        return $casais;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Localizando o registro que irá ser apagado (pela chave primária)
       $casais = CasalLigacao::find($id);

       //Verificando se existe um registro com esse id no banco de dados
       // Se existir, esse registro será apagado
       if ($casais) {
            return $casais->delete();
       }

       // Caso não exista, será exibida  uma mensagem
       return 'Não existem Casais Ligação cadastrados com esse ID';


        // DELETANDO TODOS OS REGISTROS DA TABELA REUNIOES
        //    $membros = MembroEquipe::where($id)->delete();
        //    return $membros;
    }
}
