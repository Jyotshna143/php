create database people;
show DATABASEs;
use people;
create table collage(id int unique AUTO_INCREMENT , name varchar(20),age int, mobile bigint,address varchar(30));
DESC collage;
insert into collage (name,age, mobile,address) values('deepak',23,89898989,'noida'),('kanha',25,787878999,'bbsr'),('liva',22,8787899,'cuttack'),('laxmi',43,78798789,'paradeep'),('saswat',42,898989822,'paradeep');
select * from collage;



drop  table collage;