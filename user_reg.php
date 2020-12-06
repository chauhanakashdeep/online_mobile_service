<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<?php
    session_start(); //starting session for using data of another file
        if ($_SERVER['REQUEST_METHOD'] == "POST")
        {
            include('createdb2.php');//including databse connecting file
            $name = $_POST['name'];
            $mob = $_POST['phone'];
            $pass = md5($_POST['password']);
          
          
            $sql1 = "SELECT * FROM itlabexerciseusers WHERE name = '$name'";
            $duplicate = mysqli_query($con,$sql1);
            //checking duplicate values
            if(mysqli_num_rows($duplicate))
            {
                die (" sorry !you entererd duplicate value");
                exit();
            }
           // echo "connection successful </br>";
           else
           {
               $sql = "INSERT INTO Itlabexerciseusers (name, phone, pass) VALUES('$name','$mob','$pass')";
           // echo "yes";
               if(mysqli_query($con,$sql))
               {
              
                  
                 
                   echo"<script>window.location.href = 'login.php'</script>";
                   header("location:login.php");
                }
               else
               {
                   echo ("unable to connect");
               }
            }
         
          
        }
        
    ?>

<body>
    <div class="container">
        <h2>Register here</h2>
        <form action= "/phptut/user_reg.php"  method="post">
            <input type="text" name="name" id="name" placeholder="Username">
            <br>
            <br>
            <input type="text" name="phone" id="phone" placeholder="Phone number">
            <br>
            <br>
            <input type="password" name="password" id="pass" placeholder="password">
            <br>
            <br>
            <button >Save</button>
        </form>
    </div>
    

    
</body>
</html>