<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="generator" content="HTML Tidy for HTML5 for Linux version 5.7.16">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Version Outdated</title>

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
        <h2>Update a k1ddie</h2><br>

        <form name="info" action="" method="post">
            <input type="text" name="CA_SSN" placeholder="SSN (5 digits)" required />
            <input type="text" name="CA_Name" placeholder="Name">
            <input type="text" name="CA_Surname" placeholder="Surname">
            <input type="text" name="CA_Age" placeholder="Age">
            <input type="text" name="CA_Pnum" placeholder="Phone Number">
            <input type="text" name="CA_Gender" placeholder="Gender">
            <input type="text" name="CA_KoI" placeholder="Insurarce">
            <input type="text" name="CA_YoR" placeholder="Year of Register">
            <input type="text" name="CA_D_Name" placeholder="Doctor's Name">
            <input type="text" name="CA_D_Pnum" placeholder="Doctor's Phone Number">
            <input type="text" name="CA_P_Name" placeholder="Parent's Name">
            <input type="text" name="CA_P_Surname" placeholder="Parent's Surname">
            <input type="text" name="CA_P_Email" placeholder="Parent's Email">
            <input type="text" name="CA_P_Pnum" placeholder="Parent's Phone Number">
            <input type="text" name="CT_Name" placeholder="Team">
            <input type="text" name="FA_Name" placeholder="Facility">
            <p>
            <hr>
            <br>
            <input type="submit" name="submit" value="|pacsyu|" />
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
        //$query = "UPDATE CAMPER SET $column = '$c_var' WHERE CA_SSN=$ca_ssn"
        //$result = mysqli_query($con,$query);
    //}
//}

// If form submitted, insert values into the database.
if(isset($_REQUEST['CA_SSN'])) {
    $ca_ssn = stripslashes($_REQUEST['CA_SSN']);
    $ca_ssn = mysqli_real_escape_string($con,$ca_ssn); 
    
    if(isset($_REQUEST['CA_Name'])){
        $ca_name = stripslashes($_REQUEST['CA_Name']);
        $ca_name = mysqli_real_escape_string($con,$ca_name);
    }

    if(isset($_REQUEST['CA_Surname'])){
        $ca_surname = stripslashes($_REQUEST['CA_Surname']);
        $ca_surname = mysqli_real_escape_string($con,$ca_surname);
    }

    if(isset($_REQUEST['CA_Age'])){
        $ca_age = stripslashes($_REQUEST['CA_Age']);
        $ca_age = mysqli_real_escape_string($con,$ca_age);
    }

    if(isset($_REQUEST['CA_Pnum'])){
        $ca_pnum = stripslashes($_REQUEST['CA_Pnum']);
        $ca_pnum = mysqli_real_escape_string($con,$ca_pnum);
    }

    if(isset($_REQUEST['CA_Gender'])){
        $ca_gender = stripslashes($_REQUEST['CA_Gender']);
        $ca_gender = mysqli_real_escape_string($con,$ca_gender);
    }

    if(isset($_REQUEST['CA_KoI'])){
        $ca_koi = stripslashes($_REQUEST['CA_KoI']);
        $ca_koi = mysqli_real_escape_string($con,$ca_koi);
    }

    if(isset($_REQUEST['CA_YoR'])){
        $ca_yor = stripslashes($_REQUEST['CA_YoR']);
        $ca_yor = mysqli_real_escape_string($con,$ca_yor);
    }

    if(isset($_REQUEST['CA_D_Name'])){
        $ca_d_name = stripslashes($_REQUEST['CA_D_Name']);
        $ca_d_name = mysqli_real_escape_string($con,$ca_d_name);
    }

    if(isset($_REQUEST['CA_D_Pnum'])){
        $ca_d_pnum = stripslashes($_REQUEST['CA_D_Pnum']);
        $ca_d_pnum = mysqli_real_escape_string($con,$ca_d_pnum);
    }

    if(isset($_REQUEST['CA_P_Name'])){
        $ca_p_name = stripslashes($_REQUEST['CA_P_Name']);
        $ca_p_name = mysqli_real_escape_string($con,$ca_p_name);
    }

    if(isset($_REQUEST['CA_P_Surname'])){
        $ca_p_surname = stripslashes($_REQUEST['CA_P_Surname']);
        $ca_p_surname = mysqli_real_escape_string($con,$ca_p_surname);
    }

    if(isset($_REQUEST['CA_P_Email'])){
        $ca_p_email = stripslashes($_REQUEST['CA_P_Email']);
        $ca_p_email = mysqli_real_escape_string($con,$ca_p_email);
    }

    if(isset($_REQUEST['CA_P_Pnum'])){
        $ca_p_pnum = stripslashes($_REQUEST['CA_P_Pnum']);
        $ca_p_pnum = mysqli_real_escape_string($con,$ca_p_pnum);
    }

    if(isset($_REQUEST['CT_Name'])){
        $ct_name = stripslashes($_REQUEST['CT_Name']);
        $ct_name = mysqli_real_escape_string($con,$ct_name);
    }

    if(isset($_REQUEST['FA_Name'])){
        $fa_name = stripslashes($_REQUEST['FA_Name']);
        $fa_name = mysqli_real_escape_string($con,$fa_name);
    }

    //$trn_date = date("Y-m-d H:i:s");}

    $query = "UPDATE CAMPER SET 
        CA_Name = '$ca_name',
        CA_Surname = '$ca_surname',
        CA_Age = $ca_age,
        CA_Pnum = $ca_pnum,
        CA_Gender = $ca_gender,
        CA_KoI = $ca_koi,
        CA_YoR = '$ca_yor',
        CA_D_Name = '$ca_d_name',
        CA_D_Pnum = $ca_d_pnum,
        CA_P_Name = '$ca_p_name',
        CA_P_Surname = '$ca_p_surname',
        CA_P_Email = '$ca_p_email',
        CA_P_Pnum = $ca_p_pnum,
        CT_Name = '$ct_name',
        FA_Name = '$fa_name'
        WHERE CA_SSN=$ca_ssn";

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
