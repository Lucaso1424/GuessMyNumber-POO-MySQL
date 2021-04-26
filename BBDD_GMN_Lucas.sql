DROP DATABASE M07_UF3;
CREATE DATABASE M07_UF3;
USE M07_UF3;

CREATE TABLE ESTADISTIQUES (
MODALITAT VARCHAR (45) NOT NULL,
NIVELL INT DEFAULT (1),
INTENTS INT DEFAULT (0),
ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
DATA_USUARI DATETIME DEFAULT CURRENT_TIMESTAMP
);

SELECT * FROM ESTADISTIQUES;
SELECT INTENTS FROM ESTADISTIQUES;

SELECT MODALITAT, NIVELL, INTENTS FROM ESTADISTIQUES 
	WHERE MODALITAT = "Adivina Maquina";