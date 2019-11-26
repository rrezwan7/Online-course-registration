<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}

include 'header.php'; 
?>
   <div class="inner">
        <h2>New Course Registration</h2>
        <form  action="insert_course.php" method="post">
            <div class="form-group">
                <label for="name">Course ID: </label>
                <input class="form-control mr-2" type="text" name="name" >
            </div>
            <div class="form-group">
                <label for="credit">Credit: </label>
                <input class="form-control mr-2" type="text" name="credit" >
            </div>
            <div class="form-group">
                <label for="instructor">Instructor: </label>
                <input class="form-control mr-2" type="text" name="instructor">
            </div>
                <input class="btn btn-info btn-inline" type="submit" value="Register">
        </form>
    

    </div>

    <?php include 'footer.php'; ?>