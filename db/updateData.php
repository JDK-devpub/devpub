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
      	if($filesize <= 200000)
        {
        if(isset($_POST["submit"]))
        {
            //Personal Profile
            $fname = $_POST["ufname"];
            $lname = $_POST["ulname"];
            $nickname = $_POST["nickname"];
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
            $text = $_POST["text"];
            $image = $_FILES["image"] ["tmp_name"];
            $imagecontent= addslashes(file_get_contents($image));

            $sql_one = "UPDATE users
            SET fname = '$fname', lname='$lname', nickname = '$nickname', sname ='$skill', dob ='$dob', picture= '$imagecontent'
            WHERE id = '$id'";

            $sql_two = "UPDATE user_education
            SET ptitle = '$projectname', company='$companyname', college = '$collegename', last_qual='$qualification', employment_project ='$emproject', aboutme = '$text'
            WHERE id = '$id'";

            $query_one = mysqli_query($dbconfig, $sql_one);
            $query_two = mysqli_query($dbconfig, $sql_two);

            if (!$query_one){
              echo "Query One Problem";
            }
            else if (!$query_two){
              echo "Query Two Problem";
            }else{
              echo "Successful";
              }
            }
        }else{
            echo "Form Problem";
          }
        }else {
          echo "File is Too Big";
        }
      }else {
        echo "<script>
                  alert('Choose A Photo');
              </script>";
      }
    }else{
      echo "Global ID Problem";
    }
 ?>
