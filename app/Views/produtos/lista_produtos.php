<main class="container my-5">
    <!-- container: centraliza o conteúdo e aplica margens laterais padrão -->
    <!-- my-5: margem vertical grande (topo e base) -->

    <h2 class="text-center mb-4">Listagem de Produtos</h2>
    <!-- text-center: centraliza o título -->
    <!-- mb-4: margem inferior média -->

    <!-- ===== TOPO: Botão e Busca ===== -->
    <div class="row mb-3">
        <!-- row: inicia uma linha do grid -->
        <!-- mb-3: margem inferior -->

        <div class="col-md-4 mb-2">
            <!-- col-md-4: ocupa 4/12 da linha em telas médias em diante -->
            <!-- mb-2: margem inferior para telas menores -->

            <a href="/produtos/inserir" class="btn btn-success">
                <!-- btn: classe base para botões -->
                <!-- btn-success: botão verde (ação principal) -->

                <i class="bi bi-plus-circle-fill"></i> Novo Produto
                <!-- ícone do Bootstrap Icons -->
            </a>
        </div>

        <div class="col-md-8">
            <!-- campo de busca ocupa 8/12 da linha -->

            <form class="d-flex">
                <!-- d-flex: torna o conteúdo inline flexível -->

                <input class="form-control me-2" type="search" placeholder="Buscar por nome, categoria ou código"
                    aria-label="Search">
                <!-- form-control: estilização Bootstrap para inputs -->
                <!-- me-2: margin-end (margem à direita) -->

                <button class="btn btn-outline-success" type="submit">Buscar</button>
                <!-- btn-outline-success: botão verde com fundo transparente -->
            </form>
        </div>
    </div>

    <!-- ===== CARD PRINCIPAL QUE CONTÉM A TABELA ===== -->
    <div class="card shadow-sm border-0">
        <!-- card: componente visual de bloco -->
        <!-- shadow-sm: pequena sombra -->
        <!-- border-0: remove borda padrão do card -->

        <div class="card-body p-0">
            <!-- p-0: remove padding para a tabela encostar nas bordas -->

            <div class="table-responsive">
                <!-- table-responsive: adiciona scroll horizontal em telas pequenas -->

                <table class="table table-striped table-hover align-middle mb-0">
                    <!-- table: tabela estilizada do Bootstrap -->
                    <!-- table-striped: linhas alternadas com cinza claro -->
                    <!-- table-hover: destaca a linha quando o mouse passa -->
                    <!-- align-middle: centraliza verticalmente -->
                    <!-- mb-0: remove margem inferior da tabela -->

                    <thead>
                        <tr>
                            <!-- Cabeçalho da tabela -->
                            <th scope="col">#</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Preço (R$)</th>
                            <th scope="col">Estoque</th>
                            <th scope="col" class="text-center">Ações</th>
                            <!-- text-center: centraliza o conteúdo da coluna -->
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($produtos as $p): ?>    
                        <!-- Loop PHP: percorre todos os produtos -->

                        <tr>
                            <th scope="row"><?= $p['id_produto'] ?></th>
                            <!-- scope="row": indica que essa célula é o identificador da linha -->

                            <td><?= $p['nome'] ?></td>
                            <td><?= $p['categoria'] ?></td>
                            <td><?= $p['descricao'] ?></td>
                            <td>R$ <?= number_format($p['valor_unitario'], 2, ',', '.') ?></td>
                            <!-- number_format: formata o número para padrão brasileiro -->

                            <td><?= $p['quantidade'] ?></td>

                            <td class="text-center">
                                <!-- área dos botões de ação centralizada -->

                                <button class="btn btn-sm btn-outline-primary me-2" title="Editar">
                                    <!-- btn-sm: botão pequeno -->
                                    <!-- btn-outline-primary: botão azul com fundo transparente -->
                                    <!-- me-2: margem direita -->

                                    <i class="bi bi-pencil-fill"></i> Editar
                                </button>

                                <button class="btn btn-sm btn-outline-danger" title="Excluir">
                                    <!-- btn-outline-danger: botão vermelho contornado -->

                                    <i class="bi bi-trash-fill"></i> Excluir
                                </button>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ===== RODAPÉ DA TABELA COM PAGINAÇÃO ===== -->
        <div class="card-footer bg-light d-flex justify-content-center">
            <!-- card-footer: área inferior estilizada -->
            <!-- bg-light: fundo cinza claro -->
            <!-- d-flex: ativa o flexbox -->
            <!-- justify-content-center: centraliza horizontalmente -->

            <nav aria-label="Paginação da Lista">
                <ul class="pagination mb-0">
                    <!-- pagination: componente Bootstrap para paginação -->
                    <!-- mb-0: remove margem inferior -->

                    <li class="page-item disabled">
                        <!-- page-item: item da paginação -->
                        <!-- disabled: desabilitado (não clicável) -->
                        <a class="page-link" href="#">Anterior</a>
                    </li>

                    <li class="page-item active">
                        <!-- active: página atual -->
                        <a class="page-link" href="#">1</a>
                    </li>

                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>

                    <li class="page-item">
                        <a class="page-link" href="#">Próxima</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</main>