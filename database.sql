create database student_management;
use student_management;

create table class(
	class_id varchar(20) primary key,
    class_name varchar(50),
    max_slot int,
    is_elite_class boolean,
    created_datetime datetime
);
    
    
create table student(
	student_id varchar(20) primary key,
    student_name varchar(50),
    email varchar(20),
    phone_number varchar(20),
    address varchar(50),
    birthday date,
    gender boolean, 
    class_id varchar(20) references class(class_id)
);
    
insert into class values ('17CTT5', 'Chinh Quy 17 lop 5 CNTTT', 50, 1, '2017-5-30');
insert into class values ('17CTTTN', 'Chinh Quy 17 lop Tai nang CNTTT', 20, 0, '2017-5-30');
insert into student values('1712674', 'Nguyen Quang Phuc', 'phuc@gmail.com', '0862510512', '398 Bui Thi Xuan','1999-12-5', 1, '17CTT5');
