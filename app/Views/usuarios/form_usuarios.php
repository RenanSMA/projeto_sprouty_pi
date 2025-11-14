
    <main class="container my-5">
        <h2 class="text-center mb-5">Cadastro de Usuários</h2>

        <div class="form-section mx-auto col-lg-10 col-xl-8">

            <form>

                <h5 class="mb-3 text-success">Informações Pessoais</h5>
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control"
                            placeholder="Digite o nome completo">
                    </div>

                    <div class="col-md-6">
                        <label for="genero" class="form-label">Gênero</label>
                        <select id="genero" name="genero" class="form-select">
                            <option selected disabled> Selecione </option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Outro">Outro</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="celular" class="form-label">Celular</label>
                        <input type="tel" id="celular" name="celular" class="form-control"
                            placeholder="(00) 00000-0000">
                    </div>

                    <div class="col-md-6">
                        <label for="nascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" id="nascimento" name="nascimento" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" id="cpf" name="cpf" class="form-control" placeholder="000.000.000-00">
                    </div>
                </div>

                <h5 class="mb-3 text-success">Dados de Acesso</h5>
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" id="email" name="email" class="form-control"
                            placeholder="exemplo@dominio.com">
                    </div>

                    <div class="col-md-6">
                        <label for="nivel_acesso" class="form-label">Nível de Acesso</label>
                        <select id="nivel_acesso" name="nivel_acesso" class="form-select">
                            <option selected disabled> Escolha </option>
                            <option value="cliente">Cliente</option>
                            <option value="colaborador">Colaborador</option>
                            <option value="administrador">Administrador</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" id="senha" name="senha" class="form-control"
                            placeholder="Digite sua senha">
                    </div>
                    <div class="col-md-6">
                        <label for="confirmar_senha" class="form-label">Confirmar Senha</label>
                        <input type="password" id="confirmar_senha" name="confirmar_senha" class="form-control"
                            placeholder="Confirme sua senha">
                    </div>
                </div>

                <h5 class="mb-3 text-success">Endereço</h5>
                <div class="row g-3 mb-4">
                    <div class="col-md-3">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" id="cep" name="cep" class="form-control" placeholder="00000-000">
                    </div>
                    <div class="col-md-7">
                        <label for="endereco" class="form-label">Rua</label>
                        <input type="text" id="endereco" name="endereco" class="form-control"
                            placeholder="Rua, avenida, etc.">
                    </div>
                    <div class="col-md-2">
                        <label for="numero" class="form-label">Número</label>
                        <input type="text" id="numero" name="numero" class="form-control">
                    </div>

                    <div class="col-md-4">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" id="complemento" name="complemento" class="form-control"
                            placeholder="Apto, bloco, etc.">
                    </div>
                    <div class="col-md-4">
                        <label for="cidade" class="form-label">Cidade</label>
                        <input type="text" id="cidade" name="cidade" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="estado" class="form-label">Estado</label>
                        <select id="estado" name="estado" class="form-select">
                            <option selected disabled> Escolha </option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            <option value="EX">Estrangeiro</option>
                        </select>
                    </div>
                </div>

                <div class="row pt-3 border-top">
                    <div class="col-md-6">
                        <a href="/usuarios" class="btn btn-light">Voltar</a>
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