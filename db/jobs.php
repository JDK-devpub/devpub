<?php
include ("dbconfig.php");
session_start();
if(isset($_SESSION['globalID'])) {
$id = $_SESSION['globalID'];
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
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../css/style.css">
  <link type="text/css" rel="stylesheet" href="7b21a426-39d2-4d48-b1b8-d1167e8de4eb.css" />
    <!-- css -->
      <link rel="stylesheet" href="../css/demo.css">
        <link rel="stylesheet" href="./News Css/newspage.css">

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



img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
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
    <script src="../js/modernizr.js">
    </script>
  </head>
  <body style="background-color:#D3D3D3" !important>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" src="../images/android-logo.png" href="../index.php">
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
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="dashboard.php" id="dash_id" style="display:none" >Dashboard</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Forum</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="news.php">News</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Market</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="" id"jobs_id" style="display:block">Jobs</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="logout.php" id="exit_id" style="display:none">Logout</a>
            </nav>
          </div>
          <!-- Login pop up -->
          <div id="id01" class="modal">
                <form class="modal-content animate" method="post" action="login.php">
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
                    <form class="modal-content animate" method="post" action="signup.php">
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

  <form method="post" action="./" onsubmit="javascript:return WebForm_OnSubmit();" id="uxForm" novalidate="">

<div class="breadcrumbs">
  <div>
      <a href="/">Home</a> &gt;
Dev Pub jobs

  </div>
</div>
          <div class="main" id="main">

              <div class="vacancy-listing-cols clearfix">
                  <div>

                      <div class="content title">

  <h1>Dev Pub jobs</h1>

                      </div>

                      <div class="cols">
                          <div>

                              <div class="aside aside-left">


  <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$uxAsideContent$ctl00', 'uxForm', ['tctl00$uxAsideContent$ctl01$ctl00$uxAsideContent$ctl01$uxLocationPanel','','tctl00$uxAsideContent$ctl01$ctl01SU','uxAsideContent_ctl01_ctl01SU'], ['ctl00$uxAsideContent$ctl01$uxCountryID','uxAsideContent_ctl01_uxCountryID'], [], 90, 'ctl00');
//]]>
</script>

<div class="form placeholder-labels quick-search refine" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;uxAsideContent_ctl01_uxSearchButton&#39;)">

  <div>
    <fieldset>
          <legend><span>Refine Search</span></legend>

          <div id="uxAsideContent_ctl01_ctl03" class="inline-error-message" style="display:none;">

</div>

          <div class="fields">

          <div class="field text-field">
            <label for="uxAsideContent_ctl01_uxKeywordsDesireable">Keywords</label>
            <span id="uxAsideContent_ctl01_ctl06" style="display:none;"></span>
            <div><input name="ctl00$uxAsideContent$ctl01$uxKeywordsDesireable" type="search" maxlength="100" id="uxAsideContent_ctl01_uxKeywordsDesireable" title="Keywords" placeholder="Keywords" /></div>
          </div>
          <div id="uxAsideContent_ctl01_rowCountry" class="field text-field">
            <label for="uxAsideContent_ctl01_uxCountryID">Country</label>
            <div><select name="ctl00$uxAsideContent$ctl01$uxCountryID" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$uxAsideContent$ctl01$uxCountryID\&#39;,\&#39;\&#39;)&#39;, 0)" id="uxAsideContent_ctl01_uxCountryID">
  <option value="1">Aaland Islands</option>
  <option value="2">Afghanistan</option>
  <option value="3">Albania</option>
  <option value="4">Algeria</option>
  <option value="5">American Samoa</option>
  <option value="6">Andorra</option>
  <option value="7">Angola</option>
  <option value="8">Anguilla</option>
  <option value="9">Antarctica</option>
  <option value="10">Antigua and Barbuda</option>
  <option value="11">Argentina</option>
  <option value="12">Armenia</option>
  <option value="13">Aruba</option>
  <option value="14">Australia</option>
  <option value="15">Austria</option>
  <option value="16">Azerbaijan</option>
  <option value="17">Bahamas</option>
  <option value="18">Bahrain</option>
  <option value="19">Bangladesh</option>
  <option value="20">Barbados</option>
  <option value="21">Belarus</option>
  <option value="22">Belgium</option>
  <option value="23">Belize</option>
  <option value="24">Benin</option>
  <option value="25">Bermuda</option>
  <option value="26">Bhutan</option>
  <option value="27">Bolivia</option>
  <option value="28">Bosnia and Herzegowina</option>
  <option value="29">Botswana</option>
  <option value="30">Bouvet Island</option>
  <option value="31">Brazil</option>
  <option value="32">British Indian Ocean Territory</option>
  <option value="33">Brunei Darussalam</option>
  <option value="34">Bulgaria</option>
  <option value="35">Burkina Faso</option>
  <option value="36">Burundi</option>
  <option value="37">Cambodia</option>
  <option value="38">Cameroon</option>
  <option value="39">Canada</option>
  <option value="40">Cape Verde</option>
  <option value="41">Cayman Islands</option>
  <option value="42">Central African Republic</option>
  <option value="43">Chad</option>
  <option value="44">Chile</option>
  <option value="45">China</option>
  <option value="46">Christmas Island</option>
  <option value="47">Cocos (Keeling) Islands</option>
  <option value="48">Colombia</option>
  <option value="49">Comoros</option>
  <option value="50">Congo, Democratic Republic of (was Zaire)</option>
  <option value="51">Congo, Republic of</option>
  <option value="52">Cook Islands</option>
  <option value="53">Costa Rica</option>
  <option value="54">Cote d Ivoire</option>
  <option value="55">Croatia (local name: Hrvatska)</option>
  <option value="56">Cuba</option>
  <option value="57">Cyprus</option>
  <option value="58">Czech Republic</option>
  <option value="59">Denmark</option>
  <option value="60">Djibouti</option>
  <option value="61">Dominica</option>
  <option value="62">Dominican Republic</option>
  <option value="63">Ecuador</option>
  <option value="64">Egypt</option>
  <option value="65">El Salvador</option>
  <option value="66">Equatorial Guinea</option>
  <option value="67">Eritrea</option>
  <option value="68">Estonia</option>
  <option value="69">Ethiopia</option>
  <option value="70">Falkland Islands (Malvinas)</option>
  <option value="71">Faroe Islands</option>
  <option value="72">Fiji</option>
  <option value="73">Finland</option>
  <option value="74">France</option>
  <option value="75">French Guiana</option>
  <option value="76">French Polynesia</option>
  <option value="77">French Southern Territories</option>
  <option value="78">Gabon</option>
  <option value="79">Gambia</option>
  <option value="80">Georgia</option>
  <option value="81">Germany</option>
  <option value="82">Ghana</option>
  <option value="83">Gibraltar</option>
  <option value="84">Greece</option>
  <option value="85">Greenland</option>
  <option value="86">Grenada</option>
  <option value="87">Guadeloupe</option>
  <option value="88">Guam</option>
  <option value="89">Guatemala</option>
  <option value="90">Guinea</option>
  <option value="91">Guinea-Bissau</option>
  <option value="92">Guyana</option>
  <option value="93">Haiti</option>
  <option value="94">Heard and McDonald Islands</option>
  <option value="95">Honduras</option>
  <option value="96">Hong Kong</option>
  <option value="97">Hungary</option>
  <option value="98">Iceland</option>
  <option value="99">India</option>
  <option value="100">Indonesia</option>
  <option value="101">Iran (Islamic Republic of)</option>
  <option value="102">Iraq</option>
  <option value="103">Ireland</option>
  <option value="104">Israel</option>
  <option value="105">Italy</option>
  <option value="106">Jamaica</option>
  <option value="107">Japan</option>
  <option value="108">Jordan</option>
  <option value="109">Kazakhstan</option>
  <option value="110">Kenya</option>
  <option value="111">Kiribati</option>
  <option value="112">Korea, Democratic Peoples Republic of</option>
  <option value="113">Korea, Republic of</option>
  <option value="114">Kuwait</option>
  <option value="115">Kyrgyzstan</option>
  <option value="116">Lao Peoples Democratic Republic</option>
  <option value="117">Latvia</option>
  <option value="118">Lebanon</option>
  <option value="119">Lesotho</option>
  <option value="120">Liberia</option>
  <option value="121">Libyan Arab Jamahiriya</option>
  <option value="122">Liechtenstein</option>
  <option value="123">Lithuania</option>
  <option value="124">Luxembourg</option>
  <option value="125">Macau</option>
  <option value="126">Macedonia, the former Yugoslav Republic of</option>
  <option value="127">Madagascar</option>
  <option value="128">Malawi</option>
  <option selected="selected" value="129">Malaysia</option>
  <option value="130">Maldives</option>
  <option value="131">Mali</option>
  <option value="132">Malta</option>
  <option value="133">Marshall islands</option>
  <option value="134">Martinique</option>
  <option value="135">Mauritania</option>
  <option value="136">Mauritius</option>
  <option value="137">Mayotte</option>
  <option value="138">Mexico</option>
  <option value="139">Micronesia, Federated States of</option>
  <option value="140">Moldova, Republic of</option>
  <option value="141">Monaco</option>
  <option value="142">Mongolia</option>
  <option value="143">Montserrat</option>
  <option value="144">Morocco</option>
  <option value="145">Mozambique</option>
  <option value="146">Myanmar</option>
  <option value="147">Namibia</option>
  <option value="148">Nauru</option>
  <option value="149">Nepal</option>
  <option value="150">Netherlands</option>
  <option value="151">Netherlands Antilles</option>
  <option value="152">New Caledonia</option>
  <option value="153">New Zealand</option>
  <option value="154">Nicaragua</option>
  <option value="155">Niger</option>
  <option value="156">Nigeria</option>
  <option value="157">Niue</option>
  <option value="158">Norfolk Island</option>
  <option value="159">Northern Mariana Islands</option>
  <option value="160">Norway</option>
  <option value="161">Oman</option>
  <option value="162">Pakistan</option>
  <option value="163">Palau</option>
  <option value="164">Palestinian Territory, occupied</option>
  <option value="165">Panama</option>
  <option value="166">Papua New Guinea</option>
  <option value="167">Paraguay</option>
  <option value="168">Peru</option>
  <option value="169">Philippines</option>
  <option value="170">Pitcairn</option>
  <option value="171">Poland</option>
  <option value="172">Portugal</option>
  <option value="173">Puerto Rico</option>
  <option value="174">Qatar</option>
  <option value="175">Reunion</option>
  <option value="176">Romania</option>
  <option value="177">Russian Federation</option>
  <option value="178">Rwanda</option>
  <option value="179">Saint Helena</option>
  <option value="180">Saint Kitts and Nevis</option>
  <option value="181">Saint Lucia</option>
  <option value="182">Saint Pierre and Miquelon</option>
  <option value="183">Saint Vincent and the Grenadines</option>
  <option value="184">Samoa</option>
  <option value="185">San Marino</option>
  <option value="186">Sao Tome and Principe</option>
  <option value="187">Saudi Arabia</option>
  <option value="188">Senegal</option>
  <option value="189">Serbia and Montenegro</option>
  <option value="190">Seychelles</option>
  <option value="191">Sierra Leone</option>
  <option value="192">Singapore</option>
  <option value="193">Slovakia</option>
  <option value="194">Slovenia</option>
  <option value="195">Solomon Islands</option>
  <option value="196">Somalia</option>
  <option value="197">South Africa</option>
  <option value="198">South Georgia and the South Sandwich Iss</option>
  <option value="199">Spain</option>
  <option value="200">Sri Lanka</option>
  <option value="201">Sudan</option>
  <option value="202">Suriname</option>
  <option value="203">Svalbard and Jan Mayen Islands</option>
  <option value="204">Swaziland</option>
  <option value="205">Sweden</option>
  <option value="206">Switzerland</option>
  <option value="207">Syrian Arab Republic</option>
  <option value="208">Taiwan</option>
  <option value="209">Tajikistan</option>
  <option value="210">Tanzania, United Republic of</option>
  <option value="211">Thailand</option>
  <option value="212">Timor-leste</option>
  <option value="213">Togo</option>
  <option value="214">Tokelau</option>
  <option value="215">Tonga</option>
  <option value="216">Trinidad and Tobago</option>
  <option value="217">Tunisia</option>
  <option value="218">Turkey</option>
  <option value="219">Turkmenistan</option>
  <option value="220">Turks and Caicos Islands</option>
  <option value="221">Tuvalu</option>
  <option value="222">Uganda</option>
  <option value="223">Ukraine</option>
  <option value="224">United Arab Emirates</option>
  <option value="225">United Kingdom</option>
  <option value="226">United States</option>
  <option value="227">United States Minor Outlying Islands</option>
  <option value="228">Uruguay</option>
  <option value="229">Uzbekistan</option>
  <option value="230">Vanuatu</option>
  <option value="231">Vatican City State (Holy see)</option>
  <option value="232">Venezuela</option>
  <option value="233">Vietnam</option>
  <option value="234">Virgin Islands (British)</option>
  <option value="235">Virgin Islands (U.S.)</option>
  <option value="236">Wallis and Futuna Islands</option>
  <option value="237">Western Sahara</option>
  <option value="238">Yemen</option>
  <option value="239">Zambia</option>
  <option value="240">Zimbabwe</option>

</select></div>

          <!-- LEFT SIDE      -->
          </div>
              <div id="uxAsideContent_ctl01_rowSector" class="field multiple-select-field items-1">
                  <label for="uxAsideContent_ctl01_uxSectorID">Sector</label>
                  <div><div class="hierarchical-checkbox-list-flat">
  <ul id="uxAsideContent_ctl01_uxSectorID">

    <li><input type="checkbox" id="uxAsideContent_ctl01_uxSectorID_16" name="ctl00$uxAsideContent$ctl01$uxSectorID" value="16" /><label for="uxAsideContent_ctl01_uxSectorID_16">I.T. &amp; Communications</label></li>

  </ul>
</div></div>
              </div>
              <div id="uxAsideContent_ctl01_rowJobType" class="field multiple-select-field items-3">
                  <label for="uxAsideContent_ctl01_uxJobTypeID">Job Type</label>
                  <div><ul id="uxAsideContent_ctl01_uxJobTypeID">
  <li><input id="uxAsideContent_ctl01_uxJobTypeID_0" type="checkbox" name="ctl00$uxAsideContent$ctl01$uxJobTypeID$0" value="3" /><label for="uxAsideContent_ctl01_uxJobTypeID_0">Permanent</label></li>
  <li><input id="uxAsideContent_ctl01_uxJobTypeID_1" type="checkbox" name="ctl00$uxAsideContent$ctl01$uxJobTypeID$1" value="4" /><label for="uxAsideContent_ctl01_uxJobTypeID_1">Temporary</label></li>
  <li><input id="uxAsideContent_ctl01_uxJobTypeID_2" type="checkbox" name="ctl00$uxAsideContent$ctl01$uxJobTypeID$2" value="2" /><label for="uxAsideContent_ctl01_uxJobTypeID_2">Contract</label></li>

</ul></div>
              </div>
          <div class="field salary-field clearfix">
                  <span class="label">Salary</span>
                  <div class="clearfix">
                      <div class="field text-field from">
                <label for="uxAsideContent_ctl01_uxSalaryFrom">From</label>
                          <div><input name="ctl00$uxAsideContent$ctl01$uxSalaryFrom" type="number" value="From" id="uxAsideContent_ctl01_uxSalaryFrom" title="From" placeholder="From" onfocus="if(this.value==&#39;From&#39;)value=&#39;&#39;;" onblur="if(this.value==&#39;&#39;)value=&#39;From&#39;;" /></div>
                      </div>
                      <div class="field text-field to">
                <label for="uxAsideContent_ctl01_uxSalaryTo">To</label>
                          <div><input name="ctl00$uxAsideContent$ctl01$uxSalaryTo" type="number" value="To" id="uxAsideContent_ctl01_uxSalaryTo" title="To" placeholder="To" onfocus="if(this.value==&#39;To&#39;)value=&#39;&#39;;" onblur="if(this.value==&#39;&#39;)value=&#39;To&#39;;" /></div>
                      </div>
                  </div>
          </div>
          <div class="buttons">
            <button type="submit" name="ctl00$uxAsideContent$ctl01$uxSearchButton" value="ctl00$uxAsideContent$ctl01$uxSearchButton" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$uxAsideContent$ctl01$uxSearchButton&quot;, &quot;&quot;, true, &quot;VacancySearchRefineBanner&quot;, &quot;&quot;, false, false))" id="uxAsideContent_ctl01_uxSearchButton" class="submit"><i class="fa fa-search"></i>Refine</button>
                  <input type="hidden" name="ctl00$uxAsideContent$ctl01$uxSimilarToVacancyID" id="uxAsideContent_ctl01_uxSimilarToVacancyID" />
          </div>
              <div class="advanced">
            <a id="uxAsideContent_ctl01_uxAdvancedSearchLink" href="/jobs/?params=companyname%3daardvark%2bconsulting#search">Advanced Search</a>
              </div>
          </div>
    </fieldset>
  </div>

</div>
<!-- 2014.2.724.45 --><div id="uxAsideContent_ctl01_ctl01SU">
<span id="ctl00_uxAsideContent_ctl01_ctl01" style="display:none;"></span>
</div>
                              </div>
                              <div class="main-content" id="content-start">
  <div id="uxMainContent_uxVacancyListingArea" class="vacancy-listing">
      <div class="clearfix">

          <div class="results-count-and-jobs-like-these-links clearfix">
              <p class="results-count">Your search returned <strong>1</strong> result</p>
              <div class="jobs-like-these-links">
                  Receive jobs like these by:
                  <a id="uxMainContent_uxAlertLink" rel="nofollow" href="/jobs/alert/?params=CompanyName%3dAardvark%2bConsulting">Email</a>
            <a id="uxMainContent_uxRSSLink" rel="nofollow" href="/jobs/rss/?params=CompanyName%3dAardvark%2bConsulting">RSS</a>
              </div>
          </div>

          <div class="order-by-and-page-size clearfix">
              <div class="results-range">Results <strong>1</strong> to <strong>1</strong></div>
              <div class="order-by">
                  <label for="uxMainContent_uxDisplayOrder">Order list by:</label>
                  <select name="ctl00$uxMainContent$uxDisplayOrder" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$uxMainContent$uxDisplayOrder\&#39;,\&#39;\&#39;)&#39;, 0)" id="uxMainContent_uxDisplayOrder">
  <option selected="selected" value="1">Relevance</option>
  <option value="2">Date Posted</option>
  <option value="3">Distance</option>
  <option value="4">Salary</option>

</select>
              </div>
              <div class="page-size">
                  <label for="uxMainContent_uxDisplayOrder">Results per page:</label>
                  <select name="ctl00$uxMainContent$uxPageSize" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$uxMainContent$uxPageSize\&#39;,\&#39;\&#39;)&#39;, 0)" id="uxMainContent_uxPageSize">
  <option selected="selected" value="10">10</option>
  <option value="25">25</option>
  <option value="50">50</option>
  <option value="100">100</option>

</select>
              </div>
              <noscript>
                  <input type="submit" name="ctl00$uxMainContent$ctl03" value="Refresh" />
              </noscript>
          </div>

      </div>


      <ol id="uxMainContent_uxResultsOL" class="vacancy-listing single-page">

<?php

$sql = ("select * from jobs");
$job_info = mysqli_query($dbconfig,$sql);

if(!$job_info)
{
    echo 'The categories could not be displayed, please try again later.';
    echo 'Error : ' . mysql_error();
}
while ($row_job = mysqli_fetch_assoc($job_info)){
  $job_id = $row_job['job_id'];
  $employer_id = $row_job['employer_id'];
  $employee_id = $row_job['id'];
  $job_title = $row_job['job_title'];
  $job_full_content = $row_job['job_full_content'];
  $job_published_on = $row_job['job_published_on'];
  $job_category = $row_job['job_category'];
  $job_price = $row_job['job_price'];
  $job_status = $row_job['job_status'];
  $sname = $row_job['sname'];

  $job_id_array = array($job_id);

  echo ' <li id="v19777557-2">';
  echo '  <div class="heading">';
  echo  '  <h2> ';
  echo $job_title;
  echo '</h2>';
  echo '        </div>';
  echo '    <h4 style="padding:right:40px">';
  echo $job_full_content;
  echo '</h4> <br/>';

  echo '    <div class="links clearfix">';
  echo '        <h4>';
  echo 'Posted by : ';
  echo $employer_id . " | " . $job_published_on . " | " . $job_category;
  echo '</h4> ';
  /*echo '          <a id="uxMainContent_uxResults_uxViewLink_0" class="view" name="job_name" role="button" href="./jobs_description.php?id_job=<?php echo $job_id ?>" >View and Apply</a>;';*/
  echo '          <a id="uxMainContent_uxResults_uxViewLink_0" class="view" name="job_name" role="button" href="./jobs_description.php?id_job='.$job_id. '"  >View and Apply</a>;';
  echo '      </div>';
  echo '     </li>';

//$a++;

}
?>

</div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div id="ctl11_ctl00_uxSearch" class="form placeholder-labels quick-search medium-no-quick-search" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl11_ctl00_uxSearchButton&#39;)">

  <div id="job-search">
      <fieldset>
          <legend>Quick Job Search</legend>
          <div class="clearfix">
              <div id="ctl11_ctl00_ctl01" class="inline-error-message" style="display:none;">

</div>
              <div class="fields clearfix">
                  <div class="field text-field keywords">
                      <label for="ctl11_ctl00_uxKeywords">Keywords</label>
                      <div><input name="ctl00$ctl11$ctl00$uxKeywords" type="search" id="ctl11_ctl00_uxKeywords" title="Keywords" placeholder="Keywords" /></div>
                      <span id="ctl11_ctl00_ctl03" style="display:none;"></span>
                  </div>
                  <div class="field text-field sector">
                      <label for="ctl11_ctl00_uxCountryID">Country</label>
                      <div><select name="ctl00$ctl11$ctl00$uxCountryID" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ctl11$ctl00$uxCountryID\&#39;,\&#39;\&#39;)&#39;, 0)" id="ctl11_ctl00_uxCountryID" class="text">
  <option value="1">Aaland Islands</option>
  <option value="2">Afghanistan</option>
  <option value="3">Albania</option>
  <option value="4">Algeria</option>
  <option value="5">American Samoa</option>
  <option value="6">Andorra</option>
  <option value="7">Angola</option>
  <option value="8">Anguilla</option>
  <option value="9">Antarctica</option>
  <option value="10">Antigua and Barbuda</option>
  <option value="11">Argentina</option>
  <option value="12">Armenia</option>
  <option value="13">Aruba</option>
  <option value="14">Australia</option>
  <option value="15">Austria</option>
  <option value="16">Azerbaijan</option>
  <option value="17">Bahamas</option>
  <option value="18">Bahrain</option>
  <option value="19">Bangladesh</option>
  <option value="20">Barbados</option>
  <option value="21">Belarus</option>
  <option value="22">Belgium</option>
  <option value="23">Belize</option>
  <option value="24">Benin</option>
  <option value="25">Bermuda</option>
  <option value="26">Bhutan</option>
  <option value="27">Bolivia</option>
  <option value="28">Bosnia and Herzegowina</option>
  <option value="29">Botswana</option>
  <option value="30">Bouvet Island</option>
  <option value="31">Brazil</option>
  <option value="32">British Indian Ocean Territory</option>
  <option value="33">Brunei Darussalam</option>
  <option value="34">Bulgaria</option>
  <option value="35">Burkina Faso</option>
  <option value="36">Burundi</option>
  <option value="37">Cambodia</option>
  <option value="38">Cameroon</option>
  <option value="39">Canada</option>
  <option value="40">Cape Verde</option>
  <option value="41">Cayman Islands</option>
  <option value="42">Central African Republic</option>
  <option value="43">Chad</option>
  <option value="44">Chile</option>
  <option value="45">China</option>
  <option value="46">Christmas Island</option>
  <option value="47">Cocos (Keeling) Islands</option>
  <option value="48">Colombia</option>
  <option value="49">Comoros</option>
  <option value="50">Congo, Democratic Republic of (was Zaire)</option>
  <option value="51">Congo, Republic of</option>
  <option value="52">Cook Islands</option>
  <option value="53">Costa Rica</option>
  <option value="54">Cote d Ivoire</option>
  <option value="55">Croatia (local name: Hrvatska)</option>
  <option value="56">Cuba</option>
  <option value="57">Cyprus</option>
  <option value="58">Czech Republic</option>
  <option value="59">Denmark</option>
  <option value="60">Djibouti</option>
  <option value="61">Dominica</option>
  <option value="62">Dominican Republic</option>
  <option value="63">Ecuador</option>
  <option value="64">Egypt</option>
  <option value="65">El Salvador</option>
  <option value="66">Equatorial Guinea</option>
  <option value="67">Eritrea</option>
  <option value="68">Estonia</option>
  <option value="69">Ethiopia</option>
  <option value="70">Falkland Islands (Malvinas)</option>
  <option value="71">Faroe Islands</option>
  <option value="72">Fiji</option>
  <option value="73">Finland</option>
  <option value="74">France</option>
  <option value="75">French Guiana</option>
  <option value="76">French Polynesia</option>
  <option value="77">French Southern Territories</option>
  <option value="78">Gabon</option>
  <option value="79">Gambia</option>
  <option value="80">Georgia</option>
  <option value="81">Germany</option>
  <option value="82">Ghana</option>
  <option value="83">Gibraltar</option>
  <option value="84">Greece</option>
  <option value="85">Greenland</option>
  <option value="86">Grenada</option>
  <option value="87">Guadeloupe</option>
  <option value="88">Guam</option>
  <option value="89">Guatemala</option>
  <option value="90">Guinea</option>
  <option value="91">Guinea-Bissau</option>
  <option value="92">Guyana</option>
  <option value="93">Haiti</option>
  <option value="94">Heard and McDonald Islands</option>
  <option value="95">Honduras</option>
  <option value="96">Hong Kong</option>
  <option value="97">Hungary</option>
  <option value="98">Iceland</option>
  <option value="99">India</option>
  <option value="100">Indonesia</option>
  <option value="101">Iran (Islamic Republic of)</option>
  <option value="102">Iraq</option>
  <option value="103">Ireland</option>
  <option value="104">Israel</option>
  <option value="105">Italy</option>
  <option value="106">Jamaica</option>
  <option value="107">Japan</option>
  <option value="108">Jordan</option>
  <option value="109">Kazakhstan</option>
  <option value="110">Kenya</option>
  <option value="111">Kiribati</option>
  <option value="112">Korea, Democratic Peoples Republic of</option>
  <option value="113">Korea, Republic of</option>
  <option value="114">Kuwait</option>
  <option value="115">Kyrgyzstan</option>
  <option value="116">Lao Peoples Democratic Republic</option>
  <option value="117">Latvia</option>
  <option value="118">Lebanon</option>
  <option value="119">Lesotho</option>
  <option value="120">Liberia</option>
  <option value="121">Libyan Arab Jamahiriya</option>
  <option value="122">Liechtenstein</option>
  <option value="123">Lithuania</option>
  <option value="124">Luxembourg</option>
  <option value="125">Macau</option>
  <option value="126">Macedonia, the former Yugoslav Republic of</option>
  <option value="127">Madagascar</option>
  <option value="128">Malawi</option>
  <option selected="selected" value="129">Malaysia</option>
  <option value="130">Maldives</option>
  <option value="131">Mali</option>
  <option value="132">Malta</option>
  <option value="133">Marshall islands</option>
  <option value="134">Martinique</option>
  <option value="135">Mauritania</option>
  <option value="136">Mauritius</option>
  <option value="137">Mayotte</option>
  <option value="138">Mexico</option>
  <option value="139">Micronesia, Federated States of</option>
  <option value="140">Moldova, Republic of</option>
  <option value="141">Monaco</option>
  <option value="142">Mongolia</option>
  <option value="143">Montserrat</option>
  <option value="144">Morocco</option>
  <option value="145">Mozambique</option>
  <option value="146">Myanmar</option>
  <option value="147">Namibia</option>
  <option value="148">Nauru</option>
  <option value="149">Nepal</option>
  <option value="150">Netherlands</option>
  <option value="151">Netherlands Antilles</option>
  <option value="152">New Caledonia</option>
  <option value="153">New Zealand</option>
  <option value="154">Nicaragua</option>
  <option value="155">Niger</option>
  <option value="156">Nigeria</option>
  <option value="157">Niue</option>
  <option value="158">Norfolk Island</option>
  <option value="159">Northern Mariana Islands</option>
  <option value="160">Norway</option>
  <option value="161">Oman</option>
  <option value="162">Pakistan</option>
  <option value="163">Palau</option>
  <option value="164">Palestinian Territory, occupied</option>
  <option value="165">Panama</option>
  <option value="166">Papua New Guinea</option>
  <option value="167">Paraguay</option>
  <option value="168">Peru</option>
  <option value="169">Philippines</option>
  <option value="170">Pitcairn</option>
  <option value="171">Poland</option>
  <option value="172">Portugal</option>
  <option value="173">Puerto Rico</option>
  <option value="174">Qatar</option>
  <option value="175">Reunion</option>
  <option value="176">Romania</option>
  <option value="177">Russian Federation</option>
  <option value="178">Rwanda</option>
  <option value="179">Saint Helena</option>
  <option value="180">Saint Kitts and Nevis</option>
  <option value="181">Saint Lucia</option>
  <option value="182">Saint Pierre and Miquelon</option>
  <option value="183">Saint Vincent and the Grenadines</option>
  <option value="184">Samoa</option>
  <option value="185">San Marino</option>
  <option value="186">Sao Tome and Principe</option>
  <option value="187">Saudi Arabia</option>
  <option value="188">Senegal</option>
  <option value="189">Serbia and Montenegro</option>
  <option value="190">Seychelles</option>
  <option value="191">Sierra Leone</option>
  <option value="192">Singapore</option>
  <option value="193">Slovakia</option>
  <option value="194">Slovenia</option>
  <option value="195">Solomon Islands</option>
  <option value="196">Somalia</option>
  <option value="197">South Africa</option>
  <option value="198">South Georgia and the South Sandwich Iss</option>
  <option value="199">Spain</option>
  <option value="200">Sri Lanka</option>
  <option value="201">Sudan</option>
  <option value="202">Suriname</option>
  <option value="203">Svalbard and Jan Mayen Islands</option>
  <option value="204">Swaziland</option>
  <option value="205">Sweden</option>
  <option value="206">Switzerland</option>
  <option value="207">Syrian Arab Republic</option>
  <option value="208">Taiwan</option>
  <option value="209">Tajikistan</option>
  <option value="210">Tanzania, United Republic of</option>
  <option value="211">Thailand</option>
  <option value="212">Timor-leste</option>
  <option value="213">Togo</option>
  <option value="214">Tokelau</option>
  <option value="215">Tonga</option>
  <option value="216">Trinidad and Tobago</option>
  <option value="217">Tunisia</option>
  <option value="218">Turkey</option>
  <option value="219">Turkmenistan</option>
  <option value="220">Turks and Caicos Islands</option>
  <option value="221">Tuvalu</option>
  <option value="222">Uganda</option>
  <option value="223">Ukraine</option>
  <option value="224">United Arab Emirates</option>
  <option value="225">United Kingdom</option>
  <option value="226">United States</option>
  <option value="227">United States Minor Outlying Islands</option>
  <option value="228">Uruguay</option>
  <option value="229">Uzbekistan</option>
  <option value="230">Vanuatu</option>
  <option value="231">Vatican City State (Holy see)</option>
  <option value="232">Venezuela</option>
  <option value="233">Vietnam</option>
  <option value="234">Virgin Islands (British)</option>
  <option value="235">Virgin Islands (U.S.)</option>
  <option value="236">Wallis and Futuna Islands</option>
  <option value="237">Western Sahara</option>
  <option value="238">Yemen</option>
  <option value="239">Zambia</option>
  <option value="240">Zimbabwe</option>

</select></div>
                  </div>
                  <div class="field text-field location">
                      <label for="ctl11_ctl00_uxLocation">Location</label>
                      <div><input name="ctl00$ctl11$ctl00$uxLocation_inlinehint" type="hidden" value="Location" /><div class="field text-field location-input location">
  <div>
    <input name="ctl00$ctl11$ctl00$uxLocation" id="ctl11_ctl00_uxLocation" type="search" placeholder="Location" />
  </div>
</div></div>
                      <span id="ctl11_ctl00_ctl06" style="display:none;"></span>
                  </div>
              </div>
              <div class="buttons">
                  <button type="submit" name="ctl00$ctl11$ctl00$uxSearchButton" value="ctl00$ctl11$ctl00$uxSearchButton" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ctl11$ctl00$uxSearchButton&quot;, &quot;&quot;, true, &quot;Search&quot;, &quot;&quot;, false, false))" id="ctl11_ctl00_uxSearchButton" class="submit">Search<i class="fa fa-search fa-flip-horizontal"></i></button>
              </div>
          </div>
          <a id="ctl11_ctl00_uxAdvancedSearchLink" class="advanced" href="/jobs/?params=companyname%3daardvark%2bconsulting#search">Advanced Job Search<i class="fa fa-chevron-circle-right"></i>
          </a>
      </fieldset>
  </div>

</div>

              </div>

          </div>


          <div class="site-navigation-visible-mask"><!-- --></div>

        <script src="jquery-3.1.1.min.js"></script>
          <script type="text/javascript" src="/_resx/templates/00015/js/plugins.min.js"></script>
          <script type="text/javascript" src="/_resx/templates/00015/js/base.js"></script>
          <script type="text/javascript" src="/_resx/templates/00015/js/build.js"></script>

      <script type="text/javascript">
          //<![CDATA[
          BuildJS("VacancySearchResults");
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
