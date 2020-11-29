CREATE DATABASE IF NOT EXISTS lab2021omada2_ChrisTest CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE lab2021omada2_ChrisTest;

CREATE TABLE IF NOT EXISTS Activity(
    Name VARCHAR(15) NOT NULL,
    Location VARCHAR(15) NULL,
    StartTime INT,  /*ED check*/
    EndTime INT, /*ED check*/
    PRIMARY KEY(Name) 
);

CREATE TABLE IF NOT EXISTS CampEmployee( /*ED check*/
    AMKA INT,
    sMedicalInsured BOOLEAN, /*ED case check*/
    Profession VARCHAR(15),
    Name VARCHAR(15),
    Surname VARCHAR(15),
    Age INT,
    Gender BOOLEAN,
    Role VARCHAR(15),
    YearsOfService INT,
    IsVolunteer BOOLEAN,
    PRIMARY KEY(AMKA)
);

