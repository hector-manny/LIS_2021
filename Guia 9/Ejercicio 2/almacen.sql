CREATE DATABASE almacen CHARACTER SET utf8 COLLATE utf8_general_ci;
SHOW databases;
DROP DATABASE almacen;
SHOW databases;
CREATE DATABASE almacen;
SHOW DATABASES;
USE almacen;

 CREATE TABLE bodega (
 idprodbod int NOT NULL AUTO_INCREMENT,
 idprodcat int NOT NULL,
 fecha datetime NOT NULL,
 precioc decimal(8,2) NOT NULL,
 preciov decimal(8,2) NOT NULL,
 unidades int NOT NULL,
 PRIMARY KEY (idprodbod),
 KEY idprodcat (idprodcat)
 ) 
 ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla Bodega';