<?php 

namespace App\Controllers;
// Define o namespace para organizar a estrutura MVC e evitar conflitos de classe.

// Importa o Model de Produto
use App\Models\Produto;

class ProdutoController {

    // ===============================================================
    // MÉTODO LISTAR PRODUTOS
    // ===============================================================
    public function listar() {

        // Chama o Model e a função que busca todos os registros no banco
        // Retorna uma lista (array) com todos os produtos cadastrados
        $lista_produtos = Produto::buscarTodos();

        // A função render() carrega a view solicitada e envia dados para ela
        // 'title' -> título da página que será exibido
        // 'produtos' -> dados retornados do banco e enviados para a tabela
        render("produtos/lista_produtos.php", [
            'title' => "Lista de Produtos",
            'produtos' => $lista_produtos
        ]); 
    }

    // ===============================================================
    // MÉTODO SALVAR PRODUTO
    // ===============================================================
    public function salvar() {

        // 1 - Limpa os dados recebidos do formulário
        // filter_input → previne SQL Injection, XSS e valores inválidos.
        $dados = [
            'id_produto'    => filter_input(INPUT_POST, 'id_produto', FILTER_SANITIZE_NUMBER_INT),
            'nome'          => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS),
            'categoria'     => filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS),
            'descricao'     => filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS),
            'valor_unitario'=> filter_input(INPUT_POST, 'valor_unitario', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION),
            'quantidade'    => filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT)
        ];

        /*
        Explicando cada campo sanitizado:
        - id_produto → somente números permitidos.
        - nome/categoria/descricao → remove códigos HTML maliciosos.
        - valor_unitario → sanitiza mantendo decimais (ex: 10.50).
        - quantidade → somente números inteiros.
        */

    
        // 2 - Cria lista de erros
        // Este array será preenchido se alguma validação falhar
        $erros = [];

    
        // =============================
        // VALIDAÇÃO DO NOME
        // =============================
        if (empty($dados['nome'])) {
            $erros[] = 'O campo NOME não pode ficar em branco!';
        } else if (strlen($dados['nome']) < 3) {
            $erros[] = 'O campo NOME deve ter pelo menos 3 caracteres!';
        }
        // Essa validação impede produtos sem nome ou nomes muito curtos.


        // =============================
        // VALIDAÇÃO DA CATEGORIA
        // =============================
        if (empty($dados['categoria'])) {
            $erros[] = 'O campo CATEGORIA não pode ficar em branco!';
        }
        // Garante que o usuário escolha uma categoria válida no select.


        // =============================
        // VALIDAÇÃO DO VALOR UNITÁRIO
        // =============================
        if (empty($dados['valor_unitario']) || !is_numeric($dados['valor_unitario'])) {
            $erros[] = 'O VALOR UNITÁRIO deve ser um número válido!';
        }
        // Evita valores não numéricos (ex: letras) ou valores vazios.


        // =============================
        // VALIDAÇÃO DA QUANTIDADE
        // =============================
        if ($dados['quantidade'] === '' || $dados['quantidade'] < 0) {
            $erros[] = 'A QUANTIDADE deve ser maior ou igual a 0!';
        }
        // Garante quantidade não negativa e impede valores vazios.


        // ============================================================
        // 3 - SE NÃO HOUVER ERROS → SALVA O PRODUTO
        // ============================================================
        if (empty($erros)) {

            // Método do Model que faz INSERT ou UPDATE no banco
            $id = Produto::salvar($dados);

            // Após salvar, redireciona para a tela de listagem
            header('Location: /produtos');
            exit;
        } 


        // ============================================================
        // 4 - SE HOUVER ERROS → VOLTA PARA O FORMULÁRIO
        // ============================================================
        else {

            // Armazena erros na sessão para serem exibidos na view
            $_SESSION['erros'] = $erros;

            // Salva os dados preenchidos para o formulário não ficar em branco
            $_SESSION['dados'] = $dados;

            // Redireciona para o formulário de cadastro
            header('Location: /produtos/inserir');
            exit;
        }
    }
}

?>