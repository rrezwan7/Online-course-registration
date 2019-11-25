<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysql_connect("localhost", "root", "") or die ("check your server connection.");

mysql_select_db("2008b4a5723p");

$name = $_POST['name'];
$credit = $_POST['credit'];
$instructor = $_POST['instructor'];

if($name=='' or $credit=='' or $instructor=='')
echo"ERROR IN REGISTRATION";

else{
$insert = "INSERT INTO course(name,credit,instructor)
values('$name','$credit','$instructor')";

$results=mysql_query($insert) or die(mysql_error());

include 'header.php'; 

echo "<h1>Successfully added information</h1>";
}
?>

<a href="add_course.php">
<button class="btn btn-success">
Back to Add Course Page
</button></a>

<?php include 'footer.php'; ?>