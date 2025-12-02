<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <!-- Título dinâmico vindo da renderização -->
    <title><?= $title ?></title>

    <!-- CSS do Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Seu CSS global -->
    <link rel="stylesheet" href="/css/style.css" />
  </head>

  <body>
    <!-- Navbar principal -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <!-- Logo/brand -->
        <a class="navbar-brand" href="/home">CD Club</a>

        <!-- Botão hamburguer para mobile -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarContent"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Conteúdo colapsável da navbar -->
        <div class="collapse navbar-collapse" id="navbarContent">
          <!-- Menu principal -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- Dropdown de Usuários -->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-white"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
              >
                Usuários
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="/usuarios">Listagem de usuários</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/usuarios/inserir">Cadastro de usuários</a>
                </li>
              </ul>
            </li>

            <!-- Dropdown de Produtos -->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-white"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
              >
                Produtos
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="/produtos">Listagem de produtos</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/produtos/inserir">Cadastro de produtos</a>
                </li>
              </ul>
            </li>
          </ul>

          <!-- Área de busca + botão de sair -->
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Pesquisar..."
            />
            <!-- Link de saída (pode apontar para rota de logout) -->
            <a href="/login.html" class="btn btn-outline-light">Sair</a>
          </form>
        </div>
      </div>
    </nav>

    <!-- Container principal para o conteúdo das páginas -->
    <div class="container my-5">
      <div class="position-relative">
        <!-- Aqui é injetado o conteúdo da view (variável $content da função render) -->
        <?= $content ?>
      </div>
    </div>

    <!-- JS do Bootstrap (inclui Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

