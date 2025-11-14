

<main class="container my-5">
    <h2 class="text-center mb-4">Listagem de Usuários Cadastrados</h2>

    <div class="row mb-3">
        <div class="col-md-4 mb-2">
            <a href="/usuarios/inserir" class="btn btn-success">
                <i class="bi bi-plus-circle-fill"></i> Novo Usuário
            </a>
        </div>
        <div class="col-md-8">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar por nome, e-mail ou CPF" aria-label="Search">
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
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Gênero</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Data Nascimento</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">CEP</th>
                            <th scope="col">Estado</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Nível de Acesso</th>
                            <th scope="col" class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($usuarios as $u): ?>    
                        <tr>
                            <th scope="row"><?= $u['id_usuario'] ?></th>
                            <td><?= $u['nome'] ?></td>
                            <td><?= strtoupper($u['genero']) ?></td>
                            <td><?= $u['cpf'] ?></td>
                            <td><?= date('d/m/Y', strtotime($u['data_nascimento'])) ?></td>
                            <td><?= $u['celular'] ?></td>
                            <td>
                                <?= $u['rua'] ?>, <?= $u['numero'] ?>
                                <?php if(!empty($u['complemento'])): ?>
                                    - <?= $u['complemento'] ?>
                                <?php endif; ?>
                                <br>
                                <?= $u['bairro'] ?>
                            </td>
                            <td><?= $u['cidade'] ?></td>
                            <td><?= $u['cep'] ?></td>
                            <td><?= $u['estado'] ?></td>
                            <td><?= $u['email'] ?></td>
                            <td>
                                <span class="badge 
                                    <?= $u['nivel_acesso'] == 'Administrador' ? 'bg-success' : '' ?>
                                    <?= $u['nivel_acesso'] == 'Funcionário' ? 'bg-primary' : '' ?>
                                    <?= $u['nivel_acesso'] == 'Cliente' ? 'bg-secondary' : '' ?>
                                ">
                                    <?= $u['nivel_acesso'] ?>
                                </span>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-primary me-2" title="Editar">
                                    <i class="bi bi-pencil-fill"></i> Editar
                                </button>
                                <button class="btn btn-sm btn-outline-danger" title="Excluir">
                                    <i class="bi bi-trash-fill"></i> Excluir
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
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
