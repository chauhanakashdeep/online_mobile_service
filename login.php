<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
    
</head>
<body>
    <?php
    include('createdb2.php');
        if ($_SERVER['REQUEST_METHOD']=='POST')
        {
            $user_name = $_POST['username'];
            $passw = md5($_POST['password']);
            
        
                //echo ("connection establised");
                $sql = "select * from itlabexerciseusers where name = '$user_name' and pass = '$passw'";
                $duplicate = mysqli_query($con,$sql);
           
               if(mysqli_num_rows($duplicate))   //checki8ng values in database            
               {
                 
                  
                  
                  header("location:home.php");
                  echo"<script>alert('successfully logged in');</script>";
               }
               else{
                   if(mysqli_num_rows($duplicate) == 0)//checking if data not exists then register
                   {
                       //echo "please register yourself";
                       echo"<script>alert('You need to Register first');</script>";
                       header("Location: user_reg.php");
                        
                   }
                   else
                   {
                    echo "*invalid username or password";
                   }
                
               }

            
        }
    ?>
    <div class="container">
        <form action="/phptut/Mobile_service/login.php" method="post">
            <h2>Login here</h2>
            <label for="username">Username</label>
            <input type="text" name = "username" id = "username" >
            <br>
            <br>
            <label for="password">Password</label>
            <input type="text" name= "password" id = "password">
            <br>
           
            
            <br>
            <button>Login</button>
            <br>
            <br>
            <a href="user_reg.php">Don't have an account Click Here! </a>
        </form>
    </div>
</body>
</html>