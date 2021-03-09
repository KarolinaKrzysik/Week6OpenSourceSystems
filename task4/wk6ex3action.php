<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "oss_logbook";
    

    //Connect to server
    $mysqli = new mysqli($hostname, $username, $password, $database);
    //Execute sql statement
    $sql = "UPDATE test 
    SET phone_number = '$_POST[txttelno]', email = '$_POST[txtemail]'
    WHERE name = '$_POST[txtname]';";
    $runquery = $mysqli ->query($sql);
    echo "Data has been updated.";
?>
