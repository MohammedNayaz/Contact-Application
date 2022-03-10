<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactapp";

$con = mysqli_connect($servername,$username,$password,$dbname);

if($con){
    echo "Connection ok";
}
else{
    echo "Connection failed".mysqli_connect_error();
}

if(isset($_POST['submit']))
{

    $Name=mysqli_real_escape_string($con,$_POST['Name']);
    $Ph_No=mysqli_real_escape_string($con,$_POST['Ph_No']);
    $Email_id=mysqli_real_escape_string($con,$_POST['Email_id']);

    $insert_clint="insert into contact(Name,Ph_No,Email_id)

    values('$Name','$Ph_No','$Email_id')";

    $run_costumer = mysqli_query($con, $insert_clint);

    if($run_costumer){
            echo"<script>alert('Contact Added successful')</script>";
        ?>
<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/contactmanagement/Contact.php">
<?php
        }

    else{
            echo"<script>alert('Contact Added successful !')</script>";
        }
}
?>
