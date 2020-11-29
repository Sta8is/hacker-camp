CREATE TABLE FACILITY(    
 FA_Name VARCHAR(15) NOT NULL,    
 FA_Capacity SMALLINT NULL,    
 PRIMARY KEY(FA_Name)    
 );

CREATE TABLE FACILITY_WORKHOURS(    
 Working_hours TIME(2) NOT NULL,    
 FA_Name VARCHAR(15) NOT NULL,    
 PRIMARY KEY(Working_hours,FA_Name),
 FOREIGN KEY(FA_Name) REFERENCES FACILITY(FA_Name)
 );

/* ACTIVITY GOES HERE */

/* CAMP_EMPLOYEE GOES HERE */

CREATE TABLE RESPONSIBLE(
 CE_SSN INT(11) UNSIGNED NOT NULL,
 A_Name VARCHAR(32) NOT NULL,
 R_Hours TIME(2) NOT NULL,
 FOREIGN KEY (CE_SSN) REFERENCES CAMP_EMPLOYEE(CE_SSN),
 FOREIGN KEY (A_Name) REFERENCES ACTIVITY(A_Name)
 );

CREATE TABLE ROLE(
 ROLE VARCHAR(15) NOT NULL,
 CE_SSN INT(11) UNSIGNED NOT NULL,
 PRIMARY KEY(ROLE,CE_SSN),
 FOREIGN KEY(CE_SSN) REFERENCES CAMP_EMPLOYEE(CE_SSN)
 );

CREATE TABLE CAMP_TEAM(
 CT_Name VARCHAR(32) NOT NULL,
 CT_Gender TINYINT NOT NULL,
 CT_AgeArea VARCHAR(15) NOT NULL,
 CT_Maxcnum TINYINT NOT NULL,
 CT_Cnum TINYINT NULL,
 CE_SSN INT(11) UNSINGED NOT NULL,
 PRIMARY KEY(CT_Name),
 FOREIGN KEY (CE_SSN) REFERENCES CAMP_EMPLOYEE(CE_SSN)
 );

CREATE TABLE PARTICIPATE(
 A_Name VARCHAR (32) NOT NULL,
 CT_Name VARCHAR(15) NOT NULL,
 P_HOURS TIME(2) NOT NULL,
 FOREIGN KEY(A_Name) REFERENCES ACTIVITY(A_Name),
 FOREIGN KEY(CT_Name) REFERENCES CAMP_TEAM(CT_Name)
 );

CREATE TABLE CAMPER (
  SSN int unsigned NOT NULL,   
  CA_Name varchar(32) NOT NULL,   
  CA_Surname varchar(64) NOT NULL,
  CA_Age int unsigned NOT NULL, 
  CA_Pnum int unsigned NOT NULL,
  CA_Gender tinyint NOT NULL, /* 0: MALE, 1: FEMALE, 2: OTHER */
  CA_KoI tinyint NOT NULL, /* 0: Compatable,1: None*/
  CA_YoR bigint NOT NULL,
  CA_D_Name varchar(32) NOT NULL, 
  CA_D_Pnum int unsigned NOT NULL,
  CA_P_Name varchar(32) NOT NULL,   
  CA_P_Surname varchar(64) NOT NULL,
  CA_P_Email varchar(64) NOT NULL,
  CA_P_Pnum int unsigned NOT NULL,
  CT_Name varchar(32) NOT NULL,
  FA_Name varchar(32),
  PRIMARY KEY(SSN),
  FOREIGN KEY(CT_Name) REFERENCES CAMP_TEAM(CT_Name),   
  FOREIGN KEY(FA_Name) REFERENCES FACILITY_NAME(FA_Name)
);

CREATE TABLE CA_MEDICINE (
    CA_SSN int unsigned NOT NULL,
    Medicine text,
    PRIMARY KEY(CA_SSN, Medicine),
    FOREIGN KEY(CA_SSN) REFERENCES CAMPER(SSN)
);

CREATE TABLE CA_CHRONIC_DISEASE (
  CA_SSN int unsigned NOT NULL,
  Chronic_Disease text,
  PRIMARY KEY(CA_SSN, Chronic_Disease),
  FOREIGN KEY(CA_SSN) REFERENCES CAMPER(SSN)
);

CREATE TABLE CA_INFECTIOUS_DISEASE (
  CA_SSN int unsigned NOT NULL,
  Infectious_Disease text,
  PRIMARY KEY(CA_SSN, Infectious_Disease),
  FOREIGN KEY(CA_SSN) REFERENCES CAMPER(SSN)
);

CREATE TABLE CA_ALLERGY (
  CA_SSN int unsigned NOT NULL,
  Allergy text,
  PRIMARY KEY(CA_SSN, Allergy),
  FOREIGN KEY(CA_SSN) REFERENCES CAMPER(SSN)
);

