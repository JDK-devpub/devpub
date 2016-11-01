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
//  $skill = $row_result['sname'];
  $dob = $row_result['dob'];
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
    <title>Developer | Pub</title>

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

<!-- For friendly search -->
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$(function() {

  $( "#skills" ).autocomplete({
    source: 'livesearch.php'

  });
});
</script>


 <!-- CORE CSS-->

 <link href="profilecss/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
 <link href="profilecss/style.css" type="text/css" rel="stylesheet" media="screen,projection">
   <!-- Custome CSS-->
   <link href="profilecss/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
   <!-- CSS style Horizontal Nav (Layout 03)-->
   <link href="profilecss/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
   <link href="profilecss/uploadbtn.css" type="text/css" rel="stylesheet" media="screen,projection">

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
          <span class="mdl-layout-title">Create Crew</span>
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

      <main class="mdl-layout__content mdl-color--grey-100" stye="display:block">
        <section class="edit_forms1">
            <div class="col s12 m12 l6">
           <div class="card-panel">
             <div class="row">
               <form class="col s12" method="post" action="creategroup.php" enctype="multipart/form-data">
                 <div class="row">
                   <div class="input-field col s12">
                        <label for="first_name">Group Name</label>
                        <br>
                     <input placeholder="Enter a meaningful name" name="gname" type="text" value="" required>
                   </div>
                   <div class="input-field col s12">
                        <label for="last_name">Project Name</label>
                        <br>
                     <input placeholder="Enter a meaningful name" name="pname" type="text" value="" required>
                   </div>
                   <div class="input-field col s12">
                        <label for="first_name">Project Description</label>
                        <br>
                     <input placeholder="Say something about your project" name="nickname" type="text" value="" required>
                   </div>
                   <div class="input-field col s12">
                        <label for="skills">Group Members (Minimum 3 Members | Maximum 5 Members)</label>
                        <br>
                      
                     <input style="width:130px" placeholder="Example: Mr. J" name="memberone" id="memberone" type="text" value=""required> <input style="width:130px" placeholder="Example: Harley Quin" name="membertwo" id="membertwo" type="text" value=""required>
                     <input style="width:130px" placeholder="Example: El Diablo" name="memberthree" id="memberthree" type="text" value=""required> <input style="width:130px" placeholder="Example: El Diablo" name="memberfour" id="skills" type="text" value="">
                     <input style="width:150px" placeholder="Example: Deadpool" name="memberfive" id="memberfive" type="text" value="">
                   </div>
                   <div>
                     <input type="file" style="display:none" name="image" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
					           <label for="file-5"  ><figure  style="background-color:#73879C"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span style="color:#73879C">Upload Group Picture/Logo</span></label>
                            <div style="margin-top:-50px" class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="submit">Submit
                            </button>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      </main>
    </div>
    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
  </body>
</html>
