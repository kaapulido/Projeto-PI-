<?php

namespace App\Controllers;

use App\Models\Usuario;

class UsuarioController
{
    // Listar todos os usuários
    public function listar()
    {
        // Busca todos os usuários no banco
        $lista_usuarios = Usuario::buscarTodos();

        // Renderiza a view de listagem, passando título e dados
        render("usuarios/lista_usuarios.php", [
            'title' => "Lista de Usuários",
            'usuarios' => $lista_usuarios
        ]);
    }

    // Salvar novo usuário
    public function salvar()
    {
        // Captura e sanitiza os dados enviados pelo formulário
        $dados = [
            'nome'          => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS),
            'genere'        => filter_input(INPUT_POST, 'genere', FILTER_SANITIZE_SPECIAL_CHARS),
            'cpf'           => filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS),
            'data_nascimento' => $_POST['data_nascimento'] ?? '',
            'celular'       => filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_SPECIAL_CHARS),
            'rua'           => filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_SPECIAL_CHARS),
            'numero'        => filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS),
            'complemento'   => filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_SPECIAL_CHARS),
            'bairro'        => filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS),
            'cidade'        => filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS),
            'cep'           => filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS),
            'estado'        => filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS),
            'email'         => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS),
            'nivel_acesso'  => filter_input(INPUT_POST, 'nivel_acesso', FILTER_SANITIZE_SPECIAL_CHARS),
            'senha'         => filter_input(INPUT_POST, 'senha', FILTER_DEFAULT),
        ];

        $erros = [];

        // Validação simples do campo nome
        if (empty($dados['nome'])) {
            $erros[] = 'O campo NOME não pode ficar em branco!';
        } else if (strlen($dados['nome']) < 4) {
            $erros[] = 'O campo NOME deve ter mais que 3 caracteres!';
        }

        // Se não houver erros, salva o usuário e redireciona
        if (empty($erros)) {
            Usuario::salvar($dados);
            header('Location: /usuarios'); 
        } else {
            // Se houver erros, guarda na sessão e volta para o formulário
            $_SESSION['erros'] = $erros;
            $_SESSION['dados'] = $dados;
            header('Location: /usuarios/inserir'); 
        }
    }

    // Editar usuário
    public function editar($id)
    {
        // Busca os dados do usuário pelo ID
        $dados = Usuario::buscarUm($id);

        // Renderiza o formulário de edição com os dados carregados
        render("usuarios/form_usuarios.php", [
            'title' => 'Editar Usuário',
            'dados' => $dados
        ]);
    }

    // Atualizar usuário
    public function atualizar($id)
    {
        // Captura e sanitiza os dados enviados pelo formulário
        $dados = [
            'id_usuario'    => $id,
            'nome'          => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS),
            'genere'        => filter_input(INPUT_POST, 'genere', FILTER_SANITIZE_SPECIAL_CHARS),
            'cpf'           => filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS),
            'data_nascimento' => $_POST['data_nascimento'] ?? '',
            'celular'       => filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_SPECIAL_CHARS),
            'rua'           => filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_SPECIAL_CHARS),
            'numero'        => filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS),
            'complemento'   => filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_SPECIAL_CHARS),
            'bairro'        => filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS),
            'cidade'        => filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS),
            'cep'           => filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS),
            'estado'        => filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS),
            'email'         => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS),
            'nivel_acesso'  => filter_input(INPUT_POST, 'nivel_acesso', FILTER_SANITIZE_SPECIAL_CHARS),
        ];

        // Atualiza os dados no banco
        Usuario::atualizar($dados);
        // Redireciona para a listagem
        header('Location: /usuarios');
    }

    // Excluir usuário
    public function excluir($id)
    {
        // Exclui o usuário pelo ID
        Usuario::excluir($id);
        // Redireciona para a listagem
        header('Location: /usuarios');
    }
}

