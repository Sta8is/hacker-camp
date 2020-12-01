/* CAMP_TEAM TABLE -needs CAMP_EMPLOYEE TABLE */
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

/* FACILITY TABLE */
CREATE TABLE FACILITY(
    FA_Name VARCHAR(15) NOT NULL,
    FA_Capacity SMALLINT NULL,
    PRIMARY KEY(FA_Name)
);

/* FACILITY WORKHOURS -needs FACILITY TABLE */
CREATE TABLE FACILITY_WORKHOURS(
    Working_hours TIME(2) NOT NULL,
    FA_Name VARCHAR(15) NOT NULL,
    PRIMARY KEY(Working_hours,FA_Name),
    FOREIGN KEY(FA_Name) REFERENCES FACILITY(FA_Name)
);

/* PARTICIPATE TABLE -needs ACTIVITY TABLE & CAMP_TEAM TABLE */
CREATE TABLE PARTICIPATE(
    A_Name VARCHAR (32) NOT NULL,
    CT_Name VARCHAR(15) NOT NULL,
    P_HOURS INT NOT NULL,
    FOREIGN KEY(A_Name) REFERENCES ACTIVITY(A_Name),
    FOREIGN KEY(CT_Name) REFERENCES CAMP_TEAM(CT_Name)
);

/* RESPONSIBLE TABLE -needs CAMP_EMPLOYEE TABLE & ACTIVITY TABLE */
CREATE TABLE RESPONSIBLE(
    CE_SSN INT(11) UNSIGNED NOT NULL,
    A_Name VARCHAR(32) NOT NULL,
    R_Hours INT NOT NULL,
    FOREIGN KEY (CE_SSN) REFERENCES CAMP_EMPLOYEE(CE_SSN),
    FOREIGN KEY (A_Name) REFERENCES ACTIVITY(A_Name)
);

/* ROLE TABLE */
CREATE TABLE ROLE(
    ROLE VARCHAR(15) NOT NULL,
    CE_SSN INT(11) UNSIGNED NOT NULL,
    PRIMARY KEY(ROLE,CE_SSN),
    FOREIGN KEY(CE_SSN) REFERENCES CAMP_EMPLOYEE(CE_SSN)
);
