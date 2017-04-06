<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yesse";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}





 $d1 = new DateTime('2015-01-01');
           $d2 = new DateTime('today');
           $diff = $d2->diff($d1);
           $dateq = (2015+$diff->y);
?> 