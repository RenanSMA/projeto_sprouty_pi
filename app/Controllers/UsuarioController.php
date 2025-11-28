<?php 

namespace App\Controllers;


//importa o Model do usuario
use App\Models\Usuario;

class UsuarioController{


    //busca os usuarios e chama a tela listar
    public function listar(){
        $lista_usuarios = Usuario::buscarTodos();

        render("usuarios/lista_usuarios.php",[
        'title' => "Lista de Usuários",
        'usuarios' => $lista_usuarios
    ]);
    }



public function salvar() {
//1- limpa os dados e remove tudo que não for texto puro
    $dados = [
        'id_usuario'       => filter_input(INPUT_POST, 'id_usuario', FILTER_SANITIZE_NUMBER_INT),
        'nome'             => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS),
        'genero'           => filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_SPECIAL_CHARS),
        'cpf'              => filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS),
        'nascimento'       => filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_SPECIAL_CHARS),
        'celular'          => filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_SPECIAL_CHARS),
        'cep'              => filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS),
        'endereco'         => filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS),
        'numero'           => filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT),
        'complemento'      => filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_SPECIAL_CHARS),
        'cidade'           => filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS),
        'estado'           => filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS),
        'email'            => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL),
        'senha'            => filter_input(INPUT_POST, 'senha', FILTER_DEFAULT),
        'nivel_acesso'     => filter_input(INPUT_POST, 'nivel_acesso', FILTER_SANITIZE_SPECIAL_CHARS)
    ];
    
//cria a lista de erros
$erros = [];

if (empty($dados['nome'])) {
    $erros[] = 'O campo NOME não pode ficar em branco!';
} else if (strlen($dados['nome']) < 4) {
    $erros[] = 'O campo NOME deve ter mais que 3 caracteres!';
}
 //se nao houver erros salve 
 if(empty($erros)) {
    $id = Usuario::salvar($dados);
   // header('Location: /usuarios');
 } else {
    //se houver erros volta para o formulario
    $_SESSION['erros'] = $erros;
    $_SESSION['dados'] = $dados;
    //header('Location: /usuarios/inserir');
 }



}
}





?>