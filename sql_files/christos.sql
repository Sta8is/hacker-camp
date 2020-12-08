CREATE DATABASE IF NOT EXISTS lab2021omada2_ChrisTest CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE lab2021omada2_ChrisTest;

CREATE TABLE ACTIVITY (
    A_Name VARCHAR(32) NOT NULL,
    A_Location VARCHAR(32) NULL,
    A_StartTime TIME(2),
    A_EndTime TIME(2),
    FA_Name VARCHAR(32)
    PRIMARY KEY(A_Name),
    FOREIGN KEY(FA_Name) REFERENCES FACILITY(FA_Name)C
);

CREATE TABLE CAMP_EMPLOYEE (
    CE_SSN INT UNSIGNED NOT NULL,
    IsMedicalInsured BOOLEAN,
    Profession VARCHAR(15),
    CE_Name VARCHAR(32),
    CE_Surname VARCHAR(64),
    CE_Age INT,
    CE_Gender BOOLEAN,
    CE_Role VARCHAR(15),
    YearsOfService INT UNSIGNED ,
    IsVolunteer BOOLEAN,
    PRIMARY KEY(CE_SSN),
    FOREIGN KEY(FA_Name)
);

