<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="home.css">
<script>
  
</script>
</head>
<body>
  <?php
    if(array_key_exists('touch', $_GET)) { 
      echo "<script>alert('Login first!');window.location.href = 'login.php'</script>"; 
  } 
    else if(array_key_exists('appoin', $_GET)) { 
      echo"<script>alert('Please Fill Details');window.location.href = 'info.php'</script>"; 
  } 
  
    
  ?>

<div class="container">
    
    <div class="navbar">
      <div class="cname">
        <h2>MR.REPAIR</h2>
      </div>

      <div class="topnav" id="myTopnav">
        <a href="about.html">About us</a>
        <a href="contact.html" >Contact us</a>
        <a href="accessories.html">Accessories</a>
        <a href="home.php" class="active">Home</a>
        
      </div>
    </div>

    <div class="centretext">
      <h1>Quality Appliance Repairing</h1>
      <br>
      <p>Bring Your Gadgets Back To The Life.</p>
    </div>

    <form action="/phptut/Mobile_service/home.php" method="get">
      <div class="btn1">
          <button name="touch" id= "touch">Get In Touch</button>
          <button name="appoin" id= "appoin">Take Appoinment >></button>
          
    </div>
    </form>

</div>

</body>
</html>
