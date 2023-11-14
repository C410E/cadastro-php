create database cadastro_php

CREATE TABLE alunos (
  id serial primary key,
  nome  text NOT NULL,
  endereco  text NOT NULL,
  telefone  text NOT NULL,
  usuario  text NOT NULL,
  senha  text NOT NULL
) 

INSERT INTO usuarios ( nome, endereco, telefone,  usuario, senha) VALUES
('Arthur Rogado Reis', 'Rua 10', ' 5562991514140', 'Arthu', '$2y$10$lMHX4qPQTjymbI8w3Xf9FOBpySgv/xyVMh2RsMnTsRo513s3CJ9b2')

create table pessoas (
    id serial primary key,
  nome  text DEFAULT NULL,
  ende  text DEFAULT NULL,
  cidade  text DEFAULT NULL,
  estado  text DEFAULT NULL,
  tel  text DEFAULT NULL,
  usuario  text NOT NULL,
  senha  text NOT NULL
)

insert into pessoas (nome, ende, cidade, estado, tel, usuario, senha) 
values 
( 'Juila', 'rua legal', 'urubas', 'GO', '6254642664', 'julia', '$2y$10$trt5L88RElvD9UKdqNgaRuG3KHEiQIChtZrbX/NquErT3fmNCN5ea');