<?php
session_start(); // Inicia a sessão para poder usar variáveis de sessão (ex: mensagens, erros)

// Importa o autoload do Composer para carregar automaticamente classes e dependências
require __DIR__ . '/../vendor/autoload.php';

// Importa os controllers de Produto e Usuário para usar nas rotas
use App\Controllers\ProdutoController;
use App\Controllers\UsuarioController;

// Função para renderizar uma view dentro do layout principal
function render($view, $data = [])
{
    extract($data); // Converte o array $data em variáveis individuais
    ob_start(); // Inicia o buffer de saída
    require __DIR__ . '/../app/Views/' . $view; // Inclui a view específica
    $content = ob_get_clean(); // Captura o conteúdo da view e limpa o buffer
    require __DIR__ . '/../app/Views/layouts/base.php'; // Inclui o layout base usando $content
}

// Função para renderizar uma view sem layout (usada em páginas simples)
function render_sem_template($view, $data = [])
{
    extract($data); // Converte o array $data em variáveis individuais
    ob_start(); // Inicia o buffer de saída
    require __DIR__ . '/../app/Views/' . $view; // Inclui apenas a view sem layout
}

// Obtém a URL acessada pelo navegador (ex: /usuarios, /produtos)
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// ---------------------- ROTAS GERAIS ----------------------
if ($url == '/' || $url == "/index.php") {
    // Página inicial sem layout
    render_sem_template('home.php', [
        'title' => 'Bem-vindo!',
        'lenda' => 'Agora eu sou uma lenda do PHP!'
    ]);
} else if ($url == "/sobre") {
    // Página "Sobre" com layout
    render('sobre.php', ['title' => 'Sobre a Página!']);
}

// ---------------------- ROTAS DE USUÁRIOS ----------------------
else if ($url == "/usuarios") {
    // Lista todos os usuários
    $controller = new UsuarioController();
    $controller->listar();

} else if ($url == "/usuarios/inserir") {
    // Mostra formulário para cadastrar novo usuário
    render('usuarios/form_usuarios.php', ['title' => 'Cadastrar Usuários!']);

} else if ($url == "/usuarios/salvar" && $_SERVER['REQUEST_METHOD'] == 'POST') {
    // Salva novo usuário no banco
    $controller = new UsuarioController();
    $controller->salvar();
}

// Editar usuário (rota com ID dinâmico)
else if (preg_match("#^/usuarios/editar/(\d+)$#", $url, $matches)) {
    $controller = new UsuarioController();
    $controller->editar($matches[1]); // Passa o ID capturado na URL
}

// Atualizar usuário (rota com ID dinâmico via POST)
else if (preg_match("#^/usuarios/atualizar/(\d+)$#", $url, $matches) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller = new UsuarioController();
    $controller->atualizar($matches[1]); // Atualiza os dados do usuário
}

// Excluir usuário (rota com ID dinâmico)
else if (preg_match("#^/usuarios/excluir/(\d+)$#", $url, $matches)) {
    $controller = new UsuarioController();
    $controller->excluir($matches[1]); // Exclui o usuário pelo ID
}

// ---------------------- ROTAS DE PRODUTOS ----------------------
else if ($url == "/produtos") {
    // Lista todos os produtos
    $controller = new ProdutoController();
    $controller->listar();

} else if ($url == "/produtos/inserir") {
    // Mostra formulário para cadastrar novo produto
    render('produtos/form_produtos.php', ['title' => 'Cadastrar Produtos!']);

} else if ($url == "/produtos/salvar" && $_SERVER['REQUEST_METHOD'] == 'POST') {
    // Salva novo produto no banco
    $controller = new ProdutoController();
    $controller->salvar();
}

// Editar produto (rota com ID dinâmico)
else if (preg_match("#^/produtos/editar/(\d+)$#", $url, $matches)) {
    $controller = new ProdutoController();
    $controller->editar($matches[1]); // Passa o ID capturado na URL
}

// Atualizar produto (rota com ID dinâmico via POST)
else if (preg_match("#^/produtos/atualizar/(\d+)$#", $url, $matches) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller = new ProdutoController();
    $controller->atualizar($matches[1]); // Atualiza os dados do produto
}

// Excluir produto (rota com ID dinâmico)
else if (preg_match("#^/produtos/excluir/(\d+)$#", $url, $matches)) {
    $controller = new ProdutoController();
    $controller->excluir($matches[1]); // Exclui o produto pelo ID
}





