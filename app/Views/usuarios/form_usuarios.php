<div class="container mt-5">
  <!-- Título muda conforme o contexto: edição ou cadastro -->
  <h3 class="mb-4">
    <?= isset($dados['id_usuario']) ? "Editar Usuário" : "Cadastro de Usuários" ?>
  </h3>

  <!-- Define a rota de envio do formulário: atualizar ou salvar -->
  <form action="<?= isset($dados['id_usuario']) ? '/usuarios/atualizar/'.$dados['id_usuario'] : '/usuarios/salvar' ?>" method="POST">
    
    <?php if(isset($dados['id_usuario'])): ?>
      <!-- Campo oculto para enviar o ID do usuário na edição -->
      <input type="hidden" name="id_usuario" value="<?= $dados['id_usuario'] ?>">
    <?php endif; ?>

    <div class="row mb-3">
      <div class="col-md-6">
        <!-- Campo de nome -->
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?= $dados['nome'] ?? '' ?>" />
      </div>
      <div class="col-md-6">
        <!-- Campo de email -->
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= $dados['email'] ?? '' ?>" />
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-3">
        <!-- Campo de CPF -->
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" value="<?= $dados['cpf'] ?? '' ?>" placeholder="000.000.000-00" />
      </div>
      <div class="col-md-3">
        <!-- Campo de data de nascimento -->
        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?= $dados['data_nascimento'] ?? '' ?>" />
      </div>
      <div class="col-md-3">
        <!-- Campo de gênero -->
        <label for="genere" class="form-label">Gênero</label>
        <input type="text" class="form-control" id="genere" name="genere" value="<?= $dados['genere'] ?? '' ?>" />
      </div>
      <div class="col-md-3">
        <!-- Campo de celular -->
        <label for="celular" class="form-label">Celular</label>
        <input type="text" class="form-control" id="celular" name="celular" value="<?= $dados['celular'] ?? '' ?>" placeholder="(99) 99999-9999" />
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <!-- Select para nível de acesso -->
        <label for="nivel" class="form-label">Nível de Acesso</label>
        <select class="form-select" id="nivel" name="nivel_acesso">
          <option value="">Escolha</option>
          <option value="1" <?= (isset($dados['nivel_acesso']) && $dados['nivel_acesso'] == 1) ? 'selected' : '' ?>>Administrador</option>
          <option value="2" <?= (isset($dados['nivel_acesso']) && $dados['nivel_acesso'] == 2) ? 'selected' : '' ?>>Funcionário</option>
          <option value="3" <?= (isset($dados['nivel_acesso']) && $dados['nivel_acesso'] == 3) ? 'selected' : '' ?>>Cliente</option>
        </select>
      </div>
      <div class="col-md-6">
        <!-- Campo de CEP -->
        <label for="cep" class="form-label">CEP</label>
        <input type="text" class="form-control" id="cep" name="cep" value="<?= $dados['cep'] ?? '' ?>" />
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <!-- Campo de rua -->
        <label for="rua" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="rua" name="rua" value="<?= $dados['rua'] ?? '' ?>" />
      </div>
      <div class="col-md-3">
        <!-- Campo de número -->
        <label for="numero" class="form-label">Número</label>
        <input type="text" class="form-control" id="numero" name="numero" value="<?= $dados['numero'] ?? '' ?>" />
      </div>
      <div class="col-md-3">
        <!-- Campo de bairro -->
        <label for="bairro" class="form-label">Bairro</label>
        <input type="text" class="form-control" id="bairro" name="bairro" value="<?= $dados['bairro'] ?? '' ?>" />
      </div>
    </div>

    <div class="row mb-4">
      <div class="col-md-6">
        <!-- Campo de cidade -->
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade" value="<?= $dados['cidade'] ?? '' ?>" />
      </div>
      <div class="col-md-6">
        <!-- Select de estado com nomes completos visíveis -->
        <label for="estado" class="form-label">Estado</label>
        <select class="form-select" id="estado" name="estado">
          <option value="">Escolha</option>
          <option value="AC" <?= ($dados['estado'] ?? '') == "AC" ? 'selected' : '' ?>>Acre</option>
          <option value="AL" <?= ($dados['estado'] ?? '') == "AL" ? 'selected' : '' ?>>Alagoas</option>
          <option value="AP" <?= ($dados['estado'] ?? '') == "AP" ? 'selected' : '' ?>>Amapá</option>
          <option value="AM" <?= ($dados['estado'] ?? '') == "AM" ? 'selected' : '' ?>>Amazonas</option>
          <option value="BA" <?= ($dados['estado'] ?? '') == "BA" ? 'selected' : '' ?>>Bahia</option>
          <option value="CE" <?= ($dados['estado'] ?? '') == "CE" ? 'selected' : '' ?>>Ceará</option>
          <option value="DF" <?= ($dados['estado'] ?? '') == "DF" ? 'selected' : '' ?>>Distrito Federal</option>
          <option value="ES" <?= ($dados['estado'] ?? '') == "ES" ? 'selected' : '' ?>>Espírito Santo</option>
          <option value="GO" <?= ($dados['estado'] ?? '') == "GO" ? 'selected' : '' ?>>Goiás</option>
          <option value="MA" <?= ($dados['estado'] ?? '') == "MA" ? 'selected' : '' ?>>Maranhão</option>
          <option value="MT" <?= ($dados['estado'] ?? '') == "MT" ? 'selected' : '' ?>>Mato Grosso</option>
          <option value="MS" <?= ($dados['estado'] ?? '') == "MS" ? 'selected' : '' ?>>Mato Grosso do Sul</option>
          <option value="MG" <?= ($dados['estado'] ?? '') == "MG" ? 'selected' : '' ?>>Minas Gerais</option>
          <option value="PA" <?= ($dados['estado'] ?? '') == "PA" ? 'selected' : '' ?>>Pará</option>
          <option value="PB" <?= ($dados['estado'] ?? '') == "PB" ? 'selected' : '' ?>>Paraíba</option>
          <option value="PR" <?= ($dados['estado'] ?? '') == "PR" ? 'selected' : '' ?>>Paraná</option>
          <option value="PE" <?= ($dados['estado'] ?? '') == "PE" ? 'selected' : '' ?>>Pernambuco</option>
          <option value="PI" <?= ($dados['estado'] ?? '') == "PI" ? 'selected' : '' ?>>Piauí</option>
          <option value="RJ" <?= ($dados['estado'] ?? '') == "RJ" ? 'selected' : '' ?>>Rio de Janeiro</option>
          <option value="RN" <?= ($dados['estado'] ?? '') == "RN" ? 'selected' : '' ?>>Rio Grande do Norte</option>
          <option value="RS" <?= ($dados['estado'] ?? '') == "RS" ? 'selected' : '' ?>>Rio Grande do Sul</option>
          <option value="RO" <?= ($dados['estado'] ?? '') == "RO" ? 'selected' : '' ?>>Rondônia</option>
          <option value="RR" <?= ($dados['estado'] ?? '') == "RR" ? 'selected' : '' ?>>Roraima</option>
          <option value="SC" <?= ($dados['estado'] ?? '') == "SC" ? 'selected' : '' ?>>Santa Catarina</option>
          <option value="SP" <?= ($dados['estado'] ?? '') == "SP" ? 'selected' : '' ?>>São Paulo</option>
          <option value="SE" <?= ($dados['estado'] ?? '') == "SE" ? 'selected' : '' ?>>Sergipe</option>
          <option value="TO" <?= ($dados['estado'] ?? '') == "TO" ? 'selected' : '' ?>>Tocantins</option>
        </select>
      </div>
    </div>

    <!-- Botão muda conforme o contexto: "Atualizar" se edição, "Salvar" se cadastro -->
    <button type="submit" class="btn btn-cadastrar">
      <?= isset($dados['id_usuario']) ? "Atualizar" : "Salvar" ?>
    </button>
  </form>
</div>

