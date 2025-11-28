<?php 

namespace App\Controllers;

// Importa o Model de Usuario
use App\Models\Produto;

class ProdutoController{

    // Busca os produtos e chama a tela de listar
    public function listar(){
        // Chama a model e a função que busca os dados e armazena na var
        $lista_produtos = Produto::buscarTodos();

        render("produtos/lista_produtos.php", [
            'title' => "Lista de Produtos",
            'produtos' => $lista_produtos
        ]); 

    }

    public function salvar() {

        // 1 - Limpa os dados recebidos do formulário
        $dados = [
            'id_produto'    => filter_input(INPUT_POST, 'id_produto', FILTER_SANITIZE_NUMBER_INT),
            'nome'          => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS),
            'categoria'     => filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS),
            'descricao'     => filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS),
            'valor_unitario'=> filter_input(INPUT_POST, 'valor_unitario', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION),
            'quantidade'    => filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT)
        ];
    
        // 2 - Cria lista de erros
        $erros = [];
    
        // Nome
        if (empty($dados['nome'])) {
            $erros[] = 'O campo NOME não pode ficar em branco!';
        } else if (strlen($dados['nome']) < 3) {
            $erros[] = 'O campo NOME deve ter pelo menos 3 caracteres!';
        }
    
        // Categoria
        if (empty($dados['categoria'])) {
            $erros[] = 'O campo CATEGORIA não pode ficar em branco!';
        }
    
        // Valor Unitário
        if (empty($dados['valor_unitario']) || !is_numeric($dados['valor_unitario'])) {
            $erros[] = 'O VALOR UNITÁRIO deve ser um número válido!';
        }
    
        // Quantidade
        if ($dados['quantidade'] === '' || $dados['quantidade'] < 0) {
            $erros[] = 'A QUANTIDADE deve ser maior ou igual a 0!';
        }
    
        // 3 - Se não houver erros, salva
        if (empty($erros)) {
    
            $id = Produto::salvar($dados); // chama o Model Produto
    
          //  header('Location: /produtos');
            exit;
    
        } else {
            // 4 - Se houver erros, volta para o formulário
            $_SESSION['erros'] = $erros;
            $_SESSION['dados'] = $dados;
    
           // header('Location: /produtos/inserir');
            exit;
        }
    }
    
}

?>