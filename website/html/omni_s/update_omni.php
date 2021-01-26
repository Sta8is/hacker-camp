<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="generator" content="HTML Tidy for HTML5 for Linux version 5.7.16">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>R00kie mistake</title>

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
        <h2>Update an Omni</h2><br>

        <form name="info" action="" method="post">
            <input type="text" name="CE_SSN" placeholder="SSN (5 digits)" required />
            <input type="text" name="CE_Name" placeholder="Name">
            <input type="text" name="CE_Surname" placeholder="Surname">
            <input type="text" name="CE_Age" placeholder="Age">
            <input type="text" name="CE_Gender" placeholder="Gender">
            <input type="text" name="CE_Role" placeholder="Role">
            <input type="text" name="IsMedicalInsured" placeholder="Insurarce">
            <input type="text" name="Profession" placeholder="Profession">
            <input type="text" name="YearsOfService" placeholder="Years of Service">
            <input type="text" name="IsVolunteer" placeholder="Volunteer">
            <input type="text" name="FA_Name" placeholder="Facility">
            <p>
            <hr>
            <br>
            <input type="submit" name="submit" value="|sudo !!|" />
        </form>
    </main>

    <footer>

    </footer>
<?php
error_reporting(E_ALL); ini_set('display_errors', '1');
require('../connect.php');

//function checkField($column, $c_var) {
    //if(isset($_REQUEST[$column])) {
        //$c_var = stripslashes($_REQUEST[$column]);
        //$c_var = mysqli_real_escape_string($con,$c_var);
        //$query = "UPDATE CAMPER SET $column = '$c_var' WHERE CE_SSN=$ce_ssn"
        //$result = mysqli_query($con,$query);
    //}
//}

// If form submitted, insert values into the database.
if(isset($_REQUEST['CE_SSN'])) {
    $ce_ssn = stripslashes($_REQUEST['CE_SSN']);
    $ce_ssn = mysqli_real_escape_string($con,$ce_ssn); 
    
    if(isset($_REQUEST['CE_Name'])){
        $ce_name = stripslashes($_REQUEST['CE_Name']);
        $ce_name = mysqli_real_escape_string($con,$ce_name);
    }

    if(isset($_REQUEST['CE_Surname'])){
        $ce_surname = stripslashes($_REQUEST['CE_Surname']);
        $ce_surname = mysqli_real_escape_string($con,$ce_surname);
    }

    if(isset($_REQUEST['CE_Age'])){
        $ce_age = stripslashes($_REQUEST['CE_Age']);
        $ce_age = mysqli_real_escape_string($con,$ce_age);
    }

    if(isset($_REQUEST['CE_Gender'])){
        $ce_gender = stripslashes($_REQUEST['CE_Gender']);
        $ce_gender = mysqli_real_escape_string($con,$ce_gender);
    }

    if(isset($_REQUEST['CE_Role'])){
        $ce_role = stripslashes($_REQUEST['CE_Role']);
        $ce_role = mysqli_real_escape_string($con,$ce_role);
    }

    if(isset($_REQUEST['IsMedicalInsured'])){
        $ce_koi = stripslashes($_REQUEST['IsMedicalInsured']);
        $ce_koi = mysqli_real_escape_string($con,$ce_koi);
    }

    if(isset($_REQUEST['Profession'])){
        $ce_prof = stripslashes($_REQUEST['Profession']);
        $ce_prof = mysqli_real_escape_string($con,$ce_prof);
    }

    if(isset($_REQUEST['YearsOfService'])){
        $ce_yor = stripslashes($_REQUEST['YearsOfService']);
        $ce_yor = mysqli_real_escape_string($con,$ce_yor);
    }

    if(isset($_REQUEST['IsVolunteer'])){
        $ce_vol = stripslashes($_REQUEST['IsVolunteer']);
        $ce_vol = mysqli_real_escape_string($con,$ce_vol);
    }

    if(isset($_REQUEST['FA_Name'])){
        $fa_name = stripslashes($_REQUEST['FA_Name']);
        $fa_name = mysqli_real_escape_string($con,$fa_name);
    }

    //$trn_date = date("Y-m-d H:i:s");}

    $query = "UPDATE CAMPER SET 
        CE_Name = '$ce_name',
        CE_Surname = '$ce_surname',
        CE_Age = $ce_age,
        CE_Gender = $ce_gender,
        CE_Role = '$ce_role',
        IsMedicalInsured = $ce_koi,
        Profession = '$ce_prof',
        YearsOfService = '$ce_yor',
        IsVolunteer = $ce_vol,
        FA_Name = '$fa_name'
        WHERE CE_SSN=$ce_ssn";

    $result = mysqli_query($con,$query);

    if($result)
    {
        echo "<div class='form'>
        <h3>Always update your software</h3></div>";
    }
}
?>

</div>

</body>
</html>
