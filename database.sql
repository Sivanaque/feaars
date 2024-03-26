USE feaars;

CREATE TABLE USERS(
id_m int NOT NULL AUTO_INCREMENT,
login varchar(35) NOT NULL,
mdp varchar(255) NOT NULL,
email varchar(255) NOT NULL,
    lvl int NOT NULL,
    date_deb_abo DATETIME NOT NULL,
    date_fin_abo DATETIME NOT NULL,
     PRIMARY KEY (id_m) 
);

CREATE TABLE CATEGORIES(
    id_cat int NOT NULL AUTO_INCREMENT,
    libelle_cat varchar(50) NOT NULL,
     PRIMARY KEY (id_cat)
    );

CREATE TABLE FILMS(
id_f int NOT NULL AUTO_INCREMENT,
id_cat int NOT NULL,
nom_f varchar (50) NOT NULL,
duree_f int NOT NULL,
description_f text NOT NULL,
lien_f varchar (255) NOT NULL,
imag_f varchar(255) NOT NULL,
CONSTRAINT pk_f PRIMARY KEY (id_f),
CONSTRAINT fk_cat FOREIGN KEY (id_cat) REFERENCES  CATEGORIES (id_cat)
);

CREATE TABLE APPARTENIR(
id_f int NOT NULL,
id_cat int NOT NULL,
 PRIMARY KEY (id_f, id_cat),
 FOREIGN KEY (id_f) REFERENCES  FILMS (id_f),
 FOREIGN KEY (id_cat) REFERENCES  CATEGORIES (id_cat)
);

CREATE TABLE REGARDER(
id_f int NOT NULL,
id_m int NOT NULL,
note float(4.2) NOT NULL,
commentaire TEXT NOT NULL,
     PRIMARY KEY (id_f, id_m),
 FOREIGN KEY (id_f) REFERENCES  FILMS (id_f),
 FOREIGN KEY (id_m) REFERENCES USERS (id_m)
);