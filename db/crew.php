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
          <span class="mdl-layout-title">Crew</span>
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
          <a class="mdl-navigation__link" href="compiler.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">new_releases</i>Online Compiler</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Forum</a>
          <a class="mdl-navigation__link" href="crew.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>Crew</a>
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href="logout.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">exit_to_app</i><span >Logout</span></a>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
      <!-- I have strarted from here -->
                         <div class="mdl-grid demo-content">
                    <div style="height:500px" class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">                   
                           <img style="padding:30px;height:470px" src="https://material-design.storage.googleapis.com/publish/material_v_4/social.png">           
                    </div>         
          <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
            <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
              <div style="height:250px" class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2 class="mdl-card__title-text">Choose Crew</h2>
              </div>
              <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                           //////////////////////////////
                           ////////////////////////////////
                           /////////////////////////////
                           //////////////////////
                           //////////////////////////////
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="crewpage.php" class="mdl-button mdl-js-button mdl-js-ripple-effect">Step In!</a>     <a href="crewreg.php" class="mdl-button mdl-js-button mdl-js-ripple-effect">Create New!</a>
              </div>
            </div>
            
            <div class="demo-separator mdl-cell--1-col"></div>
            <div style="margin-bottom:100px;padding:10dp"class="demo-options mdl-card mdl-color--deep-purple-500 mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-cell--12-col-desktop">
              <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--blue-grey-50">On Going Projects</a>
                <div class="mdl-layout-spacer"></div>
                <i class="material-icons">turned_in_not</i>
              </div>
              <h2 style="color:white;margin-left:20px">Hello</h2>
            </div>
          </div>
        </div>
          <!-- Finished here -->
      </main>
    </div>
    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
  </body>
</html>
