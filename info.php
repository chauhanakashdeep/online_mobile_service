<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inforrmation for mobile</title>
    <link rel="stylesheet" href="info.css">
</head>
<body>
    <?php
        include("mobdb.php");
        if ($_SERVER['REQUEST_METHOD']=='POST')
        {
            $mob = $_POST['mob_info'];
            $det = $_POST['mob_defect'];
            $sql = "select price from mobparts where Mobile = '$mob' and part = '$det'";
            $result = mysqli_query($con,$sql);
            $count = mysqli_num_rows($result);
            if($count ==1)
            { 
                echo"<script> alert('We will be at your door step in 2-3 days')</script>";
            }
            else{
                echo"<script> alert('Sorry we are unable to repair Your mobile')</script>";
            }
        }
        
    ?>
    <div class="container">
        <div class="header">
            <h2>Please Fill These Details</h2>
        </div>
        <form action="/phptut/Mobile_service/info.php" method="POST">
            <select name="mob_info" id="mob_info">
                <option value="--Select Mobile--">--Select Mobile--</option>
                <option value="Nokia">Nokia</option>
                <option value="Samsung">Samsung</option>
                <option value="Redmi">Redmi</option>
                <option value="Motorola">Motorola</option>
                <option value="Apple">Apple</option>
                <option value="Realme">Realme</option>
            </select>

            <select name="mob_defect" id="mob_defect">
                <option value="--Select Defect--">--Select Defect--</option>
                <option value="Display">Display</option>
                <option value="Battery">Battery</option>
                <option value="Mike">Mike</option>
                <option value="Speaker">Speaker</option>
                <option value="Charging jack">Charging Jack</option>
                <option value="Light sensor">Light sensor</option>
            </select>
            <br>
            <button>Check availablity</button>
        </form>
    </div>
    
</body>
</html>