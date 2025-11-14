
    <div class="container mt-5">
      <h3 class="mb-4">Cadastro de Usuários</h3>
      <form>
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" />
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" />
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-3">
            <label for="cpf" class="form-label">CPF</label>
            <input
              type="text"
              class="form-control"
              id="cpf"
              placeholder="000.000.000-00"
            />
          </div>
          <div class="col-md-3">
            <label for="dataNascimento" class="form-label"
              >Data de Nascimento</label
            >
            <input
              type="text"
              class="form-control"
              id="dataNascimento"
              placeholder="dd/mm/aaaa"
            />
          </div>
          <div class="col-md-3">
            <label for="genero" class="form-label">Gênero</label>
            <input type="text" class="form-control" id="genero" />
          </div>
          <div class="col-md-3">
            <label for="celular" class="form-label">Celular</label>
            <input
              type="text"
              class="form-control"
              id="celular"
              placeholder="(99) 99999-9999"
            />
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="nivel" class="form-label">Nível de Acesso</label>
            <select class="form-select" id="nivel">
              <option selected>ESCOLHA</option>
              <option value="1">Administrador</option>
              <option value="2">Funcionário</option>
              <option value="2">Cliente</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" />
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" />
          </div>
          <div class="col-md-3">
            <label for="numero" class="form-label">Número</label>
            <input type="text" class="form-control" id="numero" />
          </div>
          <div class="col-md-3">
            <label for="complemento" class="form-label">Complemento</label>
            <input type="text" class="form-control" id="complemento" />
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-md-6">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" />
          </div>
          <div class="col-md-6">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-select" id="estado">
              <option selected>ESCOLHA</option>
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
            </select>
          </div>
        </div>

        