<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "oss_logbook";
    $sql = "INSERT INTO test (name, email, phone_number)";
    $sql = $sql . " values ('$_POST[txtName]', '$_POST[txtEmail]', '$_POST[txtPhoneNumber]')";

    //Connect to server
    $mysqli = new mysqli($hostname, $username, $password, $database);
    //Execute sql statement
    $runquery = $mysqli ->query($sql);
    $sql = "SELECT * FROM test";

    //Execute sql statement
    $runquery = $mysqli ->query($sql);
    while($rowusers = $runquery -> fetch_assoc()){
        echo "$rowusers[name] $rowusers[email] $rowusers[phone_number] <br/>";
    }


?>