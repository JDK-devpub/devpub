<?php
    session_start();
    include ("dbconfig.php");

    $msg = "";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email = $_POST["lemail"];
        $password = $_POST["lpassword"];

        $email = mysqli_real_escape_string($dbconfig, $email);
        $password = mysqli_real_escape_string($dbconfig, $password);


        $sql="SELECT * FROM users WHERE email='$email' AND pass='".md5($password,TRUE)."'";
        $result=mysqli_query($dbconfig,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        if(mysqli_num_rows($result) == 1)
        {
            $_SESSION['sid']=session_id();
            header('location:dashboard.php');
        }
        else
        {
            echo "Login Failed";
        }
    }
?>
