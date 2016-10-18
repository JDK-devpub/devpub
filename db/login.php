<?php
    session_start();
    include ("dbconfig.php");

    $msg = "";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email = $_POST["lemail"];
        $password = $_POST["lpassword"];
        $stripemail = stripslashes($email);
        $strippass  = stripslashes($password);

        $email = mysqli_real_escape_string($dbconfig, $stripemail);
        $password = mysqli_real_escape_string($dbconfig, $strippass);


        $sql="SELECT * FROM users WHERE email='$stripemail' AND pass='".md5($strippass,TRUE)."'";
        $result=mysqli_query($dbconfig,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

        if(mysqli_num_rows($result) == 1)
        {

            $result=mysqli_query($dbconfig,$sql);
            $row = $result->fetch_assoc();
            $_SESSION['sid']=session_id();
            $id = $row['id'];
            $_SESSION['globalID'] = $id;
            header("location:../index.php?id=".$id);
        }
        else
        {
            header('location:error.php');
        }
    }
?>
