<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="generator" content="HTML Tidy for HTML5 for Linux version 5.7.16">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>RIP the Omni</title>

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
        <h2>DELETE an Omn1</h2><br>

        <form name="info" action="" method="post">
            <input type="text" name="CA_SSN" placeholder="SSN (5 digits)" required />
            <p>
            <hr>
            <br>
            <input type="submit" name="submit" value="|RIP|" />
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

    $query = "DELETE from CAMP_EMPLOYEE WHERE CA_SSN=$ca_ssn";

    $result = mysqli_query($con,$query);

    if($result)
    {
        echo "<div class='form'>
        <h3>A moment to honor our f@llen brother</h3></div>";
    }
}
?>

</div>

</body>
</html>
