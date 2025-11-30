<?php

namespace App\Core;

use PDO;
use PDOException;

class Database {
    public static function conectar() {
        $host = '127.0.0.1';
        $porta = '3306';
        $banco = 'cd_club';
        $usuario = 'root';
        $senha = '';
        
        $dsn = "mysql:host=$host;port=$porta;dbname=$banco;charset=utf8mb4";
        
        try {
            return new PDO($dsn, $usuario, $senha, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,     
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false             
            ]);
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }
}