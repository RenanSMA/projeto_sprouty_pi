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
        'usuarios' => $lista_usuarios]);
    }
}








?>