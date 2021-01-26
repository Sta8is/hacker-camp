<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="generator" content="HTML Tidy for HTML5 for Linux version 5.7.16">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Add an Omn1</title>

    <link rel="stylesheet" type="text/css" href="../../css/main-dark.css" />
</head>

<body>

<div class="container">
    <header>
        <div class="menu">
            <ul>
                <a href="./omni_s.html">/omni_s</a>
            </ul>
        </div>
    </header>
    <main>
        <h2>Add an Omn1</h2><br>

        <form name="info" action="" method="post">
            <input type="text" name="CE_SSN" placeholder="SSN (5 digits)" required />
            <input type="text" name="CE_Name" placeholder="Name" required />
            <input type="text" name="CE_Surname" placeholder="Surname" required />
            <input type="text" name="CE_Age" placeholder="Age" required />
            <input type="text" name="CE_Gender" placeholder="Gender" required />
            <input type="text" name="CE_Role" placeholder="Role" required />
            <input type="text" name="IsMedicalInsured" placeholder="Insurarce" required />
            <input type="text" name="Profession" placeholder="Profession" required />
            <input type="text" name="YearsOfService" placeholder="Years of Service" required />
            <input type="text" name="IsVolunteer" placeholder="Volunteer" required />
            <input type="text" name="FA_Name" placeholder="Facility" required />
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
if(isset($_REQUEST['CE_SSN'])) {
    $ce_ssn = stripslashes($_REQUEST['CE_SSN']);
    $ce_ssn = mysqli_real_escape_string($con,$ce_ssn); 
    
    $ce_name = stripslashes($_REQUEST['CE_Name']);
    $ce_name = mysqli_real_escape_string($con,$ce_name);

    $ce_surname = stripslashes($_REQUEST['CE_Surname']);
    $ce_surname = mysqli_real_escape_string($con,$ce_surname);

    $ce_age = stripslashes($_REQUEST['CE_Age']);
    $ce_age = mysqli_real_escape_string($con,$ce_age);

    $ce_gender = stripslashes($_REQUEST['CE_Gender']);
    $ce_gender = mysqli_real_escape_string($con,$ce_gender);

    $ce_role = stripslashes($_REQUEST['CE_Role']);
    $ce_role = mysqli_real_escape_string($con,$ce_role);

    $ce_koi = stripslashes($_REQUEST['IsMedicalInsured']);
    $ce_koi = mysqli_real_escape_string($con,$ce_koi);

    $ce_prof = stripslashes($_REQUEST['Profession']);
    $ce_prof = mysqli_real_escape_string($con,$ce_prof);

    $ce_yor = stripslashes($_REQUEST['YearsOfService']);
    $ce_yor = mysqli_real_escape_string($con,$ce_yor);

    $ce_vol = stripslashes($_REQUEST['IsVolunteer']);
    $ce_vol = mysqli_real_escape_string($con,$ce_vol);

    $fa_name = stripslashes($_REQUEST['FA_Name']);
    $fa_name = mysqli_real_escape_string($con,$fa_name);
    //$trn_date = date("Y-m-d H:i:s");

    $query = "INSERT into CAMP_EMPLOYEE VALUES (
        $ce_ssn,
        '$ce_name',
        '$ce_surname',
        $ce_age,
        $ce_gender,
        '$ce_role',
        $ce_koi,
        '$ce_prof',
        $ce_yor,
        $ce_vol,
        '$fa_name'
    )";

    $result = mysqli_query($con,$query);

    if($result)
    {
        echo "<div class='form'>
        <h3>Let's h@ck NASA with HTML</h3></div>";
    }
}
?>

</div>

</body>
</html>
