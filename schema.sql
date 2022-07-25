CREATE TABLE comments(
id int not null auto_increment,
uuid varchar(255) not null unique,
username varchar(255) not null ,
text varchar(255) not null,
url varchar(255) not null,
date varchar(100) not null,
PRIMARY KEY(id)
)