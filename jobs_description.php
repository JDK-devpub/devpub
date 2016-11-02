<?php
include ("./db/dbconfig.php");
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

$employer_info = mysqli_query($dbconfig,"select * from employer");
while ($row_employer = mysqli_fetch_array($employer_info)){
  $employer_id = $row_employer['employer_id'];
  $user_id = $row_employer['id'];
  $join_date = $row_employer['join_date'];
}

//retrieve JOB_ID from jobs.php
$job_id = $_GET['id_job'];

$jobs_info = mysqli_query($dbconfig,"select * from jobs where job_id = '$job_id'");

while ($row_job = mysqli_fetch_assoc($jobs_info)){
  $employer_id = $row_job['employer_id'];
  $employee_id = $row_job['id'];
  $job_title = $row_job['job_title'];
  $job_full_content = $row_job['job_full_content'];
  $job_published_on = $row_job['job_published_on'];
  $job_category = $row_job['job_category'];
  $job_price = $row_job['job_price'];
  $job_status = $row_job['job_status'];
  $sname = $row_job['sname'];
}

//get employer name
$sql = "select e.employer_name from employer e INNER JOIN jobs j ON j.employer_id = e.employer_id WHERE j.job_id = '$job_id'";
$ee = mysqli_query($dbconfig,$sql);
while ($row_ee = mysqli_fetch_assoc($ee)){
  $employer_name = $row_ee['employer_name'];
}

}else{
  header('location:error.php');
}
?>

<!DOCTYPE <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Developer | Pub</title>

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/style.css">
  <link type="text/css" rel="stylesheet" href="7b21a426-39d2-4d48-b1b8-d1167e8de4eb.css" />
    <!-- css -->
      <link rel="stylesheet" href="css/demo.css">
        <link rel="stylesheet" href="News Css/newspage.css">

  <!-- modernizr -->

    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }


/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    margin-left: 20px;
    background-color: #f44336;
}

.Okbtn-job {
  width: 6em;
  padding: 10px 18px;
  margin-left: auto;
  margin-right : auto;
  background-color: #f44336;
}



img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 20px;
    margin-top:-30px;
}
.container-job {
    padding: 100px;
    margin-top:-30px;
}

span.psw {
    float: right;
    padding-top: 16px;
    margin-right: 20px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;

}

/* Modal Content/Box */
.modal-content {
    background-color: #37474f;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.loginbtn{
  max-width:150px;
  max-height:150px;

  background-color:#49B79E;
}
.textboxform{
  border-radius: 25px;
    border: 2px solid #49B79E;
    padding: 20px;
    width: 200px;
    height: 0.01px;
    margin-top:10px;
}
.sel1{
  margin-top:8px;
  border-radius: 25px;
  width: 246px;
  height: 40px;
  border: 2px solid #49B79E;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}


/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

    </style>
    <script src="js/modernizr.js">
    </script>
  </head>
  <body style="background-color:#D3D3D3" !important>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" src="images/android-logo.png" href="index.php">
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i name="search_query" class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field">
            </div>
          </div>
          <!-- Navigation -->
          <div class="android-navigation-container" id="navigation_class">
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="#id02" id="signup_id" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SignUp</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="#id01" id="login_id"  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="./db/dashboard.php" id="dash_id" style="display:none" >Dashboard</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="./forum/index.php">Forum</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="news.php">News</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Market</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="" id"jobs_id" style="display:block">Jobs</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="./db/logout.php" id="exit_id" style="display:none">Logout</a>
            </nav>
          </div>
          <!-- Job apply pop-up -->
          <div id="id03" class="modal">
                <form class="modal-content animate" method="post" action="./db/login.php">
                  <div class="container-job">
                    <div class="newsforms" style="float:center">
                      <div>
                        <br><br><br><br>
                          <table>
                             <tr>
                               <td align ="center"><label style="color:white"><b>Request Sent !</b></label></td>
                             </tr>
                             <tr>
                              <td align ="center"><label style="color:white"><b>The company will contact you for confirmation</b></label></td>
                             </tr>
                          </table>
                      </div>
                 </div>
                  </div>
                  <div class="container" style="background-color: #37474f;width:100%">
                    <button type="button" style="float:center" onclick="document.getElementById('id03').style.display='none'" class="Okbtn-job">Ok</button>
                  </div>
                </form>
           </div>
          <!-- Login pop up -->
          <div id="id01" class="modal">
                <form class="modal-content animate" method="post" action="./db/login.php">
                  <div class="container">
                    <div class="newsforms" style="float:center">
                      <div style="width:70%">
                        <br><br>
                          <table>
                             <tr>
                               <td style="width:30%;" ><label style="color:white"><b>Email</b></label></td>
                               <td><input class="textboxform" type="email" placeholder="Enter Email" name="lemail" required></td>
                             </tr>
                             <tr>
                               <td><label style="color:white"><b>Password</b></label></td>
                               <td><input class="textboxform" type="password" placeholder="Enter Password" name="lpassword" required></td>
                             </tr>
                          </table>
                      </div>
                    <button class="loginbtn" style="float:left;margin-left:100px" name="submit" type="submit" onclick="hideStuff('signup_id', 'login_id')">Login</button>
                 </div>
                  </div>
                  <div class="container" style="background-color: #37474f;width:70%">
                    <button type="button" style="float:left" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                  </div>
                </form>
           </div>
              <script>
              // Get the modal
              var modal = document.getElementById('id01');

              // When the user clicks anywhere outside of the modal, close it
              window.onclick = function(event) {
                  if (event.target == modal) {
                      modal.style.display = "none";
                  }
              }
              </script>

              <script>
              function hideStuff(id_signup,id_login)
              {
                  document.getElementById(id_login).style.display = 'none';
                  //hide the signup link
                  document.getElementById(id_signup).style.display = 'none';

                  //show buttons after login
                  show_logout();
              }

              function show_logout()
              {
                 document.getElementById('exit_id').style.display ='block';
                 document.getElementById('dash_id').style.display ='block';
              }

            </script>
                  <!-- Sign Up PoP Up-->
                   <div id="id02" class="modal">
                    <form class="modal-content animate" method="post" action="./db/signup.php">
                      <div class="container">
                        <div class="newsforms" style="float:center;margin-left:100px" !important>
                          <div style="width:70%">
                            <br><br>
                              <table>
                                 <tr>
                                   <td style="width:50%;color:white" ><label><b>First Name</b></label></td>
                                   <td><input class="textboxform" type="text" placeholder="Enter First Name" name="fname" required></td>
                                 </tr>
                                 <tr>
                                   <td style="width:50%;color:white" ><label><b>Last Name</b></label></td>
                                   <td><input class="textboxform" type="text" placeholder="Enter Last Name" name="lname" required></td>
                                 </tr>
                                 <tr>
                                   <td style="width:50%;color:white" ><label><b>Email</b></label></td>
                                   <td><input class="textboxform" type="email" placeholder="Enter Email" name="email" required></td>
                                 </tr>
                                 <tr>
                                   <td style="width:50%;color:white" ><label><b>Password</b></label></td>
                                   <td><input class="textboxform" type="password" placeholder="Enter Password" name="password" required></td>
                                 </tr>
                                 <tr>
                                   <td style="width:50%;color:white" ><label><b>Confirm Password</b></label></td>
                                   <td><input class="textboxform" type="password" placeholder="Enter Confirm Password" name="conpass" required></td>
                                 </tr>
                                 <tr>
                                   <td style="width:50%;color:white"><label><b>Country</b></label></td>
                                   <td>
                                     <select name="country" class="sel1" id="country" style="width:200px">
                                            <option value="0" >  Select Country</option>
                                            <option value="Afganistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bonaire">Bonaire</option>
                                            <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Canary Islands">Canary Islands</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Channel Islands">Channel Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Island">Cocos Island</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote DIvoire">Cote D'Ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curaco">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Ter">French Southern Ter</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Great Britain">Great Britain</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea North">Korea North</option>
                                            <option value="Korea Sout">Korea South</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Midway Islands">Midway Islands</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Nambia">Nambia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                            <option value="Nevis">Nevis</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau Island">Palau Island</option>
                                            <option value="Palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Phillipines">Philippines</option>
                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="St Barthelemy">St Barthelemy</option>
                                            <option value="St Eustatius">St Eustatius</option>
                                            <option value="St Helena">St Helena</option>
                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                            <option value="St Lucia">St Lucia</option>
                                            <option value="St Maarten">St Maarten</option>
                                            <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                            <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                            <option value="Saipan">Saipan</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="Samoa American">Samoa American</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Tahiti">Tahiti</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Uraguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City State">Vatican City State</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                            <option value="Wake Island">Wake Island</option>
                                            <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                   </td>
                                 </tr>
                                 <tr style="margin-top:8px;">
                                   <td style="width:50%;color:white" ><label><b>Gender</b></label></td>
                                   <td style="color:white">
                                     <input type="radio" name="radio" value="male"> Male<br>
                                     <input type="radio" name="radio" value="female"> Female<br>
                                   </td>
                                 </tr>
                              </table>
                              <br>
                          </div>
                            <button id="signupjs"  style="float:left;margin-left:210px"name ="submit" class="loginbtn" type="submit" !important>Sign Up</button>
                        </div>
                      </div>
                      <div class="container" style="background-color: #37474f;width:70%">
                        <button type="button"  onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                    </div>
                    </form>
               </div>
                  <script>
                  // Get the modal
                  var modal = document.getElementById('id02');

                  // When the user clicks anywhere outside of the modal, close it
                  window.onclick = function(event) {
                      if (event.target == modal) {
                          modal.style.display = "none";
                      }
                  }
                  </script>

                    </div>
                  </div>

      <div class="android-content mdl-layout__content">
        <a name="top"></a>


        <body>


<style type="text/css">
 .masthead { background-image: url('/_resx/imageresource/6c98c906792f1577bfc0d18c556bf5096fdfeb00-4-32-0-0-0'); height: 150px; }
 @media only screen and (max-width: 640px) {
     .masthead { background-image: url('/_resx/imageresource/6f21f2162c3d4d51455ff500ec6d84bfcfdb5cc8-4-32-5000-140-0'); height: 140px; }
 }
</style>


      <ul class="skip-links">
    <li class="clearfix"><a href="#main-navigation" id="skip-to-navigation">Skip to main navigation</a></li>
    <li class="clearfix"><a href="#content-start">Skip to main content</a></li>
  </ul>


<style type="text/css">
.masthead { background-image: url('/_resx/imageresource/6c98c906792f1577bfc0d18c556bf5096fdfeb00-4-32-0-0-0'); height: 150px; }
@media only screen and (max-width: 640px) {
 .masthead { background-image: url('/_resx/imageresource/6f21f2162c3d4d51455ff500ec6d84bfcfdb5cc8-4-32-5000-140-0'); height: 140px; }
}
</style>

      <div class="main" id="main">

          <div class="internal-cols-aside-right clearfix">
              <div>

                  <div class="main-content" id="content-start">



<div class="content vacancy-detail" itemscope itemtype="http://schema.org/JobPosting">

  <h1 itemprop="title"><?php echo $job_title ?></h1>

  <meta itemprop="url" content="http://www.itjobdepot.com/jobs/net-developer-with-mvc-wcf-hibernate-speaking-french-or-dutch-brussel/20294281-2/" />



<!-- please leave table -->
<ul>
  <table style="width: 345px;">
  <tbody>
  <tr>
  <td style="width: 500px;">Company name : </td>
  <td><?php echo $employer_name ?></td>

  </tr>
  <tr>
  <td style="width: 500px;">Date Posted :</td>
    <td><?php echo $job_published_on ?></td>
  </tr>
  <tr>
  <td style="width: 500px;">Job Category :</td>
    <td><?php echo $job_category ?></td>
  </tr>
  <tr>
  <td style="width: 500px;">Job Status :</td>
    <td><?php echo $job_status ?></td>
  </tr>
  <tr>
    <td style="width: 500px;">Job Price :</td>
      <td><?php echo $job_price ." RM"?></td>
  </tr>
  <tr>
    <td style="width: 500px;">Job Price :</td>
      <td><?php echo $sname?></td>
  </tr>
  </tbody>
  </table>


</ul>

  <div class="vacancy-apply-floating">


<!-- ???      <a id="uxMainContent_uxApplyFloating" rel="nofollow" href="/jobs/apply/?id=20294281-2">Apply for this job now<i class="fa fa-chevron-right"></i></a> -->

</div>

  <div class="description clearfix">
      <h2>Job Description</h2>
      <div itemprop="description">
        <?php echo $job_full_content ?>
      </div>

  </div>

</div>

                  </div>


                  <div class="aside vacancy-aside">
<div>

  <a id="uxAsideContent_uxApply" class="vacancy-apply" onclick="document.getElementById('id03').style.display='block'" rel="nofollow" href="#id03">Apply for this job now<i class="fa fa-chevron-right"></i></a>

  <div id="uxAsideContent_uxShareThisVacancy" class="share-this-vacancy">

      <span>Share this job</span>
      <ul>
          <li class="email"><a id="uxAsideContent_uxShareThisJobEmailLink" rel="nofollow" href="mailto:?subject=.Net developer with MVC, WCF, Hibernate speaking French or Dutch, Brussel&amp;body=http%3a%2f%2fwww.itjobdepot.com%2fjobs%2fnet-developer-with-mvc-wcf-hibernate-speaking-french-or-dutch-brussel%2f20294281-2%2f"><i class="fa fa-envelope-o"></i>Email</a></li>
          <li class="facebook"><a id="uxAsideContent_uxShareThisJobFacebookLink" data-popup-width="600" data-popup-height="300" rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=http%3a%2f%2fwww.itjobdepot.com%2fjobs%2fnet-developer-with-mvc-wcf-hibernate-speaking-french-or-dutch-brussel%2f20294281-2%2f" target="_blank"><i class="fa fa-facebook-square"></i>Facebook</a></li>
          <li class="twitter"><a id="uxAsideContent_uxShareThisJobTwitterLink" data-popup-width="600" data-popup-height="420" rel="nofollow" href="https://twitter.com/home?status=http%3a%2f%2fwww.itjobdepot.com%2fjobs%2fnet-developer-with-mvc-wcf-hibernate-speaking-french-or-dutch-brussel%2f20294281-2%2f" target="_blank"><i class="fa fa-twitter-square"></i>Twitter</a></li>
          <li class="linkedin"><a id="uxAsideContent_uxShareThisJobLinkedInLink" data-popup-width="800" data-popup-height="500" rel="nofollow" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http%3a%2f%2fwww.itjobdepot.com%2fjobs%2fnet-developer-with-mvc-wcf-hibernate-speaking-french-or-dutch-brussel%2f20294281-2%2f&amp;title=.Net+developer+with+MVC%2c+WCF%2c+Hibernate+speaking+French+or+Dutch%2c+Brussel&amp;summary=Job+title%3a+.NET+developer+with+MVC%2c+WCF%2c+Hibernate+speaking+French+or+DutchLocation%3a+Brussels%2c+BelgiumKey+skills%3a+.Net%2c+developer%2c+MVC%2c+WCF%2c+Hibernate%2c+outsystems%2c+JavaScript%2c+unit+testing%2c+French%2c+DutchOur+client+is+urgently+searching+for+a+strong+Net...&amp;source=www.itjobdepot.com" target="_blank"><i class="fa fa-linkedin-square"></i>LinkedIn</a></li>
          <li class="google-plus"><a id="uxAsideContent_uxShareThisJobGooglePlusLink" data-popup-width="600" data-popup-height="560" rel="nofollow" href="https://plus.google.com/share?url=http%3a%2f%2fwww.itjobdepot.com%2fjobs%2fnet-developer-with-mvc-wcf-hibernate-speaking-french-or-dutch-brussel%2f20294281-2%2f" target="_blank"><i class="fa fa-google-plus-square"></i>Google+</a></li>
      </ul>

</div>

  <ul class="vacancy-actions">
      <li class="shortlist">
          <a class="remove hide" rel="nofollow" href="/jobs/shortlist/?remove=20294281&amp;type=2" onclick="ajaxVacancyShortlist(this.href,20294281,-1);return false;" name="shortlistlink_remove_20294281"><i class="fa fa-times-circle-o"></i>Remove from your shortlist</a><a class="add" rel="nofollow" href="/jobs/shortlist/?add=20294281&amp;type=2" onclick="ajaxVacancyShortlist(this.href,20294281,1);return false;" name="shortlistlink_add_20294281"><i class="fa fa-check-circle-o"></i>Add to your shortlist</a>
      </li>
      <li class="more-vacancies"><a id="uxAsideContent_uxSimilarJobsLink" rel="nofollow" href="/jobs/jobs-like-.net-developer-with-mvc-wcf-hibernate-speaking-french-or-dutch-brussel/sv-20294281_2/"><i class="fa fa-plus-circle"></i>More jobs like this</a></li>
      <li id="uxAsideContent_uxAlertLinkArea" class="email"><a id="uxAsideContent_uxAlertLink" href="/jobs/alert/?params=CompanyName%3dAardvark%2bConsulting"><i class="fa fa-envelope-o"></i>Email me jobs like this</a></li>
      <li id="uxAsideContent_uxRSSLinkArea" class="rss"><a id="uxAsideContent_uxRSSLink" href="/jobs/rss/?params=CompanyName%3dAardvark%2bConsulting"><i class="fa fa-rss-square"></i>Jobs like this by RSS</a></li>
      <li class="print"><a><i class="fa fa-print"></i>Print this page</a></a></li>
      <li class="back"><a id="uxAsideContent_uxBackLink" href="/jobs/aardvark-consulting-jobs/em-Aardvark-Consulting/#v20294281-2"><i class="fa fa-chevron-circle-left"></i>Back to Search Results</a></li>
  </ul>

</div>





                  </div>

              </div>
          </div>

      </div>



      <div class="site-navigation-visible-mask"><!-- --></div>

      <script type="text/javascript" src="/_resx/templates/00015/js/jquery-1.11.0.min.js"></script>
      <script type="text/javascript" src="/_resx/templates/00015/js/plugins.min.js"></script>
      <script type="text/javascript" src="/_resx/templates/00015/js/base.js"></script>
      <script type="text/javascript" src="/_resx/templates/00015/js/build.js"></script>

      <script type="text/javascript">
      //<![CDATA[
          BuildJS("VacancyDetail");
      //]]>
      </script>



<script type="text/javascript">
//<![CDATA[
$.get("/vacancyviewincrementer.ashx", {vacancyid:'20294281', jobsource:'2', recruiterid:'0'});VacancyShortlistSummary.register("ctl09_ctl09", "You have no jobs in your shortlist", "You have \u005B\u005Bcount\u005D\u005D job in your shortlist", "You have \u005B\u005Bcount\u005D\u005D jobs in your shortlist", "ctl09_ctl03");
$('#ctl09_ctl03').hide();
VacancyShortlistSummary.register("ctl09_ctl10", "Shortlist (\u005B\u005Bcount\u005D\u005D)", "Shortlist (\u005B\u005Bcount\u005D\u005D)", "Shortlist (\u005B\u005Bcount\u005D\u005D)", "");
//]]>
</script>
</form>






  </body>





        <footer class="android-footer mdl-mega-footer" style="float:bottom" !important>
          <div class="mdl-mega-footer--top-section">
            <div class="text-center center-block">
                <div class="component">
                <a href="#" class="icon icon-cube facebook">facebook</a>
                <a href="#" class="icon icon-cube twitter">twitter</a>
                <a href="#" class="icon icon-cube googleplus">google+</a>
                <a href="#" class="icon icon-cube github">github</a>
                <a href="#" class="icon icon-cube rss">rss</a>
               </div>
               </div>
            <div class="mdl-mega-footer--right-section">
              <a class="mdl-typography--font-light" href="#top">
                Back to Top
                <i class="material-icons">expand_less</i>
              </a>
            </div>
          </div>

          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light" color="white" !important>DevPub Orgnaization Malaysia: © 2014 DevPub, Malaysia</p>
            <p class="mdl-typography--font-light" color="white" !important>All Content as Patent Rights and Cannot be Published on Other Wesbites</p>
          </div>

          <div class="mdl-mega-footer--bottom-section">
            <a class="android-link mdl-typography--font-light" href="" color="white" >contact Us</a>
            <a class="android-link mdl-typography--font-light" href="" color="white" >Privacy Policy</a>
          </div>

        </footer>
      </div>
    </div>
    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
</body>
</html>

</html>
<?php
  error_reporting(0);
  session_start();
  include("./db/dbconfig.php");
  if($_SESSION['sid']==session_id())
		{
			    echo "<script>
              hideStuff('signup_id', 'login_id');
          </script>";
		}
?>
