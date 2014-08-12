<?php
    $db_name="onlinecourses";
    $link=mysql_connect('localhost','root','');
  

    $sql='CREATE DATABASE IF NOT EXISTS '.$db_name;
    if(mysql_query($sql,$link))
      {
        echo "Database created";  

      }
      else
        {
            echo "error".mysql_error();
        }




        $select_db=mysql_select_db("onlinecourses");
    
    if($select_db)
      {
        $create_course_table="CREATE TABLE courses(id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,courseName varchar(100),courseCode varchar(100))";
        if(mysql_query($create_course_table))
          {
              echo "DB created";
          }
          else
            {
              echo "<br/>";
                echo "table not created ".mysql_error();
            }
      }
      else
        {
          echo "database not selected ".mysql_error();
        }



        $course_id=$_GET['courseID'];
        $course_code=$_GET['courseCode'];
     


       $update_value="Insert into courses (courseName,courseCode) 
                values ('$course_id','$course_code')";

                mysql_query($update_value);
?>