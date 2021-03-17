-- drop DATABASE if EXISTS shoppinglist;
create database shoppinglist;

use shoppinglist;

create table item (
    id int primary key AUTO_INCREMENT,
    description varchar(255) not null,
    amount smallint unsigned not null
);


insert into into item (description, amount) values ('Test item', 1);