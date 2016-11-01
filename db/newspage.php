<?php

  include ("dbconfig.php");
  session_start();
     $id = $_GET['news_id'];
     $news_content = mysqli_query($dbconfig,"select * from news where news_id='$id'");
     while ($row_result = mysqli_fetch_array($news_content)){
          $news_title = $row_result['news_title'];
          $news_image = $row_result['news_image'];
          $news_short_description = $row_result['news_short_description'];
          $news_full_content = $row_result['news_full_content'];
          $news_author = $row_result['news_author'];
          $news_published_on = $row_result['news_published_on'];
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
    <link rel="stylesheet" href="News css/bootstrap.min.css">
    <link rel="stylesheet" href="News css/font-awesome.css">
    <link rel="stylesheet" href="News css/style.min.css">
    <link rel="stylesheet" href="News css/style.css">
    <!-- css -->
      <link rel="stylesheet" href="../css/demo.css">
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
            <img class="android-logo-image" src="../images/android-logo.png" href="index.php">
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
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="#id02" id="signup_id" onclick="document.getElementById('id02').style.display='block'" style="width:auto;text-decoration: none">SignUp</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="#id01" id="login_id"  onclick="document.getElementById('id01').style.display='block'" style="width:auto;text-decoration: none">Login</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="../index.php" style="text-decoration: none">Home</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="dashboard.php" id="dash_id" style="display:none;text-decoration: none" >Dashboard</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="" style="text-decoration: none">Forum</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="news.php" style="text-decoration: none">News</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="" style="text-decoration: none">Market</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="" id"jobs_id" style="display:block;text-decoration: none">Jobs</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="logout.php" id="exit_id" style="display:none;text-decoration: none">Logout</a>
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
                                   <td style="width:50%;color:white" ><label><b>User Name</b></label></td>
                                   <td><input class="textboxform" type="text" placeholder="User Name" name="nick" required></td>
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


          <body class="sticky_footer">
	           <div class="wrapper">


		<!-- CONTENT BEGIN -->
		<div id="content" class="sidebar_right">
			<div class="inner">
				<div class="block_general_title_2">
					<h1><?php echo $news_title ?></h1>
					<h2><a href="#" class="tags">Tech</a>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="author">by <a href="#"><?php echo $news_author ?></a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="date"><?php echo $news_published_on ?></span></h2>
				</div>

				<div class="main_content">
					<div class="block_content">
						<div class="pic"><img src="data:image/jpeg;base64,<?php echo base64_encode($news_image) ?>" alt=""></div>
						<p> <?php echo $news_short_description ?></p>
						<p><?php echo $news_full_content ?></p>

						<h3>Small Heading Style</h3>

						<p>Qed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae et quasi architecto beatae vitae dicta sunt explicabo emo enim ipsam voluptatem.</p>

						<p>Red ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

						<div class="block_featured_2 left">
							<div class="content">
								<p>Perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae et quasi architecto beatae vitae dicta sunt explicabo emo. Enim ipsam voluptatem.</p>
							</div>
						</div>

						<p>Perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae et quasi architecto beatae vitae dicta sunt explicabo emo.</p>
						<p>Enim ipsam voluptatem. Quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur. Neque porro quisquam est, qui dolorem.</p>
						<p>Qed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae et quasi architecto beatae vitae dicta sunt explicabo emo enim ipsam voluptatem.</p>

						<div class="line_1"></div>
					</div>

				</div>

				<div class="sidebar">


					<aside>
						<div class="block_banner_1"><a href="#"><img src="https://www.stayathomemum.com.au/cache/860x380-0/wp-content/uploads/2010/05/bigstock-frightened-woman-looking-at-ca-45637420.jpg" alt=""></a></div>
					</aside>

					<aside>
						<div class="sidebar_title_1">Latest reviews</div>

						<div class="block_sidebar_latest_reviews">
							<div class="review">
								<div class="title">New Iphone 5s review</div>
								<div class="num">89%</div>
								<div class="progress"><div class="bar" style="width:89%;"></div></div>
							</div>

							<div class="review">
								<div class="title">beatae vitae dicta.</div>
								<div class="num">50%</div>
								<div class="progress"><div class="bar" style="width:50%;"></div></div>
							</div>

							<div class="review">
								<div class="title">enim ipsam voluptatem quia...</div>
								<div class="num">69%</div>
								<div class="progress"><div class="bar" style="width:69%;"></div></div>
							</div>
						</div>
					</aside>

					<aside>
						<div class="sidebar_title_1">Popular posts</div>

						<div class="block_sidebar_popular_posts">
							<article>
								<div class="image"><a href="#"><img src="https://s-media-cache-ak0.pinimg.com/736x/a8/2a/d1/a82ad1c76a7345eb3f4fe9f8c604b253.jpg" alt=""></a></div>

								<div class="content">
									<div class="title">
										<a href="blog_post.html">Quae ab illo inventore veritatis et quasi.</a>
									</div>

									<div class="info">
										<div class="tags"><a href="#">TRAVEL</a>, <a href="#">LIFE</a></div>
										<div class="date">27, 2013</div>
									</div>
								</div>
							</article>

							<article>
								<div class="image"><a href="#"><img src="https://s-media-cache-ak0.pinimg.com/736x/a8/2a/d1/a82ad1c76a7345eb3f4fe9f8c604b253.jpg" alt=""></a></div>

								<div class="content">
									<div class="title">
										<a href="blog_post.html">Nemo enim ipsam voluptatem quia voluptas.</a>
									</div>

									<div class="info">
										<div class="tags"><a href="#">TRAVEL</a>, <a href="#">LIFE</a></div>
										<div class="date">27, 2013</div>
									</div>
								</div>
							</article>

							<article>
								<div class="image"><a href="#"><img src="https://s-media-cache-ak0.pinimg.com/736x/a8/2a/d1/a82ad1c76a7345eb3f4fe9f8c604b253.jpg" alt=""></a></div>

								<div class="content">
									<div class="title">
										<a href="blog_post.html">Sit aspernatur aut odit aut fugit, sed quia.</a>
									</div>

									<div class="info">
										<div class="tags"><a href="#">TRAVEL</a>, <a href="#">LIFE</a></div>
										<div class="date">27, 2013</div>
									</div>
								</div>
							</article>
						</div>
					</aside>

					<aside>
						<div class="sidebar_title_1">Most commented</div>

						<div class="block_sidebar_most_commented">
							<article>
								<a href="#">
									<span class="num">12<span class="tail"></span></span>
									<span class="title">Quae ab illo inventore veritatis et quasi.</span>
								</a>
							</article>

							<article>
								<a href="#">
									<span class="num">8<span class="tail"></span></span>
									<span class="title">Fugit, sed quia consequuntur.</span>
								</a>
							</article>

							<article>
								<a href="#">
									<span class="num">7<span class="tail"></span></span>
									<span class="title">Sed quia consequuntur magni dolores eos qui.</span>
								</a>
							</article>
						</div>
					</aside>

					<aside>
						<div class="sidebar_title_1">Latest Comments</div>

						<div class="block_sidebar_latest_comments">
							<article>
								<div class="num">1</div>
								<div class="content">
									<div class="author"><span>Mark Summers</span> says:</div>
									<div class="comment">Aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</div>
								</div>
							</article>

							<article>
								<div class="num">2</div>
								<div class="content">
									<div class="author"><span>Sara hornet</span> says:</div>
									<div class="comment">Magni dolores eos qui ratione voluptatem sequi nesciunt.</div>
								</div>
							</article>
						</div>
					</aside>

				</div>

				<div class="clearboth"></div>
			</div>
		</div>
		<!-- CONTENT END -->


        </div>
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
