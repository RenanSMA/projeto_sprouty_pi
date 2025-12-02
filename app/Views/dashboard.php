<main>

    <!-- ====== IMAGEM DO DASHBOARD ====== -->
    <div class="container-fluid dashboard-image-container">
        <!-- container-fluid = largura 100% da tela -->
        
        <div class="row justify-content-center">
            <!-- row = linha do grid -->
            <!-- justify-content-center = centraliza elementos horizontalmente -->

            <div class="col-12 text-center">
                <!-- col-12 = ocupa 100% da largura em todas as telas -->
                <!-- text-center = centraliza o conteúdo dentro da coluna -->

                <img src="/imgs/img-dashboard.jpg" alt="Paisagem">
                <!-- Imagem que representa o dashboard -->
            </div>
        </div>
    </div>


    <!-- ====== ÁREA PRINCIPAL DOS CARDS ====== -->
    <div class="container my-5">
        <!-- container = centraliza conteúdo com bordas largas -->
        <!-- my-5 = margem vertical grande (topo e bottom) -->

        <div class="row mt-5">
            <!-- row = linha do grid -->
            <!-- mt-5 = margem superior grande -->

            
            <!-- =========================================== -->
            <!-- CARD 1: Ver Usuários -->
            <!-- =========================================== -->
            <div class="col-md-6 col-lg-4 mb-4">
                <!-- col-md-6 = ocupa metade da tela em telas médias -->
                <!-- col-lg-4 = ocupa 1/3 da tela em telas grandes -->
                <!-- mb-4 = margem inferior entre cards -->

                <div class="card h-100 shadow-sm border-0">
                    <!-- card = componente visual Bootstrap -->
                    <!-- h-100 = card tem altura total da coluna -->
                    <!-- shadow-sm = sombra suave -->
                    <!-- border-0 = remove borda padrão -->

                    <div class="card-body">
                        <!-- card-body = conteúdo interno do card -->

                        <h5 class="card-title text-success">
                            <!-- card-title = estilização do título -->
                            <!-- text-success = texto verde -->
                            Ver Usuários
                        </h5>

                        <p class="card-text">
                            <!-- card-text = parágrafo estilizado -->
                            Acesse a lista completa de usuários cadastrados no sistema.
                        </p>

                        <a href="/usuarios" class="btn btn-outline-success">
                            <!-- btn-outline-success = botão verde com borda -->
                            Ir para Listagem
                        </a>
                    </div>
                </div>
            </div>


            <!-- =========================================== -->
            <!-- CARD 2: Cadastrar Usuário -->
            <!-- =========================================== -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">

                        <h5 class="card-title text-primary">
                            <!-- text-primary = azul -->
                            Cadastrar Novo
                        </h5>

                        <p class="card-text">
                            Adicione um novo usuário ao seu banco de dados.
                        </p>

                        <a href="/usuarios/inserir" class="btn btn-outline-primary">
                            <!-- btn-outline-primary = botão azul com borda -->
                            Cadastrar Usuário
                        </a>

                    </div>
                </div>
            </div>


            <!-- =========================================== -->
            <!-- CARD 3: Ver Produtos -->
            <!-- =========================================== -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">

                        <h5 class="card-title text-success">
                            Ver Produtos
                        </h5>

                        <p class="card-text">
                            Confira a lista completa de produtos cadastrados no sistema.
                        </p>

                        <a href="/produtos" class="btn btn-outline-success">
                            Ir para Listagem
                        </a>

                    </div>
                </div>
            </div>


            <!-- =========================================== -->
            <!-- CARD 4: Cadastrar Produto -->
            <!-- =========================================== -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">

                        <h5 class="card-title text-primary">
                            Cadastrar Produto
                        </h5>

                        <p class="card-text">
                            Adicione um novo produto ao seu banco de dados.
                        </p>

                        <a href="/produtos/inserir" class="btn btn-outline-primary">
                            Cadastrar Produto
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</main>