<?php
//create_cat.php
include 'header.php';
include '../dbconfig.php';
 
         //prepare the table
        echo '<table border="1">
              <tr>
                <th><h3>Front Desks</h3></th>
                <th><h3>Latest Topic</h3></th>
              </tr>'; 



$sql = "SELECT
            cat_id,
            cat_name,
            cat_description
        FROM
            categories
        WHERE
            sectionID = 0";
 
$result = mysqli_query($dbconfig,$sql);
 
if(!$result)
{
    echo 'The categories could not be displayed, please try again later.';
    echo 'Error : ' . mysql_error();
}
else
{
    if(mysqli_num_rows($result) == 0)
    {
        echo 'No categories defined yet.';
    }
    else
    {
        while($row = mysqli_fetch_assoc($result))
        {               
            echo '<tr>';
                echo '<td class="leftpart">';
                    echo '<a href="category.php?id='. $row['cat_id'].'">' . $row['cat_name'] . '</a><br></h3>' . $row['cat_description'];

                    $cat_id = $row['cat_id'];

            //echo '<script type="text/javascript">alert("'.$cat_id.'");</script>';

                    $latest = "SELECT topic_id, topic_subject, topic_date 
                                FROM topics T1
                                WHERE topic_date = (
                                SELECT max(topic_date)
                                FROM topics T2
                                WHERE $cat_id = T2.topic_cat)";

                    $result2 = mysqli_query($dbconfig,$latest);

                    if(!$result2)
                    {
                            echo 'Error : ' . mysql_error();
                    }

                    else
                    {
                        echo '</td>';
                        echo '<td class="rightpart">';


                        if(mysqli_num_rows($result2) == 0)
                        {
                            echo 'This category does not have any topic yet.';
                        }

                        else
                        {
                            while($row = mysqli_fetch_assoc($result2))
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
                <th><h3>Latest Topic</h3></th>
              </tr>'; 

     $sql = "SELECT
                cat_id,
                cat_name,
                cat_description
            FROM
                categories
            WHERE
                sectionID = 1";


 
 $result = mysqli_query($dbconfig,$sql);
 
if(!$result)
{
    echo 'The categories could not be displayed, please try again later.';
    echo 'Error : ' . mysql_error();
}
else
{
    if(mysqli_num_rows($result) == 0)
    {
        echo 'No categories defined yet.';
    }
    else
    {


        while($row = mysqli_fetch_assoc($result))
        {     
            echo '<tr>';
                echo '<td class="leftpart">';
                    echo '<a href="category.php?id='. $row['cat_id'].'">' . $row['cat_name'] . '</a><br></h3>' . $row['cat_description'];

                    //GET VARIABLE TO USE IN SQL

                        echo '</td>';
                        echo '<td class="rightpart">';

                    
                            
                echo '</td>';
            echo '</tr>';


        }
    }
}


include 'footer.php';
?>