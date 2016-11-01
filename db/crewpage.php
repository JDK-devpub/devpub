<?php
include ("dbconfig.php");
session_start();
if(isset($_SESSION['globalID'])) {
$id = $_SESSION['globalID'];
$profile_content = mysqli_query($dbconfig,"select * from users where id='$id'");
while ($row_result = mysqli_fetch_array($profile_content)){
  $fname = $row_result['fname'];
  $email = $row_result['email'];
  $image = $row_result['picture'];
  $nick = $row_result['nickname'];
}
}else{
  header('location:error.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Material Design Lite</title>
    <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="dashboard.css">
    <!-- Bootstrap -->
   <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
   <!-- Font Awesome -->
   <link href="bootstrap/font-awesome.min.css" rel="stylesheet">
   <!-- NProgress -->
   <link href="bootstrap/nprogress.css" rel="stylesheet">
   <!-- iCheck -->


   <!-- Custom Theme Style -->
   <link href="bootstrap/custom.min.css" rel="stylesheet">
    <style>
        /*Julfikar Starts*/
.card {
    position: absolute;
    height: 250px;
    width: 250px;
    margin-top:50px;
    margin-left:50px;
    background-image: url(http://s8.postimg.org/jqyxb0291/card.png);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    box-shadow: 0 0 80px -10px black;
    overflow: hidden;
}

.card-blur {
    position: absolute;
    height: 100%;
    width: 100%;
    background-color: black;
    animation: ease-in 3s brightness infinite;
}

@keyframes brightness {
    0% {
        opacity: 0;
    }
    10% {
        opacity: 0.6;
    }
    100% {
        opacity: 0.6;
    }
}

.footer {
    z-index: 1;
    position: absolute;
    height: 80px;
    width: 100%;
    bottom: 0;
}

svg#curve {
    position: absolute;
    fill: white;
    left: 0;
    bottom: 0;
    width: 400px;
    height: 150px;
}

.connections {
    height: 80px;
    width: 400px;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 100px;
    margin: auto;
    padding-left:30px;
}

.connection {
    height: 25px;
    width: 25px;
    border-radius: 100%;
    background-color: white;
    display: inline-block;
    padding: 5px;
    margin-right: 25px;
    transform: translateY(200px);
    
    animation: cubic-bezier(.46, 1.48, .18, .81) slideup 3s infinite;
}

@keyframes slideup {
    0% {
        transform: translateY(250px);
    }
    2% {
        transform: translateY(250px);
    }
    30% {
        transform: translateY(0px);
    }
    96% {
        transform: translateY(0px);
    }
    100% {
        transform: translateY(200px);
    }
}

.name {
    color: white;
    font-weight: bolder;
    padding-top: 5px;
    padding-left:30px;
}

.job {
    margin-top: 10px;
    padding-left:30px;
}
    /*Julfikar Ends*/
    body {
        overflow:hidden;
      }
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Crew Panel</span>
          <div class="mdl-layout-spacer"></div>
          <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
            <i class="material-icons" >search</i>
          </label>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>

        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="data:image/jpeg;base64,<?php echo base64_encode($image); ?>" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span><?php echo $email ?></span>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="../index.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
          <a class="mdl-navigation__link" href="profile.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">person</i>Profile</a>
          <a class="mdl-navigation__link" href="dashboard.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">dashboard</i>Dashboard</a>
          <a class="mdl-navigation__link" href="editprofile.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">edit</i>Edit Profile</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">report</i>Activity</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Forum</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>Crew</a>
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href="logout.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">exit_to_app</i><span >Logout</span></a>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
      <!-- I have strarted from here -->
      <table style="width:70%">
  <tr>
    <th><div class="card">
    <div class="footer">
        <svg id="curve">
            <path id="p" d="M0,200 Q80,100 400,200 V150 H0 V50" />
            <!-- delay -->
            <animate xlink:href="#p" attributeType="XML" attributeName="d" to="M0,200 Q80,100 400,200 V150 H0 V50" fill="freeze" begin="0s; bounce6.end" dur="0.15s" id="bounce0" />
            <!-- slide up-->
            <animate xlink:href="#p" attributeType="XML" attributeName="d" to="M0,50 Q80,100 400,50 V150 H0 V50" fill="freeze" begin="bounce0.end" dur="0.1s" id="bounce1" />
            <!-- slide up and curve in -->
            <animate xlink:href="#p" attributeType="XML" attributeName="d" to="M0,50 Q80,0 400,50 V150 H0 V50" fill="freeze" begin="bounce1.end" dur="0.15s" id="bounce2" />
            <!-- slide down and curve in -->
            <animate xlink:href="#p" attributeType="XML" attributeName="d" to="M0,50 Q80,80 400,50 V150 H0 V50" fill="freeze" begin="bounce2.end" dur="0.15s" id="bounce3" />
            <!-- slide down and curve out -->
            <animate xlink:href="#p" attributeType="XML" attributeName="d" to="M0,50 Q80,45 400,50 V150 H0 V50" fill="freeze" begin="bounce3.end" dur="0.1s" id="bounce4" />
            <!-- curve in -->
            <animate xlink:href="#p" attributeType="XML" attributeName="d" to="M0,50 Q80,50 400,50 V150 H0 V50" fill="freeze" begin="bounce4.end" dur="0.05s" id="bounce5" />
            <!-- delay -->
            <animate xlink:href="#p" attributeType="XML" attributeName="d" to="M0,50 Q80,50 400,50 V150 H0 V50" fill="freeze" begin="bounce5.end" dur="2.3s" id="bounce6" />
        </svg>
        <div class="info">
            <div class="name">Filan Fisteku</div>
            <div class="job">Architect Manager</div>
        </div>
    </div>
    <div class="card-blur"></div></th>
    
  </tr>
</table>
    
          <!-- Finished here -->
      </main>
    </div>
    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
  </body>
</html>
