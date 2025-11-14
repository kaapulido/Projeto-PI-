CREATE DATABASE cd_club
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE cd_club;

CREATE TABLE usuarios (
    id_usuario BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, -- identificador único
    nome VARCHAR(255) NOT NULL, -- nome completo do usuário
    genere VARCHAR(1), -- M, F, O
    cpf VARCHAR(14), -- CPF no formato 000.000.000-00
    data_nascimento DATE, -- data no formato yyyy-mm-dd
    celular VARCHAR(20), -- celular com DDD
    rua VARCHAR(255), -- nome da rua
    numero VARCHAR(10), -- número da residência
    complemento VARCHAR(50), -- complemento (ex: apto)
    bairro VARCHAR(255), -- bairro
    cidade VARCHAR(255), -- cidade
    cep VARCHAR(10), -- CEP
    estado CHAR(2), -- estado (ex: SP, RJ)
    email VARCHAR(255) NOT NULL, -- e-mail válido
    nivel_acesso('Administrador', 'Funcionário', 'Cliente') NOT NULL, -- tipo de usuário
    senha VARCHAR(255) NOT NULL, -- senha criptografada
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- data de criação
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- data de alteração
    deleted_at TIMESTAMP NULL DEFAULT NULL -- marcação de exclusão lógica
);