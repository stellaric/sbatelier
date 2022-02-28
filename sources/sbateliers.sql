DROP DATABASE IF EXISTS sbateliers ;
CREATE DATABASE IF NOT EXISTS sbateliers ;
use sbateliers ; 
        



CREATE TABLE ResponsableAteliers
(
  numResp   INT         ,
  loginResp VARCHAR(15) ,
  mdpResp   VARCHAR(8)  ,
  nomResp   VARCHAR(50) ,
  prenomResp   VARCHAR(50) ,
  PRIMARY KEY (numResp)
);

CREATE TABLE Atelier
(
  numAtelier          INT         ,
  dateEnregistrement  DATE        ,
  dateHeureProogramme DATETIME    ,
  duree               TIME  ,
  nbPlace             INT         ,
  theme               VARCHAR(50) ,
  numResp             INT         ,
  PRIMARY KEY (numAtelier),
  FOREIGN KEY (numResp)
  REFERENCES ResponsableAteliers (numResp)
);

CREATE TABLE Client
(
  numClient      INT           ,
  civilite       VARCHAR(20)  ,
  nomClient      VARCHAR(50)  ,
  prenomClient   VARCHAR(50)  ,
  dateNaissance  DATE         ,
  emailClient    VARCHAR(90)  ,
  mdpClient      VARCHAR(8)   ,
  adressePostale VARCHAR(200) ,
  codePostal     VARCHAR(7)   ,
  ville          VARCHAR(50)  ,
  telClient            VARCHAR(10)  ,
  PRIMARY KEY (numClient)
);

        
 CREATE TABLE Participation
(
  numClient       INT  ,
  numAtelier      INT  ,
  dateInscription DATE ,
  FOREIGN KEY (numClient)
  REFERENCES Client (numClient),
  FOREIGN KEY (numAtelier)
  REFERENCES Atelier (numAtelier)
);     