<?php
include '../dbconfig.php';
include 'header.php';
 
 
if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    //someone is calling the file directly, which we don't want
    echo 'This file cannot be called directly.';
}

else
{
    $topicID = $_GET['id'];
    echo $topicID;
    //check for sign in status
    if(!$_SESSION['globalID'])
    {
        echo 'You must be signed in to post a reply.';
    }
    else
    {
        //a real user posted a real reply
        if(isset($_POST['reply_content']))
        {

            $reply = $_POST['reply_content'];

        $sql = "INSERT INTO 
                    posts(post_content,
                          post_date,
                          post_topic,
                          post_by) 
                VALUES ('$reply',
                        NOW(),
                        '$topicID',
                        '$_SESSION[globalID]')";
        }

        else
        {
                    $reply = null;
                    $sql = "INSERT INTO 
                    posts(post_content,
                          post_date,
                          post_topic,
                          post_by) 
                VALUES ('$reply',
                        NOW(),
                        '$topicID',
                        '$_SESSION[globalID]')";
        }


                         
        $result = mysqli_query($dbconfig,$sql);
                         
        if(!$result)
        {
            echo 'Your reply has not been saved, please try again later.';
            echo 'Error : ' . mysqli_error();
        }
        else
        {
            echo 'Your reply has been saved, check out <a href="topic.php?id=' . htmlentities($_GET['id']) . '">the topic</a>.';
        }
    }
}
 
?>