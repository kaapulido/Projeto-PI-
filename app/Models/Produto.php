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

    // Busca todos os produtos no BD
    public static function buscarTodos()
    {
        // Conecta no banco
        $pdo = Database::conectar();

        // Script SQL de consulta
        $sql = "SELECT * FROM produtos";

        // Retorna todos os produtos
        return $pdo->query($sql)->fetchAll();
    }

    // Salvar produto no banco
    public static function salvar($dados)
    {
        try {
            $pdo = Database::conectar();

            $sql = "INSERT INTO produtos 
                    (nome, descricao, valor_mensal, categoria) 
                    VALUES 
                    (:nome, :descricao, :valor_mensal, :categoria)";

            $stmt = $pdo->prepare($sql);

            // Passa os valores corretos
            $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $stmt->bindParam(':descricao', $dados['descricao'], PDO::PARAM_STR);
            $stmt->bindParam(':valor_mensal', $dados['valor_mensal'], PDO::PARAM_STR);
            $stmt->bindParam(':categoria', $dados['categoria'], PDO::PARAM_STR);

            $stmt->execute();

            return (int) $pdo->lastInsertId();

        } catch (PDOException $e) {
            echo "Erro ao inserir: " . $e->getMessage();
            exit; // interrompe execução e mostra erro
        }
    }
}