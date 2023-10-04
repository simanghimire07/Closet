create table fabrics(id int PRIMARY KEY AUTO_INCREMENT,
                     type varchar(50) not null
);
create table cloth_types(id int primary key auto_increment,
                         type varchar(50)
);
create table brands(id int primary key auto_increment,
                    brand_name varchar(50)
);
create table size(id int primary key auto_increment,abbr varchar(5),size varchar(75));

create table products(
                         id int primary key auto_increment,
                         gender varchar(25),
                         product_title varchar(255),
                         product_description varchar(255),
                         cloth_type int,
                         fabric_type int,
                         brand_id int,
                         size int,
                         price double,
                         user_id int,
                         FOREIGN KEY (cloth_type) references cloth_types(id),
                         FOREIGN KEY (fabric_type) references fabrics(id),
                         foreign key (brand_id) references brands(id),
                         foreign key (size) references size(id),
                         foreign key (user_id) references user(id)
);