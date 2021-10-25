/* data base, numeric(16,8), character string (100)/ varchar (100), integer */ 

/* data base, name: administrator*/

CREATE DATABASE adm_administrator_cadastro;

use adm_administrator_cadastro;

CREATE TABLE produto (
    id integer primary key,
    nome varchar (100) not null,
    quantidade numeric (16,8) not null,
    desconto integer (100) not null,
    obs varchar (150) not null
);

SELECT * FROM HISTORICO;

drop table menu;

INSERT INTO cadastro VALUES (1, '@gabriel_@', 'Gabriel Américo Lima', '2003-01-29', 'M', 'gbmerico@gmail.com'); 

describe cadastro;  

CREATE TABLE menu (
	nome varchar(50) not null unique
);

SELECT * FROM menu;

INSERT INTO menu values ('produto');

drop table produtos; 

describe produto; 


INSERT INTO produto VALUES (1, 'teclado', 2, 5, '');
                               
SELECT id, senha, nome, data, sexo, email, YEAR(NOW())-YEAR(data) AS idade
                   FROM cadastro 
                  WHERE id = '1' AND senha = '@gabriel_@' LIMIT 1

