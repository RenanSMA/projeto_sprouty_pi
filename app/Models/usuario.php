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

    $stmt = $pdo->prepare($sql);

}catch (PDOException $e){
    echo "Erro ao inserir: " . $e->getMessage();
    exit;
}


}










}










?>