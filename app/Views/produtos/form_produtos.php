

    <main class="container my-5">
        <h2 class="text-center mb-5">Cadastro de Produtos</h2>

        <div class="form-section mx-auto col-lg-10 col-xl-8">

            <form>
                <h5 class="mb-3 text-success">Informações do Produto</h5>

                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <label for="nome" class="form-label">Nome do Produto</label>
                        <input type="text" id="nome" name="nome" class="form-control"
                            placeholder="Digite o nome do produto">
                    </div>

                    <div class="col-md-6">
                        <label for="categoria" class="form-label">Categoria</label>
                        <select id="categoria" name="categoria" class="form-select">
                            <option selected disabled>Selecione</option>
                            <option value="hortalicas">Hortaliças</option>
                            <option value="frutas">Frutas</option>
                            <option value="grãos">Grãos</option>
                            <option value="sementes">Sementes</option>
                            <option value="outros">Outros</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea id="descricao" name="descricao" class="form-control" rows="3"
                            placeholder="Descreva o produto"></textarea>
                    </div>

                    <div class="col-md-4">
                        <label for="quantidade" class="form-label">Quantidade</label>
                        <input type="number" id="quantidade" name="quantidade" class="form-control"
                            placeholder="0" min="0">
                    </div>

                    <div class="col-md-4">
                        <label for="valor_unitario" class="form-label">Valor Unitário (R$)</label>
                        <input type="number" id="valor_unitario" name="valor_unitario" step="0.01" min="0"
                            class="form-control" placeholder="0,00">
                    </div>
                </div>

                <div class="row pt-3 border-top">
                    <div class="col-md-6">
                        <a href="/produtos" class="btn btn-light">Voltar</a>
                    </div>
                    <div class="col-md-6 text-end">
                        <button type="reset" class="btn btn-secondary me-2">Limpar</button>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>

            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
