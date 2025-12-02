<?php

namespace App\Core;
// Define o namespace onde a classe está localizada,
// ajudando a organizar o projeto e evitar conflitos de nomes.

use PDO;
use PDOException;
// Importa as classes PDO e PDOException para uso no arquivo.

class Database {

    // Método estático para conectar ao banco de dados
    public static function conectar() {

        // Configurações básicas da conexão
        $host = '127.0.0.1';     // Endereço do servidor MySQL
        $porta = '3306';         // Porta padrão do MySQL
        $banco = 'projeto_sprouty'; // Nome do banco de dados
        $usuario = 'root';       // Usuário do MySQL
        $senha = '';             // Senha do MySQL (vazia no XAMPP/WAMP)

        // DSN define qual driver usar e os dados da conexão
        $dsn = "mysql:host=$host;port=$porta;dbname=$banco;charset=utf8";
        // charset=utf8 garante que acentos funcionem corretamente

        try {
            // Cria e retorna uma instância PDO
            return new PDO($dsn, $usuario, $senha, [

                // Habilita exceções para erros (muito melhor para depurar)
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

                // Retorna os resultados como array associativo
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);

        } catch (PDOException $e) {
            // Captura erros de conexão e finaliza o script exibindo mensagem
            die("Erro na conexão: " . $e->getMessage());
        }
    }
}