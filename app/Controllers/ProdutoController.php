<?php

namespace App\Controllers;

use App\Models\Produto;

class ProdutoController
{
    public function listar()
    {
        $lista_produtos = Produto::buscarTodos();

        render("produtos/lista_produtos.php", [
            'title' => "Listagem de Produtos",
            'produtos' => $lista_produtos
        ]);
    }

    public function salvar()
    {
        $dados = [
            'nome'         => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS),
            'descricao'    => filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS),
            'valor_mensal' => filter_input(INPUT_POST, 'valor_mensal', FILTER_SANITIZE_SPECIAL_CHARS),
            'categoria'    => filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS),
        ];

        $erros = [];

        if (empty($dados['nome'])) {
            $erros[] = 'O campo NOME não pode ficar em branco!';
        }

        if (empty($erros)) {
            Produto::salvar($dados);
            header("Location: /produtos");
        } else {
            $_SESSION['erros'] = $erros;
            $_SESSION['dados'] = $dados;
            header("Location: /produtos/inserir");
        }
    }
}

