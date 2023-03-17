#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: MENUS
#------------------------------------------------------------

CREATE TABLE MENUS(
        code_menu        Int  Auto_increment  NOT NULL ,
        nom_menu         Varchar (30) NOT NULL ,
        description_menu Varchar (100) NOT NULL ,
        prix_menu        Float NOT NULL
	,CONSTRAINT MENUS_PK PRIMARY KEY (code_menu)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PRODUITS
#------------------------------------------------------------

CREATE TABLE PRODUITS(
        code_produits Int  Auto_increment  NOT NULL ,
        nom_produits  Varchar (30) NOT NULL ,
        prix_produits Float NOT NULL
	,CONSTRAINT PRODUITS_PK PRIMARY KEY (code_produits)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: FOURNISSEURS
#------------------------------------------------------------

CREATE TABLE FOURNISSEURS(
        code_fournisseurs      Int  Auto_increment  NOT NULL ,
        nom_fournisseurs       Varchar (30) NOT NULL ,
        adresse_fournisseurs   Varchar (50) NOT NULL ,
        telephone_fournisseurs Int NOT NULL
	,CONSTRAINT FOURNISSEURS_PK PRIMARY KEY (code_fournisseurs)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CLIENTS
#------------------------------------------------------------

CREATE TABLE CLIENTS(
        code_clients      Int  Auto_increment  NOT NULL ,
        nom_clients       Varchar (20) NOT NULL ,
        prenom_clients    Varchar (20) NOT NULL ,
        mail_clients      Varchar (20) NOT NULL ,
        telephone_clients Int NOT NULL ,
        DDN_clients       Date NOT NULL ,
        adresse_clients   Varchar (30) NOT NULL ,
        ville_clients     Varchar (30) NOT NULL ,
        CP_clients        Int NOT NULL ,
        habitudes_clients Varchar (20) NOT NULL ,
        allergies_clients Varchar (20) NOT NULL
	,CONSTRAINT CLIENTS_PK PRIMARY KEY (code_clients)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: MOYENDEPAIEMENT
#------------------------------------------------------------

CREATE TABLE MOYENDEPAIEMENT(
        code_moyendepaiement Int  Auto_increment  NOT NULL ,
        nom_moyendepaiement  Varchar (20) NOT NULL
	,CONSTRAINT MOYENDEPAIEMENT_PK PRIMARY KEY (code_moyendepaiement)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: FACTURES
#------------------------------------------------------------

CREATE TABLE FACTURES(
        code_factures        Int  Auto_increment  NOT NULL ,
        montant_factures     Float NOT NULL ,
        date_factures        TimeStamp NOT NULL ,
        code_clients         Int ,
        code_fournisseurs    Int ,
        code_moyendepaiement Int NOT NULL
	,CONSTRAINT FACTURES_PK PRIMARY KEY (code_factures)

	,CONSTRAINT FACTURES_CLIENTS_FK FOREIGN KEY (code_clients) REFERENCES CLIENTS(code_clients)
	,CONSTRAINT FACTURES_FOURNISSEURS0_FK FOREIGN KEY (code_fournisseurs) REFERENCES FOURNISSEURS(code_fournisseurs)
	,CONSTRAINT FACTURES_MOYENDEPAIEMENT1_FK FOREIGN KEY (code_moyendepaiement) REFERENCES MOYENDEPAIEMENT(code_moyendepaiement)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: RESERVATION
#------------------------------------------------------------

CREATE TABLE RESERVATION(
        code_menu                    Int NOT NULL ,
        code_clients                 Int NOT NULL ,
        date_reservation             TimeStamp NOT NULL ,
        nombredepersonne_reservation Int NOT NULL
	,CONSTRAINT RESERVATION_PK PRIMARY KEY (code_menu,code_clients)

	,CONSTRAINT RESERVATION_MENUS_FK FOREIGN KEY (code_menu) REFERENCES MENUS(code_menu)
	,CONSTRAINT RESERVATION_CLIENTS0_FK FOREIGN KEY (code_clients) REFERENCES CLIENTS(code_clients)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: LIVRER
#------------------------------------------------------------

CREATE TABLE LIVRER(
        code_produits      Int NOT NULL ,
        code_fournisseurs  Int NOT NULL ,
        date_livraison     Date NOT NULL ,
        quantite_livraison Varchar (10) NOT NULL
	,CONSTRAINT LIVRER_PK PRIMARY KEY (code_produits,code_fournisseurs)

	,CONSTRAINT LIVRER_PRODUITS_FK FOREIGN KEY (code_produits) REFERENCES PRODUITS(code_produits)
	,CONSTRAINT LIVRER_FOURNISSEURS0_FK FOREIGN KEY (code_fournisseurs) REFERENCES FOURNISSEURS(code_fournisseurs)
)ENGINE=InnoDB;

