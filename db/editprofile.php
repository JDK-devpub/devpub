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
          <span class="mdl-layout-title">Edit Profile</span>
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
             <h4 class="header2">Edit Profile</h4>
             <div class="row">
               <form class="col s12" method="post" action="updateData.php" enctype="multipart/form-data">
                 <div class="row">
                   <div class="input-field col s12">
                        <label for="first_name">Firstname</label>
                        <br>
                     <input placeholder="FirstName" name="ufname" type="text" value="<?php echo "$fname"; ?>" required>
                   </div>
                   <div class="input-field col s12">
                        <label for="last_name">Lastname</label>
                        <br>
                     <input placeholder="John Doe" name="ulname" type="text" value="<?php echo "$lname"; ?>" required>
                   </div>
                   <div class="input-field col s12">
                        <label for="first_name">DevPub Name</label>
                        <br>
                     <input placeholder="Reason: Coolness" name="nickname" type="text" value="<?php echo "$nick"; ?>" required>
                   </div>
                   <div class="input-field col s12">
                        <label for="skills">Skills</label>
                        <br>
                     <input placeholder="Type skill 1,skill 2,..." name="skills" type="text" value="<?php echo "$skill"; ?>" required>
                   </div>
                   <div class="input-field col s12">
                        <label for="first_name">Birthdate</label>
                        <br>
                     <input  name="dob" type="date" value="<?php echo "$dob"; ?>" required>
                   </div>
                   <div class="input-field col s12">
                        <label for="profilepicture">Upload Profile Picture</label>
                        <br><br>
                     <input name="image" type="file">
                   </div>
                 </div>
             </div>
           </div>
         </div>
       </section>
       <section class="edit_forms2">
           <div class="col s12 m12 l6">
          <div class="card-panel">
            <h4 class="header2">Professional and Educational Qualification</h4>
            <div class="row">

                <div class="row">
                  <div class="input-field col s12">
                       <label for="first_name">Project Tile</label>
                       <br>
                    <input placeholder="Project 1, Project 2" name="pname" type="text" value="<?php echo urldecode($ptitle); ?>">
                  </div>
                  <div class="input-field col s12">
                       <label for="last_name">Company Name</label>
                       <br>
                    <input placeholder="Company Name" name="cname" type="text" value="<?php echo urldecode($company); ?>">
                  </div>
                  <div class="input-field col s12">
                       <label for="first_name">College or University name</label>
                       <br>
                    <input placeholder="College Or University Name" name="college" type="text" value="<?php echo urldecode($college); ?>">
                  </div>
                  <div class="input-field col s12">
                       <label for="skills">Last Educational Qualification</label>
                       <br>
                    <input placeholder="Type skill 1,skill 2" name="quali" type="text" value="<?php echo urldecode($last_qual); ?>">
                  </div>
                  <div class="input-field col s12">
                       <label for="first_name">Employment Projects</label>
                       <br>
                    <input placeholder="Company Projects" name="eproject" type="text" value="<?php echo urldecode($employment_project); ?>">
                  </div>
                  <div class="input-field col s12">
                    <br>
                            <textarea placeholder="Enter About your self" name="text" class="materialize-textarea" ><?php echo $aboutme; ?></textarea>
                            <label for="message">Bio</label>
                  </div>
                  <div class="row" style="margin-right:50px;margin-top:10px">
                          <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="submit">Submit
                            </button>
                          </div>
                        </div>
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
