<?php
// Em qual pasta ele está
namespace App\Models;

use PDO;
use App\Core\Database;
use PDOException;

// Mesmo nome do arquivo
class Produto
{
    // Aqui declaramos uma função para cada operação do CRUD
    // Busca todos os usuários no BD
    public static function buscarTodos()
    {
        // Primeiro vamos conectar no banco de dados
        // Precisamos importar o PDO antes de criar a classe
        // Como vamos utilizar arqivo DATABASE, importamos ele também
        $pdo = Database::conectar();

        // Geremos o sript SQL de consulta
        $sql = "SELECT * FROM produtos";

        // Retornamos o resultado da consulta
        return $pdo->query($sql)->fetchAll();
    }

    public static function salvar($dados)
    {
        try {
            $pdo = Database::conectar();

            $senha_criptografa = password_hash($dados['senha'], PASSWORD_BCRYPT);

            $sql = "INSERT INTO produtos (nome, descricao, valor_mensal)";
            $sql .= " VALUES (:Plano Club 1, :Edição básico, :49.90)";

            // Prepara o SQL para ser inserido no BD e limpa códigos maliciosos
            $stmt = $pdo->prepare($sql);

            // Passa as variaveis para SQL
            $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $stmt->bindParam(':descricao', $dados['descricao'], PDO::PARAM_STR);
            $stmt->bindParam(':valor_mensal', $dados['valor_mensal'], PDO::PARAM_STR);
        } catch (PDOException $e) {
            echo "Erro ao inserir: " . $e->getMessage();
        }
    }
}


