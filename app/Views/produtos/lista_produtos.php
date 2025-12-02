<div class="container mt-4">
  <!-- Título da seção -->
  <h2 class="section-title">Listagem de Produtos</h2>

  <div class="table-responsive">
    <!-- Tabela para exibir os produtos cadastrados -->
    <table class="table table-dark table-hover table-bordered align-middle text-white">
      <thead>
        <tr>
          <!-- Cabeçalho da tabela com os campos principais -->
          <th>ID</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Valor mensal</th>
          <th>Categoria</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <!-- Loop que percorre todos os produtos vindos do controller -->
        <?php foreach ($produtos as $u): ?>
          <tr>
            <!-- Exibe o ID do produto -->
            <td><?= $u['id_produto'] ?></td>
            <!-- Exibe o nome do produto -->
            <td><?= $u['nome'] ?></td>
            <!-- Exibe a descrição do produto -->
            <td><?= $u['descricao'] ?></td>
            <!-- Exibe o valor mensal do produto -->
            <td><?= $u['valor_mensal'] ?></td>
            <!-- Exibe a categoria do produto -->
            <td><?= $u['categoria'] ?></td>
            <td>
              <!-- Botão para editar o produto, chama a rota /produtos/editar/{id} -->
              <a href="/produtos/editar/<?= $u['id_produto'] ?>" class="btn btn-primary btn-sm">Editar</a>
              <!-- Botão para excluir o produto, chama a rota /produtos/excluir/{id} -->
              <!-- O confirm() exibe uma mensagem de confirmação antes de excluir -->
              <a href="/produtos/excluir/<?= $u['id_produto'] ?>" class="btn btn-danger btn-sm"
                 onclick="return confirm('Tem certeza que deseja excluir este produto?')">
                 Excluir
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>


