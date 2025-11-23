<div class="container mt-4">
    <h2 class="section-title">Cadastro de Produtos</h2>
    <form method="POST" action="/produtos/cadastrar">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome">
      </div>
      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="valor" class="form-label">Valor mensal</label>
          <input type="text" class="form-control" id="valor" name="valor_mensal">
        </div>
        <div class="col-md-6 mb-3">
          <label for="categoria" class="form-label">Categoria / Estilo</label>
          <input type="text" class="form-control" id="categoria" name="categoria">
        </div>
      </div>
      <button type="submit" class="btn btn-cadastrar">Cadastrar Produto</button>
    </form>
</div>


