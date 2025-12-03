<!DOCTYPE html>
<html lang="pt-BR">
<!-- Define o idioma como português brasileiro -->

<head>
    <meta charset="UTF-8">
    <!-- Define a codificação de caracteres como UTF-8 -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Torna o site responsivo em dispositivos móveis -->

    <title>Sprouty - Dashboard</title>

    <!-- Bootstrap CSS (framework principal de layout/responsividade) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Biblioteca de ícones Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Arquivos CSS personalizados -->
    <link rel="stylesheet" type="text/css" href="/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>

    <!-- ================== CABEÇALHO SUPERIOR (REFERENCIAS E TELEFONE) ================== -->
    <header>
        <div class="super-info-bg">
            <!-- Classe personalizada do seu CSS para fundo superior -->

            <div class="super-info">
                <!-- Área com horário e contato -->

                <p>Seg / Sex - 07:00 às 15:00</p>
                <a href="tel:+552199999999">+55 19 9999-9999</a>
                <p>Av. Tom Traugott Wildi, 100 – Praia Brava, Florianópolis – SC</p>
            </div>
        </div>

        <!-- ================== NAVBAR BOOTSTRAP ================== -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <!-- navbar: componente de navegação -->
            <!-- navbar-expand-lg: expande o menu a partir de telas grandes -->
            <!-- navbar-dark: texto claro ideal para fundos escuros -->
            <!-- bg-success: fundo verde do Bootstrap -->

            <div class="container">
                <!-- container: centraliza o conteúdo da navbar -->

                <a class="navbar-brand text-white" href="/home">Sprouty 🌱</a>
                <!-- navbar-brand: estiliza o nome/logo da marca -->
                <!-- text-white: força cor branca -->

                <!-- BOTÃO QUE APARECE NO CELULAR -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>
                    <!-- Ícone do botão responsivo -->
                </button>

                <!-- MENU COLAPSÁVEL -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <!-- collapse: permite esconder/exibir conteúdo -->
                    <!-- navbar-collapse: estiliza como menu principal -->

                    <ul class="navbar-nav ms-auto">
                        <!-- navbar-nav: lista padrão da navbar -->
                        <!-- ms-auto: empurra os itens para o lado direito -->

                        <li class="nav-item">
                            <a class="nav-link text-white" href="/home">Dashboard</a>
                            <!-- nav-link: link de navegação -->
                        </li>

                        <!-- =============== DROPDOWN PRODUTOS =============== -->
                        <li class="nav-item dropdown">
                            <!-- dropdown: ativa comportamento de submenu -->

                            <a class="nav-link dropdown-toggle text-white" href="#" id="produtosDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Produtos
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="produtosDropdown">
                                <!-- dropdown-menu: caixa com os itens do submenu -->
                                <li><a class="dropdown-item" href="/produtos/inserir">Cadastrar Produto</a></li>
                                <li><a class="dropdown-item" href="/produtos">Listar Produtos</a></li>
                            </ul>
                        </li>

                        <!-- =============== DROPDOWN USUÁRIOS =============== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="usuariosDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Usuários
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="usuariosDropdown">
                                <li><a class="dropdown-item" href="/usuarios/inserir">Cadastrar Usuário</a></li>
                                <li><a class="dropdown-item" href="/usuarios">Listar Usuários</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- ÁREA PRINCIPAL ONDE AS PÁGINAS SÃO RENDERIZADAS -->
    <div class="container">
        <?= $content ?>
        <!-- Aqui o PHP insere dinamicamente o conteúdo das páginas -->
    </div>

    <!-- ================== RODAPÉ ================== -->
    <footer class="footer">
        <!-- Classe personalizada no seu CSS -->
        <p>Sprouty © Todos os direitos reservados. - Desenvolvido por Fernando Bernini e Renan Santos</p>
    </footer>

    <!-- Scripts JS necessários para dropdowns, collapses e navegações funcionarem -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>