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

    $Email_id=mysqli_real_escape_string($con,$_POST['Email_id']);
    $Password=mysqli_real_escape_string($con,$_POST['Password']);
    $Secret=mysqli_real_escape_string($con,$_POST['Secret']);

    $insert_clint="insert into logins(Email_id,Password,Secret)

    values('$Email_id','$Password','$Secret')";

    $run_costumer = mysqli_query($con, $insert_clint);

    if($run_costumer){
            echo"<script>alert('Signup successful')</script>";
        ?>
<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/contactmanagement/index.html">
<?php
        }

    else{
            echo"<script>alert('Signup not successful !')</script>";
        }
}
?>
