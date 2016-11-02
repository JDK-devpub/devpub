<?php Header ("Content-type: style.css; charset=utf-8");?>
<?php
//create_cat.php
include '../dbconfig.php';
include 'header.php';


$topic_cat = isset($_GET['id']) ? intval($_GET['id']) : '0';

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
                    cat_id,
                    cat_name,
                    cat_description
                FROM
                    categories";

        $result = mysqli_query($dbconfig,$sql);

        if(!$result)
        {
            //the query failed, uh-oh :-(
            echo 'Error while selecting from database. Please try again later.';
        }
        else
        {
            if(mysqli_num_rows($result) == 0)
            {
                //there are no categories, so a topic can't be posted
                if($_SESSION['user_level'] == 1)
                {
                    echo 'You have not created categories yet.';
                }
                else
                {
                    echo 'Before you can post a topic, you must wait for an admin to create some categories.';
                }
            }
            else
            {

echo'

      <form method="post" action="">
      <h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCreate a topic</h2>
       <table>
        <tr>
         <td><input type="text" name="topic_subject" size="58" maxlength="50" placeholder="Topic Title : Not more than 50 characters" style="font-size: 12pt"/></td><br>
        </tr>
        <tr>
         <td><textarea name="post_content" placeholder="What\'s on your mind?" style="font-size: 12pt"/></textarea></td><br>
        </tr>
        <tr>
         <td> <input type="submit" value="Create topic" /></td>
        </tr>
       </table>
      </form>
      ';
            }
        }
    }
    else
    {

        //start the transaction
        $query  = "BEGIN WORK;";
        $result = mysqli_query($dbconfig,$query);

        if(!$result)
        {
            //Damn! the query failed, quit
            echo 'An error occured while creating your topic. Please try again later.';
        }
        else
        {


            //the form has been posted, so save it
            //insert the topic into the topics table first, then we'll save the post into the posts table
            $sql = "INSERT INTO
                        topics
                        (topic_subject, topic_date, topic_cat, topic_by)
                   VALUES
                    ('$_POST[topic_subject]', NOW(), $topic_cat, '$username')";



            $result = mysqli_query($dbconfig,$sql);
            if(!$result)
            {
                //something went wrong, display the error
                echo 'An error occured while inserting your data. Please try again later.' . mysqli_error();
                $sql = "ROLLBACK;";
                $result = mysqli_query($dbconfig,$sql);
            }
            else
            {
                //the first query worked, now start the second, posts query
                //retrieve the id of the freshly created topic for usage in the posts query
                $topicid = mysqli_insert_id($dbconfig);
                $post_content = $_POST['post_content'];

                $sql = "INSERT INTO
                            posts(`post_content`,
                                  `post_date`,
                                  `post_topic`,
                                  `post_by`)
                        VALUES
                            ('$post_content',
                             NOW(),
                              '$topicid',
                               '$username')";

                $result = mysqli_query($dbconfig,$sql);

                if(!$result)
                {
                    //something went wrong, display the error
                    echo 'An error occured while inserting your post. Please try again later.' . mysqli_error();
                    $sql = "ROLLBACK;";
                    $result = mysqli_query($sql);
                }
                else
                {
                    $sql = "COMMIT;";
                    $result = mysqli_query($dbconfig,$sql);

                    //after a lot of work, the query succeeded!
                    echo 'You have successfully created <a href="topic.php?id='. $topicid . '">your new topic</a>.';
                }
            }
        }
    }
}

include 'footer.php';
?>
