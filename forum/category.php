
<?php
//create_cat.php
include '../db/dbconfig.php';
include 'header.php';
 
//first select the category based on $_GET['cat_id']
$sql = "SELECT
            cat_id,
            cat_name,
            cat_description
        FROM
            categories
        WHERE
            cat_id = " . mysql_real_escape_string($_GET['id']);
 
$result = mysql_query($sql);
 
if(!$result)
{
    echo 'The category could not be displayed, please try again later.' . mysql_error();
}
else
{
    if(mysql_num_rows($result) == 0)
    {
        echo 'This category does not exist.';
    }
    else
    {
        //display category data
        while($row = mysql_fetch_assoc($result))
        {
            echo '<h2>Topics in ′' . $row['cat_name'] . '′ category</h2>';
        }
     
        //do a query for the topics
        $topicSQL = "SELECT  
                    topic_id,
                    topic_subject,
                    topic_date,
                    topic_cat,
                    topic_by
                FROM
                    topics
                WHERE
                    topic_cat = " . mysql_real_escape_string($_GET['id']);
         
        $result = mysql_query($topicSQL);
        //<a href="topic.php?id='. $row['topic_id'] . '">


// echo "<form name=\" \" action=\"/devpub/forum/create_topic.php\" method=\"\">";
// echo "<input type=\"button\" value=\"Create a topic\">";
// echo "</form>";

echo '<a href="/devpub/forum/create_topic.php?id= ' . $_GET['id'] . '">
<img src="newT.gif" border="0" alt="Start new topic"></a>';
echo '<br>';

        if(!$result)
        {
            echo 'The topics could not be displayed, please try again later.' . mysql_error();
        }
        else
        {
            if(mysql_num_rows($result) == 0)
            {
                echo 'There are no topics in this category yet.';
            }
            else
            {
                //prepare the table
                echo '<table border="1">
                      <tr>
                        <th>Topic</th>
                        <th>Topic Starter</th>
                      </tr>'; 
                     
                while($row = mysql_fetch_assoc($result))
                {               
                    echo '<tr>';
                        echo '<td class="leftpart">';
                            echo '<h3><a href="topic.php?id=' . $row['topic_id'] . '">' . $row['topic_subject'] . '</a><h3>';
                        echo '</td>';
                        echo '<td class="rightpart">';
                            echo $row['topic_by'];
                        echo '</td>';
                    echo '</tr>';
                }
            }
        }
    }
}
 
include 'footer.php';
?>