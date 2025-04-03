create database estudophp;
use estudophp;
create table pessoa(
pes_id int auto_increment primary key,
pes_nome varchar(100) not null,
pes_peso double,
pes_altura double
);

select * from pessoa;