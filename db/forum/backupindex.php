<?php
//create_cat.php
include 'header.php';
include '../db/dbconfig.php';
 
         //prepare the table
        echo '<table border="1">
              <tr>
                <th><h3>Front Desks</h3></th>
                <th></th>
              </tr>'; 



$sql = "SELECT
            cat_id,
            cat_name,
            cat_description
        FROM
            categories
        WHERE
            sectionID = 0";
 
$result = mysql_query($sql);
 
if(!$result)
{
    echo 'The categories could not be displayed, please try again later.';
    echo 'Error : ' . mysql_error();
}
else
{
    if(mysql_num_rows($result) == 0)
    {
        echo 'No categories defined yet.';
    }
    else
    {


        while($row = mysql_fetch_assoc($result))
        {               
            echo '<tr>';
                echo '<td class="leftpart">';
                    echo '<a href="category.php?id='. $row['cat_id'].'">' . $row['cat_name'] . '</a><br></h3>' . $row['cat_description'];

                    //GET THE LATEST TOPIC.
                    $latest = "SELECT cat_name, topic_subject, topic_id, sectionID, latest as topic_date 
                            FROM categories c
                            LEFT JOIN ( 
                                SELECT topic_subject, topic_id, topic_cat, MAX(topic_date) latest 
                                FROM topics
                                GROUP BY topic_cat
                                 ) as t
                            ON c.cat_id = t.topic_cat";

                    $result2 = mysql_query($latest);

                    if(!$result2)
                    {
                            echo 'Error : ' . mysql_error();
                    }

                    else
                    {
                        echo '</td>';
                        echo '<td class="rightpart">';


                        if(mysql_num_rows($result2) == 0)
                        {
                            echo 'This category does not exist.';
                        }

                        else
                        {
                            while($row = mysql_fetch_assoc($result2))
                            {    
                                echo '<a href="topic.php?id='. $row['topic_id'] . '">' . $row['topic_subject'] . '</a> <br>' . $row['topic_date'];
                            }
                        }

                    }
                            
                echo '</td>';
            echo '</tr>';


        }
    }
}

            echo '<table border="1">
              <tr>
                <th><h3>Forum</h3></th>
                <th></th>
              </tr>'; 

     $sql = "SELECT
                cat_id,
                cat_name,
                cat_description
            FROM
                categories
            WHERE
                sectionID = 1";
 
 $result = mysql_query($sql);
 
if(!$result)
{
    echo 'The categories could not be displayed, please try again later.';
    echo 'Error : ' . mysql_error();
}
else
{
    if(mysql_num_rows($result) == 0)
    {
        echo 'No categories defined yet.';
    }
    else
    {


        while($row = mysql_fetch_assoc($result))
        {               
            echo '<tr>';
                echo '<td class="leftpart">';
                    echo '<a href="category.php?id='. $row['cat_id'].'">' . $row['cat_name'] . '</a><br></h3>' . $row['cat_description'];

                    //GET THE LATEST TOPIC.
                    $latest = "SELECT cat_name, topic_subject, topic_id, sectionID, latest as topic_date 
                            FROM categories c
                            LEFT JOIN ( 
                                SELECT topic_subject, topic_id, topic_cat, MAX(topic_date) latest 
                                FROM topics
                                GROUP BY topic_cat
                                 ) as t
                            ON c.cat_id = t.topic_cat";

                    $result2 = mysql_query($latest);

                    if(!$result2)
                    {
                            echo 'Error : ' . mysql_error();
                    }

                    else
                    {
                        echo '</td>';
                        echo '<td class="rightpart">';


                        if(mysql_num_rows($result2) == 0)
                        {
                            echo 'This category does not exist.';
                        }

                        else
                        {
                            while($row = mysql_fetch_assoc($result2))
                            {    
                                echo '<a href="topic.php?id='. $row['topic_id'] . '">' . $row['topic_subject'] . '</a> <br>' . $row['topic_date'];
                            }
                        }

                    }
                            
                echo '</td>';
            echo '</tr>';


        }
    }
}


include 'footer.php';
?>