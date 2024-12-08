CREATE DATABASE db_revisao_uml_php;

USE db_revisao_uml_php;

CREATE TABLE Modelo (

    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(255) NOT NULL,
    ativo TINYINT(1) NOT NULL DEFAULT 1

);

CREATE TABLE Telefone (

    id INT AUTO_INCREMENT PRIMARY KEY,
    ddd INT NOT NULL,
    numero VARCHAR(9) NOT NULL,
    ativo TINYINT(1) NOT NULL DEFAULT 1

);

CREATE TABLE Cliente (

    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    cpf CHAR(11) NOT NULL,
    ativo TINYINT(1) NOT NULL DEFAULT 1

);

CREATE TABLE Tecnico (

    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    especialidade CHAR(100) NOT NULL,
    ativo TINYINT(1) NOT NULL DEFAULT 1

);

CREATE TABLE Cliente_Telefone_Assoc (

    id INT AUTO_INCREMENT PRIMARY KEY,
    fk_cliente INT NOT NULL,
    fk_telefone INT NOT NULL,

    CONSTRAINT fk_cliente_telefone_assoc FOREIGN KEY(fk_cliente) REFERENCES Cliente(id),
    CONSTRAINT fK_telefone_cliente_assoc FOREIGN KEY(fk_telefone) REFERENCES Telefone(id)

);

CREATE TABLE Tecnico_Telefone_Assoc (

    id INT AUTO_INCREMENT PRIMARY KEY,
    fk_tecnico INT NOT NULL,
    fk_telefone INT NOT NULL,

    CONSTRAINT fk_tecnico_telefone_assoc FOREIGN KEY(fk_tecnico) REFERENCES Tecnico(id),
    CONSTRAINT fK_telefone_tecnico_assoc FOREIGN KEY(fk_telefone) REFERENCES Telefone(id)

);

CREATE TABLE Aparelho (

    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(255) NOT NULL,
    fk_modelo INT NOT NULL,
    fk_cliente INT NOT NULL,
    ativo TINYINT(1) NOT NULL DEFAULT 1,

    CONSTRAINT fk_aparelho_modelo FOREIGN KEY(fk_modelo) REFERENCES Modelo(id),
    CONSTRAINT fk_aparelho_cliente FOREIGN KEY(fk_cliente) REFERENCES Cliente(id)

);

CREATE TABLE Orcamento (

    id INT AUTO_INCREMENT PRIMARY KEY,
    data_orcamento DATE NOT NULL,
    preco DOUBLE NOT NULL DEFAULT 0.00,
    data_validade DATE NOT NULL,
    fk_aparelho INT NOT NULL,
    fk_tecnico INT NOT NULL,

    CONSTRAINT fk_orcamento_aparelho FOREIGN KEY(fk_aparelho) REFERENCES Aparelho(id),
    CONSTRAINT fk_orcamento_tecnico FOREIGN KEY(fk_tecnico) REFERENCES Tecnico(id)

);

SHOW TABLES;