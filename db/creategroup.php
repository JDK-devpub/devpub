<?php
    include("dbconfig.php");
    session_start();
     if(isset($_SESSION['globalID'])){
      $id = $_SESSION['globalID'];
      
       if(isset($_POST["submit"]))
        {
            $gname = $_POST['gname'];
            $pname = $_POST['pname'];
            $pdes = $_POST['pdes'];
            
            for($i = 1; $i < 6; $i++ ){
                $abc = "member";
                $number = $i;
                $result = $abc . $number;
                echo $result;
                $member = $_POST[$result];

                $sql_one="SELECT id FROM users WHERE nickname='$member'";
                $result_one=mysqli_query($dbconfig,$sql_one);
                $row_one=mysqli_fetch_array($result_one,MYSQLI_ASSOC);
                if(mysqli_num_rows($result_one) == 1)
                {
                    $one = $row_one['id'];
                    if($i == 1){
                    
                    $sqlpro = "insert into project (project_name,project_description) values ('$pname','$pdes')";
                    $proquery = mysqli_query($dbconfig,$sqlpro);
                    //ssssss
                    $select = "select project_id from project where project_name='$pname'";
                    $selectq = mysqli_query($dbconfig,$select);
                    $prorow = mysqli_fetch_array($selectq,MYSQLI_ASSOC);
                    if(mysqli_num_rows($selectq) == 1){
                        $ongoing_project = $prorow['project_id'];
                    }

                        //insert into group_work table
                    $sql =  "INSERT INTO group_work(group_name,leader_id,ongoing_project) values ('$gname','$id','$ongoing_project')";
                    $query = mysqli_query($dbconfig,$sql);
                    
                     //retrieving group_id after inserting
                     $sql2 = "SELECT group_id from group_work WHERE leader_id='$id'";
                    $query2 = mysqli_query($dbconfig,$sql2);
                    $row_two=mysqli_fetch_array($query2,MYSQLI_ASSOC);
                        if(mysqli_num_rows($query2) == 1){
                            $group_id = $row_two['group_id'];
                        }

                    }
                    //insert into group member table
                    $sql3 = "INSERT INTO group_members(group_id,member_id) values ('$group_id','$one')";
                    $query3 = mysqli_query($dbconfig,$sql3);
                    if($query3){
                        header('location:crewpage.php');
                    }
                }
            }
        }
     }
?>