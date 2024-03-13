CREATE DATABASE employee;

show DATABASES;

use employee;

CREATE table student (
    id int UNIQUE, name VARCHAR(20), age int, mobile BIGINT, register_date TIMESTAMP
);

alter table student add COLUMN address VARCHAR(20);

SELECT * FROM student;

ALTER Table student change register_date rdate TIMESTAMP;

SELECT * from student;

alter TABLE student modify mobile int;

rename table student to student_data;

INSERT into student_data ( id, name, age, mobile, address  )VALUES ( 1, 'jyotshna', 22, 8984391561, 'noida' ),
    (
        2, 'saswat', 42, 896691561, 'paradeep'
    ),
    (
        3, 'Bijayalaxmi', 43, 8787388538, 'paradeep'
    ),
    (
        4, 'Pramod', 52, 868696891, 'cuttack'
    ),
    (
        5, 'swapna', 20, 485898948, 'cuttack'
    ),
    (
        6, 'priyabrata', 18, 33331561, 'bbsr'
    ),
    (
        7, 'gudi', 22, 89843333361, 'noida'
    );

SELECT * from student_data;

insert into student_data VALUES(10,'prati',23,8457888584,TIMESTAMP('2022-05-08 14:30:45'),'kendrapada');
delete from student_data WHERE id=8;

alter table student_data MODIFY mobile int  UNSIGNED;
SELECT* from student_data where name like '%a';
SELECT* from student_data where name like 'a%';
SELECT* from student_data where name like '_%a_';
SELECT* from student_data where age like '%3';
SELECT* from student_data where name not like 'prati';
select max (age) as maxage from student_data;
select min (age) as minage  from student_data 
WHERE age < (SELECT min(age) FROM student_data); ;

drop DATABASE employee;