<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="generator" content="HTML Tidy for HTML5 for Linux version 5.7.16">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>D0x a k1ddie</title>

    <link rel="stylesheet" href="../../css/main-dark.css" />
</head>

<body>
    <div class="container">
        <header>
            <div class="menu">
                <ul>
                    <li><a href="./kiddie_s.html">/kiddie_s</a></li>
                </ul>
            </div>
        </header>
        <main>
        <h2>D0x a k1ddie</h2>
        <p>
<?php
require('../connect.php');

$b_ca_ssn = empty($_REQUEST['CA_SSN']);
$b_ca_num = empty($_REQUEST['number']);
$b_ca_med = empty($_REQUEST['medicine']);

// If form submitted, insert values into the database.
    if(!$b_ca_ssn) {
        $ca_ssn = stripslashes($_REQUEST['CA_SSN']);
        $ca_ssn = mysqli_real_escape_string($con,$ca_ssn); 
        $query = "SELECT * FROM CAMPER WHERE CA_SSN=$ca_ssn";
    } else if(!$b_ca_num) {
        $ca_num = stripslashes($_REQUEST['number']);
        $ca_num = mysqli_real_escape_string($con,$ca_num); 
        echo "hello";
        $query = "SELECT * FROM CAMPER LIMIT $ca_num";
    } else if(!$b_ca_med){
        $query = "SELECT CAMPER.*, CA_MEDICINE.Medicine FROM CAMPER
            JOIN CA_MEDICINE ON CA_MEDICINE.CA_SSN = CAMPER.CA_SSN";
    } else {
        $query = "SELECT * FROM CAMPER";
    }

    $result = mysqli_query($con,$query);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            if($b_ca_med){
                echo " - SSN: " . $row["CA_SSN"]. "<br>".
                    " - Name: " . $row["CA_Name"]. "<br>".
                    " - Surname: " . $row["CA_Surname"]. "<br>". 
                    " - Age: " . $row["CA_Age"]. "<br>".
                    " - Number: " . $row["CA_Pnum"]. "<br>".
                    " - Gender: " . $row["CA_Gender"]. "<br>".
                    " - Insurarce Status: " . $row["CA_KoI"]. "<br>".
                    " - Year of Register: " . $row["CA_YoR"]. "<br>".
                    " - Doctor's Name: " . $row["CA_D_Name"]. "<br>".
                    " - Doctor's Phone Number: " . $row["CA_D_Pnum"]. "<br>".
                    " - Parent's Name: " . $row["CA_P_Name"]. "<br>".
                    " - Parent's Surname: " . $row["CA_P_Surname"]. "<br>".
                    " - Parent's Email: " . $row["CA_P_Email"]. "<br>".
                    " - Parent's Phone Number: " . $row["CA_P_Pnum"]. "<br>".
                    " - Team: " . $row["CT_Name"]. "<br>".
                    " - Facility: " . $row["FA_Name"]. "<br>".
                    "<br>";
            }

            else {
                echo " - SSN: " . $row["CA_SSN"]. "<br>".
                    " - Name: " . $row["CA_Name"]. "<br>".
                    " - Surname: " . $row["CA_Surname"]. "<br>". 
                    " - Medicine: " . $row["Medicine"]. "<br>".
                    "<br>";
            }
        }
    }
    else {
        echo "0 results";
    }
?>
        </main>
        <hr>
        <br>
        <form name="info" action="" method="get">
            <input type="text" name="CA_SSN" placeholder="SSN (5 digits)"/>
            <input type="text" name="number" placeholder="Dox only a certain numb3r"/>
            <hr>
            <input type="submit" name="submit" value="|D0x|" />
            <hr>
            <input type="submit" name="medicine" value="|See who takes medicine|"/>
        </form>
        <footer>
        </footer>
    </div>
</body>
<p>

</html>
