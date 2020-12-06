<?php
    $servername = "localhost";
    $username ="root";
    $password = "";
    $dbName = "itlab1";

    $con = mysqli_connect($servername,$username,$password,$dbName);
    //ch3ecking connection
    if(!$con)
    {
        echo "connection unsuccessful";
    }
    
       // echo "connected successfully";
    
    echo "<br>";
    $tbname = "mobparts";
    $var = "SELECT 1 FROM ".$tbname;//Checking For Table Is Exist Or Not
    if ($con->query($var) == TRUE)
    {
        echo("connection sucessful");
    }
?>