

    <main class="container my-5">
        <h2 class="text-center mb-4">Listagem de Usuários Cadastrados</h2>

        <div class="row mb-3">
            <div class="col-md-4 mb-2">
                <a href="/usuarios/form_usuarios.php" class="btn btn-success">
                    <i class="bi bi-plus-circle-fill"></i> Novo Usuário
                </a>
            </div>
            <div class="col-md-8">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar por nome, e-mail ou CPF"
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
                                <th scope="col">Nome</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Nível de Acesso</th>
                                <th scope="col">Telefone</th>
                                <th scope="col" class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>João Silva</td>
                                <td>joao.silva@sprouty.com</td>
                                <td><span class="badge bg-success">Administrador</span></td>
                                <td>(11) 98765-4321</td>
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
                                <td>Maria Oliveira</td>
                                <td>maria.oliveria@cliente.com</td>
                                <td><span class="badge bg-primary">Usuário</span></td>
                                <td>(19) 99999-0000</td>
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
                                <td>Carlos Santos</td>
                                <td>carlos.santos@parceiro.com</td>
                                <td><span class="badge bg-primary">Usuário</span></td>
                                <td>(21) 91234-5678</td>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</body>

</html>