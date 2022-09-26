create database IF NOT EXISTS cerema;

CREATE USER IF NOT EXISTS 'cerema'@'localhost' IDENTIFIED BY 'pass_cereama';

GRANT ALL PRIVILEGES ON cerema.* TO 'cerema'@'localhost';

FLUSH PRIVILEGES;

use  cerema;

create table IF NOT EXISTS produits(
    id INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom varchar (50) NOT NULL ,
    description Text,
    categorie ENUM ('boissonChaud','boissonFroid','gateaux')NOT NULL,
    prix double(6,2)
    
);

create table IF NOT EXISTS constitution(
    id INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_produit INT (11) NOT NULL,
    id_menu INT (11) NOT NULL,
    FOREIGN KEY (id_produit) REFERENCES produits (id),
    FOREIGN KEY (id_menu) REFERENCES menu (id)
);


create table IF NOT EXISTS menu(
    id INT (11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    id_user INT (11) NOT NULL,
    FOREIGN KEY (id_user) REFERENCES user (id),
    nom varchar (50),
    description Text NOT NULL,
    menuDujour BOOLEAN NOT NULL,
    dateDuService Date,
    prix double (6,2) NOT NULL
);

create table IF NOT EXISTS user(
    id INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_role INT (11) NOT NULL,
    FOREIGN KEY (id_role) REFERENCES roles(id),
    nom varchar (50) NOT NULL,
    password varchar (255) NOT NULL,
    mail varchar (100) NOT NULL,
    telephone varchar (15)
    
);
ALTER TABLE user ADD constraint unique (mail);
ALTER TABLE user ADD constraint unique (telephone);


create table IF NOT EXISTS roles (
    id INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nom varchar (50) NOT NULL
);






