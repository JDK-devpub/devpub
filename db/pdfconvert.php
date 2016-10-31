<?php
 require('./pdf/fpdf.php');
 include ("dbconfig.php");
 session_start();
if(isset($_SESSION['globalID'])) {
$id = $_SESSION['globalID'];
$profile_content = mysqli_query($dbconfig,"select * from users where id='$id'");
while ($row_result = mysqli_fetch_array($profile_content)){
  $fname = $row_result['fname'];
  $lname = $row_result['lname'];
  $email = $row_result['email'];
  $nick = $row_result['nickname'];
  $dob = $row_result['dob'];
  $country = $row_result['country'];
  $image = $row_result['picture'];
}
$profile_exp_info = mysqli_query($dbconfig,"select * from user_education where id ='$id'");
while ($row = mysqli_fetch_array($profile_exp_info)){
  $ptitle = $row['ptitle'];
  $company = $row['company'];
  $college = $row['college'];
  $last_qual = $row['last_qual'];
  $employment_project = $row['employment_project'];
  $aboutme = $row['aboutme'];
}
$skill_info = mysqli_query($dbconfig,"select * from spossessed where id ='$id'");
while ($row_skill = mysqli_fetch_array($skill_info)){
  $sk[] = $row_skill ['sname'];
  $skill=implode(",",$sk);
}
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    // Arial bold 15
    $this->SetFont('Times','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'DevPub Resume');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(10,10,'Full Name : '.$fname.' '.$lname,0,1);
$pdf->Cell(0,10,'Email : '.$email,0,1);
$pdf->Cell(0,10,'DevPub Name : '.$nick,0,1);
$pdf->Cell(0,10,'College/University : '.urldecode($college),0,1);
$pdf->Cell(0,10,'Company : '.urldecode($company),0,1);
$pdf->Cell(0,10,'Country : '.$country,0,1);
$pdf->Cell(0,10,'Date of Birth : '.$dob,0,1);
$pdf->Cell(0,10,'Degree : '.urldecode($last_qual),0,1);
$pdf->Cell(0,10,'Skills : '.urldecode($skill),0,1);
$pdf->Cell(0,10,'Projects Completed : '.urldecode($ptitle),0,1);
$pdf->Cell(0,10,'Current Project : '.$employment_project,0,1);
$pdf->MultiCell(0,10,'About Me  : 
               '.urldecode($aboutme),0,1);
$pdf->Output();
}else{
  header('location:error.php');
}

?>