<?php
    $db_name="onlinecourses";
    $link=mysql_connect('localhost','root','');
  /*  if(!$link)
      {
        echo "not connected" .mysql_error();
      }
      else
        {
          echo "Db connected";
        }*/
    

    $sql='CREATE DATABASE IF NOT EXISTS '.$db_name;
    if(mysql_query($sql,$link))
      {
        //echo "Database created";  

      }
      else
        {
            echo "error".mysql_error();
        }
    
    if(mysql_select_db("onlinecourses"))
      {
        $create_course_table="CREATE TABLE courses(id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,courseName varchar(100),courseCode varchar(100))";
        if(mysql_query($create_course_table))
          {
              //echo "DB created";
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
?>