create table users (
  id int primary key auto_increment,     
  name varchar(255),     
  surname varchar(255),     
  username varchar(255),     
  email varchar(255),          
  password varchar(255),
  updated_at datetime,
  created_at datetime,
  active boolean
 );
 
 select * from users; -- seleccionar
 
 drop table users; -- eliminar
