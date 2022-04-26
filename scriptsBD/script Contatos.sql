show databases;

create database dbRebecaOliver;

use dbRebecaOliver;

create table tblcontatos(
id_contatos int auto_increment primary key,
nome varchar (60) not null,
email varchar(100) not null, 
telefone varchar(12) not null,
obs text not null
);


select * from tblcontatos;

insert into tblcontatos(id_contatos, nome, email, telefone, obs) values
					(1, 'rebeca', 'rebecao@gamail', '9940594', 'loja legal');

insert into tblcontatos( nome, email, telefone, obs) values
					('isadora', 'isadora@gamail', '9940594', 'loja doideira');
                    