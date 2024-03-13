create database people;
show DATABASEs;
use people;
create table collage(id int unique , name varchar(20),age int, mobile bigint,address varchar(30));
DESC collage;
insert into collage (id ,name,age, mobile,address) values(1,'deepak',23,89898989,'noida'),(2,'kanha',25,787878999,'bbsr'),(3,'liva',22,8787899,'cuttack'),(4,'laxmi',43,78798789,'paradeep'),(5,'saswat',42,898989822,'paradeep');

select* from collage;

create table hostel(fees int, room_no int ,id int UNIQUE, FOREIGN KEY(id) REFERENCES collage(id));
insert INTO hostel values(10000,3,1),(2000, 4,2),(40000,3,3),(20000,3,4),(50000,5,5);
 select* from hostel;

 create table placement(placed char(3),id int unique, FOREIGN KEY(id) REFERENCES collage(id) on delete CASCADE on update CASCADE);
 INSERT into placement VALUES('yes',1),('no',2),('yes',3),('no',4),('yes',5);
   select * from placement;
   update collage set id=13 where id=2;
    delete from collage where id=13;

    create table libary(id int UNIQUE,book_issue char(3),book_info VARCHAR(20));
    insert into libary VALUES(11,'yes','computer'),(22,'yes','algo'),(33,'no','null'),(44,'yes','c++'),(55,'yes','english');

select collage.id,collage.name,libary.book_issue,libary.book_info from collage INNER JOIN  libary on collage.id= libary.id;
desc collage;
desc libary;

select collage.id,collage.name,libary.book_issue,libary.book_info from collage RIGHT JOIN libary on collage.id= libary.id 
UNION
select collage.id,collage.name,libary.book_issue,libary.book_info from collage left JOIN libary on collage.id= libary.id;

drop DATABASE people;

