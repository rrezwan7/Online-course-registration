<?php include 'header.php'; ?>
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

<form method="post" action="insert_data.php">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="pass" id="" class="form-control">
                </div>
                <div class="form-group">
                <label for="branch">Department</label>
                  <input type="text" name="branch" id="" class="form-control">
                </div>
                <div class="form-group">
                <label for="year">Semester</label>
                  <input type="text" name="year" id="" class="form-control">
                </div>
                <div class="form-group">
                <button class="btn btn-success" type="submit" value="Register">Submit</button>            
                </div>
</form>


<?php include 'footer.php'; ?>