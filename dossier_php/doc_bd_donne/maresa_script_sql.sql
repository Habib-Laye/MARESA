#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Personne
#------------------------------------------------------------

CREATE TABLE Personne(
        ID_personne Int  Auto_increment  NOT NULL ,
        nom         Varchar (50) NOT NULL ,
        prenom      Varchar (50) NOT NULL
	,CONSTRAINT Personne_PK PRIMARY KEY (ID_personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: etablissement
#------------------------------------------------------------

CREATE TABLE etablissement(
        ID_nom      Int  Auto_increment  NOT NULL ,
        ville       Varchar (50) NOT NULL ,
        code_postal Int NOT NULL ,
        adresse     Varchar (50) NOT NULL ,
        num_siret   Int NOT NULL ,
        type        Varchar (50) NOT NULL
	,CONSTRAINT etablissement_PK PRIMARY KEY (ID_nom)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Clients
#------------------------------------------------------------

CREATE TABLE Clients(
        ID_client     Int  Auto_increment  NOT NULL ,
        nom_client    Varchar (50) NOT NULL ,
        prenom_client Varchar (50) NOT NULL
	,CONSTRAINT Clients_PK PRIMARY KEY (ID_client)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Rendez_vous
#------------------------------------------------------------

CREATE TABLE Rendez_vous(
        ref_rdv     Int  Auto_increment  NOT NULL ,
        date_rdv    Date NOT NULL ,
        heure_rdv   Int NOT NULL ,
        etat_rdv    Varchar (50) NOT NULL ,
        ID_personne Int NOT NULL ,
        ID_client   Int
	,CONSTRAINT Rendez_vous_PK PRIMARY KEY (ref_rdv)

	,CONSTRAINT Rendez_vous_Personne_FK FOREIGN KEY (ID_personne) REFERENCES Personne(ID_personne)
	,CONSTRAINT Rendez_vous_Clients0_FK FOREIGN KEY (ID_client) REFERENCES Clients(ID_client)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Compte
#------------------------------------------------------------

CREATE TABLE Compte(
        ID_compte    Int  Auto_increment  NOT NULL ,
        adresse_mail Varchar (50) NOT NULL ,
        mot_de_passe Int NOT NULL ,
        num_siret    Int NOT NULL ,
        ID_personne  Int NOT NULL
	,CONSTRAINT Compte_PK PRIMARY KEY (ID_compte)

	,CONSTRAINT Compte_Personne_FK FOREIGN KEY (ID_personne) REFERENCES Personne(ID_personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: rechercher
#------------------------------------------------------------

CREATE TABLE rechercher(
        ID_nom      Int NOT NULL ,
        ID_personne Int NOT NULL
	,CONSTRAINT rechercher_PK PRIMARY KEY (ID_nom,ID_personne)

	,CONSTRAINT rechercher_etablissement_FK FOREIGN KEY (ID_nom) REFERENCES etablissement(ID_nom)
	,CONSTRAINT rechercher_Personne0_FK FOREIGN KEY (ID_personne) REFERENCES Personne(ID_personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: associé
#------------------------------------------------------------

CREATE TABLE associe(
        ID_nom  Int NOT NULL ,
        ref_rdv Int NOT NULL
	,CONSTRAINT associe_PK PRIMARY KEY (ID_nom,ref_rdv)

	,CONSTRAINT associe_etablissement_FK FOREIGN KEY (ID_nom) REFERENCES etablissement(ID_nom)
	,CONSTRAINT associe_Rendez_vous0_FK FOREIGN KEY (ref_rdv) REFERENCES Rendez_vous(ref_rdv)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: créer
#------------------------------------------------------------

CREATE TABLE creer(
        ID_client Int NOT NULL ,
        ID_compte Int NOT NULL
	,CONSTRAINT creer_PK PRIMARY KEY (ID_client,ID_compte)

	,CONSTRAINT creer_Clients_FK FOREIGN KEY (ID_client) REFERENCES Clients(ID_client)
	,CONSTRAINT creer_Compte0_FK FOREIGN KEY (ID_compte) REFERENCES Compte(ID_compte)
)ENGINE=InnoDB;

