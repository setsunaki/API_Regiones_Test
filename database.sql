CREATE DATABASE IF NOT EXISTS api_eva;
USE api_eva;

CREATE TABLE REGION(
id              int (255) auto_increment not null,
nombre          varchar(255) not null,
CONSTRAINT pk_region PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE PROVINCIA(
id              int (255) auto_increment not null,
nombre          varchar(255) not null,
id_region        int (255) not null,
CONSTRAINT pk_provincia PRIMARY KEY(id),
CONSTRAINT fk_region_provincia FOREIGN KEY (id_region) REFERENCES REGION(id)
)ENGINE=InnoDb;

CREATE TABLE CIUDAD(
id              int (255) auto_increment not null,
nombre          varchar(255) not null,
id_provincia        int (255) not null,
CONSTRAINT pk_ciudad PRIMARY KEY(id),
CONSTRAINT fk_provincia_ciudad FOREIGN KEY (id_provincia) REFERENCES PROVINCIA(id)
)ENGINE=InnoDb;

CREATE TABLE CALLE(
id              int (255) auto_increment not null,
nombre          varchar(255) not null,
id_ciudad      int (255) not null,
CONSTRAINT pk_calle PRIMARY KEY(id),
CONSTRAINT fk_ciudad_calle FOREIGN KEY (id_ciudad) REFERENCES CIUDAD(id)
)ENGINE=InnoDb;

INSERT INTO REGION VALUES(1,"Bio Bio");
INSERT INTO REGION VALUES(2,"Ñuble");
INSERT INTO REGION VALUES(3,"Santiago");

INSERT INTO PROVINCIA VALUES(1,"Bio Bio",1);
INSERT INTO PROVINCIA VALUES(2,"Itata",2);
INSERT INTO PROVINCIA VALUES(3,"Melipilla",3);

INSERT INTO CIUDAD VALUES(1,"Los Angeles",1);
INSERT INTO CIUDAD VALUES(2,"Bulnes",2);
INSERT INTO CIUDAD VALUES(3,"San Pedro",3);

INSERT INTO CALLE VALUES(1,"Los carreras",1);
INSERT INTO CALLE VALUES(2,"AV Gabriela Mistral",1);
INSERT INTO CALLE VALUES(3,"Carlos Condel",2);
INSERT INTO CALLE VALUES(4,"Sta Maria",2);
INSERT INTO CALLE VALUES(5,"Padre Hurtado",3);
INSERT INTO CALLE VALUES(6,"Cristobal Colon",3);
/*
select c.id, c.nombre, ci.id, ci.nombre from calle c join Ciudad ci on(c.id_ciudad = ci.id)
where ci.id = 3;
*/


