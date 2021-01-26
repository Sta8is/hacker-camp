<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="generator" content="HTML Tidy for HTML5 for Linux version 5.7.16">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Add a k1ddie</title>

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
        <h2>Add a k1ddie</h2><br>

        <form name="info" action="" method="post">
            <input type="text" name="CA_SSN" placeholder="SSN (5 digits)" required />
            <input type="text" name="CA_Name" placeholder="Name" required />
            <input type="text" name="CA_Surname" placeholder="Surname" required />
            <input type="text" name="CA_Age" placeholder="Age" required />
            <input type="text" name="CA_Pnum" placeholder="Phone Number" required />
            <input type="text" name="CA_Gender" placeholder="Gender" required />
            <input type="text" name="CA_KoI" placeholder="Insurarce" required />
            <input type="text" name="CA_D_Name" placeholder="Doctor's Name" required />
            <input type="text" name="CA_D_Pnum" placeholder="Doctor's Phone Number" required />
            <input type="text" name="CA_P_Name" placeholder="Parent's Name" required />
            <input type="text" name="CA_P_Surname" placeholder="Parent's Surname" required />
            <input type="text" name="CA_P_Email" placeholder="Parent's Email" required />
            <input type="text" name="CA_P_Pnum" placeholder="Parent's Phone Number" required />
            <input type="text" name="Medicine" placeholder="Medication">
            <input type="text" name="Chronic_Disease" placeholder="Chronic Diseases">
            <input type="text" name="Infectious_Disease" placeholder="Infectious Diseases">
            <input type="text" name="Allergy" placeholder="Allergies">
            <p>
            <hr>
            <br>
            <input type="submit" name="submit" value="|Add|" />
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
    
    $ca_name = stripslashes($_REQUEST['CA_Name']);
    $ca_name = mysqli_real_escape_string($con,$ca_name);

    $ca_surname = stripslashes($_REQUEST['CA_Surname']);
    $ca_surname = mysqli_real_escape_string($con,$ca_surname);

    $ca_age = stripslashes($_REQUEST['CA_Age']);
    $ca_age = mysqli_real_escape_string($con,$ca_age);

    $ca_pnum = stripslashes($_REQUEST['CA_Pnum']);
    $ca_pnum = mysqli_real_escape_string($con,$ca_pnum);

    $ca_gender = stripslashes($_REQUEST['CA_Gender']);
    $ca_gender = mysqli_real_escape_string($con,$ca_gender);

    $ca_koi = stripslashes($_REQUEST['CA_KoI']);
    $ca_koi = mysqli_real_escape_string($con,$ca_koi);

    $ca_yor = date("Y");

    $ca_d_name = stripslashes($_REQUEST['CA_D_Name']);
    $ca_d_name = mysqli_real_escape_string($con,$ca_d_name);

    $ca_d_pnum = stripslashes($_REQUEST['CA_D_Pnum']);
    $ca_d_pnum = mysqli_real_escape_string($con,$ca_d_pnum);

    $ca_p_name = stripslashes($_REQUEST['CA_P_Name']);
    $ca_p_name = mysqli_real_escape_string($con,$ca_p_name);

    $ca_p_surname = stripslashes($_REQUEST['CA_P_Surname']);
    $ca_p_surname = mysqli_real_escape_string($con,$ca_p_surname);

    $ca_p_email = stripslashes($_REQUEST['CA_P_Email']);
    $ca_p_email = mysqli_real_escape_string($con,$ca_p_email);

    $ca_p_pnum = stripslashes($_REQUEST['CA_P_Pnum']);
    $ca_p_pnum = mysqli_real_escape_string($con,$ca_p_pnum);

    if(!empty($_REQUEST['Medicine'])) {
        $Medicine = stripslashes($_REQUEST['Medicine']);
        $Medicine = mysqli_real_escape_string($con,$Medicine);
        $b_ca_med = 1;
    } else {
        $b_ca_med = 0;
    }

    if(!empty($_REQUEST['Chronic_Disease'])) {
        $Chronic_Disease = stripslashes($_REQUEST['Chronic_Disease']);
        $Chronic_Disease = mysqli_real_escape_string($con,$Chronic_Disease);
        $b_ca_chr = 1;
    } else {
        $b_ca_chr = 0;
    }


    if(!empty($_REQUEST['Infectious_Disease'])) {
        $Infectious_Disease = stripslashes($_REQUEST['Infectious_Disease']);
        $Infectious_Disease = mysqli_real_escape_string($con,$Infectious_Disease);
        $b_ca_inf = 1;
    } else {
        $b_ca_inf = 0;
    }


    if(!empty($_REQUEST['Allergy'])) {
        $Allergy = stripslashes($_REQUEST['Allergy']);
        $Allergy = mysqli_real_escape_string($con,$Allergy);
        $b_ca_ale = 1;
    } else {
        $b_ca_ale = 0;
    }

    if($ca_gender == 0) {
        switch($ca_age) {
            case in_array($ca_age, range(10, 13)):
                $ct_name = "tilemaxos";
                $fa_name = "SpitakiEna";
            break;
            case in_array($ca_age, range(14, 16)):
                $ct_name = "omiros";
                $fa_name = "SpitakiDio";
            break;
        }
    } else {
        switch($ca_age) {
            case in_array($ca_age, range(10, 13)):
                $ct_name = "artemis";
                $fa_name = "SpitakiTria";
            break;
            case in_array($ca_age, range(14, 16)):
                $ct_name = "athina";
                $fa_name = "SpitakiTessera";
            break;
        }
    }
    //$trn_date = date("Y-m-d H:i:s");

    $query = "INSERT into CAMPER VALUES (
        $ca_ssn,
        '$ca_name',
        '$ca_surname',
        $ca_age,
        $ca_pnum,
        $ca_gender,
        $ca_koi,
        '$ca_yor',
        '$ca_d_name',
        $ca_d_pnum,
        '$ca_p_name',
        '$ca_p_surname',
        '$ca_p_email',
        $ca_p_pnum,
        '$ct_name',
        '$fa_name'
    );";

    if($b_ca_med == 1) {
        $query.= "INSERT into CA_MEDICINE VALUES (
            $ca_ssn,
            '$Medicine'
        );";
    }

    if($b_ca_chr == 1) {
        $query.= "INSERT into CA_CHRONIC_DISEASE VALUES (
            $ca_ssn,
            '$Chronic_Disease'
        );";
    }

    if($b_ca_inf == 1) {
        $query.= "INSERT into CA_INFECTIOUS_DISEASE VALUES (
            $ca_ssn,
            '$Infectious_Disease'
        );";
    }

    if($b_ca_ale == 1) {
        $query.= "INSERT into CA_ALLERGY VALUES (
            $ca_ssn,
            '$Allergy'
        );";
    }


    if($b_ca_ale || $b_ca_inf || $b_ca_chr || $b_ca_med) {
        $result = mysqli_multi_query($con,$query);
    } else {
        $result = mysqli_query($con, $query);
    }


    if($result)
    {
        echo "<div class='form'>
        <h3>A hacker in progress has been added succesfully</h3></div>";
    }
}
?>

</div>

</body>
</html>
