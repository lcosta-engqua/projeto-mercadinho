DROP DATABASE if EXISTS mercadinho;
CREATE DATABASE IF NOT EXISTS mercadinho;


CREATE TABLE clientes(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(100) NOT NULL,
	tipo ENUM('PF', 'PJ') NOT NULL,
	documento VARCHAR(50) NOT NULL,
	email VARCHAR(100) NOT NULL,
	telefone VARCHAR(100) NOT NULL,
	endereco_rua VARCHAR(100) NOT NULL,
	endereco_numero VARCHAR(3) NOT NULL,
	endereco_bairro VARCHAR(100) NOT NULL,
	cidade VARCHAR(100) NOT NULL,
	estado VARCHAR(100) NOT NULL,
	pais VARCHAR(100) NOT NULL,
	cep VARCHAR(9) NOT NULL,
	profissao VARCHAR(100) NOT NULL,
	data_nascimento DATE NOT NULL,
	data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP,
	data_atualizacao DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

DROP TABLE clientes;

SELECT * FROM clientes c;

INSERT INTO clientes VALUES(1, 'Maria Joaquina', 'PF', '64355531066', 'mariaj@teste.com', '75911111111', 'Rua A', 'S/N', 'Centro', 'Cabrobó do Judas', 'Bahia', 'Brasil', '44000000', 'Dona de Casa', '1987-10-01', NULL, NULL);
INSERT INTO clientes VALUES(2, 'João Mariana', 'PJ', '82110112000160', 'joaom@teste.com', '75922222222', 'Rua B', '400', 'Fakelandia', 'Alto da Moema', 'Bahia', 'Brasil', '44000000', 'Dono de Casa', '1989-09-14', NULL, NULL);

CREATE TABLE fornecedores(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(100) NOT NULL,
	razao_social VARCHAR(100) NOT NULL,
	cnpj VARCHAR(50) NOT NULL,
	email VARCHAR(100) NOT NULL,
	telefone VARCHAR(100) NOT NULL,
	endereco_rua VARCHAR(100) NOT NULL,
	endereco_numero VARCHAR(3) NOT NULL,
	endereco_bairro VARCHAR(100) NOT NULL,
	cidade VARCHAR(100) NOT NULL,
	estado VARCHAR(100) NOT NULL,
	pais VARCHAR(100) NOT NULL,
	cep VARCHAR(9) NOT NULL,
	data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP,
	data_atualizacao DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

DELETE FROM fornecedores;
SELECT * FROM fornecedores f;

INSERT INTO fornecedores VALUES(1, 'Casa XRR', 'XRR Produções', '56228784000164', 'xrr@teste.com', '75933333333', 'Rua C', '12', 'Centro', 'Fátima', 'Bahia', 'Brasil', '44000000', NULL, NULL);
INSERT INTO fornecedores VALUES(2, 'João Mariana', 'PJ', '82110112000160', 'joaom@teste.com', '75922222222', 'Rua B', '400', 'Fakelandia', 'Alto da Moema', 'Bahia', 'Brasil', '44000000', NULL, NULL);

CREATE TABLE funcionarios(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(100) NOT NULL,
	cpf VARCHAR(50) NOT NULL,
	data_nascimento DATE NOT NULL,
	estado_civil ENUM('solteiro(a)', 'casado(a)', 'viuvo(a)', 'divorciado(a)') NOT NULL,
	email VARCHAR(100) NOT NULL,
	telefone VARCHAR(100) NOT NULL,
	endereco_rua VARCHAR(100) NOT NULL,
	endereco_numero VARCHAR(3) NOT NULL,
	endereco_bairro VARCHAR(100) NOT NULL,
	cidade VARCHAR(100) NOT NULL,
	estado VARCHAR(100) NOT NULL,
	pais VARCHAR(100) NOT NULL,
	cep VARCHAR(9) NOT NULL,
	cargo VARCHAR(50) NOT NULL,
	funcao VARCHAR(50) NOT NULL,
	salario DECIMAL(10,2) NOT NULL,
	data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP,
	data_atualizacao DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

SELECT * FROM funcionarios fu;

INSERT INTO funcionarios VALUES(1, 'Felipa Augusta', '88657662043', '1976-09-05', 'solteiro(a)', 'felipa@teste.com', '75911111111', 'Rua A', 'S/N', 'Centro', 'Cabrobó do Judas', 'Bahia', 'Brasil', '44000000', 'Diretora', 'Gerenciamento de equipe A', 14970.00, NULL, NULL);
INSERT INTO funcionarios VALUES(2, 'Guilherme Pereira', '53793444023', '1980-02-23', 'casado(a)', 'gui@teste.com', '75911111111', 'Rua A', 'S/N', 'Centro', 'Cabrobó do Judas', 'Bahia', 'Brasil', '44000000', 'Gerente', 'Gerenciamento de equipe B', 8540.00, NULL, NULL);

CREATE TABLE marcas(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	fornecedor_id INT,
	data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP,
	data_atualizacao DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	FOREIGN KEY (fornecedor_id) REFERENCES fornecedores(id) 
);

DELETE FROM marcas;
SELECT * FROM marcas;

INSERT INTO marcas VALUES(1, 'logitech', 1, NULL, NULL);
INSERT INTO marcas VALUES(2, 'dell', 2, NULL, NULL);

CREATE TABLE categorias(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	fornecedor_id INT NOT NULL,
	data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP,
	data_atualizacao DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

SELECT * FROM categorias;

INSERT INTO categorias VALUES(1, 'informatica', 1, NULL, NULL);
INSERT INTO categorias VALUES(2, 'acessorios', 2, NULL, NULL);

CREATE TABLE produtos(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	descricao VARCHAR(50) NOT NULL,
	marcar_id INT NOT NULL,
	categoria_id INT NOT NULL,
	preco_custo DECIMAL(10,2) NOT NULL,
	data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP,
	data_atualizacao DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

SELECT * FROM produtos;

INSERT INTO produtos VALUES(1, 'mouse', 'M700', 1, 1, 340.00, NULL, NULL);
INSERT INTO produtos VALUES(2, 'mouse', 'D800', 2, 1, 340.00, NULL, NULL);