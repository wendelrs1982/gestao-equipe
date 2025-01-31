<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    
    public function index()
    {
        // Instanciando o Model
        $usuarios = User::all();

        // Retornando todos os registros da tabela
        return view('usuario.listar_usuarios',  compact('usuarios'));
    }

    public function formCreate()
    {
        return view('usuario.form_cad_usuario');  
    }

    public function saveData(Request $request)
    {
        // Vardump nos dados do formulário
        // dd($request->all());

        //Recebendo os dados do formulário
        $usuario= $request->only([
            'name',
            'email',
            'password',
            'ativo',
            'super_user'    
        ]);

        //Gravando os dados no Banco
        $salvarUsuario = User::create($usuario);

        //Depois de gravar, redireciona para a Home (implementar o uma mensagem de gravado com sucesso e depois redirecionar)
        return redirect(route('home'));
    }

    public function viewData(string $id)
    {
        // Instanciando o Model
        $usuario = new User();

        // Exibindo os registros pelo valor da chave primária da tabela
        $usuarios = $usuario->find($id);

        return $usuarios;
        // Var dump no Model TemaDeEstudo
        //dd($membros);
    }

    public function formEditData(string $id)
    {
        // NO FUTURO, SERÁ EXIBIDO UM FORMULÁRIO NESSA ROTA
    }

    public function updateData(Request $request, string $id)
    {
        //NO FUTURO, RECEBERA AS INFORMAÇÕES DO FORM E ATUALIZARÁ DESSE REGISTRO NO BANCO DE DADOS
    }

    public function destroy(string $id)
    {
        // Localizando o registro que irá ser apagado (pela chave primária)
       $usuarios = User::find($id);

       //Verificando se existe um registro com esse id no banco de dados
       // Se existir, esse registro será apagado
       if ($usuarios) {
            return $usuarios->delete();
       }

       // Caso não exista, será exibida  uma mensagem
       return 'Não existem usuarios cadastradas com esse ID';


        // DELETANDO TODOS OS REGISTROS DA TABELA REUNIOES
        //    $membros = MembroEquipe::where($id)->delete();
        //    return $membros;
    }

}
