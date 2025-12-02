<div class="row align-items-center mb-4">
  <div class="col">
    <!-- Título da seção de listagem -->
    <h2 class="section-title">Listagem de Usuários</h2>
  </div>

  <div class="col text-end">
    <!-- Botão para abrir o formulário de cadastro de novo usuário -->
    <a href="/usuarios/inserir" class="btn btn-cadastrar">Inserir Novo</a>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <div class="table-responsive">
      <!-- Tabela para exibir os usuários cadastrados -->
      <table class="table table-dark table-bordered table-hover align-middle text-white">
        <thead class="table-dark">
          <tr>
            <!-- Cabeçalho da tabela com os campos principais -->
            <th scope="col">ID</th>
            <th scope="col">Nome Completo</th>
            <th scope="col">Email</th>
            <th scope="col">Tipo de Usuário</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>

        <tbody>
          <!-- Loop que percorre todos os usuários vindos do controller -->
          <?php foreach ($usuarios as $u): ?>
            <tr>
              <!-- Exibe o ID do usuário -->
              <td><?= $u['id_usuario'] ?></td>
              <!-- Exibe o nome do usuário -->
              <td><?= $u['nome'] ?></td>
              <!-- Exibe o email do usuário -->
              <td><?= $u['email'] ?></td>
              <!-- Exibe o nível de acesso do usuário -->
              <td><?= $u['nivel_acesso'] ?></td>

              <td>
                <!-- Botão para editar o usuário, chama a rota /usuarios/editar/{id} -->
                <a href="/usuarios/editar/<?= $u['id_usuario'] ?>" class="btn btn-editar">Editar</a>
                <!-- Botão para excluir o usuário, chama a rota /usuarios/excluir/{id} -->
                <!-- O confirm() exibe uma mensagem de confirmação antes de excluir -->
                <a href="/usuarios/excluir/<?= $u['id_usuario'] ?>" class="btn btn-excluir"
                   onclick="return confirm('Tem certeza que deseja excluir este usuário?')">Excluir</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>

      </table>
    </div>
  </div>
</div>


