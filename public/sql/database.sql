SET FOREIGN_KEY_CHECKS=0;
-- Ripulisce e crea la tabella degli Utenti

DROP TABLE IF EXISTS Utente;
CREATE TABLE Utente (
                        EMAIL VARCHAR(50) NOT NULL UNIQUE,
                        PASSWD VARCHAR(50) NOT NULL,
                        CARRELLO VARCHAR(50),
                        PORTFOLIO FLOAT DEFAULT 0,
                        PRIMARY KEY (EMAIL,PASSWD)
);

-- Ripulisce e crea la tabella delle Piante

DROP TABLE IF EXISTS Pianta;
CREATE TABLE Pianta (
                        ID VARCHAR(50) PRIMARY KEY,
                        GENERE VARCHAR(50) NOT NULL,
                        SPECIE VARCHAR(50) NOT NULL,
                        NOME VARCHAR(50) NOT NULL,
                        FAMIGLIA VARCHAR(50) NOT NULL,
                        INTERNO BOOL DEFAULT 0,
                        DESCRIZIONE VARCHAR(50) NOT NULL,
                        COLORE VARCHAR(50) NOT NULL,
                        FIORITURA VARCHAR(50) NOT NULL,
                        HARDINESS INTEGER(2) NOT NULL,
                        ILLUMINAZIONE VARCHAR(50) NOT NULL
);




-- Ripulisce e crea la tabella degli Item

DROP TABLE IF EXISTS Item;
CREATE TABLE Item (
                      ID VARCHAR(50) PRIMARY KEY,
                      PIANTA VARCHAR(50) NOT NULL,
                      PREZZO FLOAT DEFAULT 0,
                      FOREIGN KEY (PIANTA) REFERENCES Pianta(ID) ON DELETE CASCADE
);



-- Ripulisce e crea la tablla degli Ordini
DROP TABLE IF EXISTS Carrello;
CREATE TABLE Carrello (
                          ID VARCHAR(50) NOT NULL,
                          UTENTE VARCHAR(50) NOT NULL,
                          ITEM VARCHAR(50) NOT NULL,
                          PRIMARY KEY (ID, ITEM),
                          FOREIGN KEY (UTENTE) REFERENCES Utente(EMAIL) ON DELETE CASCADE,
                          FOREIGN KEY (ITEM) REFERENCES Item(ID) ON DELETE CASCADE
);


INSERT INTO pianta (id, genere,specie,nome,famiglia,interno,descrizione,colore,fioritura,hardiness,illuminazione)
  			  VALUES('1234', 'genere','specie','nome','familgia','1','descrizione','colore','fioritura','8','illuminzione');

SET FOREIGN_KEY_CHECKS=1;



-- Trigger:
-- permette di criptare la password (verrà salvata criptata nel database)
/*
DROP TRIGGER IF EXISTS Criptazione_Password;
delimiter ||
CREATE TRIGGER Criptazione_Password
    BEFORE INSERT ON Utente
    FOR EACH ROW
BEGIN

    SET new.PASSWD = (new.PASSWD);

END ||

DELIMITER ;
*/


-- Funzione:
-- restituisce se le credenziali coincidono

DROP FUNCTION IF EXISTS Credenziali;
DELIMITER ||
CREATE FUNCTION Credenziali(id VARCHAR(50), pwd VARCHAR(50)) RETURNS BOOL
    reads sql data
BEGIN
    DECLARE RIS BOOL;
    SET RIS = True;
    SELECT PASSWD INTO id
    FROM Utente
--    WHERE  EMAIL=id AND PASSWD=PASSWORD(pwd);
    WHERE  EMAIL=id AND PASSWD=pwd;
    IF id IS NULL THEN SET RIS=False;
    END IF;
    RETURN RIS;
END||
DELIMITER ;

-- Funzione:
-- restituisce il conto del Carrello

DROP FUNCTION IF EXISTS Totale;
DELIMITER ||
CREATE FUNCTION Totale(id_cart VARCHAR(50)) RETURNS FLOAT
    reads sql data
BEGIN
    DECLARE RIS FLOAT;
    SELECT SUM(PREZZO) INTO RIS
    FROM Carrello, Item
    WHERE  Carrello.ITEM = Item.ID and id_cart=Carrello.ID;
    IF RIS IS NULL THEN SET RIS=0;
    END IF;
    RETURN RIS;
END||
DELIMITER ;


