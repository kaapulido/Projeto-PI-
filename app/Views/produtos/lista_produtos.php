<div class="container mt-4">
    <h2 class="section-title">Cadastro de Produtos</h2>
    <form>
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome">
      </div>
      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea class="form-control" id="descricao" rows="3"></textarea>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="valor" class="form-label">Valor mensal</label>
          <input type="text" class="form-control" id="valor">
        </div>
        <div class="col-md-6 mb-3">
          <label for="categoria" class="form-label">Categoria / Estilo</label>
          <input type="text" class="form-control" id="categoria">
        </div>
      </div>
      <button type="submit" class="btn btn-cadastrar">Cadastrar Produto</button>
    </form>

    <h2 class="section-title">Listagem de Produtos</h2>
    <div class="table-responsive">
      <table class="table table-dark table-hover table-bordered align-middle text-white">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Valor mensal</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Plano Club 1</td>
            <td>Edição básico</td>
            <td>R$ 49,90</td>
            <td>
              <button class="btn-editar">Editar</button>
              <button class="btn-excluir">Excluir</button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Plano Club 2</td>
            <td>Edição moderado</td>
            <td>R$ 99,90</td>
            <td>
              <button class="btn-editar">Editar</button>
              <button class="btn-excluir">Excluir</button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Plano Club 3</td>
            <td>Edição premium</td>
            <td>R$ 149,90</td>
            <td>
              <button class="btn-editar">Editar</button>
              <button class="btn-excluir">Excluir</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


