<?php 

// Define em qual pasta a classe está, seguindo o padrão do projeto MVC
namespace App\Models;

use PDO; // Importa PDO para manipulação de banco de dados
use App\Core\Database; // Importa a classe Database que gerencia a conexão
use PDOException; // Para tratar erros de conexão ou SQL

// Define a classe Usuario, que representa a tabela de usuários no banco
class Usuario {

    // =============================================================
    // FUNÇÃO BUSCAR TODOS OS USUÁRIOS
    // =============================================================
    public static function buscarTodos() {
        // Conecta ao banco de dados usando a classe Database
        $pdo = Database::conectar();

        // Cria a query SQL para buscar todos os usuários
        $sql = "SELECT * FROM usuarios";

        // Executa a consulta e retorna todos os resultados como array associativo
        return $pdo->query($sql)->fetchAll();
    }

    // =============================================================
    // FUNÇÃO SALVAR UM USUÁRIO
    // =============================================================
    public static function salvar($dados) {
        try {
            // Conecta ao banco de dados
            $pdo = Database::conectar();

            // Criptografa a senha usando BCRYPT antes de salvar
            $senha_criptografada = password_hash($dados['senha'], PASSWORD_BCRYPT);

            // Cria o SQL de inserção usando placeholders para segurança
            $sql = "INSERT INTO usuarios (
                nome, genero, cpf, nascimento, celular, endereco, numero, complemento, cidade, cep, estado, email, nivel_acesso, senha
            ) VALUES (
                :nome, :genero, :cpf, :nascimento, :celular, :endereco, :numero, :complemento, :cidade, :cep, :estado, :email, :nivel_acesso, :senha
            )";

            // Prepara o SQL para execução segura
            $stmt = $pdo->prepare($sql);

            // Passa os valores do array $dados para os placeholders do SQL
            $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $stmt->bindParam(':genero', $dados['genero'], PDO::PARAM_STR);
            $stmt->bindParam(':cpf', $dados['cpf'], PDO::PARAM_STR);
            $stmt->bindParam(':nascimento', $dados['nascimento'], PDO::PARAM_STR);
            $stmt->bindParam(':celular', $dados['celular'], PDO::PARAM_STR);
            $stmt->bindParam(':endereco', $dados['endereco'], PDO::PARAM_STR);
            $stmt->bindParam(':numero', $dados['numero'], PDO::PARAM_STR);
            $stmt->bindParam(':complemento', $dados['complemento'], PDO::PARAM_STR);
            $stmt->bindParam(':cidade', $dados['cidade'], PDO::PARAM_STR);
            $stmt->bindParam(':cep', $dados['cep'], PDO::PARAM_STR);
            $stmt->bindParam(':estado', $dados['estado'], PDO::PARAM_STR);
            $stmt->bindParam(':email', $dados['email'], PDO::PARAM_STR);
            $stmt->bindParam(':nivel_acesso', $dados['nivel_acesso'], PDO::PARAM_STR);
            $stmt->bindParam(':senha', $senha_criptografada); // senha já criptografada

            // Executa o comando SQL no banco
            $stmt->execute();

            // Retorna o ID do registro inserido no banco
            return (int) $pdo->lastInsertId();

        } catch (PDOException $e) {
            // Em caso de erro, exibe mensagem e encerra o script
            echo "Erro ao inserir usuário: " . $e->getMessage();
            exit;
        }
    }
}
?>