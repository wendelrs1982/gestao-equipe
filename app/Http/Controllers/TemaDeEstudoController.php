<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TemaDeEstudo;

class TemaDeEstudoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Instanciando o Model
        $temas = TemaDeEstudo::all();

        // dd($temas);

        // Retornando todos os registros do banco
        return view('tema.listar_temas', compact('temas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function formCreate()
    {
        return view('tema.form_cad_tema');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function saveData(Request $request)
    {
        // Vardump nos dados do formulário
        // dd($request->all());

        //Recebendo os dados do formulário
        $tema = $request->only([
            'numero_reuniao',
            'tema_reuniao',
            'ano_tema',
            'ativo'
        ]);

        //Gravando os dados no Banco
        $salvarTema = TemaDeEstudo::create($tema);

        //Depois de gravar, redireciona para a Home (implementar o uma mensagem de gravado com sucesso e depois redirecionar)
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     */
    public function viewData(string $id)
    {
        // Instanciando o Model
        $tema = new TemaDeEstudo();

        // Exibindo os registros pelo valor da chave primária da tabela
        $temas = $tema->find($id);

        return $temas;
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
        $temas = TemaDeEstudo::find($id)->update([
            'ano_tema' => '2028'
        ]);

        return $temas;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Localizando o registro que irá ser apagado (pela chave primária)
       $temas = TemaDeEstudo::find($id);

       //Verificando se existe um registro com esse id no banco de dados
       // Se existir, esse registro será apagado
       if ($temas) {
            return $temas->delete();
       }

       // Caso não exista, será exibida  uma mensagem
       return 'Não existem temas cadastrados com esse ID';


        // DELETANDO TODOS OS REGISTROS DA TABELA REUNIOES
        //    $membros = MembroEquipe::where($id)->delete();
        //    return $membros;
    }
}
