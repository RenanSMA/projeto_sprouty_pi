<main class="container my-5">
    <!-- container: centraliza e define largura máxima agradável -->
    <!-- my-5: margem vertical grande (topo e base) -->

    <h2 class="text-center mb-5">Cadastro de Produtos</h2>
    <!-- text-center: centraliza o título -->
    <!-- mb-5: margem inferior grande -->

    <div class="form-section mx-auto col-lg-10 col-xl-8">
        <!-- mx-auto: centraliza horizontalmente -->
        <!-- col-lg-10: largura responsiva para telas grandes -->
        <!-- col-xl-8: largura mais reduzida em telas extra grandes -->

        <form action="/produtos/salvar" method="POST">
            <!-- action: URL que receberá os dados enviados -->
            <!-- method POST: envia os dados sem aparecer na URL -->

            <h5 class="mb-3 text-success">Informações do Produto</h5>
            <!-- text-success: cor verde -->
            <!-- mb-3: margem inferior média -->

            <div class="row g-3 mb-4">
                <!-- row: inicia linha do grid para organizar campos -->
                <!-- g-3: gap de 1rem entre colunas e linhas -->
                <!-- mb-4: margem inferior para separar seções -->

                <div class="col-md-6">
                    <!-- col-md-6: metade da largura em telas médias ou maiores -->

                    <label for="nome" class="form-label">Nome do Produto</label>
                    <!-- form-label: estilização padrão das labels -->

                    <input type="text" id="nome" name="nome" class="form-control"
                        placeholder="Digite o nome do produto">
                    <!-- form-control: estilização de campo -->
                    <!-- placeholder: texto de exemplo dentro do campo -->
                </div>

                <div class="col-md-6">
                    <label for="categoria" class="form-label">Categoria</label>

                    <select id="categoria" name="categoria" class="form-select">
                        <!-- form-select: estilização padrão de selects -->
                        <option selected disabled>Selecione</option>
                        <!-- selected: aparece como primeira opção -->
                        <!-- disabled: impede seleção da opção -->

                        <option value="hortalicas">Hortaliças</option>
                        <option value="frutas">Frutas</option>
                        <option value="grãos">Grãos</option>
                        <option value="sementes">Sementes</option>
                        <option value="outros">Outros</option>
                    </select>
                </div>

                <div class="col-12">
                    <!-- col-12: ocupa largura total -->

                    <label for="descricao" class="form-label">Descrição</label>

                    <textarea id="descricao" name="descricao" class="form-control" rows="3"
                        placeholder="Descreva o produto"></textarea>
                    <!-- textarea: campo de múltiplas linhas -->
                    <!-- rows="3": altura inicial -->
                </div>

                <div class="col-md-4">
                    <!-- col-md-4: 1/3 da linha em telas médias -->

                    <label for="quantidade" class="form-label">Quantidade</label>

                    <input type="number" id="quantidade" name="quantidade" class="form-control"
                        placeholder="0" min="0">
                    <!-- min="0": não permite números negativos -->
                </div>

                <div class="col-md-4">
                    <label for="valor_unitario" class="form-label">Valor Unitário (R$)</label>

                    <input type="number" id="valor_unitario" name="valor_unitario" step="0.01" min="0"
                        class="form-control" placeholder="0,00">
                    <!-- step="0.01": permite casas decimais -->
                </div>
            </div>

            <!-- ====== BOTÕES DO FORMULÁRIO ====== -->
            <div class="row pt-3 border-top">
                <!-- row: organiza os botões -->
                <!-- pt-3: padding-top, espaçamento superior -->
                <!-- border-top: linha separando o formulário dos botões -->

                <div class="col-md-6">
                    <a href="/produtos" class="btn btn-light">Voltar</a>
                    <!-- btn-light: botão claro, mais suave -->
                </div>

                <div class="col-md-6 text-end">
                    <!-- text-end: alinha elementos à direita -->

                    <button type="reset" class="btn btn-secondary me-2">Limpar</button>
                    <!-- btn-secondary: botão cinza -->
                    <!-- me-2: margin-end (direita) para afastar do outro botão -->

                    <button type="submit" class="btn btn-success">Salvar</button>
                    <!-- btn-success: botão verde indicando ação principal -->
                </div>
            </div>

        </form>
    </div>
</main>