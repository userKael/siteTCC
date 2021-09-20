create database guder_saude;
use guder_saude;
drop database guder_saude;

create table cadastro(
email varchar(30) not null primary key,
senha varchar(15) not null,
nome varchar(40) not null
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
texto text not null
);

insert into text_result values ('1','ectomorfo - IMC baixo');
insert into text_result values ('2','ectomorfo - IMC normal');
insert into text_result values ('3','ectomorfo - IMC sobrepeso');
insert into text_result values ('4','ectomorfo - IMC obesidade');
insert into text_result values ('5','ectomorfo - IMC sobrepeso musculos');

insert into text_result values ('6','mesomorfo - IMC baixo');
insert into text_result values ('7','mesomorfo - IMC normal');
insert into text_result values ('8','mesomorfo - IMC sobrepeso');
insert into text_result values ('9','mesomorfo - IMC obesidade');
insert into text_result values ('10','mesomorfo - IMC sobrepeso musculos');

insert into text_result values ('11','endomorfo - IMC baixo');
insert into text_result values ('12','endomorfo - IMC normal');
insert into text_result values ('13','endomorfo - IMC sobrepeso');
insert into text_result values ('14','endomorfo - IMC obesidade');
insert into text_result values ('15','endomorfo - IMC sobrepeso musculos');



/* testes */

update text_result set texto = "endomorfo - IMC obesidade" where id = 14; 

insert into cadastro values ('kael@kael','123','kael');

select * from cadastro 
inner join result_teste on result_teste.contato_cadastro =  cadastro.email
inner join teste on teste.contato_cadastro = cadastro.email
inner join img_perfil on img_perfil.contato_cadastro = cadastro.email;

select * from result_teste
inner join teste on teste.contato_cadastro = "kael@kael";

Select TIMESTAMPDIFF(YEAR, "",NOW());
SELECT TIMESTAMPDIFF(YEAR, teste.data_nascimento, curdate()) FROM teste where contato_cadastro = "kael@kael" order by id desc;
