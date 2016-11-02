<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="A short description." />
    <meta name="keywords" content="put, keywords, here" />
    <title>PHP-MySQL forum</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<h1>DevPub.Net</h1>
    <div id="menu">    
    <div id="wrapper">
        <a class="item" href="/devpub/index.php">DevPub</a>
        <a class="item" href="/devpub/forum/index.php">Home</a> 
        
        <?php
        session_start();
            if(isset($_SESSION['username']))
            {
                $username = $_SESSION['username'];
            }
    if(isset($_SESSION['username']))
    {
            //SHOW CREATE CATEGORY BUTTON IF USERNAME IS XXX
        if($username == "asd@gmail.com")
        {
            echo '<a class="item" href="/devpub/forum/create_cat.php">Create a category</a>';
        }
    }
        ?>



         
        <div id="userbar">
    <div id="userbar">
    <?php
     

     
    if(isset($_SESSION['username']))
    {
       
        
        echo 'Hello, ' . $username . '. Not you? <a href="../db/logout.php">Sign out</a>';
    }


    else
    {
        echo 'Click <a href="../index.php">here</a> to log in.';
    }
    

    //TO BE DONE WHEN LOGIN FROM DEVPUB IS FIXED
    // if(isset($_SESSION['username']))
    // {
    //     $_SESSION['username'] = "YOLO";
    //     $username = $_SESSION['username'];
    //     echo 'Hello, ' . $username . '. Not you? <a href="signout.php">Sign out</a>';
    // }

    // else
    // {
    //     echo '<a href="signin.php">Sign in</a> or <a href="http://localhost/devpub/index.php#id02">create an account</a>.';
    // }
    ?>

    </div>
        </div>


<!-- <a class="mdl-navigation__link mdl-typography--text-uppercase" href="../#id02" id="signup_id">SignUp</a> -->


        <div id="content">