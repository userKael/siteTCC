create database guder_saude;
use guder_saude;
drop database guder_saude;

create table cadastro(
email varchar(30) not null primary key,
senha varchar(15) not null,
nome varchar(40) not null,
data_cadastro date,
alteracao TIMESTAMP
);

create table teste(
id int not null primary key auto_increment,
peso decimal(4,1) not null,		
altura decimal(3,2) not null,		
data_nascimento date not null, 		
sexo enum ('Feminino', 'Masculino') not null, 		
data_teste	date not null, 			
contato_cadastro varchar(30) not null,	
foreign key (contato_cadastro) references cadastro(email) 
on update cascade 
on delete cascade
);

create table result_teste(
id int not null primary key auto_increment,
imc	varchar (100) not null,	
somatotipo enum('Endomorfo', 'Mesomorfo', 'Ectomorfo') not null,
contato_cadastro varchar(30) not null,	
foreign key (contato_cadastro) references cadastro(email) 
on update cascade
on delete cascade
);


create table img_perfil(
id int not null primary key auto_increment,
imagem varchar(40) not null,
contato_cadastro varchar(30) not null unique,	
foreign key (contato_cadastro) references cadastro(email) 
on update cascade
on delete cascade
);

create table text_result(
id int primary key,
texto text not null,
recomenda text not null
);

insert into text_result values ('1','ectomorfo - IMC baixo','ectomorfo - IMC baixo r');
insert into text_result values ('2','ectomorfo - IMC normal','ectomorfo - IMC normal r');
insert into text_result values ('3','ectomorfo - IMC sobrepeso','ectomorfo - IMC sobrepeso r');
insert into text_result values ('4','ectomorfo - IMC obesidade','ectomorfo - IMC obesidade r');
insert into text_result values ('5','ectomorfo - IMC sobrepeso musculos','ectomorfo - IMC sobrepeso musculos r');

insert into text_result values ('6','mesomorfo - IMC baixo','mesomorfo - IMC baixo r');
insert into text_result values ('7','mesomorfo - IMC normal','mesomorfo - IMC normal r');
insert into text_result values ('8','mesomorfo - IMC sobrepeso','mesomorfo - IMC sobrepeso r');
insert into text_result values ('9','mesomorfo - IMC obesidade','mesomorfo - IMC obesidade r');
insert into text_result values ('10','mesomorfo - IMC sobrepeso musculos','mesomorfo - IMC sobrepeso musculos r');

insert into text_result values ('11','endomorfo - IMC baixo','endomorfo - IMC baixo r');
insert into text_result values ('12','endomorfo - IMC normal','endomorfo - IMC normal r');
insert into text_result values ('13','endomorfo - IMC sobrepeso','endomorfo - IMC sobrepeso r');
insert into text_result values ('14','endomorfo - IMC obesidade','endomorfo - IMC obesidade r');
insert into text_result values ('15','endomorfo - IMC sobrepeso musculos','endomorfo - IMC sobrepeso musculos r');


create table text_somatotipo(
id int primary key,
txt_ex text not null,
texto text not null,
imagem varchar(40) not null
);

insert into text_somatotipo values ('1','explica','ectomorfo','ectomorfo.jpg');
insert into text_somatotipo values ('2','','mesomorfo','mesomorfo.jpg');
insert into text_somatotipo values ('3','','endomorfo','endomorfo.jpg');
insert into text_somatotipo values ('4','EXERCICIO SLA','','');
insert into text_somatotipo values ('5','imc sla','','');
insert into text_somatotipo values ('6','somatotipo sla','','');

create table text_exercicio(
id int primary key,
texto text not null,
imagem varchar(40) not null
);

insert into text_exercicio values ('1','TESTE','imagemteste1.jpg');
insert into text_exercicio values ('2','TESTE2','imagemteste2');
insert into text_exercicio values ('3','TESTE3','imagemteste3.jpg');
insert into text_exercicio values ('4','TESTE4','imagemteste4.jpg');
insert into text_exercicio values ('5','TESTE5','imagemteste5.jpg');
insert into text_exercicio values ('6','TESTE6','imagemteste6.jpg');




select *
from text_result;
/* testes */


select * from text_result;


select * from teste;

insert into cadastro values ('kael@kael','123','kael');

select * from cadastro
inner join result_teste on result_teste.contato_cadastro =  cadastro.email
inner join teste on teste.contato_cadastro = cadastro.email
inner join img_perfil on img_perfil.contato_cadastro = cadastro.email;

select * from result_teste
inner join teste on teste.contato_cadastro = "kael@kael";

Select TIMESTAMPDIFF(YEAR, "",NOW());
SELECT TIMESTAMPDIFF(YEAR, teste.data_nascimento, curdate()) FROM teste where contato_cadastro = "kael@kael" order by id desc;
