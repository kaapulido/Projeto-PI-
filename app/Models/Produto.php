<?php
namespace App\Models;

use PDO;
use App\Core\Database;
use PDOException;

class Produto
{
    // Buscar todos os produtos (SELECT * FROM produtos)
    public static function buscarTodos()
    {
        $pdo = Database::conectar(); // Conecta ao banco
        $sql = "SELECT * FROM produtos"; // Query para pegar todos os registros
        return $pdo->query($sql)->fetchAll(); // Retorna todos os resultados em array
    }

    // Salvar novo produto (INSERT)
    public static function salvar($dados)
    {
        try {
            $pdo = Database::conectar(); // Conecta ao banco

            // Query de inserção com placeholders
            $sql = "INSERT INTO produtos (nome, descricao, valor_mensal, categoria) 
                    VALUES (:nome, :descricao, :valor_mensal, :categoria)";
            $stmt = $pdo->prepare($sql); // Prepara a query

            // Faz o bind dos parâmetros com os dados recebidos
            $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $stmt->bindParam(':descricao', $dados['descricao'], PDO::PARAM_STR);
            $stmt->bindParam(':valor_mensal', $dados['valor_mensal'], PDO::PARAM_STR);
            $stmt->bindParam(':categoria', $dados['categoria'], PDO::PARAM_STR);

            $stmt->execute(); // Executa o INSERT
            return (int) $pdo->lastInsertId(); // Retorna o ID do novo produto
        } catch (PDOException $e) {
            // Caso dê erro, mostra mensagem
            echo "Erro ao inserir: " . $e->getMessage();
            exit;
        }
    }

    // Buscar um produto pelo ID (SELECT com WHERE)
    public static function buscarUm($id)
    {
        $pdo = Database::conectar(); // Conecta ao banco
        $sql = "SELECT * FROM produtos WHERE id_produto = :id"; // Query para buscar produto específico
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT); // Bind do ID
        $stmt->execute();
        return $stmt->fetch(); // Retorna apenas um registro
    }

    // Atualizar produto existente (UPDATE)
    public static function atualizar($dados)
    {
        try {
            $pdo = Database::conectar(); // Conecta ao banco

            // Query de atualização com placeholders
            $sql = 'UPDATE produtos 
                    SET nome = :nome, descricao = :descricao, valor_mensal = :valor_mensal, categoria = :categoria 
                    WHERE id_produto = :id_produto';
            $stmt = $pdo->prepare($sql);

            // Bind dos parâmetros
            $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $stmt->bindParam(':descricao', $dados['descricao'], PDO::PARAM_STR);
            $stmt->bindParam(':valor_mensal', $dados['valor_mensal'], PDO::PARAM_STR);
            $stmt->bindParam(':categoria', $dados['categoria'], PDO::PARAM_STR);
            $stmt->bindParam(':id_produto', $dados['id_produto'], PDO::PARAM_INT);

            return $stmt->execute(); // Executa o UPDATE
        } catch (PDOException $e) {
            echo "Erro ao alterar: " . $e->getMessage();
            exit;
        }
    }

    // Excluir produto (DELETE)
    public static function excluir($id)
    {
        try {
            $pdo = Database::conectar(); // Conecta ao banco
            $sql = "DELETE FROM produtos WHERE id_produto = :id"; // Query de exclusão
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT); // Bind do ID
            return $stmt->execute(); // Executa o DELETE
        } catch (PDOException $e) {
            echo "Erro ao excluir: " . $e->getMessage();
            exit;    
        }
    }
}


