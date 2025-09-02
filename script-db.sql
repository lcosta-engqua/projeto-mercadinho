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
	data_nascimento DATE NOT NULL,
	profissao VARCHAR(100) NOT NULL	
);

SELECT * FROM clientes c;

INSERT INTO clientes VALUES(1, 'Maria Joaquina', 'PF', '64355531066', 'mariaj@teste.com', '75911111111', 'Rua A', 'S/N', 'Centro', 'Cabrobó do Judas', 'Bahia', 'Brasil', '44000000', '1987-10-01', 'Dona de Casa');
INSERT INTO clientes VALUES(2, 'João Mariana', 'PJ', '82110112000160', 'joaom@teste.com', '75922222222', 'Rua B', '400', 'Fakelandia', 'Alto da Moema', 'Bahia', 'Brasil', '44000000', '1989-09-14', 'Dono de Casa');
