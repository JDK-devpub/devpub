<?php
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
  $skill = $row_result['sname'];
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

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

 <!-- Favicons-->
 <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
 <!-- Favicons-->
 <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
 <!-- For iPhone -->
 <meta name="msapplication-TileColor" content="#00bcd4">
 <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
 <!-- For Windows Phone -->


 <!-- CORE CSS-->

 <link href="profilecss/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
 <link href="profilecss/style.css" type="text/css" rel="stylesheet" media="screen,projection">
   <!-- Custome CSS-->
   <link href="profilecss/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
   <!-- CSS style Horizontal Nav (Layout 03)-->
   <link href="profilecss/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">


 <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
 <link href="profilecss/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
 <link href="perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
 <link href="chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">

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
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Profile</span>
          <div class="mdl-layout-spacer"></div>
          <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
            <i class="material-icons" >search</i>
          </label>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search"></label>
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
        <!-- START CONTENT -->
             <section id="content" style="margin-left:18px;margin-top:-0.1px;padding:30px">

               <!--start container-->
               <div class="container">
                 <div id="profile-page" class="section">
                   <!-- profile-page-header -->
                   <div id="profile-page-header" class="card">
                       <div class="card-image waves-effect waves-block waves-light">
                           <img class="activator" src="images/cover.png" alt="user background">
                       </div>
                       <figure class="card-profile-image">
                           <img src="data:image/jpeg;base64,<?php echo base64_encode($image); ?>" alt="profile image" class="circle z-depth-2 responsive-img activator">
                       </figure>
                       <div class="card-content" style="margin-top:5px">
                         <div class="row">
                           <div class="col s3 offset-s2">
                               <h4 class="card-title grey-text text-darken-4"><?php echo $fname ?></h4>
                               <p class="medium-small grey-text"><?php echo $nick ?></p>
                           </div>
                           <div class="col s2 center-align">
                               <h4 class="card-title grey-text text-darken-4">Education</h4>
                               <p class="medium-small grey-text"><?php echo $college ?></p>
                           </div>
                           <div class="col s2 center-align">
                               <h4 class="card-title grey-text text-darken-4">Workplace</h4>
                               <p class="medium-small grey-text"><?php echo $company ?></p>
                           </div>
                           <div class="col s2 center-align">
                               <h4 class="card-title grey-text text-darken-4">Bullshit</h4>
                               <p class="medium-small grey-text">Need to be changed</p>
                           </div>

                         </div>
                       </div>
                    <!--   <div class="card-reveal">
                           <p>
                             <span class="card-title grey-text text-darken-4"><?php echo $fname ?><i class="mdi-navigation-close right"></i></span>
                             <span><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Project Manager</span>
                           </p>

                           <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>

                           <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p>
                           <p><i class="mdi-communication-email cyan-text text-darken-2"></i> mail@domain.com</p>
                           <p><i class="mdi-social-cake cyan-text text-darken-2"></i> 18th June 1990</p>
                           <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i> BAR - AUS</p>
                       </div> -->
                   </div>
                     <div class="card light-blue" style="margin-left:550px;margin-top:30px;height:500px">
                       <div class="card-content white-text">
                         <span class="card-title">About Me!</span>
                         <p><?php echo $aboutme ?></p>
                       </div>
                     </div>

                   <!--/ profile-page-header -->


                   <!-- profile-page-content -->
                   <div id="profile-page-content" class="row" style="margin-top:-514px">
                     <!-- profile-page-sidebar-->
                     <div id="profile-page-sidebar" class="col s12 m4">
                       <!-- Profile About  -->

                       <!-- Profile About  -->

                       <!-- Profile About Details  -->
                       <ul id="profile-page-about-details" class="collection z-depth-1">
                         <li class="collection-item">
                           <div class="row">
                             <div class="col s5 grey-text darken-1"><i class="mdi-action-wallet-travel"></i>Project</div>
                             <div class="col s7 grey-text text-darken-4 right-align"><?php echo $ptitle ?></div>
                           </div>
                         </li>
                         <li class="collection-item">
                           <div class="row">
                             <div class="col s5 grey-text darken-1"><i class="mdi-social-poll"></i> Skills</div>
                             <div class="col s7 grey-text text-darken-4 right-align"><?php echo $skill ?></div>
                           </div>
                         </li>
                         <li class="collection-item">
                           <div class="row">
                             <div class="col s5 grey-text darken-1"><i class="mdi-social-domain"></i> Lives in</div>
                             <div class="col s7 grey-text text-darken-4 right-align"><?php echo $country ?></div>
                           </div>
                         </li>
                         <li class="collection-item">
                           <div class="row">
                             <div class="col s5 grey-text darken-1"><i class="mdi-social-cake"></i> Birth date</div>
                             <div class="col s7 grey-text text-darken-4 right-align"><?php echo $dob ?></div>
                           </div>
                         </li>
                       </ul>
                       <!--/ Profile About Details  -->

                       <!-- Profile feed  -->
                       <ul id="profile-page-about-feed" class="collection z-depth-1">
                         <li class="collection-item avatar">
                           <i class="mdi-file-folder circle"></i>
                           <span class="title">Qualification</span>
                           <p>
                             <?php echo urldecode($last_qual); ?>
                           </p>
                           <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
                         </li>
                         <li class="collection-item avatar">
                           <i class="mdi-file-folder circle"></i>
                           <span class="title">Project Title</span>
                           <p>
                             <?php echo $ptitle ?>
                           </p>
                           <a href="#!" class="secondary-content"><i class="mdi-social-domain"></i></a>
                         </li>
                         <li class="collection-item avatar">
                           <i class="mdi-action-assessment circle green"></i>
                           <span class="title">Current Project</span>
                           <p>
                             <?php echo urldecode($employment_project); ?>
                           </p>
                           <a href="#!" class="secondary-content"><i class="mdi-editor-attach-money"></i></a>
                         </li>
                         <li class="collection-item avatar">
                           <i class="mdi-av-play-arrow circle red"></i>
                           <span class="title">Active Group</span>
                           <p>company management news
                             <br> <span class="ultra-small">Second Line</span>
                           </p>
                           <a href="#!" class="secondary-content"><i class="mdi-action-track-changes"></i></a>
                         </li>
                       </ul>
                       <!-- Profile feed  -->

                       <!-- task-card -->
                       <ul id="task-card" class="collection with-header">
                         <li class="collection-header cyan">
                             <h4 class="task-card-title">My Task</h4>
                             <p class="task-card-date">March 26, 2015</p>
                         </li>
                         <li class="collection-item dismissable">
                             <input type="checkbox" id="task1" />
                             <label for="task1">Create Mobile App UI. <a href="#" class="secondary-content"><span class="ultra-small">Today</span></a>
                             </label>
                             <span class="task-cat teal">Mobile App</span>
                         </li>
                         <li class="collection-item dismissable">
                             <input type="checkbox" id="task2" />
                             <label for="task2">Check the new API standerds. <a href="#" class="secondary-content"><span class="ultra-small">Monday</span></a>
                             </label>
                             <span class="task-cat purple">Web API</span>
                         </li>
                         <li class="collection-item dismissable">
                             <input type="checkbox" id="task3" checked="checked" />
                             <label for="task3">Check the new Mockup of ABC. <a href="#" class="secondary-content"><span class="ultra-small">Wednesday</span></a>
                             </label>
                             <span class="task-cat pink">Mockup</span>
                         </li>
                         <li class="collection-item dismissable">
                             <input type="checkbox" id="task4" checked="checked" disabled="disabled" />
                             <label for="task4">I did it !</label>
                             <span class="task-cat cyan">Mobile App</span>
                         </li>
                       </ul>
                     </div>
                         </div>
                       </div>
                   </div>
                 </div>
               </div>
               </div>
               <!--end container-->
             </section>






      </main>
    </div>


    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
  </body>
</html>
