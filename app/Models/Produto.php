<?php 

// Define o namespace da classe, mantendo organização do projeto
namespace App\Models;

use PDO; 
use App\Core\Database;  // Importa a classe Database que gerencia a conexão
use PDOException;

// Nome da classe deve coincidir com o arquivo: Produto.php
class Produto {

    // =============================================================
    // FUNÇÃO BUSCAR TODOS OS PRODUTOS
    // =============================================================
    public static function buscarTodos(){
        // Conecta ao banco usando a classe Database
        $pdo = Database::conectar();

        // Cria o SQL que busca todos os registros da tabela produtos
        $sql = "SELECT * FROM produtos";

        // Executa a consulta e retorna todos os resultados como array associativo
        return $pdo->query($sql)->fetchAll();
    }

    // =============================================================
    // FUNÇÃO SALVAR PRODUTO
    // =============================================================
    public static function salvar($dados){
        try {
            // Conecta ao banco
            $pdo = Database::conectar();

            // SQL com placeholders para prevenção de SQL injection
            $sql = "INSERT INTO produtos (nome, descricao, quantidade, valor_unitario, categoria) 
                    VALUES (:nome, :descricao, :quantidade, :valor_unitario, :categoria)";

            // Prepara o statement (limpa os dados antes de inserir)
            $stmt = $pdo->prepare($sql);

            // Vincula os valores do array $dados aos placeholders do SQL
            $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $stmt->bindParam(':descricao', $dados['descricao'], PDO::PARAM_STR);
            $stmt->bindParam(':quantidade', $dados['quantidade'], PDO::PARAM_INT);
            $stmt->bindParam(':valor_unitario', $dados['valor_unitario']); // PDO trata float automaticamente
            $stmt->bindParam(':categoria', $dados['categoria'], PDO::PARAM_STR);

            // Executa o INSERT
            $stmt->execute();

            // Retorna o ID do registro inserido
            return $pdo->lastInsertId();

        } catch (PDOException $e) {
            // Caso ocorra erro, exibe a mensagem e interrompe o script
            echo "Erro ao inserir produto: " . $e->getMessage();
            exit;
        }
    }
}

?>