<?php
//Version 1.0
//Session check and database works
//Database INSERT
//First page
    session_start();
    include ("dbconfig.php");
    $msg = "";
    if(isset($_POST["submit"]))
    {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $type = $_POST["mode"];
        $country = $_POST["country"];
        $gender = $_POST["gender"];

        $password = mysqli_real_escape_string($dbconfig, $password);
        $password = md5($password,TRUE);

        $sql="SELECT email FROM register WHERE email='$email'";
        $result=mysqli_query($dbconfig,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        if(mysqli_num_rows($result) == 1)
        {
            echo $msg = "Email Already Exist";
        }
        else
        {
            $query = mysqli_query($dbconfig, "INSERT INTO register (fname,lname,pass,email,type,country,gender)VALUES ('$fname','$lname','$password','$email','$type','$country','$gender')");
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Registration Page</title>
</head>

<body>
  <form method="post">
    First name:<input type ="text" name ="fname" required/><br>
    Last name:<input type ="text" name ="lname" required/><br>
    Email<input type ="email" name ="email" required/><br>
    Password<input type ="password" name ="password" required id="pass"/><br>
    Confirm Password<input type ="password" name ="conpass" required id="cpass"/><br>

    <script>
    function checkpassword()
    {
      if (document.getElementById('pass') == document.getElementById('cpass'))
      {
        alert("Your password match");
      }
      else{
        alert("Your password did not match!");
      }
    }
    </script>


    Country<input type ="text" name ="country" required/><br>
    Type<input type ="text" name ="mode" required/><br>
    Gender<input type ="text" name ="gender" required/><br>
    <input type="submit" name="submit" value="Register" required />
  </form>
</body>
</html>
