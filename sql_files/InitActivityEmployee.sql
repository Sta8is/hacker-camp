CREATE DATABASE IF NOT EXISTS lab2021omada2_ChrisTest CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE lab2021omada2_ChrisTest;

CREATE TABLE ACTIVITY (
    Name VARCHAR(15) NOT NULL,
    Location VARCHAR(15) NULL,
    StartTime INT,
    EndTime INT,
    PRIMARY KEY(Name) 
);

CREATE TABLE CAMP_EMPLOYEE (
    SSN INT,
    sMedicalInsured BOOLEAN,
    Profession VARCHAR(15),
    Name VARCHAR(15),
    Surname VARCHAR(15),
    AGE INT,
    Gender BOOLEAN,
    Role VARCHAR(15),
    YearsOfService INT,
    IsVolunteer BOOLEAN,
    PRIMARY KEY(AMKA)
);

