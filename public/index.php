<?php
// Importa o autoload do Composer para carregar as rotas
require __DIR__ . '/../vendor/autoload.php';

// Função para renderizar as telas com layout
function render($view, $data = [])
{
    // Extrai os dados recebidos e converte em variáveis
    extract($data);
    ob_start();
    // Inclui a tela que enviamos especifica 
    require __DIR__ . '/../app/Views/' . $view;
    $content = ob_get_clean();
    // Inclui o layout base, que usará a variavel $content
    require __DIR__ . '/../app/Views/layouts/base.php';
}

function render_sem_template($view, $data = [])
{
    // Extrai os dados recebidos e converte em variáveis
    extract($data);
    ob_start();
    // Inclui a tela que enviamos especifica 
    require __DIR__ . '/../app/Views/' . $view;
}

// Obtem a URL do navegador
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Navegação GERAL
if ($url == '/' || $url == "/index.php") {
    render_sem_template('home.php', [
        'title' => 'Bem-vindo!',
        'lenda' => 'Agora eu sou uma lenda do PHP!'
    ]);
} else if ($url == "/sobre") {
    render('sobre.php', ['title' => 'Sobre a Página!']);
}

// Usuarios
else if ($url == "/usuarios") {
    render('usuarios/lista_usuarios.php', ['title' => 'Lista Usuários!']);
} else if ($url == "/usuarios/inserir") {
    render('usuarios/form_usuarios.php', ['title' => 'Cadastrar Usuários!']);
}

// Produtos 
else if ($url == "/produtos") {
    render('produtos/lista_produtos.php', ['title' => 'Lista de Produtos!']);
} else if ($url == "/produtos/inserir") {
    render('produtos/form_produtos.php', ['title' => 'Cadastrar Produtos!']);
}
