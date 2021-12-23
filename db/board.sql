create table board (
   num int not null auto_increment,
   id varchar(15) not null,
   name varchar(10) not null,
   subject varchar(200) not null,
   text_content text not null,        
   regist_day varchar(20) not null,
   hit int not null,
   file_name varchar(40),
   file_type varchar(40),
   file_copy varchar(40),
   primary key(num)
);

