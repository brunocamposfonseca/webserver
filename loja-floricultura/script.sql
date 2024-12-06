CREATE DATABASE loja

CREATE TABLE cliente(
	id int PRIMARY KEY AUTO_INCREMENT,
    nome varchar(50),
    email varchar(100),
    senha varchar(15)
)

CREATE TABLE produto(
	id int PRIMARY KEY AUTO_INCREMENT,
    nome varchar(50),
    descricao varchar(800),
    preco varchar(15)
);

