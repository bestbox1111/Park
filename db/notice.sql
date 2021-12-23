create table notice (
   num int not null auto_increment,
   id varchar(15) not null,
   name varchar(10) not null,
   subject varchar(200) not null,
   text_content text not null,        
   regist_day varchar(20) not null, 
   level varchar(10),
   primary key(num)
   
);