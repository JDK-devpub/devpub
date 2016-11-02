<?php
include ("./db/dbconfig.php");
session_start();

if(!isset($_POST['search1'])) {
  header("Location : index.php");
}

$search_text = $_POST['search1'];


//$search_sql = "SELECT * from project where project_name LIKE '%".$_POST['search1']."%' ";
$search_sql = "SELECT * from project where project_name LIKE '%$search_text%' ";
$search_query = mysqli_query($dbconfig,$search_sql);


if (mysqli_num_rows($search_query) == 0)
{
  echo "Your search has returned 0 result";
}
else {
  while ($row_search = mysqli_fetch_array($search_query)){
    echo $row_search['project_name'];
  }

}



 ?>
