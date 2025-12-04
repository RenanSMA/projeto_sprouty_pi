CREATE DATABASE projeto_sprouty
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci; 

USE projeto_sprouty;

CREATE TABLE usuarios (
    id_usuario BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, -- identificador único
    nome VARCHAR(255) NOT NULL, -- nome completo do usuário
    genero CHAR(20) NOT NULL, -- m,f,o
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

INSERT INTO usuarios (
    nome,
    genero,
    cpf,
    data_nascimento,
    celular,
    rua,
    numero,
    complemento,
    bairro,
    cidade,
    cep,
    estado,
    email,
    nivel_acesso,
    senha,
    created_at,
    updated_at,
    deleted_at
) VALUES
(
    'Lucas Pereira Andrade',
    'Masculino',
    '321.654.987-22',
    '1992-05-19',
    '(41) 99777-8899',
    'Rua das Acácias',
    '210',
    'Apto 15',
    'Jardim Botânico',
    'Curitiba',
    '80210-150',
    'PR',
    'lucas.andrade@example.com',
    'Cliente',
    '$2y$10$A1b2C3d4E5f6G7h8I9j0K1l2M3n4O5p6Q7r8S9t0U1v2W3x4Y5z6',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    NULL
),
(
    'Juliana Martins Rocha',
    'Feminino',
    '159.753.486-99',
    '1985-10-30',
    '(51) 99123-4567',
    'Rua Dom Pedro II',
    '780',
    'Sala 04',
    'Centro Histórico',
    'Porto Alegre',
    '90010-310',
    'RS',
    'juliana.rocha@example.com',
    'Funcionário',
    '$2y$10$B2c3D4e5F6g7H8i9J0k1L2m3N4o5P6q7R8s9T0u1V2w3X4y5Z6a7',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    NULL
),
(
    'Fernando Souza Albuquerque',
    'Masculino',
    '789.123.456-44',
    '1978-02-11',
    '(61) 98888-1122',
    'Quadra 305 Norte',
    'Bloco C',
    'Apto 301',
    'Asa Norte',
    'Brasília',
    '70856-030',
    'DF',
    'fernando.albuquerque@example.com',
    'Administrador',
    '$2y$10$C3d4E5f6G7h8I9j0K1l2M3n4O5p6Q7r8S9t0U1v2W3x4Y5z6A7b8',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    NULL
);

INSERT INTO produtos (nome, categoria, descricao, valor_unitario, quantidade) VALUES 
('Adubo Orgânico Premium', 'Outros', 'Adubo composto 100% natural para fortalecimento do solo.', 39.90, 120),

('Semente de Tomate Cereja', 'Sementes', 'Sementes selecionadas de tomate cereja para cultivo doméstico.', 8.50, 300),

('Regador de 2 Litros', 'Outros', 'Regador plástico resistente com bico longo para irrigação precisa.', 24.99, 45),

('Kit de Vasos Decorativos', 'Outros', 'Conjunto com 3 vasos cerâmicos para plantas de pequeno porte.', 89.00, 25);
