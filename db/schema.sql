create database if not exists php_mvc;

use php_mvc;

create table posts (
  id int(6) auto_increment primary key,
  author varchar(255) not null,
  content text
)
