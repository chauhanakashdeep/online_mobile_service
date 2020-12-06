<?php
//echo "<h1>Connecting database</h1>";
//connecting database
    $servername = "localhost";
    $username ="root";
    $password = "";
    $dbName = "itlab1";

    $con = mysqli_connect($servername,$username,$password);
    //ch3ecking connection
    if(!$con)
    {
        echo "connection unsuccessful";
    }
    
       // echo "connected successfully";
    
    echo "<br>";
    //checking if databse exists
    if (!mysqli_select_db($con,$dbName)){
        $sql = "CREATE DATABASE ".$dbName;
        if ($con->query($sql) === TRUE) {
            //when database created successfull
        }else {
            echo "<br>";
            echo "Error creating database: " . $con->error;//displaying the error in creating database
        }
    }
    else if (mysqli_select_db($con,$dbName)){ // if the database is already exists
    }
    
    $tbName = "ITLABexerciseusers";//Table Name
    $var = "SELECT 1 FROM ".$tbName;//Checking For Table Is Exist Or Not
    if ($con->query($var) == TRUE)
    {
        
    }
    else if ($con->query($var) == FALSE)//Creating Table If Not Exist
    {
        $sql = "Create table ".$tbName." (USERNAME Varchar(100),PASSWORD Char(40),PHONE Varchar(10),Primary key (USERNAME))";
        if ($con->query($sql) == True)
        {
            
        }
    }
    else {//Showing Error If There Is Any Error In Creating Table
        echo "<br>";
        echo "Error In Creating Table".$con->error;
    }
    //closing the connection to database
    ?>