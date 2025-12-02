<?php
namespace App\Models;

use PDO;
use App\Core\Database;
use PDOException;

class Usuario
{
    // Buscar todos os usuários (SELECT * FROM usuarios)
    public static function buscarTodos()
    {
        $pdo = Database::conectar(); // Conecta ao banco
        $sql = "SELECT * FROM usuarios"; // Query para pegar todos os registros
        return $pdo->query($sql)->fetchAll(); // Retorna todos os resultados em array
    }

    // Salvar novo usuário (INSERT)
    public static function salvar($dados)
    {
        try {
            $pdo = Database::conectar(); // Conecta ao banco

            // Criptografa a senha antes de salvar
            $senha_criptografa = password_hash($dados['senha'], PASSWORD_BCRYPT);

            // Query de inserção com placeholders
            $sql = "INSERT INTO usuarios (nome, genere, cpf, data_nascimento, celular, rua, numero, complemento, bairro, cidade, cep, estado, email, nivel_acesso, senha)
                    VALUES (:nome, :genere, :cpf, :data_nascimento, :celular, :rua, :numero, :complemento, :bairro, :cidade, :cep, :estado, :email, :nivel_acesso, :senha)";

            $stmt = $pdo->prepare($sql); // Prepara a query

            // Faz o bind dos parâmetros com os dados recebidos
            $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $stmt->bindParam(':genere', $dados['genere'], PDO::PARAM_STR);
            $stmt->bindParam(':cpf', $dados['cpf'], PDO::PARAM_STR);
            $stmt->bindParam(':data_nascimento', $dados['data_nascimento']);
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
            $stmt->bindParam(':senha', $senha_criptografa); // senha já criptografada

            $stmt->execute(); // Executa o INSERT
            return (int) $pdo->lastInsertId(); // Retorna o ID do novo usuário
            
        } catch (PDOException $e) {
            // Caso dê erro, mostra mensagem
            echo "Erro ao inserir: " . $e->getMessage();
            exit;
        }
    }

    // Buscar um usuário pelo ID (SELECT com WHERE)
    public static function buscarUm($id)
    {
        $pdo = Database::conectar();
        $sql = "SELECT * FROM usuarios WHERE id_usuario = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT); // Bind do ID
        $stmt->execute();
        return $stmt->fetch(); // Retorna apenas um registro
    }

    // Atualizar usuário existente (UPDATE)
    public static function atualizar($dados)
    {
        try {
            $pdo = Database::conectar();

            // Query de atualização com placeholders
            $sql = "UPDATE usuarios 
                    SET nome = :nome, genere = :genere, cpf = :cpf, data_nascimento = :data_nascimento, celular = :celular, rua = :rua, numero = :numero, complemento = :complemento, bairro = :bairro, cidade = :cidade, cep = :cep, estado = :estado, email = :email, nivel_acesso = :nivel_acesso 
                    WHERE id_usuario = :id_usuario";

            $stmt = $pdo->prepare($sql);

            // Bind dos parâmetros
            $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $stmt->bindParam(':genere', $dados['genere'], PDO::PARAM_STR);
            $stmt->bindParam(':cpf', $dados['cpf'], PDO::PARAM_STR);
            $stmt->bindParam(':data_nascimento', $dados['data_nascimento']);
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
            $stmt->bindParam(':id_usuario', $dados['id_usuario'], PDO::PARAM_INT);

            return $stmt->execute(); // Executa o UPDATE
        } catch (PDOException $e) {
            echo "Erro ao alterar: " . $e->getMessage();
            exit;
        }
    }

    // Excluir usuário (DELETE)
    public static function excluir($id)
    {
        try {
            $pdo = Database::conectar();
            $sql = "DELETE FROM usuarios WHERE id_usuario = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT); // Bind do ID
            return $stmt->execute(); // Executa o DELETE
        } catch (PDOException $e) {
            echo "Erro ao excluir: " . $e->getMessage();
            exit;
        }
    }
}


