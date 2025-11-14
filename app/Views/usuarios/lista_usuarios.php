<div class="row align-items-center mb-4">
  <div class="col">
    <h2 class="section-title">Listagem de Usuários</h2>
  </div>

  <div class="col text-end">
    <a href="cadastro_cliente.php" class="btn btn-outline-light">
      Inserir Novo
    </a>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <div class="table-responsive">
      <table class="table table-dark table-bordered table-hover align-middle text-white">
        <thead class="table-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome Completo</th>
            <th scope="col">Email</th>
            <th scope="col">Tipo de Usuário</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($usuarios as $u): ?>
            <tr>
              <td><?= $u['id_usuario'] ?></td>
              <td><?= $u['nome'] ?></td>
              <td><?= $u['email'] ?></td>
              <td><?= $u['nivel_acesso'] ?></td>

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
</div>
