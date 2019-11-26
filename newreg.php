<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysql_connect("localhost","root","") or die ("check your server connection.");

mysql_select_db("2008b4a5723p");
?>
<?php include 'header.php'; ?>

<div class="inner">
        
    <h2>New Student Registration</h2>
    <form method="post" action="insert_data.php">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input class="form-control mr-2" type="text" name="name" id="" >
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="pass" id="" class="form-control mr-2">
                </div>
                <div class="form-group">
                <label for="branch">Department</label>
                  <input type="text" name="branch" id="" class="form-control mr-2">
                </div>
                <div class="form-group">
                <label for="year">Semester</label>
                  <input type="text" name="year" id="" class="form-control mr-2">
                </div>
                
                <button class="btn btn-info btn-inline" type="submit" value="Register">Submit</button>            
                
    </form>
</div>


<?php include 'footer.php'; ?>