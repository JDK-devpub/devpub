<?php Header ("Content-type: style.css; charset=utf-8");?> 
<?php
//create_cat.php
include '../db/dbconfig.php';
include 'header.php';


$post_ID = isset($_GET['id']) ? intval($_GET['id']) : '0';

if(!isset($_SESSION)) 
{
    session_start();
    //the user is not signed in
    echo 'Sorry, you have to be <a href="/forum/signin.php">signed in</a> to create a topic.';
}


else
{
    
    //the user is signed in
    if($_SERVER['REQUEST_METHOD'] != 'POST')
    {   

    //SETTING USERNAME TO A VARIABLE
    if(isset($_SESSION['username']))
        {
            $username = $_SESSION["username"];
        }


        //the form hasn't been posted yet, display it
        //retrieve the categories from the database for use in the dropdown
        $sql = "SELECT
                    post_content,
                    post_topic
                FROM
                    posts
                WHERE
                    post_id = " . mysql_real_escape_string($_GET['id']);

                    $urlID = mysql_real_escape_string($_GET['id']);
         
        $result = mysql_query($sql);
         
        if(!$result)
        {
            echo 'Error while selecting from database. Please try again later.'. mysql_error();
        }
        else
        {
                while($row = mysql_fetch_assoc($result))
                {

                    $postTopicID = $row['post_topic'];

                    $topicSUBJECT = "SELECT topic_subject
                                    FROM topics
                                    WHERE $postTopicID = topic_id";

                $result2 = mysql_query($topicSUBJECT);

                        if(!$result2)
                        {
                            echo 'Error while selecting from database. Please try again later.'. mysql_error();
                        }

                        else
                        {
                             $row2 = mysql_fetch_assoc($result2);

                                echo'<form action="modify.php?id=' . $urlID . '" method="post">
                                      <h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEdit your post</h2>
                                       <table>
                                        <tr>
                                             <td>
                                                <h2>'. $row2['topic_subject'].'</h2>
                                             </td>
                                         <br>
                                        </tr>
                                        <tr>
                                             <td>
                                             <textarea name="post_content" style="font-size: 12pt"/>' . $row['post_content'] . '</textarea>
                                             </td>
                                         <br>
                                        </tr>
                                        <tr>
                                         <td> <input type="submit" name="submit" value="Submit Modified Post" /></td>
                                        </tr>
                                       </table>
                                      </form>
                                      ';
                            
                        }
                }
            }
        }
}

 
include 'footer.php';
?>