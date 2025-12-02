<?php 

namespace App\Controllers;
// Define o namespace da classe. Isso organiza o código em módulos e evita conflitos de nomes.


// Importa o Model do usuário
use App\Models\Usuario;

class UsuarioController {

    // ================================
    // MÉTODO LISTAR USUÁRIOS
    // ================================
    // Busca os usuários e chama a tela "listar"
    public function listar(){

        // Chama o método estático do Model que retorna todos os usuários do banco
        $lista_usuarios = Usuario::buscarTodos();

        // Renderiza a view "lista_usuarios.php"
        // A função render() envia os dados para a View
        // 'title' → título da página
        // 'usuarios' → array com a lista trazida do banco
        render("usuarios/lista_usuarios.php", [
            'title' => "Lista de Usuários",
            'usuarios' => $lista_usuarios
        ]);
    }



    // ================================
    // MÉTODO SALVAR USUÁRIO
    // ================================
    public function salvar() {

        // 1- Limpa os dados enviados pelo formulário
        // filter_input impede códigos maliciosos como scripts e SQL injection.
        
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
            'senha'            => filter_input(INPUT_POST, 'senha', FILTER_DEFAULT), // senha não deve ser filtrada com sanitização pesada
            'nivel_acesso'     => filter_input(INPUT_POST, 'nivel_acesso', FILTER_SANITIZE_SPECIAL_CHARS)
        ];
        /*
        Neste bloco, cada dado vindo do formulário é tratado:
        ✔ evita caracteres maliciosos
        ✔ melhora segurança contra XSS
        ✔ impede envio de dados inválidos
        */


        // 2- Cria a lista de erros
        // Este array será preenchido caso alguma validação falhe
        $erros = [];

        // Validação do nome: obrigatório e mínimo de caracteres
        if (empty($dados['nome'])) {
            $erros[] = 'O campo NOME não pode ficar em branco!';
        } else if (strlen($dados['nome']) < 4) {
            $erros[] = 'O campo NOME deve ter mais que 3 caracteres!';
        }

        // Aqui poderiam ser adicionadas outras validações:
        // validar CPF, email, senha, etc.


        // ================================
        // 3- Se NÃO houver erros → salvar no banco
        // ================================
        if (empty($erros)) {

            // Chama o método do Model que salva no banco
            // Retorna o ID inserido ou atualizado
            $id = Usuario::salvar($dados);

            // Redireciona para a lista de usuários
            header('Location: /usuarios');
            exit; 
        } 
        
        // ================================
        // 4- Se houver ERROS → volta para o formulário
        // ================================
        else {

            // Guarda os erros na sessão para mostrar na view
            $_SESSION['erros'] = $erros;

            // Guarda os dados preenchidos para não perder o que o usuário digitou
            $_SESSION['dados'] = $dados;

            // Redireciona de volta para o formulário de cadastro
            header('Location: /usuarios/inserir');
            exit;
        }
    }
}

?>