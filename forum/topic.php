<?php
include '../db/dbconfig.php';
include 'header.php';

    if(isset($_SESSION['username']))
    {
       
        $username = $_SESSION['username'];
    }

    else
    {
    	echo 'You must log in to reply!';
    	exit();
    }

$sql = "SELECT
    topic_id,
    topic_subject,
    topic_by
FROM
    topics
WHERE
    topics.topic_id = " . mysql_real_escape_string($_GET['id']);


    $topicID = mysql_real_escape_string($_GET['id']);

        $result = mysql_query($sql);


         
        if(!$result)
        {
            echo 'The topics could not be displayed, please try again later.' . mysql_error();
        }


		else
		{
		    if(mysql_num_rows($result) == 0)
		    {
		        echo 'This topic does not exist.';
		    }
		    else
		    {
		        while($row = mysql_fetch_assoc($result))
		        {
		            echo '<h2><u>' . $row['topic_subject'] . '</u></h2>';
		        }

		        //do a query for the topics
		        $sql = "SELECT
						    posts.post_topic,
						    posts.post_content,
						    posts.post_date,
						    posts.post_by,
						    posts.post_id,
						    users.id,
						    users.email
						FROM
						    posts
						LEFT JOIN
						    users
						ON
						    posts.post_by = users.id
						WHERE
						    posts.post_topic = " . mysql_real_escape_string($_GET['id']);
		         
		        $result = mysql_query($sql);

		         
		        if(!$result)
		        {
		            echo 'The topics could not be displayed, please try again later.' . mysql_error();
		        }
		        else
		        {
		            if(mysql_num_rows($result) == 0)
		            {
		                echo 'There are nothing in this topic yet.';
		            }
		            else
		            {


		      echo '<table border="1">
              <tr>
                <th><center> Topic </center></th>
                <th><center> By </center></th>
              </tr>'; 
		     
		                     
		                while($row = mysql_fetch_assoc($result))
		                {               
		                    echo '<tr>';
		                        echo '<td class="leftpart">';
		                            echo  $row['post_content'] . '</a><h3>';
		                            echo '<br>';

		                     //ONLY SHOW EDIT FUNCTION IF ITS POSTED BY THE CURRENT LOGGED IN USER(SESSION USERNAME)
							if($row['post_by'] == $username)
							{
							echo '<a href="/devpub/forum/edit.php?id=' . $row['post_id'] . '">
							<img src="editT.gif" border="0" alt="Edit"></a>';
							}



		                        echo '</td>';
		                        echo '<td class="rightpart">';
		                        	//DISPLAY USER INFORMATION AND POSTED DATE
		                        	echo '<h3>' . $row['post_by'] . '</h3>';
		                        	echo '<br>';
		                            echo $row['post_date'];
		                        echo '</td>';
		                    echo '</tr>';
		                }




		            }
		        }
		    }

		}


    //the form hasn't been posted yet, display it
    echo "
    <h3>Currently logged in as '" . $_SESSION['username'] .
    "'<form method='post' action='reply.php?id={$topicID}' >
    <textarea name='reply_content' placeholder='What&#39s on your mind ?' required></textarea>
    <br>
    <input type='submit' value='Add a reply' />
	</form>";

?>
