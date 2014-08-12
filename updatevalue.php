<?php


mysql_connect('localhost','root','');
if(mysql_select_db("onlinecourses"))
	{
		echo "database selected";


	}
	else
		{

			echo "not selected ".mysql_error();
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
       if(!mysql_query($update_value))
       {
       	/*$show_value=mysql_query("SHOW *form students");
       	echo $show_value;*/
       	//echo $update_value;
       	echo "<br/>";
       	echo "failed ".mysql_error();
       }
?>