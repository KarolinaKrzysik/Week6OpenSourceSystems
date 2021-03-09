<?php
    //Connect to server
    $hostname = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "oss_logbook";

    $mysqli = new mysqli($hostname, $username, $password, $database);

    $sql = "SELECT * FROM test";
    //Execute sql statement
    $runquery = $mysqli -> query($sql);
?>
<html>
    <body>
        <?php
            while($rowuser = $runquery -> fetch_assoc()){
                echo "<a href= \"wk6ex2action.php?id=$rowuser[name]\">$rowuser[name]</a><br/>";
            }
        ?>
    </body>
</html>