<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ConselheiroEquipe;
use App\Models\MembroEquipe;
use Illuminate\Http\Request;
use App\Models\Reuniao;
use App\Models\TemaDeEstudo;

class ReuniaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Instanciando o Model
        $reunioes = Reuniao::with('temaDeEstudo', 'anfitriao', 'financeiro', 'animador')->get();
        // dd($reunioes);

        // Retornando todos os registros da tabela
        return view('reuniao.listar_reunioes',  compact('reunioes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function formCreate()
    {
        //Inserindo as informações pelo formulário

        $temas = TemaDeEstudo::all();
        $casais = MembroEquipe::all();
        $conselheiros = ConselheiroEquipe::all();

        return view('reuniao.form_cad_reuniao', compact('temas','casais','conselheiros')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function saveData(Request $request)
    {
        // Vardump nos dados do formulário
        // dd($request->all());

        //Recebendo os dados do formulário
        $reuniao = $request->only([
            'tema_reuniao_id',
            'conselheiro_id',
            'anfitriao_id',
            'animador_id',
            'financeiro_id',
            'data_reuniao',
            'ruptura_reuniao',
            'evangelho_reuniao', 
            'salmo_reuniao'
        ]);

        //Gravando os dados no Banco
        $salvarReuniao = Reuniao::create($reuniao);

        //Depois de gravar, redireciona para a Home (implementar o uma mensagem de gravado com sucesso e depois redirecionar)
        return redirect(route('home'));

        

    }

    /**
     * Display the specified resource.
     */
    public function viewData(string $id)
    {
        // Instanciando o Model
        $reuniao = new Reuniao();

        // Exibindo os registros pelo valor da chave primária da tabela
        $reunioes = $reuniao->find($id);

        return $reunioes;
        // Var dump no Model Reuniao
        //dd($reunioes);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function formEditData(Request $request)
    {
        $id = $request->id;

        $reuniao = Reuniao::find($id);
        if(!$reuniao) {
            return redirect(route('home'));
        }

        $temas = TemaDeEstudo::all();
        $casais = MembroEquipe::all();
        $conselheiros = ConselheiroEquipe::all();

        return view('reuniao.form_edit_reuniao', compact('temas','casais','conselheiros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateData(Request $request, string $id)
    {
        //NO FUTURO, RECEBERA AS INFORMAÇÕES DO FORM DA FUNCTION formEditarDadosReunia, E ATUALIZARÁ DESSE REGISTRO NO BANCO DE DADOS
        // $reunioes = Reuniao::find($id)->update([
        //     'ruptura_reuniao' => 'Não haverá música novamente'
        // ]);

        // return $reunioes;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Localizando o registro que irá ser apagado (pela chave primária)
       $reunioes = Reuniao::find($id);

       //Verificando se existe um registro com esse id no banco de dados
       // Se existir, esse registro será apagado
       if ($reunioes) {
            return $reunioes->delete();
       }

       // Caso não exista, será exibida  uma mensagem
       return 'Não existe uma reunião com esse ID';


        // DELETANDO TODOS OS REGISTROS DA TABELA REUNIOES
        //    $reunioes = Reuniao::where($id)->delete();
        //    return $reunioes;
    }
}
