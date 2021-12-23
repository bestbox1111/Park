create table members (
    num int not null auto_increment,
    id varchar(15) not null,
    password int (15) not null,
    name varchar(10) not null,
    email varchar(80),
    gender varchar(10),
    location varchar(30),
    regist_day varchar(20),
    level int,
    point int,
    primary key(num)
);
