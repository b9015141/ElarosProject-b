<?php

// Local Database details
$host = "localhost";
$dbusername = "id16166148_elarosgroupb";
$dbpassword = "g^8mMc02B*2XE5Pg";
$dbname = "id16166148_elarosdatabase";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

// Error message if you can't connect
if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}

?>