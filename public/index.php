<?php
//Importa o autoload do Composer para carregar as rotas.
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\UsuarioController;

// funcao para renderizar as telas com layout
function render($view, $data = []) {
    //extrai os dados recbidos e converte em variáveis
    extract($data);
    ob_start();
   //exibe a tela específica
    require __DIR__ . '/../app/Views/' . $view;
    $content = ob_get_clean();
    //inclui o layout base que usará a variável $content
    require __DIR__ . '/../app/Views/layouts/base.php';
}


 
function render_sem_template($view, $data = []) {
    extract($data);
    ob_start();
    require __DIR__ . '/../app/Views/' . $view;
}

// Obtem a URL do navegador.
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($url == "/" ||  $url == "/index.php") {
    render_sem_template('home.php', [
        'title' => 'Bem vindos',
        'lenda' => 'agora eu sou uma lenda'
    ]);
}
elseif ($url == '/sobre') {
    render('sobre.php' , ['title' => 'Bem vindo!']);
}
//usuarios 


elseif ($url == '/usuarios') {
  $controller = new UsuarioController();
  $controller->listar();
}



elseif ($url == '/usuarios/inserir') {
    render('usuarios/form_usuarios.php' , ['title' => 'Cadastrar usuários']);
}
// Produtos
elseif ($url == '/produtos') {
    render('produtos/lista_produtos.php' , ['title' => 'Listar produtos']);
}

elseif ($url == '/produtos/inserir') {
    render('produtos/form_produtos.php' , ['title' => 'Cadastrar produtos']);
}





?>

