<div class="container mt-4">
    <!-- Título muda conforme o contexto: edição ou cadastro -->
    <h2 class="section-title">
        <?= isset($dados['id_produto']) ? "Editar Produto" : "Cadastro de Produtos" ?>
    </h2>

    <!-- Define a rota de envio do formulário: atualizar ou salvar -->
    <form action="<?= isset($dados['id_produto']) ? '/produtos/atualizar/'.$dados['id_produto'] : '/produtos/salvar' ?>" method="POST">

      <?php if(isset($dados['id_produto'])): ?>
        <!-- Campo oculto para enviar o ID do produto na edição -->
        <input type="hidden" name="id_produto" value="<?= $dados['id_produto'] ?>">
      <?php endif; ?>

      <div class="mb-3">
        <!-- Campo de nome do produto -->
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?= $dados['nome'] ?? '' ?>" required>
      </div>

      <div class="mb-3">
        <!-- Campo de descrição do produto -->
        <label for="descricao" class="form-label">Descrição</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3"><?= $dados['descricao'] ?? '' ?></textarea>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <!-- Campo de valor mensal do produto -->
          <label for="valor_mensal" class="form-label">Valor mensal</label>
          <input type="text" class="form-control" id="valor_mensal" name="valor_mensal" value="<?= $dados['valor_mensal'] ?? '' ?>" required>
        </div>

        <div class="col-md-6 mb-3">
          <!-- Campo de categoria ou estilo do produto -->
          <label for="categoria" class="form-label">Categoria / Estilo</label>
          <input type="text" class="form-control" id="categoria" name="categoria" value="<?= $dados['categoria'] ?? '' ?>">
        </div>
      </div>

      <!-- Botão muda conforme o contexto: "Atualizar" se edição, "Salvar" se cadastro -->
      <button type="submit" class="btn btn-cadastrar">
        <?= isset($dados['id_produto']) ? "Atualizar" : "Salvar" ?>
      </button>
    </form>
</div>





