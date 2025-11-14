

    <main class="container my-5">
        <h2 class="text-center mb-4">Listagem de Produtos</h2>

        <div class="row mb-3">
            <div class="col-md-4 mb-2">
                <a href="/produtos/inserir" class="btn btn-success">
                    <i class="bi bi-plus-circle-fill"></i> Novo Produto
                </a>
            </div>
            <div class="col-md-8">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar por nome, categoria ou código"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Produto</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Preço (R$)</th>
                                <th scope="col">Estoque</th>
                                <th scope="col" class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Adubo Orgânico Premium</td>
                                <td>Jardinagem</td>
                                <td>59,90</td>
                                <td>120</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-outline-primary me-2" title="Editar">
                                        <i class="bi bi-pencil-fill"></i> Editar
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" title="Excluir">
                                        <i class="bi bi-trash-fill"></i> Excluir
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Regador Verde 2L</td>
                                <td>Ferramentas</td>
                                <td>29,90</td>
                                <td>85</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-outline-primary me-2" title="Editar">
                                        <i class="bi bi-pencil-fill"></i> Editar
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" title="Excluir">
                                        <i class="bi bi-trash-fill"></i> Excluir
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Sementes de Manjericão</td>
                                <td>Hortaliças</td>
                                <td>9,90</td>
                                <td>300</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-outline-primary me-2" title="Editar">
                                        <i class="bi bi-pencil-fill"></i> Editar
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" title="Excluir">
                                        <i class="bi bi-trash-fill"></i> Excluir
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer bg-light d-flex justify-content-center">
                <nav aria-label="Paginação da Lista">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Próxima</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
