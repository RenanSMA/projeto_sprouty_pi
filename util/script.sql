CREATE DATABASE projeto_sprouty
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE projeto_sprouty;

CREATE TABLE usuarios (
    id_usuario BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, -- identificador único
    nome VARCHAR(255) NOT NULL, -- nome completo do usuário
    genero CHAR(1) NOT NULL, -- m,f,o
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
    nivel_acesso ENUM('Administrador', 'Funcionário', 'Cliente') NOT NULL, -- tipo de usuário
    senha VARCHAR(255) NOT NULL, -- senha criptografada
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- data de criação
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- data de alteração
    deleted_at TIMESTAMP NULL DEFAULT NULL -- marcação de exclusão lógica
);

CREATE TABLE produtos (
    id_produto BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, -- identificador único do produto
    nome VARCHAR(255) NOT NULL, -- nome do produto
    categoria VARCHAR(255) NOT NULL, -- categoria do produto
    descricao TEXT, -- descrição detalhada
    valor_unitario DECIMAL(10,2) NOT NULL, -- preço por unidade
    quantidade INT UNSIGNED NOT NULL DEFAULT 0, -- quantidade em estoque
    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- data de criação
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- data de alteração
    deleted_at TIMESTAMP NULL DEFAULT NULL -- exclusão lógica
);

INSERT INTO produtos (nome, categoria, descricao, valor_unitario, quantidade)
VALUES 
('Adubo Orgânico Premium', 'Outros', 'Adubo composto 100% natural para fortalecimento do solo.', 39.90, 120),

('Semente de Tomate Cereja', 'Sementes', 'Sementes selecionadas de tomate cereja para cultivo doméstico.', 8.50, 300),

('Regador de 2 Litros', 'Outros', 'Regador plástico resistente com bico longo para irrigação precisa.', 24.99, 45),

('Kit de Vasos Decorativos', 'Outros', 'Conjunto com 3 vasos cerâmicos para plantas de pequeno porte.', 89.00, 25);
