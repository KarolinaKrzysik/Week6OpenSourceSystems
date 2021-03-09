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
    //Display the updated data
    $sql = "SELECT * FROM test WHERE name = '$_POST[txtname]';";
    $runquery = $mysqli ->query($sql);
    $rowuser = $runquery -> fetch_assoc();
?>
<html>
    <body>
        <h1>Updated data:</h1>
        <form action = "">
            Name:
            <input type = "text" name = "txtname2" value = "<?php echo $rowuser['name'] ?>" readonly/>
            <br/>
            Phone number:
            <input type = "text" name = "txttelno2" value = "<?php echo $rowuser['phone_number']?>"/>
            <br />
            Email:
            <input type = "text" name = "txtemail2" value = "<?php echo $rowuser['email']?>"/>
            <br />
    </form>
    </body>

</html>