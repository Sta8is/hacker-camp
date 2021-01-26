1. Κατά την δημιουργία κατασκηνωτών ενημέρωση βάσης μόνον εάν ενημερωθούν όλοι οι πίνακες (CAMPER + πλειότιμα):
   ```sql
   START TRANSACTION;
   INSERT INTO CAMPER values(13114, "Polixronis", "Xaralampou", 14, 6939
   435892, 1, 0, curdate(), "Theodos Kolokotronis", 6932415812, "Maria",
    "Magdalini", "maraki64@outlook.com", 6932415662, "omiros", "SpitakiD
io");
   INSERT INTO CA_MEDICINE values(13114, "Charak");
   COMMIT;
   ```
   
2. Ευρετήριο στον πίνακα τον κατασκηνωτών με βάση το Ονοματεπώνυμο για γρήγορότερη αναζήτηση:
   ```sql
   CREATE INDEX CA_NameSearch_idx /* underscore identifies index property */
   ON CAMPER (CA_Name, CA_Surname);
   ```

3. 1. Όψη του πίνακα των κατασκηνωτών για προβολή στοιχείων που απασχολούν τις δραστηριότητες της κατασκήνωσης και αποκρύπτουν ευαίσθητα δεδομένα.
      ```sql
      CREATE OR REPLACE VIEW CAMPER_PUBLIC AS
      SELECT CA_Name, CA_Surname, CA_Age, CA_Gender
      FROM CAMPER;
      ```

   2. Όψη του πίνακα των κατασκηνωτών για προβολή στοιχείων που απασχολούν τον γιατρό για την ιατροφαρμακευτική περίθαλψη.
      ```sql
      CREATE OR REPLACE VIEW CAMPER_MEDICAL_INFO AS
      SELECT CAMPER.CA_SSN, CAMPER.CA_Name, CAMPER.CA_Surname, CAMPER.CA_Age, CAMPER.CA_D_Name, CAMPER.CA_D_Pnum, CA_MEDICINE.Medicine
      FROM CAMPER, CA_MEDICINE
      WHERE CAMPER.CA_SSN = CA_MEDICINE.CA_SSN
      ORDER BY CAMPER.CA_Surname;
      ```
   
4. 1. Stored Procedure:

      ```sql
      DELIMITER $$
      CREATE PROCEDURE parseEmail()
      BEGIN
      	SELECT CA_P_Email FROM CAMPER;
      END $$
      DELIMITER ;
      CALL parseEmail();
      ```

   2. Stored Function:

      ```sql
      DELIMITER $$
       CREATE FUNCTION incrEmpYear(
			YearsOfService INT
	   )
	   RETURNS INT
	   BEGIN
	   	DECLARE years INT;
	   	SET years = YearsOfService + 1;
	   	RETURN (years);
	   END $$
	   DELIMITER ;
	   ```
5. Κατά την καταχώρηση κατασκηνωτών και υπαλλήλων αυτόματη ανανέωση όψεων.

```sql
DELIMITER $$
CREATE TRIGGER updateCampTeamNum
AFTER INSERT ON CAMPER
FOR EACH ROW
BEGIN

DECLARE ct_num int;

SELECT CT_Cnum
INTO @ct_num
FROM CAMP_TEAM
WHERE CAMP_TEAM.CT_Name = NEW.CT_Name;

UPDATE CAMP_TEAM
SET CT_Cnum = @ct_num + 1
WHERE CT_Name = NEW.CT_Name;

END;
$$
DELIMITER ;
```
