
create table usuarios(
    id serial primary key,
    nome text not null,
    endereco text not null,
    telefone text not null,
    senha text not null
)

INSERT INTO usuarios ( nome, endereco, telefone,  senha) VALUES
('Arthur Rogado Reis', 'Rua 10', ' 5562991514140', '$2y$10$lMHX4qPQTjymbI8w3Xf9FOBpySgv/xyVMh2RsMnTsRo513s3CJ9b2')