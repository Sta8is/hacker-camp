/* Camper Table*/
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

/* Insert the Campers */
INSERT into CAMPER values(41118, Giorgos, Karapanos, 11, 6932435895, 1, Compatable, date, Bagelio Pera, 6937437882, Kostas, Karapanos, kknot3k@gmail.com, 6932435892, tilemaxos, SpitakiEna);
INSERT into CAMPER values(52119, Kostas, Kostantinidis, 12, 6993775892, 1, None, date, Giorgos Dafnis, 6912435893, Fotis, Kostantinidis, fotisk@gmail.com, 6932435191, tilemaxos, SpitakiEna);
INSERT into CAMPER values(52131, Filipos, Nikolaidis, 13, 6932937892, 1, None, date, Baggelis Boutiritsas, 6932111892, Fotini, Gianakou, fotinig@yahoo.gr, 6932415892, tilemaxos, SpitakiEna);
INSERT into CAMPER values(42138, Aggelos, Ioanakis, 11, 6932439372, 1, Compatable, date, Stauros Xalikis , 6932411172, Paraskeyas, Ioanakis, para69nia@gmail.com, 6931435892, tilemaxos, SpitakiEna);

INSERT into CAMPER values(13118, Adreas, Ioanakis, 14, 6932439372, 1, Compatable, date, Stauros Xalikis, 6932435112, Paraskeyas, Ioanakis, para69nia@gmail.com, 6931435892, omiros, SpitakiDio);
INSERT into CAMPER values(13114, Polixronis, Xaralampou, 14, 6939435892, 1, None, date, Theodos Kolokotronis, 6932415812, Maria, Magdalini, maraki64@outlook.com, 6932415662, omiros, SpitakiDio);
INSERT into CAMPER values(13714, Rikos, Verikakis, 15, 6932435889, 1, None, date, Renos Portokalis, 6931411891, Xristos, Verikakis, shadownknight@tutanota.com, 6932115892, omiros, SpitakiDio);
INSERT into CAMPER values(11718, Panagiotis, Polixronidis, 14, 6939435792, 1, None, date, Mpampis Sougias, 6912135191, Afroksilanthi, Karabinou, karabina@yahoo.gr, 6931455892, omiros, SpitakiDio);

INSERT into CAMPER values(51127, Katerina, Fistiki, 11, 6932899833, 2, None, date, Anatoli Xrisafenia, 6932431811, Iakinthos, Nikolaidis, iaknik@gmail.com, 6932435192, artemis, SpitakiTria);
INSERT into CAMPER values(31827, Xristina, Papadopoylou, 12, 6997435332, 2, None, date, Miranda Papadopoylou, 6912435892, Polixronis, Papadopoylos, polixpapa@gmail.com, 6935555892, artemis, SpitakiTria);
INSERT into CAMPER values(21828, Ifigeneia, Sofiou, 12, 6932935877, 2, None, date, Xaris Zerbas, 6932411192, Eleni, Katsabari, elenikoutsi@gmail.com, 6992435111, artemis, SpitakiTria);
INSERT into CAMPER values(24121, Maria, Gerou, 12, 6932475333, 2, None, date, Asthenis El Doro, 6942435111, Giorgos, Gerou, gerosgio@gmail.com, 6932415811, artemis, SpitakiTria);

INSERT into CAMPER values(81321, Eleni, Karapanou, 15, 6932445895, 2, Compatable, date, Bagelio Pera, 6937437882, Kostas, Karapanos, kknot3k@gmail.com, 6932435892, athina, SpitakiTesera);
INSERT into CAMPER values(41122, Eleonora, Karapanou, 15, 6937435899, 2, Compatable, date, Bagelio Pera, 6937437882, Kostas, Karapanou, kknot3k@gmail.com, 6932435892, athina, SpitakiTesera);
INSERT into CAMPER values(61119, Kyriaki, Karatzoli, 14, 6932473992, 2, None, date, Delopital Koufos, 6932435111, Aggelos, Karatzoli, aggeloslove@gmail.com, 6931411192, athina, SpitakiTesera);
INSERT into CAMPER values(61319, Athina, Anastasiadou, 14, 6937499392, 2, None, date, Kitros Mousakas, 6931115892, Katerina, Kenourgiou, katerinaprincess88@gmail.com, 6932435592, athina, SpitakiTesera);

/* Camper's Medicine */
CREATE TABLE CA_MEDICINE (
    CA_SSN int unsigned NOT NULL,
    Medicine text,
    PRIMARY KEY(CA_SSN, Medicine),
    FOREIGN KEY(CA_SSN) REFERENCES CAMPER(SSN)
);

/* Insert medicine */
INSERT into CA_MEDICINE values(13114, Charak)
INSERT into CA_MEDICINE values(52119, Exelane)
INSERT into CA_MEDICINE values(41122, Lamberts)

/* Camper's ChronicDisease */
CREATE TABLE CA_CHRONIC_DISEASE (
  CA_SSN int unsigned NOT NULL,
  Chronic_Disease text,
  PRIMARY KEY(CA_SSN, Chronic_Disease),
  FOREIGN KEY(CA_SSN) REFERENCES CAMPER(SSN)
);

/* Insert Chronic Diseases */
INSERT into CA_CHRONIC_DISEASE values(13714, Epilipsia)
INSERT into CA_CHRONIC_DISEASE values(81321, Asthma)
INSERT into CA_CHRONIC_DISEASE values(52131, Diabetis)
INSERT into CA_CHRONIC_DISEASE values(24121, Autismos)

/* Camper's InfectiousDisease */
CREATE TABLE CA_INFECTIOUS_DISEASE (
  CA_SSN int unsigned NOT NULL,
  Infectious_Disease text,
  PRIMARY KEY(CA_SSN, Infectious_Disease),
  FOREIGN KEY(CA_SSN) REFERENCES CAMPER(SSN)
);

/* Insert Infectious Diseases */
INSERT into CA_INFECTIOUS_DISEASE values(42138, Anemoblogia)
INSERT into CA_INFECTIOUS_DISEASE values(13118, Anemoblogia)
INSERT into CA_INFECTIOUS_DISEASE values(21828, Koronoios)

/* Camper's Allergy */
CREATE TABLE CA_ALLERGY (
  CA_SSN int unsigned NOT NULL,
  Allergy text,
  PRIMARY KEY(CA_SSN, Allergy),
  FOREIGN KEY(CA_SSN) REFERENCES CAMPER(SSN)
);

/* Insert allergies */
INSERT into CA_ALLERGY values(13714, Verikoka);
INSERT into CA_ALLERGY values(51127, Fistikia);
INSERT into CA_ALLERGY values(31827, Mpiskota Papadopoylou);
