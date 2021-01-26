<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="generator" content="HTML Tidy for HTML5 for Linux version 5.7.16">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Delect a k1ddie</title>

    <link rel="stylesheet" type="text/css" href="../../css/main-dark.css" />
</head>

<body>

<div class="container">
    <header>
        <div class="menu">
            <ul>
                <a href="./kiddie_s.html">/kiddie_s</a>
            </ul>
        </div>
    </header>
    <main>
        <h2>DELETE a k1ddie</h2><br>

        <form name="info" action="" method="post">
            <input type="text" name="CA_SSN" placeholder="SSN (5 digits)" required />
            <p>
            <hr>
            <br>
            <input type="submit" name="submit" value="|Ban|" />
        </form>
    </main>

    <footer>

    </footer>
<?php

error_reporting(E_ALL); ini_set('display_errors', '1');
require('../connect.php');

// If form submitted, insert values into the database.
if(isset($_REQUEST['CA_SSN'])) {
    $ca_ssn = stripslashes($_REQUEST['CA_SSN']);
    $ca_ssn = mysqli_real_escape_string($con,$ca_ssn); 

    $query = "";

    // Medicine
    $query0 = "SELECT 1 FROM CA_MEDICINE WHERE CA_SSN = $ca_ssn";
    $result0 = mysqli_query($con,$query0);
    if($result0) {
        $query .= "DELETE from CA_MEDICINE WHERE CA_SSN=$ca_ssn;";
        $b_q0 = 1;
    }

    // Chronic_Disease
    $query1 = "SELECT 1 FROM CA_CHRONIC_DISEASE WHERE CA_SSN = $ca_ssn";
    $result1 = mysqli_query($con,$query1);
    if($result1) {
        $query .= "DELETE from CA_CHRONIC_DISEASE WHERE CA_SSN=$ca_ssn;";
        $b_q1 = 1;
    }

    // Infectious_Disease
    $query2 = "SELECT 1 FROM CA_INFECTIOUS_DISEASE WHERE CA_SSN = $ca_ssn";
    $result2 = mysqli_query($con,$query2);
    if($result2) {
        $query .= "DELETE from CA_INFECTIOUS_DISEASE WHERE CA_SSN=$ca_ssn;";
        $b_q2 = 1;
    }

    // Allergy
    $query3 = "SELECT 1 FROM CA_ALLERGY WHERE CA_SSN = $ca_ssn";
    $result3 = mysqli_query($con,$query3);
    if($result3) {
        $query .= "DELETE from CA_ALLERGY WHERE CA_SSN=$ca_ssn;";
        $b_q3 = 1;
    }

    $query .= "DELETE from CAMPER WHERE CA_SSN=$ca_ssn;";

    if($b_q0 || $b_q1 || $b_q2 || $b_q3) {
        $result = mysqli_multi_query($con, $query);

        if($result)
        {
            echo "<div class='form'>
            <h3>No black h@ts here</h3></div>";
        }
    }
}
?>

</div>

</body>
</html>
