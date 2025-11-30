<div class="container mt-5">
  <h3 class="mb-4">Cadastro de Usuários</h3>
  <form action="/usuarios/salvar" method="POST">
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" />
      </div>
      <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" />
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-3">
        <label for="cpf" class="form-label">CPF</label>
        <input
          type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" />
      </div>
      <div class="col-md-3">
        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="dd/mm/aaaa" />
      </div>
      <div class="col-md-3">
        <label for="genere" class="form-label">Gênero</label>
        <input type="text" class="form-control" id="genere" name="genere" />
      </div>
      <div class="col-md-3">
        <label for="celular" class="form-label">Celular</label>
        <input type="text" class="form-control" id="celular" name="celular" placeholder="(99) 99999-9999" />
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <label for="nivel" class="form-label">Nível de Acesso</label>
        <select class="form-select" id="nivel" name="nivel_acesso">
          <option selected>Escolha</option>
          <option value="1">Administrador</option>
          <option value="2">Funcionário</option>
          <option value="2">Cliente</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="cep" class="form-label">CEP</label>
        <input type="text" class="form-control" id="cep" name="cep"/>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <label for="rua" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="rua" name="rua" />
      </div>
      <div class="col-md-3">
        <label for="numero" class="form-label">Número</label>
        <input type="text" class="form-control" id="numero" name="numero" />
      </div>
      <div class="col-md-3">
        <label for="bairro" class="form-label">Bairro</label>
        <input type="text" class="form-control" id="bairro" name="bairro" />
      </div>
    </div>

    <div class="row mb-4">
      <div class="col-md-6">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade"/>
      </div>
      <div class="col-md-6">
        <label for="estado" class="form-label">Estado</label>
        <select class="form-select" id="estado" name="estado">
          <option selected>Escolha</option>
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
        </a>
      </div>
    </div>
    <button type="submit" class="btn btn-cadastrar">Salvar</button>
  </form>
</div>