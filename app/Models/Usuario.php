<?php
// Em qual pasta ele está
namespace App\Models;

use PDO;
use App\Core\Database;
use PDOException;

// Mesmo nome do arquivo
class Usuario
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
        $sql = "SELECT * FROM usuarios";

        // Retornamos o resultado da consulta
        return $pdo->query($sql)->fetchAll();
    }

    public static function salvar($dados)
    {
        try {
            $pdo = Database::conectar();

            $senha_criptografa = password_hash($dados['senha'], PASSAWORD_BCRYPT);

            $sql = "INSERT INTO usuarios (nome, genere, cpf, data_nascimento, celular, rua, numero, complemento, bairro, cidade, cep, estado, email, nivel_acesso, senha)";
            $sql .= " VALUES (:nome, :genere, :cpf, :data_nascimento, :celular, :rua, :numero, :complemento, :bairro, :cidade, :cep, :estado, :email, :nivel_acesso, :senha)";

            // Prepara o SQL para ser inserido no BD e limpa códigos maliciosos
            $stmt = $pdo->prepare($sql);

            // Passa as variaveis para SQL
            $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $stmt->bindParam(':genere', $dados['genere'], PDO::PARAM_STR);
            $stmt->bindParam(':cpf', $dados['cpf'], PDO::PARAM_STR);
            $stmt->bindParam(':data_nascimento', $dados['data_nascimento'], PDO::PARAM_STR);
            $stmt->bindParam(':celular', $dados['celular'], PDO::PARAM_STR);
            $stmt->bindParam(':rua', $dados['rua'], PDO::PARAM_STR);
            $stmt->bindParam(':numero', $dados['numero'], PDO::PARAM_STR);
            $stmt->bindParam(':complemento', $dados['complemento'], PDO::PARAM_STR);
            $stmt->bindParam(':bairro', $dados['bairro'], PDO::PARAM_STR);
            $stmt->bindParam(':cidade', $dados['cidade'], PDO::PARAM_STR);
            $stmt->bindParam(':cep', $dados['cep'], PDO::PARAM_STR);
            $stmt->bindParam(':estado', $dados['estado'], PDO::PARAM_STR);
            $stmt->bindParam(':email', $dados['email'], PDO::PARAM_STR);
            $stmt->bindParam(':nivel_acesso', $dados['nivel_acesso'], PDO::PARAM_STR);
            $stmt->bindParam(':senha', $dados['senha'], PDO::PARAM_STR);
        } catch (PDOException $e) {
            echo "Erro ao inserir: " . $e->getMessage();
        }
    }
}
