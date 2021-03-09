<?php
    //Connect to server
    $hostname = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "oss_logbook";

    $mysqli = new mysqli($hostname, $username, $password, $database);

    $sql = "SELECT * FROM test WHERE name = '$_GET[id]' ";

    //Execute query
    $runquery = $mysqli -> query($sql);
    $rowuser = $runquery -> fetch_assoc();
    $deleteme = $rowuser['name'];
    

?>
<html>
    <body>
        <form action = "wk6ex3action.php" method = "POST">
            Name:
            <input type = "text" name = "txtname" value = "<?php echo $rowuser['name'] ?>" readonly/>
            <br/>
            Phone number:
            <input type = "text" name = "txttelno" value = "<?php echo $rowuser['phone_number']?>"/>
            <br />
            Email:
            <input type = "text" name = "txtemail" value = "<?php echo $rowuser['email']?>"/>
            <br />
            <input type = "submit" name = "btnsubmit" value = "save"/>
        </form>
        <form action = "wk6ex4action.php" method = "POST">
            <input type = "hidden" name = "hiddenname" value = "<?php echo $deleteme ?>" />
            <input type = "submit" name = "btndelete" value = "Delete Record"/>
        </form>
    </body>

</html>