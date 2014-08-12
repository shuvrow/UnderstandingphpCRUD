<?php

    $db_name="onlinecourses";
    $sql='CREATE DATABASE IF NOT EXISTS '.$db_name;
    $link=mysql_connect('localhost','root','');
    if(mysql_query($sql,$link))
      {
        echo "Database created";  

      }
      else
        {
            echo "error".mysql_error();
        }



//table creation for student

      if(mysql_select_db("onlinecourses"))
      {
        $create_student_table="CREATE TABLE students(id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,studentId int(11),FirstName CHAR(30),LastName CHAR(30),Age INT(3),courses varchar(255))";
        if(mysql_query($create_student_table))
          {
              echo "DB created";
          }
          else
            {
                //echo "table not created ".mysql_error();
            }
      }
      else
        {
          echo "database not selected ".mysql_error();
        }

$student_id=$_GET['studentID'];
$student_first_name=$_GET['studentFirstName'];
$student_last_name=$_GET['studentLastName'];
$student_age=$_GET['studentAge'];
$course_name=$_GET['courseName'];

/*$update_value = "UPDATE onlinecourses ".
       "SET studentId = $student_id ".
        "SET FirstName = $student_first_name ".
       "SET LastName = $student_last_name" ;
        "SET Age = $student_age ".
       "SET courses = $course_name" ;*/
       $update_value="Insert into students (studentId,FirstName,LastName,Age,courses) 
       				  values ('$student_id','$student_first_name','$student_last_name','$student_age','$course_name')";
                mysql_query($update_value);

?>