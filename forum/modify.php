<?php

//create_cat.php
include '../db/dbconfig.php';
include 'header.php';

    //the user is signed in
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {

    $urlID = mysql_real_escape_string($_GET['id']);
    //SETTING USERNAME TO A VARIABLE
             $update_content = mysql_real_escape_string($_POST['post_content']);


        $edit = "UPDATE posts
                SET `post_content` = '$update_content'
                WHERE `post_id` = '$urlID'";
         
        $result = mysql_query($edit);
         
        if(!$result)
        {
            //the query failed, uh-oh :-(
            echo 'Error : '. mysql_error();
        }

        $findTopic = "SELECT post_topic
                        FROM posts
                        WHERE post_id = '$urlID'";

        $result = mysql_query($findTopic);

        if(!$result)
        {
            //the query failed, uh-oh :-(
            echo 'Error : '. mysql_error();
        }

        else
        {
                while($row = mysql_fetch_assoc($result))
                {
                    echo 'You have successfully edited your post.';
                    echo '<br>';
                    echo 'Click <a href="topic.php?id='. $row['post_topic'] . '">here</a> if you are not automatically redirected.';

                    header( "refresh:5;url=topic.php?id=" . $row['post_topic']);

                }

        }


    }
 
include 'footer.php';
?>

<p>You will be redirected in <span id="counter">5</span> second(s).</p>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'login.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>
    