
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE orders (
  id int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  shipping_city varchar(10) NOT NULL,
  shipping_address varchar(20) NOT NULL,
  date timestamp NOT NULL DEFAULT current_timestamp(),
  order_quantity varchar(255) NOT NULL,
PRIMARY KEY (id) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Admin (
  id int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  name varchar(10) NOT NULL,
  phone_num int(10)  NULL, 
  address varchar(255) NULL,
  password varchar(255) NOT NULL,
PRIMARY KEY (id) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO Admin (name,password) VALUES ('admin','admin');

CREATE TABLE products (
  id int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  name varchar(30) NOT NULL,
  price double NOT NULL,
  img_url longtext NULL ,
  product_units int(25)  NULL,
  description longtext NULL ,
PRIMARY KEY (id) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE customer (
  id int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  address varchar(255)  NULL,
  phone_num int(10) NULL,
  zip int(8)  NULL,
  email varchar(255)  NULL,
  password varchar(255)  NOT NULL,
PRIMARY KEY (id) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE contact (
  id int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  firstname varchar(255) NOT NULL,
  lastname varchar(255) NULL,
  email varchar(255)  NULL,
  country varchar(255)  NULL,
  subject varchar(255)  NOT NULL,
PRIMARY KEY (id) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Website(
  URL varchar(255) NOT NULL,
  title varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

