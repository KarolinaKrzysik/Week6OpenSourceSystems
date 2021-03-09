<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "oss_logbook";
    //Connect to server
    $mysqli = new mysqli($hostname, $username, $password, $database);
    //Execute sql statement
    $sql = "DELETE FROM test WHERE name = '$_POST[hiddenname]';";
    $runquery = $mysqli -> query($sql);
    echo "Record has been deleted.";

?>