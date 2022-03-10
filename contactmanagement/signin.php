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
        $email = $_POST['Email_id'];
        $pwd = $_POST['Password'];

        $query = "SELECT * FROM logins WHERE Email_id='$email' && Password='$pwd'";
        $data = mysqli_query($con,$query);

        $total = mysqli_num_rows($data);

        // echo $total;

        if($total == 1)
        {
            // echo "Login Succefull";
            // header('location:display.php');
            header('location:contact.php');
            $_SESSION['Email_ID']=$email;

//            <META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/lifecare/indexlog.php">


        }
        else
        {
            echo "<font color = 'red'>Invalid mail ID or Password";

        }
    }
?>
