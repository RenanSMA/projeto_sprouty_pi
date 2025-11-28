<?php 
// em qual pasta ele está
namespace APP\Models;

use PDO;
use App\Core\Database;
use PDOException;

//mesmo nome do arquivo
class Usuario{
//declaramos uma funcao para cada operacao do CRUD

//Busca todos os usuarios do BD
public static function buscarTodos(){
//conecta o bd e importa o PDO antes de criar a classe
$pdo = Database::conectar();

//geramos o script sql de consulta 
$sql = "SELECT * FROM usuarios";
//resultado da consulta
return $pdo->query($sql)->fetchAll();
}

public static function salvar($dados){
try{
    $pdo = Database::conectar();
    
    $senha_criptografada = password_hash($dados['senha'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO usuarios (
    nome, genero, cpf, data_nascimento, celular,rua, numero, complemento, bairro, cidade, cep, estado,email, nivel_acesso, senha";
    $sql .= "VALUES  (:nome, :genero, :cpf, :data_nascimento, :celular, :rua, :numero, :complemento, :bairro, :cidade, :cep, :estado,email, :nivel_acesso, :senha)";
//prepara o sql para ser inserido no banco de dados e limpa codigos maliciosos
    $stmt = $pdo->prepare($sql);

    //passa as variaveis para o sql

    $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
    $stmt->bindParam(':cpf', $dados['cpf'], PDO::PARAM_STR);
    $stmt->bindParam(':data_nascimento', $dados['data_nascimento'], PDO::PARAM_STR);
    $stmt->bindParam(':celular', $dados['celular'], PDO::PARAM_STR);
    $stmt->bindParam(':rua', $dados['rua'], PDO::PARAM_STR);
    $stmt->bindParam(':numero', $dados['numero'], PDO::PARAM_STR);
    $stmt->bindParam(':complemento', $dados['complemento'], PDO::PARAM_STR);
    $stmt->bindParam(':bairro', $dados['bairro'], PDO::PARAM_STR);
    $stmt->bindParam(':cidade', $dados['cidade'], PDO::PARAM_STR);
    $stmt->bindParam(':cep', $dados['cep'], PDO::PARAM_STR);
    $stmt->bindParam(':estado', $dados['estado'], PDO::PARAM_STR);
    $stmt->bindParam(':email', $dados['email'], PDO::PARAM_STR);
    $stmt->bindParam(':nivel_acesso', $dados['nivel_acesso'], PDO::PARAM_STR);
    $stmt->bindParam(':genero', $dados['genero'], PDO::PARAM_STR);
    $stmt->bindParam(':senha', $dados['senha'], PDO::PARAM_STR);
   
//executa o sql
$stmt->execute();
//retorna o ID de registro no BD
return(int) $pdo->lastInsertId();

}catch (PDOException $e){
    echo "Erro ao inserir: " . $e->getMessage();
    exit;
}


}










}










?>