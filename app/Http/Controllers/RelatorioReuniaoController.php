<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CasalLigacao;
use Illuminate\Http\Request;
use App\Models\ConselheiroEquipe;
use App\Models\DadoEquipe;
use App\Models\MembroEquipe;
use App\Models\RelatorioReuniao;
use App\Models\TemaDeEstudo;

class RelatorioReuniaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Instanciando o Model
        $relatorios = RelatorioReuniao::all();

        // Retornando todos os registros da tabela
        return view('relatorio-reuniao.listar_relatorios',  compact('relatorios'));
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
        $ligacao = CasalLigacao::all();
        $equipes = DadoEquipe::all();

        return view('relatorio-reuniao.form_cad_relatorio', compact('temas','casais','conselheiros','ligacao','equipes')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function saveData(Request $request)
    {
        // Vardump nos dados do formulário
        // dd($request->all());

        //Recebendo os dados do formulário
        $relatorio = $request->only([
            'numero_reuniao',
            'tema_reuniao',
            'cre',
            'cl',
            'conselheiro',
            'numero_equipe',
            'setor_equipe',
            'nome_equipe',
            'cidade_equipe',
            'data_reuniao_prep',
            'local_reuniao_prep',
            'participantes_reuniao_prep',
            'data_reuniao_formal',
            'desc_reuniao_formal',
            'inicio_reuniao_formal',
            'fim_reuniao_formal',
            'participantes_reuniao_formal',
            'ausentes_reuniao_formal',
            'desc_refeicao_formal',
            'desc_oracao_formal',
            'desc_partilha_formal',
            'desc_estudo_tema_formal',
            'desc_coparticipacao_formal',
            'contribuicao_equipe',
            'media_contribuicao_equipe',
            'desc_conselheiro_formal',
            'desc_vida_em_equipe',
            'desc_avaliacao_reuniao_formal',
            'vida_casal_extra_equipe',
            'data_proxima_reuniao_formal',
            'local_proxima_reuniao_formal',
            'desc_avisos_setor'
        ]);

        //Gravando os dados no Banco
        $salvarRelatorio = RelatorioReuniao::create($relatorio);

        //Depois de gravar, redireciona para a Home (implementar o uma mensagem de gravado com sucesso e depois redirecionar)
        return redirect(route('home'));

        

    }

    /**
     * Display the specified resource.
     */
    public function viewData(string $id)
    {
        // Instanciando o Model
        $relatorio = new RelatorioReuniao();

        // Exibindo os registros pelo valor da chave primária da tabela
        $relatorios = $relatorio->find($id);

        return $relatorios;
        // Var dump no Model Reuniao
        //dd($reunioes);
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
        //NO FUTURO, RECEBERA AS INFORMAÇÕES DO FORM 
        $relatorios = RelatorioReuniao::find($id)->update([
            'ruptura_reuniao' => 'Não haverá música novamente'
        ]);

        return $relatorios;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Localizando o registro que irá ser apagado (pela chave primária)
       $relatorios = RelatorioReuniao::find($id);

       //Verificando se existe um registro com esse id no banco de dados
       // Se existir, esse registro será apagado
       if ($relatorios) {
            return $relatorios->delete();
       }

       // Caso não exista, será exibida  uma mensagem
       return 'Não existe um relatório reunião com esse ID';


        // DELETANDO TODOS OS REGISTROS DA TABELA REUNIOES
        //    $reunioes = Reuniao::where($id)->delete();
        //    return $reunioes;
    }
}
