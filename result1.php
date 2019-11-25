<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}

$name= $_POST['myusername'];
$pass= $_POST['mypassword'];


if($name!="admin" && $pass!="admin")
  {
echo"ACCESS DENIED";
exit();
}

include 'header.php'; 
?>

    <div class="form">
        <h2>Teacher's Panel</h2>
        <form class="form-inline" action="select_course.php" method="post">
            <div class="form-group">
                
                <input class="form-control mr-2" type="text" name="cname" placeholder="Course ID">
            </div>
                <input class="btn btn-info btn-inline" type="submit" value="Students Enrolled">
        </form>
        <form class="form-inline" action="select_student.php" method="post">
            <div class="form-group">
            
            <input class="form-control mr-2" type="text" name="name" placeholder="Student Name">
            </div>
            <input class="btn btn-info" type="submit" value="Courses Enrolled">
        
        
        </form>
        <form action="add_course.php" method="post">
            <input type="submit" class="btn btn-info" value="Add New Course">
        </form>

    </div>






<?php include 'footer.php'; ?>