<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprouty - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="/css/reset.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>


<body>

    <header>
        <div class="super-info-bg">
            <div class="super-info">
                <p>Seg / Sex - 07:00 às 15:00</p>
                <a href="tel:+552199999999">+55 19 9999-9999</a>
                <p>Av. Tom Traugott Wildi, 100 – Praia Brava, Florianópolis – SC</p>
            </div>
        </div>

        <nav class="menu-bg">
            <div class="menu">
                <div class="menu-logo">
                    <a href="#">Sprouty 🌱</a>
                </div>
                <nav class="menu-nav">
                    <ul>
                    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="usuariosDropdown" role="button" data-bs-toggle="dropdown"
        >
        Usuários
    </a>
    <ul class="dropdown-menu" aria-labelledby="usuariosDropdown">
        <li><a class="dropdown-item" href="/usuarios/inserir">Cadastro Usuários</a></li>
        <li><a class="dropdown-item" href="/usuarios">Listagem Usuários</a></li>
    </ul>
</li>

                        <li><a href="/ptodutos/inserir">Cadastro Produtos</a></li>
                        <li><a href="/produtos">Listagem Produtos</a></li>
                        <li><a href="/home">Dashboard</a></li>
                        <li><a href="/">Login</a></li>
                    </ul>
                </nav>
            </div>
        </nav>
    </header>
    <div class="container"><?= $content ?> </div>
  
    <footer class="footer">
        <p>Sprouty © Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>