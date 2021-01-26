<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="generator" content="HTML Tidy for HTML5 for Linux version 5.7.16">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>REc0n this place</title>

    <link rel="stylesheet" href="../../css/main-dark.css" />
</head>

<body>
    <div class="container">
        <header>
            <div class="menu">
                <ul>
                    <li><a href="./box3s.html">/box3s</a></li>
                </ul>
            </div>
        </header>
        <main>
        <h2>Drone Inf0</h2>
        <p>
<?php
require('../connect.php');

//// If form submitted, insert values into the database.
//if(isset($_REQUEST['username'])) {
    //// removes backslashes
    //$ca_ssn = stripslashes($_REQUEST['username']);

    //escapes special characters in a string
    //$ca_ssn = mysqli_real_escape_string($con,$ca_ssn); 

$query = "SELECT * FROM FACILITY LIMIT 8";
    $result = mysqli_query($con,$query);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                echo " - Name: " . $row["FA_Name"]. "<br>".
                    " - Capacity: " . $row["FA_Capacity"]. "<br>".
                    "<br>";
        }
    }
    else {
        echo "0 results";
    }
//}
?>
        </main>
        <hr>
        <br>
        <form name="info" action="" method="get">
            <input type="submit" name="submit" value="|R3con|" />
        </form>
        <footer>
        </footer>
    </div>
</body>
<p>

</html>
