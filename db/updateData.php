<?php
    include("dbconfig.php");
    session_start();

   $types = array("image/jpg","image/jpeg");
   $filetype=$_FILES["image"]["type"];
   $filesize=$_FILES["image"]["size"];

    if(isset($_SESSION['globalID'])){
      $id = $_SESSION['globalID'];
      if (in_array(strtolower($filetype),$types))
      {
      	if($filesize <= 2000000)
        {
        if(isset($_POST["submit"]))
        {
            //Personal Profile
            $fname = $_POST["ufname"];
            $lname = $_POST["ulname"];
            $nick = $_POST["nickname"];
            $nickname = urlencode($nick);
            $skill = $_POST["skills"];
            $dob = $_POST["dob"];
            $pname = $_POST["pname"];
            $projectname = urlencode($pname);
            $cname = $_POST["cname"];
            $companyname = urlencode($cname);
            $college = $_POST["college"];
            $collegename = urlencode($college);
            $quali= $_POST["quali"];
            $qualification = urlencode($quali);
            $eproject = $_POST["eproject"];
            $emproject = urlencode($eproject);
            $t = addslashes($_POST["text"]);
            $text = mysqli_real_escape_string($dbconfig,$t);
            $image = $_FILES["image"] ["tmp_name"];
            $imagecontent= addslashes(file_get_contents($image));

            $sql_one = "UPDATE users
            SET fname = '$fname', lname='$lname', nickname = '$nickname', dob ='$dob', picture= '$imagecontent'
            WHERE id = '$id'";

            $sql_two = "UPDATE user_education
            SET ptitle = '$projectname', company='$companyname', college = '$collegename', last_qual='$qualification', employment_project ='$emproject', aboutme = '$text'
            WHERE id = '$id'";

            //insert into spossessed
            $sql_three = "INSERT INTO spossessed
            VALUES('$id','$skill')";

            $query_one = mysqli_query($dbconfig, $sql_one);
            $query_two = mysqli_query($dbconfig, $sql_two);
            $query_three = mysqli_query($dbconfig, $sql_three);

            if (!$query_one){
              echo "Query One Problem";
            }
            else if (!$query_two){
              echo "Query Two Problem";
            }else{
              echo "Successful";
              }
        }else{
          echo "Form Issue";
        }
      }else{
        echo "File too big";
      }
    }else{
      echo "<script>
                alert('Choose Image File');
            </script>";
    }
  }else{
    echo "Session Problem";
  }
 ?>
