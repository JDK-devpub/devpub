<?php
//Version 1.0
//Login for User
    session_start();
    include ("dbconfig.php");

    $msg = "";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $email = mysqli_real_escape_string($dbconfig, $email);
        $password = mysqli_real_escape_string($dbconfig, $password);


        $sql="SELECT id FROM register WHERE email='$email' AND pass='".md5($password,TRUE)."'";
        $result=mysqli_query($dbconfig,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        if(mysqli_num_rows($result) == 1)
        {
            $_SESSION['sid']=session_id();
            echo"<script>alert('Login Successful');</script>";
            header("location:profile.php");
        }
        else
        {
            echo"<script>alert('Login Failed');</script>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Title of the document</title>
</head>

<body>
  <form method="post">
    Email<input type ="email" name ="email"/><br>
    Password<input type ="password" name ="password"/><br>
    <input type="submit" name="submit" value="Login" />
  </form>
</body>
</html>
