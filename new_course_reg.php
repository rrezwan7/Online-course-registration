<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysql_connect("localhost","root","") or die ("check your server connection.");

mysql_select_db("2008b4a5723p");


$query="SELECT course.name FROM course";
$results=mysql_query($query) or die(mysql_error());
include 'header.php';
echo " <div class=col-md-6> <div class=inner>";
echo"<h2>Available courses</h2> <ol>\n";
while ($rows=mysql_fetch_assoc($results)) {

foreach($rows as $value) 
{
echo "<li><span class=h3>";
echo $value; 
echo "</span></li>\n"; 
}
}
echo "</ol> </div></div> \n";
?>
<div class="col-md-6">
    <div class="inner">
        <h2>New Course Registration</h2>
        <form  action="student_course.php" method="post">
            <div class="form-group">
                <label for="name">Your User Name: </label>
                <input class="form-control mr-2" type="text" name="name" >
            </div>
            <div class="form-group">
                <label for="credit">Course ID: </label>
                <input class="form-control mr-2" type="text" name="course" >
            </div>
            <input class="btn btn-info btn-inline" type="submit" value="Register">
</div>
</div>
</div>

<?php include 'footer.php' ?>