<?php
include ("dbconfig.php");

//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $dbconfig->query("SELECT * FROM skill WHERE sname LIKE '%".$searchTerm."%' ORDER BY sname ASC");

while ($row = $query->fetch_assoc()) {
    $data[] = $row['sname'];
}
//return json data
echo json_encode($data);
?>
