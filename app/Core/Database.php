<?php

namespace App\Core;

use PDO;
use PDOException;

class Database {
    // Método estático para conectar ao banco de dados
    public static function conectar() {
        // Configurações de conexão
        $host = '127.0.0.1';     // Endereço do servidor de banco
        $porta = '3306';         // Porta padrão do MySQL
        $banco = 'cd_club';      // Nome do banco de dados
        $usuario = 'root';       // Usuário do banco
        $senha = '';             // Senha do banco (aqui está vazia)

        // DSN (Data Source Name) com charset UTF-8
        $dsn = "mysql:host=$host;port=$porta;dbname=$banco;charset=utf8mb4";
        
        try {
            // Cria e retorna uma instância de PDO configurada
            return new PDO($dsn, $usuario, $senha, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,     // Lança exceções em erros
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,// Retorna resultados como array associativo
                PDO::ATTR_EMULATE_PREPARES => false              // Usa prepared statements reais do MySQL
            ]);
        } catch (PDOException $e) {
            // Caso ocorra erro na conexão, encerra e mostra mensagem
            die("Erro na conexão: " . $e->getMessage());
        }
    }
}
