<?php
namespace App\Controllers;

use App\Models\Produto;

class ProdutoController
{
    // Listar todos os produtos
    public function listar()
    {
        // Busca todos os produtos no banco
        $lista_produtos = Produto::buscarTodos();

        // Renderiza a view de listagem, passando título e dados
        render("produtos/lista_produtos.php", [
            'title' => "Listagem de Produtos",
            'produtos' => $lista_produtos
        ]);
    }

    // Salvar novo produto
    public function salvar()
    {
        // Captura e sanitiza os dados enviados pelo formulário
        $dados = [
            'nome'         => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS),
            'descricao'    => filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS),
            'valor_mensal' => filter_input(INPUT_POST, 'valor_mensal', FILTER_SANITIZE_SPECIAL_CHARS),
            'categoria'    => filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS),
        ];

        $erros = [];

        // Validação simples do campo nome
        if (empty($dados['nome'])) {
            $erros[] = 'O campo NOME não pode ficar em branco!';
        }

        // Se não houver erros, salva o produto e redireciona
        if (empty($erros)) {
            Produto::salvar($dados);
            header("Location: /produtos");
        } else {
            // Se houver erros, guarda na sessão e volta para o formulário
            $_SESSION['erros'] = $erros;
            $_SESSION['dados'] = $dados;
            header("Location: /produtos/inserir");
        }
    }

    // Editar produto
    public function editar($id)
    {
        // Busca os dados do produto pelo ID
        $dados = Produto::buscarUm($id);

        // Renderiza o formulário de edição com os dados carregados
        render("produtos/form_produtos.php", [
            'title' => 'Alterar',
            "dados" => $dados
        ]);
    }

    // Atualizar produto
    public function atualizar($id)
    {
        // Captura e sanitiza os dados enviados pelo formulário
        $dados = [
            'id_produto'   => $id, // ID do produto que será atualizado
            'nome'         => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS),
            'descricao'    => filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS),
            'valor_mensal' => filter_input(INPUT_POST, 'valor_mensal', FILTER_SANITIZE_SPECIAL_CHARS),
            'categoria'    => filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS),
        ];

        // Atualiza os dados no banco
        Produto::atualizar($dados);
        // Redireciona para a listagem
        header('Location: /produtos');
    }

    // Excluir produto
    public function excluir($id)
    {
        // Exclui o produto pelo ID
        Produto::excluir($id);
        // Redireciona para a listagem
        header('Location: /produtos');
    }
}



