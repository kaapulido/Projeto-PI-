<div class="container mt-4">
    <h2 class="section-title">Listagem de Produtos</h2>
    <div class="table-responsive">
      <table class="table table-dark table-hover table-bordered align-middle text-white">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Valor mensal</th>
            <th>Ações</th>
          </tr>
        </thead>
      <tbody>
          <?php foreach ($produtos as $u): ?>
            <tr>
              <td><?= $u['id_produto'] ?></td>
              <td><?= $u['nome'] ?></td>
              <td><?= $u['descricao'] ?></td>
              <td><?= $u['valor_mensal'] ?></td>

              <td>
                <button class="btn-editar">Editar</button>
                <button class="btn-excluir">Excluir</button>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
</div>

