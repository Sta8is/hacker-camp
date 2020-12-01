/* Facility Insertions */
INSERT INTO FACILITY VALUES("SpitakiEna",14);
INSERT INTO FACILITY VALUES("SpitakiDio",14);
INSERT INTO FACILITY VALUES("SpitakiTria",14);
INSERT INTO FACILITY VALUES("SpitakiTessera",14);
INSERT INTO FACILITY VALUES("GypedoBasket",100);
INSERT INTO FACILITY VALUES("GypedoVoley",50);
INSERT INTO FACILITY VALUES("GypedoToxovolias",50);
INSERT INTO FACILITY VALUES("GypedoTennis",25);
INSERT INTO FACILITY VALUES("GypedoPodosfairou",150);
INSERT INTO FACILITY VALUES("Pisina",25);
INSERT INTO FACILITY VALUES("Kouzina",10);
INSERT INTO FACILITY VALUES("Trapezaria",200);
INSERT INTO FACILITY VALUES("Iatreio",5);
INSERT INTO FACILITY VALUES("Amfitheatro",500);
INSERT INTO FACILITY VALUES("XwroiYgieinhs",50);

/* FACILITY_WORKHOURS Insertions*/
INSERT INTO FACILITY_WORKHOURS VALUES("00:00:00","23:59:59","SpitakiEna");    /*24h*/
INSERT INTO FACILITY_WORKHOURS VALUES("00:00:00","23:59:59","SpitakiDio");    /*24h*/
INSERT INTO FACILITY_WORKHOURS VALUES("00:00:00","23:59:59","SpitakiTria");    /*24h*/
INSERT INTO FACILITY_WORKHOURS VALUES("00:00:00","23:59:59","SpitakiTessera");   /*24h*/
INSERT INTO FACILITY_WORKHOURS VALUES("10:00:00","14:00:00","GypedoBasket");
INSERT INTO FACILITY_WORKHOURS VALUES("16:00:00","19:00:00","GypedoBasket");     /* 10 - 14, 16-19 */
INSERT INTO FACILITY_WORKHOURS VALUES("10:00:00","14:00:00","GypedoVoley");
INSERT INTO FACILITY_WORKHOURS VALUES("16:00:00","19:00:00","GypedoVoley");  /* 10 - 14, 16-19 */
INSERT INTO FACILITY_WORKHOURS VALUES("10:00:00","14:00:00","GypedoToxovolias");  /* 10 - 14 */
INSERT INTO FACILITY_WORKHOURS VALUES("10:00:00","14:00:00","GypedoTennis");  /* 10 - 14 */
INSERT INTO FACILITY_WORKHOURS VALUES("10:00:00","14:00:00","GypedoPodosfairou");
INSERT INTO FACILITY_WORKHOURS VALUES("16:00:00","19:00:00","GypedoPodosfairou"); /* 10 - 14,16-19 */
INSERT INTO FACILITY_WORKHOURS VALUES("10:00:00","14:30:00","Pisina");   /* 12 - 14:30 */
INSERT INTO FACILITY_WORKHOURS VALUES("07:00:00","10:00:00","Kouzina");
INSERT INTO FACILITY_WORKHOURS VALUES("12:00:00","16:00:00","Kouzina");
INSERT INTO FACILITY_WORKHOURS VALUES("18:00:00","21:00:00","Kouzina"); /* 7-10, 12-16, 18-21*/
INSERT INTO FACILITY_WORKHOURS VALUES("07:30:00","09:00:00","Trapezaria");
INSERT INTO FACILITY_WORKHOURS VALUES("13:00:00","15:30:00","Trapezaria");
INSERT INTO FACILITY_WORKHOURS VALUES("19:00:00","20:30:00","Trapezaria"); /* 7:30-9, 13-15:30, 19-20:30 */
INSERT INTO FACILITY_WORKHOURS VALUES("00:00:00","23:59:59","Iatreio");  /*24h*/
INSERT INTO FACILITY_WORKHOURS VALUES("00:00:00","23:59:59","Amfitheatro");   /*24h*/
INSERT INTO FACILITY_WORKHOURS VALUES("00:00:00","23:59:59","XwroiYgieinhs");   /*24h*/

/* ACTIVITY Insertions */
INSERT INTO ACTIVITY VALUES ("Proino","Trapezokouzina","2021-07-01 7:30:00", "2021-07-01 8:45:00","Trapezaria");
INSERT INTO ACTIVITY VALUES ("Meshmeriano","Trapezokouzina","2021-07-01 13:30:00", "2021-07-01 15:15","Trapezaria");
INSERT INTO ACTIVITY VALUES ("Bradino","Trapezokouzina","2021-07-01 19:00:00", "2021-07-01 20:30:00","Trapezaria");
INSERT INTO ACTIVITY VALUES ("Basket","Gypeda","2021-07-01 11:00:00", "2021-07-01 13:00:00","GypedoBasket");    /*SpitakiEna*/
INSERT INTO ACTIVITY VALUES ("Rythmiki", "Gypeda","2021-07-01 16:00:00", "2021-07-01 17:00:00","GypedoBasket");  /*SpitakiEna*/
INSERT INTO ACTIVITY VALUES ("Podosfairo","Gypeda","2021-07-01 17:00:00", "2021-07-01 18:30:00","GypedoPodosfairou");  /*SpitakiEna kai SpitakiDio*/
INSERT INTO ACTIVITY VALUES ("Toxovolia","Gypeda","2021-07-01 11:00:00", "2021-07-01 13:00:00","GypedoToxovolias");  /*SpitakiDio*/
INSERT INTO ACTIVITY VALUES ("Tennis", "Gypeda","2021-07-01 16:00:00", "2021-07-01 17:00:00","GypedoTennis");  /*SpitakiDio*/
INSERT INTO ACTIVITY VALUES ("KolympiPisina","Pisines","2021-07-01 12:00:00", "2021-07-01 14:00:00","Pisina");  /*SpitakiTria*/
INSERT INTO ACTIVITY VALUES ("Ekdromi","Vouno","2021-07-01 16:00:00", "2021-07-01 18:30:00",NULL);   /*SpitakiTria*/
INSERT INTO ACTIVITY VALUES ("KolympiThalassa","Thalassa","2021-07-01 10:00:00", "2021-07-01 13:30:00",NULL);   /*SpitakiTessera*/         

/* CAMP_EMPLOYEE */
INSERT INTO CAMP_EMPLOYEE VALUES(45266, "Antonis","Georgiou",25,0,1,"Gymnasths",2,0,NULL);
INSERT INTO CAMP_EMPLOYEE VALUES(47954, "Markos","Triantafyllou",32,0,1,"Mageiras",5,0,"Kouzina");
INSERT INTO CAMP_EMPLOYEE VALUES(15324, "Giannis","Bozinidis",19,0,1,"Foithths",1,0,"SpitakiEna");
INSERT INTO CAMP_EMPLOYEE VALUES(58914, "Tassos","Ioannou",20,0,1,"Foitiths",1,1,"SpitakiDio");
INSERT INTO CAMP_EMPLOYEE VALUES(45286, "Panagiota","Blaxopoulou",21,1,1,"Foititria",2,0,"SpitakiTria");
INSERT INTO CAMP_EMPLOYEE VALUES(87595, "Georgia","Papadimitriou",20,1,1,"Foititria",1,1,"SpitakiTessera");
INSERT INTO CAMP_EMPLOYEE VALUES(47746, "Alexandros","Xristodoulou",41,0,1,"Iatros",2,0,"Iatreio");
INSERT INTO CAMP_EMPLOYEE VALUES(76574, "Xristos","Alexiou", 30, 0,1,"Fylakas",5,0,"Amfitheatro");
INSERT INTO CAMP_EMPLOYEE VALUES(69745, "Maria","Anastasopoulou",42,1,1,"Katharistria",10,0,"XwroiYgieinhs");
INSERT INTO CAMP_EMPLOYEE VALUES(58746, "Aggeliki","Athanasiou",25,1,1,"Gymnastria",2,0,NULL);

/* CAMP TEAM */
INSERT INTO CAMP_TEAM VALUES("tilemaxos",0,"11-13",13,NULL,15324);    
INSERT INTO CAMP_TEAM VALUES("omiros",0,"14-16",13,NULL,58914); 
INSERT INTO CAMP_TEAM VALUES("artemis",1,"11-13",13,NULL,45286); 
INSERT INTO CAMP_TEAM VALUES("athina",1,"14-16",13,NULL,87595); 

/* RESPONSIBLE */
INSERT INTO RESPONSIBLE VALUES(45266,"Toxovolia",1);
INSERT INTO RESPONSIBLE VALUES(47954,"Basket",2);
INSERT INTO RESPONSIBLE VALUES(15324,"Rythmiki",1);
INSERT INTO RESPONSIBLE VALUES(58914,"Ekdromi",2);

/* PARTICIPATE */
INSERT INTO PARTICIPATE VALUES("Basket","omiros",1);
INSERT INTO PARTICIPATE VALUES("Toxovolia","athina",1);
INSERT INTO PARTICIPATE VALUES("Ekdromi","tilemaxos",5);
INSERT INTO PARTICIPATE VALUES("Tennis","omiros",1);
INSERT INTO PARTICIPATE VALUES("Basket","athina",1);
INSERT INTO PARTICIPATE VALUES("Rythmiki","artemis",1);


/* CAMPER */
INSERT into CAMPER values(41118, "Giorgos", "Karapanos", 11, 6932435895, 1, 1, curdate(), "Bagelio Pera", 6937437882, "Kostas", "Karapanos", "kknot3k@gmail.com", 6932435892, "tilemaxos", "SpitakiEna");
INSERT into CAMPER values(52119, "Kostas", "Kostantinidis", 12, 6993775892, 1, 0, curdate(), "Giorgos Dafnis", 6912435893, "Fotis", "Kostantinidis", "fotisk@gmail.com", 6932435191, "tilemaxos", "SpitakiEna");
INSERT into CAMPER values(52131, "Filipos", "Nikolaidis", 13, 6932937892, 1, 0, curdate(), "Baggelis Boutiritsas", 6932111892, "Fotini", "Gianakou", "fotinig@yahoo.gr", 6932415892, "tilemaxos", "SpitakiEna");
INSERT into CAMPER values(42138, "Aggelos", "Ioanakis", 11, 6932439372, 1, 1, curdate(), "Stauros Xalikis ", 6932411172, "Paraskeyas", "Ioanakis", "para69nia@gmail.com", 6931435892, "tilemaxos", "SpitakiEna");
INSERT into CAMPER values(13118, "Adreas", "Ioanakis", 14, 6932439372, 1, 1, curdate(), "Stauros Xalikis", 6932435112, "Paraskeyas", "Ioanakis", "para69nia@gmail.com", 6931435892, "omiros", "SpitakiDio");
INSERT into CAMPER values(13114, "Polixronis", "Xaralampou", 14, 6939435892, 1, 0, curdate(), "Theodos Kolokotronis", 6932415812, "Maria", "Magdalini", "maraki64@outlook.com", 6932415662, "omiros", "SpitakiDio");
INSERT into CAMPER values(13714, "Rikos", "Verikakis", 15, 6932435889, 1, 0, curdate(), "Renos Portokalis", 6931411891, "Xristos", "Verikakis", "shadownknight@tutanota.com", 6932115892, "omiros", "SpitakiDio");
INSERT into CAMPER values(11718, "Panagiotis", "Polixronidis", 14, 6939435792, 1, 0, curdate(), "Mpampis Sougias", 6912135191, "Afroksilanthi", "Karabinou", "karabina@yahoo.gr", 6931455892, "omiros", "SpitakiDio");
INSERT into CAMPER values(51127, "Katerina", "Fistiki", 11, 6932899833, 2, 1, curdate(), "Anatoli Xrisafenia", 6932431811, "Iakinthos", "Nikolaidis", "iaknik@gmail.com", 6932435192, "artemis", "SpitakiTria");
INSERT into CAMPER values(31827, "Xristina", "Papadopoylou", 12, 6997435332, 2, 0, curdate(), "Miranda Papadopoylou", 6912435892, "Polixronis", "Papadopoylos", "polixpapa@gmail.com", 6935555892, "artemis", "SpitakiTria");
INSERT into CAMPER values(21828, "Ifigeneia", "Sofiou", 12, 6932935877, 2, 0, curdate(), "Xaris Zerbas", 6932411192, "Eleni", "Katsabari", "elenikoutsi@gmail.com", 6992435111, "artemis", "SpitakiTria");
INSERT into CAMPER values(24121, "Maria", "Gerou", 12, 6932475333, 2, 0, curdate(), "Asthenis El Doro", 6942435111, "Giorgos", "Gerou", "gerosgio@gmail.com", 6932415811, "artemis", "SpitakiTria");
INSERT into CAMPER values(81321, "Eleni", "Karapanou", 15, 6932445895, 2, 1, curdate(), "Bagelio Pera", 6937437882, "Kostas", "Karapanos", "kknot3k@gmail.com", 6932435892, "athina", "SpitakiTessera");
INSERT into CAMPER values(41122, "Eleonora", "Karapanou", 15, 6937435899, 2, 1, curdate(), "Bagelio Pera", 6937437882, "Kostas", "Karapanou", "kknot3k@gmail.com", 6932435892, "athina", "SpitakiTessera");
INSERT into CAMPER values(61119, "Kyriaki", "Karatzoli", 14, 6932473992, 2, 0, curdate(), "Delopital Koufos", 6932435111, "Aggelos", "Karatzoli", "aggeloslove@gmail.com", 6931411192, "athina", "SpitakiTessera");
INSERT into CAMPER values(61319, "Athina", "Anastasiadou", 14, 6937499392, 2, 1, curdate(), "Kitros Mousakas", 6931115892, "Katerina", "Kenourgiou", "katerinaprincess88@gmail.com", 6932435592, "athina", "SpitakiTessera");

/* MEDICINE */
INSERT into CA_MEDICINE values(13114, "Charak");
INSERT into CA_MEDICINE values(52119, "Exelane");
INSERT into CA_MEDICINE values(41122, "Lamberts");

/* CHRONIC DISEASE */
INSERT into CA_CHRONIC_DISEASE values(13714, "Epilipsia");
INSERT into CA_CHRONIC_DISEASE values(81321, "Asthma");
INSERT into CA_CHRONIC_DISEASE values(52131, "Diabetis");
INSERT into CA_CHRONIC_DISEASE values(24121, "Autismos");

/* INFECTIONS */
INSERT into CA_INFECTIOUS_DISEASE values(42138, "Anemoblogia");
INSERT into CA_INFECTIOUS_DISEASE values(13118, "Anemoblogia");
INSERT into CA_INFECTIOUS_DISEASE values(21828, "Koronoios");

/* ALLERGY */
INSERT into CA_ALLERGY values(13714, "Verikoka");
INSERT into CA_ALLERGY values(51127, "Fistikia");
INSERT into CA_ALLERGY values(31827, "Mpiskota");

