<?php

namespace App\Controllers;

// Importar o model de Usuario
use App\Models\Produto;

class ProdutoController
{
    // Busca os usuarios e chama a tela e listar
    public function listar()
    {
        // Chama a model e a função que busca os dados e armazena na var
        $lista_produtos = Produto::buscarTodos();

        render("produtos/lista_produtos.php", [
            'title' => "Listagem de Produtos",
            'produtos' => $lista_produtos
        ]);
    }
}




