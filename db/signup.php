<?php
    session_start();
    include ("dbconfig.php");
    $msg = "";
    if(isset($_POST["submit"]))
    {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $conpass = $_POST["conpass"];
        $country = $_POST["country"];
        $gender = $_POST["radio"];

        if ($password != $conpass){
          echo "Password Didn't Match";
        }else{
          $password = mysqli_real_escape_string($dbconfig, $password);
          $password = md5($password,TRUE);

          $sql="SELECT email FROM users WHERE email='$email'";
          $result=mysqli_query($dbconfig,$sql);
          $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
          if(mysqli_num_rows($result) == 1)
          {
                echo "Email Exist";
          }
          else
          {
              $query = mysqli_query($dbconfig, "INSERT INTO users (fname,lname,email,pass,country,gender)VALUES ('$fname','$lname','$email','$password','$country','$gender')");
              if ($query){
                //header('location:../index.php');
                echo "Successful";
              }else{
                echo "false";
              }
          }
        }
    }
?>
