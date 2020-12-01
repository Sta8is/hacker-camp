# Σύστημα Εγγραφών - Διαχείρισης Κατασκήνωσης
![CampTent](https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.pixabay.com%2Fphoto%2F2017%2F03%2F24%2F02%2F40%2Fcamping-2169976_960_720.png&f=1&nofb=1)
<p style="text-align:right;">Ξάνθη 2/11/20</p>
<br>
<br>
## <p style="text-align:center;"><u>Ομάδα 2</u>:</p>
_<p style="text-align:center;">Καρυπίδης Ευστάθιος 57556</p>_
_<p style="text-align:center;">Τακαρίδης Χρήστος 57514</p>_
_<p style="text-align:center;">Φιωτάκης Ηλίας 57653</p>_

<div style="page-break-after: always; break-after: page;"></div>

# <p style="text-align:center">Μέρος 1ο:</p>

Η εργασία μας πραγματεύεται την δημιουργία ενός συστήματος εγγραφών κατασκηνωτών σε μία κατασκήνωση όπως επίσης την μετέπειτα διαχείριση των εγκαταστάσεων της κατασκήνωσης, του προσωπικού και των δραστηριοτήτων.

## Ερώτημα 1:

###  Ανάλυση Απαιτήσεων:

+ Ο κάθε κατασκηνωτής κάνει μία εγγραφή στη κατασκήνωση. Ο κάθε κατασκηνωτής έχει ένα όνομα και επώνυμο, έναν αριθμό τηλεφώνου, το μοναδικό αριθμό ΑΜΚΑ, είδος ασφάλισης, ιατρικό δελτίο το απαρτίζεται από έναν γιατρό(όνομα τηλέφωνο), αλλεργίες, φάρμακα, χρόνια νοσήματα, μεταδοτικές νόσους που έχει περάσει.
+ Ο κατασκηνωτής έχει έναν γονέα δηλωμένο. Ο γονέας έχει όνομα επώνυμο διεύθυνση ηλεκτρονικού ταχυδρομείου και ένα αριθμό τηλεφώνου.
+ Κάθε ομάδα κατασκηνωτών έχει μόνο έναν υπάλληλο με ρόλο ομαδάρχη, ένα μοναδικό όνομα και μέγιστο αριθμό κατασκηνωτών. Κάθε ομάδα έχει ένα συγκεκριμένο αριθμό κατασκηνωτών και όλοι οι κατασκηνωτές που ανήκουν σε μία ομάδα έχουν ίδιο φύλο και βρίσκονται σε ένα κοινό εύρος ηλικιών. 
+ Η κατασκήνωση έχει υπαλλήλους. Ο υπάλληλος κατασκήνωσης έχει ονοματεπώνυμο, ηλικία, έτος υπηρεσίας, φύλο, μοναδικό αριθμό ΑΜΚΑ, ένα επάγγελμα και έναν ρόλο, πιστοποιητικό υγείας, και υπάρχει πιθανότητα να είναι εθελοντής. 
+ Η κατασκήνωση διαθέτει πληθώρα εγκαταστάσεων. Η κάθε εγκατάσταση έχει μοναδικό όνομα, ώρες λειτουργίας και χωρητικότητα. 
+ Το 24ωρο πρόγραμμα χωρίζεται σε δραστηριότητες όπου κάθε δραστηριότητα,έχει (ώρα έναρξης-λήξης) μοναδικό όνομα και λαμβάνει χώρα σε κάποια τοποθεσία. Κάποιες δραστηριότητες μπορούν να χρησιμοποιήσουν μία εγκατάσταση και τουλάχιστον ένας υπάλληλος ευθύνεται για κάθε δραστηριότητα.
+ Ένας υπάλληλος δεν μπορεί να είναι υπεύθυνος για περισσότερες από μια δραστηριότητες ταυτόχρονα. 
+ Η κάθε ομάδα συμμετέχει σε τουλάχιστον μία δραστηριότητες κατά την διάρκεια της ημέρας μη αλληλεπικαλυπτόμενες χρονικά. Σε κάθε δραστηριότητα μπορούν να συμμετέχουν περισσότερες από μία ομάδες
+ Κάθε υπάλληλος απασχολείται σε μία εγκατάσταση αλλά μία εγκατάσταση μπορεί να απασχολεί περισσότερους από έναν υπαλλήλους. Αντίστοιχα κάθε κατασκηνωτής βρίσκεται σε μία εγκατάσταση αλλά σε μία εγκατάσταση μπορεί να βρίσκονται πολλοί κατασκηνωτές. 

<div style="page-break-after: always; break-after: page;"></div>

## Ερώτημα 2:

### Διάγραμμα οντοτήτων συσχετίσεων:

![](/home/christ0s/repos/DUTh/databaseslab2021/ED/ED_GR.png)

<div style="page-break-after: always; break-after: page;"></div>

# <p style="text-align:center">Μέρος 2ο:</p>

## Ερώτημα 1:

### Σχεσιακό διάγραμμα

![](/home/christ0s/repos/DUTh/databaseslab2021/Documentation/Relational_Data_Model.png)

## Ερώτημα 2:

### α) Ανάπτυξη εντολών SQL για την δημιουργία πινάκων εντός της Βάσης Δεδομένων

```sql
CREATE TABLE FACILITY(
    FA_Name VARCHAR(32) NOT NULL,
    FA_Capacity SMALLINT NULL,
    PRIMARY KEY(FA_Name)
);

CREATE TABLE FACILITY_WORKHOURS(
    FA_StartTime TIME(2) NOT NULL,
    FA_EndTime TIME(2) NOT NULL,
    FA_Name VARCHAR(32) NOT NULL,
    PRIMARY KEY(FA_StartTime,FA_EndTime,FA_Name),
    FOREIGN KEY(FA_Name) REFERENCES FACILITY(FA_Name)
);

CREATE TABLE ACTIVITY (
    A_Name VARCHAR(32) NOT NULL,
    A_Location VARCHAR(32) NOT NULL,
    A_StartTime DATETIME(2) NOT NULL,
    A_EndTime DATETIME(2) NOT NULL,
    FA_Name VARCHAR(32) NULL,
    PRIMARY KEY(A_Name),
    FOREIGN KEY(FA_Name) REFERENCES FACILITY(FA_Name)
);

CREATE TABLE CAMP_EMPLOYEE (
    CE_SSN INT UNSIGNED NOT NULL,
    CE_Name VARCHAR(32) NOT NULL,
    CE_Surname VARCHAR(64) NOT NULL,
    CE_Age TINYINT,
    CE_Gender BOOLEAN NOT NULL,
    CE_Role VARCHAR(32) NOT NULL,
    IsMedicalInsured BOOLEAN NOT NULL,
    Profession VARCHAR(15) NULL,
    YearsOfService INT UNSIGNED NOT NULL,
    IsVolunteer BOOLEAN NOT NULL,
    FA_Name VARCHAR(32) NULL,
    PRIMARY KEY(CE_SSN),
    FOREIGN KEY(FA_Name) REFERENCES FACILITY(FA_Name)
);

CREATE TABLE RESPONSIBLE(
    CE_SSN INT UNSIGNED NOT NULL,
    A_Name VARCHAR(32) NOT NULL,
    R_Hours INT UNSIGNED NOT NULL,
    PRIMARY KEY(CE_SSN,A_Name),
    FOREIGN KEY (CE_SSN) REFERENCES CAMP_EMPLOYEE(CE_SSN),
    FOREIGN KEY (A_Name) REFERENCES ACTIVITY(A_Name)
);

CREATE TABLE CAMP_TEAM(
    CT_Name VARCHAR(32) NOT NULL,
    CT_Gender TINYINT NOT NULL,
    CT_AgeArea VARCHAR(15) NOT NULL,
    CT_Maxcnum TINYINT NOT NULL,
    CT_Cnum TINYINT NULL,
    CE_SSN INT UNSIGNED NOT NULL,
    PRIMARY KEY(CT_Name),
    FOREIGN KEY (CE_SSN) REFERENCES CAMP_EMPLOYEE (CE_SSN)
);

CREATE TABLE PARTICIPATE(
    A_Name VARCHAR (32) NOT NULL,
    CT_Name VARCHAR(15) NOT NULL,
    P_HOURS INT UNSIGNED NOT NULL,
    PRIMARY KEY(A_Name,CT_Name),
    FOREIGN KEY(A_Name) REFERENCES ACTIVITY(A_Name),
    FOREIGN KEY(CT_Name) REFERENCES CAMP_TEAM(CT_Name)
);
CREATE TABLE CAMPER (
    CA_SSN int unsigned NOT NULL,   
    CA_Name varchar(32) NOT NULL,   
    CA_Surname varchar(64) NOT NULL,
    CA_Age int unsigned NOT NULL, 
    CA_Pnum bigint NOT NULL,
    CA_Gender BOOL NOT NULL, /* 0: MALE, 1: FEMALE, 2: OTHER */
    CA_KoI tinyint NOT NULL, /* 0: Compatable,1: None*/
    CA_YoR bigint NOT NULL,
    CA_D_Name varchar(32) NOT NULL, 
    CA_D_Pnum BIGINT NOT NULL,
    CA_P_Name varchar(32) NOT NULL,   
    CA_P_Surname varchar(64) NOT NULL,
    CA_P_Email varchar(64) NOT NULL,
    CA_P_Pnum BIGINT NOT NULL,
    CT_Name varchar(32) NOT NULL,
    FA_Name varchar(32) NOT NULL,
    PRIMARY KEY(CA_SSN),
    FOREIGN KEY(CT_Name) REFERENCES CAMP_TEAM(CT_Name),   
    FOREIGN KEY(FA_Name) REFERENCES FACILITY(FA_Name)
);

CREATE TABLE CA_MEDICINE (
    CA_SSN int unsigned NOT NULL,
    Medicine VARCHAR(16),
    PRIMARY KEY(CA_SSN, Medicine),
    FOREIGN KEY(CA_SSN) REFERENCES CAMPER(CA_SSN)
);

CREATE TABLE CA_CHRONIC_DISEASE (
    CA_SSN int unsigned NOT NULL,
    Chronic_Disease VARCHAR(16),
    PRIMARY KEY(CA_SSN, Chronic_Disease),
    FOREIGN KEY(CA_SSN) REFERENCES CAMPER(CA_SSN)
);

CREATE TABLE CA_INFECTIOUS_DISEASE (
    CA_SSN int unsigned NOT NULL,
    Infectious_Disease VARCHAR(16),
    PRIMARY KEY(CA_SSN, Infectious_Disease),
    FOREIGN KEY(CA_SSN) REFERENCES CAMPER(CA_SSN)
);

CREATE TABLE CA_ALLERGY (
    CA_SSN int unsigned NOT NULL,
    Allergy VARCHAR(16),
    PRIMARY KEY(CA_SSN, Allergy),
    FOREIGN KEY(CA_SSN) REFERENCES CAMPER(CA_SSN)
);
```

### β) Εισαγωγή ενδεικτικών δεδομένων εντός των πικάκων

```sql
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
INSERT INTO CAMP_EMPLOYEE VALUES(45266, "Antonis","Georgiou",25,0, "Gymnasths",1,"Gymnasths",2,0,NULL);
INSERT INTO CAMP_EMPLOYEE VALUES(47954, "Markos","Triantafyllou",32,0, "Mageiras",1,"Mageiras",5,0,"Kouzina");
INSERT INTO CAMP_EMPLOYEE VALUES(15324, "Giannis","Bozinidis",19,0, "Omadarxis",1,"Foithths",1,0,"SpitakiEna");
INSERT INTO CAMP_EMPLOYEE VALUES(58914, "Tassos","Ioannou",20,0, "Omadarxis",1,"Foitiths",1,1,"SpitakiDio");
INSERT INTO CAMP_EMPLOYEE VALUES(45286, "Panagiota","Blaxopoulou",21,1, "Omadarxis", 1,"Foititria",2,0,"SpitakiTria");
INSERT INTO CAMP_EMPLOYEE VALUES(87595, "Georgia","Papadimitriou",20,1, "Omadarxis",1,"Foititria",1,1,"SpitakiTessera");
INSERT INTO CAMP_EMPLOYEE VALUES(47746, "Alexandros","Xristodoulou",41,0, "Iatros",1,"Iatros",2,0,"Iatreio");
INSERT INTO CAMP_EMPLOYEE VALUES(76574, "Xristos","Alexiou", 30, 0, "Fylakas",1,"Fylakas",5,0,"Amfitheatro");
INSERT INTO CAMP_EMPLOYEE VALUES(69745, "Maria","Anastasopoulou",42,1, "Katharistria",1,"Katharistria",10,0,"XwroiYgieinhs");
INSERT INTO CAMP_EMPLOYEE VALUES(58746, "Aggeliki","Athanasiou",25,1,"Gymnastria",1,"Gymnastria",2,0,NULL);

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
```

### Ερωτήματα στην βάση:

1. `SELECT CT_Name ,CT_AgeArea FROM CAMP_TEAM;`

   _Σε περίπτωση που υπάρχουν δραστηριότητες ηλικιών ευκολύνεται η μοιρασιά των κατασκηνωτών_
```sql
+-----------+------------+
| CT_Name   | CT_AgeArea |
+-----------+------------+
| artemis   | 11-13      |
| athina    | 14-16      |
| omiros    | 14-16      |
| tilemaxos | 11-13      |
+-----------+------------+
4 rows in set (0.00 sec)
```

2. `SELECT * FROM CA_CHRONIC_DISEASE;`

   _Προς ενημέρωση του ιατρού για την πλήρη ιατροφαρμακευτική περίθαλψη των κατασκηνωτών_
```sql
+--------+-----------------+
| CA_SSN | Chronic_Disease |
+--------+-----------------+
|  13714 | Epilipsia       |
|  24121 | Autismos        |
|  52131 | Diabetis        |
|  81321 | Asthma          |
+--------+-----------------+
4 rows in set (0.01 sec)
```

3. `SELECT FA_StartTime, FA_EndTime FROM FACILITY_WORKHOURS WHERE FA_Name="Pisina";`

   _Για να είναι γνωστό στους διοργανωτές ποιες ώρες είναι ελεύθερη η πισίνα_
```sql
+--------------+-------------+
| FA_StartTime | FA_EndTime  |
+--------------+-------------+
| 10:00:00.00  | 14:30:00.00 |
+--------------+-------------+
1 row in set (0.00 sec)
```

4. `SELECT CE_Name, CE_Age, CE_Role FROM CAMP_EMPLOYEE ORDER BY CE_Age;`

   _Για να μπορούν τα στελέχη να μοιραστούν στις αντίστοιχες εργασίες που προκύπτουν στην κατασκήνωση_
```sql
+------------+--------+--------------+
| CE_Name    | CE_Age | CE_Role      |
+------------+--------+--------------+
| Giannis    |     19 | Omadarxis    |
| Tassos     |     20 | Omadarxis    |
| Georgia    |     20 | Omadarxis    |
| Panagiota  |     21 | Omadarxis    |
| Antonis    |     25 | Gymnasths    |
| Aggeliki   |     25 | Gymnastria   |
| Xristos    |     30 | Fylakas      |
| Markos     |     32 | Mageiras     |
| Alexandros |     41 | Iatros       |
| Maria      |     42 | Katharistria |
+------------+--------+--------------+
10 rows in set (0.00 sec)
```

5. `SELECT CA_Name, CA_Surname, CA_Age, CA_D_Name, CA_D_Pnum, CA_P_Email, CA_P_Pnum FROM CAMPER WHERE CA_P_Name="Kostas" AND CA_P_Surname="Karapanos" ORDER BY CA_Age;`

   _Εύρεση κατασκηνωτών με συγγένια και ηλικιακή ταξινόμησή τους_
```sql
+---------+------------+--------+--------------+------------+-------------------+------------+
| CA_Name | CA_Surname | CA_Age | CA_D_Name    | CA_D_Pnum  | CA_P_Email        | CA_P_Pnum  |
+---------+------------+--------+--------------+------------+-------------------+------------+
| Giorgos | Karapanos  |     11 | Bagelio Pera | 6937437882 | kknot3k@gmail.com | 6932435892 |
| Eleni   | Karapanou  |     15 | Bagelio Pera | 6937437882 | kknot3k@gmail.com | 6932435892 |
+---------+------------+--------+--------------+------------+-------------------+------------+
2 rows in set (0.00 sec)
```
