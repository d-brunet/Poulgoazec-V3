#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


DROP DATABASE IF EXISTS POULGOAZEC;
CREATE DATABASE POULGOAZEC;

USE POULGOAZEC;

#------------------------------------------------------------
# Table: LOT
#------------------------------------------------------------

CREATE TABLE LOT(
        datePeche         Date NOT NULL ,
        IdB               Int NOT NULL ,
        NumLot            Int NOT NULL ,
        IdEspece          Int ,
        IdTaille          Int ,
        CodePresentation  Varchar (25) ,
        IdQualite         Varchar (25) ,
        IdBac             Varchar (25) ,
        poidsBrutLot      Int ,
        prixEnchereMax    Int ,
        dateEnchere       Date ,
        heureDebutEnchere Datetime ,
        prixDepart        Int ,
        prixPlancher 	  Int ,
        codeEtat          Varchar (25) ,
		Id                Int ,
        idFacture         Varchar (25) ,
        PRIMARY KEY (NumLot ,datePeche ,IdB )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: BATEAU
#------------------------------------------------------------

CREATE TABLE BATEAU(
        IdB              Int NOT NULL AUTO_INCREMENT,
        NomB             Varchar (25) ,
        ImmatriculationB Varchar (25) ,
        PRIMARY KEY (IdB )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PECHE
#------------------------------------------------------------

CREATE TABLE PECHE(
        datePeche Date NOT NULL ,
        IdB       Int NOT NULL ,
        PRIMARY KEY (datePeche ,IdB )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: TAILLE
#------------------------------------------------------------

CREATE TABLE TAILLE(
        IdTaille            Int NOT NULL ,
        SpecificationTaille Varchar (25) ,
        PRIMARY KEY (IdTaille )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: BAC
#------------------------------------------------------------

CREATE TABLE BAC(
        IdBac Varchar (25) NOT NULL ,
        Tare  Int ,
        PRIMARY KEY (IdBac )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ESPECE
#------------------------------------------------------------

CREATE TABLE ESPECE(
        IdEspece        Int NOT NULL AUTO_INCREMENT,
        Nom             Varchar (25) ,
		NomScientifique Varchar (25) ,
        NomCommun       Varchar (25) ,
        PRIMARY KEY (IdEspece )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PRESENTATION
#------------------------------------------------------------

CREATE TABLE PRESENTATION(
        CodePresentation    Varchar (25) NOT NULL ,
        LibellePresentation Varchar (25) ,
        PRIMARY KEY (CodePresentation )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: QUALITE
#------------------------------------------------------------

CREATE TABLE QUALITE(
        IdQualite      Varchar (25) NOT NULL ,
        LibelleQualite Varchar (25) ,
        PRIMARY KEY (IdQualite )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: UTILISATEUR
#------------------------------------------------------------

CREATE TABLE UTILISATEUR(
        Id                      Int NOT NULL AUTO_INCREMENT,
        Login                   Varchar (25) ,
        Pwd                     Varchar (50) ,
        raisonSocialeEntreprise Varchar (25) ,
        Mail                    Varchar (50) ,
        Adresse                 Varchar (25) ,
        Ville                   Varchar (25) ,
        CodePostal              Int ,
        NumHabilitation         Varchar (25) ,
        Statut			Varchar (10) , -- permet de connaitre le statut de l'utilisateur, si il est crieur ou acheteur
        Cle                     Varchar (50) , -- permet de réinitialiser le mot de passe
        PRIMARY KEY (Id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: POSTER
#------------------------------------------------------------

CREATE TABLE POSTER(
        datePeche    Date NOT NULL ,
        IdB          Int NOT NULL ,
		NumLot       Int NOT NULL ,
        Id           Int NOT NULL ,
        prixEnchere  Int ,
        HeureEnchere Datetime ,
        PRIMARY KEY (Id ,NumLot ,datePeche ,IdB )
)ENGINE=InnoDB;

ALTER TABLE LOT ADD CONSTRAINT FK_LOT_datePeche FOREIGN KEY (datePeche) REFERENCES PECHE(datePeche);
ALTER TABLE LOT ADD CONSTRAINT FK_LOT_IdB FOREIGN KEY (IdB) REFERENCES BATEAU(IdB);
ALTER TABLE LOT ADD CONSTRAINT FK_LOT_IdTaille FOREIGN KEY (IdTaille) REFERENCES TAILLE(IdTaille);
ALTER TABLE LOT ADD CONSTRAINT FK_LOT_IdBac FOREIGN KEY (IdBac) REFERENCES BAC(IdBac);
ALTER TABLE LOT ADD CONSTRAINT FK_LOT_IdQualite FOREIGN KEY (IdQualite) REFERENCES QUALITE(IdQualite);
ALTER TABLE LOT ADD CONSTRAINT FK_LOT_CodePresentation FOREIGN KEY (CodePresentation) REFERENCES PRESENTATION(CodePresentation);
ALTER TABLE LOT ADD CONSTRAINT FK_LOT_IdEspece FOREIGN KEY (IdEspece) REFERENCES ESPECE(IdEspece);
ALTER TABLE LOT ADD CONSTRAINT FK_LOT_Id FOREIGN KEY (Id) REFERENCES UTILISATEUR(Id);
ALTER TABLE PECHE ADD CONSTRAINT FK_PECHE_IdB FOREIGN KEY (IdB) REFERENCES BATEAU(IdB);
ALTER TABLE POSTER ADD CONSTRAINT FK_POSTER_Id FOREIGN KEY (Id) REFERENCES UTILISATEUR(Id);
ALTER TABLE POSTER ADD CONSTRAINT FK_POSTER_NumLot FOREIGN KEY (NumLot) REFERENCES LOT(NumLot);
ALTER TABLE POSTER ADD CONSTRAINT FK_POSTER_datePeche FOREIGN KEY (datePeche) REFERENCES PECHE(datePeche);
ALTER TABLE POSTER ADD CONSTRAINT FK_POSTER_IdB FOREIGN KEY (IdB) REFERENCES BATEAU(IdB);
