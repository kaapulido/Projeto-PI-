<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title><?= $title ?></title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/css/style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/home">CD Club</a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarContent"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
                  <a class="dropdown-item" href="/listagem-usuarios.html"
                    >Listagem de usuários</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="/cadastro-usuarios.html"
                    >Cadastro de usuários</a
                  >
                </li>
              </ul>
            </li>
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
                  <a class="dropdown-item" href="/listagem-produtos.html"
                    >Listagem de produtos</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="/cadastro-produtos.html"
                    >Cadastro de produtos</a
                  >
                </li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Pesquisar..."
            />
            <a href="/login.html" class="btn btn-outline-light">Sair</a>
          </form>
        </div>
      </div>
    </nav>

    <div class="container my-5">
      <div class="position-relative">
        <?= $content ?>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
